<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-columns">
            
            <!-- Cột 1: Bài viết mới (Recent Posts) -->
            <div class="footer-col">
                <h3 class="footer-title">Comment</h3>
                <ul class="footer-list">
                    <?php
                    $recent_posts = wp_get_recent_posts( array( 'numberposts' => 5, 'post_status' => 'publish' ) );
                    foreach ( $recent_posts as $post ) : ?>
                        <li>
                            <a href="<?php echo get_permalink( $post['ID'] ); ?>">
                                &#187; <?php echo $post['post_title']; ?>
                            </a>
                        </li>
                    <?php endforeach; wp_reset_query(); ?>
                </ul>
            </div>

            <!-- Cột 2: Chuyên mục (Categories) -->
            <div class="footer-col">
                <h3 class="footer-title">Categories</h3>
                <ul class="footer-list">
                    <?php
                    $categories = get_categories( array( 'number' => 5 ) );
                    foreach ( $categories as $category ) : ?>
                        <li>
                            <a href="<?php echo get_category_link( $category->term_id ); ?>">
                                &#187; <?php echo $category->name; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Cột 3: Bình luận mới (Recent Comments) -->
            <div class="footer-col">
                <h3 class="footer-title">Last posts</h3>
                <ul class="footer-list">
                    <?php
                    $comments = get_comments( array( 'number' => 5, 'status' => 'approve' ) );
                    foreach ( $comments as $comment ) : ?>
                        <li>
                            <a href="<?php echo get_comment_link( $comment->comment_ID ); ?>">
                                &#187; <?php echo get_comment_author( $comment->comment_ID ); ?>: <?php echo wp_trim_words( $comment->comment_content, 5 ); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>

        <!-- Mạng xã hội & Bản quyền -->
        <div class="footer-bottom">
            <div class="social-links">
                <a href="#"><i class="fa-brands fa-facebook-f"></i> f</a>
                <a href="#"><i class="fa-brands fa-twitter"></i> y</a>
                <a href="#"><i class="fa-brands fa-instagram"></i> ig</a>
                <a href="#"><i class="fa-brands fa-google-plus-g"></i> G+</a>
                <a href="#"><i class="fa-regular fa-envelope"></i> &#9993;</a>
            </div>
            <p class="copyright-info">
                National Transaction Corporation is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]
            </p>
            <p class="copyright-text">
                &copy; All right Reversed. Sunlimetech
            </p>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>