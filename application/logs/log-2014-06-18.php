<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2014-06-18 20:07:25 --> Config Class Initialized
DEBUG - 2014-06-18 20:07:25 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:07:25 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:07:25 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:07:25 --> URI Class Initialized
DEBUG - 2014-06-18 20:07:25 --> Router Class Initialized
DEBUG - 2014-06-18 20:07:25 --> Output Class Initialized
DEBUG - 2014-06-18 20:07:25 --> Security Class Initialized
DEBUG - 2014-06-18 20:07:25 --> Input Class Initialized
DEBUG - 2014-06-18 20:07:25 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:07:25 --> Language Class Initialized
DEBUG - 2014-06-18 20:07:25 --> Loader Class Initialized
DEBUG - 2014-06-18 20:07:25 --> Controller Class Initialized
INFO  - 2014-06-18 20:07:25 --> user agent is: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36
INFO  - 2014-06-18 20:07:26 --> <!DOCTYPE html>
<html>
<head>
<title>Live preview for Website Template #49329</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="utf-8"><script type="text/javascript">(window.NREUM||(NREUM={})).loader_config={xpid:"VQQHVVRXGwEJV1hVDwI="};window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(t,e){function n(t,e,n){n||(n={});for(var r=o[t],a=r&&r.length||0,s=n[i]||(n[i]={}),u=0;a>u;u++)r[u].apply(s,e);return s}function r(t,e){var n=o[t]||(o[t]=[]);n.push(e)}var o={},i="nr@context";e.exports={on:r,emit:n}},{}],2:[function(t){function e(t,e,n,i,s){return u?u-=1:r("err",[s||new UncaughtException(t,e,n)]),"function"==typeof a?a.apply(this,o(arguments)):!1}function UncaughtException(t,e,n){this.message=t||"Uncaught error with no additional information",this.sourceURL=e,this.line=n}function n(t){r("err",[t,(new Date).getTime()])}var r=t("handle"),o=t(6),i=t(5),a=window.onerror,s=!1,u=0;t("loader").features.push("err"),window.onerror=e,NREUM.noticeError=n;try{throw new Error}catch(d){"stack"in d&&(t(1),t(2),"addEventListener"in window&&t(3),window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&t(4),s=!0)}i.on("fn-start",function(){s&&(u+=1)}),i.on("fn-err",function(t,e,r){s&&(this.thrown=!0,n(r))}),i.on("fn-end",function(){s&&!this.thrown&&u>0&&(u-=1)}),i.on("internal-error",function(t){r("ierr",[t,(new Date).getTime(),!0])})},{1:5,2:4,3:3,4:6,5:1,6:14,handle:"D5DuLP",loader:"G9z0Bl"}],3:[function(t){function e(t){r.inPlace(t,["addEventListener","removeEventListener"],"-",n)}function n(t){return t[1]}var r=t(1),o=(t(3),t(2));if(e(window),"getPrototypeOf"in Object){for(var i=document;i&&!i.hasOwnProperty("addEventListener");)i=Object.getPrototypeOf(i);i&&e(i);for(var a=XMLHttpRequest.prototype;a&&!a.hasOwnProperty("addEventListener");)a=Object.getPrototypeOf(a);a&&e(a)}else XMLHttpRequest.prototype.hasOwnProperty("addEventListener")&&e(XMLHttpRequest.prototype);o.on("addEventListener-start",function(t){if(t[1]){var e=t[1];"function"==typeof e?this.wrapped=e["nr@wrapped"]?t[1]=e["nr@wrapped"]:e["nr@wrapped"]=t[1]=r(e,"fn-"):"function"==typeof e.handleEvent&&r.inPlace(e,["handleEvent"],"fn-")}}),o.on("removeEventListener-start",function(t){var e=this.wrapped;e&&(t[1]=e)})},{1:15,2:1,3:14}],4:[function(t){var e=(t(3),t(1)),n=t(2);e.inPlace(window,["requestAnimationFrame","mozRequestAnimationFrame","webkitRequestAnimationFrame","msRequestAnimationFrame"],"raf-"),n.on("raf-start",function(t){t[0]=e(t[0],"fn-")})},{1:15,2:1,3:14}],5:[function(t){function e(t){var e=t[0];"string"==typeof e&&(e=new Function(e)),t[0]=n(e,"fn-")}var n=(t(3),t(1)),r=t(2);n.inPlace(window,["setTimeout","setInterval","setImmediate"],"setTimer-"),r.on("setTimer-start",e)},{1:15,2:1,3:14}],6:[function(t){function e(){o.inPlace(this,s,"fn-")}function n(t,e){o.inPlace(e,["onreadystatechange"],"fn-")}function r(t,e){return e}var o=t(1),i=t(2),a=window.XMLHttpRequest,s=["onload","onerror","onabort","onloadstart","onloadend","onprogress","ontimeout"];window.XMLHttpRequest=function(t){var n=new a(t);try{i.emit("new-xhr",[],n),o.inPlace(n,["addEventListener","removeEventListener"],"-",function(t,e){return e}),n.addEventListener("readystatechange",e,!1)}catch(r){try{i.emit("internal-error",r)}catch(s){}}return n},window.XMLHttpRequest.prototype=a.prototype,o.inPlace(XMLHttpRequest.prototype,["open","send"],"-xhr-",r),i.on("send-xhr-start",n),i.on("open-xhr-start",n)},{1:15,2:1}],7:[function(t){function e(){function e(t){if("string"==typeof t&&t.length)return t.length;if("object"!=typeof t)return void 0;if("undefined"!=typeof ArrayBuffer&&t instanceof ArrayBuffer&&t.byteLength)return t.byteLength;if("undefined"!=typeof Blob&&t instanceof Blob&&t.size)return t.size;if("undefined"!=typeof FormData&&t instanceof FormData)return void 0;try{return JSON.stringify(t).length}catch(e){return void 0}}function n(t){var n=this.params,r=this.metrics;if(!this.ended){this.ended=!0;for(var i=0;u>i;i++)t.removeEventListener(s[i],this.listener,!1);if(!n.aborted){if(r.duration=(new Date).getTime()-this.startTime,4===t.readyState){n.status=t.status;var a=t.responseType,d="arraybuffer"===a||"blob"===a||"json"===a?t.response:t.responseText,f=e(d);if(f&&(r.rxSize=f),this.sameOrigin){var c=t.getResponseHeader("X-NewRelic-App-Data");c&&(n.cat=c.split(", ").pop())}}else n.status=0;r.cbTime=this.cbTime,o("xhr",[n,r])}}}function r(t,e){var n=i(e),r=t.params;r.host=n.hostname+":"+n.port,r.pathname=n.pathname,t.sameOrigin=n.sameOrigin}t("loader").features.push("xhr");var o=t("handle"),i=t(1),a=t(5),s=["load","error","abort","timeout"],u=s.length,d=t(2);t(3),t(4),a.on("new-xhr",function(){this.totalCbs=0,this.called=0,this.cbTime=0,this.end=n,this.ended=!1,this.xhrGuids={}}),a.on("open-xhr-start",function(t){this.params={method:t[0]},r(this,t[1]),this.metrics={}}),a.on("open-xhr-end",function(t,e){"loader_config"in NREUM&&"xpid"in NREUM.loader_config&&this.sameOrigin&&e.setRequestHeader("X-NewRelic-ID",NREUM.loader_config.xpid)}),a.on("send-xhr-start",function(t,n){var r=this.metrics,o=t[0],i=this;if(r&&o){var d=e(o);d&&(r.txSize=d)}this.startTime=(new Date).getTime(),this.listener=function(t){try{"abort"===t.type&&(i.params.aborted=!0),("load"!==t.type||i.called===i.totalCbs&&(i.onloadCalled||"function"!=typeof n.onload))&&i.end(n)}catch(e){try{a.emit("internal-error",e)}catch(r){}}};for(var f=0;u>f;f++)n.addEventListener(s[f],this.listener,!1)}),a.on("xhr-cb-time",function(t,e,n){this.cbTime+=t,e?this.onloadCalled=!0:this.called+=1,this.called!==this.totalCbs||!this.onloadCalled&&"function"==typeof n.onload||this.end(n)}),a.on("xhr-load-added",function(t,e){var n=""+d(t)+!!e;this.xhrGuids&&!this.xhrGuids[n]&&(this.xhrGuids[n]=!0,this.totalCbs+=1)}),a.on("xhr-load-removed",function(t,e){var n=""+d(t)+!!e;this.xhrGuids&&this.xhrGuids[n]&&(delete this.xhrGuids[n],this.totalCbs-=1)}),a.on("addEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-added",[t[1],t[2]],e)}),a.on("removeEventListener-end",function(t,e){e instanceof XMLHttpRequest&&"load"===t[0]&&a.emit("xhr-load-removed",[t[1],t[2]],e)}),a.on("fn-start",function(t,e,n){e instanceof XMLHttpRequest&&("onload"===n&&(this.onload=!0),("load"===(t[0]&&t[0].type)||this.onload)&&(this.xhrCbStart=(new Date).getTime()))}),a.on("fn-end",function(t,e){this.xhrCbStart&&a.emit("xhr-cb-time",[(new Date).getTime()-this.xhrCbStart,this.onload,e],e)})}window.XMLHttpRequest&&XMLHttpRequest.prototype&&XMLHttpRequest.prototype.addEventListener&&!/CriOS/.test(navigator.userAgent)&&e()},{1:8,2:11,3:3,4:6,5:1,handle:"D5DuLP",loader:"G9z0Bl"}],8:[function(t,e){e.exports=function(t){var e=document.createElement("a"),n=window.location,r={};e.href=t,r.port=e.port;var o=e.href.split("://");return!r.port&&o[1]&&(r.port=o[1].split("/")[0].split(":")[1]),r.port&&"0"!==r.port||(r.port="https"===o[0]?"443":"80"),r.hostname=e.hostname||n.hostname,r.pathname=e.pathname,"/"!==r.pathname.charAt(0)&&(r.pathname="/"+r.pathname),r.sameOrigin=!e.hostname||e.hostname===document.domain&&e.port===n.port&&e.protocol===n.protocol,r}},{}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],D5DuLP:[function(t,e){function n(t,e){var n=r[t];return n?n.apply(this,e):(o[t]||(o[t]=[]),void o[t].push(e))}var r={},o={};e.exports=n,n.queues=o,n.handlers=r},{}],11:[function(t,e){function n(t){if(!t||"object"!=typeof t&&"function"!=typeof t)return-1;if(t===window)return 0;if(o.call(t,"__nr"))return t.__nr;try{return Object.defineProperty(t,"__nr",{value:r,writable:!0,enumerable:!1}),r}catch(e){return t.__nr=r,r}finally{r+=1}}var r=1,o=Object.prototype.hasOwnProperty;e.exports=n},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=p.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&u&&u.body){p.proto="https"===c.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=u.createElement("script");e.src=p.proto+t.agent,u.body.appendChild(e)}}function r(){"complete"===u.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),s=window,u=s.document,d="addEventListener",f="attachEvent",c=(""+location).split("?")[0],p=e.exports={offset:i(),origin:c,features:[]};u[d]?(u[d]("DOMContentLoaded",o,!1),s[d]("load",n,!1)):(u[f]("onreadystatechange",r),s[f]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}],14:[function(t,e){function n(t,e,n){e||(e=0),"undefined"==typeof n&&(n=t?t.length:0);for(var r=-1,o=n-e||0,i=Array(0>o?0:o);++r<o;)i[r]=t[e+r];return i}e.exports=n},{}],15:[function(t,e){function n(t,e,r,s){function nrWrapper(){try{var n,a=u(arguments),d=this,f=r&&r(a,d)||{}}catch(c){i([c,"",[a,d,s],f])}o(e+"start",[a,d,s],f);try{return n=t.apply(d,a)}catch(p){throw o(e+"err",[a,d,p],f),p}finally{o(e+"end",[a,d,n],f)}}return a(t)?t:(e||(e=""),nrWrapper[n.flag]=!0,nrWrapper)}function r(t,e,r,o){r||(r="");var i,s,u,d="-"===r.charAt(0);for(u=0;u<e.length;u++)s=e[u],i=t[s],a(i)||(t[s]=n(i,d?s+r:r,o,s,t))}function o(t,e,n){try{s.emit(t,e,n)}catch(r){i([r,t,e,n])}}function i(t){try{s.emit("internal-error",t)}catch(e){}}function a(t){return!(t&&"function"==typeof t&&t.apply&&!t[n.flag])}var s=t(1),u=t(2);e.exports=n,n.inPlace=r,n.flag="nr@wrapper"},{1:1,2:14}]},{},["G9z0Bl",2,7]);</script>
<meta property="fb:page_id" content="240734989375"/>
<link rel="publisher" href="https://plus.google.com/116173187155256042113"/>
<link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico?874a9a4" type="image/x-icon"/>
<link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico?874a9a4" type="image/x-icon"/>
<link rel="stylesheet" href="//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic" type="text/css">
<!--[if lt IE 9]>
<link rel="stylesheet" href="http://static.tmimgcdn.com/css/ie.css?aa62324" media="screen">
<![endif]-->
<!--[if lt IE 9]>
<script src="http://static.tmimgcdn.com/js/html5shiv.js?5ac308f"></script>
<![endif]-->
<link rel="stylesheet" href="http://static.tmimgcdn.com/css/livedemo/livedemo.css?aa62324">
<link rel="stylesheet" href="http://static.tmimgcdn.com/css/livedemo/bootstrap.css?aa62324">
<link rel="stylesheet" href="http://static.tmimgcdn.com/css/livedemo/responsive.css?aa62324">
<link rel="stylesheet" href="http://static.tmimgcdn.com/css/livedemo/style.css?aa62324">
<link rel="canonical" href="http://www.templatemonster.com/demo/49329.html"/>
<style></style>
</head>
<body itemscope itemtype="http://schema.org/WebPage" id="demo-page">
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MS2BNB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MS2BNB');</script>
<!--[if lt IE 9]>
<div style='clear: both; height: 112px; padding:0; position: relative;'><a href="http://www.theie8countdown.com/ie-users-info"><img src="http://www.theie8countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div>
<![endif]-->
<div class="relative js-demo-upper-menu" onmousewheel="SmoothSize; return false" id="headerlivedemo" data-template_id="49329">
<div id="advanced">
 
