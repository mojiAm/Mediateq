<?php
	get_template_part('./inc/header');
?>

<div class="project-content">
	<?php
		if(have_posts()){
			the_post();

			$meta = get_post_custom();
	?>
	<div id="tit-otherpage">
		<h5>نمونه کارها<span> / <?php the_title(); ?></span></h5>
	</div>
	<div class="hline">
		<div class="boldline"></div>
	</div>
	<div class="single-project">
		<div class='pic'>
			<?php 
				$title = get_the_title();
				$attr = array(
					'class'	=> "image",
					'alt'	=> $title,
				);
				echo get_the_post_thumbnail( $page->ID, 'large',  $attr) ;
			?>
		</div>
		<div class='detail'>
			<div class='text'> <?php the_content(); ?> </div>
			<div class="options">
				<?php
					$project_cat = wp_list_categories( 
						array(
						  'show_option_all' => '',
						  'taxonomy' => 'projects',
						  'orderby' => 'name',
						  'order' => 'ACS',
						  'show_count' => 0,
						  'pad_counts' => 0,
						  'hierarchical' => 1,
						  'echo' => 0,
						  'title_li' => '',
						  'style' => 'list',
						) );

					if ( $project_cat )
						echo "<ul class='project-list'> $project_cat </ul>";
				?>				
			</div>
		</div>
		<div class='badboy'></div>
		<div class='right'>
			<div class='title'><p>پروژه: <?php the_title(); ?> </p></div>
			<?php
				if( count($meta['link'])>0 ){
					$url = $meta['link'][0];
			?>
			<p><a href="<?php echo "http://$url" ?>" target='_blank'>باز کردن پروژه</a></p>
			<?php
				}else{
					$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
					$title = get_the_title();
			?>
					<p><a href="<?php echo $url; ?>" rel='prettyphoto[gallery2]' target='_blank' title="<?php echo $title; ?>">باز کردن پروژه</a></p>
			<?php
				}
			?>
		</div>
		<div class="badboy"></div>
	</div>
	<?php
		}
	?>
</div>



<?php
	get_template_part('./inc/footer');
?>

<script type="text/javascript">
	  $(document).ready(function(){
	    $("a[rel^='prettyphoto[gallery2]']").prettyPhoto({
	    	autoplay_slideshow: false,
	    	show_title: false,
	    });
	  });
</script>