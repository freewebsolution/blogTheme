<?php
// Registrare un Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

add_filter( 'wp_nav_menu_items', 'aggiungi_home', 10, 2 );


function aggiungi_home($items, $args ) {
	
        if (is_home() || is_front_page())
		$class = 'class="current-menu-item"';
		else
		$class = '';
		$home = '<li '.$class.'><a href="' . get_bloginfo('url') . '">' . __('Home') . '</a></li>';
		$items = $home.$items;

return $items;
}


if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
        'primary' => 'Category menu',
        'secondary' => 'Home Menu',
		'terzary' => 'Footer Menu'
        )
    );
}

/*===============excerpt================*/
function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt). ' ...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
 return $excerpt;
}

function my_excerpt_length($length) {
return 400;
}
 
add_filter('excerpt_length', 'my_excerpt_length');
if (function_exists('register_sidebar')) {
	
 register_sidebar(array(
 'name' => 'Sidebar',
 'id'   => 'sidebar-area',
 'description'   => 'La nostra widget area.',
 'before_widget' => '<div class="categories widget" wow fadeIn" data-wow-duration="2.5s">',
 'after_widget'  => '</div>',
 'before_title'  => '<h3 class="widget-head">',
 'after_title'   => '</h2>'
 ));
 
 register_sidebar(array(
 'name' => 'Footer Sidebar',
 'id'   => 'footer-sidebar-area',
 'description'   => 'La nostra widget area.',
 'before_widget' => '<div class="grid span-1 tablet-1-3 desktop-1-3 right">',
 'after_widget'  => '</div>',
 'before_title'  => '<h3 class="widget-head">',
 'after_title'   => '</h3>',

 ));
 
  register_sidebar(array(
 'name' => 'Sidebar page',
 'id'   => 'sidebar-area-page',
 'description'   => 'La nostra widget area.',
 'before_widget' => '<div class="widget-box">',
 'after_widget'  => '</div>',
 'before_title'  => '<h3>',
 'after_title'   => '</h3>'
 ));
 }
/*========================	thumbnails=======================*/
add_theme_support( 'post-thumbnails' ); 
if ( function_exists( 'add_image_size' ) ) {
    add_image_size( 'single', 750, 384,true); //(immagine non ritagliata)
    //add_image_size( 'post', 400, 300,true ); //(immagine non ritagliata)
	//add_image_size( 'evidenc', 250, 250,false ); //(immagine ritagliata)
	//add_image_size( 'portf', 400, 400,false ); //(immagine ritagliata)
}

add_filter( 'jpeg_quality', create_function( '', 'return 80;' ) );
function no_generator() { return ''; }
add_filter( 'the_generator', 'no_generator' );

/*====================meta key & description==================*/
function metadesc($pid) {
  $p = get_post($pid);
  $description = strip_tags($p->post_content);
  $description = str_replace ("\n","",$description);
  $description = str_replace ("\r","",$description);
  if (strlen($description) > 150) {
    return htmlspecialchars(substr($description,0,150) . "...");
  }else{
    return htmlspecialchars($description);
  }
}

/*====================pingback trackback==================*/
function commentCount($type = 'comments'){
	if($type == 'trackbacks'):
		$typeSql = 'comment_type = "trackback"';
		$oneText = '1 :trackback';
		$moreText = '% :trackbacks';
		$noneText = 'Nessun :trackbacks';
	elseif($type == 'pingbacks'):
		$typeSql = 'comment_type = "pingback"';
		$oneText = '1 :pingback';
		$moreText = '% :pingback';
		$noneText = 'Nessun :pingback';
	endif;
	global $wpdb;
    $result = $wpdb->get_var('
        SELECT
            COUNT(comment_ID)
        FROM
            '.$wpdb->comments.'
        WHERE
            '.$typeSql.' AND
            comment_approved="1" AND
            comment_post_ID= '.get_the_ID()
    );
	if($result == 0):
		echo str_replace('%', $result, $noneText);
	elseif($result == 1):
		echo str_replace('%', $result, $oneText);
	elseif($result > 1):
		echo str_replace('%', $result, $moreText);
	endif;
}

add_filter('manage_posts_columns', 'posts_columns_counts', 1);
add_action('manage_posts_custom_column', 'posts_custom_columns_counts', 1, 2);


function posts_columns_counts($defaults){
    $defaults['wps_post_counts'] = __('Conteggio');
    return $defaults;
}
function posts_custom_columns_counts($column_name, $id){
	if($column_name === 'wps_post_counts'){
		commentCount('trackbacks'); echo "<br />";
		commentCount('pingbacks');
          }
}
/*===nascondo la barra admin======================*/
add_filter( 'show_admin_bar', '__return_false' );

/*=============registrazione libreria jquery=================*/

