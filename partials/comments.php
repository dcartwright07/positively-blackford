<!-- Comments
============================================= -->
<div id="comments" class="clearfix">

	<h3 id="comments-title"><span>3</span> Comments</h3>

	<!-- Comments List
	============================================= -->
	<ol class="commentlist clearfix">

		<li class="comment even thread-even depth-1" id="li-comment-1">

			<div id="comment-1" class="comment-wrap clearfix">

				<div class="comment-meta">

					<div class="comment-author vcard">

						<span class="comment-avatar clearfix">
						<img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

					</div>

				</div>

				<div class="comment-content clearfix">

					<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>

					<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

					<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

				</div>

				<div class="clear"></div>

			</div>


			<ul class='children'>

				<li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">

					<div id="comment-3" class="comment-wrap clearfix">

						<div class="comment-meta">

							<div class="comment-author vcard">

								<span class="comment-avatar clearfix">
								<img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40' /></span>

							</div>

						</div>

						<div class="comment-content clearfix">

							<div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

							<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

							<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

						</div>

						<div class="clear"></div>

					</div>

				</li>

			</ul>

		</li>

		<li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

			<div id="comment-2" class="comment-wrap clearfix">

				<div class="comment-meta">

					<div class="comment-author vcard">

						<span class="comment-avatar clearfix">
						<img alt='' src='http://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' /></span>

					</div>

				</div>

				<div class="comment-content clearfix">

					<div class="comment-author"><a href='http://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

					<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

					<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

				</div>

				<div class="clear"></div>

			</div>

		</li>

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