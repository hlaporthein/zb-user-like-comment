<?php if ( ! defined( 'ABSPATH' ) ) {
	die( 'Direct access forbidden.' );
}


/**
 * Comment Post ID
 *
 * @param $comment_id
 *
 * @return int
 */
function zb_ulc_get_post_id_by_comment_id($comment_id) {
	$comment = get_comment($comment_id);
	return $comment->comment_post_ID;
}