function aggiungi_script() {
if(!is_admin()) {
	wp_deregister_script('jquery');
	
	/* jQuery e plugin JavaScript*/
	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js', '1.10.2', true);
	wp_enqueue_script('jquery');
	
    wp_register_script('bootstrap.min', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), true);
    wp_enqueue_script('bootstrap.min');
		
    wp_register_script('wow.min', get_template_directory_uri().'/assets/js/wow.min.js', array('jquery'), true);
    wp_enqueue_script('wow.min');

    wp_register_script('jqBootstrapValidation', get_template_directory_uri().'/assets/js/easypiechart.js', array('jquery'), true);
    wp_enqueue_script('jqBootstrapValidation');

  /*my script*/ 
  
    wp_register_script('myscript', get_template_directory_uri().'/assets/js/main.js', array('jquery'), true);
    wp_enqueue_script('myscript');

}


}
add_action( 'wp_enqueue_scripts', 'aggiungi_script' );

/*============registrazione stili==================*/
// carica CSS nel front-end
function mytheme_enqueue_style() {
	/*bootstrap core css*/
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	/*font theme*/
	wp_enqueue_style( 'orange', get_template_directory_uri() . '/assets/css/main.css' );
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/assets/css/responsive.css' );
	
	/*font e animate*/
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/font/css/font-awesome.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css' );	
	/*style*/  
    wp_enqueue_style( 'style', get_stylesheet_uri() );

}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );
function elimina_cat($query) {
 
if ( $query->is_home ) {
$query->set('cat', '-34');
}
return $query;
}
add_filter('pre_get_posts', 'elimina_cat');

/* Aggiungi la favicon al tuo Blog
 * by Roberto Iacono di robertoiacono.it
 */
function ri_wp_favicon() { ?>
    <link rel="shortcut icon" type="image/x-icon" href="http://www.freewebsolution.it/favicon.ico " />
<?php }
add_action('wp_head', 'ri_wp_favicon');

/*categorie
add_action( 'parse_query', 'category_posts_per_page', 5, 1 );
    function category_posts_per_page( $q_obj ) {
        if( is_category('71') ) // numero categoria da sostituire con l'ID della propria categoria
            $q_obj->query_vars['posts_per_page'] = 4;// Numero da sostituire con il valore desiderato
			
    }
 */
 
 /*breadcrumbs*/
 
 function create_breadcrumbs() {
 
  $delimiter = '/';
  $home = 'Home'; 
  $before = '<span class="current">';
  $after = '</span>';
 
  if ( !is_home() && !is_front_page() || is_paged() ) {
 
    echo '<div id="breadcrumbs">';
 
    global $post;
    $homeLink = get_bloginfo('url');
    echo '<a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';
 
    if ( is_category() ) {
      global $wp_query;
      $cat_obj = $wp_query->get_queried_object();
      $thisCat = $cat_obj->term_id;
      $thisCat = get_category($thisCat);
      $parentCat = get_category($thisCat->parent);
      if ($thisCat->parent != 0) echo(get_category_parents($parentCat, TRUE, ' ' . $delimiter . ' '));
      echo $before . single_cat_title('', false) . $after;
 
    } elseif ( is_day() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('d') . $after;
 
    } elseif ( is_month() ) {
      echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;
 
    } elseif ( is_year() ) {
      echo $before . get_the_time('Y') . $after;
 
    } elseif ( is_single() && !is_attachment() ) {
      if ( get_post_type() != 'post' ) {
        $post_type = get_post_type_object(get_post_type());
        $slug = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a> ' . $delimiter . ' ';
        echo $before . get_the_title() . $after;
      } else {
        $cat = get_the_category(); $cat = $cat[0];
        echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
        echo $before . get_the_title() . $after;
      }
 
    } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;
 
    } elseif ( is_attachment() ) {
      $parent = get_post($post->post_parent);
      $cat = get_the_category($parent->ID); $cat = $cat[0];
      echo get_category_parents($cat, TRUE, ' ' . $delimiter . ' ');
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a> ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && !$post->post_parent ) {
      echo $before . get_the_title() . $after;
 
    } elseif ( is_page() && $post->post_parent ) {
      $parent_id  = $post->post_parent;
      $breadcrumbs = array();
      while ($parent_id) {
        $page = get_page($parent_id);
        $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
        $parent_id  = $page->post_parent;
      }
      $breadcrumbs = array_reverse($breadcrumbs);
      foreach ($breadcrumbs as $crumb) echo $crumb . ' ' . $delimiter . ' ';
      echo $before . get_the_title() . $after;
 
    } elseif ( is_search() ) {
      echo $before . get_search_query() . $after;
 
    } elseif ( is_tag() ) {
      echo $before . single_tag_title('', false) . $after;
 
    } elseif ( is_author() ) {
       global $author;
      $userdata = get_userdata($author);
      echo $before . $userdata->display_name . $after;
 
    } elseif ( is_404() ) {
      echo $before . 'Error 404' . $after;
    }
 
    if ( get_query_var('paged') ) {
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ' (';
      echo __('Page') . ' ' . get_query_var('paged');
      if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) echo ')';
    }
 
    echo '</div>';
 
  }
}

