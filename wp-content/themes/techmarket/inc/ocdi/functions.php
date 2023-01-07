<?php

function techmarket_ocdi_import_files() {
    return array(
        array(
            'import_file_name'             => 'Gardenmarket',
            'categories'                   => array( 'Garden' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/dummy-data/gardenmarket/dummy-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/dummy-data/gardenmarket/widgets.wie',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'assets/dummy-data/gardenmarket/redux-options.json',
                    'option_name' => 'techmarket_options',
                ),
            ),
            'import_preview_image_url'     => '//transvelo.github.io/techmarket/assets/images/preview/gardenmarket-preview.png',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'techmarket' ),
            'preview_url'                  => 'https://demo2.chethemes.com/gardenmarket/',
        ),
        array(
            'import_file_name'             => 'Glassmarket',
            'categories'                   => array( 'Glass' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/dummy-data/glassmarket/dummy-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/dummy-data/glassmarket/widgets.wie',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'assets/dummy-data/glassmarket/redux-options.json',
                    'option_name' => 'techmarket_options',
                ),
            ),
            'import_preview_image_url'     => '//transvelo.github.io/techmarket/assets/images/preview/glassmarket-preview.png',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'techmarket' ),
            'preview_url'                  => 'https://demo2.chethemes.com/glassmarket/',
        ),
        array(
            'import_file_name'             => 'Multimarket',
            'categories'                   => array( 'Multi' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/dummy-data/multimarket/dummy-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/dummy-data/multimarket/widgets.wie',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'assets/dummy-data/multimarket/redux-options.json',
                    'option_name' => 'techmarket_options',
                ),
            ),
            'import_preview_image_url'     => '//transvelo.github.io/techmarket/assets/images/preview/multimarket-preview.png',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'techmarket' ),
            'preview_url'                  => 'https://demo2.chethemes.com/multimarket/',
        ),
        array(
            'import_file_name'             => 'Organicmarket',
            'categories'                   => array( 'Organic' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/dummy-data/organicmarket/dummy-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/dummy-data/organicmarket/widgets.wie',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'assets/dummy-data/organicmarket/redux-options.json',
                    'option_name' => 'techmarket_options',
                ),
            ),
            'import_preview_image_url'     => '//transvelo.github.io/techmarket/assets/images/preview/organicmarket-preview.png',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'techmarket' ),
            'preview_url'                  => 'https://demo2.chethemes.com/organicmarket/',
        ),
        array(
            'import_file_name'             => 'Shoesmarket',
            'categories'                   => array( 'Shoes' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/dummy-data/shoesmarket/dummy-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/dummy-data/shoesmarket/widgets.wie',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'assets/dummy-data/shoesmarket/redux-options.json',
                    'option_name' => 'techmarket_options',
                ),
            ),
            'import_preview_image_url'     => '//transvelo.github.io/techmarket/assets/images/preview/shoesmarket-preview.png',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'techmarket' ),
            'preview_url'                  => 'https://demo2.chethemes.com/shoesmarket/',
        ),
        array(
            'import_file_name'             => 'Sportsmarket',
            'categories'                   => array( 'Sports' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/dummy-data/sportsmarket/dummy-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/dummy-data/sportsmarket/widgets.wie',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'assets/dummy-data/sportsmarket/redux-options.json',
                    'option_name' => 'techmarket_options',
                ),
            ),
            'import_preview_image_url'     => '//transvelo.github.io/techmarket/assets/images/preview/sportsmarket-preview.png',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'techmarket' ),
            'preview_url'                  => 'https://demo2.chethemes.com/sportsmarket/',
        ),
        array(
            'import_file_name'             => 'Techmarket',
            'categories'                   => array( 'Electronics' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/dummy-data/techmarket/dummy-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/dummy-data/techmarket/widgets.wie',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'assets/dummy-data/techmarket/redux-options.json',
                    'option_name' => 'techmarket_options',
                ),
            ),
            'import_preview_image_url'     => '//transvelo.github.io/techmarket/assets/images/preview/techmarket-preview.png',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately. Import process may take 15-20 minutes.', 'techmarket' ),
            'preview_url'                  => 'https://demo2.chethemes.com/techmarket/',
        ),
        array(
            'import_file_name'             => 'Techmarket - Elementor',
            'categories'                   => array( 'Electronics' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/dummy-data/elementor/dummy-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/dummy-data/elementor/widgets.wie',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'assets/dummy-data/elementor/redux-options.json',
                    'option_name' => 'techmarket_options',
                ),
            ),
            'import_preview_image_url'     => '//transvelo.github.io/techmarket/assets/images/preview/techmarket-preview.png',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately. Import process may take 15-20 minutes.', 'techmarket' ),
            'preview_url'                  => 'https://demo2.chethemes.com/techmarket/',
        ),
        array(
            'import_file_name'             => 'Techmarket - King Composer',
            'categories'                   => array( 'Electronics' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/dummy-data/kingcomposer/dummy-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/dummy-data/kingcomposer/widgets.wie',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'assets/dummy-data/kingcomposer/redux-options.json',
                    'option_name' => 'techmarket_options',
                ),
            ),
            'import_preview_image_url'     => '//transvelo.github.io/techmarket/assets/images/preview/techmarket-preview.png',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately. Import process may take 15-20 minutes.', 'techmarket' ),
            'preview_url'                  => 'https://demo2.chethemes.com/techmarket/',
        ),
        array(
            'import_file_name'             => 'Techmarket - Visual Composer',
            'categories'                   => array( 'Electronics' ),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'assets/dummy-data/visualcomposer/dummy-data.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'assets/dummy-data/visualcomposer/widgets.wie',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'assets/dummy-data/visualcomposer/redux-options.json',
                    'option_name' => 'techmarket_options',
                ),
            ),
            'import_preview_image_url'     => '//transvelo.github.io/techmarket/assets/images/preview/techmarket-preview.png',
            'import_notice'                => esc_html__( 'After you import this demo, you will have to setup the slider separately. Import process may take 15-20 minutes.', 'techmarket' ),
            'preview_url'                  => 'https://demo2.chethemes.com/techmarket/',
        ),
    );
}

