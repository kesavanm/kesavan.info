<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Kesavan Muthuvel's Tricks for Web Development</title>
    <link rel="shortcut icon" href="kesavan.png" type="image/x-icon">
    <link rel="icon" href="k7.png">
  </head>
	<body> 
		
	<?	include('head.php');	?>
<h3>Tricks for Web Development</h3>
<center>
	<form>
		<p>What are you looing for ? <input id="keywords" size="48" placeholder="start typing , I prefer mozilla">
		<small>
			<span id="counter" style="color: blue;"><!-- --></span>
			<span id="navigate" style="display: none;">
			<button id="cancel">&times;</button>
			<button id="prev">&laquo;</button>
			<button id="next">&raquo;</button>
			</span>
		</small>
		</p>
	</form>
</center>
	<div id="playground" 
		style="margin: 1em 0; padding: 0 1em; height: 2400px; overflow: auto; border: 1px solid #ccc; box-shadow: inset 0 5px 5px rgba(0,0,0,0.1); font-size: 0.9em;">

		
<pre><?php include_once('quick-commands-web-dev.txt');?></pre>

</div>

<div id="regex" style="font-family: monospace; font-size: 0.8em; color: green;"> <!-- Regex: - --></div>

<pre>Thanks for <a  href='http://twitter.com/theartofweb' target='_blank'>@theartofweb</a> for their <a  href='http://www.the-art-of-web.com/javascript/search-highlight/' target='_blank' >Search Keyword Highlighting</a>

<?php include_once('tail.php');?>

