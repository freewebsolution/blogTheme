 					<?php if (have_posts()) : ?>

						<!-- START LOOP -->
						<?php while (have_posts()) : the_post(); ?>
							<article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                                <div class="blog-post-image">
									 <a href="<?php the_permalink() ?>">
										<?php
											if ( has_post_thumbnail() ) 
											{
												the_post_thumbnail('single',array('class' => 'img-responsive'));
											}
										?>
									</a>
                                </div>
                                <div class="blog-content">
                                    <h1 class="blogpost-title">
                                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                                    </h1>
								<div class="post-meta">
									<span class="post-meta-date"><i class="fa fa-clock-o"></i> <?php the_time('d M,Y'); ?></span>
									<span class="post-meta-author"><i class="fa fa-user"></i> <?php the_author_posts_link(); ?></span>
									<span class="post-meta-cats"><i class="fa fa-tags"></i> <?php the_category(', ') ?></span>
									<span class="post-meta-comments"><?php echo'<i class="fa fa-eye"></i> ';if(function_exists('the_views')) { the_views(); }?></span>
								</div>
                                    <p><?php echo excerpt('24');?></p>
                                    
                                    <a href="<?php the_permalink() ?>" class="btn btn-dafault btn-details" style="margin-top:-10px;">Continue Reading</a>
                                </div>
                                
                            </article>
						<?php endwhile; ?>
							<!-- END LOOP -->
						<?php else: ?>
							<h2><?php _e('Non trovato'); ?></h2>
							<p class="center"><?php _e('Siamo spiacenti, nessun post corrisponde ai criteri di ricerca!'); ?></p>
						<?php endif; ?>