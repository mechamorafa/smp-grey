<h3 id="comments">
	<?php comments_number( esc_html__( 'no responses' ,'smp-grey' ), esc_html__( 'one response' ,'smp-grey' ), esc_html__( '% responses' ,'smp-grey' ) ); esc_html_e( ' for ' ,'smp-grey'); the_title(); ?>
</h3>
<?php the_comments_pagination( array(
	'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'smp-grey' ) . '</span>',
	'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'smp-grey' ) . '</span>',
) );
?>
<ol class="commentlist">
	<?php wp_list_comments(); ?>
	<?php comment_form(); ?>
</ol>
