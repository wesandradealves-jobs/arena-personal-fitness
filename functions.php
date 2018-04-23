<?php



require_once('class-tgm-plugin-activation.php');



$alunos_labels = array(



    'name' => _x('Alunos', 'post type general name'),



    'singular_name' => _x('Aluno', 'post type singular name'),



    'add_new' => _x('Add New', 'Aluno '),



    'add_new_item' => __('Add New Aluno '),



    'edit_item' => __('Edit Aluno '),



    'new_item' => __('New Aluno '),



    'view_item' => __('View Aluno '),



    'search_items' => __('Search alunos'),



    'not_found' =>  __('Nothing found'),



    'not_found_in_trash' => __('Nothing found in Trash'),



    'parent_item_colon' => ''



);







$alunos = array(



        'labels' => $alunos_labels,



        'public'             => false,



        'publicly_queryable' => true,



        'show_ui'            => true,



        'show_in_menu'       => true,



        'query_var'          => true,



        'rewrite'            => array( 'slug' => 'alunos', 'with_front' => true ),



        'capability_type'    => 'post',



        'has_archive'        => true,



        'hierarchical'       => true,



        'menu_position'      => -1,



        'supports'           => array( 'title', 'editor', 'custom-fields')



);





$atividades_labels = array(



    'name' => _x('Atividades', 'post type general name'),



    'singular_name' => _x('Atividade', 'post type singular name'),



    'add_new' => _x('Add New', 'Atividade '),



    'add_new_item' => __('Add New Atividade '),



    'edit_item' => __('Edit Atividade '),



    'new_item' => __('New Atividade '),



    'view_item' => __('View Atividade '),



    'search_items' => __('Search Atividades'),



    'not_found' =>  __('Nothing found'),



    'not_found_in_trash' => __('Nothing found in Trash'),



    'parent_item_colon' => ''



);







$atividades = array(



        'labels' => $atividades_labels,



        'public'             => false,



        'publicly_queryable' => true,



        'show_ui'            => true,



        'show_in_menu'       => true,



        'query_var'          => true,



        'rewrite'            => array( 'slug' => 'atividades', 'with_front' => true ),



        'capability_type'    => 'post',



        'has_archive'        => true,



        'hierarchical'       => true,



        'menu_position'      => -1,



        'supports'           => array( 'title', 'editor', 'thumbnail', 'custom-fields')



);







function atividades_taxonomies() {



    $labels = array(



        'name'              => _x( 'Categories', 'taxonomy general name' ),



        'singular_name'     => _x( 'Category', 'taxonomy singular name' ),



        'search_items'      => __( 'Search Categories' ),



        'all_items'         => __( 'All Categories' ),



        'parent_item'       => __( 'Parent Category' ),



        'parent_item_colon' => __( 'Parent Category:' ),



        'edit_item'         => __( 'Edit Category' ),



        'update_item'       => __( 'Update Category' ),



        'add_new_item'      => __( 'Add New Category' ),



        'new_item_name'     => __( 'New Category Name' ),



        'menu_name'         => __( 'Categories' ),



    );



    $args = array(



        'hierarchical'      => true, // Set this to 'false' for non-hierarchical taxonomy (like tags)



        'labels'            => $labels,



        'show_ui'           => true,



        'show_admin_column' => true,



        'query_var'         => true,



        'rewrite'           => array( 'slug' => 'categories' ),



    );



    register_taxonomy( 'atividades_categories', array( 'atividades' ), $args );



}







$objetivos_labels = array(



    'name' => _x('Objetivos', 'post type general name'),



    'singular_name' => _x('Objetivo', 'post type singular name'),



    'add_new' => _x('Add New', 'Objetivo '),



    'add_new_item' => __('Add New Objetivo '),



    'edit_item' => __('Edit Objetivo '),



    'new_item' => __('New Objetivo '),



    'view_item' => __('View Objetivo '),



    'search_items' => __('Search objetivos'),



    'not_found' =>  __('Nothing found'),



    'not_found_in_trash' => __('Nothing found in Trash'),



    'parent_item_colon' => ''



);







