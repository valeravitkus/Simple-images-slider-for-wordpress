add_image_size( 'slider-thumb', 1170, 550, true );

function slider_post_type() {

	$labels = array(
		'name'                  => _x( 'Слайды', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Слайдер', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Слайдер на главной', 'text_domain' ),
		'name_admin_bar'        => __( 'Слайды', 'text_domain' ),
		'archives'              => __( 'Список всех слайдов', 'text_domain' ),
		'attributes'            => __( 'Атрибуты слайда', 'text_domain' ),
		'parent_item_colon'     => __( 'Родительский слайд', 'text_domain' ),
		'all_items'             => __( 'Все слайды', 'text_domain' ),
		'add_new_item'          => __( 'Добавить новый слайд (размер изображения 1170х550 пикселей)', 'text_domain' ),
		'add_new'               => __( 'Добавить новый слайд', 'text_domain' ),
		'new_item'              => __( 'Новый слайд', 'text_domain' ),
		'edit_item'             => __( 'Редактировать слайд', 'text_domain' ),
		'update_item'           => __( 'Обновить слайд', 'text_domain' ),
		'view_item'             => __( 'Открыть слайд', 'text_domain' ),
		'view_items'            => __( 'Открыть слайды', 'text_domain' ),
		'search_items'          => __( 'Найти слайд', 'text_domain' ),
		'not_found'             => __( 'Не найден', 'text_domain' ),
		'not_found_in_trash'    => __( 'Не найден в корзине', 'text_domain' ),
		'featured_image'        => __( 'Изображение для слайда', 'text_domain' ),
		'set_featured_image'    => __( 'Выбрать изображение для слайда', 'text_domain' ),
		'remove_featured_image' => __( 'Удалить изображение для слайда', 'text_domain' ),
		'use_featured_image'    => __( 'Установить изображение для слайда', 'text_domain' ),
		'insert_into_item'      => __( 'Вставить в слайд', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Обновить для этого слайда', 'text_domain' ),
		'items_list'            => __( 'Список сладов', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Слайдер', 'text_domain' ),
		'description'           => __( 'Post Type Description', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'thumbnail', ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => false,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => false,
		'capability_type'       => 'page',
	);
	register_post_type( 'slider_images', $args );

}
add_action( 'init', 'slider_post_type', 0 );
