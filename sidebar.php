<div id="sidebar">
	<ul>
		<li <?php if (is_home()) { ?>class="current_page_item"<?php } ?>><a href="<?php bloginfo('url'); ?>">
			<a href="<?php bloginfo('url'); ?>">Home</a>
		</li>
		<?php wp_list_pages('title_li=' ); ?>
	</ul>
</div>
