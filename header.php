<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="logo-area">
			<img src="<?php echo get_template_directory_uri(); ?>/img/site-logo_bk.svg" alt="rental space MdN">
		</div>
		<nav class="sp-only">
			<div class="gnav-toggle">
				<input id="gnav_input" type="checkbox" class="gnav-input">
				<label id="gnav_open" class="gnav-open" for="gnav_input"><span></span></label>
				<label id="gnav_close" class="gnav-close" for="gnav_input"></label>
				<div id="gnav-content" class="gnav-content">
					<ul class="gnav-menu">
						<li>
							<a href="#service">Service<br>サービス</a>
						</li>
						<li>
							<a href="#plan">Plan<br>プラン</a>
						</li>
						<li>
							<a href="#access">Access<br>アクセス</a>
						</li>
						<li>
							<a href="#contact">Contact<br>コンタクト</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<nav class="pc-only">
			<ul class="gnav-menu">
				<li>
					<a href="#service">Service<br>サービス</a>
				</li>
				<li>
					<a href="#plan">Plan<br>プラン</a>
				</li>
				<li>
					<a href="#access">Access<br>アクセス</a>
				</li>
				<li>
					<a href="#contact">Contact<br>コンタクト</a>
				</li>
			</ul>
		</nav>
	</header>