$objetivos = array(



        'labels' => $objetivos_labels,



        'public'             => true,



        'publicly_queryable' => true,



        'show_ui'            => true,



        'show_in_menu'       => true,



        'query_var'          => true,



        'rewrite'            => array( 'slug' => 'objetivos', 'with_front' => true ),



        'capability_type'    => 'post',



        'has_archive'        => true,



        'hierarchical'       => true,



        'menu_position'      => -1,



        'supports'           => array( 'title', 'editor', 'custom-fields', 'thumbnail')



);







$banners_labels = array(



    'name' => _x('Banners', 'post type general name'),



    'singular_name' => _x('Banner', 'post type singular name'),



    'add_new' => _x('Add New', 'Banner '),



    'add_new_item' => __('Add New Banner '),



    'edit_item' => __('Edit Banner '),



    'new_item' => __('New Banner '),



    'view_item' => __('View Banner '),



    'search_items' => __('Search banners'),



    'not_found' =>  __('Nothing found'),



    'not_found_in_trash' => __('Nothing found in Trash'),



    'parent_item_colon' => ''



);







$banners = array(



        'labels' => $banners_labels,



        'public'             => false,



        'publicly_queryable' => true,



        'show_ui'            => true,



        'show_in_menu'       => true,



        'query_var'          => true,



        'rewrite'            => array( 'slug' => 'banners', 'with_front' => true ),



        'capability_type'    => 'post',



        'has_archive'        => true,



        'hierarchical'       => true,



        'menu_position'      => -1,



        'supports'           => array( 'title', 'excerpt', 'thumbnail', 'custom-fields')



);







function radio_add_meta_box() {



    add_meta_box(



        'radio_sectionid', 'Mostrar botão?', 'radio_meta_box_callback', 'banners'



    ); 



}







function radio_meta_box_callback( $post ) {







    wp_nonce_field( 'radio_meta_box', 'radio_meta_box_nonce' );







    $value = get_post_meta( $post->ID, 'opcao', true ); //my_key is a meta_key. Change it to whatever you want







    ?>



    <input type="radio" name="opcao" value="1" <?php checked( $value, '1' ); ?> >Sim &nbsp; <input type="radio" name="opcao" value="0" <?php checked( $value, '0' ); ?> >Não







    <?php







}







function save_radio_meta_box_data( $post_id ) {







        if ( !isset( $_POST['radio_meta_box_nonce'] ) ) {



                return;



        }







        if ( !wp_verify_nonce( $_POST['radio_meta_box_nonce'], 'radio_meta_box' ) ) {



                return;



        }







        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {



                return;



        }







        if ( !current_user_can( 'edit_post', $post_id ) ) {



                return;



        }







        $new_meta_value = ( isset( $_POST['opcao'] ) ? sanitize_html_class( $_POST['opcao'] ) : '' );







        update_post_meta( $post_id, 'opcao', $new_meta_value );



}







// 







function regScripts() {



    wp_deregister_script('jquery');







    wp_register_script('jquery', (get_bloginfo('stylesheet_directory')."/node_modules/jquery/dist/jquery.min.js"));



    wp_register_script('materialize-css', (get_bloginfo('stylesheet_directory')."/node_modules/materialize-css/dist/js/materialize.min.js"));



    wp_register_script('owl.carousel', (get_bloginfo('stylesheet_directory')."/node_modules/owl.carousel/dist/owl.carousel.js"));



    wp_register_script('jquery.mask', (get_bloginfo('stylesheet_directory')."/node_modules/jquery-mask-plugin/dist/jquery.mask.js"));



    wp_register_script('functions.js', (get_bloginfo('stylesheet_directory')."/_assets/js/functions.js"));



    wp_register_script( 'validation', 'http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js', array( 'jquery' ) );







    wp_enqueue_script('jquery');

    

    wp_enqueue_script( 'jquery-ui-datepicker' );



    wp_enqueue_script('materialize-css');



    wp_enqueue_script('owl.carousel');



    wp_enqueue_script('jquery.mask');



    wp_enqueue_script('functions.js');



    wp_enqueue_script('jquery.mask');



    wp_enqueue_script( 'validation' );



    



    wp_enqueue_style('bootstrap', get_bloginfo('stylesheet_directory').'/node_modules/bootstrap/dist/css/bootstrap.min.css');



    wp_enqueue_style('materialize-css', get_bloginfo('stylesheet_directory').'/node_modules/materialize-css/dist/css/materialize.min.css');



    wp_enqueue_style('owl.carousel', get_bloginfo('stylesheet_directory').'/node_modules/owl.carousel/dist/assets/owl.carousel.min.css');



    wp_enqueue_style('owl.carousel-theme', get_bloginfo('stylesheet_directory').'/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css');



    wp_enqueue_style('css-reset', get_bloginfo('stylesheet_directory').'/node_modules/css-reset/reset.min.css');



    wp_enqueue_style('style', get_bloginfo('stylesheet_directory').'/style.css');



}







