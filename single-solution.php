<?php get_header(); ?>


<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/solution_article.css">
<body id="solution_article">
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
      <h1>地図情報システム ソリューション</h1>
    </div>
  </div>
  <div class="container">
    <div class="main">
      <div class="current_page">
        <p>TOP　>　地図情報システム ソリューション 一覧 > <?php the_title(); ?></p>
      </div>
      <div class="article">
        <div class="article_content">
        <?php if(have_posts()): ?>
	      <?php the_post(); ?>
          <h2 class="article_title"><?php the_title(); ?></h2>
          <div class="flex">
            <div class="label center"><?php echo get_post_meta( $post->ID, 'tab', true); ?></div>
            <p class="company"><?php echo get_post_meta( $post->ID, 'company', true); ?></p>
          </div>
          <div class="overview">
            <div class="article_img">
              <img src="<?php the_post_thumbnail_url(); ?>">
            </div>
            <div>
              <div class="issue">
                <div class="left center">課題</div>
                <div class="right center"><?php echo get_post_meta( $post->ID, 'task', true); ?></div>
              </div>
              <div class="solution">
                <div class="left center">ソリューション</div>
                <div class="right center"><?php echo get_post_meta( $post->ID, 'solve', true); ?></div>
              </div>
            </div>
          </div>
          <div class="article_text">
            <?php the_content(); ?>
          </div>
          <div class="related_solution">
            <h2>関連したソリューション</h2>
            <ul class="solutions_list">
              <li>
                <a href="#"></a>
                <div class="solution_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/solution.png">
                  <p>配送エリアの管理</p>
                </div>
                <p class="solution_title">株式会社エバルス</p>
                <p>ArcGISのVRP（配車システム）で新しい物流センターの人件費、必要車数を約90％削減</p>
              </li>
              <li>
                <a href="#"></a>
                <div class="solution_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/solution.png">
                  <p>国内中堅企業</p>
                </div>
                <p class="solution_title">国内企業B社</p>
                <p>B社は、自動車、バイクなどに使うバッテリーを販売しているメーカーで、30社の販売代理店への配送効率化のために同システムを導入。</p>
              </li>
              <li>
                <a href="#"></a>
                <div class="solution_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/solution.png">
                  <p>国内中小企業</p>
                </div>
                <p class="solution_title">国内企業C社</p>
                <p>C社は、関西にある運送会社で、配送エリアの管理のため同システムを導入、効率的な配送ルートを生成し、ドライバーの稼働時間を30時間/月削減を実現した。</p>
              </li>
              <li>
                <a href="#"></a>
                <div class="solution_img">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/solution.png">
                  <p>海外大手企業</p>
                </div>
                <p class="solution_title">米国UPS 社</p>
                <p>自社配送ソリューションを活かしたまま、ESRIの地理情報システム導入で、約1.6億 kｍ走行距離を削減。</p>
              </li>
            </ul>
          </div>
          <a href="<?php home_url(); ?>solution" class="btn_back">ソリューション一覧に戻る</a>
        <?php endif; ?>
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