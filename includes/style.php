<?php

$branding = get_option('branding');

if(!empty($branding)) {
	extract($branding);
} else {
	return false;
}

$css = '/**';
$css .= 'Created on: ' . date("Y/m/d H:i:s");
$css .= '**/';



if(empty($hero_background_image)) {
	$hero_background_image = CITYPRO_URL . 'assets/img/no-bg.jpg';
}
$css .= '
.webnotik-pages .hero-background {
    background-image: linear-gradient(90deg,rgba(30,30,30,0.50) 30%,rgba(30,30,30,0.20) 75%),url('.$hero_background_image.');
}
';



if(!empty($main_branding_color)) {
	$css .= '
	.main,
	span.main {
		color: '.$main_branding_color.';
	}
	';

	$css .= '
	.et_pb_portfolio_grid.badge .et_pb_portfolio_item .post-meta a[title] {
	    background: '.$main_branding_color.' !important;
	}
	'; 
}

if(!empty($menu_cta_color)) {
	$css .= '
	.cta a {   
		background: '.$main_branding_color.';
		padding: 15px 20px!important;
	    border-radius: 3px;
	    color: #fff !important;
	}
	.et-fixed-header .cta a {
		color: #fff !important;
	}
	';

}

if(!empty($form_header_background)) {
	$css .= '
	.webnotik-pages .form-header,
	.single .form-header-hero .form-header,
	.single .form-hero .form-header{
	    background: '.$form_header_background.';
	    
	}';

	$css .= '
		.form-header-hero, .form {
		    background: transparent !important;
		}
	';
}

if(!empty($special_page_background_color)) {
	$css .= '
	.webnotik-pages .thank-you-page.et_pb_fullwidth_header,
	.webnotik-pages .special-page.et_pb_fullwidth_header,
	.et_pb_section.special-page, 
	.et_pb_section.thank-you-page {
	    background: '.$form_header_background.';
	}';

	$css .= '
	.webnotik-pages .thank-you-page .et_pb_button,
	.webnotik-pages .special-page .et_pb_button {
		background: '.$special_page_button_background_color.';
	}';
	$css .= '
	.webnotik-pages .thank-you-page .et_pb_button:hover,
	.webnotik-pages .special-page .et_pb_button:hover {
		background: '.$special_page_button_hover_background_color.';
	}';
}

if($remove_header_bottom_padding == "yes") {
	$css .= '
	.form-header {
	    padding-bottom: 0 !important;
	}
	';
}


if(!empty($form_body_background)) {
	$css .= '
	.webnotik-pages .form-body-hero,
	.webnotik-pages .form-hero .form-body,
	.single .form-header-hero .gform_wrapper,
	.form-header-hero .gform_wrapper {
	    background: '.$form_body_background.';
	}
	';
}


//depreciated since 1.2.7
if(!empty($form_body_background)) {
	$css .= '
	.webnotik-pages .form-header-content,
	.single .form-header-content {
	    background: '.$form_body_background.';
	}
	';
}


//depreciated since 1.2.7
if(!empty($form_body_background)) {
	$css .= '
	.webnotik-pages .form-body-content, .single .form-body-content {
	    background: '.$form_body_background.';
	}
	'; 
}

if($form_fields_size == "Small") {
	$css .= '
	.et_pb_module .gform_wrapper input, .et_pb_module .gform_wrapper select, .et_pb_module .gform_wrapper textarea {
		padding: 10px 15px !important;
	}
	';
}


if(!empty($form_button_background)) {
	$css .= '
	.et_pb_module *[type=submit], 
	.et_pb_module .gform_wrapper button,
	.webnotik-pages .thank-you-page.et_pb_fullwidth_header .et_pb_button,
	.widget_search input#searchsubmit {
		background: '.$form_button_background.';
		margin: 0 auto;
		text-align: center;
		font-weight: bold;
		color: #fff !important;
		background-image: linear-gradient(to left, transparent, transparent 50%, '.$form_button_background_hover.' 50%, '.$form_button_background_hover.');
		background-position: 100% 0;
		background-size: 200% 100%;
		transition: all .25s ease-in;
		margin-bottom: 0;
	}
	';

	$css .= '
	.et_pb_module *[type=submit]:hover, 
	.et_pb_module .gform_wrapper button:hover,
	.webnotik-pages .thank-you-page.et_pb_fullwidth_header .et_pb_button:hover,
	.widget_search input#searchsubmit:hover {
	  background-position: 0 0;
	  color: #fff !important;
	}
	';

	$css .= '
	.webnotik-pages .location-list li a {
		color: '.$form_button_background.'
	}
	';
} else {
	$css .= '
	.widget_search input#searchsubmit {
		background: '.$main_branding_color.';
		margin: 0 auto;
		text-align: center;
		font-weight: bold;
		color: #fff !important;
		background-image: linear-gradient(to left, transparent, transparent 50%, '.$main_branding_color.' 50%, '.$main_branding_color.');
		background-position: 100% 0;
		background-size: 200% 100%;
		transition: all .25s ease-in;
		margin-bottom: 0;
	}
	';

	$css .= '
	.widget_search input#searchsubmit:hover {
	  background-position: 0 0;
	  color: #fff !important;
	}
	';


	$css .= '
	.webnotik-pages .location-list li a {
		color: '.$main_branding_color.'
	}
	';

}


if($round_corners != "Yes") {
	$round_corners_px = 0;
}

$css .= '
.round_corners .cta a,
.round_corners *[type=submit],
.round_corners .et_pb_button,
.round_corners .et_pb_module .gform_wrapper button,
.round_corners .et_pb_image .has-box-shadow-overlay,
.round_corners .et_pb_module.rounded,
.et_pb_module .gform_wrapper button {
    border-radius: '.$round_corners_px.'px;
}
';


//isolated case where the button have a spacing for the hover color
$css .= '
.round_corners .et_pb_module .gform_wrapper button {
	margin-left: -1px;
	border: '.$round_corners_px.'px;
}
';


$css .= '
	.single .et_pb_post {
	    margin-bottom: 0 !important;
	}
';