function remove_menus(){



  



    remove_menu_page( 'index.php' );                  //Dashboard



    remove_menu_page( 'jetpack' );                    //Jetpack* 



//   remove_menu_page( 'edit.php' );                   //Posts



  // remove_menu_page( 'upload.php' );                 //Media



//   remove_menu_page( 'edit.php?post_type=page' );    //Pages



    // remove_menu_page( 'edit-comments.php' );          //Comments



   ///remove_menu_page( 'themes.php' );                 //Appearance



  // remove_menu_page( 'plugins.php' );                //Plugins



//   remove_menu_page( 'users.php' );                  //Users



//   remove_menu_page( 'tools.php' );                  //Tools



  // remove_menu_page( 'options-general.php' );        //Settings



  



}







// 







function getrid() {



  remove_post_type_support( 'page', 'editor' );



//   remove_post_type_support( 'page', 'thumbnail' );



  remove_post_type_support( 'page', 'page-attributes' );



}







function df_terms_clauses($clauses, $taxonomy, $args) {



    if (!empty($args['post_type'])) {



        global $wpdb;



        $post_types = array();



        foreach($args['post_type'] as $cpt) {



            $post_types[] = "'".$cpt."'";



        }



        if(!empty($post_types)) {



            $clauses['fields'] = 'DISTINCT '.str_replace('tt.*', 'tt.term_taxonomy_id, tt.term_id, tt.taxonomy, tt.description, tt.parent', $clauses['fields']).', COUNT(t.term_id) AS count';



            $clauses['join'] .= ' INNER JOIN '.$wpdb->term_relationships.' AS r ON r.term_taxonomy_id = tt.term_taxonomy_id INNER JOIN '.$wpdb->posts.' AS p ON p.ID = r.object_id';



            $clauses['where'] .= ' AND p.post_type IN ('.implode(',', $post_types).')';



            $clauses['orderby'] = 'GROUP BY t.term_id '.$clauses['orderby'];



        }



    }



    return $clauses;



}







// 



// function add_taxonomies_to_pages() {



//  register_taxonomy_for_object_type( 'category', 'page' );



//  }



// if ( ! is_admin() ) {



//    add_action( 'pre_get_posts', 'category_and_tag_archives' );



   



// }



// function category_and_tag_archives( $wp_query ) {



//     $my_post_array = array('post','page');



    



//     if ( $wp_query->get( 'category_name' ) || $wp_query->get( 'cat' ) )



//        $wp_query->set( 'post_type', $my_post_array );



   



//    if ( $wp_query->get( 'tag' ) )



//        $wp_query->set( 'post_type', $my_post_array );



// }



// 



