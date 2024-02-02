<?php
/**
 * Extend Recent Posts Widget 
 *
 * Adds different formatting to the default WordPress Recent Posts Widget
 */

Class My_Recent_Posts_Widget extends WP_Widget_Recent_Posts {

	function widget($args, $instance) {
	
		extract( $args );
		
		$title = apply_filters('widget_title', empty($instance['title']) ? __('Recent Posts') : $instance['title'], $instance, $this->id_base);
				
		if( empty( $instance['number'] ) || ! $number = absint( $instance['number'] ) )
			$number = 10;
					
		$r = new WP_Query( apply_filters( 'widget_posts_args', array( 'posts_per_page' => $number, 'no_found_rows' => true, 'post_status' => 'publish', 'ignore_sticky_posts' => true ) ) );
		if( $r->have_posts() ) :
			
		echo $before_widget; ?>
        <div class="widget-posts  fl-wrap">
        <?php if ( $title ) echo $before_title . $title . $after_title; ?>
        <ul class="no-list-style">
        <?php while ( $r->have_posts() ) : $r->the_post(); ?>
            <li>
                
                <div class="widget-posts-descr">
                    <h4><a href="<?php the_permalink() ?>"><?php if ( get_the_title() ) the_title(); else the_ID(); ?></a></h4>
                </div>

                <div class="widget-posts-img"><a href="<?php the_permalink() ?>"> <?php the_post_thumbnail( 'full', ['class' => 'img-fluid'] );?></a>  </div>

            </li>
        <?php endwhile; ?>
        </ul>
        <?php echo $after_widget; ?>
        </div>
		<?php
		wp_reset_postdata();
		
		endif;
	}
}
function my_recent_widget_registration() {
  unregister_widget('WP_Widget_Recent_Posts');
  register_widget('My_Recent_Posts_Widget');
}
add_action('widgets_init', 'my_recent_widget_registration');



?>