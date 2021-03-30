<?php
    // 不要なメニューを非表示
    flush_rewrite_rules();
    function remove_menus () {
        global $menu;
        unset($menu[5]);	// 投稿
        unset($menu[25]);	// コメント
    }
    add_action('admin_menu', 'remove_menus', 999);

    // カスタム投稿とタクソノミーを追加
	add_action('init', function(){
        // ソリューション
        register_post_type('solution',
            array(
                'labels' => array(
					'name' => __('ソリューション'),
					'singular_name' => __('ソリューション')
				),
				'rewrite' => array(
					'slug' => 'solution',
					'with_front' => false
				),
				'hierarchical' => false,
				'has_archive' => true,
				'menu_position' => 21,
				'public' => true,
                "supports" => [ "title", "editor", "thumbnail" ],
            )
        );

		// ソリューション・タグ
		register_taxonomy(
			'tag',
			'solution',
			array(
				'update_count_callback' => '_update_post_term_count',
				'label' => 'タグ',
				'labels' => array(
					'singular_name' => 'タグ',
					'menu_name' => 'タグ',
				),
				'public' => true,
				'show_ui' => true,
				'show_admin_column' => false,
				'hierarchical' => true,
				'rewrite' => array(
					'slug' => 'tag',
					'with_front' => false
				),
			)
		);

        // お役立ち情報
        register_post_type('information',
            array(
                'labels' => array(
					'name' => __('お役立ち情報'),
					'singular_name' => __('お役立ち情報')
				),
				'rewrite' => array(
					'slug' => 'information',
					'with_front' => false
				),
				'hierarchical' => false,
				'has_archive' => true,
				'menu_position' => 22,
				'public' => true,
				// "supports" => false,
                "supports" => [ "title", "editor", "thumbnail" ],
            )
        );

        // Q&A
        register_post_type('faq',
            array(
                'labels' => array(
					'name' => __('Q&A'),
					'singular_name' => __('Q&A')
				),
				'rewrite' => array(
					'slug' => 'faq',
					'with_front' => false
				),
				'hierarchical' => false,
				'has_archive' => true,
				'menu_position' => 23,
				'public' => true,
				"supports" => false,
            )
        );

		// カテゴリー
		register_taxonomy(
			'faq-category',
			'faq',
			array(
				'update_count_callback' => '_update_post_term_count',
				'label' => 'カテゴリー',
				'labels' => array(
					'singular_name' => 'カテゴリー',
					'menu_name' => 'カテゴリー',
				),
				'public' => true,
				'show_ui' => true,
				'show_admin_column' => false,
				'hierarchical' => true,
				'rewrite' => array(
					'slug' => 'faq-category',
					'with_front' => false
				),
			)
		);
	});
?>
