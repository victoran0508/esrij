<?php get_header();

    $args = array('post_type' => 'solution', 'number' => '999');
    $solution_tags = get_terms( 'tag',
            [
                'hide_empty' => true,
                'orderby' => 'wpse_last_word',
            ] , $args );

?>

</head>

<body id="top_page">
  <!-- header -->
  <header>
    <div class="header_left">
      <a href="<?php home_url(); ?>">
        <h1>物流・配送・ロジ地図システム<span>選定.com</span></h1>
      </a>
    </div>
    <ul class="header_right space_between">
      <li class="pc">
        <a href="https://www.esrij.com/form/solutions/logistics/" class="btn_red center opacity">ご相談・お問合わせ</a>
      </li>
      <li class="pc">
        <a href="https://go.esrij.com/sol_logistics_casestduies" class="btn_orange center opacity">資料ダウンロード</a>
      </li>
      <li>
        <a href="https://www.esrij.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
      </li>
    </ul>
  </header>

  <div class="main">
    <!-- top -->
    <section id="top">
      <h1 class="top_message"><span>地図</span>システム導入により</span>
        <br><span>最適</span>な物流を</span>
      </h1>
      <div class="top_right">
        <h2>システムで課題を解決</h2>
        <h3>な地図システムの導入でこのような課題を解決しませんか？
          <br>下記のタグから、地図システムによる物流・配送・ロジに関する
          ソリューションをご覧ください。
        </h3>
        <ul class="hashtag_list">
          <?php foreach ( $solution_tags as $term ) { ?>
          <li><a href="<?php home_url(); ?>solution?tag=<?php echo $term->term_id; ?>" class="large">＃<?php echo $term->name; ?></a></li>
          <?php } ?>
        </ul>
      </div>
    </section>

    <!-- merits -->
    <section id="merits">
      <div class="container">
        <div class="section_title">
          <h4>物流・配送・ロジスティクス業務に特化した</h4>
          <br>
          <h4>地図システム導入</h4>
          <h5>物流・配送・ロジの業務で地図システムを最大限に活用し、
            <br>業務効率化・最適な意思決定・配送コミュニケ―ションの向上を実現。
          </h5>
        </div>
        <ul class="merits_list">
          <li>
            <div class="merit_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/merit1.png">
            </div>
            <p>地図システム導入のメリット<span>1</span></p>
            <p>業務効率化によるコスト削減</p>
          </li>
          <li>
            <div class="merit_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/merit2.png">
            </div>
            <p>地図システム導入のメリット<span>2</span></p>
            <p>業務効率化によるコスト削減</p>
          </li>
          <li>
            <div class="merit_img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/merit3.png">
            </div>
            <p>地図システム導入のメリット<span>3</span></p>
            <p>業務効率化によるコスト削減</p>
          </li>
        </ul>
      </div>
    </section>

    <!-- reasons -->
    <section id="reasons">
      <div class="container">
        <div class="section_title">
          <h4>ESRIの地図システムが選ばれる</h4>
          <br>
          <h4><span>３つの理由</span></h4>
          <h5>ご検討中の方はお気軽にご相談・お問い合わせください！</h5>
        </div>
        <ul class="reasons_list">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/01.png" alt="01">
            <p>圧倒的な数を誇る GIS 機能</p>
            <p>
              ESRIは、データの取得、作成、管理、表示、検索、解析、共有など、地理空間情報を活用するための一連の機能をサービスとして提供します。ほとんどの機能要件は標準機能で実現できますので、<span>開発コストを最小限</span>に抑えることができます。
            </p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/02.png" alt="02">
            <p>豊富な導入実績</p>
            <p>ESRIは、50 年近くにわたって物流・配送会社向けのGISソリューションを提供し続けているGISのリーディングカンパニーであり、そのソフトウェアは<span>世界最大のシェア</span>（＊）を誇ります。</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/03.png" alt="03">
            <p>導入の容易性</p>
            <p>
              ESRIが提供するArcGISシステムでは、無償のオンライン地図サービスを提供しており、各種アプリからアクセスしてすぐに汎用的な業務で利用することができます。また、<span>特定の用途に対応したアプリを簡単に作成できるアプリビルダーやテンプレートも提供</span>しています。
            </p>
          </li>
        </ul>
      </div>
    </section>

    <!-- features -->
    <section id="features">
      <div class="container">
        <div class="section_title">
          <h4>物流・配送・ロジ地図システム.comが提供する</h4>
          <br>
          <h4>ソリューションの特長</h4>
          <h5>お客様のニーズに寄り添ったサービスを提供します！</h5>
        </div>
        <ul class="reasons_list">
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/feature.png">
            <p>マップデータから
              <br>システムまで
              <br>一貫したサービスを
              <br>提供します
            </p>
            <p>ESRIで50年近くに渡って蓄積した豊富なマップデータだけでなく、マップを活用するための最適データを提供しています。</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/feature.png">
            <p>リアルタイムで配車、
              <br>荷物の情報を
              <br>把握できます
            </p>
            <p>医薬品や生鮮食品などの特別の荷物の状況をリアルタイムで把握できます。</p>
          </li>
          <li>
            <img src="<?php echo get_template_directory_uri(); ?>/img/feature.png">
            <p>システム活用ための
              <br>専門性高い
              <br>コンサルティング
              <br>サービス
            </p>
            <p>GIS を導入するユーザおよびそれを支援するシステム インテグレータなどの業務を支援するサービスを提供しています。</p>
          </li>
        </ul>
      </div>
    </section>

    <!-- date -->
    <section id="data">
      <div class="container">
        <div class="section_title">
          <h4>日本をはじめ、世界中の地図情報と紐づいた</h4>
          <br>
          <h4>データを活用可能</h4>
          <h5>あらゆるデータを地図システムと組み合わせ、
            <br>経営判断の高速・高精度化、業務効率化、情報の見える化、リアルタイム共有を実現できます。
          </h5>
        </div>
        <ul class="data_list">
          <li>
            <p>通行データ</p>
            <p>（履歴／リアルタイム）</p>
          </li>
          <li>
            <p>モービルアイデータ</p>
          </li>
          <li>
            <p>気象・災害データ </p>
            <p>（過去実績／リアルタイム）</p>
          </li>
          <li>
            <p>マーケットデータ</p>
            <p>（事業所数・人口・平均所得等）</p>
          </li>
          <li>
            <p>道路オプションデータ</p>
            <p>（交通事故・標識（駐停車禁止）<br>・信号・土地勾配等）</p>
          </li>
          <li>
            <p>道路網データ</p>
          </li>
          <li>
            <p>人流・SNSデータ</p>
          </li>
          <li>
            <p>自社内に保有されている<br>各種位置情報データ</p>
          </li>
        </ul>
        <div class="more_data">
          <p>ESRIジャパンでは120以上の地図情報と紐づいたデータをご提供しています。
            <br>ストア未公開データもございますのでお気軽にお問合せください。
          </p>
          <a href="https://www.gisdata-store.biz/" class="btn_more">
            GISデータストア
            <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
          </a>
        </div>
      </div>
    </section>

    <!-- solutions -->
    <section id="solutions">
      <div class="container">
        <div class="section_title">
          <h4>地図情報システム ソリューション 一覧</h4>
        </div>
        <h5>従業員数30名程度の国内中小企業から
          <br>米国UPS 社（ユナイテッド・パーセル・サービス）、トヨタ自動車、ドイツ DHLなどの
          <br>国内外のリーディングカンパニー導入事例まで、多数のソリューションをご紹介！
        </h5>
        <ul class="solutions_list">
        <?php
            $query = new WP_Query( array(
                'post_type' => 'solution',
                // 'tax_query' => array(),
                // 'ignore_sticky_posts' => 1,
                'posts_per_page' => 6,
            ) );
        
            if ($query->have_posts()) {
                while ($query->have_posts() ) : $query->the_post(); ?>
                <li>
                  <a href="<?php the_permalink();  ?>"></a>
                  <div class="solution_img">
                    <img src="<?php the_post_thumbnail_url(); ?>">
                    <p><?php echo get_post_meta( $post->ID, 'tab', true); ?></p>
                  </div>
                  <p class="solution_title"><?php echo get_post_meta( $post->ID, 'company', true); ?></p>
                  <p><?php the_title(); ?></p>
                </li>
                <?php endwhile; wp_reset_query();
            }
        ?>
        </ul>
        <a href="<?php home_url(); ?>solution" class="btn_more">
          さらに読み込む
          <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
        </a>
      </div>
    </section>

    <!-- information -->
    <section id="information">
      <div class="container">
        <div class="section_title">
          <h4>地図システム活用のお役立ち情報</h4>
        </div>
        <h5>物流、配送、ロジスティクスにおけるGIS活用記事をご紹介しております。</h5>
        <ul class="information_list">
        <?php
            $query = new WP_Query( array(
                'post_type' => 'information',
                'posts_per_page' => 3,
            ) );
        
            if ($query->have_posts()) {
                while ($query->have_posts() ) : $query->the_post(); ?>
                <li>
                  <a href="<?php the_permalink(); ?>"></a>
                  <img src="<?php the_post_thumbnail_url(); ?>">
                  <p class="information_title"><?php the_title(); ?></p>
                  <p><?php echo get_post_meta( $post->ID, 'company', true); ?></p>
                </li>
                <?php endwhile; wp_reset_query();
            }
        ?>
        </ul>
        <a href="<?php home_url(); ?>information" class="btn_more">
          さらに読み込む
          <img src="<?php echo get_template_directory_uri(); ?>/img/arrow.png">
        </a>
      </div>
    </section>

    <!-- faq -->
    <section id="faq">
      <div class="container">
        <div class="section_title">
          <h4>よくある質問</h4>
        </div>
        <h5>物流、配送、ロジスティクス分野で、地図システムの利用を検討されている方々から
          <br>多くお問い合わせいただく質問とその回答です。
        </h5>
        <ul class="faq_list">
        <?php
            $query = new WP_Query( array(
                'post_type' => 'faq',
                'posts_per_page' => 5,
            ) );
        
            if ($query->have_posts()) {
                while ($query->have_posts() ) : $query->the_post(); ?>
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
                      <p><?php echo get_post_meta( $post->ID, 'answer', true); ?></p>
                    </div>
                  </div>
                </li>
                <?php endwhile; wp_reset_query();
            }
        ?>
        </ul>
      </div>
    </section>
  </div>

  <!-- footer -->
  <footer>
    <div class="footerWrapper">

      <div class="footerInner">
        <div class="footerLeft">
          <div class="footerNav">
            <b><a href="https://www.esrij.com/getting-started/#_ga=2.211166998.2042504841.1616899066-1345194190.1616899066"
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

  <!-- 固定要素 -->
  <div class="contact">
    <img src="<?php echo get_template_directory_uri(); ?>/img/webinar_icon.png">
    <p>ESRIジャパンでは導入を検討の
    <br>企業様向けにオンラインセミナーを実施しております。</p>
    <a href="https://go.esrij.com/sol_common_envents" class="btn_contact">
      お申し込みはこちら<img src="<?php echo get_template_directory_uri(); ?>/img/arrow_right.png" width="7">
    </a>
  </div>

<?php get_footer(); ?>
