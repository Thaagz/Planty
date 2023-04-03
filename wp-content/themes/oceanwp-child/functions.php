<?php

// require '/shortcode/banner.php';
require __DIR__. '/shortcode/banner.php';
// require '/shortcode/plante-contacter.php';
require __DIR__. '/shortcode/plante-contacter.php';
// require '/shortcode/plant-rencontrer.php';
require __DIR__. '/shortcode/plante-rencontrer.php';
// require '/shortcode/plant-droite.php';
require __DIR__. '/shortcode/plante-droite.php';
// require '/shortcode/commande.php';
require __DIR__. '/shortcode/commande.php';

// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// shortcode

// CPT

/*
* On utilise une fonction pour créer notre custom post type 'Commandes'
*/

function order_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Commandes', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'Commande', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Commandes'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les Commandes'),
		'view_item'           => __( 'Voir les Commandes'),
		'add_new_item'        => __( 'Ajouter une nouvelle Commande'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer la Commandes'),
		'update_item'         => __( 'Modifier la Commandes'),
		'search_items'        => __( 'Rechercher une Commande'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Commandes'),
		'description'         => __( 'Liste des commandes'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'orders'),
		'menu_icon'           =>'dashicons-cart'
	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'orders', $args );

}

add_action( 'init', 'order_custom_post_type', 0 );

function form_custom_post_type() {

	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
	$labels = array(
		// Le nom au pluriel
		'name'                => _x( 'Les formuaires', 'Post Type General Name'),
		// Le nom au singulier
		'singular_name'       => _x( 'formulaire', 'Post Type Singular Name'),
		// Le libellé affiché dans le menu
		'menu_name'           => __( 'Formulaire'),
		// Les différents libellés de l'administration
		'all_items'           => __( 'Toutes les formulaires'),
		'view_item'           => __( 'Voir les formulaires'),
		'add_new_item'        => __( 'Ajouter un nouveau formuaire'),
		'add_new'             => __( 'Ajouter'),
		'edit_item'           => __( 'Editer le formulaire'),
		'update_item'         => __( 'Modifier le formulaire'),
		'search_items'        => __( 'Rechercher un formulaire'),
		'not_found'           => __( 'Non trouvée'),
		'not_found_in_trash'  => __( 'Non trouvée dans la corbeille'),
	);
	
	// On peut définir ici d'autres options pour notre custom post type
	
	$args = array(
		'label'               => __( 'Formulaires'),
		'description'         => __( 'Liste des formulaires'),
		'labels'              => $labels,
		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
		'supports'            => array( 'title', 'custom-fields', ),
		/* 
		* Différentes options supplémentaires
		*/
		'show_in_rest'        => true,
		'hierarchical'        => false,
		'public'              => true,
		'has_archive'         => true,
		'rewrite'			  => array( 'slug' => 'form'),
		'menu_icon'           =>'dashicons-dashboard'
	);
	
	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
	register_post_type( 'form', $args );

}

add_action( 'init', 'form_custom_post_type', 0 );

// helper
// la variable est egal a true ?

function dv($display) {
	if (!$display) {return false;}

	if (is_array($display)) {
		if(count($display)>0) {
			echo '<img loading="lazy" src="' .$display["url"]. '" alt="' .$display["title"]. '">';
		}
	}
	else {echo $display;}
}

function createOrder($data) {
	// get data from form
	$fraise = $data['fraise'];
	$pamplemousse = $data['pamplemousse'];
	$framboise = $data['framboise'];
	$citron = $data['citron'];
	$nom = $data['nom'];
	$prenom = $data['prenom'];
	$email = $data['email'];
	$adresseLivraison = $data['adresse'];
	$codepostal = $data['code_postal'];
	$ville = $data['ville'];

	date_default_timezone_set('Europe/Paris');
	$date = date('d/m/Y h:i', time());

	// insert post in 'orders' CPT
	$id = wp_insert_post(array(
		'post_title'=> $prenom . ' ' . $nom . ' - ' . $date, 
		'post_type'=>'orders', 
		'post_content'=>''
	  ));

	if (!$id) { return $id; }
	update_field('fraise', $fraise, $id);
	update_field('pamplemousse', $pamplemousse, $id);
	update_field('framboise', $framboise, $id);
	update_field('citron', $citron, $id);

	update_field('nom', $nom, $id);
	update_field('prenom', $prenom, $id);
	update_field('e-mail', $email, $id);

	update_field('adresse_de_livraison', $adresseLivraison, $id);
	update_field('code_postal', $codepostal, $id);
	update_field('ville', $ville, $id);

	return $id;
}