function themeslug_theme_customizer( $wp_customize ) {



    $wp_customize->add_setting( 'logo' );



    $wp_customize->add_setting( 'about_section_title' );



    $wp_customize->add_setting( 'about_section_text' );



    $wp_customize->add_setting( 'about_section_bg' );



    $wp_customize->add_setting( 'about_text_title' );



    $wp_customize->add_setting( 'about_text' );



    $wp_customize->add_setting( 'about_botao' );



    $wp_customize->add_setting( 'about_videoUrl_youtube' );



    $wp_customize->add_setting( 'about_videoUrl_webm' );



    $wp_customize->add_setting( 'about_videoUrl_mp4' );



    $wp_customize->add_setting(



        'sidebar_control',



        array(



            'default'   => '1',



            'transport' => 'postMessage'



        )



    );



    $wp_customize->add_setting( 'alunos_section_bg' );



    $wp_customize->add_setting( 'alunos_section_title' );



    $wp_customize->add_setting( 'sidebar_tag_texto' );



    $wp_customize->add_setting( 'sidebar_texto' );



    $wp_customize->add_setting( 'sidebar_botao_label' );



    $wp_customize->add_setting( 'sidebar_botao_url' );



    $wp_customize->add_setting( 'footer_section_bg' );



    $wp_customize->add_setting( 'endereco' );



    $wp_customize->add_setting( 'telefone' );



    $wp_customize->add_setting( 'chat' );



    $wp_customize->add_setting( 'email' );



    $wp_customize->add_setting( 'funcionamento' );



    $wp_customize->add_setting( 'instagram' );



    $wp_customize->add_setting( 'facebook' );



    



    // 







	$wp_customize->add_panel( 'header', array(



	    'priority' => 1,



	    'capability' => 'edit_theme_options',



	    'title' => __( 'Header')



	));



	$wp_customize->add_panel( 'sections', array(



	    'priority' => 1,



	    'capability' => 'edit_theme_options',



	    'title' => __( 'Sessões')



	));



	$wp_customize->add_panel( 'footer', array(



	    'priority' => 1,



	    'capability' => 'edit_theme_options',



	    'title' => __( 'Footer')



	));







    // 







    $wp_customize->add_section( 'logo_section' , array(



        'title'       => __( 'Logo', 'themeslug' ),



        'panel' => 'header',



        'priority'    => 1



    ));



    $wp_customize->add_section( 'about_us' , array(



        'title'       => __( 'Nos conheça', 'themeslug' ),



        'panel' => 'sections',



        'priority'    => 1



    ));



    $wp_customize->add_section( 'alunos' , array(



        'title'       => __( 'Alunos', 'themeslug' ),



        'panel' => 'sections',



        'priority'    => 1



    ));



    $wp_customize->add_section( 'sidebar' , array(



        'title'       => __( 'Sidebar', 'themeslug' ),



        'panel' => 'footer',



        'priority'    => 1



    ));



    $wp_customize->add_section( 'personalizar' , array(



        'title'       => __( 'Personalizar', 'themeslug' ),



        'panel' => 'footer',



        'priority'    => 1



    ));



    $wp_customize->add_section( 'informacoes' , array(



        'title'       => __( 'Informações', 'themeslug' ),



        'panel' => 'footer',



        'priority'    => 1



    ));



    $wp_customize->add_section( 'redes_sociais' , array(



        'title'       => __( 'Redes Sociais', 'themeslug' ),



        'panel' => 'footer',



        'priority'    => 1



    ));







    // 







    $wp_customize->add_control('instagram',  array(



        'label' => 'Instagram',



        'section' => 'redes_sociais',



        'type' => 'text',



        'settings' => 'instagram'



    ));



    $wp_customize->add_control('facebook',  array(



        'label' => 'Facebook',



        'section' => 'redes_sociais',



        'type' => 'text',



        'settings' => 'facebook'



    ));



    $wp_customize->add_control('funcionamento',  array(



        'label' => 'Funcionamento/Horários',



        'section' => 'informacoes',



        'type' => 'textarea',



        'settings' => 'funcionamento'



    ));



    $wp_customize->add_control('endereco',  array(



        'label' => 'Endereço',



        'section' => 'informacoes',



        'type' => 'text',



        'settings' => 'endereco'



    ));



    $wp_customize->add_control('telefone',  array(



        'label' => 'Telefone',



        'section' => 'informacoes',



        'type' => 'text',



        'settings' => 'telefone'



    ));



    $wp_customize->add_control('chat',  array(



        'label' => 'Chat/Whatsapp',



        'section' => 'informacoes',



        'type' => 'text',



        'settings' => 'chat'



    ));



    $wp_customize->add_control('email',  array(



        'label' => 'Email',



        'section' => 'informacoes',



        'type' => 'text',



        'settings' => 'email'



    ));



    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_section_bg', array(



        'label'    => __( 'Background da Sessão', 'themeslug' ),



        'section'  => 'personalizar',



        'settings' => 'footer_section_bg'



    ))); 



    $wp_customize->add_control('sidebar_botao_label',  array(



        'label' => 'Botão label',



        'section' => 'sidebar',



        'type' => 'text',



        'settings' => 'sidebar_botao_label'



    ));



    $wp_customize->add_control('sidebar_botao_url',  array(



        'label' => 'Botão URL',



        'section' => 'sidebar',



        'type' => 'text',



        'settings' => 'sidebar_botao_url'



    ));



    $wp_customize->add_control('sidebar_tag_texto',  array(



        'label' => 'Texto da Tag',



        'section' => 'sidebar',



        'type' => 'textarea',



        'settings' => 'sidebar_tag_texto'



    ));



    $wp_customize->add_control('sidebar_texto',  array(



        'label' => 'Texto',



        'section' => 'sidebar',



        'type' => 'textarea',



        'settings' => 'sidebar_texto'



    ));



    $wp_customize->add_control(



        'sidebar_control',



        array(



            'section'  => 'sidebar',



            'label'    => 'Ativar:',



            'type'     => 'radio',



            'choices'  => array(



                '1'    => 'Sim',



                '0'   => 'Não'



            )



        )



    );



    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'alunos_section_bg', array(



        'label'    => __( 'Background da Sessão', 'themeslug' ),



        'section'  => 'alunos',



        'settings' => 'alunos_section_bg'



    )));  



    $wp_customize->add_control('alunos_section_title',  array(



        'label' => 'Título da Sessão',



        'section' => 'alunos',



        'type' => 'text',



        'settings' => 'alunos_section_title'



    ));



    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'about_section_bg', array(



        'label'    => __( 'Background da Sessão', 'themeslug' ),



        'section'  => 'about_us',



        'settings' => 'about_section_bg'



    )));  



    $wp_customize->add_control('about_section_title',  array(



        'label' => 'Título da Sessão',



        'section' => 'about_us',



        'type' => 'text',



        'settings' => 'about_section_title'



    ));



    $wp_customize->add_control('about_section_text',  array(



        'label' => 'Texto da Sessão',



        'section' => 'about_us',



        'type' => 'textarea',



        'settings' => 'about_section_text'



    ));



    $wp_customize->add_control('about_videoUrl_youtube',  array(



        'label' => 'Vídeo URL (youtube)',



        'section' => 'about_us',



        'type' => 'text',



        'settings' => 'about_videoUrl_youtube'



    ));



    $wp_customize->add_control('about_videoUrl_webm',  array(



        'label' => 'Vídeo URL (.webm)',



        'section' => 'about_us',



        'type' => 'text',



        'settings' => 'about_videoUrl_webm'



    ));



    $wp_customize->add_control('about_videoUrl_mp4',  array(



        'label' => 'Vídeo URL (.mp4)',



        'section' => 'about_us',



        'type' => 'text',



        'settings' => 'about_videoUrl_mp4'



    ));



    $wp_customize->add_control('about_text_title',  array(



        'label' => 'Título do Texto',



        'section' => 'about_us',



        'type' => 'text',



        'settings' => 'about_text_title'



    ));



    $wp_customize->add_control('about_text',  array(



        'label' => 'Texto',



        'section' => 'about_us',



        'type' => 'textarea',



        'settings' => 'about_text'



    ));



    $wp_customize->add_control('about_botao',  array(



        'label' => 'URL do botão',



        'section' => 'about_us',



        'type' => 'text',



        'settings' => 'about_botao'



    ));



    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(



        'label'    => __( 'Logo', 'themeslug' ),



        'section'  => 'logo_section',



        'settings' => 'logo'



    )));   



}



