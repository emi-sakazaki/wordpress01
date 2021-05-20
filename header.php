<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<title>rental space MdN</title>
	<meta name="description" content="レンタルスペースMdNの公式ホームページです。">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/flex.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/scroll.js"></script>
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
