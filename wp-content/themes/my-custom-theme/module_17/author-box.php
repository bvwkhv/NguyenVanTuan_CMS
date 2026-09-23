<!-- author-box.php -->
<div class="author-box">
    <div class="author-avatar">
        <?php echo get_avatar( get_the_author_meta( 'ID' ), 80 ); ?>
    </div>
    <div class="author-info">
        <h4 class="author-name">
            Tác giả: <?php the_author_posts_link(); ?>
        </h4>
        <p class="author-bio">
            <?php 
            $author_bio = get_the_author_meta( 'description' );
            if ( $author_bio ) {
                echo esc_html( $author_bio );
            } else {
                echo 'Tác giả chưa cập nhật thông tin giới thiệu.';
            }
            ?>
        </p>
        <div class="author-more-posts">
            <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>">
                &rarr; Xem thêm bài viết của <?php echo get_the_author(); ?>
            </a>
        </div>
    </div>
</div>