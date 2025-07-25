<?php

require_once("admin/config.php");
include("var_items.php");
require_once("translate/translate.php");
$current_url = str_replace(['/', '_'], ['', ' '], $_SERVER['REQUEST_URI']);

if ($current_url == 'about') {
    $current_about = 'current-menu-item';
} elseif ($current_url == 'resume') {
    $current_resume = 'current-menu-item';
} elseif ($current_url == 'portfolio') {
    $current_portfolio = 'current-menu-item';
} elseif ($current_url == 'contact') {
    $current_contact = 'current-menu-item';
} else {
    $current_about = 'current-menu-item';
}

function trans($text) {
    return translateText($text, 'en', 'ar', false);
}

?>

<!doctype html>
<html lang="en-US">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="<? echo $keywords ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link rel="stylesheet" media="print" onload="this.onload=null;this.media='all';" id="ao_optimized_gfonts" href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100i%2C200%2C200i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C600%2C600i%2C700%2C700i%2C800%2C800i%2C900%2C900i%7CLekton%3Aregular%2Citalic%2C700%7CLekton%3Aregular%2Citalic%2C700%7CRoboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;subset=latin%2Clatin-ext&amp;display=swap">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link media="all" href="developer/wp-content/cache/autoptimize/3/css/autoptimize_227b79f72fd65254ac90c71099f7edca.css" rel="stylesheet">
	<link media="only screen and (max-width: 768px)" href="developer/wp-content/cache/autoptimize/3/css/autoptimize_541e2ced151704f4ff1844c6de47ec02.css" rel="stylesheet">
	<title><? echo $title ?></title>
	<meta name='robots' content='max-image-preview:large' />
	<link href='https://fonts.gstatic.com' rel='preconnect' />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
	<script
		type="text/javascript">window._wpemojiSettings = { "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/", "ext": ".png", "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/", "svgExt": ".svg", "source": { "concatemoji": "developer/wp-includes/js/wp-emoji-release.min.js" } };
			/*! This file is auto-generated */
			!function (e, a, t) { var n, r, o, i = a.createElement("canvas"), p = i.getContext && i.getContext("2d"); function s(e, t) { p.clearRect(0, 0, i.width, i.height), p.fillText(e, 0, 0); e = i.toDataURL(); return p.clearRect(0, 0, i.width, i.height), p.fillText(t, 0, 0), e === i.toDataURL() } function c(e) { var t = a.createElement("script"); t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t) } for (o = Array("flag", "emoji"), t.supports = { everything: !0, everythingExceptFlag: !0 }, r = 0; r < o.length; r++)t.supports[o[r]] = function (e) { if (p && p.fillText) switch (p.textBaseline = "top", p.font = "600 32px Arial", e) { case "flag": return s("\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f", "\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f") ? !1 : !s("\ud83c\uddfa\ud83c\uddf3", "\ud83c\uddfa\u200b\ud83c\uddf3") && !s("\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f", "\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f"); case "emoji": return !s("\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff", "\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff") }return !1 }(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]); t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function () { t.DOMReady = !0 }, t.supports.everything || (n = function () { t.readyCallback() }, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function () { "complete" === a.readyState && t.readyCallback() })), (e = t.source || {}).concatemoji ? c(e.concatemoji) : e.wpemoji && e.twemoji && (c(e.twemoji), c(e.wpemoji))) }(window, document, window._wpemojiSettings);</script>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 .07em !important;
			vertical-align: -.1em !important;
			background: 0 0 !important;
			padding: 0 !important
		}
	</style>
	<link rel='stylesheet' id='bslthms-advanced-btns-style-css' href='www-sub/bslthms-advanced-btns/assets/style.css'
		type='text/css' media='all' />
	<style id='ryancv-abp-custom-inline-css' type='text/css'>
		.canvas.canvas-cyberlines {
			background-color: #161616 !important
		}

		.canvas-cyberlines .line,
		.canvas-cyberlines .light {
			fill: <? echo $changeColor ?> !important
		}
	</style>
	<style id='woocommerce-inline-inline-css' type='text/css'>
		.woocommerce form .form-row .required {
			visibility: visible
		}
	</style>
	<link rel='stylesheet' id='ryancv-classic-css'
		href='developer/wp-content/cache/autoptimize/3/css/autoptimize_single_d6c4c5774dd10fdbd9078ae08570a86d.css'
		type='text/css' media='all' />
	<link rel='stylesheet' id='ryancv-dark-css'
		href='developer/wp-content/cache/autoptimize/3/css/autoptimize_single_d3d506b355993410354bfac258e33da0.css'
		type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-5-css'
		href='developer/wp-content/cache/autoptimize/3/css/autoptimize_single_73485cbe94d581bd3432d8de8397f28f.css'
		type='text/css' media='all' />
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<script type='text/javascript' src='developer/wp-includes/js/jquery/jquery.min.js' id='jquery-core-js'></script>
	<meta name="description" content="<? echo $description ?>" />
	<script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en',
                includedLanguages: 'en,ar'
            }, 'google_translate_element');
        }
    </script>

	<style>
		.preloader .spinner .double-bounce1,
		.preloader .spinner .double-bounce2,
		.lnk:hover .arrow:before,
		.button:hover .arrow:before,
		.lnk:hover .arrow:after,
		.button:hover .arrow:after,
		.resume-items .resume-item.active .date:before,
		.skills-list ul li .progress .percentage,
		.single-post-text ul>li:before,
		.comment-text ul>li:before,
		.content-sidebar .main-menu ul li.page_item_has_children.current_page_item>a:before,
		.content-sidebar .main-menu ul li.page_item_has_children.current_page_item>a:after,
		.content-sidebar .main-menu ul li.page_item_has_children:hover>a:before,
		.content-sidebar .main-menu ul li.page_item_has_children:hover>a:after,
		.content-sidebar .main-menu ul li.page_item_has_children.current_page_parent>a:before,
		.content-sidebar .main-menu ul li.page_item_has_children.current_page_parent>a:after,
		.content-sidebar .main-menu ul li.page_item_has_children.current_page_ancestor>a:before,
		.content-sidebar .main-menu ul li.page_item_has_children.current_page_ancestor>a:after,
		.content-sidebar .close:hover:before,
		.content-sidebar .close:hover:after,
		.header .menu-btn:hover span,
		.header .menu-btn:hover span:before,
		.header .menu-btn:hover span:after,
		.info-list ul li strong,
		.profile .main-menu ul li.page_item_has_children.current_page_item>a:before,
		.profile .main-menu ul li.page_item_has_children.current_page_item>a:after,
		.profile .main-menu ul li.page_item_has_children:hover>a:before,
		.profile .main-menu ul li.page_item_has_children:hover>a:after,
		.profile .main-menu ul li.page_item_has_children.current_page_parent>a:before,
		.profile .main-menu ul li.page_item_has_children.current_page_parent>a:after,
		.profile .main-menu ul li.page_item_has_children.current_page_ancestor>a:before,
		.profile .main-menu ul li.page_item_has_children.current_page_ancestor>a:after,
		.service-items .service-item .icon,
		.revs-carousel .owl-dot.active,
		.custom-content-reveal span.custom-content-close,
		.fc-calendar .fc-row>div.fc-today,
		.fc-calendar .fc-content:hover span.fc-date,
		.fc-calendar .fc-row>div.fc-today span.fc-date,
		.skills-list.dotted ul li .progress .percentage .da span,
		.preloader .spinner.default-circle:before,
		.preloader .spinner.default-circle:after,
		.preloader .spinner.clock:before,
		.preloader .spinner.box-rotation:after,
		.header .cart-btn .cart-icon .cart-count,
		.woocommerce span.onsale,
		.woocommerce #respond input#submit.alt,
		.woocommerce a.button.alt,
		.woocommerce button.button.alt,
		.woocommerce input.button.alt,
		.woocommerce #respond input#submit.alt:hover,
		.woocommerce a.button.alt:hover,
		.woocommerce button.button.alt:hover,
		.woocommerce input.button.alt:hover,
		.woocommerce ul.products li.product .button.add_to_cart_button.added,
		.popup-box .preloader .spinner.default-circle:before,
		.popup-box .preloader .spinner.default-circle:after,
		.popup-box .preloader-popup .spinner.default-circle:before,
		.popup-box .preloader-popup .spinner.default-circle:after,
		.single-post-text ul>li:before,
		.comment-text ul>li:before,
		.blog-content ul>li:before,
		.revs-carousel .swiper-pagination-bullet.swiper-pagination-bullet-active,
		.woocommerce #respond input#submit,
		.woocommerce a.button,
		.woocommerce button.button,
		.woocommerce input.button .woocommerce-mini-cart__buttons #respond input#submit,
		.woocommerce-mini-cart__buttons a.button,
		.woocommerce-mini-cart__buttons button.button,
		.woocommerce-mini-cart__buttons input.button,
		.woocommerce .woocommerce-ordering select,
		.woocommerce div.product .woocommerce-tabs ul.tabs li.active,
		.woocommerce a.remove:hover,
		.solid-icons-style .service-items .service-item .icon,
		.solid-icons-style .pricing-items .pricing-item .icon,
		.solid-icons-style .fuct-items .fuct-item .icon,
		.solid-icons-style .resume-title .icon,
		.solid-icons-style .skill-title .icon,
		.card-started .profile .lnk.solid-style .ion,
		.header .top-menu.menu-minimal ul li a .name {
			background: <? echo $changeColor ?>
		}

		.lnk:hover,
		.button:hover,
		.lnk:hover .ion,
		.button:hover .ion,
		a,
		a:hover,
		input:focus,
		textarea:focus,
		.header .top-menu ul li:hover a,
		.header .top-menu ul li.active a,
		.header .top-menu ul li.current-menu-item a,
		.header .top-menu ul li:hover a .icon,
		.header .top-menu ul li.active a .icon,
		.header .top-menu ul li:hover a .link,
		.header .top-menu ul li.active a .link,
		.header .top-menu ul li.current-menu-item a .icon,
		.header .top-menu ul li.current-menu-item a .link,
		.header .profile .subtitle,
		.card-started .profile .subtitle,
		.content-sidebar .profile .subtitle,
		.card-started .profile .social a:hover .ion,
		.card-started .profile .social a:hover .fab,
		.card-started .profile .social a:hover .fas,
		.content-sidebar .profile .social a:hover .ion,
		.content-sidebar .profile .social a:hover .fab,
		.content-sidebar .profile .social a:hover .fas,
		.pricing-items .pricing-item .icon,
		.fuct-items .fuct-item .icon,
		.resume-title .icon,
		.skill-title .icon,
		.resume-items .resume-item.active .date,
		.content.works .filter-menu .f_btn.active,
		.box-item:hover .desc .name,
		.single-post-text p a,
		.comment-text p a,
		.post-text-bottom span.cat-links a,
		.post-text-bottom .tags-links a,
		.post-text-bottom .tags-links span,
		.page-numbers.current,
		.page-links a,
		.post-comments .post-comment .desc .name,
		.post-comments .post-comment .desc span.comment-reply a:hover,
		.content-sidebar .main-menu ul li.current_page_item>a,
		.content-sidebar .main-menu ul li:hover>a,
		.content-sidebar .main-menu ul li.current_page_parent>a,
		.content-sidebar .main-menu ul li.current_page_ancestor>a,
		.content-sidebar .widget ul li a:hover,
		.content-sidebar .tagcloud a,
		.card-started .profile .subtitle,
		.content-sidebar .profile .subtitle,
		.content-sidebar .profile .typed-cursor,
		.card-started .profile .typed-cursor,
		.content .title .first-word,
		.content .title:first-letter,
		.content .title .first-letter:first-letter,
		.content-sidebar h2.widget-title .first-word,
		.content-sidebar h2.widget-title:first-letter,
		.content-sidebar h2.widget-title .first-letter:first-letter,
		.box-item .date,
		.profile .main-menu ul li.current-menu-item a,
		.profile .main-menu ul li.current_page_item>a,
		.profile .main-menu ul li:hover>a,
		.profile .main-menu ul li.current_page_parent>a,
		.profile .main-menu ul li.current_page_ancestor>a,
		.custom-header nav span:before,
		.fc-calendar .fc-row>div.fc-content:hover:after,
		.skills-list.list ul li .name:before,
		.preloader .spinner.recursive-circle,
		.woocommerce nav.woocommerce-pagination ul li a:focus,
		.woocommerce nav.woocommerce-pagination ul li a:hover,
		.woocommerce nav.woocommerce-pagination ul li span.current,
		.woocommerce .star-rating,
		strong.woocommerce-review__author,
		.woocommerce-message:before,
		.single-post-text p a,
		.comment-text p a,
		.blog-content p a,
		.minimal-icons-style .service-items .service-item .icon,
		.minimal-icons-style .pricing-items .pricing-item .icon,
		.minimal-icons-style .fuct-items .fuct-item .icon,
		.minimal-icons-style .resume-title .icon,
		.minimal-icons-style .skill-title .icon,
		.border-icons-style .service-items .service-item .icon,
		.border-icons-style .pricing-items .pricing-item .icon,
		.border-icons-style .fuct-items .fuct-item .icon,
		.border-icons-style .resume-title .icon,
		.border-icons-style .skill-title .icon,
		.lnk:hover .ion,
		.button:hover .ion,
		.lnk:hover .fa,
		.button:hover .fa {
			color: <? echo $changeColor ?>
		}

		.content .title .first-word,
		.content .title:first-letter,
		.content .title .first-letter:first-letter,
		.content-sidebar h2.widget-title .first-word,
		.content-sidebar h2.widget-title:first-letter,
		.content-sidebar h2.widget-title .first-letter:first-letter {
			color: <? echo $changeColor ?> !important
		}

		.card-started .profile .image:before,
		.content-sidebar .profile .image:before,
		.content .title:before,
		.box-item .image .info:before,
		.content-sidebar h2.widget-title:before {
			background: -moz-linear-gradient(-45deg, rgba(246, 184, 70, .15) 0%, rgba(246, 184, 70, .01) 100%);
			background: -webkit-linear-gradient(-45deg, rgba(246, 184, 70, .15) 0%, rgba(246, 184, 70, .01) 100%);
			background: linear-gradient(135deg, rgba(246, 184, 70, .15) 0%, rgba(246, 184, 70, .01) 100%)
		}

		.card-started:after {
			background: -moz-linear-gradient(-45deg, <? echo $changeColor ?> 0%, rgba(246, 184, 70, .01) 100%);
			background: -webkit-linear-gradient(-45deg, <? echo $changeColor ?> 0%, rgba(246, 184, 70, .01) 100%);
			background: linear-gradient(135deg, <? echo $changeColor ?> 0%, rgba(246, 184, 70, .01) 100%)
		}

		.box-item .image .info:before {
			background: -moz-linear-gradient(-45deg, rgba(246, 184, 70, .5) 0%, rgba(246, 184, 70, .01) 100%);
			background: -webkit-linear-gradient(-45deg, rgba(246, 184, 70, .5) 0%, rgba(246, 184, 70, .01) 100%);
			background: linear-gradient(135deg, rgba(246, 184, 70, .5) 0%, rgba(246, 184, 70, .01) 100%)
		}

		.card-started .profile .slide,
		.content-sidebar .profile .slide {
			background-color: rgba(246, 184, 70, .1)
		}

		.pricing-items .pricing-item .feature-list ul li strong {
			background: rgba(246, 184, 70, .15)
		}

		.cursor {
			background-color: rgba(246, 184, 70, .25)
		}

		.cursor.cursor-zoom {
			border-color: rgba(246, 184, 70, 1)
		}

		input:focus,
		textarea:focus,
		.revs-carousel .owl-dots .owl-dot,
		.custom-header,
		.post-text-bottom .tags-links a,
		.post-text-bottom .tags-links span,
		.content-sidebar .tagcloud a,
		.resume-items .resume-item.active .date,
		.box-item .date,
		.content.skills .skills-list.circles .progress .bar,
		.content.skills .skills-list.circles .progress .fill,
		.preloader .spinner.clock,
		.preloader .spinner.box-rotation,
		.skills-list.circles .progress .bar,
		.skills-list.circles .progress.p51 .fill,
		.skills-list.circles .progress.p52 .fill,
		.skills-list.circles .progress.p53 .fill,
		.skills-list.circles .progress.p54 .fill,
		.skills-list.circles .progress.p55 .fill,
		.skills-list.circles .progress.p56 .fill,
		.skills-list.circles .progress.p57 .fill,
		.skills-list.circles .progress.p58 .fill,
		.skills-list.circles .progress.p59 .fill,
		.skills-list.circles .progress.p60 .fill,
		.skills-list.circles .progress.p61 .fill,
		.skills-list.circles .progress.p62 .fill,
		.skills-list.circles .progress.p63 .fill,
		.skills-list.circles .progress.p64 .fill,
		.skills-list.circles .progress.p65 .fill,
		.skills-list.circles .progress.p66 .fill,
		.skills-list.circles .progress.p67 .fill,
		.skills-list.circles .progress.p68 .fill,
		.skills-list.circles .progress.p69 .fill,
		.skills-list.circles .progress.p70 .fill,
		.skills-list.circles .progress.p71 .fill,
		.skills-list.circles .progress.p72 .fill,
		.skills-list.circles .progress.p73 .fill,
		.skills-list.circles .progress.p74 .fill,
		.skills-list.circles .progress.p75 .fill,
		.skills-list.circles .progress.p76 .fill,
		.skills-list.circles .progress.p77 .fill,
		.skills-list.circles .progress.p78 .fill,
		.skills-list.circles .progress.p79 .fill,
		.skills-list.circles .progress.p80 .fill,
		.skills-list.circles .progress.p81 .fill,
		.skills-list.circles .progress.p82 .fill,
		.skills-list.circles .progress.p83 .fill,
		.skills-list.circles .progress.p84 .fill,
		.skills-list.circles .progress.p85 .fill,
		.skills-list.circles .progress.p86 .fill,
		.skills-list.circles .progress.p87 .fill,
		.skills-list.circles .progress.p88 .fill,
		.skills-list.circles .progress.p89 .fill,
		.skills-list.circles .progress.p90 .fill,
		.skills-list.circles .progress.p91 .fill,
		.skills-list.circles .progress.p92 .fill,
		.skills-list.circles .progress.p93 .fill,
		.skills-list.circles .progress.p94 .fill,
		.skills-list.circles .progress.p95 .fill,
		.skills-list.circles .progress.p96 .fill,
		.skills-list.circles .progress.p97 .fill,
		.skills-list.circles .progress.p98 .fill,
		.skills-list.circles .progress.p99 .fill,
		.skills-list.circles .progress.p100 .fill,
		.revs-carousel .swiper-pagination-bullet,
		.border-icons-style .service-items .service-item .icon,
		.border-icons-style .pricing-items .pricing-item .icon,
		.border-icons-style .fuct-items .fuct-item .icon,
		.border-icons-style .resume-title .icon,
		.border-icons-style .skill-title .icon {
			border-color: <? echo $changeColor ?>
		}

		.preloader .spinner.recursive-circle,
		.preloader .spinner.recursive-circle:after {
			border-color: <? echo $changeColor ?>;
			border-top-color: transparent
		}

		blockquote {
			border-left-color: <? echo $changeColor ?>
		}

		.preloader .spinner.simple-circle {
			border-right-color: <? echo $changeColor ?>
		}

		.preloader .spinner.quantum-spinner,
		.preloader .spinner.quantum-spinner:before,
		.preloader .spinner.quantum-spinner:after {
			border-top-color: <? echo $changeColor ?>
		}

		.mode-switch-btn .mode-swich-label:hover svg path,
		.mode-switch-btn .tgl:checked+.mode-swich-label:hover svg path {
			fill: <? echo $changeColor ?>
		}

		.body-style-dark .content .title {
			color: rgba(255, 255, 255, .85)
		}

		body.body-style-dark {
			color: rgba(255, 255, 255, .55)
		}

		body.body-style-dark .content .title .first-word,
		body.body-style-dark .content .title:first-letter,
		body.body-style-dark .content .title .first-letter:first-letter,
		body.body-style-dark .content-sidebar h2.widget-title .first-word,
		body.body-style-dark .content-sidebar h2.widget-title:first-letter,
		body.body-style-dark .content-sidebar h2.widget-title .first-letter:first-letter {
			color: <? echo $changeColor ?> !important
		}

		body {
			font-family: 'Lekton'
		}

		.content .title {
			font-family: 'Lekton'
		}

		.card-started .profile .title,
		.content-sidebar .profile .title {
			font-weight: 600
		}

		.service-items .service-item .icon {
			background: -moz-linear-gradient(-45deg, rgba(246, 184, 70, .15) 0%, rgba(246, 184, 70, .01) 100%);
			background: -webkit-linear-gradient(-45deg, rgba(246, 184, 70, .15) 0%, rgba(246, 184, 70, .01) 100%);
			background: linear-gradient(135deg, rgba(246, 184, 70, .15) 0%, rgba(246, 184, 70, .01) 100%)
		}

		.service-items .service-item .icon {
			color: <? echo $changeColor ?>
		}

		.card-started:after,
		.card-started .profile .image:before,
		.content-sidebar .profile .image:before,
		.content .title:before,
		.box-item .image .info:before,
		.content-sidebar h2.widget-title:before {
			background: -moz-linear-gradient(-45deg, <? echo $changeColor ?> 0%, rgba(246, 184, 70, .01) 100%);
			background: -webkit-linear-gradient(-45deg, <? echo $changeColor ?> 0%, rgba(246, 184, 70, .01) 100%);
			background: linear-gradient(135deg, <? echo $changeColor ?> 0%, rgba(246, 184, 70, .01) 100%)
		}

		body .header .menu-btn,
		body .card-started .profile,
		body .card-started .profile .slide:before,
		body .card-started .profile .slide:after,
		body .card-inner,
		body .card-inner:before,
		body .card-inner:after,
		body .skills-list.circles .progress:after,
		body .mfp-wrap.popup-box-inline,
		body .info-list ul li strong:after,
		body .content-sidebar,
		body .profile .main-menu-fixed:before,
		body .header .cart-btn,
		body .header .cart-btn .cart-widget,
		body .header .top-menu,
		body .header .mode-switch-btn,
		body .content-sidebar .close,
		body .custom-footer {
			background: #fff
		}

		body .header .cart-btn .cart-widget:before {
			border-right-color: #fff
		}

		.card-started .profile .image img,
		.content-sidebar .profile .image img {
			border-color: #fff
		}

		@media (max-width:680px) {
			body .header {
				background: #fff
			}
		}

		@media (max-width:680px) {
			body .header .top-menu ul.menu {
				background: #fff
			}
		}

		body.body-style-dark .header .menu-btn,
		body.body-style-dark .card-started .profile,
		body.body-style-dark .card-started .profile .slide:before,
		body.body-style-dark .card-started .profile .slide:after,
		body.body-style-dark .card-inner,
		body.body-style-dark .card-inner:before,
		body.body-style-dark .card-inner:after,
		body.body-style-dark .skills-list.circles .progress:after,
		body.body-style-dark .mfp-wrap.popup-box-inline,
		body.body-style-dark .info-list ul li strong:after,
		body.body-style-dark .content-sidebar,
		body.body-style-dark .profile .main-menu-fixed:before,
		body.body-style-dark .header .cart-btn,
		body.body-style-dark .header .cart-btn .cart-widget,
		body.body-style-dark .header .top-menu,
		body.body-style-dark .header .mode-switch-btn,
		body.body-style-dark .content-sidebar .close,
		body.body-style-dark .custom-footer {
			background: #31313a
		}

		body.body-style-dark .header .cart-btn .cart-widget:before {
			border-right-color: #31313a
		}

		body.body-style-dark .card-started .profile .image img,
		body.body-style-dark .content-sidebar .profile .image img {
			border-color: #31313a
		}

		@media (max-width:680px) {
			body.body-style-dark .header {
				background: #31313a
			}
		}

		@media (max-width:680px) {
			body.body-style-dark .header .top-menu ul.menu {
				background: #31313a
			}
		}

		body.body-style-dark .header .menu-btn,
		body.body-style-dark .card-started .profile,
		body.body-style-dark .card-started .profile .slide:before,
		body.body-style-dark .card-started .profile .slide:after,
		body.body-style-dark .card-inner,
		body.body-style-dark .card-inner:before,
		body.body-style-dark .card-inner:after,
		body.body-style-dark .skills-list.circles .progress:after,
		body.body-style-dark .mfp-wrap.popup-box-inline,
		body.body-style-dark .info-list ul li strong:after,
		body.body-style-dark .content-sidebar,
		body.body-style-dark .profile .main-menu-fixed:before,
		body.body-style-dark .header .cart-btn,
		body.body-style-dark .header .cart-btn .cart-widget,
		body.body-style-dark .header .top-menu,
		body.body-style-dark .header .mode-switch-btn,
		body.body-style-dark .content-sidebar .close,
		body.body-style-dark .custom-footer {
			background: #222
		}

		body.body-style-dark .header .cart-btn .cart-widget:before {
			border-right-color: #222
		}

		.body-style-dark .card-started .profile .image img,
		.body-style-dark .content-sidebar .profile .image img {
			border-color: #222
		}

		@media (max-width:680px) {
			body.body-style-dark .header {
				background: #222
			}
		}

		@media (max-width:680px) {
			body.body-style-dark .header .top-menu ul.menu {
				background: #222
			}
		}

		.card-started .profile .image img,
		.content-sidebar .profile .image img,
		.card-started .profile .image:before,
		.content-sidebar .profile .image:before {
			-webkit-border-radius: 100%;
			border-radius: 100%
		}
	</style><noscript>
		<style>
			.woocommerce-product-gallery {
				opacity: 1 !important
			}
		</style>
	</noscript>
	<meta name="generator" content="Elementor 3.12.2; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, a11y_improvements, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
	<link rel="icon" href="developer/wp-content/uploads/sites/3/2023/04/cropped-logo4n-192x192.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="developer/wp-content/uploads/sites/3/2023/04/cropped-logo4n-180x180.png" />
	<meta name="msapplication-TileImage" content="developer/wp-content/uploads/sites/3/2023/04/cropped-logo4n-270x270.png" />
	<style type="text/css" id="wp-custom-css">
		.client-items .client-item img,
		.resume-items .resume-item .image img {
			filter: contrast(0)
		}
	</style>
