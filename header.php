<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="format-detection" content="telephone=no">
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="logo-area">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$image          = wp_get_attachment_image_src( $custom_logo_id, 'full' );
			
			$html  = '<image src="' . $image[0] . '"';
			$html .= ' width="' . $image[1] . '"';
			$html .= ' height="' . $image[2] . '"';
			$html .= ' alt="' . esc_attr( get_bloginfo( 'name' ) ) . '"';
			$html .= '>';
			echo $html;
			?><!--画像のロゴデータを取りに行く、idも必ず確認すること、サイズを要指定-->
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
