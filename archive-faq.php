<?php get_header();

    $args = array('post_type' => 'faq', 'number' => '999');
    $terms = get_terms( 'faq-category',
            [
                'hide_empty' => true,
                'orderby' => 'wpse_last_word',
            ] , $args );

?>


  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/faq_index.css">
</head>

<body id="faq_index">
  <!-- header -->
  <header>
    <div class="header_left">
      <a href="<?php home_url(); ?>">
        <h1>物流・配送・ロジ地図システム<span>選定.com</span></h1>
      </a>
    </div>
    <ul class="header_right space_between">
      <li class="pc">
        <a href="#" class="btn_red center opacity">ご相談・お問合わせ</a>
      </li>
      <li class="pc">
        <a href="#" class="btn_orange center opacity">資料ダウンロード</a>
      </li>
      <li>
        <a href="<?php home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
      </li>
    </ul>
  </header>

  <!-- main -->
  <div class="page_title">
    <div class="container">
      <h1>よくある質問</h1>
    </div>
  </div>
  <div class="container">
    <div class="main">
      <div class="current_page">
        <p>TOP ＞よくある質問</p>
      </div>
      <div class="article">
        <div class="article_content">
          <p class="about_faq">物流、配送、ロジスティクス分野で、地図システムの利用を検討されている方々から多くお問い合わせいただく質問とその回答です。</p>

          <?php
            foreach ( $terms as $term ) {
          ?>
          <ul class="faq_list">
            <h2><?php echo $term->name; ?></h2>
            <?php
                $second_query = new WP_Query( array(
                    'post_type' => 'faq',
                    'tax_query' => array(
                                array(
                                    'taxonomy' => 'faq-category',
                                    'field' => 'id',
                                    'terms' => $term->term_id,
                                    'operator'=> 'IN'
                                )),
                    'ignore_sticky_posts' => 1,
                    'posts_per_page' => -1,
                ) );
            
                if ($second_query->have_posts()) {
                    while ($second_query->have_posts() ) : $second_query->the_post(); ?>
                        <li>
                            <div class="question accordion">
                                <h2 class="center">Q</h2>
                                <h3><?php echo get_post_meta( $post->ID, 'question', true); ?></h3>
                                <span class="accordion_open"><img src="<?php echo get_template_directory_uri(); ?>/img/arrow_down.png"></span><span class="accordion_close"><img
                                    src="<?php echo get_template_directory_uri(); ?>/img/arrow_up.png"></span>
                            </div>
                            <div class="none">
                                <div class="answer">
                                <h2 class="center">A</h2>
                                <p>
                                    <?php echo get_post_meta( $post->ID, 'answer', true); ?>
                                </p>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; wp_reset_query();
                }
            ?>
          </ul>
          <?php } ?>
          <a href="<?php home_url(); ?>" class="btn_back">TOPページへ戻る</a>
        </div>
        
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

  <!-- footer -->
  <footer>
    <div class="footerWrapper">

      <div class="footerInner">
        <div class="footerLeft">
          <div class="footerNav">
            <b><a
                href="https://www.esrij.com/getting-started/#_ga=2.211166998.2042504841.1616899066-1345194190.1616899066"
                target="_blank">GIS をはじめよう</a></b><br>
            <a href="https://www.esrij.com/getting-started/what-is-gis/" target="_blank">GIS とは</a><br>
            <a href="https://www.esrij.com/gis-guide/" target="_blank">GIS 基礎解説</a><br>
            <a href="https://www.esrij.com/getting-started/what-is-gis/" target="_blank">使ってみる</a><br>
            <a href="https://www.esrij.com/getting-started/portals/" target="_blank">ポータルサイト</a><br>
            <a href="https://www.esrij.com/getting-started/learn-more/" target="_blank">もっと学ぶ</a><br>
          </div>

          <div class="footerNav">
            <b><a href="https://www.esrij.com/products/" target="_blank">製品</a></b><br>
            <a href="https://www.esrij.com/products/all-products/" target="_blank">製品一覧</a><br>
            <a href="https://www.esrij.com/products/all-environments/" target="_blank">動作環境一覧</a><br>
            <a href="https://www.esrij.com/products/all-formats/" target="_blank">対応データ一覧</a><br>
            <a href="https://www.esrij.com/products/all-prices/" target="_blank">製品価格一覧</a><br>
            <a href="https://www.esrij.com/products/all-downloads/" target="_blank">ダウンロード一覧</a><br>
            <a href="https://www.esrij.com/products/programs/" target="_blank">利用支援プログラム</a><br>
          </div>

          <div class="footerNav">
            <b><a href="https://www.esrij.com/services/" target="_blank">サービス</a></b><br>
            <a href="https://www.esrij.com/services/maintenance/" target="_blank">製品サポートサービス</a><br>
            <a href="https://www.esrij.com/services/dev-support/" target="_blank">開発者サポート</a><br>
            <a href="https://www.esrij.com/services/consulting/" target="_blank">コンサルティング</a><br>
          </div>

          <div class="footerNav">
            <b><a href="https://www.esrij.com/training/" target="_blank">トレーニング</a></b><br>
            <a href="https://www.esrij.com/training/details/" target="_blank">サービス詳細</a><br>
            <a href="https://www.esrij.com/training/courses/" target="_blank">コース一覧</a><br>
            <a href="https://www.esrij.com/training/schedules/" target="_blank">スケジュール</a><br>
            <b><a href="https://www.esrij.com/support/esri/" target="_blank">サポート</a></b><br>
            <a href="https://www.esrij.com/support/esri/" target="_blank">Esri 製品サポート</a><br>
            <a href="https://www.esrij.com/support/envi/" target="_blank">ENVI 製品サポート</a><br>
            <a href="https://www.esrij.com/support/dev_support/" target="_blank">開発者サポート</a><br>
          </div>

          <div class="footerNav">
            <b><a href="https://www.esrij.com/events/" target="_blank">イベント</a></b><br>
            <a href="https://www.esrij.com/events/gcf/gcf2018/" target="_blank">GIS コミュニティフォーラム</a><br>
            <a href="https://www.esrij.com/events/uc/uc2018/" target="_blank">Esri ユーザー会</a><br>
            <a href="https://www.esrij.com/events/past/" target="_blank">過去のイベント</a><br>
          </div>

          <div class="footerNav">
            <b><a href="https://www.esrij.com/about/" target="_blank">会社情報</a></b><br>
            <a href="https://www.esrij.com/about/outline/" target="_blank">会社概要</a><br>
            <a href="https://www.esrij.com/about/access/headquarters/" target="_blank">オフィス所在地</a><br>
            <a href="https://www.esrij.com/about/recruit/" target="_blank">採用情報</a><br>
            <a href="https://www.esrij.com/about/esri/vision/" target="_blank">Esri について</a><br>
          </div>
        </div>

        <div class="footerRight">
          <div class="frLogo"><img src="https://business-map.esrij.com/cms/wp-content/uploads/2018/02/footerLogo2.png"
              alt="Esri Japan Corporation."></div>
          <div class="frLinks"><a href="https://www.esrij.com/sitemap/" target="_blank">サイトマップ</a> | <a
              href="https://www.esrij.com/legal/policy/" target="_blank">ポリシー</a> | <a
              href="https://www.esrij.com/legal/privacy/" target="_blank">個人情報保護方針</a></div>
          <div class="cpright">Copyright© 2002-2020 Esri Japan Corporation. All rights reserved.</div>
        </div>

        <div class="footerClear"></div>
      </div>

    </div>
  </footer>


<?php get_footer(); ?>