    <footer>
        <div class="footer-inner">
            <a href="#" class="page-top">
                <span>Page Top</span>
            </a>
            <ul class="footer-left">
                <li><img src="<?php echo esc_url( get_template_directory_uri() . '/img/logo01.png' ); ?>" class="logo" alt="it.renovation"/></li>
                <li  class="shop-info">
                    <p>
                        〒812-0011<br>
                        福岡県福岡市博多区博多駅中央街1-1<br>
                        定休日：月・祝日<br>
                        TEL：000 - 0000 - 0000
                    </p>
                    <a class="map" href="https://maps.app.goo.gl/vZkQt1kLE2LTwKaY6" target="_blank">Google map</a>
                </li>
            </ul>
            <ul class="footer-right">
                <li>
                    <ul class="footer-menu">
                        <li><a class="line-btn" href="<?php echo esc_url( home_url() ); ?>">HOME</a></li>
                        <li><a class="line-btn" href="<?php echo esc_url( home_url( '/about' ) ); ?>">ABOUT</a></li>
                        <li><a class="line-btn" href="<?php echo esc_url( home_url( '/gallery' ) ); ?>">GALLERY</a></li>
                        <li><a class="line-btn" href="<?php echo esc_url( home_url( '/service' ) ); ?>">SERVICE</a></li>
                        <li><a class="line-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>#flow">FLOW</a></li>
                        <li><a class="line-btn" href="<?php echo esc_url( home_url( '/' ) ); ?>#column">COLUMN</a></li>
                        <li><a class="line-btn" href="<?php echo esc_url( home_url( '/q&a' ) ); ?>">Q&A</a></li>
                    </ul>
                </li>
                <li>
                    <ul class="footer-contact-list">
                        <li><a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/instaglam.png' ); ?>" class="instagram"/></a></li>
                        <li><a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/material.png' ); ?>" class="資料ダウンロード"/></a></li>
                        <li><a href="<?php echo esc_url( home_url( '/contact' ) ); ?>"><img src="<?php echo esc_url( get_template_directory_uri() . '/img/free-consul.png' ); ?>" class="無料相談"/></a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </footer>
    <?php wp_footer(); ?>
</body>

</html>