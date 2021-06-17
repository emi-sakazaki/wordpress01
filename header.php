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
					<?php
					if ( has_nav_menu( 'global' ) ) {
						wp_nav_menu( array(
							'theme_location' => 'global',
							'container'      => '',
							'items_wrap'     => '<ul class="gnav-menu">%3$s</ul>'
						) );//wp_nav_menuのオプションメニュー、%3$sは必ず入力する
					}
					?>
				</div>
			</div>
		</nav>
		<nav class="pc-only">
			<?php
			if ( has_nav_menu( 'global' ) ) {
				wp_nav_menu( array(
					'theme_location' => 'global',
					'container'      => '',
					'items_wrap'     => '<ul class="gnav-menu">%3$s</ul>'
				) );//wp_nav_menuのオプションメニュー、%3$sは必ず入力する
			}
			?>
		</nav>
	</header>