<script type="text/javascript">
function Hilitor2(id, tag) {
    var targetNode = document.getElementById(id) || document.body;
    var hiliteTag = tag || "EM";
    var skipTags = new RegExp("^(?:" + hiliteTag + "|SCRIPT|FORM)$");
    var colors = ["#ff6", "#a0ffff", "#9f9", "#f99", "#f6f"];
    var wordColor = [];
    var colorIdx = 0;
    var matchRegex = "";
    var openLeft = false;
    var openRight = false;
    this.setMatchType = function(type) {
        switch (type) {
            case "left":
                this.openLeft = false;
                this.openRight = true;
                break;
            case "right":
                this.openLeft = true;
                this.openRight = false;
                break;
            case "open":
                this.openLeft = this.openRight = true;
                break;
            default:
                this.openLeft = this.openRight = false;
        }
    };

    function addAccents(input) {
        retval = input;
        retval = retval.replace(/([ao])e/ig, "$1");
        retval = retval.replace(/\\u00E[024]/ig, "a");
        retval = retval.replace(/\\u00E7/ig, "c");
        retval = retval.replace(/\\u00E[89AB]/ig, "e");
        retval = retval.replace(/\\u00E[EF]/ig, "i");
        retval = retval.replace(/\\u00F[46]/ig, "o");
        retval = retval.replace(/\\u00F[9BC]/ig, "u");
        retval = retval.replace(/\\u00FF/ig, "y");
        retval = retval.replace(/\\u00DF/ig, "s");
        retval = retval.replace(/a/ig, "([aÃ Ã¢Ã¤]|ae)");
        retval = retval.replace(/c/ig, "[cÃ§]");
        retval = retval.replace(/e/ig, "[eÃ¨Ã©ÃªÃ«]");
        retval = retval.replace(/i/ig, "[iÃ®Ã¯]");
        retval = retval.replace(/o/ig, "([oÃ´Ã¶]|oe)");
        retval = retval.replace(/u/ig, "[uÃ¹Ã»Ã¼]");
        retval = retval.replace(/y/ig, "[yÃ¿]");
        retval = retval.replace(/s/ig, "(ss|[sÃŸ])");
        return retval;
    }
    this.setRegex = function(input) {
        input = input.replace(/\\([^u]|$)/g, "$1");
        input = input.replace(/[^\w\\\s']+/g, "").replace(/\s+/g, "|");
        input = input.replace(/^\||\|$/g, "");
        input = addAccents(input);
        if (input) {
            var re = "(" + input + ")";
            if (!this.openLeft) re = "(?:^|[\\b\\s])" + re;
            if (!this.openRight) re = re + "(?:[\\b\\s]|$)";
            matchRegex = new RegExp(re, "i");
            return true;
        }
        return false;
    };
    this.getRegex = function() {
        var retval = matchRegex.toString();
        retval = retval.replace(/(^\/|\(\?:[^\)]+\)|\/i$)/g, "");
        return retval;
    };
    this.hiliteWords = function(node) {
        if (node === undefined || !node) return;
        if (!matchRegex) return;
        if (skipTags.test(node.nodeName)) return;
        if (node.hasChildNodes()) {
            for (var i = 0; i < node.childNodes.length; i++) this.hiliteWords(node.childNodes[i]);
        }
        if (node.nodeType == 3) {
            if ((nv = node.nodeValue) && (regs = matchRegex.exec(nv))) {
                if (!wordColor[regs[1].toLowerCase()]) {
                    wordColor[regs[1].toLowerCase()] = colors[colorIdx++ % colors.length];
                }
                var match = document.createElement(hiliteTag);
                match.appendChild(document.createTextNode(regs[1]));
                match.style.backgroundColor = wordColor[regs[1].toLowerCase()];
                match.style.fontStyle = "inherit";
                match.style.color = "#000";
                var after;
                if (regs[0].match(/^\s/)) {
                    after = node.splitText(regs.index + 1);
                } else {
                    after = node.splitText(regs.index);
                }
                after.nodeValue = after.nodeValue.substring(regs[1].length);
                node.parentNode.insertBefore(match, after);
            }
        };
    };
    this.remove = function() {
        var arr = document.getElementsByTagName(hiliteTag);
        while (arr.length && (el = arr[0])) {
            var parent = el.parentNode;
            parent.replaceChild(el.firstChild, el);
            parent.normalize();
        }
    };
    this.apply = function(input) {
        this.remove();
        if (input === undefined || !(input = input.replace(/(^\s+|\s+$)/g, ""))) return;
        input = convertCharStr2jEsc(input);
        if (this.setRegex(input)) {
            this.hiliteWords(targetNode);
        }
    };

    function dec2hex4(textString) {
        var hexequiv = new Array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9", "A", "B", "C", "D", "E", "F");
        return hexequiv[(textString >> 12) & 0xF] + hexequiv[(textString >> 8) & 0xF] + hexequiv[(textString >> 4) & 0xF] + hexequiv[textString & 0xF];
    }

    function convertCharStr2jEsc(str, cstyle) {
        var highsurrogate = 0;
        var suppCP;
        var pad;
        var n = 0;
        var outputString = '';
        for (var i = 0; i < str.length; i++) {
            var cc = str.charCodeAt(i);
            if (cc < 0 || cc > 0xFFFF) {
                outputString += '!Error in convertCharStr2UTF16: unexpected charCodeAt result, cc=' + cc + '!';
            }
            if (highsurrogate != 0) {
                if (0xDC00 <= cc && cc <= 0xDFFF) {
                    suppCP = 0x10000 + ((highsurrogate - 0xD800) << 10) + (cc - 0xDC00);
                    if (cstyle) {
                        pad = suppCP.toString(16);
                        while (pad.length < 8) {
                            pad = '0' + pad;
                        }
                        outputString += '\\U' + pad;
                    } else {
                        suppCP -= 0x10000;
                        outputString += '\\u' + dec2hex4(0xD800 | (suppCP >> 10)) + '\\u' + dec2hex4(0xDC00 | (suppCP & 0x3FF));
                    }
                    highsurrogate = 0;
                    continue;
                } else {
                    outputString += 'Error in convertCharStr2UTF16: low surrogate expected, cc=' + cc + '!';
                    highsurrogate = 0;
                }
            }
            if (0xD800 <= cc && cc <= 0xDBFF) {
                highsurrogate = cc;
            } else {
                switch (cc) {
                    case 0:
                        outputString += '\\0';
                        break;
                    case 8:
                        outputString += '\\b';
                        break;
                    case 9:
                        outputString += '\\t';
                        break;
                    case 10:
                        outputString += '\\n';
                        break;
                    case 13:
                        outputString += '\\r';
                        break;
                    case 11:
                        outputString += '\\v';
                        break;
                    case 12:
                        outputString += '\\f';
                        break;
                    case 34:
                        outputString += '\\\"';
                        break;
                    case 39:
                        outputString += '\\\'';
                        break;
                    case 92:
                        outputString += '\\\\';
                        break;
                    default:
                        if (cc > 0x1f && cc < 0x7F) {
                            outputString += String.fromCharCode(cc);
                        } else {
                            pad = cc.toString(16).toUpperCase();
                            while (pad.length < 4) {
                                pad = '0' + pad;
                            }
                            outputString += '\\u' + pad;
                        }
                }
            }
        }
        return outputString;
    }
}



</script>


<script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {
        var myHilitor = new Hilitor2("playground");
        myHilitor.setMatchType("left");
        var matchIndex = -1;
        var matchArr = [];
        var container = document.getElementById("playground");
        var searchEl = document.getElementById("keywords");
        var counterEl = document.getElementById("counter");
        var navEl = document.getElementById("navigate");
        var navPre = document.getElementById("prev");
        var navNext = document.getElementById("next");
        var navCancel = document.getElementById("cancel");
        var regexEl = document.getElementById("regex")
        var searchTrigger = function() {
            myHilitor.apply(searchEl.value);
	    /*            regexEl.innerHTML = "Regex: " + myHilitor.getRegex();	*/
            displayNavigation();
        };
        searchEl.addEventListener("keyup", searchTrigger, false);
        navPre.addEventListener("click", function(e) {
            doNav(-1);
            e.preventDefault();
        }, false);
        navNext.addEventListener("click", function(e) {
            doNav(1);
            e.preventDefault();
        }, false);
        navCancel.addEventListener("click", function(e) {
            searchEl.value = "";
            searchTrigger();
            regexEl.innerHTML = counterEl.innerHTML = "";
            container.scrollTop = 0;
            e.preventDefault();
        }, false);
        var displayNavigation = function() {
            matchArr = container.getElementsByTagName("EM");
            var countText = matchArr.length + " match"
            if (matchArr.length != 1) countText += "es";
            counterEl.innerHTML = countText;
            matchIndex = -1;
            if (matchArr.length) {
                navEl.style.display = "inline";
                navPre.disabled = true;
                navNext.disabled = false;
            } else {
                navEl.style.display = "none";
            }
        };
        var doNav = function(offset) {
            matchIndex += offset;
            matchIndex = matchIndex % matchArr.length;
            matchArr[matchIndex].scrollIntoView(true);
            for (var i = 0; i < matchArr.length; i++) {
                matchArr[i].style.outline = (matchIndex == i) ? "2px solid rgba(204,0,0,0.5)" : "";
            }
            if (matchArr.length) {
                navEl.style.display = "inline";
                navPre.disabled = (matchIndex <= 0);
                navNext.disabled = (matchIndex >= matchArr.length - 1);
            } else {
                navEl.style.display = "none";
            }
        };
    }, false);
</script>