<span class="trigger"> <em></em> </span>
 
<div class="bg">
<div class="top_container container">
<a class="brand brand_livedemo" href="/"></a>
<div class="name_template">Website Template
<a class="link-1" href="#"> #49329<span id="arr"></span></a>
<div id="popover2">
<span id="pop_link1"></span>
<a onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'template-details']);" href="/website-templates/49329.html">Template Details</a>
<div class="clear"></div>
<span id="pop_link2"></span>
<a onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'preview-wo-frame']);" href="http://livedemo00.template-help.com/wt_49329">Preview without Frame</a>
<div class="clear"></div>
<span id="pop_link3"></span>
<a onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'view-similar']);" href="/templates.php?category=68,401&amp;excludeTemplateId=49329">View Similar Templates</a>
</div>
</div>
<div class="responsive-block">
<ul id="responsivator">
<li class="response active" id="desktop"><a href="javascript:;"></a></li>
<li class="response" id="tablet-landscape"><a href="javascript:;"></a></li>
<li class="response" id="tablet-portrait"><a href="javascript:;"></a></li>
<li class="response" id="iphone-landscape"><a href="javascript:;"></a></li>
<li class="response" id="iphone-portrait"><a href="javascript:;"></a></li>
<li id="qr" class="qr">
<dl class="_slide-down1 view_options">
<dt id="dt" class="dt"><img src="http://static.tmimgcdn.com/img/livedemo/qr-small.png?874a9a4" alt=""/><span id="arr2"></span></dt>
<dd id="dd" class="dd" style="display:none" class="clearfix">
<img src="https://chart.googleapis.com/chart?cht=qr&chs=180&chl=http%3A%2F%2Flivedemo00.template-help.com%2Fwt_49329%3Futm_source%3Ddirect%26utm_medium%3Ddemo%26utm_campaign%3Dqr-code&choe=UTF-8&chld=M|0"/>
<div id="qr-arr"></div>
<div id="qr-text"></div>
<div class="clear"></div>
</dd>
</dl>
</li>
</ul>
</div>
<div class="topbar_info clearfix">
<div class="btn-group buy_now">
<a class=" js-none btn btn-primary js-demo-buy-button" href="/cart.php?add=49329&price_variant=regular" onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'buy-now']);" data-variant='regular' data-price='69' data-full_price='69'>Buy Now <span>Single Site License <span class="price  js-price">$69</span></span>
</a>
<a class="  btn btn-primary js-demo-buy-button" href="/cart.php?add=49329&price_variant=virtual2" onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'buy-now']);" data-variant='virtual2' data-price='116' data-full_price='116'>Buy Now <span>Template + 1 Year Hosting <span class="price  js-price">$116</span></span>
</a>
<a class=" js-none btn btn-primary js-demo-buy-button" href="/cart.php?add=49329&price_variant=installation" onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'buy-now']);" data-variant='installation' data-price='108' data-full_price='108'>Buy Now <span>Developer's License <span class="price  js-price">$108</span></span>
</a>
<a class=" js-none btn btn-primary js-demo-buy-button" href="/cart.php?add=49329&price_variant=exclusive" onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'buy-now']);" data-variant='exclusive' data-price='4100' data-full_price='4100'>Buy Now <span>Buyout License <span class="price  js-price">$4100</span></span>
</a>
<button id="buy-button" class="btn dropdown-toggle btn-primary js-demo-buy-button-dropdown-toggle" data-toggle="dropdown">
<em></em>
</button>
<div class="box-drop dropdown-menu " id="dropdown">
<ul class="list-drop">
<li class="js-demo-list-li" data-variant='regular'>
<a href="/cart.php?add=49329&price_variant=regular" onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'buy-now-regular']);">Single Site License <span class="price js-price"> $69</span></a>
<div class="popover">
Under a Single Site License for the template you are granted a non-exclusive non-transferable permission to use the template on a single domain.
</div>
</li>
<li class="js-demo-list-li" data-variant='virtual2'>
<a href="/cart.php?add=49329&price_variant=virtual2" onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'buy-now-virtual2']);">Template + 1 Year Hosting <span class="price js-price"> $116</span></a>
<strong class="recommended">Recommended</strong> <div class="popover">
<strong>Best value offer</strong>: Includes a single site license for the template and a yearly hosting plan from InMotionHosting at a discounted price.
</div>
</li>
<li class="js-demo-list-li" data-variant='installation'>
<a href="/cart.php?add=49329&price_variant=installation" onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'buy-now-installation']);">Developer's License <span class="price js-price"> $108</span></a>
<div class="popover">
Under Developer's License you are granted a non-exclusive permission to use the template on up to 5 domains.
</div>
</li>
<li class="js-demo-list-li" data-variant='exclusive'>
<a href="/cart.php?add=49329&price_variant=exclusive" onClick="_gaq.push(['b._trackEvent', 'SiteUsage', 'demo', 'buy-now-exclusive']);">Buyout License <span class="price js-price"> $4100</span></a>
<div class="popover">
A Buyout License ensures that you are the last buyer/licensee of the template. You are granted a non-exclusive non-transferable permission to use the template on multiple domains.
</div>
</li>
</ul>
</div>
<a class="btn btn-primary already-get js-none" href="/cart.php">
Item 49329 in cart.
</a>
</div>
<div class="clear" style="clear: both;"></div>
</div>
</div>
</div>
</div>
</div>
<div id="iframelive" class="">
<div id="frameWrapper">
<iframe id="frame" frameborder="0" src="http://livedemo00.template-help.com/wt_49329">
[Your user agent does not support frames or is currently configured not to display frames. However, you may visit the related document.]
</iframe>
</div>
</div>
<script src="http://static.tmimgcdn.com/js/compiled.js?5ac308f"></script>
<script>
try {
	var _gaq = _gaq || [];
	_gaq.push(['a._setAccount', 'UA-1217838-2']);

	_gaq.push(['a._setDomainName', '.templatemonster.com']);
	_gaq.push(['a._setAllowLinker', true]);
	_gaq.push(['a._setAllowHash', false]);

	_gaq.push(['a._setSessionCookieTimeout', 180000000]);
	_gaq.push(['a._setVisitorCookieTimeout', 63072000000]);

	_gaq.push(['b._setAccount', 'UA-1217838-16']);


	_gaq.push(['b._setDomainName', '.templatemonster.com']);
	_gaq.push(['b._setAllowLinker', true]);
	_gaq.push(['b._setAllowHash', false]);

	_gaq.push(['b._setSessionCookieTimeout', 180000000]);
	_gaq.push(['b._setVisitorCookieTimeout', 63072000000]);

    _gaq.push(['a._setCustomVar', 3, "Beta", "Yes", 2]);
    _gaq.push(['b._setCustomVar', 3, "Beta", "Yes", 2]);

    
	_gaq.push(['a._require', 'inpage_linkid', '//www.google-analytics.com/plugins/ga/inpage_linkid.js']);

} catch (err) {}
(function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
<script type="text/javascript">
			$(function() {
				// IPad/IPhone
				var viewportmeta = document.querySelector && document.querySelector('meta[name="viewport"]'),
						ua = navigator.userAgent,
						gestureStart = function() {
					viewportmeta.content = "width=device-width, minimum-scale=0.25, maximum-scale=1.6";
				},
						scaleFix = function() {
					if (viewportmeta && /iPhone|iPad/.test(ua) && !/Opera Mini/.test(ua)) {
						viewportmeta.content = "width=device-width, minimum-scale=1.0, maximum-scale=1.0";
						document.addEventListener("gesturestart", gestureStart, false);
					}
				};
				scaleFix();
			});

//		    function to fix height of iframe!
			var calcHeight = function() {
				var headerDimensions = $('#headerlivedemo').height();
				var selector = '#iframelive';
				if ($('#advanced').hasClass('closed')) {
					$(selector).height($(window).height());
				} else {
					$(selector).height($(window).height() - headerDimensions);
				}
			}
			$(document).ready(function() {
				calcHeight();
			});
			$(window).resize(function() {
				calcHeight();
			}).load(function() {
				calcHeight();
			});
			</script>
<script type="text/javascript">
			$(function() {
				mobileCss = function() {
					if (navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/Opera Mini/)) {
						$('#dropdown.box-drop ul.list-drop li .popover').css('top', '-1000px').css('display', 'none !important');
						$('.view_options').hide();
						$('body').css({'height': 'auto'});
						$('html').css({'height': 'auto'});
						$('#headerlivedemo').addClass('mobile');
					}
				};
				mobileCss();
			});
			</script>
