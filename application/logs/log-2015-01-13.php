<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

DEBUG - 2015-01-13 00:40:15 --> Config Class Initialized
DEBUG - 2015-01-13 00:40:15 --> Hooks Class Initialized
DEBUG - 2015-01-13 00:40:15 --> Utf8 Class Initialized
DEBUG - 2015-01-13 00:40:15 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 00:40:15 --> URI Class Initialized
DEBUG - 2015-01-13 00:40:15 --> Router Class Initialized
DEBUG - 2015-01-13 00:40:15 --> No URI present. Default controller set.
DEBUG - 2015-01-13 00:40:15 --> Output Class Initialized
DEBUG - 2015-01-13 00:40:15 --> Security Class Initialized
DEBUG - 2015-01-13 00:40:15 --> Input Class Initialized
DEBUG - 2015-01-13 00:40:15 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 00:40:15 --> Language Class Initialized
DEBUG - 2015-01-13 00:40:15 --> Loader Class Initialized
DEBUG - 2015-01-13 00:40:15 --> Controller Class Initialized
DEBUG - 2015-01-13 00:40:15 --> Helper loaded: url_helper
DEBUG - 2015-01-13 00:40:15 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 00:40:15 --> Final output sent to browser
DEBUG - 2015-01-13 00:40:15 --> Total execution time: 0.0298
DEBUG - 2015-01-13 00:40:16 --> Config Class Initialized
DEBUG - 2015-01-13 00:40:16 --> Hooks Class Initialized
DEBUG - 2015-01-13 00:40:16 --> Utf8 Class Initialized
DEBUG - 2015-01-13 00:40:16 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 00:40:16 --> URI Class Initialized
DEBUG - 2015-01-13 00:40:16 --> Router Class Initialized
DEBUG - 2015-01-13 00:40:16 --> Output Class Initialized
DEBUG - 2015-01-13 00:40:16 --> Security Class Initialized
DEBUG - 2015-01-13 00:40:16 --> Input Class Initialized
DEBUG - 2015-01-13 00:40:16 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 00:40:16 --> Language Class Initialized
DEBUG - 2015-01-13 00:40:16 --> Loader Class Initialized
DEBUG - 2015-01-13 00:40:16 --> Controller Class Initialized
DEBUG - 2015-01-13 00:40:16 --> Helper loaded: url_helper
INFO  - 2015-01-13 00:40:16 --> user agent is: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0
ERROR - 2015-01-13 00:40:17 --> the page retreived from templatemonster does not contain categories to extract
INFO  - 2015-01-13 00:40:17 --> <!DOCTYPE html> <!--[if lt IE 7 ]><html
class="ie ie6" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]--> <!--[if IE 7 ]><html
class="ie ie7" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]--> <!--[if IE 8 ]><html
class="ie ie8" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]--> <!--[if IE 9 ]><html
class="ie ie9" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]--> <!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US" prefix="og: http://ogp.me/ns#"> <!--<![endif]--><head><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=u(e),f=c.length,s=i(a,o,r),p=0;f>p;p++)c[p].apply(s,n);return s}function a(t,e){f[t]=u(t).concat(e)}function u(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:u,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=l.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){l.proto="https"===p.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=l.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),u=window,c=u.document,f="addEventListener",s="attachEvent",p=(""+location).split("?")[0],l=e.exports={offset:i(),origin:p,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),u[f]("load",n,!1)):(c[s]("onreadystatechange",r),u[s]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}]},{},["G9z0Bl"]);</script><meta charset="utf-8"><meta property="fb:admins" content="720898483"/><meta property="fb:admins" content="1129631948"/><meta property="fb:admins" content="100001777951090"/><link rel="publisher" href="https://plus.google.com/116173187155256042113"/><link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico?58b9fe9" type="image/x-icon"/><link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico?58b9fe9" type="image/x-icon"/><link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'> <!--[if lt IE 9]><link
rel="stylesheet" href="http://static.tmimgcdn.com/css/ie.css?d272a1a" media="screen"><script src="http://static.tmimgcdn.com/js/html5shiv.js?a39f61f"></script><![endif]--> <!--[if IE 9]><link
rel="stylesheet" href="http://static.tmimgcdn.com/css/compiledie9.css?d272a1a" media="screen"> <![endif]--> <!--[if (gt IE 9)|(!IE)]><!--><link rel="stylesheet" href="http://static.tmimgcdn.com/css/compiled.css?d272a1a" media="screen"> <!--<![endif]--><title>Template Categories</title><link rel="canonical" href="http://www.templatemonster.com/category/"/><meta property="og:locale" content="en_US"/><meta property="og:type" content="article"/><meta property="og:title" content="Template Categories"/><meta property="og:url" content="http://www.templatemonster.com/category/"/><meta property="og:site_name" content="Template Monster"/><meta property="article:publisher" content="https://www.facebook.com/TemplateMonster"/> <script type="text/javascript">
			var RecaptchaOptions = {"theme":"white","lang":"en"};
		</script></head><body class="page page-id-153 page-template page-template-page-keyword-category-php" itemscope itemtype="http://schema.org/WebPage"> <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MS2BNB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MS2BNB');</script><!--[if lt IE 9]><div
