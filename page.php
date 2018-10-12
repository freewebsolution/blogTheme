<?php get_header('category'); ?>
        <!--
        ==================================================
        Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
			<div id="inner-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bg/slider.jpg" alt="" class="animated flipInX">
			</div>
            </section><!--/#Page header-->
            <section id="blog-full-width">
                <div class="container content">
				<h1><?php the_title(); ?></h1>
				<div class="breadcrumbs">
					<?php create_breadcrumbs(); ?>
		        </div>
                    <div class="row">
                        <div class="col-md-8">
						<!-- START LOOP -->
 					<?php if (have_posts()) : ?>

						<!-- START LOOP -->
						<?php while (have_posts()) : the_post(); ?>
							<article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                                <div class="blog-post-image">
										<?php
											if ( has_post_thumbnail() ) 
											{
												the_post_thumbnail('single',array('class' => 'img-responsive'));
											}
										?>
                                </div>
                                <div class="blog-content">
                                    <p><?php the_content();?></p>                                
                            </article>
						<?php endwhile; ?>
							<!-- END LOOP -->
						<?php else: ?>
							<h2><?php _e('Non trovato'); ?></h2>
							<p class="center"><?php _e('Siamo spiacenti, nessun post corrisponde ai criteri di ricerca!'); ?></p>
						<?php endif; ?>	
                        </div>
						<?php get_sidebar();?>	
                    </div>
                    </section>
					<?php get_footer();?>		
        </body>
    </html>