        <div class="sidebar pc">
          <ul class="sidebar_menu">
            <p class="center">ソリューション</p>
            <?php
                $query = new WP_Query( array(
                    'post_type' => 'solution',
                    'posts_per_page' => 5,
                ) );
            
                if ($query->have_posts()) {
                    while ($query->have_posts() ) : $query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php endwhile; wp_reset_query();
                }
            ?>
            <a href="<?php home_url(); ?>solution" class="btn_index">
              一覧を見る<span>></span>
            </a>
          </ul>
          <ul class="sidebar_menu">
            <p class="center">お役立ち情報</p>
            <?php
                $query = new WP_Query( array(
                    'post_type' => 'information',
                    'posts_per_page' => 5,
                ) );
            
                if ($query->have_posts()) {
                    while ($query->have_posts() ) : $query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php endwhile; wp_reset_query();
                }
            ?>
            <a href="<?php home_url(); ?>information" class="btn_index">
              一覧を見る<span>></span>
            </a>
          </ul>
          <ul class="sidebar_menu">
            <p class="center">よくある質問</p>
            <?php
                $query = new WP_Query( array(
                    'post_type' => 'faq',
                    'posts_per_page' => 5,
                ) );
            
                if ($query->have_posts()) {
                    while ($query->have_posts() ) : $query->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>"><?php echo get_post_meta( $post->ID, 'question', true); ?></a>
                    </li>
                    <?php endwhile; wp_reset_query();
                }
            ?>
            <a href="<?php home_url(); ?>faq" class="btn_index">
              一覧を見る<span>></span>
            </a>
          </ul>
        </div>