function remove_customizer_settings( $wp_customize ){



  $wp_customize->remove_panel('nav_menus');



  $wp_customize->remove_section('static_front_page');



}



// 



function get_the_category_bytax( $id = false, $tcat = 'category' ) {



    $categories = get_the_terms( $id, $tcat );



    if ( ! $categories )



        $categories = array();



    $categories = array_values( $categories );



    foreach ( array_keys( $categories ) as $key ) {



        _make_cat_compat( $categories[$key] );



    }



    return apply_filters( 'get_the_categories', $categories );



}



// 



function get_custom_field_data($key, $echo = false) {



    global $post;



    $value = get_post_meta($post->ID, $key, true);



    if($echo == false) {



        return $value;



    } else {



        echo $value;



    }



}



//



function hide_admin_bar() {



    wp_add_inline_style('admin-bar', '<style> html { margin-top: 0 !important; } </style>');



    return false;



}



//



function menu() {



  register_nav_menus(



    array(



      'header' => __( 'Header' )



    )



  );



}



//







function updateNumbers() {



    global $wpdb;



    $querystr = "SELECT $wpdb->posts.* FROM $wpdb->posts WHERE $wpdb->posts.post_status = 'publish' AND $wpdb->posts.post_type = 'post' ";



    $pageposts = $wpdb->get_results($querystr, OBJECT);



    $counts = 0 ;



    if ($pageposts):



    foreach ($pageposts as $post):



    setup_postdata($post);



    $counts++;



    add_post_meta($post->ID, 'incr_number', $counts, true);



    update_post_meta($post->ID, 'incr_number', $counts);



    endforeach;



    endif;



}



 



