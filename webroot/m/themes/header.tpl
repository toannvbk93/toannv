<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if IE 8 ]>    <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js lt-ie9> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width" />
	   <title>{$site_name}</title>
		<meta name="description" content="{if $pagetitle ne ""}{$pagetitle} - {/if}{if $metadescription ne ""}{$metadescription} - {/if}{$site_name}" />
		<meta name="keywords" content="{if $pagetitle ne ""}{$pagetitle},{/if}{if $metakeywords ne ""}{$metakeywords},{/if}{$site_name}">
		
	    

	    
    <!-- Web App Data -->
<meta name="apple-mobile-web-app-capable" content="yes">
<meta content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;" name="viewport">
<meta name="apple-mobile-web-app-status-bar-style" content="black" />
<!-- =Web App Data -->


<!-- Icons -->
<!-- non-retina iPhone pre iOS 7 -->
<link rel="apple-touch-icon-precomposed" href="{$mobileurl}/static/webapp/icon57.png" sizes="57x57">
<!-- non-retina iPad pre iOS 7 -->
<link rel="apple-touch-icon-precomposed" href="{$mobileurl}/static/webapp/icon72.png" sizes="72x72">
<!-- non-retina iPad iOS 7 -->
<link rel="apple-touch-icon-precomposed" href="{$mobileurl}/static/webapp/icon76.png" sizes="76x76">
<!-- retina iPhone pre iOS 7 -->
<link rel="apple-touch-icon-precomposed" href="{$mobileurl}/static/webapp/icon114.png" sizes="114x114">
<!-- retina iPhone iOS 7 -->
<link rel="apple-touch-icon-precomposed" href="{$mobileurl}/static/webapp/icon120.png" sizes="120x120">
<!-- retina iPad pre iOS 7 -->
<link rel="apple-touch-icon-precomposed" href="{$mobileurl}/static/webapp/icon144.png" sizes="144x144">
<!-- retina iPad iOS 7 -->
<link rel="apple-touch-icon-precomposed" href="{$mobileurl}/static/webapp/icon152.png" sizes="152x152">



<!-- iPhone SPLASHSCREEN-->
<link href="{$mobileurl}/static/webapp/apple-touch-startup-image-320x460.png" media="(device-width: 320px)" rel="apple-touch-startup-image">
<!-- iPhone (Retina) SPLASHSCREEN-->
<link href="{$mobileurl}/static/webapp/apple-touch-startup-image-640x920.png" media="(device-width: 320px) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<!-- iPhone SPLASHSCREEN 4" -->
<link href="{$mobileurl}/static/webapp/apple-touch-startup-image-640x1096.png" rel="apple-touch-startup-image" media="(device-height: 568px)">
<!-- iPad (portrait) SPLASHSCREEN-->
<link href="{$mobileurl}/static/webapp/apple-touch-startup-image-768x1004.png" media="(device-width: 768px) and (orientation: portrait)" rel="apple-touch-startup-image">
<!-- iPad (landscape) SPLASHSCREEN-->
<link href="{$mobileurl}/static/webapp/apple-touch-startup-image-1024x748.png" media="(device-width: 768px) and (orientation: landscape)" rel="apple-touch-startup-image">
<!-- iPad (Retina, portrait) SPLASHSCREEN-->
<link href="{$mobileurl}/static/webapp/apple-touch-startup-image-1536x2008.png" media="(device-width: 1536px) and (orientation: portrait) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<!-- iPad (Retina, landscape) SPLASHSCREEN-->
<link href="{$mobileurl}/static/webapp/apple-touch-startup-image-2048x1496.png" media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)"media="(device-width: 1536px)  and (orientation: landscape) and (-webkit-device-pixel-ratio: 2)" rel="apple-touch-startup-image">
<!-- =Web App Data --> 


    <!-- Favicon -->

	    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
	    
    <!-- =Favicon -->



    <!-- Import Styles-->

	    <link rel='stylesheet' href='{$mobileurl}/static/css/vendor/normalize.css'>
	    <link rel='stylesheet' href='{$mobileurl}/static/css/vendor/fontello.css'>
	    <link rel='stylesheet' href='{$mobileurl}/static/css/style.css'>

    <!-- =Import Styles-->
	    

	    
    <!-- Import GoogleWebFonts -->

	    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,100,200,700,500' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Tinos:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>


    <!-- =Import GoogleWebFonts -->
	    
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	    
    <!-- Modernizr & HTML5 Shiv -->

	    <script src='{$mobileurl}/static/js/vendor/modernizr.js'></script>

		<!--[if lt IE 9]>
		<script src='{$mobileurl}/static/js/vendor/html5shiv.js'></script>
		<![endif]-->

    <!-- =Modernizr & HTML5 Shiv -->
	    

	    
	</head>
	<body class="touch-gesture">
<div id="fb-root"></div>
    {if $enable_fc eq "1"}
    {literal}
<script src="http://connect.facebook.net/vi_VN/all.js"></script>
<script>
  FB.init({appId: '{/literal}{$FACEBOOK_APP_ID}{literal}', status: true,
           cookie: true, xfbml: true});
  FB.Event.subscribe('auth.login', function(response) {
    window.location.reload();
  });	  
</script>
{/literal}
    {/if}