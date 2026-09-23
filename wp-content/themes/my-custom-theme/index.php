<?php get_header(); ?>

<main class="site-main">
    <div class="main-layout-container">
        
        <!-- Cột trái: Archive (Module 11) -->
        <aside class="sidebar-left">
            <div class="widget-box">
                <h3 class="widget-title">Archives</h3>
                <ul class="widget-list">
                    <?php wp_get_archives( array( 'type' => 'monthly', 'limit' => 6 ) ); ?>
                </ul>
            </div>
        </aside>

        <!-- Cột giữa: Content (Module 2) -->
        <section class="content-center">
            <?php if ( have_posts() ) : ?>
                <div class="custom-post-list">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                            <div class="post-date-box">
                                <span class="day"><?php echo get_the_date('d'); ?></span>
                                <span class="month">THÁNG <?php echo get_the_date('m'); ?></span>
                            </div>
                            <div class="post-content-box">
                                <h2 class="post-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <div class="post-excerpt">
                                    <?php echo wp_trim_words( get_the_excerpt(), 20, '...' ); ?>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; ?>
                </div>
            <?php else : ?>
                <p>Chưa có bài viết nào.</p>
            <?php endif; ?>
        </section>

        <!-- Cột phải: Comments (Module 12) -->
        <aside class="sidebar-right">
            <div class="widget-box">
                <h3 class="widget-title">Comments</h3>
                <ul class="widget-list comment-list">
                    <?php
                    // Lấy ra 5 bình luận mới nhất đã được duyệt
                    $recent_comments = get_comments( array(
                        'number' => 5,
                        'status' => 'approve'
                    ) );

                    if ( ! empty( $recent_comments ) ) :
                        foreach ( $recent_comments as $comment ) : ?>
                            <li>
                                <a href="<?php echo esc_url( get_comment_link( $comment->comment_ID ) ); ?>">
                                    <?php echo esc_html( wp_trim_words( $comment->comment_content, 8, '...' ) ); ?>
                                </a>
                            </li>
                        <?php endforeach;
                    else : ?>
                        <li>Chưa có bình luận nào.</li>
                    <?php endif; ?>
                </ul>
            </div>
        </aside>

    </div>
</main>

<?php get_footer(); ?>