function techmarket_ocdi_after_import_setup( $selected_import ) {
    
    // Assign menus to their locations.
    $primary_menu           = get_term_by( 'name', 'Primary Menu', 'nav_menu' );
    $secondary_menu         = get_term_by( 'name', 'Secondary Menu', 'nav_menu' );
    $handheld_menu          = get_term_by( 'name', 'Departments Menu', 'nav_menu' );
    $departments_menu       = get_term_by( 'name', 'Departments Menu', 'nav_menu' );
    $navbar_primary_menu    = get_term_by( 'name', 'Navbar Primary', 'nav_menu' );
    $topbar_left_menu       = get_term_by( 'name', 'Top Bar Left', 'nav_menu' );
    $topbar_right_menu      = get_term_by( 'name', 'Top Bar Right', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'primary'           => $primary_menu->term_id,
            'secondary'         => $secondary_menu->term_id,
            'handheld'          => $handheld_menu->term_id,
            'departments-menu'  => $departments_menu->term_id,
            'navbar-primary'    => $navbar_primary_menu->term_id,
            'topbar-left'       => $topbar_left_menu->term_id,
            'topbar-right'      => $topbar_right_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home v1' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    if ( 'Gardenmarket' === $selected_import['import_file_name'] ) {
        $front_page_id = get_page_by_title( 'Home v6' );
    } elseif ( 'Glassmarket' === $selected_import['import_file_name'] ) {
        $front_page_id = get_page_by_title( 'Home v9' );
    } elseif ( 'Multimarket' === $selected_import['import_file_name'] ) {
        $front_page_id = get_page_by_title( 'Home v12' );
    } elseif ( 'Organicmarket' === $selected_import['import_file_name'] ) {
        $front_page_id = get_page_by_title( 'Home v1' );
    } elseif ( 'Shoesmarket' === $selected_import['import_file_name'] ) {
        $front_page_id = get_page_by_title( 'Home v10' );
    } elseif ( 'Sportsmarket' === $selected_import['import_file_name'] ) {
        $front_page_id = get_page_by_title( 'Home v11' );
    }

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}


function techmarket_ocdi_modify_intro_text( $plugin_intro_text ) {
    ob_start(); ?>
    <div class="ocdi__intro-notice  notice  notice-warning  is-dismissible">
        <p><?php esc_html_e( 'Before you begin, make sure all the required plugins are activated.', 'techmarket' ); ?></p>
    </div>

    <div class="ocdi__intro-text">
        <p class="about-description">
            <?php esc_html_e( 'Importing demo data (post, pages, images, theme settings, ...) is the easiest way to setup your theme.', 'techmarket' ); ?>
            <?php esc_html_e( 'It will allow you to quickly edit everything instead of creating content from scratch.', 'techmarket' ); ?>
        </p>

        <hr>

        <p><?php esc_html_e( 'When you import the data, the following things might happen:', 'techmarket' ); ?></p>

        <ul>
            <li><?php esc_html_e( 'No existing posts, pages, categories, images, custom post types or any other data will be deleted or modified.', 'techmarket' ); ?></li>
            <li><?php esc_html_e( 'Posts, pages, images, widgets, menus and other theme settings will get imported.', 'techmarket' ); ?></li>
            <li><?php printf( esc_html__( 'Please click on the Import button only once and wait, %s it can take upto 20 minutes %s depending on your server configuration and bandwidth.', 'techmarket' ),
            '<strong>', '</strong>' ); ?></li>
            <li><?php printf( esc_html__( 'After completing one click import, please continue from %s Widget Assign %s to complete the setup', 'techmarket' ), 
            '<a href="https://www.youtube.com/playlist?list=PLYq0ehQTXpCSQHCF38ILYovLESiLu66IT" target="_blank"><strong>', '</strong></a>' ); ?></li>
            <li><?php printf( esc_html__( 'If you face any issues while importing, please do not worry, you can reach our %s theme support %s and we\'ll help you resolve the issue as soon as possible', 'techmarket' ),
            '<a href="https://madrasthemes.freshdesk.com/" target="_blank"><strong>', '</strong></a>' ); ?></li>
        </ul>

        <hr>
    </div>
    <?php $plugin_intro_text = ob_get_clean();
    return $plugin_intro_text;
}