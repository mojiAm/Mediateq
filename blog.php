<?php
	/*
		Template Name: Blog
	*/
	get_template_part('./inc/header');
?>

<div class="blog-content">
	<div id="tit-otherpage">
		<h5><?php the_title(); ?></h5>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	
	<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		query_posts( 'post_type=blog&posts_per_page=3&paged=' . $paged);
		while(have_posts()){
			the_post();
	?>

	<div class="right">
		<div class="pic">
			<a href="<?php the_permalink(); ?>">
				<?php $title = get_the_title();
					  $attr = array(
							'class'	=> "image",
							'alt'	=> $title,
				    	);
					  echo get_the_post_thumbnail( $page->ID, 'large',  $attr) ; 
				?>
			<div class="effect"></div>
			</a>
		</div>
		<div class="title">
			<h5><?php the_title(); ?></h5>
		</div>
		<div class="detail">
			<div class="date">
				<div class="image"></div>
				<p>تاریخ: <?php the_date('j F  Y'); ?></p>
			</div>
			<div class="by">
				<div class="image"></div>
				<p>توسط: <?php the_author(); ?></p>
			</div>
			<div class="num-of-com">
				<div class="image"></div>
				<p>تعداد دیدگاه: <?php comments_number( $zero = 0, $one = 1, $more='%'); ?></p>
			</div>
			<div class="badboy"></div>
		</div>
		<div class="text">
			<?php global $more; $more = 0; the_content('[ادامه...]'); ?>
		</div>
	</div>

	<div class="left">
		<div class="cat">
			<div class="hline">
				<h5>گروه ها</h5>
			</div>
			<?php
				$blog_cat = wp_list_categories( array(
				  'taxonomy' => 'blogs',
				  'orderby' => 'count',
				  'show_count' => 0,
				  'pad_counts' => 0,
				  'hierarchical' => 1,
				  'echo' => 0,
				  'title_li' => ''
				) );

			if ( $blog_cat )
				echo '<ul class="blog-list">' . $blog_cat . '</ul>';
			?>
			<div class="badboy"></div>
		</div>
		<div class="tag">
			<div class="hline">
				<h5>برچسبها</h5>
			</div>
			<?php
				$blog_tag = wp_tag_cloud( array(
					'taxonomy' => 'blogs',
					'echo' => 0,
					'smallest' => 14, 
				    'largest' => 18,
				    'unit' => 'px', 
				    'number' => 0,  
				    'format' => 'flat',
				    'orderby' => 'count', 
				    'order' => 'RAND',
				    'link' => 'view',
				) );

				if ( $blog_tag ): 
			?>
				<div class="blog_tag">
					<?php echo $blog_tag; ?>
				</div>

			<?php 
				endif; 
			?>
			<div class="badboy"></div>
		</div>
	</div>

	<?php
		}
	?>

	<div class="badboy"></div>


	<div class='pagelink'>
		<?php 
			$big = 999999999;
			$args = array(
						'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format' => '?paged=%#%',
						'current' => max( 1, get_query_var('paged') ),
						'total' => $wp_query->max_num_pages,
						'prev_text'    => ('«'),
						'next_text'    => ('»')
					);
			echo paginate_links( $args );
			wp_reset_query();
		?>
	</div>

	<div class="badboy"></div>
</div>

<?php
	get_template_part('./inc/footer');
?>