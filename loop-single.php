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
                                    <h1 class="blogpost-title">
                                    <?php the_title(); ?>
                                    </h1>
								<div class="post-meta">
									<span class="post-meta-date"><i class="fa fa-clock-o"></i> <?php the_time('d M,Y'); ?></span>
									<span class="post-meta-author"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></span>
									<span class="post-meta-cats"><i class="fa fa-tags"></i> <?php the_category(', ') ?></span>
									<span class="post-meta-comments"><?php echo'<i class="fa fa-eye"></i> ';if(function_exists('the_views')) { the_views(); }?></span>
								</div>
                                    <p><?php the_content();?></p>
										<div id="area_autore">
										<?php if (function_exists('get_avatar')) { echo get_avatar( get_the_author_email() ); }?>
											<div id="info_autore">
											<h3>Chi &egrave; <?php the_author_posts_link(); ?> ?</h3>
											<p class="text-muted"><?php the_author_description(); ?></p>
											</div>
										</div><div class="clear"></div>
										<h3>Lascia la tua opinione</h3>
										<div class='comments'>
										<?php $url="http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>
										<div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" data-href="<?php echo $url ?>" data-numposts="10" data-colorscheme="light" data-width="100%" data-order-by="reverse_time" fb-xfbml-state="rendered"></div>
										</div>
                                    
                                </div>
                                
                            </article>
						<?php endwhile; ?>
							<!-- END LOOP -->
						<?php else: ?>
							<h2><?php _e('Non trovato'); ?></h2>
							<p class="center"><?php _e('Siamo spiacenti, nessun post corrisponde ai criteri di ricerca!'); ?></p>
						<?php endif; ?>