<script type="text/javascript">/* responsive-views script-selector */
						$(document).ready(function() {
							if (!(navigator.userAgent.match(/iPhone/i) || navigator.userAgent.match(/iPod/i) || navigator.userAgent.match(/iPad/i) || navigator.userAgent.match(/Android/i) || navigator.userAgent.match(/Opera Mini/))) {

								var frame = document.getElementById('frame');

								$('ul#responsivator').show();

								$('ul#responsivator li.response').click(function() {

									$('ul#responsivator li').removeClass('active');
									$(this).addClass('active');
									var device = $(this).attr('id');
									$('#iframelive').removeClass().addClass(device);
									frame.src = frame.src;
								});

								$('ul#responsivator li#qr').unbind('click');

								$('.responsive-block').show();



							}

						});
						</script>
<script type="text/javascript">
							$(function() {



								$('.name_template .link-1').click(function() {

									var dd = $('.view_options  dt').siblings('dd');
									var pop = $('#popover2');
									var dropdown = $('#dropdown');
									if (pop.is(':visible')) {
										pop.fadeOut(100);
										return false;
									} else {
										pop.fadeIn(100);
										$('#dt').removeClass("active");
										if (dd.is(':visible')) {
											dd.fadeOut(100);
										}
										if (dropdown.is(':visible')) {
											dropdown.fadeOut(100);
											return false;
										}
										return false;
									}
								});

								$(window).scroll(function() {
									if ($(this).scrollTop() > 0) {
										$("#advanced").css({position: 'relative'});
									} else {
										$("#advanced").css({position: 'relative'});
									}
								});

								$("#advanced").css({marginTop: '0px'}).removeClass('closed');
								$("#advanced .trigger").toggle(function() {
									$(this).find('em').parent().parent('#advanced').addClass('closed').animate({marginTop: '-53px'}, "fast", function() {
										calcHeight();
									});
									strCookies2 = $.cookie("panel2", null);
									strCookies = $.cookie("panel", 'boo');
								},
										function() {
											$(this).find('em').parent().parent('#advanced').removeClass('closed').animate({marginTop: '0px'}, "fast", function() {
												calcHeight();
											})
											strCookies2 = $.cookie("panel2", 'opened');
											strCookies = $.cookie("panel", null);
										});

								if ($(window).scrollTop() > 0) {
									$("#advanced").css({position: 'relative'});
								} else {
									$("#advanced").css({position: 'relative'});
								}

								$('.trigger').click(function() {
									$('.view_options dd').fadeOut(100);
								})
								$('.trigger').click(function() {
									$('.buy_now').removeClass("open");
								})

								$('.view_options  dt')
										.click(function() {
									var dd = $(this).siblings('dd');
									var pop = $('#popover2');
									var dropdown = $('#dropdown');
									if (dd.is(':visible')) {
										dd.fadeOut(100);
										$(this).removeClass("active");
										return false;
									}
									else {
										$(this).addClass("active");
										dd.fadeIn(100);
										if (pop.is(':visible')) {
											pop.fadeOut(100);
											return false;
										}
										if (dropdown.is(':visible')) {
											dropdown.fadeOut(100);
											return false;
										}

										return false;
									}
								});

								$('#buy-button').click(function() {

									var dt = $('#dt');
									var dd = $('.view_options  dt').siblings('dd');
									var pop = $('#popover2');
									var dropdown = $('#dropdown');

									if (dropdown.is(':visible')) {
										dropdown.fadeOut(100);
										return false;
									} else {
										dt.removeClass('active');
										dropdown.fadeIn(100);
										if (pop.is(':visible')) {
											pop.fadeOut(100);
											return false;
										}
										if (dd.is(':visible')) {
											dd.fadeOut(100);
											return false;
										}
										return false;

									}

								});


								var ua = navigator.userAgent;


								$(document).click(function(e) {
									$('#dd').fadeOut(100);
									$('#dt').removeClass("active");
								});

								$('.link-1').hover(function() {
									$(this).find('span').css('background-position', '-188px -39px');
								}, function() {
									$(this).find('span').css('background-position', '-188px -6px');
								});
								$('#dt').hover(function() {
									$(this).find('span').css('background-position', '-193px -41px');
								}, function() {
									$(this).find('span').css('background-position', '-193px -8px');
								});

								$(document).click(function(e) {
									if ($('#popover2').is(':visible')) {
										$('#popover2').fadeOut(100);
									}
									if ($('#dropdown').is(':visible')) {
										$('#dropdown').fadeOut(100);
									}
								});
								if ($.browser.msie) {
									$('body').addClass('ie');
								}
								if (($.browser.msie) && ($.browser.version == '9.0')) {
									$('body').addClass('ie9');
								}




								$('#dropdown.box-drop ul.list-drop li a').hover(
										function() {
											$(this).siblings('.popover').css('opacity', '1').css('z-index', '999');
										}, function() {
									$('#dropdown.box-drop ul.list-drop li .popover').css('opacity', '0').css('z-index', '-999');
								});

								$('.trigger').click(function() {
									$('#popover2, #dd, #dropdown').hide();
								});



								var cssFix = function() {
									var u = navigator.userAgent.toLowerCase(),
											addClass = function(el, val) {
										if (!el.className) {
											el.className = val;
										} else {
											var newCl = el.className;
											newCl += (" " + val);
											el.className = newCl;
										}
									},
											is = function(t) {
										return (u.indexOf(t) != -1)
									};
									addClass(document.getElementsByTagName('html')[0], [
										(!(/opera|webtv/i.test(u)) && /msie (\d)/.test(u)) ? ('ie ie' + RegExp.$1)
												: is('firefox/2') ? 'gecko ff2'
												: is('firefox/3') ? 'gecko ff3'
												: is('gecko/') ? 'gecko'
												: is('opera/9') ? 'opera opera9' : /opera (\d)/.test(u) ? 'opera opera' + RegExp.$1
												: is('konqueror') ? 'konqueror'
												: is('safari/') ? 'webkit safari'
												: is('mozilla/') ? 'gecko' : '',
										(is('x11') || is('linux')) ? ' linux'
												: is('mac') ? ' mac'
												: is('win') ? ' win' : ''
									].join(" "));
								}();

							});
							</script>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-1.newrelic.com","licenseKey":"72d7dcce33","applicationID":"2939783","transactionName":"ZV1TZ0FTVkFVWkwKXlwXckZARldfG11dDl4=","queueTime":0,"applicationTime":3,"ttGuid":"","agentToken":"","userAttributes":"","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-411.min.js"}</script></body>
