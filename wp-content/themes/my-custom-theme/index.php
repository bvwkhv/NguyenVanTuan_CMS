<?php get_header(); ?>

<main class="site-main">
    <div class="post-container">
        <?php if ( have_posts() ) : ?>
            <div class="custom-post-list">
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                        
                        <!-- Cột hiển thị Ngày / Tháng bên trái -->
                        <div class="post-date-box">
                            <span class="day"><?php echo get_the_date('d'); ?></span>
                            <span class="month">THÁNG <?php echo get_the_date('m'); ?></span>
                        </div>
                        
                        <!-- Cột hiển thị Tiêu đề và Mô tả bên phải -->
                        <div class="post-content-box">
                            <h2 class="post-title">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="post-excerpt">
                                <?php echo wp_trim_words( get_the_excerpt(), 22, '...' ); ?>
                            </div>
                        </div>

                    </article>
                <?php endwhile; ?>
            </div>

            <!-- Phân trang (nếu có nhiều bài) -->
            <div class="pagination">
                <?php the_posts_pagination( array('mid_size' => 2) ); ?>
            </div>

        <?php else : ?>
            <p>Hiện chưa có bài viết nào.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>