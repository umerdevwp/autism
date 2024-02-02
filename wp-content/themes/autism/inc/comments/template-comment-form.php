<?php
function format_comment($comment, $args, $depth) {

    $GLOBALS['comment'] = $comment; ?>
    
    <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
            
    <div class="single-comment">
            <div class="comment-avatar img-full">
                <?php if ( 0 != $args['avatar_size'] ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
            </div>
            <div class="comment-info">
                <?php printf( __( '%s <span class="says">says:</span>' ), sprintf( '<b class="fn">%s</b>', get_comment_author_link( $comment ) ) ); ?>
                <?php
                    comment_reply_link( array_merge( $args, array(
                        'depth'     => $depth,
                        'max_depth' => $args['max_depth'],
                        'before'    => '<div class="reply">',
                        'after'     => '</div>'
                    ) ) );
                    ?>
                    
                <span class="date">
                    <?php
                        /* translators: 1: comment date, 2: comment time */
                        printf( __( '%1$s at %2$s' ), get_comment_date( '', $comment ), get_comment_time() );
                    ?>
                </span>
                <?php if ( '0' == $comment->comment_approved ) : ?>
                    <p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></p>
                <?php endif; ?>
                <p><?php comment_text(); ?></p>
            </div>
        </div>
        
<?php 
} 



function comment_validation_init() {
    if(is_single() && comments_open() ) { ?>        
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
    
    <script type="text/javascript">
    jQuery(document).ready(function($) {
    $('#commentform').validate({

    rules: {
      author: {
        required: true,
        minlength: 2
      },

      email: {
        required: true,
        email: true
      },

      comment: {
        required: true,
        minlength: 20
      }
    },

    messages: {
      author: "Please fill the required field",
      email: "Please enter a valid email address.",
      comment: "Please fill the required field"
    },

    errorElement: "div",
    errorPlacement: function(error, element) {
      element.after(error);
    }

    });
    });
    </script>
    <?php
    }
    }
    add_action('wp_footer', 'comment_validation_init');


?>