// 







add_theme_support( 'post-thumbnails' );



set_post_thumbnail_size( 600, 600 );







// 







// if (class_exists('MultiPostThumbnails')) {



//     for ($i=1;$i<5;$i++) {



//         new MultiPostThumbnails(



//             array(



//                 'label' => 'Image '.$i,



//                 'id' => 'featured-image-'.$i,



//                 'post_type' => 'page'



//             )



//         ); 



//     }



// }







// 







// update_option( 'siteurl', 'http://www.phelli.pe/projects/arena' );

 

// update_option( 'home', 'http://www.phelli.pe/projects/arena' );







// 







function register_required_plugins() {



    $plugins = array(



        // array(



        //     'name' => 'Yoast SEO',



        //     'slug' => 'wordpress-seo', 



        //     'source' => get_template_directory_uri() . '/plugins/wordpress-seo.3.2.5.zip', 



        //     'required' => true, 



        //     'version' => '', 



        //     'force_activation' => true, 



        //     'force_deactivation' => false, 



        //     'external_url' => '',



        // ),



    );







    $config = array(



        'default_path' => '', // Default absolute path to pre-packaged plugins.



        'menu' => 'tgmpa-install-plugins', // Menu slug.



        'has_notices' => true, // Show admin notices or not.



        'dismissable' => true, // If false, a user cannot dismiss the nag message.



        'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.



        'is_automatic' => false, // Automatically activate plugins after installation or not.



        'message' => '', // Message to output right before the plugins table.



        'strings' => array(



        'page_title' => __( 'Install Required Plugins', 'tgmpa' ),



        'menu_title' => __( 'Install Plugins', 'tgmpa' ),



        'installing' => __( 'Installing Plugin: %s', 'tgmpa' ), // %s = plugin name.



        'oops' => __( 'Something went wrong with the plugin API.', 'tgmpa' ),



        'notice_can_install_required' => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.' ), // %1$s = plugin name(s).



        'notice_can_install_recommended' => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.' ), // %1$s = plugin name(s).



        'notice_cannot_install' => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.' ), // %1$s = plugin name(s).



        'notice_can_activate_required' => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).



        'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.' ), // %1$s = plugin name(s).



        'notice_cannot_activate' => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.' ), // %1$s = plugin name(s).



        'notice_ask_to_update' => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.' ), // %1$s = plugin name(s).



        'notice_cannot_update' => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.' ), // %1$s = plugin name(s).



        'install_link' => _n_noop( 'Begin installing plugin', 'Begin installing plugins' ),



        'activate_link' => _n_noop( 'Begin activating plugin', 'Begin activating plugins' ),



        'return' => __( 'Return to Required Plugins Installer', 'tgmpa' ),



        'plugin_activated' => __( 'Plugin activated successfully.', 'tgmpa' ),



        'complete' => __( 'All plugins installed and activated successfully. %s', 'tgmpa' ), // %s = dashboard link.



        'nag_type' => 'updated' // Determines admin notice type – can only be 'updated', 'update-nag' or 'error'.



        )



    );



    tgmpa( $plugins, $config );



}