style='clear: both; height: 112px; padding:0; position: relative;'><a
href="http://www.theie8countdown.com/ie-users-info"><img
src="http://www.theie8countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div> <![endif]--> <header id="header"><div class="top"><div class="container"><div class="badge-since"><div class="badge-big"> <span>Providing templates and themes</span><img src="http://static.tmimgcdn.com/img/since.png?58b9fe9" alt="Providing web templates and themes since 2002"></div><div class="badge-small"> <img src="http://static.tmimgcdn.com/img/badge-since-rt.gif?58b9fe9" alt="Providing web templates and themes since 2002">Providing web templates and themes</div></div><ul class="user-menu"><li class="account-menu-li" style="display:none;"> <a href="#" id="your-account-link">Hello, <span></span><b class="icon-arrow-small-down"></b></a><ul class="account-menu"><li><a href="/profile.php?tab=summary"><strong>Your account</strong></a></li></ul></li><li class="sign-out-li" style="display:none;"> <a href="#" class="sign-out-btn" id="signout-link"><span class="sign-out">Sign Out</span></a></li><li class="sign-in-li"> <a href="#" class="sign-in" id="signin-link">Sign In<b class="icon-arrow-small-down"></b><em></em></a><div class="sign-in-form"><h5>Sign In to Templatemonster</h5><form action="/wac/signin.php" method="POST" name="signin" id="signin-form" class="form-horizontal"><div id="signin-form-errors"></div><input type="hidden" name="billingInfo" id="signin-form-billingInfo" tabindex="1" value=""><fieldset><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><input type="email" name="email" autocomplete="off" data-constraints="@NotBlank @HTML5Required @Email(message=&quot;Doesn&#039;t look like a valid email&quot;) @HTML5Email(message=&quot;Doesn&#039;t look like a valid email&quot;) @Length(min=&quot;0&quot;, max=&quot;72&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;) @Pattern(regex=&quot;/^(.{1,64})\@/&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;)" required="required" id="signin-form-email" class=" form-control js-placeholder" tabindex="2" placeholder="Email" value=""></div></div><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><input type="password" name="password" autocomplete="off" data-constraints="@NotBlank @HTML5Required" required="required" id="signin-form-password" class=" form-control js-placeholder" tabindex="3" placeholder="Password" value=""><p class="js-fgt_pswd fgt_pswd"><a href="https://wac.templatemonster.com/forgotpass.html">Forgot password?</a></p></div></div><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><button type="submit" name="submit" id="signin-form-submit" class="btn btn-default" tabindex="4" value="">Sign in</button></div></div></fieldset></form><div class="signin-block"><div class="signin-arrow"></div><div class="register-user"> New to Templatemonster? <a href="https://wac.templatemonster.com/register.html" class="link-red with-arrow"><b class="icon-arrow-small-right"></b>Register</a></div></div></div></li><li class="help-support"> <a href="#/support.php">Help &amp; Support<b class="icon-arrow-small-down"></b></a><ul class="help-menu"><li><a title="Help &amp; Support" href="/support.php" class=""><strong>Help Center</strong></a></li><li><a title="Free Sample Templates" href="/free-templates.php" class=""><strong>Free Sample Templates</strong></a></li><li><a title="Refund Policy" href="/refund-policy.php" class=""><strong>Refund Policy</strong></a></li><li><a title="Report Spam" href="/report-spam.php" class=""><strong>Report Spam</strong></a></li></ul></li><li class="language-pick"> <a href="#">US<b class="icon-arrow-small-down"></b></a><ul class="languages-menu"><li style="display:none"><a title="Templatemonster - TemplateMonster US" href="http://www.templatemonster.com/" class="us-language"><strong>US</strong> <i class="svg lang-icon"></i> </a></li><li><a title="Plantillas Web - TemplateMonster en Espanol" href="http://www.templatemonster.com/es/" class="es-language"><strong>ES</strong> <i class="svg lang-icon"></i> </a></li><li><a title="TemplateMonster Russia: создать сайт так просто" href="http://www.templatemonster.com/ru/" class="ru-language"><strong>RU</strong> <i class="svg lang-icon"></i> </a></li><li><a title="TemplateMonster auf Deutsch" href="http://www.templatemonster.com/de/" class="de-language"><strong>DE</strong> <i class="svg lang-icon"></i> </a></li><li><a title="TemplateMonster Polska" href="http://www.templatemonster.com/pl/" class="pl-language"><strong>PL</strong> <i class="svg lang-icon"></i> </a></li><li><a title="" href="http://www.templatemonster.com/it/ " class="it-language"><strong>IT</strong> <i class="svg lang-icon"></i> </a></li><li><a title="" href="http://www.templatemonster.com/tr/" class="tr-language"><strong>TR</strong> <i class="svg lang-icon"></i> </a></li><li><a title="" href="http://www.templatemonster.com/fr/ " class="fr-language"><strong>FR</strong> <i class="svg lang-icon"></i> </a></li><li><a title="" href="http://www.templatemonster.com/pt-br/" class="br-language"><strong>BR</strong> <i class="svg lang-icon"></i> </a></li></ul></li></ul></div></div><div class="header"><div class="container"><div class="row"><div class="col-lg-3 col-md-4 col-mdm-4 col-sm-4"><div class="block-logo"> <a class="logo" href="/"></a></div></div><div class="col-lg-7 col-md-6 col-sm-6"><div class="block-search"><form id="js-searchForm" name="searchForm" class="form-search" action="/templates.php"><div class="input-append control-group"> <input name="keywords" type="text" placeholder="Enter Keyword or Product Number" class="js-typeahead2 keyword-search-field js-placeholder form-control" value=""/> <a href="#" id="searchFormSubmit" onclick="$('#js-searchForm').submit();return false;" class="btn btn-default"><span class="icon-search"></span></a></div> <label>e.g., <span id="js-search-label">responsive wordpress</span></label></form></div></div><div class="col-lg-2 col-md-2 col-sm-2"><div class="block-cart"> <a href="/cart.php" class="shop-cart"><b class="icon-cart"></b>Shopping Cart <span class="cart-count js-cart-count" id="cart-count">0<b class="arrow"></b></span></a></div></div></div></div></div><div class="navigation"><div class="container"><ul class="nav main-menu"><li class="sub-menu"><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Best Sellers']);" href="http://www.templatemonster.com/best-sellers/">Best Sellers </a><div class="sub-menu-1 "><ul><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'WordPress Themes']);" href="http://www.templatemonster.com/wordpress-themes.php"> <b class="icon-wordpress svg square-icon"></b> WordPress Themes</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Joomla Templates']);" href="http://www.templatemonster.com/joomla-templates.php"> <b class="icon-joomla svg square-icon"></b> Joomla Templates</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'PrestaShop Themes']);" href="http://www.templatemonster.com/prestashop-themes.php"> <b class="icon-prestahop svg square-icon"></b> PrestaShop Themes</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Magento Themes']);" href="http://www.templatemonster.com/magento-themes.php"> <b class="icon-magento svg square-icon"></b> Magento Themes</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Website Templates']);" href="http://www.templatemonster.com/website-templates.php"> <b class="icon-html5-2 svg square-icon"></b> Website Templates</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Responsive Templates']);" href="http://www.templatemonster.com/properties/features/responsive-design/"> <b class="icon-responsive svg square-icon"></b> Responsive Templates</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Moto CMS Templates']);" href="http://www.templatemonster.com/moto-cms-html-templates.php"> <b class="icon-moto svg square-icon"></b> Moto CMS Templates</a></li></ul></div></li><li class="sub-menu"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Categories']);" href="http://www.templatemonster.com/category/">Categories</a><div class="sub-menu-2  clearfix"><ul><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Art &amp; Culture']);" href="http://www.templatemonster.com/category/art-culture/"> <b class="icon-"></b>Art & Culture </a> <span>(841)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Art']);" href="http://www.templatemonster.com/category/art-templates/">Art</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Music']);" href="http://www.templatemonster.com/category/music/">Music</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Museum']);" href="http://www.templatemonster.com/category/museum-templates/">Museum</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Movie']);" href="http://www.templatemonster.com/category/movie-templates/">Movie</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Theatre']);" href="http://www.templatemonster.com/category/theater-templates/">Theatre</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Animals &amp; Pets']);" href="http://www.templatemonster.com/category/animals-pets/"> <b class="icon-"></b>Animals & Pets </a> <span>(429)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Pets']);" href="http://www.templatemonster.com/category/animals-pets/">Pets</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Wild Life']);" href="http://www.templatemonster.com/category/wild-life-templates/">Wild Life</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Zoo']);" href="http://www.templatemonster.com/category/zoo-templates/">Zoo</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Design &amp; Photography']);" href="http://www.templatemonster.com/category/design-photography/"> <b class="icon-"></b>Design & Photography </a> <span>(5609)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Design']);" href="http://www.templatemonster.com/category/design/">Design</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Photography']);" href="http://www.templatemonster.com/category/art-photography/">Photography</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Architecture']);" href="http://www.templatemonster.com/category/architecture/">Architecture</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Electronics']);" href="http://www.templatemonster.com/category/electronics/"> <b class="icon-"></b>Electronics </a> <span>(665)</span><p></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Holidays, Gifts &amp; Flowers']);" href="http://www.templatemonster.com/category/holidays-gifts-flowers/"> <b class="icon-"></b>Holidays, Gifts & Flowers </a> <span>(452)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Flowers']);" href="http://www.templatemonster.com/category/flowers/">Flowers</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Holidays']);" href="http://www.templatemonster.com/category/holiday-templates/">Holidays</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Gifts']);" href="http://www.templatemonster.com/category/gifts/">Gifts</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Education &amp; Books']);" href="http://www.templatemonster.com/category/education-books/"> <b class="icon-"></b>Education & Books </a> <span>(679)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Books']);" href="http://www.templatemonster.com/category/books/">Books</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Education']);" href="http://www.templatemonster.com/category/education/">Education</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Science']);" href="http://www.templatemonster.com/category/science/">Science</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Business &amp; Services']);" href="http://www.templatemonster.com/category/business/"> <b class="icon-"></b>Business & Services </a> <span>(8730)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Consulting']);" href="http://www.templatemonster.com/category/consulting-templates/">Consulting</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Industrial']);" href="http://www.templatemonster.com/category/industrial/">Industrial</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Law']);" href="http://www.templatemonster.com/category/law/">Law</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Cars &amp; Motorcycles']);" href="http://www.templatemonster.com/category/cars-motorcycles/"> <b class="icon-"></b>Cars & Motorcycles </a> <span>(655)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Cars']);" href="http://www.templatemonster.com/category/cars/">Cars</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Motorcycles']);" href="http://www.templatemonster.com/category/motor-sports-templates/">Motorcycles</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Sports, Outdoors &amp; Travel']);" href="http://www.templatemonster.com/category/sports-outdoors-travel/"> <b class="icon-"></b>Sports, Outdoors & Travel </a> <span>(2157)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Sports']);" href="http://www.templatemonster.com/category/sport/">Sports</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Travel']);" href="http://www.templatemonster.com/category/travel/">Travel</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Hotels']);" href="http://www.templatemonster.com/category/hotels/">Hotels</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Fashion &amp; Beauty']);" href="http://www.templatemonster.com/category/fashion-beauty/"> <b class="icon-"></b>Fashion & Beauty </a> <span>(3160)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Fashion']);" href="http://www.templatemonster.com/category/fashion/">Fashion</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Jewelry']);" href="http://www.templatemonster.com/category/jewelry/">Jewelry</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Beauty']);" href="http://www.templatemonster.com/category/beauty/">Beauty</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Computers &amp; Internet']);" href="http://www.templatemonster.com/category/computers-internet/"> <b class="icon-"></b>Computers & Internet </a> <span>(1323)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Hosting']);" href="http://www.templatemonster.com/category/hosting/">Hosting</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Software']);" href="http://www.templatemonster.com/category/software/">Software</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Food &amp; Restaurant']);" href="http://www.templatemonster.com/category/food-restaurant/"> <b class="icon-"></b>Food & Restaurant </a> <span>(1361)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Restaurant']);" href="http://www.templatemonster.com/category/cafe-and-restaurant/">Restaurant</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Food &amp; Drinks']);" href="http://www.templatemonster.com/category/food-drink/">Food & Drinks</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Cafe']);" href="http://www.templatemonster.com/category/cafe-templates/">Cafe</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Society &amp; People']);" href="http://www.templatemonster.com/category/society-people/"> <b class="icon-"></b>Society & People </a> <span>(1652)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Personal Pages']);" href="http://www.templatemonster.com/category/personal-pages/">Personal Pages</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Dating']);" href="http://www.templatemonster.com/category/dating/">Dating</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Religion']);" href="http://www.templatemonster.com/category/religious/">Religion</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Charity']);" href="http://www.templatemonster.com/category/charity/">Charity</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Home &amp; Family']);" href="http://www.templatemonster.com/category/home-family/"> <b class="icon-"></b>Home & Family </a> <span>(2525)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Wedding']);" href="http://www.templatemonster.com/category/wedding/">Wedding</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Interior &amp; Furniture']);" href="http://www.templatemonster.com/category/interior-furniture/">Interior & Furniture</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', ' Children, Kids']);" href="http://www.templatemonster.com/category/kids-children/">Kids & Children</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Entertainment, Games &amp; Nightlife']);" href="http://www.templatemonster.com/category/entertainment-games-nightlife/"> <b class="icon-"></b>Entertainment, Games & Nightlife </a> <span>(1002)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Games']);" href="http://www.templatemonster.com/category/games/">Games</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Night Club']);" href="http://www.templatemonster.com/category/night-club/">Night Club</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Online Casino']);" href="http://www.templatemonster.com/category/online-casino/">Online Casino</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Radio']);" href="http://www.templatemonster.com/category/radio-website-templates/">Radio</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Real Estate']);" href="http://www.templatemonster.com/category/real-estate/"> <b class="icon-"></b>Real Estate </a> <span>(323)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Real Estate Agency']);" href="http://www.templatemonster.com/category/real-estate/">Real Estate Agency</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Mortgage']);" href="http://www.templatemonster.com/category/mortgage-templates/">Mortgage</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Land Broker']);" href="http://www.templatemonster.com/category/land-broker-templates/">Land Broker</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Medical (Healthcare)']);" href="http://www.templatemonster.com/category/medical/"> <b class="icon-"></b>Medical (Healthcare) </a> <span>(630)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Drug Store']);" href="http://www.templatemonster.com/category/drug-store-templates/">Drug Store</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Dentistry']);" href="http://www.templatemonster.com/category/dentistry-templates/">Dentistry</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Herbal']);" href="http://www.templatemonster.com/category/herbal-templates/">Herbal</a></p></li></ul></div></li><li class="sub-menu"><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Web Templates']);" href="http://www.templatemonster.com/web-templates.php">Web Templates</a><div class="sub-menu-3  clearfix"><ul><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Responsive Templates']);" href="http://www.templatemonster.com/properties/features/responsive-design/"><b class="icon-responsive svg square-icon"></b>Responsive <br>Templates </a><span>(4344)</span><p class="sub-menu-padding">Make website fully responsive for all devices and screen resolutions. Startlingly adaptive designs done right</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Wix Website Templates']);" href="http://www.templatemonster.com/wix-website-templates.php"><b class="icon-wix svg square-icon"></b>Wix Website <br>Templates </a><span>(22)</span><p class="sub-menu-padding">Designer-made templates to build awesome websites as simple as drag & drop</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Bootstrap Themes']);" href="http://www.templatemonster.com/properties/features/bootstrap-templates/"><b class="icon-bootstrap svg square-icon"></b>Bootstrap <br>Themes </a><span>(2650)</span><p class="sub-menu-padding">Have everything in place to be a real contender: Bootstrap functionality, responsive design, unique add-ons</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'HTML5 Site Templates']);" href="http://www.templatemonster.com/website-templates.php"><b class="icon-html5-2 svg square-icon"></b>HTML5 Site <br>Templates </a><span>(7085)</span><p class="sub-menu-padding">Super customizable themes built on intelligent HTML5, with a clean look to design and coding</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'PSD Templates']);" href="http://www.templatemonster.com/psd-templates.php"><b class="icon-psd svg square-icon"></b>PSD <br>Templates </a><span>(1037)</span><p class="sub-menu-padding">Multipurpose themes that have only graphic design source files, very flexible with a variety of custom options</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Facebook Themes']);" href="http://www.templatemonster.com/facebook-layouts.php"><b class="icon-facebook svg square-icon"></b>Facebook <br>Themes </a><span>(1542)</span><p class="sub-menu-padding">Social minded, engaging brand pages made to be perfect companion for your company’s main website</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Photo Gallery Templates']);" href="http://www.templatemonster.com/photo-gallery-templates.php"><b class="icon-moto svg square-icon"></b>Photo Gallery <br>Templates </a><span>(290)</span><p class="sub-menu-padding">Perfect combination of the drag-n-drop ability of site builder, the cataloging of photos, and the editing power of MotoCMS</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Newsletter Templates']);" href="http://www.templatemonster.com/newsletter-email-templates.php"><b class="icon-email svg square-icon"></b>Newsletter Templates </a><span>(12)</span><p class="sub-menu-padding">Responsive email templates with a modern design you could use to get more people to sign up for your newsletter</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Muse Templates']);" href="http://www.templatemonster.com/adobe-muse-templates.php"><b class="icon-muse svg square-icon"></b>Muse <br>Templates </a><span>(43)</span><p class="sub-menu-padding">Create fully functonal cross-browser sites with new Adobe product, no coding skills required</p></li></ul><a class="banner" href="http://www.templatemonster.com/templates.php?propertylist%5B2553%5D%5B0%5D=64310&amp;propertylist%5Btypes%5D%5B0%5D=50108"> <span class="browse-btn">Browse Now</span> <span>Photo Galleries for Creative Photographers</span><p>Unique galleries • Touch-Optimized • Mobile version included</p> </a><ul class="sub-menu-3-bottom clearfix"></ul></div></li><li class="sub-menu"><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'CMS Templates']);" href="http://www.templatemonster.com/cms-blog-templates.php">CMS Templates</a><div class="sub-menu-3  clearfix"><ul><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'WordPress Themes']);" href="http://www.templatemonster.com/wordpress-themes.php"><b class="icon-wordpress svg square-icon"></b>WordPress <br>Themes </a><span>(1897)</span><p class="sub-menu-padding">Three reasons to use WordPress: no time, no skills, no headache</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Drupal Themes']);" href="http://www.templatemonster.com/drupal-themes.php"><b class="icon-drupal svg square-icon"></b>Drupal <br>Themes </a><span>(506)</span><p class="sub-menu-padding">In the hands of a knowledgeable, Drupal theme is a glove that fits all sizes</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Joomla Templates']);" href="http://www.templatemonster.com/joomla-templates.php"><b class="icon-joomla svg square-icon"></b>Joomla <br>Templates </a><span>(1765)</span><p class="sub-menu-padding">Best for users with prior technical or website experience</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Moto CMS HTML']);" href="http://www.templatemonster.com/moto-cms-html-templates.php"><b class="icon-moto svg square-icon"></b>Moto CMS HTML <br>Templates </a><span>(1423)</span><p class="sub-menu-padding">Powerful templates with feature-rich editing tools for less technically skilled</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Turnkey Websites']);" href="http://www.templatemonster.com/turnkey-websites.php"><b class="icon-monster_dark svg square-icon"></b>Turnkey <br>Websites </a><span>(289)</span><p class="sub-menu-padding">Drag & drop admin controlled templates, fit both experienced and beginners</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Flash CMS']);" href="http://www.templatemonster.com/flash-cms-templates.php"><b class="icon-moto svg square-icon"></b>Flash CMS <br>Templates </a><span>(778)</span><p class="sub-menu-padding">Drag & drop builder comprised with beautiful designs, minimum skills required</p></li></ul><ul class="sub-menu-3-bottom clearfix"></ul></div></li><li class="sub-menu"><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'E-commerce Templates']);" href="http://www.templatemonster.com/ecommerce-templates.php">E-commerce Templates</a><div class="sub-menu-3  clearfix"><ul><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'Magento Themes']);" href="http://www.templatemonster.com/magento-themes.php"><b class="icon-magento svg square-icon"></b>Magento <br>Themes </a><span>(943)</span><p class="sub-menu-padding">Robustly featured and scalable shopping cart for tech-savvy web developers</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'VirtueMart Templates']);" href="http://www.templatemonster.com/virtuemart-templates.php"><b class="icon-virtuemart svg square-icon"></b>VirtueMart <br>Templates </a><span>(545)</span><p class="sub-menu-padding">Flexible e-commerce plugin for Joomla, optimal for small to mid-sized stores</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'ZenCart Templates']);" href="http://www.templatemonster.com/zencart-templates.php"><b class="icon-zencart svg square-icon"></b>ZenCart <br>Templates </a><span>(830)</span><p class="sub-menu-padding">Shopping cart with great merchandising features to run a bigger web store</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'PrestaShop Themes']);" href="http://www.templatemonster.com/prestashop-themes.php"><b class="icon-prestahop svg square-icon"></b>PrestaShop <br>Themes </a><span>(989)</span><p class="sub-menu-padding">User-friendly platform good in its quick set up and simple managing</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'Jigoshop Themes']);" href="http://www.templatemonster.com/jigoshop-themes.php"><b class="icon-jigoshop svg square-icon"></b>Jigoshop <br>Themes </a><span>(167)</span><p class="sub-menu-padding">WordPress based e-commerce solution made to be fast and easy to use</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'OpenCart Templates']);" href="http://www.templatemonster.com/opencart-templates.php"><b class="icon-opencart svg square-icon"></b>OpenCart <br>Templates </a><span>(491)</span><p class="sub-menu-padding">For small-to-mid merchants who need simple, highly extensible platform</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'Shopify Themes']);" href="http://www.templatemonster.com/shopify-themes.php"><b class="icon-shopify svg square-icon"></b>Shopify <br>Themes </a><span>(116)</span><p class="sub-menu-padding">Instant e-commerce platform with simple customization, great for entrepreneurs who want a hosted store</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'WooCommerce']);" href="http://www.templatemonster.com/woocommerce-themes.php"><b class="icon-woo svg square-icon"></b>WooCommerce <br>Themes </a><span>(193)</span><p class="sub-menu-padding">Predesigned templates to handle e-commerce store on your WordPress based website</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'osCommerce Templates']);" href="http://www.templatemonster.com/oscommerce-templates.php"><b class="icon-osc svg square-icon"></b>osCommerce <br>Templates </a><span>(1460)</span><p class="sub-menu-padding">Great for advanced online merchants who need highly configurable stores</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'Loaded7 Templates']);" href="http://www.templatemonster.com/loaded7-templates.php"><b class="icon-loaded7 svg square-icon"></b>Loaded7 Templates </a><span>(5)</span><p class="sub-menu-padding">Outstanding mobile performance for both customers and store owners</p></li></ul><ul class="sub-menu-3-bottom clearfix"></ul></div></li><li class="sub-menu"><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'Flash &amp; Media']);" href="http://www.templatemonster.com/flash-media/">Flash & Media</a><div class="sub-menu-3 sub-menu-3-last clearfix"><ul><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'Flash Templates']);" href="http://www.templatemonster.com/flash-templates.php"><b class="icon-flash svg square-icon"></b>Flash Site <br>Templates </a><span>(5860)</span><p class="sub-menu-padding">Animation-rich templates a par with video clips, fit all websites and users of any level</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'Flash Intro']);" href="http://www.templatemonster.com/flash-intro.php"><b class="icon-flash svg square-icon"></b>Flash Intro <br>Templates </a><span>(183)</span><p class="sub-menu-padding">Intro is a great way to attract visitors and give your website a diamond shine</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'SWiSH Templates']);" href="http://www.templatemonster.com/swish-templates.php"><b class="icon-swish svg square-icon"></b>SWiSH <br>Templates </a><span>(753)</span><p class="sub-menu-padding">Best creation tool with tons of Flash effects to develop fully interactive websites</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'After Effects Templates']);" href="http://www.templatemonster.com/video-templates.php"><b class="icon-ae svg square-icon"></b>After Effects <br>Templates </a><span>(261)</span><p class="sub-menu-padding">Hollywood-quality video products and digital motion graphics for any taste</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'PowerPoint Templates']);" href="http://www.templatemonster.com/powerpoint-templates.php"><b class="icon-powerpoint svg square-icon"></b>PowerPoint <br>Templates </a><span>(428)</span><p class="sub-menu-padding">Bold and captivating templates that combine quality visuals with clear message</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'Corporate Design ']);" href="http://www.templatemonster.com/corporate-design.php"><b class="icon-corporate svg square-icon"></b>Corporate <br>Design </a><span>(3930)</span><p class="sub-menu-padding">Template catalog designed around conceptually inspired brand identity</p></li></ul><ul class="sub-menu-3-bottom clearfix"></ul></div></li></ul></div></div></header><div id="content"><div class="container category_land" id="post-153"><div class="wp-page-heading"><h1 class="wp-heading">Shop by Category</h1><p>Only high quality web templates with free 24/7 support since 2002.</p></div><h2 class="wp_title">Popular Template Categories</h2><div class="wp-landing-categories"><div class="row"><ul class="wp-categories-list"><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/art-culture/"><h5 class="wp-categories-title">Art &amp; Culture</h5><img class="wp-categories-icon svg-image" alt="Art &amp; Culture" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/culture.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/animals-pets/"><h5 class="wp-categories-title">Animals &amp; Pets</h5><img class="wp-categories-icon svg-image" alt="Animals &amp; Pets" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/animals.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/design-photography/"><h5 class="wp-categories-title">Design &amp; Photography</h5><img class="wp-categories-icon svg-image" alt="Design &amp; Photography" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/photo.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/electronics/"><h5 class="wp-categories-title">Electronics</h5><img class="wp-categories-icon svg-image" alt="Electronics" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/electronics.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/education-books/"><h5 class="wp-categories-title">Education &amp; Books</h5><img class="wp-categories-icon svg-image" alt="Education &amp; Books" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/education.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/business/"><h5 class="wp-categories-title">Business &amp; Services</h5><img class="wp-categories-icon svg-image" alt="Business &amp; Services" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/business.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/cars-motorcycles/"><h5 class="wp-categories-title">Cars &amp; Motorcycles</h5><img class="wp-categories-icon svg-image" alt="Cars &amp; Motorcycles" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/cars.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/sports-outdoors-travel/"><h5 class="wp-categories-title">Sports, Outdoors &amp; Travel</h5><img class="wp-categories-icon svg-image" alt="Sports, Outdoors &amp; Travel" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/travel.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/fashion-beauty/"><h5 class="wp-categories-title">Fashion &amp; Beauty</h5><img class="wp-categories-icon svg-image" alt="Fashion &amp; Beauty" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/fashion.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/computers-internet/"><h5 class="wp-categories-title">Computers &amp; Internet</h5><img class="wp-categories-icon svg-image" alt="Computers &amp; Internet" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/computers.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/food-restaurant/"><h5 class="wp-categories-title">Food &amp; Restaurant</h5><img class="wp-categories-icon svg-image" alt="Food &amp; Restaurant" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/food.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/home-family/"><h5 class="wp-categories-title">Home &amp; Family</h5><img class="wp-categories-icon svg-image" alt="Home &amp; Family" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/home.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/entertainment-games-nightlife/"><h5 class="wp-categories-title">Entertainment, Games &amp; Nightlife</h5><img class="wp-categories-icon svg-image" alt="Entertainment, Games &amp; Nightlife" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/entertainment.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/holidays-gifts-flowers/"><h5 class="wp-categories-title">Holidays, Gifts &amp; Flowers</h5><img class="wp-categories-icon svg-image" alt="Holidays, Gifts &amp; Flowers" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/holidays.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/society-people/"><h5 class="wp-categories-title">Society &amp; People</h5><img class="wp-categories-icon svg-image" alt="Society &amp; People" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/people.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/medical/"><h5 class="wp-categories-title">Medical (Healthcare)</h5><img class="wp-categories-icon svg-image" alt="Medical (Healthcare)" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2014/03/medical.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/real-estate/"><h5 class="wp-categories-title">Real Estate</h5><img class="wp-categories-icon svg-image" alt="Real Estate" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2014/03/real-estate.svg"></a></li></ul></div></div><div class="clear"></div></div></div> <footer id="footer"><div class="footer-columns"><div class="container"><div class="row footer-line-dividers"><div class="col-lg-2 col-md-2 col-sm-2 column-1"><div class="block block-style-2 company"><h3 class="block-heading">Company</h3><div class="block-content"><ul class="list"><li><a href="/about.php">About</a></li><li><a href="/testimonials.php">Testimonials</a></li><li><a href="/register_aff.php">Affiliate Program</a></li><li><a href="/contact_us.php">Contact Us</a></li></ul></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 column-2"><div class="block follow-us block-style-2"><h3 class="block-heading">Connect with Us</h3><div class="block-content"><ul class="social-list"><li><a href="http://www.facebook.com/TemplateMonster/"><b class="icon-facebook svg square-icon"></b>Be a Fan on Facebook</a></li><li><a href="http://twitter.com/#!/templatemonster"><b class="icon-twitter svg square-icon"></b>Follow Us on Twitter</a></li><li><a href="https://plus.google.com/+templatemonster/"><b class="icon-google-plus svg square-icon"></b>Join TemplateMonster at Google+</a></li></ul></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 column-3"><div class="block block-style-2 subscribe_footer"><h3 class="block-heading">Subscribe to Our Newsletter</h3><div class="block-content">Get new web templates report and design news.<form action="/jajaxserver.php?app=Newsletter&amp;action=subscription" method="POST" name="subscribe" id="subscribe-form" class="form-horizontal"><div id="subscribe-form-errors"></div><input type="hidden" name="name" id="subscribe-form-name" tabindex="1001" value="Customer"><div class="form-group"><div class="col-lg-12"><input type="email" name="email" autocomplete="off" disabled="disabled" data-constraints="@NotBlank @HTML5Required @Email(message=&quot;Doesn&#039;t look like a valid email&quot;, checkDomain=&quot;1&quot;) @HTML5Email(message=&quot;Doesn&#039;t look like a valid email&quot;, checkDomain=&quot;1&quot;) @Length(min=&quot;0&quot;, max=&quot;72&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;) @Pattern(regex=&quot;/^(.{1,64})\@/&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;)" required="required" id="subscribe-form-email" class=" form-control js-placeholder" tabindex="1002" placeholder="Email Address" value=""></div></div><div class="form-group"><div class="col-lg-12"><button type="submit" name="submit" disabled="disabled" id="subscribe-form-submit" class="btn btn-default" tabindex="1003" value="">Subscribe</button></div></div></form></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 column-4"><div class="block block-style-2 help"><h3 class="block-heading">Help &amp; Support</h3><div class="block-content"><ul class="list"><li><a href="/help/">Help Center</a></li><li><a href="/free-templates.php">Free Sample Templates</a></li><li><a href="/refund-policy.php">Refund Policy</a></li><li><a href="/report-spam.php">Report Spam</a></li></ul></div></div></div></div></div></div><div class="copyright-columns"><div class="container"><div class="row"><div class="col-lg-6 col-md-5 col-sm-5"><div class="copyright"><p>Copyright &copy; 2003–2015 Jetimpex, Inc and Jetimpex, LP. <a href="/privacy-policy.php">Privacy Policy</a><br>All Rights Reserved. Payments are performed by Jetimpex, LP.</p></div></div><div class="col-lg-5 col-md-6 col-sm-6"><div class="payments"><p>Secure Payments by <img src="http://static.tmimgcdn.com/img/paypal-img.png?58b9fe9" alt=""></p></div></div><div class="col-lg-1 col-md-1 col-sm-1"><div class="virus-protection"> <img width="81" height="54" src="http://static.tmimgcdn.com/img/comodo-secure.png?58b9fe9" alt="Comodo SSL Certificate"></div></div></div></div></div> </footer><div class="block live-chat live-chat-in"><div class="block-heading"> <a href="javascript:;" class="btn-close"><i class="icon-close"></i></a> <strong>Live Chat</strong></div><div class="block-content"><div class="box-monster"> <figure class="img-monster"><img src="http://static.tmimgcdn.com/img/img-monster.png?58b9fe9" alt=""/></figure> <span>Hello! Can I help you choose a product?</span></div><form action="/jajaxserver.php?app=InvitationToChat&amp;action=redirect" method="POST" name="live_chat" id="live-chat-form" class="form-horizontal"><div id="live-chat-form-errors"></div><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><input type="text" name="name" autocomplete="off" data-constraints="@NotBlank @HTML5Required" required="required" id="live-chat-form-name" class=" form-control js-placeholder" tabindex="1004" placeholder="Your Name" value=""></div></div><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><input type="email" name="email" autocomplete="off" data-constraints="@NotBlank @HTML5Required @Email(message=&quot;Doesn&#039;t look like a valid email&quot;) @HTML5Email(message=&quot;Doesn&#039;t look like a valid email&quot;) @Length(min=&quot;0&quot;, max=&quot;72&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;) @Pattern(regex=&quot;/^(.{1,64})\@/&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;)" required="required" id="live-chat-form-email" class=" form-control js-placeholder" tabindex="1005" placeholder="Email Address" value=""></div></div><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><button type="submit" name="submit" id="live-chat-form-submit" class="btn btn-default" tabindex="1006" value="">Start Chat</button></div></div></form>Have a support question? <a href="http://support.template-help.com/index.php?/Tickets/Submit">Submit a ticket</a></div></div><div class="block live-chat live-chat-out" style="display: none;"><div class="block-heading"> <a href="javascript:;">Live Chat <i class="icon-chat"></i> <i class="icon-arrow-up"></i></a></div></div> <script src="/js/livechatconfig.js"></script><script src="http://static.tmimgcdn.com/js/compiled.js?a39f61f"></script><script>
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
</script><script type="text/javascript">
			jQuery(document).on("submitResponse.default", function(e, response){
				Recaptcha.reload();
			});
		</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-1.newrelic.com","licenseKey":"72d7dcce33","applicationID":"2869565","transactionName":"ZV1TZ0FTVkFVWkwKXlwXcFBHW1dcG0lZBFQfU1RKRF1KVhlaWRdUVVdDSg==","queueTime":0,"applicationTime":252,"atts":"SRpQEQlJRU8=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-476.min.js"}</script></body></html>
