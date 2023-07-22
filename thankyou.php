<?php

/**
 * Template Name: Thankyou-Page
 * Template Post Type: post, page
 */

 get_header()

?>


	<style>



.cf:before,
.cf:after {
content: " ";
display: table;
}
.cf:after {
clear: both;
}

* {
box-sizing: border-box;
}

html {
font-size: 16px;
background-color: #fffffe;
}
body {
padding: 0 20px;
min-width: 300px;
font-family: 'Clinton';
background-color: #fffffe;
color: #1a1a1a;
text-align: center;
word-wrap: break-word;
-webkit-font-smoothing: antialiased
}
a:link,
a:visited {
color: #00c2a8;
}
a:hover,
a:active {
color: #03a994;
}


.site-header {
margin: 0 auto;
padding: 0px 0 0;
max-width: 820px;
}
.site-header__title {
margin: 0;
font-family: 'Clinton';
font-size: 2.5rem;
font-weight: 700;
line-height: 1.1;
text-transform: uppercase;
-webkit-hyphens: auto;
-moz-hyphens: auto;
-ms-hyphens: auto;
hyphens: auto;
color: #5c0632;
}

ntent {
margin: 0 auto;
max-width: 820px;
}
.main-content__checkmark {
font-size: 4.0625rem;
line-height: 1;
color: #24b663;
}
.main-content__body {
margin: 20px 0 0;
font-size: 1rem;
line-height: 1.4;
color: #5c0632;
}



.site-footer {
margin: 0 auto;
padding: 80px 0 25px;
padding: 0;
max-width: 820px;	
}
.site-footer__fineprint {
font-size: 0.9375rem;
line-height: 1.3;
font-weight: 300;
color: #000;
font-family: auto;
padding-top: 150px;
}



@media only screen and (min-width: 40em) {

.site-header__title {
font-size: 6.25rem;
}
.main-content__checkmark {
font-size: 9.75rem;
}
.main-content__body {
font-size: 1.25rem;

}
.site-footer {
padding: 145px 0 25px;
}
.site-footer__fineprint {
font-size: 1.125rem;
}

}

</style>
	<!-- <link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css"> -->


<body>
	<div class="thank-logo">
	<img src="<?php bloginfo('template_url'); ?>/images/logo.png">
	</div>

	<header class="site-header" id="header">
<!-- 		<h1 class="site-header__title" data-lead-id="site-header-title">THANK YOU!</h1> -->

				<p class="main-content__body" data-lead-id="main-content-body">Thank you so much for your time in completing our survey. It is greatly appreciated, as we will use your feedback to create a better customer experience.</p>
</br>
		<p class="site-footer__fineprint" id="fineprint">&copy;<?php echo date('Y'); ?> Oriental Bakery. All Rights Reserved.</p>
	</header>

</body>
</html>