// 



function query_post_type($query) {



  if(is_category() || is_tag()) {



    $post_type = get_query_var('post_type');



    if($post_type)



        $post_type = $post_type;



    else



        $post_type = array('nav_menu_item','post','articles');



    $query->set('post_type',$post_type);



    return $query;



    }



}



// 



function custom_pagination($numpages = '', $pagerange = '', $paged='') {



  if (empty($pagerange)) {



    $pagerange = 2;



  }







  global $paged;



  if (empty($paged)) {



    $paged = 1;



  }



  if ($numpages == '') {



    global $wp_query;



    $numpages = $wp_query->max_num_pages;



    if(!$numpages) {



        $numpages = 1;



    }



  }







  $pagination_args = array(



    'base'            => get_pagenum_link(1) . '%_%',



    'format'          => 'page/%#%',



    'total'           => $numpages,



    'current'         => $paged,



    'show_all'        => False,



    'end_size'        => 1,



    'mid_size'        => $pagerange,



    'prev_next'       => False,



    'prev_text'       => __('&laquo;'),



    'next_text'       => __('&raquo;'),



    'type'            => 'plain',



    'add_args'        => false,



    'add_fragment'    => ''



  );



  $paginate_links = paginate_links($pagination_args);



  if ($paginate_links) {



    echo "<nav class='custom-pagination'>";



      echo $paginate_links;



    echo "</nav>";



  }



}



function my_formatter($content) {



 $new_content = '';



 $pattern_full = '{(\[raw\].*?\[/raw\])}is';



 $pattern_contents = '{\[raw\](.*?)\[/raw\]}is';



 $pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);



 



 foreach ($pieces as $piece) {



 if (preg_match($pattern_contents, $piece, $matches)) {



 $new_content .= $matches[1];



 } else {



 $new_content .= wptexturize(wpautop($piece));



 }



 }



 



 return $new_content;



}







// Register widgetized areas



if ( ! function_exists( 'the_widgets_init' ) ) {



    function the_widgets_init() {



    if ( ! function_exists( 'register_sidebars' ) )



    return;



        register_sidebar(



        array(



        'id'            => 'bottom',



        'name'          => __( 'Bottom Sidebar' ),



        'before_widget' => '<div id="%1$s" class="widget %2$s">',



        'after_widget'  => '</div>',



        'before_title'  => '<h3 class="widget-title">',



        'after_title'   => '</h3>',



        )



        );



        register_sidebar(

        array(

        'id'            => 'blog',

        'name'          => __( 'Blog Sidebar' ),

        'before_widget' => '<div id="%1$s" class="widget %2$s">',

        'after_widget'  => '</div>',

        'before_title'  => '<h3 class="widget-title">',

        'after_title'   => '</h3>',

        )

        );



        register_sidebar(

        array(

        'id'            => 'sidebar',

        'name'          => __( 'Sidebar' ),

        'before_widget' => '<div id="%1$s" class="widget %2$s">',

        'after_widget'  => '</div>',

        'before_title'  => '<h3 class="widget-title">',

        'after_title'   => '</h3>',

        )

        );



    } // End the_widgets_init()



}



function run_when_post_published($post)