DEBUG - 2015-01-13 00:40:17 --> File loaded: application/views/v_websites.php
DEBUG - 2015-01-13 00:40:17 --> Final output sent to browser
DEBUG - 2015-01-13 00:40:17 --> Total execution time: 0.2468
DEBUG - 2015-01-13 00:53:08 --> Config Class Initialized
DEBUG - 2015-01-13 00:53:08 --> Hooks Class Initialized
DEBUG - 2015-01-13 00:53:08 --> Utf8 Class Initialized
DEBUG - 2015-01-13 00:53:08 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 00:53:08 --> URI Class Initialized
DEBUG - 2015-01-13 00:53:08 --> Router Class Initialized
DEBUG - 2015-01-13 00:53:08 --> No URI present. Default controller set.
DEBUG - 2015-01-13 00:53:08 --> Output Class Initialized
DEBUG - 2015-01-13 00:53:08 --> Security Class Initialized
DEBUG - 2015-01-13 00:53:08 --> Input Class Initialized
DEBUG - 2015-01-13 00:53:08 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 00:53:08 --> Language Class Initialized
DEBUG - 2015-01-13 00:53:08 --> Loader Class Initialized
DEBUG - 2015-01-13 00:53:08 --> Controller Class Initialized
DEBUG - 2015-01-13 00:53:08 --> Helper loaded: url_helper
DEBUG - 2015-01-13 00:53:08 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 00:53:08 --> Final output sent to browser
DEBUG - 2015-01-13 00:53:08 --> Total execution time: 0.0126
DEBUG - 2015-01-13 00:53:24 --> Config Class Initialized
DEBUG - 2015-01-13 00:53:24 --> Hooks Class Initialized
DEBUG - 2015-01-13 00:53:24 --> Utf8 Class Initialized
DEBUG - 2015-01-13 00:53:24 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 00:53:24 --> URI Class Initialized
DEBUG - 2015-01-13 00:53:24 --> Router Class Initialized
DEBUG - 2015-01-13 00:53:24 --> No URI present. Default controller set.
DEBUG - 2015-01-13 00:53:24 --> Output Class Initialized
DEBUG - 2015-01-13 00:53:24 --> Security Class Initialized
DEBUG - 2015-01-13 00:53:24 --> Input Class Initialized
DEBUG - 2015-01-13 00:53:24 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 00:53:24 --> Language Class Initialized
DEBUG - 2015-01-13 00:53:24 --> Loader Class Initialized
DEBUG - 2015-01-13 00:53:24 --> Controller Class Initialized
DEBUG - 2015-01-13 00:53:24 --> Helper loaded: url_helper
DEBUG - 2015-01-13 00:53:24 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 00:53:24 --> Final output sent to browser
DEBUG - 2015-01-13 00:53:24 --> Total execution time: 0.0131
DEBUG - 2015-01-13 01:49:22 --> Config Class Initialized
DEBUG - 2015-01-13 01:49:22 --> Hooks Class Initialized
DEBUG - 2015-01-13 01:49:22 --> Utf8 Class Initialized
DEBUG - 2015-01-13 01:49:22 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 01:49:22 --> URI Class Initialized
DEBUG - 2015-01-13 01:49:22 --> Router Class Initialized
DEBUG - 2015-01-13 01:49:22 --> No URI present. Default controller set.
DEBUG - 2015-01-13 01:49:22 --> Output Class Initialized
DEBUG - 2015-01-13 01:49:22 --> Security Class Initialized
DEBUG - 2015-01-13 01:49:22 --> Input Class Initialized
DEBUG - 2015-01-13 01:49:22 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 01:49:22 --> Language Class Initialized
DEBUG - 2015-01-13 01:49:22 --> Loader Class Initialized
DEBUG - 2015-01-13 01:49:22 --> Controller Class Initialized
DEBUG - 2015-01-13 01:49:22 --> Helper loaded: url_helper
DEBUG - 2015-01-13 01:49:22 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 01:49:22 --> Final output sent to browser
DEBUG - 2015-01-13 01:49:22 --> Total execution time: 0.0155
DEBUG - 2015-01-13 01:54:52 --> Config Class Initialized
DEBUG - 2015-01-13 01:54:52 --> Hooks Class Initialized
DEBUG - 2015-01-13 01:54:52 --> Utf8 Class Initialized
DEBUG - 2015-01-13 01:54:52 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 01:54:52 --> URI Class Initialized
DEBUG - 2015-01-13 01:54:52 --> Router Class Initialized
DEBUG - 2015-01-13 01:54:52 --> No URI present. Default controller set.
DEBUG - 2015-01-13 01:54:52 --> Output Class Initialized
DEBUG - 2015-01-13 01:54:52 --> Security Class Initialized
DEBUG - 2015-01-13 01:54:52 --> Input Class Initialized
DEBUG - 2015-01-13 01:54:52 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 01:54:52 --> Language Class Initialized
DEBUG - 2015-01-13 01:54:52 --> Loader Class Initialized
DEBUG - 2015-01-13 01:54:52 --> Controller Class Initialized
DEBUG - 2015-01-13 01:54:52 --> Helper loaded: url_helper
DEBUG - 2015-01-13 01:54:52 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 01:54:52 --> Final output sent to browser
DEBUG - 2015-01-13 01:54:52 --> Total execution time: 0.0125
DEBUG - 2015-01-13 01:55:51 --> Config Class Initialized
DEBUG - 2015-01-13 01:55:51 --> Hooks Class Initialized
DEBUG - 2015-01-13 01:55:51 --> Utf8 Class Initialized
DEBUG - 2015-01-13 01:55:51 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 01:55:51 --> URI Class Initialized
DEBUG - 2015-01-13 01:55:51 --> Router Class Initialized
DEBUG - 2015-01-13 01:55:51 --> No URI present. Default controller set.
DEBUG - 2015-01-13 01:55:51 --> Output Class Initialized
DEBUG - 2015-01-13 01:55:51 --> Security Class Initialized
DEBUG - 2015-01-13 01:55:51 --> Input Class Initialized
DEBUG - 2015-01-13 01:55:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 01:55:51 --> Language Class Initialized
DEBUG - 2015-01-13 01:55:51 --> Loader Class Initialized
DEBUG - 2015-01-13 01:55:51 --> Controller Class Initialized
DEBUG - 2015-01-13 01:55:51 --> Helper loaded: url_helper
DEBUG - 2015-01-13 01:55:51 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 01:55:51 --> Final output sent to browser
DEBUG - 2015-01-13 01:55:51 --> Total execution time: 0.0124
DEBUG - 2015-01-13 02:54:24 --> Config Class Initialized
DEBUG - 2015-01-13 02:54:24 --> Hooks Class Initialized
DEBUG - 2015-01-13 02:54:24 --> Utf8 Class Initialized
DEBUG - 2015-01-13 02:54:24 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 02:54:24 --> URI Class Initialized
DEBUG - 2015-01-13 02:54:24 --> Router Class Initialized
DEBUG - 2015-01-13 02:54:24 --> No URI present. Default controller set.
DEBUG - 2015-01-13 02:54:24 --> Output Class Initialized
DEBUG - 2015-01-13 02:54:24 --> Security Class Initialized
DEBUG - 2015-01-13 02:54:24 --> Input Class Initialized
DEBUG - 2015-01-13 02:54:24 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 02:54:24 --> Language Class Initialized
DEBUG - 2015-01-13 02:54:24 --> Loader Class Initialized
DEBUG - 2015-01-13 02:54:24 --> Controller Class Initialized
DEBUG - 2015-01-13 02:54:25 --> Helper loaded: url_helper
DEBUG - 2015-01-13 02:54:25 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 02:54:25 --> Final output sent to browser
DEBUG - 2015-01-13 02:54:25 --> Total execution time: 0.0136
DEBUG - 2015-01-13 02:57:10 --> Config Class Initialized
DEBUG - 2015-01-13 02:57:10 --> Hooks Class Initialized
DEBUG - 2015-01-13 02:57:10 --> Utf8 Class Initialized
DEBUG - 2015-01-13 02:57:10 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 02:57:10 --> URI Class Initialized
DEBUG - 2015-01-13 02:57:10 --> Router Class Initialized
DEBUG - 2015-01-13 02:57:10 --> No URI present. Default controller set.
DEBUG - 2015-01-13 02:57:10 --> Output Class Initialized
DEBUG - 2015-01-13 02:57:10 --> Security Class Initialized
DEBUG - 2015-01-13 02:57:10 --> Input Class Initialized
DEBUG - 2015-01-13 02:57:10 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 02:57:10 --> Language Class Initialized
DEBUG - 2015-01-13 02:57:10 --> Loader Class Initialized
DEBUG - 2015-01-13 02:57:10 --> Controller Class Initialized
DEBUG - 2015-01-13 02:57:10 --> Helper loaded: url_helper
DEBUG - 2015-01-13 02:57:10 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 02:57:10 --> Final output sent to browser
DEBUG - 2015-01-13 02:57:10 --> Total execution time: 0.0126
DEBUG - 2015-01-13 02:57:34 --> Config Class Initialized
DEBUG - 2015-01-13 02:57:34 --> Hooks Class Initialized
DEBUG - 2015-01-13 02:57:34 --> Utf8 Class Initialized
DEBUG - 2015-01-13 02:57:34 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 02:57:34 --> URI Class Initialized
DEBUG - 2015-01-13 02:57:34 --> Router Class Initialized
DEBUG - 2015-01-13 02:57:34 --> No URI present. Default controller set.
DEBUG - 2015-01-13 02:57:34 --> Output Class Initialized
DEBUG - 2015-01-13 02:57:34 --> Security Class Initialized
DEBUG - 2015-01-13 02:57:34 --> Input Class Initialized
DEBUG - 2015-01-13 02:57:34 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 02:57:34 --> Language Class Initialized
DEBUG - 2015-01-13 02:57:34 --> Loader Class Initialized
DEBUG - 2015-01-13 02:57:34 --> Controller Class Initialized
DEBUG - 2015-01-13 02:57:34 --> Helper loaded: url_helper
DEBUG - 2015-01-13 02:57:34 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 02:57:34 --> Final output sent to browser
DEBUG - 2015-01-13 02:57:34 --> Total execution time: 0.0128
DEBUG - 2015-01-13 03:51:35 --> Config Class Initialized
DEBUG - 2015-01-13 03:51:35 --> Hooks Class Initialized
DEBUG - 2015-01-13 03:51:35 --> Utf8 Class Initialized
DEBUG - 2015-01-13 03:51:35 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 03:51:35 --> URI Class Initialized
DEBUG - 2015-01-13 03:51:35 --> Router Class Initialized
DEBUG - 2015-01-13 03:51:35 --> No URI present. Default controller set.
DEBUG - 2015-01-13 03:51:35 --> Output Class Initialized
DEBUG - 2015-01-13 03:51:35 --> Security Class Initialized
DEBUG - 2015-01-13 03:51:35 --> Input Class Initialized
DEBUG - 2015-01-13 03:51:35 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 03:51:35 --> Language Class Initialized
DEBUG - 2015-01-13 03:51:35 --> Loader Class Initialized
DEBUG - 2015-01-13 03:51:35 --> Controller Class Initialized
DEBUG - 2015-01-13 03:51:35 --> Helper loaded: url_helper
DEBUG - 2015-01-13 03:51:35 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 03:51:35 --> Final output sent to browser
DEBUG - 2015-01-13 03:51:35 --> Total execution time: 0.0126
DEBUG - 2015-01-13 03:51:50 --> Config Class Initialized
DEBUG - 2015-01-13 03:51:50 --> Hooks Class Initialized
DEBUG - 2015-01-13 03:51:50 --> Utf8 Class Initialized
DEBUG - 2015-01-13 03:51:50 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 03:51:50 --> URI Class Initialized
DEBUG - 2015-01-13 03:51:50 --> Router Class Initialized
DEBUG - 2015-01-13 03:51:50 --> No URI present. Default controller set.
DEBUG - 2015-01-13 03:51:50 --> Output Class Initialized
DEBUG - 2015-01-13 03:51:50 --> Security Class Initialized
DEBUG - 2015-01-13 03:51:50 --> Input Class Initialized
DEBUG - 2015-01-13 03:51:50 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 03:51:50 --> Language Class Initialized
DEBUG - 2015-01-13 03:51:50 --> Loader Class Initialized
DEBUG - 2015-01-13 03:51:50 --> Controller Class Initialized
DEBUG - 2015-01-13 03:51:50 --> Helper loaded: url_helper
DEBUG - 2015-01-13 03:51:50 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 03:51:50 --> Final output sent to browser
DEBUG - 2015-01-13 03:51:50 --> Total execution time: 0.0128
DEBUG - 2015-01-13 03:56:36 --> Config Class Initialized
DEBUG - 2015-01-13 03:56:36 --> Hooks Class Initialized
DEBUG - 2015-01-13 03:56:36 --> Utf8 Class Initialized
DEBUG - 2015-01-13 03:56:36 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 03:56:36 --> URI Class Initialized
DEBUG - 2015-01-13 03:56:36 --> Router Class Initialized
DEBUG - 2015-01-13 03:56:36 --> No URI present. Default controller set.
DEBUG - 2015-01-13 03:56:36 --> Output Class Initialized
DEBUG - 2015-01-13 03:56:36 --> Security Class Initialized
DEBUG - 2015-01-13 03:56:36 --> Input Class Initialized
DEBUG - 2015-01-13 03:56:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 03:56:36 --> Language Class Initialized
DEBUG - 2015-01-13 03:56:36 --> Loader Class Initialized
DEBUG - 2015-01-13 03:56:36 --> Controller Class Initialized
DEBUG - 2015-01-13 03:56:36 --> Helper loaded: url_helper
DEBUG - 2015-01-13 03:56:36 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 03:56:36 --> Final output sent to browser
DEBUG - 2015-01-13 03:56:36 --> Total execution time: 0.0126
DEBUG - 2015-01-13 04:44:30 --> Config Class Initialized
DEBUG - 2015-01-13 04:44:30 --> Hooks Class Initialized
DEBUG - 2015-01-13 04:44:30 --> Utf8 Class Initialized
DEBUG - 2015-01-13 04:44:30 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 04:44:30 --> URI Class Initialized
DEBUG - 2015-01-13 04:44:30 --> Router Class Initialized
DEBUG - 2015-01-13 04:44:30 --> No URI present. Default controller set.
DEBUG - 2015-01-13 04:44:30 --> Output Class Initialized
DEBUG - 2015-01-13 04:44:30 --> Security Class Initialized
DEBUG - 2015-01-13 04:44:30 --> Input Class Initialized
DEBUG - 2015-01-13 04:44:30 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 04:44:30 --> Language Class Initialized
DEBUG - 2015-01-13 04:44:30 --> Loader Class Initialized
DEBUG - 2015-01-13 04:44:30 --> Controller Class Initialized
DEBUG - 2015-01-13 04:44:30 --> Helper loaded: url_helper
DEBUG - 2015-01-13 04:44:30 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 04:44:30 --> Final output sent to browser
DEBUG - 2015-01-13 04:44:30 --> Total execution time: 0.0124
DEBUG - 2015-01-13 04:52:46 --> Config Class Initialized
DEBUG - 2015-01-13 04:52:46 --> Hooks Class Initialized
DEBUG - 2015-01-13 04:52:46 --> Utf8 Class Initialized
DEBUG - 2015-01-13 04:52:46 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 04:52:46 --> URI Class Initialized
DEBUG - 2015-01-13 04:52:46 --> Router Class Initialized
DEBUG - 2015-01-13 04:52:46 --> No URI present. Default controller set.
DEBUG - 2015-01-13 04:52:46 --> Output Class Initialized
DEBUG - 2015-01-13 04:52:46 --> Security Class Initialized
DEBUG - 2015-01-13 04:52:46 --> Input Class Initialized
DEBUG - 2015-01-13 04:52:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 04:52:46 --> Language Class Initialized
DEBUG - 2015-01-13 04:52:46 --> Loader Class Initialized
DEBUG - 2015-01-13 04:52:46 --> Controller Class Initialized
DEBUG - 2015-01-13 04:52:46 --> Helper loaded: url_helper
DEBUG - 2015-01-13 04:52:46 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 04:52:46 --> Final output sent to browser
DEBUG - 2015-01-13 04:52:46 --> Total execution time: 0.0163
DEBUG - 2015-01-13 04:52:53 --> Config Class Initialized
DEBUG - 2015-01-13 04:52:53 --> Hooks Class Initialized
DEBUG - 2015-01-13 04:52:53 --> Utf8 Class Initialized
DEBUG - 2015-01-13 04:52:53 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 04:52:53 --> URI Class Initialized
DEBUG - 2015-01-13 04:52:53 --> Router Class Initialized
DEBUG - 2015-01-13 04:52:53 --> No URI present. Default controller set.
DEBUG - 2015-01-13 04:52:53 --> Output Class Initialized
DEBUG - 2015-01-13 04:52:53 --> Security Class Initialized
DEBUG - 2015-01-13 04:52:53 --> Input Class Initialized
DEBUG - 2015-01-13 04:52:53 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 04:52:53 --> Language Class Initialized
DEBUG - 2015-01-13 04:52:53 --> Loader Class Initialized
DEBUG - 2015-01-13 04:52:53 --> Controller Class Initialized
DEBUG - 2015-01-13 04:52:53 --> Helper loaded: url_helper
DEBUG - 2015-01-13 04:52:53 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 04:52:53 --> Final output sent to browser
DEBUG - 2015-01-13 04:52:53 --> Total execution time: 0.0125
DEBUG - 2015-01-13 05:53:00 --> Config Class Initialized
DEBUG - 2015-01-13 05:53:00 --> Hooks Class Initialized
DEBUG - 2015-01-13 05:53:00 --> Utf8 Class Initialized
DEBUG - 2015-01-13 05:53:00 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 05:53:00 --> URI Class Initialized
DEBUG - 2015-01-13 05:53:00 --> Router Class Initialized
DEBUG - 2015-01-13 05:53:00 --> No URI present. Default controller set.
DEBUG - 2015-01-13 05:53:00 --> Output Class Initialized
DEBUG - 2015-01-13 05:53:00 --> Security Class Initialized
DEBUG - 2015-01-13 05:53:00 --> Input Class Initialized
DEBUG - 2015-01-13 05:53:00 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 05:53:00 --> Language Class Initialized
DEBUG - 2015-01-13 05:53:00 --> Loader Class Initialized
DEBUG - 2015-01-13 05:53:00 --> Controller Class Initialized
DEBUG - 2015-01-13 05:53:00 --> Helper loaded: url_helper
DEBUG - 2015-01-13 05:53:01 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 05:53:01 --> Final output sent to browser
DEBUG - 2015-01-13 05:53:01 --> Total execution time: 0.2740
DEBUG - 2015-01-13 05:53:18 --> Config Class Initialized
DEBUG - 2015-01-13 05:53:18 --> Hooks Class Initialized
DEBUG - 2015-01-13 05:53:18 --> Utf8 Class Initialized
DEBUG - 2015-01-13 05:53:18 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 05:53:18 --> URI Class Initialized
DEBUG - 2015-01-13 05:53:18 --> Router Class Initialized
DEBUG - 2015-01-13 05:53:18 --> No URI present. Default controller set.
DEBUG - 2015-01-13 05:53:18 --> Output Class Initialized
DEBUG - 2015-01-13 05:53:18 --> Security Class Initialized
DEBUG - 2015-01-13 05:53:18 --> Input Class Initialized
DEBUG - 2015-01-13 05:53:18 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 05:53:18 --> Language Class Initialized
DEBUG - 2015-01-13 05:53:18 --> Loader Class Initialized
DEBUG - 2015-01-13 05:53:18 --> Controller Class Initialized
DEBUG - 2015-01-13 05:53:18 --> Helper loaded: url_helper
DEBUG - 2015-01-13 05:53:18 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 05:53:18 --> Final output sent to browser
DEBUG - 2015-01-13 05:53:18 --> Total execution time: 0.0162
DEBUG - 2015-01-13 05:53:32 --> Config Class Initialized
DEBUG - 2015-01-13 05:53:32 --> Hooks Class Initialized
DEBUG - 2015-01-13 05:53:32 --> Utf8 Class Initialized
DEBUG - 2015-01-13 05:53:32 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 05:53:32 --> URI Class Initialized
DEBUG - 2015-01-13 05:53:32 --> Router Class Initialized
DEBUG - 2015-01-13 05:53:32 --> No URI present. Default controller set.
DEBUG - 2015-01-13 05:53:32 --> Output Class Initialized
DEBUG - 2015-01-13 05:53:32 --> Security Class Initialized
DEBUG - 2015-01-13 05:53:32 --> Input Class Initialized
DEBUG - 2015-01-13 05:53:32 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 05:53:32 --> Language Class Initialized
DEBUG - 2015-01-13 05:53:32 --> Loader Class Initialized
DEBUG - 2015-01-13 05:53:32 --> Controller Class Initialized
DEBUG - 2015-01-13 05:53:32 --> Helper loaded: url_helper
DEBUG - 2015-01-13 05:53:32 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 05:53:32 --> Final output sent to browser
DEBUG - 2015-01-13 05:53:32 --> Total execution time: 0.0330
DEBUG - 2015-01-13 06:07:58 --> Config Class Initialized
DEBUG - 2015-01-13 06:07:58 --> Hooks Class Initialized
DEBUG - 2015-01-13 06:07:58 --> Utf8 Class Initialized
DEBUG - 2015-01-13 06:07:58 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 06:07:58 --> URI Class Initialized
DEBUG - 2015-01-13 06:07:58 --> Router Class Initialized
DEBUG - 2015-01-13 06:07:58 --> No URI present. Default controller set.
DEBUG - 2015-01-13 06:07:58 --> Output Class Initialized
DEBUG - 2015-01-13 06:07:58 --> Security Class Initialized
DEBUG - 2015-01-13 06:07:58 --> Input Class Initialized
DEBUG - 2015-01-13 06:07:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 06:07:58 --> Language Class Initialized
DEBUG - 2015-01-13 06:07:58 --> Loader Class Initialized
DEBUG - 2015-01-13 06:07:58 --> Controller Class Initialized
DEBUG - 2015-01-13 06:07:58 --> Helper loaded: url_helper
DEBUG - 2015-01-13 06:07:58 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 06:07:58 --> Final output sent to browser
DEBUG - 2015-01-13 06:07:58 --> Total execution time: 0.1427
DEBUG - 2015-01-13 06:16:37 --> Config Class Initialized
DEBUG - 2015-01-13 06:16:37 --> Hooks Class Initialized
DEBUG - 2015-01-13 06:16:37 --> Utf8 Class Initialized
DEBUG - 2015-01-13 06:16:37 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 06:16:37 --> URI Class Initialized
DEBUG - 2015-01-13 06:16:37 --> Router Class Initialized
DEBUG - 2015-01-13 06:16:37 --> No URI present. Default controller set.
DEBUG - 2015-01-13 06:16:37 --> Output Class Initialized
DEBUG - 2015-01-13 06:16:37 --> Security Class Initialized
DEBUG - 2015-01-13 06:16:37 --> Input Class Initialized
DEBUG - 2015-01-13 06:16:37 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 06:16:37 --> Language Class Initialized
DEBUG - 2015-01-13 06:16:37 --> Loader Class Initialized
DEBUG - 2015-01-13 06:16:37 --> Controller Class Initialized
DEBUG - 2015-01-13 06:16:37 --> Helper loaded: url_helper
DEBUG - 2015-01-13 06:16:37 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 06:16:37 --> Final output sent to browser
DEBUG - 2015-01-13 06:16:37 --> Total execution time: 0.4472
DEBUG - 2015-01-13 06:21:05 --> Config Class Initialized
DEBUG - 2015-01-13 06:21:05 --> Hooks Class Initialized
DEBUG - 2015-01-13 06:21:05 --> Utf8 Class Initialized
DEBUG - 2015-01-13 06:21:05 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 06:21:05 --> URI Class Initialized
DEBUG - 2015-01-13 06:21:05 --> Router Class Initialized
DEBUG - 2015-01-13 06:21:05 --> No URI present. Default controller set.
DEBUG - 2015-01-13 06:21:05 --> Output Class Initialized
DEBUG - 2015-01-13 06:21:05 --> Security Class Initialized
DEBUG - 2015-01-13 06:21:05 --> Input Class Initialized
DEBUG - 2015-01-13 06:21:05 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 06:21:05 --> Language Class Initialized
DEBUG - 2015-01-13 06:21:05 --> Loader Class Initialized
DEBUG - 2015-01-13 06:21:05 --> Controller Class Initialized
DEBUG - 2015-01-13 06:21:05 --> Helper loaded: url_helper
DEBUG - 2015-01-13 06:21:05 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 06:21:05 --> Final output sent to browser
DEBUG - 2015-01-13 06:21:05 --> Total execution time: 0.0125
DEBUG - 2015-01-13 06:21:06 --> Config Class Initialized
DEBUG - 2015-01-13 06:21:06 --> Hooks Class Initialized
DEBUG - 2015-01-13 06:21:06 --> Utf8 Class Initialized
DEBUG - 2015-01-13 06:21:06 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 06:21:06 --> URI Class Initialized
DEBUG - 2015-01-13 06:21:06 --> Router Class Initialized
DEBUG - 2015-01-13 06:21:06 --> No URI present. Default controller set.
DEBUG - 2015-01-13 06:21:06 --> Output Class Initialized
DEBUG - 2015-01-13 06:21:06 --> Security Class Initialized
DEBUG - 2015-01-13 06:21:06 --> Input Class Initialized
DEBUG - 2015-01-13 06:21:06 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 06:21:06 --> Language Class Initialized
DEBUG - 2015-01-13 06:21:06 --> Loader Class Initialized
DEBUG - 2015-01-13 06:21:06 --> Controller Class Initialized
DEBUG - 2015-01-13 06:21:06 --> Helper loaded: url_helper
DEBUG - 2015-01-13 06:21:06 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 06:21:06 --> Final output sent to browser
DEBUG - 2015-01-13 06:21:06 --> Total execution time: 0.0282
DEBUG - 2015-01-13 06:21:08 --> Config Class Initialized
DEBUG - 2015-01-13 06:21:08 --> Hooks Class Initialized
DEBUG - 2015-01-13 06:21:08 --> Utf8 Class Initialized
DEBUG - 2015-01-13 06:21:08 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 06:21:08 --> URI Class Initialized
DEBUG - 2015-01-13 06:21:08 --> Router Class Initialized
DEBUG - 2015-01-13 06:21:08 --> No URI present. Default controller set.
DEBUG - 2015-01-13 06:21:08 --> Output Class Initialized
DEBUG - 2015-01-13 06:21:08 --> Security Class Initialized
DEBUG - 2015-01-13 06:21:08 --> Input Class Initialized
DEBUG - 2015-01-13 06:21:08 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 06:21:08 --> Language Class Initialized
DEBUG - 2015-01-13 06:21:08 --> Loader Class Initialized
DEBUG - 2015-01-13 06:21:08 --> Controller Class Initialized
DEBUG - 2015-01-13 06:21:08 --> Helper loaded: url_helper
DEBUG - 2015-01-13 06:21:08 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 06:21:08 --> Final output sent to browser
DEBUG - 2015-01-13 06:21:08 --> Total execution time: 0.0128
DEBUG - 2015-01-13 06:21:09 --> Config Class Initialized
DEBUG - 2015-01-13 06:21:09 --> Hooks Class Initialized
DEBUG - 2015-01-13 06:21:09 --> Utf8 Class Initialized
DEBUG - 2015-01-13 06:21:09 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 06:21:09 --> URI Class Initialized
DEBUG - 2015-01-13 06:21:09 --> Router Class Initialized
DEBUG - 2015-01-13 06:21:09 --> No URI present. Default controller set.
DEBUG - 2015-01-13 06:21:09 --> Output Class Initialized
DEBUG - 2015-01-13 06:21:09 --> Security Class Initialized
DEBUG - 2015-01-13 06:21:09 --> Input Class Initialized
DEBUG - 2015-01-13 06:21:09 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 06:21:09 --> Language Class Initialized
DEBUG - 2015-01-13 06:21:09 --> Loader Class Initialized
DEBUG - 2015-01-13 06:21:09 --> Controller Class Initialized
DEBUG - 2015-01-13 06:21:09 --> Helper loaded: url_helper
DEBUG - 2015-01-13 06:21:09 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 06:21:09 --> Final output sent to browser
DEBUG - 2015-01-13 06:21:09 --> Total execution time: 0.0126
DEBUG - 2015-01-13 06:54:08 --> Config Class Initialized
DEBUG - 2015-01-13 06:54:09 --> Hooks Class Initialized
DEBUG - 2015-01-13 06:54:09 --> Utf8 Class Initialized
DEBUG - 2015-01-13 06:54:09 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 06:54:09 --> URI Class Initialized
DEBUG - 2015-01-13 06:54:09 --> Router Class Initialized
DEBUG - 2015-01-13 06:54:09 --> No URI present. Default controller set.
DEBUG - 2015-01-13 06:54:09 --> Output Class Initialized
DEBUG - 2015-01-13 06:54:09 --> Security Class Initialized
DEBUG - 2015-01-13 06:54:09 --> Input Class Initialized
DEBUG - 2015-01-13 06:54:09 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 06:54:09 --> Language Class Initialized
DEBUG - 2015-01-13 06:54:09 --> Loader Class Initialized
DEBUG - 2015-01-13 06:54:09 --> Controller Class Initialized
DEBUG - 2015-01-13 06:54:09 --> Helper loaded: url_helper
DEBUG - 2015-01-13 06:54:09 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 06:54:09 --> Final output sent to browser
DEBUG - 2015-01-13 06:54:09 --> Total execution time: 0.7735
DEBUG - 2015-01-13 06:57:29 --> Config Class Initialized
DEBUG - 2015-01-13 06:57:29 --> Hooks Class Initialized
DEBUG - 2015-01-13 06:57:29 --> Utf8 Class Initialized
DEBUG - 2015-01-13 06:57:29 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 06:57:29 --> URI Class Initialized
DEBUG - 2015-01-13 06:57:29 --> Router Class Initialized
DEBUG - 2015-01-13 06:57:29 --> No URI present. Default controller set.
DEBUG - 2015-01-13 06:57:29 --> Output Class Initialized
DEBUG - 2015-01-13 06:57:29 --> Security Class Initialized
DEBUG - 2015-01-13 06:57:29 --> Input Class Initialized
DEBUG - 2015-01-13 06:57:29 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 06:57:29 --> Language Class Initialized
DEBUG - 2015-01-13 06:57:29 --> Loader Class Initialized
DEBUG - 2015-01-13 06:57:29 --> Controller Class Initialized
DEBUG - 2015-01-13 06:57:29 --> Helper loaded: url_helper
DEBUG - 2015-01-13 06:57:29 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 06:57:29 --> Final output sent to browser
DEBUG - 2015-01-13 06:57:29 --> Total execution time: 0.0125
DEBUG - 2015-01-13 07:28:12 --> Config Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Hooks Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Utf8 Class Initialized
DEBUG - 2015-01-13 07:28:12 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 07:28:12 --> URI Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Router Class Initialized
DEBUG - 2015-01-13 07:28:12 --> No URI present. Default controller set.
DEBUG - 2015-01-13 07:28:12 --> Output Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Security Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Input Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 07:28:12 --> Language Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Loader Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Controller Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Helper loaded: url_helper
DEBUG - 2015-01-13 07:28:12 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 07:28:12 --> Final output sent to browser
DEBUG - 2015-01-13 07:28:12 --> Total execution time: 0.0635
DEBUG - 2015-01-13 07:28:12 --> Config Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Hooks Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Utf8 Class Initialized
DEBUG - 2015-01-13 07:28:12 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 07:28:12 --> URI Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Router Class Initialized
DEBUG - 2015-01-13 07:28:12 --> No URI present. Default controller set.
DEBUG - 2015-01-13 07:28:12 --> Output Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Security Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Input Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 07:28:12 --> Language Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Loader Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Controller Class Initialized
DEBUG - 2015-01-13 07:28:12 --> Helper loaded: url_helper
DEBUG - 2015-01-13 07:28:12 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 07:28:12 --> Final output sent to browser
DEBUG - 2015-01-13 07:28:12 --> Total execution time: 0.0128
DEBUG - 2015-01-13 07:47:52 --> Config Class Initialized
DEBUG - 2015-01-13 07:47:52 --> Hooks Class Initialized
DEBUG - 2015-01-13 07:47:52 --> Utf8 Class Initialized
DEBUG - 2015-01-13 07:47:52 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 07:47:52 --> URI Class Initialized
DEBUG - 2015-01-13 07:47:52 --> Router Class Initialized
DEBUG - 2015-01-13 07:47:52 --> No URI present. Default controller set.
DEBUG - 2015-01-13 07:47:52 --> Output Class Initialized
DEBUG - 2015-01-13 07:47:52 --> Security Class Initialized
DEBUG - 2015-01-13 07:47:52 --> Input Class Initialized
DEBUG - 2015-01-13 07:47:52 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 07:47:52 --> Language Class Initialized
DEBUG - 2015-01-13 07:47:52 --> Loader Class Initialized
DEBUG - 2015-01-13 07:47:52 --> Controller Class Initialized
DEBUG - 2015-01-13 07:47:52 --> Helper loaded: url_helper
DEBUG - 2015-01-13 07:47:52 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 07:47:52 --> Final output sent to browser
DEBUG - 2015-01-13 07:47:52 --> Total execution time: 0.0284
DEBUG - 2015-01-13 07:55:46 --> Config Class Initialized
DEBUG - 2015-01-13 07:55:46 --> Hooks Class Initialized
DEBUG - 2015-01-13 07:55:46 --> Utf8 Class Initialized
DEBUG - 2015-01-13 07:55:46 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 07:55:46 --> URI Class Initialized
DEBUG - 2015-01-13 07:55:46 --> Router Class Initialized
DEBUG - 2015-01-13 07:55:46 --> No URI present. Default controller set.
DEBUG - 2015-01-13 07:55:46 --> Output Class Initialized
DEBUG - 2015-01-13 07:55:46 --> Security Class Initialized
DEBUG - 2015-01-13 07:55:46 --> Input Class Initialized
DEBUG - 2015-01-13 07:55:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 07:55:46 --> Language Class Initialized
DEBUG - 2015-01-13 07:55:46 --> Loader Class Initialized
DEBUG - 2015-01-13 07:55:46 --> Controller Class Initialized
DEBUG - 2015-01-13 07:55:46 --> Helper loaded: url_helper
DEBUG - 2015-01-13 07:55:46 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 07:55:46 --> Final output sent to browser
DEBUG - 2015-01-13 07:55:46 --> Total execution time: 0.0227
DEBUG - 2015-01-13 07:56:19 --> Config Class Initialized
DEBUG - 2015-01-13 07:56:19 --> Hooks Class Initialized
DEBUG - 2015-01-13 07:56:19 --> Utf8 Class Initialized
DEBUG - 2015-01-13 07:56:19 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 07:56:19 --> URI Class Initialized
DEBUG - 2015-01-13 07:56:19 --> Router Class Initialized
DEBUG - 2015-01-13 07:56:19 --> No URI present. Default controller set.
DEBUG - 2015-01-13 07:56:19 --> Output Class Initialized
DEBUG - 2015-01-13 07:56:19 --> Security Class Initialized
DEBUG - 2015-01-13 07:56:19 --> Input Class Initialized
DEBUG - 2015-01-13 07:56:19 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 07:56:19 --> Language Class Initialized
DEBUG - 2015-01-13 07:56:19 --> Loader Class Initialized
DEBUG - 2015-01-13 07:56:19 --> Controller Class Initialized
DEBUG - 2015-01-13 07:56:19 --> Helper loaded: url_helper
DEBUG - 2015-01-13 07:56:19 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 07:56:19 --> Final output sent to browser
DEBUG - 2015-01-13 07:56:19 --> Total execution time: 0.0125
DEBUG - 2015-01-13 08:46:48 --> Config Class Initialized
DEBUG - 2015-01-13 08:46:48 --> Hooks Class Initialized
DEBUG - 2015-01-13 08:46:48 --> Utf8 Class Initialized
DEBUG - 2015-01-13 08:46:48 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 08:46:48 --> URI Class Initialized
DEBUG - 2015-01-13 08:46:48 --> Router Class Initialized
DEBUG - 2015-01-13 08:46:48 --> No URI present. Default controller set.
DEBUG - 2015-01-13 08:46:48 --> Output Class Initialized
DEBUG - 2015-01-13 08:46:48 --> Security Class Initialized
DEBUG - 2015-01-13 08:46:48 --> Input Class Initialized
DEBUG - 2015-01-13 08:46:48 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 08:46:48 --> Language Class Initialized
DEBUG - 2015-01-13 08:46:48 --> Loader Class Initialized
DEBUG - 2015-01-13 08:46:48 --> Controller Class Initialized
DEBUG - 2015-01-13 08:46:48 --> Helper loaded: url_helper
DEBUG - 2015-01-13 08:46:48 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 08:46:48 --> Final output sent to browser
DEBUG - 2015-01-13 08:46:48 --> Total execution time: 0.0141
DEBUG - 2015-01-13 08:53:44 --> Config Class Initialized
DEBUG - 2015-01-13 08:53:44 --> Hooks Class Initialized
DEBUG - 2015-01-13 08:53:44 --> Utf8 Class Initialized
DEBUG - 2015-01-13 08:53:44 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 08:53:44 --> URI Class Initialized
DEBUG - 2015-01-13 08:53:44 --> Router Class Initialized
DEBUG - 2015-01-13 08:53:44 --> No URI present. Default controller set.
DEBUG - 2015-01-13 08:53:44 --> Output Class Initialized
DEBUG - 2015-01-13 08:53:44 --> Security Class Initialized
DEBUG - 2015-01-13 08:53:44 --> Input Class Initialized
DEBUG - 2015-01-13 08:53:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 08:53:44 --> Language Class Initialized
DEBUG - 2015-01-13 08:53:44 --> Loader Class Initialized
DEBUG - 2015-01-13 08:53:44 --> Controller Class Initialized
DEBUG - 2015-01-13 08:53:44 --> Helper loaded: url_helper
DEBUG - 2015-01-13 08:53:44 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 08:53:44 --> Final output sent to browser
DEBUG - 2015-01-13 08:53:44 --> Total execution time: 0.0125
DEBUG - 2015-01-13 08:54:49 --> Config Class Initialized
DEBUG - 2015-01-13 08:54:49 --> Hooks Class Initialized
DEBUG - 2015-01-13 08:54:49 --> Utf8 Class Initialized
DEBUG - 2015-01-13 08:54:49 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 08:54:49 --> URI Class Initialized
DEBUG - 2015-01-13 08:54:49 --> Router Class Initialized
DEBUG - 2015-01-13 08:54:49 --> No URI present. Default controller set.
DEBUG - 2015-01-13 08:54:49 --> Output Class Initialized
DEBUG - 2015-01-13 08:54:49 --> Security Class Initialized
DEBUG - 2015-01-13 08:54:49 --> Input Class Initialized
DEBUG - 2015-01-13 08:54:49 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 08:54:49 --> Language Class Initialized
DEBUG - 2015-01-13 08:54:49 --> Loader Class Initialized
DEBUG - 2015-01-13 08:54:49 --> Controller Class Initialized
DEBUG - 2015-01-13 08:54:49 --> Helper loaded: url_helper
DEBUG - 2015-01-13 08:54:49 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 08:54:49 --> Final output sent to browser
DEBUG - 2015-01-13 08:54:49 --> Total execution time: 0.0125
DEBUG - 2015-01-13 09:12:58 --> Config Class Initialized
DEBUG - 2015-01-13 09:12:58 --> Hooks Class Initialized
DEBUG - 2015-01-13 09:12:58 --> Utf8 Class Initialized
DEBUG - 2015-01-13 09:12:58 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 09:12:58 --> URI Class Initialized
DEBUG - 2015-01-13 09:12:58 --> Router Class Initialized
DEBUG - 2015-01-13 09:12:58 --> No URI present. Default controller set.
DEBUG - 2015-01-13 09:12:58 --> Output Class Initialized
DEBUG - 2015-01-13 09:12:58 --> Security Class Initialized
DEBUG - 2015-01-13 09:12:58 --> Input Class Initialized
DEBUG - 2015-01-13 09:12:58 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 09:12:58 --> Language Class Initialized
DEBUG - 2015-01-13 09:12:58 --> Loader Class Initialized
DEBUG - 2015-01-13 09:12:58 --> Controller Class Initialized
DEBUG - 2015-01-13 09:12:58 --> Helper loaded: url_helper
DEBUG - 2015-01-13 09:12:58 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 09:12:58 --> Final output sent to browser
DEBUG - 2015-01-13 09:12:58 --> Total execution time: 0.0124
DEBUG - 2015-01-13 09:55:40 --> Config Class Initialized
DEBUG - 2015-01-13 09:55:40 --> Hooks Class Initialized
DEBUG - 2015-01-13 09:55:40 --> Utf8 Class Initialized
DEBUG - 2015-01-13 09:55:40 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 09:55:40 --> URI Class Initialized
DEBUG - 2015-01-13 09:55:40 --> Router Class Initialized
DEBUG - 2015-01-13 09:55:40 --> No URI present. Default controller set.
DEBUG - 2015-01-13 09:55:40 --> Output Class Initialized
DEBUG - 2015-01-13 09:55:40 --> Security Class Initialized
DEBUG - 2015-01-13 09:55:40 --> Input Class Initialized
DEBUG - 2015-01-13 09:55:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 09:55:40 --> Language Class Initialized
DEBUG - 2015-01-13 09:55:40 --> Loader Class Initialized
DEBUG - 2015-01-13 09:55:40 --> Controller Class Initialized
DEBUG - 2015-01-13 09:55:40 --> Helper loaded: url_helper
DEBUG - 2015-01-13 09:55:40 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 09:55:40 --> Final output sent to browser
DEBUG - 2015-01-13 09:55:40 --> Total execution time: 0.0125
DEBUG - 2015-01-13 09:55:57 --> Config Class Initialized
DEBUG - 2015-01-13 09:55:57 --> Hooks Class Initialized
DEBUG - 2015-01-13 09:55:57 --> Utf8 Class Initialized
DEBUG - 2015-01-13 09:55:57 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 09:55:57 --> URI Class Initialized
DEBUG - 2015-01-13 09:55:57 --> Router Class Initialized
DEBUG - 2015-01-13 09:55:57 --> No URI present. Default controller set.
DEBUG - 2015-01-13 09:55:57 --> Output Class Initialized
DEBUG - 2015-01-13 09:55:57 --> Security Class Initialized
DEBUG - 2015-01-13 09:55:57 --> Input Class Initialized
DEBUG - 2015-01-13 09:55:57 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 09:55:57 --> Language Class Initialized
DEBUG - 2015-01-13 09:55:57 --> Loader Class Initialized
DEBUG - 2015-01-13 09:55:57 --> Controller Class Initialized
DEBUG - 2015-01-13 09:55:57 --> Helper loaded: url_helper
DEBUG - 2015-01-13 09:55:57 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 09:55:57 --> Final output sent to browser
DEBUG - 2015-01-13 09:55:57 --> Total execution time: 0.0125
DEBUG - 2015-01-13 10:03:41 --> Config Class Initialized
DEBUG - 2015-01-13 10:03:41 --> Hooks Class Initialized
DEBUG - 2015-01-13 10:03:41 --> Utf8 Class Initialized
DEBUG - 2015-01-13 10:03:41 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 10:03:41 --> URI Class Initialized
DEBUG - 2015-01-13 10:03:41 --> Router Class Initialized
ERROR - 2015-01-13 10:03:41 --> 404 Page Not Found --> manager
DEBUG - 2015-01-13 11:10:35 --> Config Class Initialized
DEBUG - 2015-01-13 11:10:35 --> Hooks Class Initialized
DEBUG - 2015-01-13 11:10:35 --> Utf8 Class Initialized
DEBUG - 2015-01-13 11:10:35 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 11:10:35 --> URI Class Initialized
DEBUG - 2015-01-13 11:10:35 --> Router Class Initialized
DEBUG - 2015-01-13 11:10:35 --> No URI present. Default controller set.
DEBUG - 2015-01-13 11:10:35 --> Output Class Initialized
DEBUG - 2015-01-13 11:10:35 --> Security Class Initialized
DEBUG - 2015-01-13 11:10:35 --> Input Class Initialized
DEBUG - 2015-01-13 11:10:35 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 11:10:35 --> Language Class Initialized
DEBUG - 2015-01-13 11:10:35 --> Loader Class Initialized
DEBUG - 2015-01-13 11:10:35 --> Controller Class Initialized
DEBUG - 2015-01-13 11:10:35 --> Helper loaded: url_helper
DEBUG - 2015-01-13 11:10:35 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 11:10:35 --> Final output sent to browser
DEBUG - 2015-01-13 11:10:35 --> Total execution time: 0.0884
DEBUG - 2015-01-13 11:10:51 --> Config Class Initialized
DEBUG - 2015-01-13 11:10:51 --> Hooks Class Initialized
DEBUG - 2015-01-13 11:10:51 --> Utf8 Class Initialized
DEBUG - 2015-01-13 11:10:51 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 11:10:51 --> URI Class Initialized
DEBUG - 2015-01-13 11:10:51 --> Router Class Initialized
DEBUG - 2015-01-13 11:10:51 --> No URI present. Default controller set.
DEBUG - 2015-01-13 11:10:51 --> Output Class Initialized
DEBUG - 2015-01-13 11:10:51 --> Security Class Initialized
DEBUG - 2015-01-13 11:10:51 --> Input Class Initialized
DEBUG - 2015-01-13 11:10:51 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 11:10:51 --> Language Class Initialized
DEBUG - 2015-01-13 11:10:51 --> Loader Class Initialized
DEBUG - 2015-01-13 11:10:51 --> Controller Class Initialized
DEBUG - 2015-01-13 11:10:51 --> Helper loaded: url_helper
DEBUG - 2015-01-13 11:10:51 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 11:10:51 --> Final output sent to browser
DEBUG - 2015-01-13 11:10:51 --> Total execution time: 0.0124
DEBUG - 2015-01-13 11:55:33 --> Config Class Initialized
DEBUG - 2015-01-13 11:55:33 --> Hooks Class Initialized
DEBUG - 2015-01-13 11:55:33 --> Utf8 Class Initialized
DEBUG - 2015-01-13 11:55:33 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 11:55:33 --> URI Class Initialized
DEBUG - 2015-01-13 11:55:33 --> Router Class Initialized
DEBUG - 2015-01-13 11:55:33 --> No URI present. Default controller set.
DEBUG - 2015-01-13 11:55:33 --> Output Class Initialized
DEBUG - 2015-01-13 11:55:33 --> Security Class Initialized
DEBUG - 2015-01-13 11:55:33 --> Input Class Initialized
DEBUG - 2015-01-13 11:55:33 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 11:55:33 --> Language Class Initialized
DEBUG - 2015-01-13 11:55:33 --> Loader Class Initialized
DEBUG - 2015-01-13 11:55:33 --> Controller Class Initialized
DEBUG - 2015-01-13 11:55:33 --> Helper loaded: url_helper
DEBUG - 2015-01-13 11:55:33 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 11:55:33 --> Final output sent to browser
DEBUG - 2015-01-13 11:55:33 --> Total execution time: 0.0125
DEBUG - 2015-01-13 11:55:47 --> Config Class Initialized
DEBUG - 2015-01-13 11:55:47 --> Hooks Class Initialized
DEBUG - 2015-01-13 11:55:47 --> Utf8 Class Initialized
DEBUG - 2015-01-13 11:55:47 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 11:55:47 --> URI Class Initialized
DEBUG - 2015-01-13 11:55:47 --> Router Class Initialized
DEBUG - 2015-01-13 11:55:47 --> No URI present. Default controller set.
DEBUG - 2015-01-13 11:55:47 --> Output Class Initialized
DEBUG - 2015-01-13 11:55:47 --> Security Class Initialized
DEBUG - 2015-01-13 11:55:47 --> Input Class Initialized
DEBUG - 2015-01-13 11:55:47 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 11:55:47 --> Language Class Initialized
DEBUG - 2015-01-13 11:55:47 --> Loader Class Initialized
DEBUG - 2015-01-13 11:55:47 --> Controller Class Initialized
DEBUG - 2015-01-13 11:55:47 --> Helper loaded: url_helper
DEBUG - 2015-01-13 11:55:47 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 11:55:47 --> Final output sent to browser
DEBUG - 2015-01-13 11:55:47 --> Total execution time: 0.0125
DEBUG - 2015-01-13 12:05:40 --> Config Class Initialized
DEBUG - 2015-01-13 12:05:40 --> Hooks Class Initialized
DEBUG - 2015-01-13 12:05:40 --> Utf8 Class Initialized
DEBUG - 2015-01-13 12:05:40 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 12:05:40 --> URI Class Initialized
DEBUG - 2015-01-13 12:05:40 --> Router Class Initialized
DEBUG - 2015-01-13 12:05:40 --> No URI present. Default controller set.
DEBUG - 2015-01-13 12:05:40 --> Output Class Initialized
DEBUG - 2015-01-13 12:05:40 --> Security Class Initialized
DEBUG - 2015-01-13 12:05:40 --> Input Class Initialized
DEBUG - 2015-01-13 12:05:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 12:05:40 --> Language Class Initialized
DEBUG - 2015-01-13 12:05:40 --> Loader Class Initialized
DEBUG - 2015-01-13 12:05:40 --> Controller Class Initialized
DEBUG - 2015-01-13 12:05:40 --> Helper loaded: url_helper
DEBUG - 2015-01-13 12:05:40 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 12:05:40 --> Final output sent to browser
DEBUG - 2015-01-13 12:05:40 --> Total execution time: 0.0133
DEBUG - 2015-01-13 12:17:46 --> Config Class Initialized
DEBUG - 2015-01-13 12:17:46 --> Hooks Class Initialized
DEBUG - 2015-01-13 12:17:46 --> Utf8 Class Initialized
DEBUG - 2015-01-13 12:17:46 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 12:17:46 --> URI Class Initialized
DEBUG - 2015-01-13 12:17:46 --> Router Class Initialized
DEBUG - 2015-01-13 12:17:46 --> No URI present. Default controller set.
DEBUG - 2015-01-13 12:17:46 --> Output Class Initialized
DEBUG - 2015-01-13 12:17:46 --> Security Class Initialized
DEBUG - 2015-01-13 12:17:46 --> Input Class Initialized
DEBUG - 2015-01-13 12:17:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 12:17:46 --> Language Class Initialized
DEBUG - 2015-01-13 12:17:46 --> Loader Class Initialized
DEBUG - 2015-01-13 12:17:46 --> Controller Class Initialized
DEBUG - 2015-01-13 12:17:46 --> Helper loaded: url_helper
DEBUG - 2015-01-13 12:17:46 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 12:17:46 --> Final output sent to browser
DEBUG - 2015-01-13 12:17:46 --> Total execution time: 0.0125
DEBUG - 2015-01-13 12:51:02 --> Config Class Initialized
DEBUG - 2015-01-13 12:51:02 --> Hooks Class Initialized
DEBUG - 2015-01-13 12:51:02 --> Utf8 Class Initialized
DEBUG - 2015-01-13 12:51:02 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 12:51:02 --> URI Class Initialized
DEBUG - 2015-01-13 12:51:02 --> Router Class Initialized
DEBUG - 2015-01-13 12:51:02 --> Output Class Initialized
DEBUG - 2015-01-13 12:51:02 --> Security Class Initialized
DEBUG - 2015-01-13 12:51:02 --> Input Class Initialized
DEBUG - 2015-01-13 12:51:02 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 12:51:02 --> Language Class Initialized
DEBUG - 2015-01-13 12:51:02 --> Loader Class Initialized
DEBUG - 2015-01-13 12:51:02 --> Controller Class Initialized
DEBUG - 2015-01-13 12:51:02 --> Helper loaded: url_helper
INFO  - 2015-01-13 12:51:02 --> user agent is: Mozilla/5.0 (Windows NT 6.1; WOW64; rv:29.0) Gecko/20120101 Firefox/29.0
ERROR - 2015-01-13 12:51:02 --> the page retreived from templatemonster does not contain categories to extract
INFO  - 2015-01-13 12:51:02 --> <!DOCTYPE html> <!--[if lt IE 7 ]><html
class="ie ie6" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]--> <!--[if IE 7 ]><html
class="ie ie7" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]--> <!--[if IE 8 ]><html
class="ie ie8" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]--> <!--[if IE 9 ]><html
class="ie ie9" lang="en-US" prefix="og: http://ogp.me/ns#"> <![endif]--> <!--[if (gt IE 9)|!(IE)]><!--><html lang="en-US" prefix="og: http://ogp.me/ns#"> <!--<![endif]--><head><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(t,e,n){function r(n){if(!e[n]){var o=e[n]={exports:{}};t[n][0].call(o.exports,function(e){var o=t[n][1][e];return r(o?o:e)},o,o.exports)}return e[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({QJf3ax:[function(t,e){function n(t){function e(e,n,a){t&&t(e,n,a),a||(a={});for(var c=u(e),f=c.length,s=i(a,o,r),p=0;f>p;p++)c[p].apply(s,n);return s}function a(t,e){f[t]=u(t).concat(e)}function u(t){return f[t]||[]}function c(){return n(e)}var f={};return{on:a,emit:e,create:c,listeners:u,_events:f}}function r(){return{}}var o="nr@context",i=t("gos");e.exports=n()},{gos:"7eSDFh"}],ee:[function(t,e){e.exports=t("QJf3ax")},{}],gos:[function(t,e){e.exports=t("7eSDFh")},{}],"7eSDFh":[function(t,e){function n(t,e,n){if(r.call(t,e))return t[e];var o=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(t,e,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return t[e]=o,o}var r=Object.prototype.hasOwnProperty;e.exports=n},{}],D5DuLP:[function(t,e){function n(t,e,n){return r.listeners(t).length?r.emit(t,e,n):(o[t]||(o[t]=[]),void o[t].push(e))}var r=t("ee").create(),o={};e.exports=n,n.ee=r,r.q=o},{ee:"QJf3ax"}],handle:[function(t,e){e.exports=t("D5DuLP")},{}],XL7HBI:[function(t,e){function n(t){var e=typeof t;return!t||"object"!==e&&"function"!==e?-1:t===window?0:i(t,o,function(){return r++})}var r=1,o="nr@id",i=t("gos");e.exports=n},{gos:"7eSDFh"}],id:[function(t,e){e.exports=t("XL7HBI")},{}],loader:[function(t,e){e.exports=t("G9z0Bl")},{}],G9z0Bl:[function(t,e){function n(){var t=l.info=NREUM.info;if(t&&t.agent&&t.licenseKey&&t.applicationID&&c&&c.body){l.proto="https"===p.split(":")[0]||t.sslForHttp?"https://":"http://",a("mark",["onload",i()]);var e=c.createElement("script");e.src=l.proto+t.agent,c.body.appendChild(e)}}function r(){"complete"===c.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=t("handle"),u=window,c=u.document,f="addEventListener",s="attachEvent",p=(""+location).split("?")[0],l=e.exports={offset:i(),origin:p,features:{}};c[f]?(c[f]("DOMContentLoaded",o,!1),u[f]("load",n,!1)):(c[s]("onreadystatechange",r),u[s]("onload",n)),a("mark",["firstbyte",i()])},{handle:"D5DuLP"}]},{},["G9z0Bl"]);</script><meta charset="utf-8"><meta property="fb:admins" content="720898483"/><meta property="fb:admins" content="1129631948"/><meta property="fb:admins" content="100001777951090"/><link rel="publisher" href="https://plus.google.com/116173187155256042113"/><link rel="icon" href="http://static.tmimgcdn.com/img/favicon.ico?58b9fe9" type="image/x-icon"/><link rel="shortcut icon" href="http://static.tmimgcdn.com/img/favicon.ico?58b9fe9" type="image/x-icon"/><link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'> <!--[if lt IE 9]><link
rel="stylesheet" href="http://static.tmimgcdn.com/css/ie.css?d272a1a" media="screen"><script src="http://static.tmimgcdn.com/js/html5shiv.js?a39f61f"></script><![endif]--> <!--[if IE 9]><link
rel="stylesheet" href="http://static.tmimgcdn.com/css/compiledie9.css?d272a1a" media="screen"> <![endif]--> <!--[if (gt IE 9)|(!IE)]><!--><link rel="stylesheet" href="http://static.tmimgcdn.com/css/compiled.css?d272a1a" media="screen"> <!--<![endif]--><title>Template Categories</title><link rel="canonical" href="http://www.templatemonster.com/category/"/><meta property="og:locale" content="en_US"/><meta property="og:type" content="article"/><meta property="og:title" content="Template Categories"/><meta property="og:url" content="http://www.templatemonster.com/category/"/><meta property="og:site_name" content="Template Monster"/><meta property="article:publisher" content="https://www.facebook.com/TemplateMonster"/> <script type="text/javascript">
			var RecaptchaOptions = {"theme":"white","lang":"en"};
		</script></head><body class="page page-id-153 page-template page-template-page-keyword-category-php" itemscope itemtype="http://schema.org/WebPage"> <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MS2BNB" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MS2BNB');</script><!--[if lt IE 9]><div
style='clear: both; height: 112px; padding:0; position: relative;'><a
href="http://www.theie8countdown.com/ie-users-info"><img
src="http://www.theie8countdown.com/assets/badge_iecountdown.png" border="0" height="112" width="348" alt="" /></a></div> <![endif]--> <header id="header"><div class="top"><div class="container"><div class="badge-since"><div class="badge-big"> <span>Providing templates and themes</span><img src="http://static.tmimgcdn.com/img/since.png?58b9fe9" alt="Providing web templates and themes since 2002"></div><div class="badge-small"> <img src="http://static.tmimgcdn.com/img/badge-since-rt.gif?58b9fe9" alt="Providing web templates and themes since 2002">Providing web templates and themes</div></div><ul class="user-menu"><li class="account-menu-li" style="display:none;"> <a href="#" id="your-account-link">Hello, <span></span><b class="icon-arrow-small-down"></b></a><ul class="account-menu"><li><a href="/profile.php?tab=summary"><strong>Your account</strong></a></li></ul></li><li class="sign-out-li" style="display:none;"> <a href="#" class="sign-out-btn" id="signout-link"><span class="sign-out">Sign Out</span></a></li><li class="sign-in-li"> <a href="#" class="sign-in" id="signin-link">Sign In<b class="icon-arrow-small-down"></b><em></em></a><div class="sign-in-form"><h5>Sign In to Templatemonster</h5><form action="/wac/signin.php" method="POST" name="signin" id="signin-form" class="form-horizontal"><div id="signin-form-errors"></div><input type="hidden" name="billingInfo" id="signin-form-billingInfo" tabindex="1" value=""><fieldset><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><input type="email" name="email" autocomplete="off" data-constraints="@NotBlank @HTML5Required @Email(message=&quot;Doesn&#039;t look like a valid email&quot;) @HTML5Email(message=&quot;Doesn&#039;t look like a valid email&quot;) @Length(min=&quot;0&quot;, max=&quot;72&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;) @Pattern(regex=&quot;/^(.{1,64})\@/&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;)" required="required" id="signin-form-email" class=" form-control js-placeholder" tabindex="2" placeholder="Email" value=""></div></div><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><input type="password" name="password" autocomplete="off" data-constraints="@NotBlank @HTML5Required" required="required" id="signin-form-password" class=" form-control js-placeholder" tabindex="3" placeholder="Password" value=""><p class="js-fgt_pswd fgt_pswd"><a href="https://wac.templatemonster.com/forgotpass.html">Forgot password?</a></p></div></div><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><button type="submit" name="submit" id="signin-form-submit" class="btn btn-default" tabindex="4" value="">Sign in</button></div></div></fieldset></form><div class="signin-block"><div class="signin-arrow"></div><div class="register-user"> New to Templatemonster? <a href="https://wac.templatemonster.com/register.html" class="link-red with-arrow"><b class="icon-arrow-small-right"></b>Register</a></div></div></div></li><li class="help-support"> <a href="#/support.php">Help &amp; Support<b class="icon-arrow-small-down"></b></a><ul class="help-menu"><li><a title="Help &amp; Support" href="/support.php" class=""><strong>Help Center</strong></a></li><li><a title="Free Sample Templates" href="/free-templates.php" class=""><strong>Free Sample Templates</strong></a></li><li><a title="Refund Policy" href="/refund-policy.php" class=""><strong>Refund Policy</strong></a></li><li><a title="Report Spam" href="/report-spam.php" class=""><strong>Report Spam</strong></a></li></ul></li><li class="language-pick"> <a href="#">US<b class="icon-arrow-small-down"></b></a><ul class="languages-menu"><li style="display:none"><a title="Templatemonster - TemplateMonster US" href="http://www.templatemonster.com/" class="us-language"><strong>US</strong> <i class="svg lang-icon"></i> </a></li><li><a title="Plantillas Web - TemplateMonster en Espanol" href="http://www.templatemonster.com/es/" class="es-language"><strong>ES</strong> <i class="svg lang-icon"></i> </a></li><li><a title="TemplateMonster Russia: создать сайт так просто" href="http://www.templatemonster.com/ru/" class="ru-language"><strong>RU</strong> <i class="svg lang-icon"></i> </a></li><li><a title="TemplateMonster auf Deutsch" href="http://www.templatemonster.com/de/" class="de-language"><strong>DE</strong> <i class="svg lang-icon"></i> </a></li><li><a title="TemplateMonster Polska" href="http://www.templatemonster.com/pl/" class="pl-language"><strong>PL</strong> <i class="svg lang-icon"></i> </a></li><li><a title="" href="http://www.templatemonster.com/it/ " class="it-language"><strong>IT</strong> <i class="svg lang-icon"></i> </a></li><li><a title="" href="http://www.templatemonster.com/tr/" class="tr-language"><strong>TR</strong> <i class="svg lang-icon"></i> </a></li><li><a title="" href="http://www.templatemonster.com/fr/ " class="fr-language"><strong>FR</strong> <i class="svg lang-icon"></i> </a></li><li><a title="" href="http://www.templatemonster.com/pt-br/" class="br-language"><strong>BR</strong> <i class="svg lang-icon"></i> </a></li></ul></li></ul></div></div><div class="header"><div class="container"><div class="row"><div class="col-lg-3 col-md-4 col-mdm-4 col-sm-4"><div class="block-logo"> <a class="logo" href="/"></a></div></div><div class="col-lg-7 col-md-6 col-sm-6"><div class="block-search"><form id="js-searchForm" name="searchForm" class="form-search" action="/templates.php"><div class="input-append control-group"> <input name="keywords" type="text" placeholder="Enter Keyword or Product Number" class="js-typeahead2 keyword-search-field js-placeholder form-control" value=""/> <a href="#" id="searchFormSubmit" onclick="$('#js-searchForm').submit();return false;" class="btn btn-default"><span class="icon-search"></span></a></div> <label>e.g., <span id="js-search-label">responsive wordpress</span></label></form></div></div><div class="col-lg-2 col-md-2 col-sm-2"><div class="block-cart"> <a href="/cart.php" class="shop-cart"><b class="icon-cart"></b>Shopping Cart <span class="cart-count js-cart-count" id="cart-count">0<b class="arrow"></b></span></a></div></div></div></div></div><div class="navigation"><div class="container"><ul class="nav main-menu"><li class="sub-menu"><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Best Sellers']);" href="http://www.templatemonster.com/best-sellers/">Best Sellers </a><div class="sub-menu-1 "><ul><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'WordPress Themes']);" href="http://www.templatemonster.com/wordpress-themes.php"> <b class="icon-wordpress svg square-icon"></b> WordPress Themes</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Joomla Templates']);" href="http://www.templatemonster.com/joomla-templates.php"> <b class="icon-joomla svg square-icon"></b> Joomla Templates</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'PrestaShop Themes']);" href="http://www.templatemonster.com/prestashop-themes.php"> <b class="icon-prestahop svg square-icon"></b> PrestaShop Themes</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Magento Themes']);" href="http://www.templatemonster.com/magento-themes.php"> <b class="icon-magento svg square-icon"></b> Magento Themes</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Website Templates']);" href="http://www.templatemonster.com/website-templates.php"> <b class="icon-html5-2 svg square-icon"></b> Website Templates</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Responsive Templates']);" href="http://www.templatemonster.com/properties/features/responsive-design/"> <b class="icon-responsive svg square-icon"></b> Responsive Templates</a></li><li><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Best Sellers', 'Moto CMS Templates']);" href="http://www.templatemonster.com/moto-cms-html-templates.php"> <b class="icon-moto svg square-icon"></b> Moto CMS Templates</a></li></ul></div></li><li class="sub-menu"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Categories']);" href="http://www.templatemonster.com/category/">Categories</a><div class="sub-menu-2  clearfix"><ul><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Art &amp; Culture']);" href="http://www.templatemonster.com/category/art-culture/"> <b class="icon-"></b>Art & Culture </a> <span>(841)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Art']);" href="http://www.templatemonster.com/category/art-templates/">Art</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Music']);" href="http://www.templatemonster.com/category/music/">Music</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Museum']);" href="http://www.templatemonster.com/category/museum-templates/">Museum</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Movie']);" href="http://www.templatemonster.com/category/movie-templates/">Movie</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Theatre']);" href="http://www.templatemonster.com/category/theater-templates/">Theatre</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Animals &amp; Pets']);" href="http://www.templatemonster.com/category/animals-pets/"> <b class="icon-"></b>Animals & Pets </a> <span>(429)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Pets']);" href="http://www.templatemonster.com/category/animals-pets/">Pets</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Wild Life']);" href="http://www.templatemonster.com/category/wild-life-templates/">Wild Life</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Zoo']);" href="http://www.templatemonster.com/category/zoo-templates/">Zoo</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Design &amp; Photography']);" href="http://www.templatemonster.com/category/design-photography/"> <b class="icon-"></b>Design & Photography </a> <span>(5609)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Design']);" href="http://www.templatemonster.com/category/design/">Design</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Photography']);" href="http://www.templatemonster.com/category/art-photography/">Photography</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Architecture']);" href="http://www.templatemonster.com/category/architecture/">Architecture</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Electronics']);" href="http://www.templatemonster.com/category/electronics/"> <b class="icon-"></b>Electronics </a> <span>(666)</span><p></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Holidays, Gifts &amp; Flowers']);" href="http://www.templatemonster.com/category/holidays-gifts-flowers/"> <b class="icon-"></b>Holidays, Gifts & Flowers </a> <span>(453)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Flowers']);" href="http://www.templatemonster.com/category/flowers/">Flowers</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Holidays']);" href="http://www.templatemonster.com/category/holiday-templates/">Holidays</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Gifts']);" href="http://www.templatemonster.com/category/gifts/">Gifts</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Education &amp; Books']);" href="http://www.templatemonster.com/category/education-books/"> <b class="icon-"></b>Education & Books </a> <span>(680)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Books']);" href="http://www.templatemonster.com/category/books/">Books</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Education']);" href="http://www.templatemonster.com/category/education/">Education</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Science']);" href="http://www.templatemonster.com/category/science/">Science</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Business &amp; Services']);" href="http://www.templatemonster.com/category/business/"> <b class="icon-"></b>Business & Services </a> <span>(8730)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Consulting']);" href="http://www.templatemonster.com/category/consulting-templates/">Consulting</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Industrial']);" href="http://www.templatemonster.com/category/industrial/">Industrial</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Law']);" href="http://www.templatemonster.com/category/law/">Law</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Cars &amp; Motorcycles']);" href="http://www.templatemonster.com/category/cars-motorcycles/"> <b class="icon-"></b>Cars & Motorcycles </a> <span>(655)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Cars']);" href="http://www.templatemonster.com/category/cars/">Cars</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Motorcycles']);" href="http://www.templatemonster.com/category/motor-sports-templates/">Motorcycles</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Sports, Outdoors &amp; Travel']);" href="http://www.templatemonster.com/category/sports-outdoors-travel/"> <b class="icon-"></b>Sports, Outdoors & Travel </a> <span>(2158)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Sports']);" href="http://www.templatemonster.com/category/sport/">Sports</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Travel']);" href="http://www.templatemonster.com/category/travel/">Travel</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Hotels']);" href="http://www.templatemonster.com/category/hotels/">Hotels</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Fashion &amp; Beauty']);" href="http://www.templatemonster.com/category/fashion-beauty/"> <b class="icon-"></b>Fashion & Beauty </a> <span>(3161)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Fashion']);" href="http://www.templatemonster.com/category/fashion/">Fashion</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Jewelry']);" href="http://www.templatemonster.com/category/jewelry/">Jewelry</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Beauty']);" href="http://www.templatemonster.com/category/beauty/">Beauty</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Computers &amp; Internet']);" href="http://www.templatemonster.com/category/computers-internet/"> <b class="icon-"></b>Computers & Internet </a> <span>(1323)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Hosting']);" href="http://www.templatemonster.com/category/hosting/">Hosting</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Software']);" href="http://www.templatemonster.com/category/software/">Software</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Food &amp; Restaurant']);" href="http://www.templatemonster.com/category/food-restaurant/"> <b class="icon-"></b>Food & Restaurant </a> <span>(1363)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Restaurant']);" href="http://www.templatemonster.com/category/cafe-and-restaurant/">Restaurant</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Food &amp; Drinks']);" href="http://www.templatemonster.com/category/food-drink/">Food & Drinks</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Cafe']);" href="http://www.templatemonster.com/category/cafe-templates/">Cafe</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Society &amp; People']);" href="http://www.templatemonster.com/category/society-people/"> <b class="icon-"></b>Society & People </a> <span>(1654)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Personal Pages']);" href="http://www.templatemonster.com/category/personal-pages/">Personal Pages</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Dating']);" href="http://www.templatemonster.com/category/dating/">Dating</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Religion']);" href="http://www.templatemonster.com/category/religious/">Religion</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Charity']);" href="http://www.templatemonster.com/category/charity/">Charity</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Home &amp; Family']);" href="http://www.templatemonster.com/category/home-family/"> <b class="icon-"></b>Home & Family </a> <span>(2525)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Wedding']);" href="http://www.templatemonster.com/category/wedding/">Wedding</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Interior &amp; Furniture']);" href="http://www.templatemonster.com/category/interior-furniture/">Interior & Furniture</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', ' Children, Kids']);" href="http://www.templatemonster.com/category/kids-children/">Kids & Children</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Entertainment, Games &amp; Nightlife']);" href="http://www.templatemonster.com/category/entertainment-games-nightlife/"> <b class="icon-"></b>Entertainment, Games & Nightlife </a> <span>(1004)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Games']);" href="http://www.templatemonster.com/category/games/">Games</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Night Club']);" href="http://www.templatemonster.com/category/night-club/">Night Club</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Online Casino']);" href="http://www.templatemonster.com/category/online-casino/">Online Casino</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Radio']);" href="http://www.templatemonster.com/category/radio-website-templates/">Radio</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Real Estate']);" href="http://www.templatemonster.com/category/real-estate/"> <b class="icon-"></b>Real Estate </a> <span>(323)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Real Estate Agency']);" href="http://www.templatemonster.com/category/real-estate/">Real Estate Agency</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Mortgage']);" href="http://www.templatemonster.com/category/mortgage-templates/">Mortgage</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Land Broker']);" href="http://www.templatemonster.com/category/land-broker-templates/">Land Broker</a></p></li><li class="maxheight1"> <a class="item_title" onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Medical (Healthcare)']);" href="http://www.templatemonster.com/category/medical/"> <b class="icon-"></b>Medical (Healthcare) </a> <span>(630)</span><p> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Drug Store']);" href="http://www.templatemonster.com/category/drug-store-templates/">Drug Store</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Dentistry']);" href="http://www.templatemonster.com/category/dentistry-templates/">Dentistry</a>, <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Categories', 'Herbal']);" href="http://www.templatemonster.com/category/herbal-templates/">Herbal</a></p></li></ul></div></li><li class="sub-menu"><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Web Templates']);" href="http://www.templatemonster.com/web-templates.php">Web Templates</a><div class="sub-menu-3  clearfix"><ul><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Responsive Templates']);" href="http://www.templatemonster.com/properties/features/responsive-design/"><b class="icon-responsive svg square-icon"></b>Responsive <br>Templates </a><span>(4354)</span><p class="sub-menu-padding">Make website fully responsive for all devices and screen resolutions. Startlingly adaptive designs done right</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Wix Website Templates']);" href="http://www.templatemonster.com/wix-website-templates.php"><b class="icon-wix svg square-icon"></b>Wix Website <br>Templates </a><span>(22)</span><p class="sub-menu-padding">Designer-made templates to build awesome websites as simple as drag & drop</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Bootstrap Themes']);" href="http://www.templatemonster.com/properties/features/bootstrap-templates/"><b class="icon-bootstrap svg square-icon"></b>Bootstrap <br>Themes </a><span>(2656)</span><p class="sub-menu-padding">Have everything in place to be a real contender: Bootstrap functionality, responsive design, unique add-ons</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'HTML5 Site Templates']);" href="http://www.templatemonster.com/website-templates.php"><b class="icon-html5-2 svg square-icon"></b>HTML5 Site <br>Templates </a><span>(7087)</span><p class="sub-menu-padding">Super customizable themes built on intelligent HTML5, with a clean look to design and coding</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'PSD Templates']);" href="http://www.templatemonster.com/psd-templates.php"><b class="icon-psd svg square-icon"></b>PSD <br>Templates </a><span>(1037)</span><p class="sub-menu-padding">Multipurpose themes that have only graphic design source files, very flexible with a variety of custom options</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Facebook Themes']);" href="http://www.templatemonster.com/facebook-layouts.php"><b class="icon-facebook svg square-icon"></b>Facebook <br>Themes </a><span>(1542)</span><p class="sub-menu-padding">Social minded, engaging brand pages made to be perfect companion for your company’s main website</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Photo Gallery Templates']);" href="http://www.templatemonster.com/photo-gallery-templates.php"><b class="icon-moto svg square-icon"></b>Photo Gallery <br>Templates </a><span>(290)</span><p class="sub-menu-padding">Perfect combination of the drag-n-drop ability of site builder, the cataloging of photos, and the editing power of MotoCMS</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Newsletter Templates']);" href="http://www.templatemonster.com/newsletter-email-templates.php"><b class="icon-email svg square-icon"></b>Newsletter Templates </a><span>(13)</span><p class="sub-menu-padding">Responsive email templates with a modern design you could use to get more people to sign up for your newsletter</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Web Templates', 'Muse Templates']);" href="http://www.templatemonster.com/adobe-muse-templates.php"><b class="icon-muse svg square-icon"></b>Muse <br>Templates </a><span>(44)</span><p class="sub-menu-padding">Create fully functonal cross-browser sites with new Adobe product, no coding skills required</p></li></ul><a class="banner" href="http://www.templatemonster.com/templates.php?propertylist%5B2553%5D%5B0%5D=64310&amp;propertylist%5Btypes%5D%5B0%5D=50108"> <span class="browse-btn">Browse Now</span> <span>Photo Galleries for Creative Photographers</span><p>Unique galleries • Touch-Optimized • Mobile version included</p> </a><ul class="sub-menu-3-bottom clearfix"></ul></div></li><li class="sub-menu"><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'CMS Templates']);" href="http://www.templatemonster.com/cms-blog-templates.php">CMS Templates</a><div class="sub-menu-3  clearfix"><ul><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'WordPress Themes']);" href="http://www.templatemonster.com/wordpress-themes.php"><b class="icon-wordpress svg square-icon"></b>WordPress <br>Themes </a><span>(1898)</span><p class="sub-menu-padding">Three reasons to use WordPress: no time, no skills, no headache</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Drupal Themes']);" href="http://www.templatemonster.com/drupal-themes.php"><b class="icon-drupal svg square-icon"></b>Drupal <br>Themes </a><span>(507)</span><p class="sub-menu-padding">In the hands of a knowledgeable, Drupal theme is a glove that fits all sizes</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Joomla Templates']);" href="http://www.templatemonster.com/joomla-templates.php"><b class="icon-joomla svg square-icon"></b>Joomla <br>Templates </a><span>(1766)</span><p class="sub-menu-padding">Best for users with prior technical or website experience</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Moto CMS HTML']);" href="http://www.templatemonster.com/moto-cms-html-templates.php"><b class="icon-moto svg square-icon"></b>Moto CMS HTML <br>Templates </a><span>(1424)</span><p class="sub-menu-padding">Powerful templates with feature-rich editing tools for less technically skilled</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Turnkey Websites']);" href="http://www.templatemonster.com/turnkey-websites.php"><b class="icon-monster_dark svg square-icon"></b>Turnkey <br>Websites </a><span>(289)</span><p class="sub-menu-padding">Drag & drop admin controlled templates, fit both experienced and beginners</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'CMS Templates', 'Flash CMS']);" href="http://www.templatemonster.com/flash-cms-templates.php"><b class="icon-moto svg square-icon"></b>Flash CMS <br>Templates </a><span>(778)</span><p class="sub-menu-padding">Drag & drop builder comprised with beautiful designs, minimum skills required</p></li></ul><ul class="sub-menu-3-bottom clearfix"></ul></div></li><li class="sub-menu"><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'E-commerce Templates']);" href="http://www.templatemonster.com/ecommerce-templates.php">E-commerce Templates</a><div class="sub-menu-3  clearfix"><ul><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'Magento Themes']);" href="http://www.templatemonster.com/magento-themes.php"><b class="icon-magento svg square-icon"></b>Magento <br>Themes </a><span>(944)</span><p class="sub-menu-padding">Robustly featured and scalable shopping cart for tech-savvy web developers</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'VirtueMart Templates']);" href="http://www.templatemonster.com/virtuemart-templates.php"><b class="icon-virtuemart svg square-icon"></b>VirtueMart <br>Templates </a><span>(545)</span><p class="sub-menu-padding">Flexible e-commerce plugin for Joomla, optimal for small to mid-sized stores</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'ZenCart Templates']);" href="http://www.templatemonster.com/zencart-templates.php"><b class="icon-zencart svg square-icon"></b>ZenCart <br>Templates </a><span>(830)</span><p class="sub-menu-padding">Shopping cart with great merchandising features to run a bigger web store</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'PrestaShop Themes']);" href="http://www.templatemonster.com/prestashop-themes.php"><b class="icon-prestahop svg square-icon"></b>PrestaShop <br>Themes </a><span>(990)</span><p class="sub-menu-padding">User-friendly platform good in its quick set up and simple managing</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'Jigoshop Themes']);" href="http://www.templatemonster.com/jigoshop-themes.php"><b class="icon-jigoshop svg square-icon"></b>Jigoshop <br>Themes </a><span>(167)</span><p class="sub-menu-padding">WordPress based e-commerce solution made to be fast and easy to use</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'OpenCart Templates']);" href="http://www.templatemonster.com/opencart-templates.php"><b class="icon-opencart svg square-icon"></b>OpenCart <br>Templates </a><span>(491)</span><p class="sub-menu-padding">For small-to-mid merchants who need simple, highly extensible platform</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'Shopify Themes']);" href="http://www.templatemonster.com/shopify-themes.php"><b class="icon-shopify svg square-icon"></b>Shopify <br>Themes </a><span>(117)</span><p class="sub-menu-padding">Instant e-commerce platform with simple customization, great for entrepreneurs who want a hosted store</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'WooCommerce']);" href="http://www.templatemonster.com/woocommerce-themes.php"><b class="icon-woo svg square-icon"></b>WooCommerce <br>Themes </a><span>(194)</span><p class="sub-menu-padding">Predesigned templates to handle e-commerce store on your WordPress based website</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'osCommerce Templates']);" href="http://www.templatemonster.com/oscommerce-templates.php"><b class="icon-osc svg square-icon"></b>osCommerce <br>Templates </a><span>(1460)</span><p class="sub-menu-padding">Great for advanced online merchants who need highly configurable stores</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'E-commerce Templates', 'Loaded7 Templates']);" href="http://www.templatemonster.com/loaded7-templates.php"><b class="icon-loaded7 svg square-icon"></b>Loaded7 Templates </a><span>(5)</span><p class="sub-menu-padding">Outstanding mobile performance for both customers and store owners</p></li></ul><ul class="sub-menu-3-bottom clearfix"></ul></div></li><li class="sub-menu"><a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'Flash &amp; Media']);" href="http://www.templatemonster.com/flash-media/">Flash & Media</a><div class="sub-menu-3 sub-menu-3-last clearfix"><ul><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'Flash Templates']);" href="http://www.templatemonster.com/flash-templates.php"><b class="icon-flash svg square-icon"></b>Flash Site <br>Templates </a><span>(5860)</span><p class="sub-menu-padding">Animation-rich templates a par with video clips, fit all websites and users of any level</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'Flash Intro']);" href="http://www.templatemonster.com/flash-intro.php"><b class="icon-flash svg square-icon"></b>Flash Intro <br>Templates </a><span>(183)</span><p class="sub-menu-padding">Intro is a great way to attract visitors and give your website a diamond shine</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'SWiSH Templates']);" href="http://www.templatemonster.com/swish-templates.php"><b class="icon-swish svg square-icon"></b>SWiSH <br>Templates </a><span>(753)</span><p class="sub-menu-padding">Best creation tool with tons of Flash effects to develop fully interactive websites</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'After Effects Templates']);" href="http://www.templatemonster.com/video-templates.php"><b class="icon-ae svg square-icon"></b>After Effects <br>Templates </a><span>(261)</span><p class="sub-menu-padding">Hollywood-quality video products and digital motion graphics for any taste</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'PowerPoint Templates']);" href="http://www.templatemonster.com/powerpoint-templates.php"><b class="icon-powerpoint svg square-icon"></b>PowerPoint <br>Templates </a><span>(428)</span><p class="sub-menu-padding">Bold and captivating templates that combine quality visuals with clear message</p></li><li class="maxheight2"> <a onclick="_gaq.push(['b._trackEvent', 'navbar', 'Flash &amp; Media', 'Corporate Design ']);" href="http://www.templatemonster.com/corporate-design.php"><b class="icon-corporate svg square-icon"></b>Corporate <br>Design </a><span>(3930)</span><p class="sub-menu-padding">Template catalog designed around conceptually inspired brand identity</p></li></ul><ul class="sub-menu-3-bottom clearfix"></ul></div></li></ul></div></div></header><div id="content"><div class="container category_land" id="post-153"><div class="wp-page-heading"><h1 class="wp-heading">Shop by Category</h1><p>Only high quality web templates with free 24/7 support since 2002.</p></div><h2 class="wp_title">Popular Template Categories</h2><div class="wp-landing-categories"><div class="row"><ul class="wp-categories-list"><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/art-culture/"><h5 class="wp-categories-title">Art &amp; Culture</h5><img class="wp-categories-icon svg-image" alt="Art &amp; Culture" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/culture.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/animals-pets/"><h5 class="wp-categories-title">Animals &amp; Pets</h5><img class="wp-categories-icon svg-image" alt="Animals &amp; Pets" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/animals.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/design-photography/"><h5 class="wp-categories-title">Design &amp; Photography</h5><img class="wp-categories-icon svg-image" alt="Design &amp; Photography" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/photo.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/electronics/"><h5 class="wp-categories-title">Electronics</h5><img class="wp-categories-icon svg-image" alt="Electronics" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/electronics.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/education-books/"><h5 class="wp-categories-title">Education &amp; Books</h5><img class="wp-categories-icon svg-image" alt="Education &amp; Books" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/education.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/business/"><h5 class="wp-categories-title">Business &amp; Services</h5><img class="wp-categories-icon svg-image" alt="Business &amp; Services" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/business.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/cars-motorcycles/"><h5 class="wp-categories-title">Cars &amp; Motorcycles</h5><img class="wp-categories-icon svg-image" alt="Cars &amp; Motorcycles" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/cars.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/sports-outdoors-travel/"><h5 class="wp-categories-title">Sports, Outdoors &amp; Travel</h5><img class="wp-categories-icon svg-image" alt="Sports, Outdoors &amp; Travel" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/travel.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/fashion-beauty/"><h5 class="wp-categories-title">Fashion &amp; Beauty</h5><img class="wp-categories-icon svg-image" alt="Fashion &amp; Beauty" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/fashion.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/computers-internet/"><h5 class="wp-categories-title">Computers &amp; Internet</h5><img class="wp-categories-icon svg-image" alt="Computers &amp; Internet" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/computers.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/food-restaurant/"><h5 class="wp-categories-title">Food &amp; Restaurant</h5><img class="wp-categories-icon svg-image" alt="Food &amp; Restaurant" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/food.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/home-family/"><h5 class="wp-categories-title">Home &amp; Family</h5><img class="wp-categories-icon svg-image" alt="Home &amp; Family" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/home.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/entertainment-games-nightlife/"><h5 class="wp-categories-title">Entertainment, Games &amp; Nightlife</h5><img class="wp-categories-icon svg-image" alt="Entertainment, Games &amp; Nightlife" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/entertainment.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/holidays-gifts-flowers/"><h5 class="wp-categories-title">Holidays, Gifts &amp; Flowers</h5><img class="wp-categories-icon svg-image" alt="Holidays, Gifts &amp; Flowers" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/holidays.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/society-people/"><h5 class="wp-categories-title">Society &amp; People</h5><img class="wp-categories-icon svg-image" alt="Society &amp; People" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2013/12/people.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/medical/"><h5 class="wp-categories-title">Medical (Healthcare)</h5><img class="wp-categories-icon svg-image" alt="Medical (Healthcare)" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2014/03/medical.svg"></a></li><li class="col-lg-3 col-md-3 col-sm-3"><a class="wp-categories-link maxheight" href="http://www.templatemonster.com/category/real-estate/"><h5 class="wp-categories-title">Real Estate</h5><img class="wp-categories-icon svg-image" alt="Real Estate" src="http://cdnwptm.templatemonster.com/wp-content/uploads/2014/03/real-estate.svg"></a></li></ul></div></div><div class="clear"></div></div></div> <footer id="footer"><div class="footer-columns"><div class="container"><div class="row footer-line-dividers"><div class="col-lg-2 col-md-2 col-sm-2 column-1"><div class="block block-style-2 company"><h3 class="block-heading">Company</h3><div class="block-content"><ul class="list"><li><a href="/about.php">About</a></li><li><a href="/testimonials.php">Testimonials</a></li><li><a href="/register_aff.php">Affiliate Program</a></li><li><a href="/contact_us.php">Contact Us</a></li></ul></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 column-2"><div class="block follow-us block-style-2"><h3 class="block-heading">Connect with Us</h3><div class="block-content"><ul class="social-list"><li><a href="http://www.facebook.com/TemplateMonster/"><b class="icon-facebook svg square-icon"></b>Be a Fan on Facebook</a></li><li><a href="http://twitter.com/#!/templatemonster"><b class="icon-twitter svg square-icon"></b>Follow Us on Twitter</a></li><li><a href="https://plus.google.com/+templatemonster/"><b class="icon-google-plus svg square-icon"></b>Join TemplateMonster at Google+</a></li></ul></div></div></div><div class="col-lg-4 col-md-4 col-sm-4 column-3"><div class="block block-style-2 subscribe_footer"><h3 class="block-heading">Subscribe to Our Newsletter</h3><div class="block-content">Get new web templates report and design news.<form action="/jajaxserver.php?app=Newsletter&amp;action=subscription" method="POST" name="subscribe" id="subscribe-form" class="form-horizontal"><div id="subscribe-form-errors"></div><input type="hidden" name="name" id="subscribe-form-name" tabindex="1001" value="Customer"><div class="form-group"><div class="col-lg-12"><input type="email" name="email" autocomplete="off" disabled="disabled" data-constraints="@NotBlank @HTML5Required @Email(message=&quot;Doesn&#039;t look like a valid email&quot;, checkDomain=&quot;1&quot;) @HTML5Email(message=&quot;Doesn&#039;t look like a valid email&quot;, checkDomain=&quot;1&quot;) @Length(min=&quot;0&quot;, max=&quot;72&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;) @Pattern(regex=&quot;/^(.{1,64})\@/&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;)" required="required" id="subscribe-form-email" class=" form-control js-placeholder" tabindex="1002" placeholder="Email Address" value=""></div></div><div class="form-group"><div class="col-lg-12"><button type="submit" name="submit" disabled="disabled" id="subscribe-form-submit" class="btn btn-default" tabindex="1003" value="">Subscribe</button></div></div></form></div></div></div><div class="col-lg-3 col-md-3 col-sm-3 column-4"><div class="block block-style-2 help"><h3 class="block-heading">Help &amp; Support</h3><div class="block-content"><ul class="list"><li><a href="/help/">Help Center</a></li><li><a href="/free-templates.php">Free Sample Templates</a></li><li><a href="/refund-policy.php">Refund Policy</a></li><li><a href="/report-spam.php">Report Spam</a></li></ul></div></div></div></div></div></div><div class="copyright-columns"><div class="container"><div class="row"><div class="col-lg-6 col-md-5 col-sm-5"><div class="copyright"><p>Copyright &copy; 2003–2015 Jetimpex, Inc and Jetimpex, LP. <a href="/privacy-policy.php">Privacy Policy</a><br>All Rights Reserved. Payments are performed by Jetimpex, LP.</p></div></div><div class="col-lg-5 col-md-6 col-sm-6"><div class="payments"><p>Secure Payments by <img src="http://static.tmimgcdn.com/img/paypal-img.png?58b9fe9" alt=""></p></div></div><div class="col-lg-1 col-md-1 col-sm-1"><div class="virus-protection"> <img width="81" height="54" src="http://static.tmimgcdn.com/img/comodo-secure.png?58b9fe9" alt="Comodo SSL Certificate"></div></div></div></div></div> </footer><div class="block live-chat live-chat-in"><div class="block-heading"> <a href="javascript:;" class="btn-close"><i class="icon-close"></i></a> <strong>Live Chat</strong></div><div class="block-content"><div class="box-monster"> <figure class="img-monster"><img src="http://static.tmimgcdn.com/img/img-monster.png?58b9fe9" alt=""/></figure> <span>Hello! Can I help you choose a product?</span></div><form action="/jajaxserver.php?app=InvitationToChat&amp;action=redirect" method="POST" name="live_chat" id="live-chat-form" class="form-horizontal"><div id="live-chat-form-errors"></div><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><input type="text" name="name" autocomplete="off" data-constraints="@NotBlank @HTML5Required" required="required" id="live-chat-form-name" class=" form-control js-placeholder" tabindex="1004" placeholder="Your Name" value=""></div></div><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><input type="email" name="email" autocomplete="off" data-constraints="@NotBlank @HTML5Required @Email(message=&quot;Doesn&#039;t look like a valid email&quot;) @HTML5Email(message=&quot;Doesn&#039;t look like a valid email&quot;) @Length(min=&quot;0&quot;, max=&quot;72&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;) @Pattern(regex=&quot;/^(.{1,64})\@/&quot;, message=&quot;Doesn&#039;t look like a valid email&quot;)" required="required" id="live-chat-form-email" class=" form-control js-placeholder" tabindex="1005" placeholder="Email Address" value=""></div></div><div class="form-group"><div class="col-lg-12 col-md-12 col-sm-12"><button type="submit" name="submit" id="live-chat-form-submit" class="btn btn-default" tabindex="1006" value="">Start Chat</button></div></div></form>Have a support question? <a href="http://support.template-help.com/index.php?/Tickets/Submit">Submit a ticket</a></div></div><div class="block live-chat live-chat-out" style="display: none;"><div class="block-heading"> <a href="javascript:;">Live Chat <i class="icon-chat"></i> <i class="icon-arrow-up"></i></a></div></div> <script src="/js/livechatconfig.js"></script><script src="http://static.tmimgcdn.com/js/compiled.js?a39f61f"></script><script>
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
</script><script type="text/javascript">
			jQuery(document).on("submitResponse.default", function(e, response){
				Recaptcha.reload();
			});
		</script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"beacon-1.newrelic.com","licenseKey":"72d7dcce33","applicationID":"2869565","transactionName":"ZV1TZ0FTVkFVWkwKXlwXcFBHW1dcG0lZBFQfU1RKRF1KVhlaWRdUVVdDSg==","queueTime":0,"applicationTime":250,"atts":"SRpQEQlJRU8=","errorBeacon":"bam.nr-data.net","agent":"js-agent.newrelic.com\/nr-476.min.js"}</script></body></html>
DEBUG - 2015-01-13 12:51:02 --> File loaded: application/views/v_websites.php
DEBUG - 2015-01-13 12:51:02 --> Final output sent to browser
DEBUG - 2015-01-13 12:51:02 --> Total execution time: 0.1806
DEBUG - 2015-01-13 13:04:40 --> Config Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Hooks Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Utf8 Class Initialized
DEBUG - 2015-01-13 13:04:40 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 13:04:40 --> URI Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Router Class Initialized
DEBUG - 2015-01-13 13:04:40 --> No URI present. Default controller set.
DEBUG - 2015-01-13 13:04:40 --> Output Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Security Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Input Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 13:04:40 --> Language Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Loader Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Controller Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Helper loaded: url_helper
DEBUG - 2015-01-13 13:04:40 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 13:04:40 --> Final output sent to browser
DEBUG - 2015-01-13 13:04:40 --> Total execution time: 0.0136
DEBUG - 2015-01-13 13:04:40 --> Config Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Hooks Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Utf8 Class Initialized
DEBUG - 2015-01-13 13:04:40 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 13:04:40 --> URI Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Router Class Initialized
DEBUG - 2015-01-13 13:04:40 --> No URI present. Default controller set.
DEBUG - 2015-01-13 13:04:40 --> Output Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Security Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Input Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 13:04:40 --> Language Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Loader Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Controller Class Initialized
DEBUG - 2015-01-13 13:04:40 --> Helper loaded: url_helper
DEBUG - 2015-01-13 13:04:40 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 13:04:40 --> Final output sent to browser
DEBUG - 2015-01-13 13:04:40 --> Total execution time: 0.0129
DEBUG - 2015-01-13 13:04:41 --> Config Class Initialized
DEBUG - 2015-01-13 13:04:41 --> Hooks Class Initialized
DEBUG - 2015-01-13 13:04:41 --> Utf8 Class Initialized
DEBUG - 2015-01-13 13:04:41 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 13:04:41 --> URI Class Initialized
DEBUG - 2015-01-13 13:04:41 --> Router Class Initialized
DEBUG - 2015-01-13 13:04:41 --> No URI present. Default controller set.
DEBUG - 2015-01-13 13:04:41 --> Output Class Initialized
DEBUG - 2015-01-13 13:04:41 --> Security Class Initialized
DEBUG - 2015-01-13 13:04:41 --> Input Class Initialized
DEBUG - 2015-01-13 13:04:41 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 13:04:41 --> Language Class Initialized
DEBUG - 2015-01-13 13:04:41 --> Loader Class Initialized
DEBUG - 2015-01-13 13:04:41 --> Controller Class Initialized
DEBUG - 2015-01-13 13:04:41 --> Helper loaded: url_helper
DEBUG - 2015-01-13 13:04:41 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 13:04:41 --> Final output sent to browser
DEBUG - 2015-01-13 13:04:41 --> Total execution time: 0.0127
DEBUG - 2015-01-13 13:07:36 --> Config Class Initialized
DEBUG - 2015-01-13 13:07:36 --> Hooks Class Initialized
DEBUG - 2015-01-13 13:07:36 --> Utf8 Class Initialized
DEBUG - 2015-01-13 13:07:36 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 13:07:36 --> URI Class Initialized
DEBUG - 2015-01-13 13:07:36 --> Router Class Initialized
DEBUG - 2015-01-13 13:07:36 --> No URI present. Default controller set.
DEBUG - 2015-01-13 13:07:36 --> Output Class Initialized
DEBUG - 2015-01-13 13:07:36 --> Security Class Initialized
DEBUG - 2015-01-13 13:07:36 --> Input Class Initialized
DEBUG - 2015-01-13 13:07:36 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 13:07:36 --> Language Class Initialized
DEBUG - 2015-01-13 13:07:36 --> Loader Class Initialized
DEBUG - 2015-01-13 13:07:36 --> Controller Class Initialized
DEBUG - 2015-01-13 13:07:36 --> Helper loaded: url_helper
DEBUG - 2015-01-13 13:07:36 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 13:07:36 --> Final output sent to browser
DEBUG - 2015-01-13 13:07:36 --> Total execution time: 0.0125
DEBUG - 2015-01-13 13:07:39 --> Config Class Initialized
DEBUG - 2015-01-13 13:07:39 --> Hooks Class Initialized
DEBUG - 2015-01-13 13:07:39 --> Utf8 Class Initialized
DEBUG - 2015-01-13 13:07:39 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 13:07:39 --> URI Class Initialized
DEBUG - 2015-01-13 13:07:39 --> Router Class Initialized
DEBUG - 2015-01-13 13:07:39 --> No URI present. Default controller set.
DEBUG - 2015-01-13 13:07:39 --> Output Class Initialized
DEBUG - 2015-01-13 13:07:39 --> Security Class Initialized
DEBUG - 2015-01-13 13:07:39 --> Input Class Initialized
DEBUG - 2015-01-13 13:07:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 13:07:39 --> Language Class Initialized
DEBUG - 2015-01-13 13:07:39 --> Loader Class Initialized
DEBUG - 2015-01-13 13:07:39 --> Controller Class Initialized
DEBUG - 2015-01-13 13:07:39 --> Helper loaded: url_helper
DEBUG - 2015-01-13 13:07:39 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 13:07:39 --> Final output sent to browser
DEBUG - 2015-01-13 13:07:39 --> Total execution time: 0.0125
DEBUG - 2015-01-13 14:00:48 --> Config Class Initialized
DEBUG - 2015-01-13 14:00:48 --> Hooks Class Initialized
DEBUG - 2015-01-13 14:00:48 --> Utf8 Class Initialized
DEBUG - 2015-01-13 14:00:48 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 14:00:48 --> URI Class Initialized
DEBUG - 2015-01-13 14:00:48 --> Router Class Initialized
DEBUG - 2015-01-13 14:00:48 --> No URI present. Default controller set.
DEBUG - 2015-01-13 14:00:48 --> Output Class Initialized
DEBUG - 2015-01-13 14:00:48 --> Security Class Initialized
DEBUG - 2015-01-13 14:00:48 --> Input Class Initialized
DEBUG - 2015-01-13 14:00:48 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 14:00:48 --> Language Class Initialized
DEBUG - 2015-01-13 14:00:48 --> Loader Class Initialized
DEBUG - 2015-01-13 14:00:48 --> Controller Class Initialized
DEBUG - 2015-01-13 14:00:48 --> Helper loaded: url_helper
DEBUG - 2015-01-13 14:00:48 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 14:00:48 --> Final output sent to browser
DEBUG - 2015-01-13 14:00:48 --> Total execution time: 0.0125
DEBUG - 2015-01-13 14:01:43 --> Config Class Initialized
DEBUG - 2015-01-13 14:01:43 --> Hooks Class Initialized
DEBUG - 2015-01-13 14:01:43 --> Utf8 Class Initialized
DEBUG - 2015-01-13 14:01:43 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 14:01:43 --> URI Class Initialized
DEBUG - 2015-01-13 14:01:43 --> Router Class Initialized
DEBUG - 2015-01-13 14:01:43 --> No URI present. Default controller set.
DEBUG - 2015-01-13 14:01:43 --> Output Class Initialized
DEBUG - 2015-01-13 14:01:43 --> Security Class Initialized
DEBUG - 2015-01-13 14:01:43 --> Input Class Initialized
DEBUG - 2015-01-13 14:01:43 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 14:01:43 --> Language Class Initialized
DEBUG - 2015-01-13 14:01:43 --> Loader Class Initialized
DEBUG - 2015-01-13 14:01:43 --> Controller Class Initialized
DEBUG - 2015-01-13 14:01:43 --> Helper loaded: url_helper
DEBUG - 2015-01-13 14:01:43 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 14:14:04 --> Config Class Initialized
DEBUG - 2015-01-13 14:14:04 --> Hooks Class Initialized
DEBUG - 2015-01-13 14:14:04 --> Utf8 Class Initialized
DEBUG - 2015-01-13 14:14:04 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 14:14:04 --> URI Class Initialized
DEBUG - 2015-01-13 14:14:04 --> Router Class Initialized
DEBUG - 2015-01-13 14:14:04 --> No URI present. Default controller set.
DEBUG - 2015-01-13 14:14:04 --> Output Class Initialized
DEBUG - 2015-01-13 14:14:04 --> Security Class Initialized
DEBUG - 2015-01-13 14:14:04 --> Input Class Initialized
DEBUG - 2015-01-13 14:14:04 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 14:14:04 --> Language Class Initialized
DEBUG - 2015-01-13 14:14:04 --> Loader Class Initialized
DEBUG - 2015-01-13 14:14:04 --> Controller Class Initialized
DEBUG - 2015-01-13 14:14:04 --> Helper loaded: url_helper
DEBUG - 2015-01-13 14:14:04 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 14:14:04 --> Final output sent to browser
DEBUG - 2015-01-13 14:14:04 --> Total execution time: 0.0126
DEBUG - 2015-01-13 14:14:12 --> Config Class Initialized
DEBUG - 2015-01-13 14:14:12 --> Hooks Class Initialized
DEBUG - 2015-01-13 14:14:12 --> Utf8 Class Initialized
DEBUG - 2015-01-13 14:14:12 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 14:14:12 --> URI Class Initialized
DEBUG - 2015-01-13 14:14:12 --> Router Class Initialized
DEBUG - 2015-01-13 14:14:12 --> No URI present. Default controller set.
DEBUG - 2015-01-13 14:14:12 --> Output Class Initialized
DEBUG - 2015-01-13 14:14:12 --> Security Class Initialized
DEBUG - 2015-01-13 14:14:12 --> Input Class Initialized
DEBUG - 2015-01-13 14:14:12 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 14:14:12 --> Language Class Initialized
DEBUG - 2015-01-13 14:14:12 --> Loader Class Initialized
DEBUG - 2015-01-13 14:14:12 --> Controller Class Initialized
DEBUG - 2015-01-13 14:14:12 --> Helper loaded: url_helper
DEBUG - 2015-01-13 14:14:12 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 14:14:12 --> Final output sent to browser
DEBUG - 2015-01-13 14:14:12 --> Total execution time: 0.0128
DEBUG - 2015-01-13 14:59:45 --> Config Class Initialized
DEBUG - 2015-01-13 14:59:45 --> Hooks Class Initialized
DEBUG - 2015-01-13 14:59:45 --> Utf8 Class Initialized
DEBUG - 2015-01-13 14:59:45 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 14:59:45 --> URI Class Initialized
DEBUG - 2015-01-13 14:59:45 --> Router Class Initialized
DEBUG - 2015-01-13 14:59:45 --> No URI present. Default controller set.
DEBUG - 2015-01-13 14:59:45 --> Output Class Initialized
DEBUG - 2015-01-13 14:59:45 --> Security Class Initialized
DEBUG - 2015-01-13 14:59:45 --> Input Class Initialized
DEBUG - 2015-01-13 14:59:45 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 14:59:45 --> Language Class Initialized
DEBUG - 2015-01-13 14:59:45 --> Loader Class Initialized
DEBUG - 2015-01-13 14:59:45 --> Controller Class Initialized
DEBUG - 2015-01-13 14:59:45 --> Helper loaded: url_helper
DEBUG - 2015-01-13 14:59:45 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 14:59:45 --> Final output sent to browser
DEBUG - 2015-01-13 14:59:45 --> Total execution time: 0.0125
DEBUG - 2015-01-13 15:00:10 --> Config Class Initialized
DEBUG - 2015-01-13 15:00:10 --> Hooks Class Initialized
DEBUG - 2015-01-13 15:00:10 --> Utf8 Class Initialized
DEBUG - 2015-01-13 15:00:10 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 15:00:10 --> URI Class Initialized
DEBUG - 2015-01-13 15:00:10 --> Router Class Initialized
DEBUG - 2015-01-13 15:00:10 --> No URI present. Default controller set.
DEBUG - 2015-01-13 15:00:10 --> Output Class Initialized
DEBUG - 2015-01-13 15:00:10 --> Security Class Initialized
DEBUG - 2015-01-13 15:00:10 --> Input Class Initialized
DEBUG - 2015-01-13 15:00:10 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 15:00:10 --> Language Class Initialized
DEBUG - 2015-01-13 15:00:10 --> Loader Class Initialized
DEBUG - 2015-01-13 15:00:10 --> Controller Class Initialized
DEBUG - 2015-01-13 15:00:10 --> Helper loaded: url_helper
DEBUG - 2015-01-13 15:00:10 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 15:00:10 --> Final output sent to browser
DEBUG - 2015-01-13 15:00:10 --> Total execution time: 0.0126
DEBUG - 2015-01-13 15:52:46 --> Config Class Initialized
DEBUG - 2015-01-13 15:52:46 --> Hooks Class Initialized
DEBUG - 2015-01-13 15:52:46 --> Utf8 Class Initialized
DEBUG - 2015-01-13 15:52:46 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 15:52:46 --> URI Class Initialized
DEBUG - 2015-01-13 15:52:46 --> Router Class Initialized
DEBUG - 2015-01-13 15:52:46 --> No URI present. Default controller set.
DEBUG - 2015-01-13 15:52:46 --> Output Class Initialized
DEBUG - 2015-01-13 15:52:46 --> Security Class Initialized
DEBUG - 2015-01-13 15:52:46 --> Input Class Initialized
DEBUG - 2015-01-13 15:52:46 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 15:52:46 --> Language Class Initialized
DEBUG - 2015-01-13 15:52:46 --> Loader Class Initialized
DEBUG - 2015-01-13 15:52:46 --> Controller Class Initialized
DEBUG - 2015-01-13 15:52:46 --> Helper loaded: url_helper
DEBUG - 2015-01-13 15:52:46 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 15:52:46 --> Final output sent to browser
DEBUG - 2015-01-13 15:52:46 --> Total execution time: 0.0128
DEBUG - 2015-01-13 15:52:59 --> Config Class Initialized
DEBUG - 2015-01-13 15:52:59 --> Hooks Class Initialized
DEBUG - 2015-01-13 15:52:59 --> Utf8 Class Initialized
DEBUG - 2015-01-13 15:52:59 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 15:52:59 --> URI Class Initialized
DEBUG - 2015-01-13 15:52:59 --> Router Class Initialized
DEBUG - 2015-01-13 15:52:59 --> No URI present. Default controller set.
DEBUG - 2015-01-13 15:52:59 --> Output Class Initialized
DEBUG - 2015-01-13 15:52:59 --> Security Class Initialized
DEBUG - 2015-01-13 15:52:59 --> Input Class Initialized
DEBUG - 2015-01-13 15:52:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 15:52:59 --> Language Class Initialized
DEBUG - 2015-01-13 15:52:59 --> Loader Class Initialized
DEBUG - 2015-01-13 15:52:59 --> Controller Class Initialized
DEBUG - 2015-01-13 15:52:59 --> Helper loaded: url_helper
DEBUG - 2015-01-13 15:52:59 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 15:52:59 --> Final output sent to browser
DEBUG - 2015-01-13 15:52:59 --> Total execution time: 0.0125
DEBUG - 2015-01-13 16:02:04 --> Config Class Initialized
DEBUG - 2015-01-13 16:02:04 --> Hooks Class Initialized
DEBUG - 2015-01-13 16:02:04 --> Utf8 Class Initialized
DEBUG - 2015-01-13 16:02:04 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 16:02:04 --> URI Class Initialized
DEBUG - 2015-01-13 16:02:04 --> Router Class Initialized
DEBUG - 2015-01-13 16:02:04 --> No URI present. Default controller set.
DEBUG - 2015-01-13 16:02:04 --> Output Class Initialized
DEBUG - 2015-01-13 16:02:04 --> Security Class Initialized
DEBUG - 2015-01-13 16:02:04 --> Input Class Initialized
DEBUG - 2015-01-13 16:02:04 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 16:02:04 --> Language Class Initialized
DEBUG - 2015-01-13 16:02:04 --> Loader Class Initialized
DEBUG - 2015-01-13 16:02:04 --> Controller Class Initialized
DEBUG - 2015-01-13 16:02:04 --> Helper loaded: url_helper
DEBUG - 2015-01-13 16:02:04 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 16:02:04 --> Final output sent to browser
DEBUG - 2015-01-13 16:02:04 --> Total execution time: 0.0124
DEBUG - 2015-01-13 16:57:21 --> Config Class Initialized
DEBUG - 2015-01-13 16:57:21 --> Hooks Class Initialized
DEBUG - 2015-01-13 16:57:21 --> Utf8 Class Initialized
DEBUG - 2015-01-13 16:57:21 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 16:57:21 --> URI Class Initialized
DEBUG - 2015-01-13 16:57:21 --> Router Class Initialized
DEBUG - 2015-01-13 16:57:21 --> No URI present. Default controller set.
DEBUG - 2015-01-13 16:57:21 --> Output Class Initialized
DEBUG - 2015-01-13 16:57:21 --> Security Class Initialized
DEBUG - 2015-01-13 16:57:21 --> Input Class Initialized
DEBUG - 2015-01-13 16:57:21 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 16:57:21 --> Language Class Initialized
DEBUG - 2015-01-13 16:57:21 --> Loader Class Initialized
DEBUG - 2015-01-13 16:57:21 --> Controller Class Initialized
DEBUG - 2015-01-13 16:57:21 --> Helper loaded: url_helper
DEBUG - 2015-01-13 16:57:21 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 16:57:21 --> Final output sent to browser
DEBUG - 2015-01-13 16:57:21 --> Total execution time: 0.0130
DEBUG - 2015-01-13 16:57:35 --> Config Class Initialized
DEBUG - 2015-01-13 16:57:35 --> Hooks Class Initialized
DEBUG - 2015-01-13 16:57:35 --> Utf8 Class Initialized
DEBUG - 2015-01-13 16:57:35 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 16:57:35 --> URI Class Initialized
DEBUG - 2015-01-13 16:57:35 --> Router Class Initialized
DEBUG - 2015-01-13 16:57:35 --> No URI present. Default controller set.
DEBUG - 2015-01-13 16:57:35 --> Output Class Initialized
DEBUG - 2015-01-13 16:57:35 --> Security Class Initialized
DEBUG - 2015-01-13 16:57:35 --> Input Class Initialized
DEBUG - 2015-01-13 16:57:35 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 16:57:35 --> Language Class Initialized
DEBUG - 2015-01-13 16:57:35 --> Loader Class Initialized
DEBUG - 2015-01-13 16:57:35 --> Controller Class Initialized
DEBUG - 2015-01-13 16:57:35 --> Helper loaded: url_helper
DEBUG - 2015-01-13 16:57:35 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 16:57:35 --> Final output sent to browser
DEBUG - 2015-01-13 16:57:35 --> Total execution time: 0.0125
DEBUG - 2015-01-13 17:52:52 --> Config Class Initialized
DEBUG - 2015-01-13 17:52:52 --> Hooks Class Initialized
DEBUG - 2015-01-13 17:52:52 --> Utf8 Class Initialized
DEBUG - 2015-01-13 17:52:52 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 17:52:52 --> URI Class Initialized
DEBUG - 2015-01-13 17:52:52 --> Router Class Initialized
DEBUG - 2015-01-13 17:52:52 --> No URI present. Default controller set.
DEBUG - 2015-01-13 17:52:52 --> Output Class Initialized
DEBUG - 2015-01-13 17:52:52 --> Security Class Initialized
DEBUG - 2015-01-13 17:52:52 --> Input Class Initialized
DEBUG - 2015-01-13 17:52:52 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 17:52:52 --> Language Class Initialized
DEBUG - 2015-01-13 17:52:52 --> Loader Class Initialized
DEBUG - 2015-01-13 17:52:52 --> Controller Class Initialized
DEBUG - 2015-01-13 17:52:52 --> Helper loaded: url_helper
DEBUG - 2015-01-13 17:52:52 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 17:52:52 --> Final output sent to browser
DEBUG - 2015-01-13 17:52:52 --> Total execution time: 0.0125
DEBUG - 2015-01-13 17:53:04 --> Config Class Initialized
DEBUG - 2015-01-13 17:53:04 --> Hooks Class Initialized
DEBUG - 2015-01-13 17:53:04 --> Utf8 Class Initialized
DEBUG - 2015-01-13 17:53:04 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 17:53:04 --> URI Class Initialized
DEBUG - 2015-01-13 17:53:04 --> Router Class Initialized
DEBUG - 2015-01-13 17:53:04 --> No URI present. Default controller set.
DEBUG - 2015-01-13 17:53:04 --> Output Class Initialized
DEBUG - 2015-01-13 17:53:04 --> Security Class Initialized
DEBUG - 2015-01-13 17:53:04 --> Input Class Initialized
DEBUG - 2015-01-13 17:53:04 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 17:53:04 --> Language Class Initialized
DEBUG - 2015-01-13 17:53:04 --> Loader Class Initialized
DEBUG - 2015-01-13 17:53:04 --> Controller Class Initialized
DEBUG - 2015-01-13 17:53:04 --> Helper loaded: url_helper
DEBUG - 2015-01-13 17:53:04 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 17:53:04 --> Final output sent to browser
DEBUG - 2015-01-13 17:53:04 --> Total execution time: 0.0127
DEBUG - 2015-01-13 17:53:28 --> Config Class Initialized
DEBUG - 2015-01-13 17:53:28 --> Hooks Class Initialized
DEBUG - 2015-01-13 17:53:28 --> Utf8 Class Initialized
DEBUG - 2015-01-13 17:53:28 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 17:53:28 --> URI Class Initialized
DEBUG - 2015-01-13 17:53:28 --> Router Class Initialized
DEBUG - 2015-01-13 17:53:28 --> No URI present. Default controller set.
DEBUG - 2015-01-13 17:53:28 --> Output Class Initialized
DEBUG - 2015-01-13 17:53:28 --> Security Class Initialized
DEBUG - 2015-01-13 17:53:28 --> Input Class Initialized
DEBUG - 2015-01-13 17:53:28 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 17:53:28 --> Language Class Initialized
DEBUG - 2015-01-13 17:53:28 --> Loader Class Initialized
DEBUG - 2015-01-13 17:53:28 --> Controller Class Initialized
DEBUG - 2015-01-13 17:53:28 --> Helper loaded: url_helper
DEBUG - 2015-01-13 17:53:28 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 17:53:28 --> Final output sent to browser
DEBUG - 2015-01-13 17:53:28 --> Total execution time: 0.0126
DEBUG - 2015-01-13 18:28:01 --> Config Class Initialized
DEBUG - 2015-01-13 18:28:01 --> Hooks Class Initialized
DEBUG - 2015-01-13 18:28:01 --> Utf8 Class Initialized
DEBUG - 2015-01-13 18:28:01 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 18:28:01 --> URI Class Initialized
DEBUG - 2015-01-13 18:28:01 --> Router Class Initialized
DEBUG - 2015-01-13 18:28:01 --> No URI present. Default controller set.
DEBUG - 2015-01-13 18:28:01 --> Output Class Initialized
DEBUG - 2015-01-13 18:28:01 --> Security Class Initialized
DEBUG - 2015-01-13 18:28:01 --> Input Class Initialized
DEBUG - 2015-01-13 18:28:01 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 18:28:01 --> Language Class Initialized
DEBUG - 2015-01-13 18:28:01 --> Loader Class Initialized
DEBUG - 2015-01-13 18:28:01 --> Controller Class Initialized
DEBUG - 2015-01-13 18:28:01 --> Helper loaded: url_helper
DEBUG - 2015-01-13 18:28:01 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 18:28:01 --> Final output sent to browser
DEBUG - 2015-01-13 18:28:01 --> Total execution time: 0.0124
DEBUG - 2015-01-13 18:53:10 --> Config Class Initialized
DEBUG - 2015-01-13 18:53:10 --> Hooks Class Initialized
DEBUG - 2015-01-13 18:53:10 --> Utf8 Class Initialized
DEBUG - 2015-01-13 18:53:10 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 18:53:10 --> URI Class Initialized
DEBUG - 2015-01-13 18:53:10 --> Router Class Initialized
DEBUG - 2015-01-13 18:53:10 --> No URI present. Default controller set.
DEBUG - 2015-01-13 18:53:10 --> Output Class Initialized
DEBUG - 2015-01-13 18:53:10 --> Security Class Initialized
DEBUG - 2015-01-13 18:53:10 --> Input Class Initialized
DEBUG - 2015-01-13 18:53:10 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 18:53:10 --> Language Class Initialized
DEBUG - 2015-01-13 18:53:10 --> Loader Class Initialized
DEBUG - 2015-01-13 18:53:10 --> Controller Class Initialized
DEBUG - 2015-01-13 18:53:10 --> Helper loaded: url_helper
DEBUG - 2015-01-13 18:53:10 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 18:53:10 --> Final output sent to browser
DEBUG - 2015-01-13 18:53:10 --> Total execution time: 0.0127
DEBUG - 2015-01-13 18:53:23 --> Config Class Initialized
DEBUG - 2015-01-13 18:53:23 --> Hooks Class Initialized
DEBUG - 2015-01-13 18:53:23 --> Utf8 Class Initialized
DEBUG - 2015-01-13 18:53:23 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 18:53:23 --> URI Class Initialized
DEBUG - 2015-01-13 18:53:23 --> Router Class Initialized
DEBUG - 2015-01-13 18:53:23 --> No URI present. Default controller set.
DEBUG - 2015-01-13 18:53:23 --> Output Class Initialized
DEBUG - 2015-01-13 18:53:23 --> Security Class Initialized
DEBUG - 2015-01-13 18:53:23 --> Input Class Initialized
DEBUG - 2015-01-13 18:53:23 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 18:53:23 --> Language Class Initialized
DEBUG - 2015-01-13 18:53:23 --> Loader Class Initialized
DEBUG - 2015-01-13 18:53:23 --> Controller Class Initialized
DEBUG - 2015-01-13 18:53:23 --> Helper loaded: url_helper
DEBUG - 2015-01-13 18:53:23 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 18:53:23 --> Final output sent to browser
DEBUG - 2015-01-13 18:53:23 --> Total execution time: 0.0125
DEBUG - 2015-01-13 19:52:59 --> Config Class Initialized
DEBUG - 2015-01-13 19:52:59 --> Hooks Class Initialized
DEBUG - 2015-01-13 19:52:59 --> Utf8 Class Initialized
DEBUG - 2015-01-13 19:52:59 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 19:52:59 --> URI Class Initialized
DEBUG - 2015-01-13 19:52:59 --> Router Class Initialized
DEBUG - 2015-01-13 19:52:59 --> No URI present. Default controller set.
DEBUG - 2015-01-13 19:52:59 --> Output Class Initialized
DEBUG - 2015-01-13 19:52:59 --> Security Class Initialized
DEBUG - 2015-01-13 19:52:59 --> Input Class Initialized
DEBUG - 2015-01-13 19:52:59 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 19:52:59 --> Language Class Initialized
DEBUG - 2015-01-13 19:52:59 --> Loader Class Initialized
DEBUG - 2015-01-13 19:52:59 --> Controller Class Initialized
DEBUG - 2015-01-13 19:52:59 --> Helper loaded: url_helper
DEBUG - 2015-01-13 19:52:59 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 19:52:59 --> Final output sent to browser
DEBUG - 2015-01-13 19:52:59 --> Total execution time: 0.0127
DEBUG - 2015-01-13 19:53:06 --> Config Class Initialized
DEBUG - 2015-01-13 19:53:06 --> Hooks Class Initialized
DEBUG - 2015-01-13 19:53:06 --> Utf8 Class Initialized
DEBUG - 2015-01-13 19:53:06 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 19:53:06 --> URI Class Initialized
DEBUG - 2015-01-13 19:53:06 --> Router Class Initialized
DEBUG - 2015-01-13 19:53:06 --> No URI present. Default controller set.
DEBUG - 2015-01-13 19:53:06 --> Output Class Initialized
DEBUG - 2015-01-13 19:53:06 --> Security Class Initialized
DEBUG - 2015-01-13 19:53:06 --> Input Class Initialized
DEBUG - 2015-01-13 19:53:06 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 19:53:06 --> Language Class Initialized
DEBUG - 2015-01-13 19:53:06 --> Loader Class Initialized
DEBUG - 2015-01-13 19:53:06 --> Controller Class Initialized
DEBUG - 2015-01-13 19:53:06 --> Helper loaded: url_helper
DEBUG - 2015-01-13 19:53:06 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 19:53:06 --> Final output sent to browser
DEBUG - 2015-01-13 19:53:06 --> Total execution time: 0.0125
DEBUG - 2015-01-13 19:54:45 --> Config Class Initialized
DEBUG - 2015-01-13 19:54:45 --> Hooks Class Initialized
DEBUG - 2015-01-13 19:54:45 --> Utf8 Class Initialized
DEBUG - 2015-01-13 19:54:45 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 19:54:45 --> URI Class Initialized
DEBUG - 2015-01-13 19:54:45 --> Router Class Initialized
DEBUG - 2015-01-13 19:54:45 --> No URI present. Default controller set.
DEBUG - 2015-01-13 19:54:45 --> Output Class Initialized
DEBUG - 2015-01-13 19:54:45 --> Security Class Initialized
DEBUG - 2015-01-13 19:54:45 --> Input Class Initialized
DEBUG - 2015-01-13 19:54:45 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 19:54:45 --> Language Class Initialized
DEBUG - 2015-01-13 19:54:45 --> Loader Class Initialized
DEBUG - 2015-01-13 19:54:45 --> Controller Class Initialized
DEBUG - 2015-01-13 19:54:45 --> Helper loaded: url_helper
DEBUG - 2015-01-13 19:54:45 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 19:54:45 --> Final output sent to browser
DEBUG - 2015-01-13 19:54:45 --> Total execution time: 0.0124
DEBUG - 2015-01-13 20:52:39 --> Config Class Initialized
DEBUG - 2015-01-13 20:52:39 --> Hooks Class Initialized
DEBUG - 2015-01-13 20:52:39 --> Utf8 Class Initialized
DEBUG - 2015-01-13 20:52:39 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 20:52:39 --> URI Class Initialized
DEBUG - 2015-01-13 20:52:39 --> Router Class Initialized
DEBUG - 2015-01-13 20:52:39 --> No URI present. Default controller set.
DEBUG - 2015-01-13 20:52:39 --> Output Class Initialized
DEBUG - 2015-01-13 20:52:39 --> Security Class Initialized
DEBUG - 2015-01-13 20:52:39 --> Input Class Initialized
DEBUG - 2015-01-13 20:52:39 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 20:52:39 --> Language Class Initialized
DEBUG - 2015-01-13 20:52:39 --> Loader Class Initialized
DEBUG - 2015-01-13 20:52:39 --> Controller Class Initialized
DEBUG - 2015-01-13 20:52:39 --> Helper loaded: url_helper
DEBUG - 2015-01-13 20:52:39 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 20:52:39 --> Final output sent to browser
DEBUG - 2015-01-13 20:52:39 --> Total execution time: 0.0126
DEBUG - 2015-01-13 20:52:49 --> Config Class Initialized
DEBUG - 2015-01-13 20:52:49 --> Hooks Class Initialized
DEBUG - 2015-01-13 20:52:49 --> Utf8 Class Initialized
DEBUG - 2015-01-13 20:52:49 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 20:52:49 --> URI Class Initialized
DEBUG - 2015-01-13 20:52:49 --> Router Class Initialized
DEBUG - 2015-01-13 20:52:49 --> No URI present. Default controller set.
DEBUG - 2015-01-13 20:52:49 --> Output Class Initialized
DEBUG - 2015-01-13 20:52:49 --> Security Class Initialized
DEBUG - 2015-01-13 20:52:49 --> Input Class Initialized
DEBUG - 2015-01-13 20:52:49 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 20:52:49 --> Language Class Initialized
DEBUG - 2015-01-13 20:52:49 --> Loader Class Initialized
DEBUG - 2015-01-13 20:52:49 --> Controller Class Initialized
DEBUG - 2015-01-13 20:52:49 --> Helper loaded: url_helper
DEBUG - 2015-01-13 20:52:49 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 20:52:49 --> Final output sent to browser
DEBUG - 2015-01-13 20:52:49 --> Total execution time: 0.0126
DEBUG - 2015-01-13 21:54:23 --> Config Class Initialized
DEBUG - 2015-01-13 21:54:23 --> Hooks Class Initialized
DEBUG - 2015-01-13 21:54:23 --> Utf8 Class Initialized
DEBUG - 2015-01-13 21:54:23 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 21:54:23 --> URI Class Initialized
DEBUG - 2015-01-13 21:54:23 --> Router Class Initialized
DEBUG - 2015-01-13 21:54:23 --> No URI present. Default controller set.
DEBUG - 2015-01-13 21:54:23 --> Output Class Initialized
DEBUG - 2015-01-13 21:54:23 --> Security Class Initialized
DEBUG - 2015-01-13 21:54:23 --> Input Class Initialized
DEBUG - 2015-01-13 21:54:23 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 21:54:23 --> Language Class Initialized
DEBUG - 2015-01-13 21:54:23 --> Loader Class Initialized
DEBUG - 2015-01-13 21:54:23 --> Controller Class Initialized
DEBUG - 2015-01-13 21:54:23 --> Helper loaded: url_helper
DEBUG - 2015-01-13 21:54:23 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 21:54:23 --> Final output sent to browser
DEBUG - 2015-01-13 21:54:23 --> Total execution time: 0.0125
DEBUG - 2015-01-13 21:54:31 --> Config Class Initialized
DEBUG - 2015-01-13 21:54:31 --> Hooks Class Initialized
DEBUG - 2015-01-13 21:54:31 --> Utf8 Class Initialized
DEBUG - 2015-01-13 21:54:31 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 21:54:31 --> URI Class Initialized
DEBUG - 2015-01-13 21:54:31 --> Router Class Initialized
DEBUG - 2015-01-13 21:54:31 --> No URI present. Default controller set.
DEBUG - 2015-01-13 21:54:31 --> Output Class Initialized
DEBUG - 2015-01-13 21:54:31 --> Security Class Initialized
DEBUG - 2015-01-13 21:54:31 --> Input Class Initialized
DEBUG - 2015-01-13 21:54:31 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 21:54:31 --> Language Class Initialized
DEBUG - 2015-01-13 21:54:31 --> Loader Class Initialized
DEBUG - 2015-01-13 21:54:31 --> Controller Class Initialized
DEBUG - 2015-01-13 21:54:31 --> Helper loaded: url_helper
DEBUG - 2015-01-13 21:54:31 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 21:54:31 --> Final output sent to browser
DEBUG - 2015-01-13 21:54:31 --> Total execution time: 0.0124
DEBUG - 2015-01-13 22:59:44 --> Config Class Initialized
DEBUG - 2015-01-13 22:59:44 --> Hooks Class Initialized
DEBUG - 2015-01-13 22:59:44 --> Utf8 Class Initialized
DEBUG - 2015-01-13 22:59:44 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 22:59:44 --> URI Class Initialized
DEBUG - 2015-01-13 22:59:44 --> Router Class Initialized
DEBUG - 2015-01-13 22:59:44 --> No URI present. Default controller set.
DEBUG - 2015-01-13 22:59:44 --> Output Class Initialized
DEBUG - 2015-01-13 22:59:44 --> Security Class Initialized
DEBUG - 2015-01-13 22:59:44 --> Input Class Initialized
DEBUG - 2015-01-13 22:59:44 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 22:59:44 --> Language Class Initialized
DEBUG - 2015-01-13 22:59:44 --> Loader Class Initialized
DEBUG - 2015-01-13 22:59:44 --> Controller Class Initialized
DEBUG - 2015-01-13 22:59:44 --> Helper loaded: url_helper
DEBUG - 2015-01-13 22:59:44 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 22:59:44 --> Final output sent to browser
DEBUG - 2015-01-13 22:59:44 --> Total execution time: 0.0126
DEBUG - 2015-01-13 23:00:07 --> Config Class Initialized
DEBUG - 2015-01-13 23:00:07 --> Hooks Class Initialized
DEBUG - 2015-01-13 23:00:07 --> Utf8 Class Initialized
DEBUG - 2015-01-13 23:00:07 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 23:00:07 --> URI Class Initialized
DEBUG - 2015-01-13 23:00:07 --> Router Class Initialized
DEBUG - 2015-01-13 23:00:07 --> No URI present. Default controller set.
DEBUG - 2015-01-13 23:00:07 --> Output Class Initialized
DEBUG - 2015-01-13 23:00:07 --> Security Class Initialized
DEBUG - 2015-01-13 23:00:07 --> Input Class Initialized
DEBUG - 2015-01-13 23:00:07 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 23:00:07 --> Language Class Initialized
DEBUG - 2015-01-13 23:00:07 --> Loader Class Initialized
DEBUG - 2015-01-13 23:00:07 --> Controller Class Initialized
DEBUG - 2015-01-13 23:00:07 --> Helper loaded: url_helper
DEBUG - 2015-01-13 23:00:07 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 23:00:07 --> Final output sent to browser
DEBUG - 2015-01-13 23:00:07 --> Total execution time: 0.0125
DEBUG - 2015-01-13 23:58:11 --> Config Class Initialized
DEBUG - 2015-01-13 23:58:11 --> Hooks Class Initialized
DEBUG - 2015-01-13 23:58:11 --> Utf8 Class Initialized
DEBUG - 2015-01-13 23:58:11 --> UTF-8 Support Enabled
DEBUG - 2015-01-13 23:58:11 --> URI Class Initialized
DEBUG - 2015-01-13 23:58:11 --> Router Class Initialized
DEBUG - 2015-01-13 23:58:11 --> No URI present. Default controller set.
DEBUG - 2015-01-13 23:58:11 --> Output Class Initialized
DEBUG - 2015-01-13 23:58:11 --> Security Class Initialized
DEBUG - 2015-01-13 23:58:11 --> Input Class Initialized
DEBUG - 2015-01-13 23:58:11 --> Global POST and COOKIE data sanitized
DEBUG - 2015-01-13 23:58:11 --> Language Class Initialized
DEBUG - 2015-01-13 23:58:11 --> Loader Class Initialized
DEBUG - 2015-01-13 23:58:11 --> Controller Class Initialized
DEBUG - 2015-01-13 23:58:11 --> Helper loaded: url_helper
DEBUG - 2015-01-13 23:58:11 --> File loaded: application/views/v_home.php
DEBUG - 2015-01-13 23:58:11 --> Final output sent to browser
DEBUG - 2015-01-13 23:58:11 --> Total execution time: 0.0124