</html>
DEBUG - 2014-06-18 20:16:07 --> Config Class Initialized
DEBUG - 2014-06-18 20:16:07 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:16:07 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:16:07 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:16:07 --> URI Class Initialized
DEBUG - 2014-06-18 20:16:07 --> Router Class Initialized
DEBUG - 2014-06-18 20:16:07 --> Output Class Initialized
DEBUG - 2014-06-18 20:16:07 --> Security Class Initialized
DEBUG - 2014-06-18 20:16:07 --> Input Class Initialized
DEBUG - 2014-06-18 20:16:07 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:16:07 --> Language Class Initialized
DEBUG - 2014-06-18 20:16:07 --> Loader Class Initialized
DEBUG - 2014-06-18 20:16:07 --> Controller Class Initialized
INFO  - 2014-06-18 20:16:07 --> user agent is: Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0
DEBUG - 2014-06-18 20:18:03 --> Config Class Initialized
DEBUG - 2014-06-18 20:18:03 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:18:03 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:18:03 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:18:03 --> URI Class Initialized
DEBUG - 2014-06-18 20:18:03 --> Router Class Initialized
DEBUG - 2014-06-18 20:18:03 --> Output Class Initialized
DEBUG - 2014-06-18 20:18:03 --> Security Class Initialized
DEBUG - 2014-06-18 20:18:03 --> Input Class Initialized
DEBUG - 2014-06-18 20:18:03 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:18:03 --> Language Class Initialized
DEBUG - 2014-06-18 20:18:03 --> Loader Class Initialized
DEBUG - 2014-06-18 20:18:03 --> Controller Class Initialized
INFO  - 2014-06-18 20:18:03 --> user agent is: Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14
DEBUG - 2014-06-18 20:20:51 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:51 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:51 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:51 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:51 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:51 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:51 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:51 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:51 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:51 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:51 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:51 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:51 --> Controller Class Initialized
INFO  - 2014-06-18 20:20:51 --> user agent is: Opera/12.80 (Windows NT 5.1; U; en) Presto/2.10.289 Version/12.02
INFO  - 2014-06-18 20:20:51 --> user agent is: Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14
DEBUG - 2014-06-18 20:20:52 --> Final output sent to browser
DEBUG - 2014-06-18 20:20:52 --> Total execution time: 0.8250
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:52 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:52 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Output Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:52 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:52 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:52 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:52 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:53 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:53 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:53 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:53 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:53 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:53 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:53 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:53 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:53 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:53 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:53 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:53 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:53 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:53 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:53 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Controller Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:53 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:53 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:53 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:53 --> 404 Page Not Found --> demo/49329
ERROR - 2014-06-18 20:20:53 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:20:53 --> Config Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:20:53 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:20:53 --> URI Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Router Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Output Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Security Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Input Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:20:53 --> Language Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Loader Class Initialized
DEBUG - 2014-06-18 20:20:53 --> Controller Class Initialized
ERROR - 2014-06-18 20:20:53 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:21:12 --> Config Class Initialized
DEBUG - 2014-06-18 20:21:12 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:21:12 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:21:12 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:21:12 --> URI Class Initialized
DEBUG - 2014-06-18 20:21:12 --> Router Class Initialized
DEBUG - 2014-06-18 20:21:12 --> Output Class Initialized
DEBUG - 2014-06-18 20:21:12 --> Security Class Initialized
DEBUG - 2014-06-18 20:21:12 --> Input Class Initialized
DEBUG - 2014-06-18 20:21:12 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:21:12 --> Language Class Initialized
DEBUG - 2014-06-18 20:21:12 --> Loader Class Initialized
DEBUG - 2014-06-18 20:21:12 --> Controller Class Initialized
ERROR - 2014-06-18 20:21:12 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:30:42 --> Config Class Initialized
DEBUG - 2014-06-18 20:30:42 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:30:42 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:30:42 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:30:42 --> URI Class Initialized
DEBUG - 2014-06-18 20:30:42 --> Router Class Initialized
DEBUG - 2014-06-18 20:30:42 --> Output Class Initialized
DEBUG - 2014-06-18 20:30:42 --> Security Class Initialized
DEBUG - 2014-06-18 20:30:42 --> Input Class Initialized
DEBUG - 2014-06-18 20:30:42 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:30:42 --> Language Class Initialized
DEBUG - 2014-06-18 20:30:42 --> Loader Class Initialized
DEBUG - 2014-06-18 20:30:42 --> Controller Class Initialized
INFO  - 2014-06-18 20:30:43 --> user agent is: Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00
INFO  - 2014-06-18 20:30:43 --> user agent is: Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00
DEBUG - 2014-06-18 20:30:44 --> File loaded: application/views/v_demo.php
DEBUG - 2014-06-18 20:30:44 --> Final output sent to browser
DEBUG - 2014-06-18 20:30:44 --> Total execution time: 1.2241
DEBUG - 2014-06-18 20:30:44 --> Config Class Initialized
DEBUG - 2014-06-18 20:30:44 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:30:44 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:30:44 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:30:44 --> URI Class Initialized
DEBUG - 2014-06-18 20:30:44 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:48 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:48 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:48 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Controller Class Initialized
INFO  - 2014-06-18 20:33:48 --> user agent is: Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00
INFO  - 2014-06-18 20:33:48 --> user agent is: Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14
DEBUG - 2014-06-18 20:33:48 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:48 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:48 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:48 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Config Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
DEBUG - 2014-06-18 20:33:49 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:33:49 --> URI Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Router Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Output Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Security Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:33:49 --> Input Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:33:49 --> Language Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Loader Class Initialized
DEBUG - 2014-06-18 20:33:49 --> Controller Class Initialized
ERROR - 2014-06-18 20:33:49 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:22 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:22 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:22 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:22 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:22 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:22 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:22 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:22 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:22 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:22 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:22 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:22 --> Controller Class Initialized
INFO  - 2014-06-18 20:34:22 --> user agent is: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13
INFO  - 2014-06-18 20:34:22 --> user agent is: Opera/9.80 (Windows NT 6.1; U; es-ES) Presto/2.9.181 Version/12.00
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Config Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:23 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> URI Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Router Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Output Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Security Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Input Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:23 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:23 --> Controller Class Initialized
DEBUG - 2014-06-18 20:34:24 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:34:24 --> Language Class Initialized
DEBUG - 2014-06-18 20:34:24 --> Loader Class Initialized
DEBUG - 2014-06-18 20:34:24 --> Controller Class Initialized
ERROR - 2014-06-18 20:34:24 --> 404 Page Not Found --> demo/49329
ERROR - 2014-06-18 20:34:24 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:04 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:04 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:04 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:04 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:04 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:04 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:04 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:04 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:04 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:04 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:04 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:04 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:04 --> Controller Class Initialized
INFO  - 2014-06-18 20:35:04 --> user agent is: Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1667.0 Safari/537.36
INFO  - 2014-06-18 20:35:05 --> user agent is: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
ERROR - 2014-06-18 20:35:05 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Controller Class Initialized
ERROR - 2014-06-18 20:35:05 --> 404 Page Not Found --> demo/49329
ERROR - 2014-06-18 20:35:05 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
ERROR - 2014-06-18 20:35:05 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:05 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
ERROR - 2014-06-18 20:35:05 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Controller Class Initialized
ERROR - 2014-06-18 20:35:05 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
ERROR - 2014-06-18 20:35:05 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
ERROR - 2014-06-18 20:35:05 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:05 --> Hooks Class Initialized
ERROR - 2014-06-18 20:35:05 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:05 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:05 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:05 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:06 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Utf8 Class Initialized
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:06 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:06 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:06 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:06 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:06 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:06 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:06 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:06 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:06 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:06 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:06 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:06 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:06 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:06 --> URI Class Initialized
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:06 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:06 --> Language Class Initialized
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:06 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:06 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:06 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:06 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:06 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:06 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:06 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:06 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:06 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:06 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:06 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:06 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:06 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:35:06 --> Config Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:35:06 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:35:06 --> URI Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Router Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Output Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Security Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Input Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:35:06 --> Language Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Loader Class Initialized
DEBUG - 2014-06-18 20:35:06 --> Controller Class Initialized
ERROR - 2014-06-18 20:35:06 --> 404 Page Not Found --> demo/49329
DEBUG - 2014-06-18 20:36:21 --> Config Class Initialized
DEBUG - 2014-06-18 20:36:21 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:36:21 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:36:21 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:36:21 --> URI Class Initialized
DEBUG - 2014-06-18 20:36:21 --> Router Class Initialized
DEBUG - 2014-06-18 20:36:21 --> Output Class Initialized
DEBUG - 2014-06-18 20:36:21 --> Security Class Initialized
DEBUG - 2014-06-18 20:36:21 --> Input Class Initialized
DEBUG - 2014-06-18 20:36:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:36:21 --> Language Class Initialized
DEBUG - 2014-06-18 20:36:21 --> Loader Class Initialized
DEBUG - 2014-06-18 20:36:21 --> Controller Class Initialized
INFO  - 2014-06-18 20:36:21 --> user agent is: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36
DEBUG - 2014-06-18 20:36:35 --> Config Class Initialized
DEBUG - 2014-06-18 20:36:35 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:36:35 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:36:35 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:36:35 --> URI Class Initialized
DEBUG - 2014-06-18 20:36:35 --> Router Class Initialized
DEBUG - 2014-06-18 20:36:35 --> Output Class Initialized
DEBUG - 2014-06-18 20:36:35 --> Security Class Initialized
DEBUG - 2014-06-18 20:36:35 --> Input Class Initialized
DEBUG - 2014-06-18 20:36:35 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:36:35 --> Language Class Initialized
DEBUG - 2014-06-18 20:36:35 --> Loader Class Initialized
DEBUG - 2014-06-18 20:36:35 --> Controller Class Initialized
INFO  - 2014-06-18 20:36:35 --> user agent is: Mozilla/5.0 (Windows NT 6.2; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1667.0 Safari/537.36
DEBUG - 2014-06-18 20:36:38 --> File loaded: application/views/v_demo.php
DEBUG - 2014-06-18 20:36:38 --> Final output sent to browser
DEBUG - 2014-06-18 20:36:38 --> Total execution time: 3.3322
DEBUG - 2014-06-18 20:39:37 --> Config Class Initialized
DEBUG - 2014-06-18 20:39:37 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:39:37 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:39:37 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:39:37 --> URI Class Initialized
DEBUG - 2014-06-18 20:39:37 --> Router Class Initialized
DEBUG - 2014-06-18 20:39:37 --> Output Class Initialized
DEBUG - 2014-06-18 20:39:37 --> Security Class Initialized
DEBUG - 2014-06-18 20:39:37 --> Input Class Initialized
DEBUG - 2014-06-18 20:39:37 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:39:37 --> Language Class Initialized
DEBUG - 2014-06-18 20:39:37 --> Loader Class Initialized
DEBUG - 2014-06-18 20:39:37 --> Controller Class Initialized
INFO  - 2014-06-18 20:39:37 --> user agent is: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0
DEBUG - 2014-06-18 20:39:38 --> File loaded: application/views/v_demo.php
DEBUG - 2014-06-18 20:39:38 --> Final output sent to browser
DEBUG - 2014-06-18 20:39:38 --> Total execution time: 0.5920
DEBUG - 2014-06-18 20:40:33 --> Config Class Initialized
DEBUG - 2014-06-18 20:40:33 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:40:33 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:40:33 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:40:33 --> URI Class Initialized
DEBUG - 2014-06-18 20:40:33 --> Router Class Initialized
DEBUG - 2014-06-18 20:40:33 --> Output Class Initialized
DEBUG - 2014-06-18 20:40:33 --> Security Class Initialized
DEBUG - 2014-06-18 20:40:33 --> Input Class Initialized
DEBUG - 2014-06-18 20:40:33 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:40:33 --> Language Class Initialized
DEBUG - 2014-06-18 20:40:33 --> Loader Class Initialized
DEBUG - 2014-06-18 20:40:33 --> Controller Class Initialized
INFO  - 2014-06-18 20:40:33 --> user agent is: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.13 (KHTML, like Gecko) Chrome/24.0.1290.1 Safari/537.13
DEBUG - 2014-06-18 20:40:34 --> File loaded: application/views/v_demo.php
DEBUG - 2014-06-18 20:40:34 --> Final output sent to browser
DEBUG - 2014-06-18 20:40:34 --> Total execution time: 0.4260
DEBUG - 2014-06-18 20:40:48 --> Config Class Initialized
DEBUG - 2014-06-18 20:40:48 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:40:48 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:40:48 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:40:48 --> URI Class Initialized
DEBUG - 2014-06-18 20:40:48 --> Router Class Initialized
DEBUG - 2014-06-18 20:40:48 --> Output Class Initialized
DEBUG - 2014-06-18 20:40:48 --> Security Class Initialized
DEBUG - 2014-06-18 20:40:48 --> Input Class Initialized
DEBUG - 2014-06-18 20:40:48 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:40:48 --> Language Class Initialized
DEBUG - 2014-06-18 20:40:48 --> Loader Class Initialized
DEBUG - 2014-06-18 20:40:48 --> Controller Class Initialized
INFO  - 2014-06-18 20:40:48 --> user agent is: Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00
DEBUG - 2014-06-18 20:41:09 --> File loaded: application/views/v_demo.php
DEBUG - 2014-06-18 20:41:09 --> Final output sent to browser
DEBUG - 2014-06-18 20:41:09 --> Total execution time: 21.4322
DEBUG - 2014-06-18 20:42:13 --> Config Class Initialized
DEBUG - 2014-06-18 20:42:13 --> Hooks Class Initialized
DEBUG - 2014-06-18 20:42:13 --> Utf8 Class Initialized
DEBUG - 2014-06-18 20:42:13 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 20:42:13 --> URI Class Initialized
DEBUG - 2014-06-18 20:42:13 --> Router Class Initialized
DEBUG - 2014-06-18 20:42:13 --> Output Class Initialized
DEBUG - 2014-06-18 20:42:13 --> Security Class Initialized
DEBUG - 2014-06-18 20:42:13 --> Input Class Initialized
DEBUG - 2014-06-18 20:42:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 20:42:13 --> Language Class Initialized
DEBUG - 2014-06-18 20:42:13 --> Loader Class Initialized
DEBUG - 2014-06-18 20:42:13 --> Controller Class Initialized
INFO  - 2014-06-18 20:42:13 --> user agent is: Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/32.0.1664.3 Safari/537.36
DEBUG - 2014-06-18 20:42:15 --> File loaded: application/views/v_demo.php
DEBUG - 2014-06-18 20:42:15 --> Final output sent to browser
DEBUG - 2014-06-18 20:42:15 --> Total execution time: 2.2841
DEBUG - 2014-06-18 21:06:22 --> Config Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Hooks Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Utf8 Class Initialized
DEBUG - 2014-06-18 21:06:22 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 21:06:22 --> URI Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Router Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Output Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Security Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Input Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 21:06:22 --> Language Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Loader Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Controller Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Helper loaded: form_helper
DEBUG - 2014-06-18 21:06:22 --> Form Validation Class Initialized
DEBUG - 2014-06-18 21:06:22 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-06-18 21:06:22 --> XSS Filtering completed
INFO  - 2014-06-18 21:06:22 --> Templatemonster::get_url_keyword_search() = http://www.templatemonster.com/templates.php?keywords=cars
INFO  - 2014-06-18 21:06:22 --> user agent is: Mozilla/5.0 (Windows NT 6.1; Win64; x64; rv:25.0) Gecko/20100101 Firefox/29.0
INFO  - 2014-06-18 21:06:25 --> xxxxxxxxx------->>>>>>>search-listing templates-listing" data-initialpage="1">
<ul id="products" class="thumbnails js-products">
<li class="thumbnail">
<div class="js-thumbnail thumbnail-preview" data-tid="49496">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/oscommerce-templates/49496.html" data-tid="49496">
<img class='js-thumbnail-img' alt="Car Dealer OsCommerce Template" src="http://scr0.templatemonster.com/49400/49496-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="140" data-tid="49496"><span class="dollar-icon">$</span>140
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-osc"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/oscommerce-templates/49496.html">Car Dealer</a>
<br/>
osCommerce <span class="template-number">#49496</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#49496</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/cowboy/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Cowboy</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">0</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/49496.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/oscommerce-templates/49496.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="49366">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/magento-themes/49366.html" data-tid="49366">
<img class='js-thumbnail-img' alt="Wheels &amp; Tires Responsive Magento Theme" src="http://scr2.templatemonster.com/49300/49366-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="180" data-tid="49366"><span class="dollar-icon">$</span>180
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-magento"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/magento-themes/49366.html">Wheels &amp; Tires</a>
<br/>
Magento <span class="template-number">#49366</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#49366</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/hermes/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Hermes</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">3</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/49366.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/magento-themes/49366.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="49329">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/49329.html" data-tid="49329">
<img class='js-thumbnail-img' alt="Motor Sports Responsive Website Template" src="http://scr1.templatemonster.com/49300/49329-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="69" data-tid="49329"><span class="dollar-icon">$</span>69
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-responsive"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/49329.html">Motor Sports</a>
<br/>
Website <span class="template-number">#49329</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#49329</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/mercury/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Mercury</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">2</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/49329.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/website-templates/49329.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="49310">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/opencart-templates/49310.html" data-tid="49310">
<img class='js-thumbnail-img' alt="Auto Parts Responsive OpenCart Template" src="http://scr2.templatemonster.com/49300/49310-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="90" data-tid="49310"><span class="dollar-icon">$</span>90
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-opencart"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/opencart-templates/49310.html">Auto Store</a>
<br/>
OpenCart <span class="template-number">#49310</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#49310</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/hermes/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Hermes</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">1</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/49310.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/opencart-templates/49310.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="49151">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/49151.html" data-tid="49151">
<img class='js-thumbnail-img' alt="Car Club Responsive Website Template" src="http://scr3.templatemonster.com/49100/49151-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="69" data-tid="49151"><span class="dollar-icon">$</span>69
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-responsive"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/49151.html">Car Club</a>
<br/>
Website <span class="template-number">#49151</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#49151</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/glenn/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Glenn</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">0</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/49151.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/website-templates/49151.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="49116">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/49116.html" data-tid="49116">
<img class='js-thumbnail-img' alt="Car Dealer Responsive Website Template" src="http://scr0.templatemonster.com/49100/49116-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="69" data-tid="49116"><span class="dollar-icon">$</span>69
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-responsive"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/49116.html">Car Dealer</a>
<br/>
Website <span class="template-number">#49116</span>
<div class="rating-stars-block">
<div class="stars rating-style_50"></div>
(<a href="/website-templates/49116.html#tab-reviews">1</a>)
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#49116</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/mercury/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Mercury</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">4</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_50"></div>
(<a href="/website-templates/49116.html#tab-reviews">1</a>)
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/49116.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/website-templates/49116.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="49106">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/49106.html" data-tid="49106">
<img class='js-thumbnail-img' alt="Car Club Responsive Website Template" src="http://scr2.templatemonster.com/49100/49106-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="69" data-tid="49106"><span class="dollar-icon">$</span>69
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-responsive"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/49106.html">Car Club</a>
<br/>
Website <span class="template-number">#49106</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#49106</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/jade/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Jade</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">3</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/49106.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/website-templates/49106.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-bestsellers"></div>
<div class="js-thumbnail thumbnail-preview bestsellers" data-tid="49054">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/prestashop-themes/49054.html" data-tid="49054">
<img class='js-thumbnail-img' alt="Wheels &amp; Tires Responsive PrestaShop Theme" src="http://scr2.templatemonster.com/49000/49054-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="140" data-tid="49054"><span class="dollar-icon">$</span>140
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-prestahop"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/prestashop-themes/49054.html">Tires Wheels for Autos</a>
<br/>
PrestaShop <span class="template-number">#49054</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#49054</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/hermes/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Hermes</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">4</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/49054.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/prestashop-themes/49054.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-cherry"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="49009">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/wordpress-themes/49009.html" data-tid="49009">
<img class='js-thumbnail-img' alt="Car Club Responsive WordPress Theme" src="http://scr1.templatemonster.com/49000/49009-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="75" data-tid="49009"><span class="dollar-icon">$</span>75
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-wordpress"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/wordpress-themes/49009.html">Car Club</a>
<br/>
WordPress <span class="template-number">#49009</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#49009</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/cowboy/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Cowboy</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">2</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/49009.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/wordpress-themes/49009.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48970">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/joomla-templates/48970.html" data-tid="48970">
<img class='js-thumbnail-img' alt="Car Repair Responsive Joomla Template" src="http://scr2.templatemonster.com/48900/48970-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="75" data-tid="48970"><span class="dollar-icon">$</span>75
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-joomla"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/joomla-templates/48970.html">Car Repair</a>
<br/>
Joomla <span class="template-number">#48970</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48970</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/di/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Di</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">2</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48970.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/joomla-templates/48970.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48918">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/opencart-templates/48918.html" data-tid="48918">
<img class='js-thumbnail-img' alt="Bike Shop Responsive OpenCart Template" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr2.templatemonster.com/48900/48918-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="90" data-tid="48918"><span class="dollar-icon">$</span>90
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-opencart"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/opencart-templates/48918.html">Motorcycle Store</a>
<br/>
OpenCart <span class="template-number">#48918</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48918</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/ares/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Ares</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">2</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48918.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/opencart-templates/48918.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-cherry"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48891">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/woocommerce-themes/48891.html" data-tid="48891">
<img class='js-thumbnail-img' alt="Wheels &amp; Tires Responsive WooCommerce Theme" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr3.templatemonster.com/48800/48891-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="115" data-tid="48891"><span class="dollar-icon">$</span>115
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-woo"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/woocommerce-themes/48891.html">Wheels &amp; Tires</a>
<br/>
WooCommerce <span class="template-number">#48891</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48891</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/hermes/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Hermes</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">3</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48891.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/woocommerce-themes/48891.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48883">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/joomla-templates/48883.html" data-tid="48883">
<img class='js-thumbnail-img' alt="Car Repair Responsive Joomla Template" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr3.templatemonster.com/48800/48883-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="75" data-tid="48883"><span class="dollar-icon">$</span>75
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-joomla"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/joomla-templates/48883.html">Car Repair</a>
<br/>
Joomla <span class="template-number">#48883</span>
<div class="rating-stars-block">
<div class="stars rating-style_50"></div>
(<a href="/joomla-templates/48883.html#tab-reviews">1</a>)
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48883</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/di/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Di</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">4</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_50"></div>
(<a href="/joomla-templates/48883.html#tab-reviews">1</a>)
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48883.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/joomla-templates/48883.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="js-thumbnail thumbnail-preview" data-tid="48778">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/virtuemart-templates/48778.html" data-tid="48778">
<img class='js-thumbnail-img' alt="Auto Parts VirtueMart Template" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr2.templatemonster.com/48700/48778-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="140" data-tid="48778"><span class="dollar-icon">$</span>140
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-virtuemart"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/virtuemart-templates/48778.html">Auto Parts</a>
<br/>
VirtueMart <span class="template-number">#48778</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48778</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/hermes/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Hermes</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">3</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48778.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/virtuemart-templates/48778.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-bestsellers"></div>
<div class="js-thumbnail thumbnail-preview bestsellers" data-tid="48752">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/prestashop-themes/48752.html" data-tid="48752">
<img class='js-thumbnail-img' alt="Car Dealer Responsive PrestaShop Theme" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr0.templatemonster.com/48700/48752-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="140" data-tid="48752"><span class="dollar-icon">$</span>140
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-prestahop"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/prestashop-themes/48752.html">Selling Cars</a>
<br/>
PrestaShop <span class="template-number">#48752</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48752</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/hermes/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Hermes</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">5</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48752.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/prestashop-themes/48752.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48731">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/48731.html" data-tid="48731">
<img class='js-thumbnail-img' alt="Car Repair Responsive Website Template" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr3.templatemonster.com/48700/48731-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="75" data-tid="48731"><span class="dollar-icon">$</span>75
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-bootstrap"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/48731.html">Car Repair</a>
<br/>
Website <span class="template-number">#48731</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48731</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/ares/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Ares</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">3</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48731.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/website-templates/48731.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48656">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/48656.html" data-tid="48656">
<img class='js-thumbnail-img' alt="Car Rental Responsive Website Template" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr0.templatemonster.com/48600/48656-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="69" data-tid="48656"><span class="dollar-icon">$</span>69
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-responsive"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/48656.html">Car Rental</a>
<br/>
Website <span class="template-number">#48656</span>
<div class="rating-stars-block">
<div class="stars rating-style_45"></div>
(<a href="/website-templates/48656.html#tab-reviews">2</a>)
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48656</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/mercury/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Mercury</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">4</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_45"></div>
(<a href="/website-templates/48656.html#tab-reviews">2</a>)
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48656.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/website-templates/48656.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48628">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/48628.html" data-tid="48628">
<img class='js-thumbnail-img' alt="Car Responsive Website Template" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr0.templatemonster.com/48600/48628-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="75" data-tid="48628"><span class="dollar-icon">$</span>75
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-bootstrap"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/48628.html">Car</a>
<br/>
Website <span class="template-number">#48628</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48628</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/cerberus/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Cerberus</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">2</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48628.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/website-templates/48628.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-bestsellers"></div>
<div class="js-thumbnail thumbnail-preview bestsellers" data-tid="48575">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/opencart-templates/48575.html" data-tid="48575">
<img class='js-thumbnail-img' alt="Car Audio Responsive OpenCart Template" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr3.templatemonster.com/48500/48575-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="90" data-tid="48575"><span class="dollar-icon">$</span>90
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-opencart"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/opencart-templates/48575.html">Car Audio</a>
<br/>
OpenCart <span class="template-number">#48575</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48575</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/hermes/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Hermes</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">4</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48575.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/opencart-templates/48575.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48572">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/prestashop-themes/48572.html" data-tid="48572">
<img class='js-thumbnail-img' alt="Wheels &amp; Tires Responsive PrestaShop Theme" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr0.templatemonster.com/48500/48572-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="140" data-tid="48572"><span class="dollar-icon">$</span>140
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-prestahop"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/prestashop-themes/48572.html">Wheels and Tyres</a>
<br/>
PrestaShop <span class="template-number">#48572</span>
<div class="rating-stars-block">
<div class="stars rating-style_50"></div>
(<a href="/prestashop-themes/48572.html#tab-reviews">1</a>)
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48572</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/cowboy/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Cowboy</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">1</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_50"></div>
(<a href="/prestashop-themes/48572.html#tab-reviews">1</a>)
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48572.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/prestashop-themes/48572.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48564">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/48564.html" data-tid="48564">
<img class='js-thumbnail-img' alt="Biker Club Responsive Website Template" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr0.templatemonster.com/48500/48564-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="75" data-tid="48564"><span class="dollar-icon">$</span>75
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-bootstrap"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/website-templates/48564.html">Biker Club</a>
<br/>
Website <span class="template-number">#48564</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48564</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/ares/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Ares</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">1</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48564.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/website-templates/48564.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-responsive"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48529">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/prestashop-themes/48529.html" data-tid="48529">
<img class='js-thumbnail-img' alt="Bike Shop Responsive PrestaShop Theme" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr1.templatemonster.com/48500/48529-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="140" data-tid="48529"><span class="dollar-icon">$</span>140
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-prestahop"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/prestashop-themes/48529.html">Motorcycle Stuff</a>
<br/>
PrestaShop <span class="template-number">#48529</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48529</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/hermes/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Hermes</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">2</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48529.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/prestashop-themes/48529.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="js-thumbnail thumbnail-preview" data-tid="48493">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/virtuemart-templates/48493.html" data-tid="48493">
<img class='js-thumbnail-img' alt="Bike Shop VirtueMart Template" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr1.templatemonster.com/48400/48493-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="140" data-tid="48493"><span class="dollar-icon">$</span>140
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-virtuemart"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/virtuemart-templates/48493.html">Bike Shop</a>
<br/>
VirtueMart <span class="template-number">#48493</span>
<div class="rating-stars-block">
<div class="stars rating-style_50"></div>
(<a href="/virtuemart-templates/48493.html#tab-reviews">1</a>)
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48493</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/hermes/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Hermes</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">2</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_50"></div>
(<a href="/virtuemart-templates/48493.html#tab-reviews">1</a>)
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48493.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/virtuemart-templates/48493.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
<li class="thumbnail">
<div class="badge-custom badge-cherry"></div>
<div class="js-thumbnail thumbnail-preview" data-tid="48421">
<span class="img-placeholder"></span>
<a class="thumb_preview js-thumb_preview" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/wordpress-themes/48421.html" data-tid="48421">
<img class='js-thumbnail-img' alt="Car Club Responsive WordPress Theme" src="http://static.tmimgcdn.com/img/ajax-loader.gif?874a9a4" data-original="http://scr1.templatemonster.com/48400/48421-med.jpg"/>
</a>
</div>
<div class="template-data js-template-data">
<div class="thumbnail-info clearfix">
<div class="thumbnail-arrow"></div>
<div class="price-block discount">
<div class="template-price js-template-price" data-price="75" data-tid="48421"><span class="dollar-icon">$</span>75
</div>
<div class="price-corner-right"></div>
<div class="price-corner-left">
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="10px" height="27px">
<polygon fill="#1C64A1" points="0,13 8,0 10,0 10,27 8,27 "/>
</svg>
</div>
</div>
<b class="svg square-icon icon-wordpress"></b>
<a class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'link']);" href="/wordpress-themes/48421.html">Car Club</a>
<br/>
WordPress <span class="template-number">#48421</span>
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</div>
<div class="thumbnail-data">
<table cellpadding="0">
<tr>
<td>Item number:</td>
<td class="template-number">#48421</td>
</tr>
<tr>
<td>Author:</td>
<td>
<a href="/authors/cowboy/" class="link-blue" onClick="_gaq.push(['b._trackEvent', 'products', 'click', 'author']);">Cowboy</a>
</td>
</tr>
<tr>
<td>Downloads:</td>
<td class="template-count">4</td>
</tr>
<tr>
<td>Rating:</td>
<td class="template-rating">
<div class="rating-stars-block">
<div class="stars rating-style_0"></div>
</div>
</td>
</tr>
</table>
<div class="list-view-btn js-live-buttons">
 
