<?php 
function get_home_cats( $cat_data ){ ?>

<?php
	global $count2 ;
	
	$Cat_ID = $cat_data['id'];
	$Posts = $cat_data['number'];

	$cat_query = new WP_Query('cat='.$Cat_ID.'&posts_per_page='.$Posts); 
	$cat_title = get_the_category_by_ID($Cat_ID);
	$count = 0;
	$home_layout = $cat_data['style'];
	
?>
	<?php if( $home_layout == '2c'):  //************** 2C ****************************************************** ?>
		<?php $count2++; ?>
		<section class="cat-box column2 <?php if($count2 == 2) { echo 'last-column'; $count2=0; } ?>">
			<div class="cat-box-title">
				<h2><a href="<?php echo get_category_link( $Cat_ID ); ?>"><?php echo $cat_title ; ?></a></h2>
				<div class="stripe-line"></div>
			</div><!-- post-thumbnail /-->
			<div class="cat-box-content">
			
				<?php if($cat_query->have_posts()): ?>
				<ul>
				<?php while ( $cat_query->have_posts() ) : $cat_query->the_post(); $count ++ ;?>
				<?php if($count == 1) : ?>
					<li class="first-news">
						<div class="inner-content">
						<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) : ?>			
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
									<?php tie_thumb('',272,125); ?>
									<span class="overlay-icon"></span>
								</a>
							</div><!-- post-thumbnail /-->
						<?php endif; ?>
					
						<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						<p class="post-meta">
							<?php tie_get_score(); ?>
							<?php the_time(get_option('date_format'));  ?>
							<?php comments_popup_link( __( 'Leave a comment', 'tie' ), __( '1 Comment', 'tie' ), __( '% Comments', 'tie' ) ); ?>
						</p>
					
							<div class="entry">
								<?php tie_excerpt_home() ?>
								<a class="more-link" href="<?php the_permalink() ?>"><?php _e( 'Read More &raquo;', 'tie' ) ?></a>
							</div>
						</div>
					</li><!-- .first-news -->
					<?php else: ?>
					<li>
						<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) : ?>			
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php tie_thumb('',55,55); ?></a>
							</div><!-- post-thumbnail /-->
						<?php endif; ?>			
						<h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<p class="post-meta">
							<?php the_time(get_option('date_format'));  ?>
							<?php comments_popup_link( __( 'Leave a comment', 'tie' ), __( '1 Comment', 'tie' ), __( '% Comments', 'tie' ) ); ?>
							<?php tie_get_score(); ?>
						</p>
					</li>
					<?php endif; ?>
				<?php endwhile;?>
				</ul>

				<?php endif; ?>
			</div><!-- .cat-box-content /-->
		</section> <!-- Two Columns -->
		
		
	<?php elseif( $home_layout == '1c' ):  //************** 1C ******************************************************  ?>
		<section class="cat-box wide-box">
			<div class="cat-box-title">
				<h2><a href="<?php echo get_category_link( $Cat_ID ); ?>"><?php echo $cat_title ; ?></a></h2>
				<div class="stripe-line"></div>
			</div><!-- post-thumbnail /-->
			<div class="cat-box-content">
			
				<?php if($cat_query->have_posts()): ?>
				<ul>
				<?php while ( $cat_query->have_posts() ) : $cat_query->the_post(); $count ++ ;?>
				<?php if($count == 1) : ?>
					<li class="first-news">
						<div class="inner-content">
						<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) : ?>			
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
									<?php tie_thumb('',290, 195); ?>
									<span class="overlay-icon"></span>
								</a>
							</div><!-- post-thumbnail /-->
						<?php endif; ?>
					
						<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						<p class="post-meta">
							<?php tie_get_score(); ?>
							<?php the_time(get_option('date_format')); ?>
							<?php comments_popup_link( __( 'Leave a comment', 'tie' ), __( '1 Comment', 'tie' ), __( '% Comments', 'tie' ) ); ?>
						</p>
					
							<div class="entry">
								<?php tie_excerpt_home() ?>
								<a class="more-link" href="<?php the_permalink() ?>"><?php _e( 'Read More &raquo;', 'tie' ) ?></a>
							</div>
						</div>
					</li><!-- .first-news -->
					<?php else: ?>
					<li>
						<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) : ?>			
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php tie_thumb('',55,55); ?></a>
							</div><!-- post-thumbnail /-->
						<?php endif; ?>			
						<h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<p class="post-meta">
							<?php the_time(get_option('date_format'));  ?>
							<?php comments_popup_link( __( 'Leave a comment', 'tie' ), __( '1 Comment', 'tie' ), __( '% Comments', 'tie' ) ); ?>
							<?php tie_get_score(); ?>
						</p>
					</li>
					<?php endif; ?>
				<?php endwhile;?>
				</ul>
				<div class="clear"></div>

					<?php endif; ?>
			</div><!-- .cat-box-content /-->
		</section><!-- Wide Box -->

	<?php else :   //************** list **********************************************************************************  ?>
		
		<section class="cat-box list-box">
			<div class="cat-box-title">
				<h2><a href="<?php echo get_category_link( $Cat_ID ); ?>"><?php echo $cat_title ; ?></a></h2>
				<div class="stripe-line"></div>
			</div><!-- post-thumbnail /-->
			<div class="cat-box-content">
			
				<?php if($cat_query->have_posts()): ?>
				<ul>
				<?php while ( $cat_query->have_posts() ) : $cat_query->the_post(); $count ++ ;?>
				<?php if($count == 1) : ?>
					<li class="first-news">
						<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) : ?>			
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark">
									<?php tie_thumb('',272,125); ?>
									<span class="overlay-icon"></span>
								</a>
							</div><!-- post-thumbnail /-->
						<?php endif; ?>
					
						<h2><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						<p class="post-meta">
							<?php tie_get_score(); ?>
							<?php the_time(get_option('date_format'));  ?>
							<?php comments_popup_link( __( 'Leave a comment', 'tie' ), __( '1 Comment', 'tie' ), __( '% Comments', 'tie' ) ); ?>
						</p>
					
							<div class="entry">
								<?php tie_excerpt_home() ?>
								<a class="more-link" href="<?php the_permalink() ?>"><?php _e( 'Read More &raquo;', 'tie' ) ?></a>
							</div>
						</li><!-- .first-news -->
					<?php else: ?>
					<li>
						<?php if ( function_exists("has_post_thumbnail") && has_post_thumbnail() ) : ?>			
							<div class="post-thumbnail">
								<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php tie_thumb('',55,55); ?></a>
							</div><!-- post-thumbnail /-->
						<?php endif; ?>			
						<h3><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'tie' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
						<p class="post-meta">
							<?php the_time(get_option('date_format')); ?>
							<?php comments_popup_link( __( 'Leave a comment', 'tie' ), __( '1 Comment', 'tie' ), __( '% Comments', 'tie' ) ); ?>
							<?php tie_get_score(); ?>
						</p>
					</li>
					<?php endif; ?>
				<?php endwhile;?>
				</ul>
				<div class="clear"></div>

					<?php endif; ?>
			</div><!-- .cat-box-content /-->
		</section><!-- List Box -->

	<?php endif; ?>
	
	
<?php } ?>