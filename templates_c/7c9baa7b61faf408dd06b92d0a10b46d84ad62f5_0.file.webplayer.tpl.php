<?php
/* Smarty version 3.1.29, created on 2020-06-11 12:19:43
  from "/home/stats/chameleon/templates/webplayer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5ee2053fbb3913_35039879',
  'file_dependency' => 
  array (
    '7c9baa7b61faf408dd06b92d0a10b46d84ad62f5' => 
    array (
      0 => '/home/stats/chameleon/templates/webplayer.tpl',
      1 => 1591478365,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ee2053fbb3913_35039879 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>Chattersworld Webplayer voor: #<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
</title>
		<meta charset="utf-8">
    		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    		<meta name="apple-mobile-web-app-capable" content="yes" />
    		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
   		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
 		<meta http-equiv="CACHE-CONTROL" CONTENT="NO-CACHE">
		<meta name="keywords" content="chatten, gezellig kletsen, Chattersworld, Chattersworld Radio, Gezellig, Nonstop Request, 24/7 Verzoekjes, Live verzoek, Radio Chat, gezelligeblondecandy, webcam, webcamchat, triviant," />
		<meta name="google-site-verification" content="-hrJp-Kl7mtCVBOR5Dg45R52OfEAmnIceApYxPMluc4" />
		<meta name="robots" content="index,follow,noodp,noydir" />
		<meta name="description" content="Waar chatten, chatten is!"/><link rel="canonical" href="https://chattersworld.nl/" />
		<meta property="og:locale" content="nl_NL" /><meta property="og:type" content="website" />
		<meta property="og:title" content="GBC4Fun | Waar chatten, chatten is!" />
		<meta property="og:description" content="Chat voor Jong en Oud" />
		<meta property="og:url" content="https://chattersworld.nl/" />
		<meta property="og:site_name" content="Chattersworld Chat" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="WebPlayer | Chattersworld" />
		<meta property="og:site_name" content="WebPlayer | Chattersworld" />
		<meta property="article:publisher" content="https://www.facebook.com/chattersworld/" />
		<meta property="fb:app_id" content="699740480138507" />
		<meta property="og:image" content="https://www.gbc-radio.nl/wp-content/uploads/2017/06/header.jpg" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:description" content="Waar chatten, chatten is!" />
		<meta name="twitter:title" content="Chattersworld | Waar chatten, chatten is!" />
		<link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" sizes="32x32" />
		<link href="webplayer/css/bootstrap.min.css?v=1.18.03.18" rel="stylesheet" type="text/css" media="all" />
		<link href="webplayer/css/themify-icons.min.css?v=1.18.03.18" rel="stylesheet" type="text/css" media="all" />
		<link href="webplayer/css/flexslider.min.css?v=1.18.03.18" rel="stylesheet" type="text/css" media="all" />
		<link href="webplayer/css/lightbox.min.css?v=1.18.03.18" rel="stylesheet" type="text/css" media="all" />
		<link href="webplayer/css/ytplayer.min.css?v=1.18.03.18" rel="stylesheet" type="text/css" media="all" />
		<link href="webplayer/css/theme-nativehtml5radio.min.css?v=1.18.03.18" rel="stylesheet" type="text/css" media="all" />
    			<?php echo '<script'; ?>
 src="radiolibs/luna/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>
				<?php echo '<script'; ?>
 type="text/javascript" src="radiolibs/luna/lunaradio.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
>
  				(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  				m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  				})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  				ga('create', 'UA-73408859-1', 'auto');
  				ga('send', 'pageview');

			<?php echo '</script'; ?>
>

			<?php echo '<script'; ?>
 language=JavaScript> var message="Sjips, werkt niet :("; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") <?php echo '</script'; ?>
>
    			<?php echo '<script'; ?>
 language=JavaScript> var message="Sjips, werkt niet :("; function clickIE4(){ if (event.button==2){ alert(message); return false; } } function clickNS4(e){ if (document.layers||document.getElementById&&!document.all){ if (e.which==2||e.which==3){ alert(message); return false; } } } if (document.layers){ document.captureEvents(Event.MOUSEDOWN); document.onmousedown=clickNS4; } else if (document.all&&!document.getElementById){ document.onmousedown=clickIE4; } document.oncontextmenu=new Function("alert(message);return false") <?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
> 
  				$(document).ready(function updateChatCount() {
					$.get('https://chattersworld.nl/usercount.php?channel=<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
', function(data) {
	  				$("#users").html(data);
					}, 'text');
					setTimeout(updateChatCount,3000);
				});
			<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
document.onkeydown = function(e) {
        if (e.ctrlKey && 
            (e.keyCode === 67 || 
             e.keyCode === 86 || 
             e.keyCode === 85 || 
             e.keyCode === 117)) {
            return false;
        } else {
            return true;
        }
};
$(document).keypress("u",function(e) {
  if(e.ctrlKey)
  {
return false;
}
else
{
return true;
}
});
<?php echo '</script'; ?>
>

	<style>
		img{
 			border: 0px;
		}
		.noselect {
    			-webkit-touch-callout: none;
    			-webkit-user-select: none;
    			-khtml-user-select: none;
    			-moz-user-select: none;
    			-ms-user-select: none;
    			user-select: none;
			}
	</style>
</head>
<body class="scroll-assist noselect">	
	<div class="nav-container">
		<a id="top"></a>
		<nav class="absolute transparent">
			<div class="nav-bar">
				<div class="module left">
					<a href="/">
						<img class="logo logo-light" alt="NATIVE HTML5 RADIO PLAYER" src="https://www.chattersworld.nl/images/c4all.png" />
						<img class="logo logo-dark" alt="NATIVE HTML5 RADIO PLAYER" src="https://www.chattersworld.nl/images/c4all.png" />
					</a>
				</div>
				<div class="module widget-handle mobile-toggle right visible-sm visible-xs">
					<i class="ti-menu"></i>
				</div>

				
				<div class="module-group right">
					<div class="module left">
						<ul class="menu">
							<!-- <li class="">
								<a href="#compatibility">
									Compatibility
								</a>
							</li>
							<li class="">
								<a href="#examples">
									Examples
								</a>
							</li>
							<li class="">
								<a href="https://www.flashradio.info/documentation/jquery/" target="_blank">
									Documentation
								</a>
							</li>
							<li class="">
								<a href="/shortcode">
									Shortcode Generator
								</a>
							</li>
							<li class="">
								<a href="#release-notes">
									Release Notes
								</a>
							</li> -->
							<li class=""> 
								<a href="https://chameleon/chattersworld.nl/chat.php?id=<?php echo $_GET['id'];?>
">
									Chatters online: <span id="users"></span>
								</a>
							</li> 
							<li class="">
								<a href="#">
									Herstart Stream
								</a>
							</li>
						</ul>
					</div>
				</div>

				
				
				
			</div>

		</nav>
	</div>
	<div class="main-container">
		<section class="image-bg fullscreen overlay overlay-heavy bg-dark">
	<div class="background-image-holder">
		<img alt="html5 radio player jQuery" title="html5 radio player jQuery" class="background-image" src="webplayer/home.jpg">
	</div>
	<div class="fs-vid-background" style="height:100%; width:100%;">
		<video autoplay muted loop>
			<source src="webplayer/home.mp4" type="video/mp4" />
		</video>
	</div>
	<div class="container v-align-transform">
	<div class="row mt80">
			<div class="col-lg-12 text-center">
			<div id="lunaradio" style='width:100%; height:600px;
-webkit-border-top-left-radius: 0px;
  -webkit-border-top-right-radius: 0px;
  -webkit-border-bottom-right-radius: 0px;
  -webkit-border-bottom-left-radius: 0px;
  -moz-border-radius-topleft: 0px;
  -moz-border-radius-topright: 0px;
  -moz-border-radius-bottomright: 0px;
  -moz-border-radius-bottomleft: 0px;
  border-top-left-radius: 0px;
  border-top-right-radius: 0px;
  border-bottom-right-radius: 0px;
  border-bottom-left-radius: 0px;
  border: none;'>
				
			</div>
			</div>
	</div>
		<div class="row mt80">
			
			<div class="col-lg-4">
				
			</div>
			<div class="col-lg-4">
			<?php echo '<script'; ?>
 async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"><?php echo '</script'; ?>
> <?php echo '<script'; ?>
> (adsbygoogle = window.adsbygoogle || []).push({ google_ad_client: "ca-pub-9106844814451489", enable_page_level_ads: true }); <?php echo '</script'; ?>
>
				
			</div>
			<div class="col-lg-4">
				
			</div>
		</div>
	</div>
</section>
</div>
<?php echo '<script'; ?>
 src="webplayer/js/bootstrap.min.js?v=1.18.03.18"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="webplayer/js/flexslider.min.js?v=1.18.03.18"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="webplayer/js/lightbox.min.js?v=1.18.03.18"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="webplayer/js/masonry.min.js?v=1.18.03.18"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="webplayer/js/spectragram.min.js?v=1.18.03.18"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="webplayer/js/ytplayer.min.js?v=1.18.03.18"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="webplayer/js/countdown.min.js?v=1.18.03.18"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="webplayer/js/smooth-scroll.min.js?v=1.18.03.18"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="webplayer/js/parallax.js?v=1.18.03.18"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="webplayer/js/scripts.js?v=1.18.03.18"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$("#lunaradio").lunaradio({
	token: "VVpTZmZXZGVpYWReViBgXg==",
	userinterface: "big",
	backgroundcolor: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['playerkleur'];?>
",
	fontcolor: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['tekstkleur'];?>
",
	hightlightcolor: "#13c4eb",
	fontname: "Open Sans",
	googlefont: "open+sans:300",
	fontratio: "0.4",
	radioname: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_name'];?>
",
	scroll: "true",
	coverimage: "https://horus.chattersworld.nl/dist/img/c4all.png",
	coverstyle: "circle",
	usevisualizer: "fake",
	visualizertype: "",
	itunestoken: "1000lIPN",
	metadatatechnic: "stream-icy-meta",
	ownmetadataurl: "",
	streamurl: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_link'];?>
",
	streamtype: "<?php echo $_smarty_tpl->tpl_vars['metadata']->value['radio_type'];?>
",
	icecastmountpoint: "<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "icecast") {
echo $_smarty_tpl->tpl_vars['metadata']->value['mountpoint'];
}?>",
	radionomyid: "",
	radionomyapikey: "",
	radiojarid: "",
	radiocoid: "sdef46f462",
	shoutcastpath: "<?php if ($_smarty_tpl->tpl_vars['metadata']->value['radio_type'] == "shoutcast2") {
echo $_smarty_tpl->tpl_vars['metadata']->value['mountpoint'];
}?>",
	shoutcastid: "1",
	streamsuffix: "",
	metadatainterval: "20000",
	volume: "90",
	debug: "false",
	usestreamcorsproxy: "false", 
	corsproxy: "",
});
<?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />
	<?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	window.addEventListener("load", function(){
	window.cookieconsent.initialise({
	"palette": {
		"popup": {
		"background": "#f9ad19",
		"text": "#ffffff"
		},
		"button": {
		"background": "#ffffff",
		"text": "#f9ad19"
		}
	}
	})});
	<?php echo '</script'; ?>
>


</body>
</html>
<?php }
}
