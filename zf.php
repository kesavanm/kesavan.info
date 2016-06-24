<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's Personal Bookmarks</title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">

<link rel="icon" href="k7.png">
  </head>

  <body>
<?
include('head.php');
?>
<p>
<pre>
================= GETTING ZEND FRAMEWORK =================

	http://downloads.zend.com/framework/1.11.10/ZendFramework-1.11.10.tar.gz

================== SETTING ZEND FRAMEWORK =================

root@Ideapad-Z460:/home/priya# PATH=$PATH:/home/priya/ZendFramework-1.11.10/bin
root@Ideapad-Z460:/home/priya# echo $PATH
/home/priya/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/home/priya/ZendFramework-1.11.10/bin

================= PHP.INI Settings ========================

root@Ideapad-Z460:/home/priya# php -i |grep php.ini
Configuration File (php.ini) Path => /etc/php5/cli
Loaded Configuration File => /etc/php5/cli/php.ini
root@Ideapad-Z460:/home/priya# vi /etc/php5/cli/php.ini

	display_errors = On

================== CREATE NEW PROJECT ======================

root@Ideapad-Z460:/home/priya# zf create project /var/www/yaazh
Creating project at /var/www/yaazh
Note: This command created a web project, for more information setting up your VHOST, please see docs/README
Testing Note: PHPUnit was not found in your include_path, therefore no testing actions will be created.

================== SETTING UP VHOST  ========================
                              
root@Ideapad-Z460:/home/priya# vi /etc/hosts

	127.0.0.1       yaazh.local

root@Ideapad-Z460:/home/priya# vi /etc/apache2/sites-enabled/000-default

	<VirtualHost *:80>
	   DocumentRoot "/var/www/yaazh/public"
	   ServerName yaazh.local

	   # This should be omitted in the production environment
	   SetEnv APPLICATION_ENV development

	   <Directory "/var/www/yaazh/public">
	       Options Indexes MultiViews FollowSymLinks
	       AllowOverride All
	       Order allow,deny
	       Allow from all
	   </Directory>

	</VirtualHost>

================= ENABLE APACHE MODULES =======================

root@Ideapad-Z460:/home/priya# mv /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/

================= ADD LIB PATH ================================

root@Ideapad-Z460:/home/priya# /var/www/yaazh/public/index.php

	// Ensure library/ is on include_path
	set_include_path(implode(PATH_SEPARATOR, array(
	    realpath(APPLICATION_PATH . '/../library'),
		'/home/priya/ZendFramework-1.11.10/library',
	    get_include_path(),
	)));

================== RESTART ALL ====================

root@Ideapad-Z460:/home/priya# service apache2 restart
	 * Restarting web server apache2	apache2: apr_sockaddr_info_get() failed for Ideapad-Z460
	apache2: Could not reliably determine the server's fully qualified domain name, using 127.0.0.1 for ServerName
	 ... waiting apache2: apr_sockaddr_info_get() failed for Ideapad-Z460
	apache2: Could not reliably determine the server's fully qualified domain name, using 127.0.0.1 for ServerName
           
================= DONE !!! ========================

Point browser to http://yaazh.local/

</pre>
<br>
&nbsp;

<?
include('tail.php');
?>


