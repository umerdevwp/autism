<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
*/
if ( post_password_required() ) {
	return;
}
?>
<!--Comment Area Start-->
		<div class="comments-area mt-85 mt-lg-65 mt-md-55 mt-md-45 mt-sm-15 mt-xs-0">

		<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: Post title. */
				printf( _x( 'One thought on &ldquo;%s&rdquo;', 'comments title', 'fshp' ), get_the_title() );
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s thought on &ldquo;%2$s&rdquo;',
						'%1$s thoughts on &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'fshp'
					),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h3>

		<?php the_comments_navigation(); ?>

		<ol class="commentlist">
			<?php
				// Arguments for wp_list_comments() 
				$args = [
					'style'       => 'ol',
					'format'      => 'format_comment',
					'short_ping'  => true,
					'avatar_size' => 60,
					'max_depth'   => 5,
					'type'        => 'comment',
					'callback' => 'format_comment',
				];

				wp_list_comments( $args );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

			
		</div>
		


		<div class="comment-box mt-30">
			
			
				<div class="row">
					<?php
							$args = array(
										'title_reply' => __( '<h3>Leave a Comment</h3>' ),
										'comment_field' => '<div class="row"><div class="col-md-12"><div class="single-input mb-20"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></div></div></div>',
										'fields' => apply_filters( 
											'comment_form_default_fields', array(
														'author' =>
														'<div class="row"><div class="col-md-4"><div class="single-input mb-20">' .
														'<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
														( $req ? '<span class="required">*</span>' : '' ) .
														'<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
														'" ' . $aria_req . ' /></div></div>',

														'email' =>
														'<div class="col-md-4"><div class="single-input mb-20"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
														( $req ? '<span class="required">*</span>' : '' ) .
														'<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
														'" ' . $aria_req . ' /></div></div>',

														'url' =>
														'<div class="col-md-4"><div class="single-input mb-20"><label for="url">' .
														__( 'Website', 'domainreference' ) . '</label>' .
														'<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
														'" /></div></div></div>'
												)
											),

									);
							comment_form( $args, $post_id  );
					?>

				</div>
			
		</div>
<!--Comment Area End-->