/*articoli recenti con thumb*/
/******************
* Mostra gli articoli recenti con l'immagine di anteprima
* Author: Roberto Iacono
* Website: http://www.robertoiacono.it/
* $quanti_post_mostrare = 5;  quanti articoli mostrare?
* $lunghezza_titolo = 0;  quanti caratteri deve essere lungo il titolo? Lascia 0 per mostrarli tutti
* $title_more = '...';  testo da visualizzare dopo il troncamento
* $rimuovi_cat = null;  non mostra gli ultimi articoli di una data categoria. Se vuoi escludere una o più categorie, usa array(-1,-2,-3) dove 1, 2, 3 sono gli ID delle gategorie da escludere
* $vuoi_la_cache = 1; imposta la cache per salvare i risultati in memoria, così da alleggerire le richieste al Database
* $mostra_titolo = 1; mostra il titolo Recent Posts predisposto per la localizzazione
*
* Se vuoi aggiungere/eliminare dei filtri sugli ultimi articoli, devi modificare la query che genera gli articoli da mostrare, ti rimando a http://codex.wordpress.org/Class_Reference/WP_Query
*******************/
function RIrecentPosts($quanti_post_mostrare, $lunghezza_titolo, $title_more, $rimuovi_cat, $vuoi_la_cache, $mostra_titolo) {
$ri_recent_post = get_transient('RIrecentPosts_transient_key');
if ($ri_recent_post === false || $vuoi_la_cache == 0) {
$ri_recent_posts = new WP_Query();
$ri_recent_posts->query(array( 'category__not_in' => $rimuovi_cat, 'showposts' => $quanti_post_mostrare ));
$ri_recent_post = '';
// Aggiunge il titolo Recent Posts
if($mostra_titolo == 1)

$ri_recent_post .= '<h2>'. __('Recent Posts') .'</h2>';
$ri_recent_post .= '<ul>';
while ($ri_recent_posts->have_posts()) : $ri_recent_posts->the_post();
$ri_recent_post .= '<li>';
// mostra l'immagine di anteprima
$ri_recent_post .= '<a href="'. get_permalink() .'">'. get_the_post_thumbnail(get_the_ID(),'ri-recent-thumbnails') .'</a><div class="clear"></div>';
// mostra il titolo
$ri_recent_post .= '<a href="'. get_permalink() .'" title="'. get_the_title() .'">';
// taglia il titolo se è più lungo di $lunghezza_titolo caratteri
if ($lunghezza_titolo > 0 ){
if(strlen(get_the_title()) > $lunghezza_titolo)
$ri_recent_post .= substr(get_the_title(), 0, $lunghezza_titolo) . $title_more;
}
else
$ri_recent_post .= get_the_title();
$ri_recent_post .= '</a>';
$ri_recent_post .= '</li>';
endwhile;
$ri_recent_post .= '</ul>';
wp_reset_query();
// salva i risultati in cache per 1 giorno
if ($vuoi_la_cache == 1)
set_transient('RIrecentPosts_transient_key', $ri_recent_post, 3600 * 24);
}
echo $ri_recent_post;
}
 
// elimina la cache per mostrare gli ultimi articoli recenti senza plugin
add_action( 'publish_post', 'delete_RIrecentPosts_transient_key',10,2 );
function delete_RIrecentPosts_transient_key()
{
delete_transient('RIrecentPosts_transient_key');
}
 
add_image_size( 'ri-recent-thumbnails',285, 150, true );

/*aggiungi il php nel widget*/

function ri_php_text($text) {
if (strpos($text, '<' . '?') !== false) { ob_start(); eval('?' . '>' . $text);
$text = ob_get_contents();
ob_end_clean();
}
return $text;
}
add_filter('widget_text', 'ri_php_text', 99);

/*quanto tempo fa è stato scritto il post?
add_action( 'the_content', 'time_trascorso',1 ); 
function time_trascorso( $content ) {
 	$content .='<div class="tempoPubblicazione"><em>';
	$content .= "\n" . __( 'Pubblicato ', 'am_theme' ) . human_time_diff( get_the_time('U'), current_time('timestamp') ) . __( ' fa.', 'am_theme' ); 
 	$content.='</em></div>';
	return $content; 
} //fine time_trascorso()*/ 

add_action( 'tempo', 'tempo_trascorso',99 );
 
function tempo_trascorso() {
	echo __( ' <span class="glyphicon glyphicon-time" aria-hidden="true"></span> ', 'am_theme' ) . human_time_diff( get_the_time('U'), current_time('timestamp') ) . __( ' fa.', 'am_theme' ); 
} //fine time_trascorso() 

@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );

?>