</head>

<body class="home page-template page-template-template-elementor-builder page-template-template-elementor-builder-php page page-id-151 body-style-dark theme-ryancv woocommerce-no-js elementor-default elementor-kit-5 elementor-page elementor-page-151">
	<div class="page page_wrap theme-style-classic theme-style-dark">
	    <!-- Preloader -->
		<div class="preloader" style="background-color: #161616;">
			<div class="centrize full-width">
				<div class="vertical-center">
					<div class="spinner box-rotation"></div>
				</div>
			</div>
		</div>
		<!-- background -->
		<div id="canvas_cyberlines" class="canvas canvas-cyberlines">
		    <svg id="cyberlines" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewbox="0 0 1920 1080" xml:space="preserve" preserveAspectRatio="none">
				<g class="lines">
					<rect class="line" x="1253.6" width="4.5" height="1080"></rect>
					<rect class="line" x="873.3" width="1.8" height="1080"></rect>
					<rect class="line" x="1100" width="1.8" height="1080"></rect>
					<rect class="line" x="1547.1" width="4.5" height="1080"></rect>
					<rect class="line" x="615" width="4.5" height="1080"></rect>
					<rect class="line" x="684.6" width="1.8" height="1080"></rect>
					<rect class="line" x="1369.4" width="1.8" height="1080"></rect>
					<rect class="line" x="1310.2" width="0.9" height="1080"></rect>
					<rect class="line" x="1233.4" width="0.9" height="1080"></rect>
					<rect class="line" x="124.2" width="0.9" height="1080"></rect>
					<rect class="line" x="1818.4" width="4.5" height="1080"></rect>
					<rect class="line" x="70.3" width="4.5" height="1080"></rect>
					<rect class="line" x="1618.6" width="1.8" height="1080"></rect>
					<rect class="line" x="455.9" width="1.8" height="1080"></rect>
					<rect class="line" x="328.7" width="1.8" height="1080"></rect>
					<rect class="line" x="300.8" width="4.6" height="1080"></rect>
					<rect class="line" x="1666.4" width="0.9" height="1080"></rect>
				</g>
				<g class="lights">
					<path class="light1 light"
						d="M619.5,298.4H615v19.5h4.5V298.4z M619.5,674.8H615v9.8h4.5V674.8z M619.5,135.1H615v5.6h4.5V135.1zM619.5,55.5H615v68.7h4.5V55.5z">
					</path>
					<path class="light2 light"
						d="M1258.2,531.9h-4.5v8.1h4.5V531.9z M1258.2,497.9h-4.5v17.9h4.5V497.9z M1258.2,0h-4.5v25.3h4.5V0zM1258.2,252.2h-4.5v42.4h4.5V252.2z">
					</path>
					<path class="light3 light"
						d="M875.1,123.8h-1.8v4h1.8V123.8z M875.1,289.4h-1.8v24.1h1.8V289.4z M875.1,0h-1.8v31.4h1.8V0z M875.1,50.2h-1.8v11.5h1.8V50.2z">
					</path>
					<path class="light4 light"
						d="M1101.8,983.8h-1.8v8.2h1.8V983.8z M1101.8,1075.9h-1.8v4.1h1.8V1075.9z M1101.8,873.7h-1.8v4.2h1.8V873.7zM1101.8,851h-1.8v18.2h1.8V851z">
					</path>
					<path class="light5 light"
						d="M686.4,822.7h-1.8v3.8h1.8V822.7z M686.4,928.4h-1.8v23h1.8V928.4z M686.4,1043.8h-1.8v36.2h1.8V1043.8z">
					</path>
					<path class="light6 light"
						d="M1551.6,860.9h-4.4v-34.1h4.4V860.9z M1551.6,533.5h-4.4v-13.9h4.4V533.5z M1551.6,1080h-4.4v-89.1h4.4V1080z">
					</path>
					<path class="light7 light"
						d="M1311.1,707.7h-0.9V698h0.9V707.7z M1311.1,436.8h-0.9v-58.9h0.9V436.8z M1311.1,140.7h-0.9V48h0.9V140.7z">
					</path>
					<path class="light8 light" d="M125.1,514.5h-0.9v-9.7h0.9V514.5z M125.1,243.6h-0.9v-58.9h0.9V243.6z">
					</path>
					<path class="light9 light"
						d="M305.4,806.7h-4.6v-42.5h4.6V806.7z M305.4,398.5h-4.6v-17.3h4.6V398.5z M305.4,1080h-4.6V968.8h4.6V1080z">
					</path>
					<path class="light10 light"
						d="M1822.9,170.7h-4.5v13.7h4.5V170.7z M1822.9,435.1h-4.5v6.8h4.5V435.1z M1822.9,55.9h-4.5v4h4.5V55.9zM1822.9,0h-4.5v48.3h4.5V0z">
					</path>
					<path class="light11 light"
						d="M1666.4,331.5h0.9v9.7h-0.9V331.5z M1666.4,602.4h0.9v58.9h-0.9V602.4z M1666.4,898.5h0.9v92.7h-0.9V898.5z">
					</path>
					<path class="light12 light"
						d="M1620.4,200.7h-1.8v6.4h1.8V200.7z M1620.4,469.1h-1.8v39h1.8V469.1z M1620.4,0h-1.8v51h1.8V0z M1620.4,81.3h-1.8V100h1.8V81.3z">
					</path>
					<path class="light13 light"
						d="M74.8,201h-4.5v16.2h4.5V201z M74.8,512.3h-4.5v8.1h4.5V512.3z M74.8,65.8h-4.5v4.6h4.5V65.8z M74.8,0h-4.5v56.8h4.5V0z">
					</path>
					<path class="light14 light"
						d="M1371.2,655.3h-1.8v6.3h1.8V655.3z M1371.2,829.7h-1.8v37.9h1.8V829.7z M1371.2,1020.3h-1.8v59.7h1.8V1020.3z">
					</path>
					<path class="light15 light"
						d="M1234.3,898.1h-0.9v-4.9h0.9V898.1z M1234.3,762.5h-0.9v-29.5h0.9V762.5z M1234.3,614.4h-0.9v-46.4h0.9V614.4z">
					</path>
					<path class="light16 light"
						d="M457.7,1010.8h-1.8v-18.1h1.8V1010.8z M457.7,507.5h-1.8V398h1.8V507.5z"></path>
					<path class="light17 light"
						d="M330.5,170.7h-1.8v13.7h1.8V170.7z M330.5,435.1h-1.8v6.8h1.8V435.1z M330.5,55.9h-1.8v4h1.8V55.9z M330.5,0h-1.8v48.3h1.8V0z">
					</path>
				</g>
			</svg>
		</div>
		<!-- Container -->
		<div class="container opened border-icons-style" data-animation-in="fadeInUp" data-animation-out="fadeOutUp">
		    <!-- Header -->
			<header class="header">
			    <!-- header profile -->
				<div class="profile">
					<div class="image"> <a href="<? echo 'admin/' . $img_profile_path ?>" data-fancybox="profile-head"> <noscript><img
									src="<? echo 'admin/' . $img_profile_path ?>"
									alt="profile" /></noscript><img class="lazyload"
								src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E'
								data-src="<? echo 'admin/' . $img_profile_path ?>"
								alt="Tony Ryan" style="height: 44px; width: 44px; object-fit: cover;"/></a> </a></div>
					<div class="title"><?php echo ucwords($name); ?>
					<? if (!empty($verification_badge)) { ?>
					    <span class="fa fa-stack fa-lg" style="color: #5597f2; font-size: 7.5px; bottom: 1px; right: 4px;">
                            <i class="fa fa-certificate fa-stack-2x"></i>
                            <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                        </span>
                    <? } ?>
					</div>
					<div class="subtitle subtitle-typed">
						<div class="typing-title">
							<? foreach ($typing_title as $value) { ?>
								<p><? echo $value?></p>
    						<? } ?>
						</div> <span class="r-typed"></span>
					</div>
				</div> <!-- menu btn --> <a href="#" class="menu-btn btn-next-visible"><span></span></a>
				<!-- switch btn -->
				<div class="mode-switch-btn" data-ui="1" data-ui-dir="https://ryancv.bslthemes.com/developer/wp-content/themes/ryancv">
				    <input class="tgl" id="mode-switch-radio" type="checkbox" checked>
				    <label class="mode-swich-label" for="mode-switch-radio">
				        <span class="sw-before"> 
    				        <svg xmlns="http://www.w3.org/2000/svg" width="22.22" height="22.313" viewbox="0 0 22.22 22.313">
    							<path id="Light_Theme" data-name="Light Theme" fill="#fff"
    								d="M1752.49,105.511a5.589,5.589,0,0,0-3.94-1.655,5.466,5.466,0,0,0-3.94,1.655,5.61,5.61,0,0,0,3.94,9.566,5.473,5.473,0,0,0,3.94-1.653,5.643,5.643,0,0,0,1.65-3.957A5.516,5.516,0,0,0,1752.49,105.511Zm-1.06,6.85a4.1,4.1,0,0,1-5.76,0,4.164,4.164,0,0,1,0-5.788A4.083,4.083,0,0,1,1751.43,112.361Zm7.47-3.662h-2.27a0.768,0.768,0,0,0,0,1.536h2.27A0.768,0.768,0,0,0,1758.9,108.7Zm-10.35,8.12a0.777,0.777,0,0,0-.76.769v2.274a0.777,0.777,0,0,0,.76.767,0.786,0.786,0,0,0,.77-0.767v-2.274A0.786,0.786,0,0,0,1748.55,116.819Zm7.85-.531-1.62-1.624a0.745,0.745,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.625a0.747,0.747,0,0,0,1.06,0A0.759,0.759,0,0,0,1756.4,116.288ZM1748.55,98.3a0.777,0.777,0,0,0-.76.768v2.273a0.778,0.778,0,0,0,.76.768,0.787,0.787,0,0,0,.77-0.768V99.073A0.786,0.786,0,0,0,1748.55,98.3Zm7.88,3.278a0.744,0.744,0,0,0-1.06,0l-1.62,1.624a0.758,0.758,0,0,0,0,1.063,0.745,0.745,0,0,0,1.06,0l1.62-1.624A0.758,0.758,0,0,0,1756.43,101.583Zm-15.96,7.116h-2.26a0.78,0.78,0,0,0-.77.768,0.76,0.76,0,0,0,.77.768h2.26A0.768,0.768,0,0,0,1740.47,108.7Zm2.88,5.965a0.745,0.745,0,0,0-1.06,0l-1.62,1.624a0.759,0.759,0,0,0,0,1.064,0.747,0.747,0,0,0,1.06,0l1.62-1.625A0.758,0.758,0,0,0,1743.35,114.664Zm0-11.457-1.62-1.624a0.744,0.744,0,0,0-1.06,0,0.758,0.758,0,0,0,0,1.063l1.62,1.624a0.745,0.745,0,0,0,1.06,0A0.758,0.758,0,0,0,1743.35,103.207Z"
    								transform="translate(-1737.44 -98.313)">
    							</path>
    						</svg>
						</span>
						<span class="sw-after"> 
						    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewbox="0 0 23 23">
								<path id="Dark_Theme" data-name="Dark Theme" fill="#fff"
									d="M1759.46,111.076a0.819,0.819,0,0,0-.68.147,8.553,8.553,0,0,1-2.62,1.537,8.167,8.167,0,0,1-2.96.531,8.655,8.655,0,0,1-8.65-8.682,9.247,9.247,0,0,1,.47-2.864,8.038,8.038,0,0,1,1.42-2.54,0.764,0.764,0,0,0-.12-1.063,0.813,0.813,0,0,0-.68-0.148,11.856,11.856,0,0,0-6.23,4.193,11.724,11.724,0,0,0,1,15.387,11.63,11.63,0,0,0,19.55-5.553A0.707,0.707,0,0,0,1759.46,111.076Zm-4.5,6.172a10.137,10.137,0,0,1-14.29-14.145,10.245,10.245,0,0,1,3.38-2.836c-0.14.327-.29,0.651-0.41,1.006a9.908,9.908,0,0,0-.56,3.365,10.162,10.162,0,0,0,10.15,10.189,9.776,9.776,0,0,0,3.49-.62,11.659,11.659,0,0,0,1.12-.473A10.858,10.858,0,0,1,1754.96,117.248Z"
									transform="translate(-1737 -98)">
								</path>
							</svg>
						</span>
					</label>
				</div>
				<!-- menu -->
				<div class="top-menu top-menu-onepage">
					<div class="menu-main-menu-container">
						<ul id="menu-main-menu" class="menu" style="justify-content: center;">
							<li data-id="menu-item-107" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home <?php echo $current_about ?> page_item page-item-151 current_page_item">
							    <a href="/about" class="one-page-menu-item">
							        <span class="icon far fa-user"></span>
							        <span class="name">About</span>
							    </a>
							</li>
							    
							<li data-id="menu-item-108" class=" menu-item menu-item-type-post_type menu-item-object-page <?php echo $current_resume ?>">
							    <a href="/resume" class="one-page-menu-item">
							        <span class="icon far fa-list-alt"></span>
							        <span class="name">Resume</span>
							    </a>
							</li>
										
							<li data-id="menu-item-109" class=" menu-item menu-item-type-post_type menu-item-object-page <?php echo $current_portfolio ?>">
							    <a href="/portfolio" class="one-page-menu-item">
							        <span class="icon fas fa-eye"></span>
							        <span class="name">Portofolio</span>
							    </a>
							</li>
							
							<!-- <li data-id="menu-item-110" class=" menu-item menu-item-type-post_type menu-item-object-page">
							    <a href="#blog" class="one-page-menu-item">
							        <span class="icon far fa-newspaper"></span>
							        <span class="name">Blog</span>
							    </a>
							</li> -->
							
							<li data-id="menu-item-111" class=" menu-item menu-item-type-post_type menu-item-object-page <?php echo $current_contact ?>">
							    <a href="/contact" class="one-page-menu-item">
							        <span class="icon far fa-paper-plane"></span>
							        <span class="name">Contact</span>
							     </a>
							</li>
							<li data-id="" style="display: none;">
							    
							</li>
							
						</ul>
					</div>
				</div>
			</header>
			<!-- Card - Started -->
			<div class="card-started" id="home-card">
			    <!-- Profile -->
				<div class="profile rounded-style-2">
					<div class="profile-content">
					    <!-- profile slideshow -->
						<div class="slide">
							<div class="swiper-container ryan-slideshow">
								<div class="swiper-wrapper">
									<div class="swiper-slide">
									    <noscript>
									        <img src="<? echo 'admin/' . $img_cover_path ?>" alt="Cover" class="ryan-banner-cover" data-swiper-parallax-y="-30" data-swiper-parallax-scale="1.2">
									    </noscript>
									    <img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="<? echo 'admin/' . $img_cover_path ?>" alt="Cover" class="lazyload ryan-banner-cover" data-swiper-parallax-y="-30" data-swiper-parallax-scale="1.2">
									</div>
									<div class="swiper-slide">
									    <noscript>
									        <img src="<? echo 'admin/' . $img_cover_path ?>" alt="Cover" class="ryan-banner-cover" data-swiper-parallax-y="-30" data-swiper-parallax-scale="1.2">
									    </noscript>
									    <img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="<? echo 'admin/' . $img_cover_path ?>" alt="Cover" class="lazyload ryan-banner-cover" data-swiper-parallax-y="-30" data-swiper-parallax-scale="1.2">
									</div>
									<div class="swiper-slide">
									    <noscript>
									        <img src="<? echo 'admin/' . $img_cover_path ?>" alt="Cover" class="ryan-banner-cover" data-swiper-parallax-y="-30" data-swiper-parallax-scale="1.2">
									    </noscript>
									    <img src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="<? echo 'admin/' . $img_cover_path ?>" alt="Cover" class="lazyload ryan-banner-cover" data-swiper-parallax-y="-30" data-swiper-parallax-scale="1.2">
									</div>
								</div>
							</div>
						</div>
						<!-- profile photo -->
						<div class="image">
						    <a href="<? echo 'admin/' . $img_profile_path ?>" data-fancybox="profile"> 
    						    <noscript>
    						        <img src="<? echo 'admin/' . $img_profile_path ?>" alt="image" />
    						    </noscript>
    						    <img class="lazyload" src='data:image/svg+xml,%3Csvg%20xmlns=%22http://www.w3.org/2000/svg%22%20viewBox=%220%200%20210%20140%22%3E%3C/svg%3E' data-src="<? echo 'admin/' . $img_profile_path ?>" alt="Profile" style="height: 140px; width: 140px; object-fit: cover;"/>
    						</a>
    					</div>
    					<!-- profile titles -->
						<div class="title" style="word-spacing: -8px;">
						    <? echo ucwords($name); ?>
    						<? if (!empty($verification_badge)) { ?>
    						    <span class="fa fa-stack fa-lg" style="color: #5597f2; font-size: 15px; bottom: 2px; right: 0px;">
                                    <i class="fa fa-certificate fa-stack-2x"></i>
                                    <i class="fa fa-check fa-stack-1x fa-inverse"></i>
                                </span>
                            <? } ?>
    					</div>
						<div class="subtitle subtitle-typed">
							<div class="typing-title">
    							 <? foreach ($typing_title as $value) { ?>
    								<p><? echo $value?></p>
        						<? } ?>
						    </div>
							<span class="r-typed"></span>
						</div>
						<!-- profile socials -->
						<div class="social">
						    <? if ($url_facebook != 'off' && !empty($url_facebook)) { ?>
						    <a target="_blank" href="<? echo $url_facebook ?>">
						        <span class="fab fa-facebook" style="color: #5270a4;"></span>
						    </a>
						    <? } ?>
						    <? if ($url_twitter != 'off' && !empty($url_twitter)) { ?>
						    <a target="_blank" href="https://www.twitter.com/ahmedkhalidsa3d">
						        <span class="fab fa-twitter" style="color: #4db8ec;"></span>
						    </a>
						    <? } ?>
						    <? if ($url_instagram != 'off' && !empty($url_instagram)) { ?>
						    <a target="_blank" href="https://www.instagram.com/ahmedkhalidsa3d">
						        <span class="fab fa-instagram" style="color: #b92620;"></span>
						    </a>
						    <? } ?>
						    <? if ($url_linkedin != 'off' && !empty($url_linkedin)) { ?>
						    <a target="_blank" href="https://www.linkedin.com/ahmedkhalidsa3d">
						        <span class="fab fa-linkedin" style="color: #3c85ac;"></span>
						    </a>
						    <? } ?>
						    <? if ($url_behance != 'off' && !empty($url_behance)) { ?>
						    <a target="_blank" href="https://www.behance.com/ahmedkhalidsa3d">
						        <span class="fab fa-behance" style="color: #4176fa;"></span>
						    </a>
						    <? } ?>
						    <? if ($url_telegram != 'off' && !empty($url_telegram)) { ?>
						    <a target="_blank" href="https://t.me/ahmedkhalidsa3d">
						        <span class="fab fa-telegram" style="color: #23a0dc;"></span>
						    </a>
						    <? } ?>
						    <? if ($url_whatsapp != 'off' && !empty($url_whatsapp)) { ?>
						    <a target="_blank" href="https://api.whatsapp.com/send?phone=+201147545837">
						        <span class="fa fa-whatsapp" style="color: #3fbe4f;"></span>
						    </a>
						    <? } ?>
						</div>
					</div>
					<!-- profile buttons -->
					<div class="lnks">
					    <a href="<?echo $url_instagram ?>" target="_blank" class="lnk">
					        <span class="text">Follow Me</span>
					        <span class="ion ion-social-rss"></span>
					    </a>
					    <a href="/contact" class="lnk">
							<span class="text">Contact Me</span>
							<span class="ion ion-ios-paperplane"></span>
						</a>
					</div>
				</div>
			</div>
			<div class="s_overlay"></div>
			<div class="content-sidebar">
				<div class="sidebar-wrap">
					<aside id="secondary" class="widget-area">
						<section id="block-2" class="widget widget_block widget_search">
							
							<div class=" top-menu-onepage">
            					<div class="menu-main-menu-container">
            						<ul id="menu-main-menu" class="menu" style="justify-content: center;">
            							<li data-id="menu-item-107" class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-home <?php echo $current_about ?> page_item page-item-151 current_page_item">
            							    <a href="/about" class="one-page-menu-item">
            							        <span class="icon far fa-user"></span>
            							        <span class="name">About</span>
            							    </a>
            							</li>
            							    
            							<li data-id="menu-item-108" class=" menu-item menu-item-type-post_type menu-item-object-page <?php echo $current_resume ?>">
            							    <a href="/resume" class="one-page-menu-item">
            							        <span class="icon far fa-list-alt"></span>
            							        <span class="name">Resume</span>
            							    </a>
            							</li>
            										
            							<li data-id="menu-item-109" class=" menu-item menu-item-type-post_type menu-item-object-page <?php echo $current_portfolio ?>">
            							    <a href="" class="one-page-menu-item">
            							        <span class="icon fas fa-eye"></span>
            							        <span class="name">Portofolio</span>
            							    </a>
            							</li>
            							
            							<!-- <li data-id="menu-item-110" class=" menu-item menu-item-type-post_type menu-item-object-page">
            							    <a href="#blog" class="one-page-menu-item">
            							        <span class="icon far fa-newspaper"></span>
            							        <span class="name">Blog</span>
            							    </a>
            							</li> -->
            							
            							<li data-id="menu-item-111" class=" menu-item menu-item-type-post_type menu-item-object-page <?php echo $current_contact ?>">
            							    <a href="#contact" class="one-page-menu-item">
            							        <span class="icon far fa-paper-plane"></span>
            							        <span class="name">Contact</span>
            							     </a>
            							</li>
            							<li data-id="" style="display: none;">
            							    
            							</li>
            							
            						</ul>
            					</div>
            				</div>
							
						</section>
					</aside>
					<!-- #secondary -->
				</div>
				<span class="close"></span>
			</div>