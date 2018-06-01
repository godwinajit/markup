<?php /** * The Header template for our theme * * Displays all of the <head> section and everything up till
<div id="main">
    * * @package WordPress * @subpackage Twenty_Thirteen * @since Twenty Thirteen 1.0 */ ?>
<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<!--  Google Analytics tracking code for Optimize plugin - Start -->
<style>.async-hide
{ opacity: 0 !important}
</style>
<script>(function(a,s,y,n,c,h,i,d,e){s.className+=' '+y;h.start=1*new Date;
h.end=i=function()
{s.className=s.className.replace(RegExp(' ?'+y),'')};
(a[n]=a[n]||[]).hide=h;setTimeout(function()
{i();h.end=null}
,c);h.timeout=c;
})(window,document.documentElement,'async-hide','dataLayer',4000,
{'GTM-TCFK5RN':true}
);
</script>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)}
,i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-70990108-1', 'auto');
ga('require', 'GTM-TCFK5RN');
ga('send', 'pageview');
</script>
<!--  Google Analytics tracking code for Optimize plugin - End -->
<!-- Google Tag Manager 09202017start-->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M3M64ZD');</script>
<!-- End Google Tag Manager 09202017end-->
<!-- Global site tag (gtag.js) - Google Analytics Start -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-70990108-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-70990108-2');
</script>
<!-- Global site tag (gtag.js) - Google Analytics End -->
<!-- FullStory Script start -->
<script> window['_fs_debug'] = false; window['_fs_host'] = 'fullstory.com'; window['_fs_org'] = 'AE344'; window['_fs_namespace'] = 'FS'; (function(m,n,e,t,l,o,g,y){ if (e in m) {if(m.console && m.console.log) { m.console.log('FullStory namespace conflict. Please set window["_fs_namespace"].');} return;} g=m[e]=function(a,b){g.q?g.q.push([a,b]):g._api(a,b);};g.q=[]; o=n.createElement(t);o.async=1;o.src='https://'+_fs_host+'/s/fs.js'; y=n.getElementsByTagName(t)[0];y.parentNode.insertBefore(o,y); g.identify=function(i,v){g(l,{uid:i});if(v)g(l,v)};g.setUserVars=function(v){g(l,v)}; y="rec";g.shutdown=function(i,v){g(y,!1)};g.restart=function(i,v){g(y,!0)}; g.identifyAccount=function(i,v){o='account';v=v||{};v.acctId=i;g(o,v)}; g.clearUserCookie=function(){}; })(window,document,window['_fs_namespace'],'script','user'); </script>
<!-- FullStory Script end -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title>

<?php
	if(is_post_type_archive('events') && !is_day() && !is_month() && !is_year()){
		echo "Upcoming Events";	
	}else{
		wp_title( '|', true, 'right' );
	}
  ?>

</title>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" type="image/x-icon">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
<![endif]-->
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/font-awesome.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/owl.carousel.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/jquery.selectbox.css">
<!--add wphead -->
<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/main.css" />
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/responsive.css" />
</head>

<body <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) 09202017start-->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M3M64ZD"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) 09202017end-->
<div id="site-loader"></div>
<div id="page">
      <header id="site-header" class="header header-extended">
        <div class="wrapper container-fluid">
                    <div class="row center-xs">
                        <div class="col-xs-11 col-lg-10">

			             <?php $logo= get_field( 'logo', 'option'); if($logo){ ?>
   <a class="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Global Lyme Alliance"><img src="<?php echo $logo['url']; ?>" alt="Global Lyme Alliance" title="Global Lyme Alliance" /></a>
   <?php } ?>
                            <div class="right-holder">
                                <div class="facebook-widget">
                                    <div class="fb-like" data-href="https://www.facebook.com/GlobalLymeAlliance/" data-size="large" data-layout="box_count" data-action="like" data-show-faces="true" data-share="false"></div>
                                </div>
<?php $donate_now_link= get_field( 'donate_now_link', 'option'); if($donate_now_link){echo '<a class="btn btn-default" href="'.$donate_now_link. '" title="Donate Now">Donate Now</a>';} ?>

                                <a href="#" class="search-opener">
                                    <span class="icon-search"></span>
                                </a>


                                <a href="#" class="nav-opener">
                                    <span class="icon-burger"></span>
                                </a>

                            </div>
                            <nav class="nav">
                                <?php
                                     if(is_active_sidebar('sidebar-mainmenu')){
                                        dynamic_sidebar('sidebar-mainmenu');
                                     }
                                    ?>
                            </nav>
                        </div>
                    </div>
        </div>
      </header>
    