<?php
// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Twitter API v2 Configuration
define('BEARER_TOKEN', ''); // Add your bearer token here
define('API_ENDPOINT', 'https://api.twitter.com/2/users/by/username/kesavan2000in');
define('CACHE_FILE', __DIR__ . '/twitter_cache.json');
define('CACHE_LIFETIME', 3 * 3600); // 3 hours in seconds

function getTwitterUserId($bearerToken) {
    try {
        $ch = curl_init();
        
        $headers = array(
            'Authorization: Bearer ' . $bearerToken,
        );
        
        curl_setopt($ch, CURLOPT_URL, API_ENDPOINT);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $response = curl_exec($ch);
        $err = curl_error($ch);
        curl_close($ch);
        
        if ($err) {
            error_log('Error fetching user ID: ' . $err);
            return false;
        }
        
        $result = json_decode($response, true);
        return isset($result['data']['id']) ? $result['data']['id'] : false;
    } catch (Exception $e) {
        error_log('Error fetching user ID: ' . $e->getMessage());
        return false;
    }
}

function getUserTweets($userId, $bearerToken) {
    if (!$userId) return false;
    
    try {
        $tweetsEndpoint = "https://api.twitter.com/2/users/{$userId}/tweets";
        $params = array(
            'max_results' => 10,
            'tweet.fields' => 'created_at,text,id',
            'expansions' => 'author_id',
            'user.fields' => 'name,username'
        );
        
        $ch = curl_init();
        
        $headers = array(
            'Authorization: Bearer ' . $bearerToken,
        );
        
        $queryString = http_build_query($params);
        $fullUrl = $tweetsEndpoint . '?' . $queryString;
        
        curl_setopt($ch, CURLOPT_URL, $fullUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        
        $response = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err = curl_error($ch);
        curl_close($ch);
        
        // Check for curl errors or non-200 HTTP status
        if ($err || $httpCode !== 200) {
            error_log('Error fetching tweets: ' . $err . ' (HTTP Code: ' . $httpCode . ')');
            
            // Attempt to retrieve cached tweets
            $cachedData = getCache();
            if ($cachedData) {
                error_log('Falling back to cached tweets');
                return $cachedData;
            }
            
            return false;
        }
        
        $result = json_decode($response, true);
        
        // Cache the fetched tweets
        if (!empty($result['data'])) {
            setCache($result);
        }
        
        return $result;
    } catch (Exception $e) {
        error_log('Exception in getUserTweets: ' . $e->getMessage());
        
        // Attempt to retrieve cached tweets on exception
        $cachedData = getCache();
        if ($cachedData) {
            error_log('Falling back to cached tweets due to exception');
            return $cachedData;
        }
        
        return false;
    }
}

function isCacheValid() {
    try {
        if (!file_exists(CACHE_FILE)) {
            return false;
        }
        
        if (!is_readable(CACHE_FILE)) {
            error_log('Cache file is not readable');
            return false;
        }
        
        $cacheTime = filemtime(CACHE_FILE);
        return (time() - $cacheTime) < CACHE_LIFETIME;
    } catch (Exception $e) {
        error_log('Cache validation error: ' . $e->getMessage());
        return false;
    }
}

function getCache() {
    try {
        if (!file_exists(CACHE_FILE)) {
            return null;
        }
        $content = file_get_contents(CACHE_FILE);
        if ($content === false) {
            error_log('Failed to read cache file');
            return null;
        }
        return json_decode($content, true);
    } catch (Exception $e) {
        error_log('Cache read error: ' . $e->getMessage());
        return null;
    }
}

function setCache($data) {
    try {
        $dir = dirname(CACHE_FILE);
        if (!is_dir($dir)) {
            mkdir($dir, 0755, true);
        }
        
        if (file_put_contents(CACHE_FILE, json_encode($data)) === false) {
            error_log('Failed to write to cache file');
            return false;
        }
        return true;
    } catch (Exception $e) {
        error_log('Cache write error: ' . $e->getMessage());
        return false;
    }
}

// Main execution
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *'); // Allow cross-origin requests

if (!BEARER_TOKEN) {
    http_response_code(401);
    echo json_encode(['error' => 'Bearer token not configured. Please add your Twitter API token to the configuration.']);
    exit;
}

// Check cache first
if (isCacheValid()) {
    $cachedData = getCache();
    if ($cachedData) {
        header('X-Cache: HIT');
        echo json_encode($cachedData);
        exit;
    }
}

// If cache is invalid or doesn't exist, fetch fresh data
try {
    $userId = getTwitterUserId(BEARER_TOKEN);
    if ($userId) {
        $tweets = getUserTweets($userId, BEARER_TOKEN);
        if ($tweets && isset($tweets['data'])) {
            // Store in cache
            if (setCache($tweets)) {
                header('X-Cache: MISS');
                echo json_encode($tweets);
            } else {
                echo json_encode(['error' => 'Failed to cache tweets, but data retrieved successfully', 'data' => $tweets['data']]);
            }
        } else {
            http_response_code(500);
            echo json_encode(['error' => 'Failed to fetch tweets. Response: ' . json_encode($tweets)]);
        }
    } else {
        http_response_code(404);
        echo json_encode(['error' => 'Failed to get user ID for kesavan2000in']);
    }
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Server error: ' . $e->getMessage()]);
}
