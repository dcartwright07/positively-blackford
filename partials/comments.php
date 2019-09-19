<!-- Comments
============================================= -->
<div id="comments" class="clearfix">
	<h3 id="comments-title"><span><?php echo get_comments_number(); ?></span> Comments</h3>

	<!-- Comments List
	============================================= -->
	<ol class="commentlist clearfix">

		<?php wp_list_comments( 'type=comment&callback=pb_theme_comment' ); ?>

	</ol><!-- .commentlist end -->

	<div class="clear"></div>

	<!-- Comment Form
	============================================= -->
	<div id="respond" class="clearfix">

		<?php

			$comment = '<div class="clear"></div><div class="col_full"><label for="comment">' . __( 'Comment' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><textarea id="comment" name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea></div>';

			$fields = array(
				'author' =>
					'<div class="col_one_half"><label for="author">' . __( 'Name' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><input type="text" name="author" id="author" value="' . esc_attr( $commenter['comment_author'] ) . '" size="22" aria-required="true" tabindex="1" class="sm-form-control" /></div>',

				'email' =>
					'<div class="col_one_half"><label for="email">' . __( 'Email' ) . ( $req ? '<span class="required">*</span>' : '' ) . '</label><input type="text" name="email" id="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="22" aria-required="true" tabindex="1" class="sm-form-control" /></div>',
			);

			$comment_args = array(
				'title_reply' 	=> '<h3>Leave a <span>Comment</span></h3>',
				'fields' 				=> apply_filters( 'comment_form_default_fields', $fields ),
				'id_form' 			=> 'commentform',
				'class_form' 		=> 'clearfix',
				'comment_field' => $comment,
				'id_submit' 		=> 'submit-button',
  			'class_submit' 	=> 'button button-3d nomargin',
  			'name_submit' 	=> 'submit',
				'label_submit' 	=> 'Submit Comment',
			);

			comment_form( $comment_args );

		?>

	</div><!-- #respond end -->
</div><!-- #comments end -->