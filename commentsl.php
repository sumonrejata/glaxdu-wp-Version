<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package startup
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



    <?php
    // You can start editing here -- including this comment!
    if ( have_comments() ) :
        ?>
         <div class="leave-comment-area">
            <h3>
            <?php
            $startup_comment_count = get_comments_number();
            if ( '1' === $startup_comment_count ) {
                printf(
                    /* translators: 1: title. */
                    esc_html__( 'COMMENT', 'startup' ),
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            } else {
                printf( 
                    /* translators: 1: comment count number, 2: title. */
                    esc_html( _nx( '%1$s COMMENT', '%1$s COMMENT', $startup_comment_count, 'comments title', 'startup' ) ),
                    number_format_i18n( $startup_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
                    '<span>' . wp_kses_post( get_the_title() ) . '</span>'
                );
            }
            ?>
        </h3><!-- .comments-title -->
        </div>



        <ol class="comment-list">
            <?php
            wp_list_comments(
                array(
                    'walker'      => new TwentyTwenty_Walker_Comment(),
                    'style'      => 'ul',
                    'short_ping' => true,
                    'avatar_size' => 120, 
                )
            );
            ?>
        </ol><!-- .comment-list -->

        <?php


        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() ) :
            ?>
            <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'startup' ); ?></p>
            <?php
        endif;

    endif; // Check for have_comments().?>

<div class="leave-comment-area">
<form>
<div class="row">

<?php
    $field = array(
        'author' => sprintf(
            '<div class="col-lg-6"><div class="leave-form">%s %s</div></div>',
            sprintf(
                ( $req ? $required_indicator : '' )
            ),
            sprintf(
                '<input placeholder="Name" type="text">',
                esc_attr( $commenter['comment_author'] ),
                ( $req ? $required_attribute : '' )
            )
        ),
        'email'  => sprintf(
            '<div class="col-lg-6"><div class="leave-form">%s %s</div></div>',
            sprintf(
                ( $req ? $required_indicator : '' )
            ),
            sprintf(
                '<input class="form-control bg-white border-0" placeholder="Your Email" style="height: 55px;" name="email" %s value="%s" size="30" maxlength="100" aria-describedby="email-notes"%s />',
                ( $html5 ? 'type="email"' : 'type="text"' ),
                esc_attr( $commenter['comment_author_email'] ),
                ( $req ? $required_attribute : '' )
            )
        ),
        'url'    => sprintf(
            '<div class="col-lg-6"><div class="leave-form">%s %s</div></div>',
            sprintf(
                '',
                
            ),
            sprintf(
                '<input class="form-control bg-white border-0" placeholder="Website" style="height: 55px;" name="url" %s value="%s" size="30" maxlength="200" />',
                ( $html5 ? 'type="url"' : 'type="text"' ),
                esc_attr( $commenter['comment_author_url'] )
            )
        ),
    );?>

</div>
<form>
<?php

    $fields = apply_filters( 'comment_form_default_fields', $field );

    $defaults = array(

       
        'comment_field'        => sprintf(
            '<div class="col-lg-6"><div class="leave-form">%s %s</div></div>',
            sprintf(
                $required_indicator
            ),
            '<textarea class="form-control bg-white border-0 mb-3" rows="5" placeholder="Comment" name="comment" cols="45" rows="8" maxlength="65525"' . $required_attribute . '></textarea>',
            
        ),
        'fields'               => $fields,
        'label_submit'         => __( 'Leave Your Comment' ),
        'title_reply'          => __( 'Leave A Comment' ),
        'title_reply_before'   => '<div class="section-title section-title-sm position-relative pb-3 mb-4"><h3>',
        'title_reply_after'    => '</h3></div>',
        'class_form'           => 'row',
        'class_submit'         => 'btn btn-primary w-100 py-3',
        'submit_field'         => ' <div class="col-12">%1$s %2$s</div>',
    

    );


    comment_form($defaults);
    ?>

</div><!-- #comments -->