<a href="/demo/48421.html" class="btn btn-primary" target="_blank">live Demo<span class="icon-pop-out"></span></a>
 
<a href="/wordpress-themes/48421.html" class="btn btn-default">view details</a>
</div>
</div>
</div>
<div class="clearfix"></div>
</li>
</ul>
<div class="js-pager-bottom js-page-bottom-visible" data-appear-top-offset="600">&nbsp;</div>
<div class="thumbnail-link">
<a href="#" class="btn btn-default btn-listing js-btn-more">Show more templates</a>
</div>
</div>
</div>
</div>
<script
DEBUG - 2014-06-18 21:06:25 --> Final output sent to browser
DEBUG - 2014-06-18 21:06:25 --> Total execution time: 2.9592
DEBUG - 2014-06-18 21:16:27 --> Config Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Hooks Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Utf8 Class Initialized
DEBUG - 2014-06-18 21:16:27 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 21:16:27 --> URI Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Router Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Output Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Security Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Input Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 21:16:27 --> Language Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Loader Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Controller Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Helper loaded: form_helper
DEBUG - 2014-06-18 21:16:27 --> Form Validation Class Initialized
DEBUG - 2014-06-18 21:16:27 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-06-18 21:16:27 --> XSS Filtering completed
INFO  - 2014-06-18 21:16:27 --> Templatemonster::get_url_keyword_search() = http://www.templatemonster.com/templates.php?keywords=cars
INFO  - 2014-06-18 21:16:27 --> user agent is: Opera/9.80 (Windows NT 5.1; U; zh-sg) Presto/2.9.181 Version/12.00
DEBUG - 2014-06-18 23:17:35 --> Config Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Hooks Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Utf8 Class Initialized
DEBUG - 2014-06-18 23:17:35 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 23:17:35 --> URI Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Router Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Output Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Security Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Input Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 23:17:35 --> Language Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Loader Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Controller Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Helper loaded: form_helper
DEBUG - 2014-06-18 23:17:35 --> Form Validation Class Initialized
DEBUG - 2014-06-18 23:17:35 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-06-18 23:17:35 --> XSS Filtering completed
INFO  - 2014-06-18 23:17:35 --> Templatemonster::get_url_keyword_search() = http://www.templatemonster.com/templates.php?keywords=cars
INFO  - 2014-06-18 23:17:35 --> user agent is: Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0
ERROR - 2014-06-18 23:17:39 --> Severity: Notice  --> Undefined variable: pre_list_items C:\Users\xjohnson\GoogleDrive\UniServer\vhosts\ci213\_swd_v3\application\libraries\Templatemonster.php 158
ERROR - 2014-06-18 23:17:39 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\Users\xjohnson\GoogleDrive\UniServer\vhosts\ci213\_swd_v3\application\libraries\Templatemonster.php 222
DEBUG - 2014-06-18 23:20:21 --> Config Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Hooks Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Utf8 Class Initialized
DEBUG - 2014-06-18 23:20:21 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 23:20:21 --> URI Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Router Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Output Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Security Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Input Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 23:20:21 --> Language Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Loader Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Controller Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Helper loaded: form_helper
DEBUG - 2014-06-18 23:20:21 --> Form Validation Class Initialized
DEBUG - 2014-06-18 23:20:21 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-06-18 23:20:21 --> XSS Filtering completed
INFO  - 2014-06-18 23:20:21 --> Templatemonster::get_url_keyword_search() = http://www.templatemonster.com/templates.php?keywords=cars
INFO  - 2014-06-18 23:20:21 --> user agent is: Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0) Opera 12.14
ERROR - 2014-06-18 23:20:21 --> Severity: Warning  --> stripos() expects parameter 1 to be string, array given C:\Users\xjohnson\GoogleDrive\UniServer\vhosts\ci213\_swd_v3\application\libraries\Templatemonster.php 233
DEBUG - 2014-06-18 23:27:16 --> Config Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Hooks Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Utf8 Class Initialized
DEBUG - 2014-06-18 23:27:16 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 23:27:16 --> URI Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Router Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Output Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Security Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Input Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 23:27:16 --> Language Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Loader Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Controller Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Helper loaded: form_helper
DEBUG - 2014-06-18 23:27:16 --> Form Validation Class Initialized
DEBUG - 2014-06-18 23:27:16 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-06-18 23:27:16 --> XSS Filtering completed
INFO  - 2014-06-18 23:27:16 --> Templatemonster::get_url_keyword_search() = http://www.templatemonster.com/templates.php?keywords=cars
INFO  - 2014-06-18 23:27:16 --> user agent is: Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0
DEBUG - 2014-06-18 23:28:14 --> Config Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Hooks Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Utf8 Class Initialized
DEBUG - 2014-06-18 23:28:14 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 23:28:14 --> URI Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Router Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Output Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Security Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Input Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 23:28:14 --> Language Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Loader Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Controller Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Helper loaded: form_helper
DEBUG - 2014-06-18 23:28:14 --> Form Validation Class Initialized
DEBUG - 2014-06-18 23:28:14 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-06-18 23:28:14 --> XSS Filtering completed
INFO  - 2014-06-18 23:28:14 --> Templatemonster::get_url_keyword_search() = http://www.templatemonster.com/templates.php?keywords=cars
INFO  - 2014-06-18 23:28:14 --> user agent is: Opera/12.0(Windows NT 5.2;U;en)Presto/22.9.168 Version/12.00
DEBUG - 2014-06-18 23:28:17 --> Final output sent to browser
DEBUG - 2014-06-18 23:28:17 --> Total execution time: 2.4121
DEBUG - 2014-06-18 23:28:40 --> Config Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Hooks Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Utf8 Class Initialized
DEBUG - 2014-06-18 23:28:40 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 23:28:40 --> URI Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Router Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Output Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Security Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Input Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 23:28:40 --> Language Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Loader Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Controller Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Helper loaded: form_helper
DEBUG - 2014-06-18 23:28:40 --> Form Validation Class Initialized
DEBUG - 2014-06-18 23:28:40 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-06-18 23:28:40 --> XSS Filtering completed
INFO  - 2014-06-18 23:28:40 --> Templatemonster::get_url_keyword_search() = http://www.templatemonster.com/templates.php?keywords=toys
INFO  - 2014-06-18 23:28:40 --> user agent is: Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/27.0.1453.93 Safari/537.36
DEBUG - 2014-06-18 23:28:42 --> Final output sent to browser
DEBUG - 2014-06-18 23:28:42 --> Total execution time: 2.3041
DEBUG - 2014-06-18 23:28:47 --> Config Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Hooks Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Utf8 Class Initialized
DEBUG - 2014-06-18 23:28:47 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 23:28:47 --> URI Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Router Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Output Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Security Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Input Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 23:28:47 --> Language Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Loader Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Controller Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Helper loaded: form_helper
DEBUG - 2014-06-18 23:28:47 --> Form Validation Class Initialized
DEBUG - 2014-06-18 23:28:47 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-06-18 23:28:47 --> XSS Filtering completed
INFO  - 2014-06-18 23:28:47 --> Templatemonster::get_url_keyword_search() = http://www.templatemonster.com/templates.php?keywords=cars
INFO  - 2014-06-18 23:28:47 --> user agent is: Mozilla/5.0 (X11; OpenBSD amd64; rv:28.0) Gecko/20100101 Firefox/28.0
DEBUG - 2014-06-18 23:28:47 --> Final output sent to browser
DEBUG - 2014-06-18 23:28:47 --> Total execution time: 0.5490
DEBUG - 2014-06-18 23:30:13 --> Config Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Hooks Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Utf8 Class Initialized
DEBUG - 2014-06-18 23:30:13 --> UTF-8 Support Enabled
DEBUG - 2014-06-18 23:30:13 --> URI Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Router Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Output Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Security Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Input Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Global POST and COOKIE data sanitized
DEBUG - 2014-06-18 23:30:13 --> Language Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Loader Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Controller Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Helper loaded: form_helper
DEBUG - 2014-06-18 23:30:13 --> Form Validation Class Initialized
DEBUG - 2014-06-18 23:30:13 --> Language file loaded: language/english/form_validation_lang.php
DEBUG - 2014-06-18 23:30:13 --> XSS Filtering completed
INFO  - 2014-06-18 23:30:13 --> Templatemonster::get_url_keyword_search() = http://www.templatemonster.com/templates.php?keywords=cars
INFO  - 2014-06-18 23:30:13 --> user agent is: Mozilla/5.0 (Windows NT 5.1; rv:31.0) Gecko/20100101 Firefox/31.0
ERROR - 2014-06-18 23:30:14 --> Severity: Warning  --> preg_match_all() expects parameter 2 to be string, array given C:\Users\xjohnson\GoogleDrive\UniServer\vhosts\ci213\_swd_v3\application\libraries\Templatemonster.php 162
ERROR - 2014-06-18 23:30:14 --> Severity: Warning  --> Invalid argument supplied for foreach() C:\Users\xjohnson\GoogleDrive\UniServer\vhosts\ci213\_swd_v3\application\libraries\Templatemonster.php 165
DEBUG - 2014-06-18 23:30:14 --> Final output sent to browser
DEBUG - 2014-06-18 23:30:14 --> Total execution time: 0.9611