{

    global $wpdb;

    if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Musculação') {

        add_post_meta($post->ID, 'pid', '2860173', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Spinning') {

        add_post_meta($post->ID, 'pid', '2860189', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Zumba') {

        add_post_meta($post->ID, 'pid', '2863319', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Pilates') {

        add_post_meta($post->ID, 'pid', '2863324', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Muay Thai') {

        add_post_meta($post->ID, 'pid', '2863326', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Jiu-Jitsu') {

        add_post_meta($post->ID, 'pid', '2863334', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Funcional') {

        add_post_meta($post->ID, 'pid', '2863337', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Aero Boxe Thai') {

        add_post_meta($post->ID, 'pid', '2863340', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Arena Total') {

        add_post_meta($post->ID, 'pid', '2863344', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Dança Mix') {

        add_post_meta($post->ID, 'pid', '2863348', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Ginástica') {

        add_post_meta($post->ID, 'pid', '2863355', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Jump') {

        add_post_meta($post->ID, 'pid', '2863374', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Gap') {

        add_post_meta($post->ID, 'pid', '2863378', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Alongamento') {

        add_post_meta($post->ID, 'pid', '2863382', true);

    } else if(!wp_is_post_revision($post->ID) && $post->post_type == 'atividades' && $post->post_title == 'Step') {

        add_post_meta($post->ID, 'pid', '2863399', true);

    }

}



function my_edit_atividades_columns( $columns ) {



	$columns = array(

        'cb' => '<input type="checkbox" />',

		'title' => __( 'Atividade' ),

		'pid' => __( 'pid' )

	);



	return $columns;

}



function my_manage_atividades_columns( $column, $post_id ) {

	global $post;



	switch( $column ) {



		case 'pid' :



			$pid = get_post_meta( $post_id, 'pid', true );



			if ( empty( $pid ) )

				echo __( '--' );



			else

				printf( $pid );



			break;



		default :

			break;

	}

}



function wpb_set_post_views($postID) {

    $count_key = 'wpb_post_views_count';

    $count = get_post_meta($postID, $count_key, true);

    if($count==''){

        $count = 0;

        delete_post_meta($postID, $count_key);

        add_post_meta($postID, $count_key, '0');

    }else{

        $count++;

        update_post_meta($postID, $count_key, $count);

    }

}

// Desativar read more

// function modify_read_more_link() {
//     return false;
// }


/////////////////////////////////////////////////////////////////////////////



add_action( 'manage_atividades_posts_custom_column', 'my_manage_atividades_columns', 10, 2 );



add_action('new_to_publish', 'run_when_post_published');  



add_action('draft_to_publish', 'run_when_post_published'); 



add_action('pending_to_publish', 'run_when_post_published');



//add_action( 'init', 'add_taxonomies_to_pages' );



add_action( 'init', 'atividades_taxonomies');



add_action( 'save_post', 'save_radio_meta_box_data' );



add_action( 'add_meta_boxes', 'radio_add_meta_box' );



add_action( 'init', 'the_widgets_init' );



add_action( 'tgmpa_register', 'register_required_plugins');



add_action ( 'publish_post', 'updateNumbers' );



add_action ( 'deleted_post', 'updateNumbers' );



add_action ( 'edit_post', 'updateNumbers' );



add_action( 'init', 'menu' );



add_action( 'customize_register', 'remove_customizer_settings', 20 );



add_action( 'customize_register', 'themeslug_theme_customizer' );



add_action( 'init', 'getrid' );



add_action( 'wp_enqueue_scripts', 'regScripts' );



add_action( 'admin_menu', 'remove_menus' );

// add_filter( 'the_content_more_link', 'modify_read_more_link' );


add_filter('the_content', 'my_formatter', 99);



add_filter( 'show_admin_bar', 'hide_admin_bar' );



add_filter('terms_clauses', 'df_terms_clauses', 10, 3);



add_filter('pre_get_posts', 'query_post_type');



add_filter( 'manage_edit-atividades_columns', 'my_edit_atividades_columns' ) ;





register_post_type( 'Banners', $banners );



register_post_type( 'Objetivos', $objetivos );



register_post_type( 'Atividades', $atividades );



register_post_type( 'Alunos', $alunos );



register_post_type( 'Customers', $customers );





remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);





?>