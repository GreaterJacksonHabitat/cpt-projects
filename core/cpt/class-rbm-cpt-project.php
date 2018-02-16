<?php

/**
 * Class RBM_CPT_Projects
 *
 * Creates the post type.
 *
 * @since 1.0.0
 */
class RBM_CPT_Projects extends RBM_CPT {

	public $post_type = 'projects';
	public $label_singular = null;
	public $label_plural = null;
	public $labels = array();
	public $icon = 'welcome-write-blog';
	public $post_args = array(
		'hierarchical' => false,
		'supports'     => array( 'title', 'editor', 'author', 'thumbnail' ),
		'has_archive'  => false,
		'rewrite'      => array(
			'slug'       => 'project',
			'with_front' => false,
			'feeds'      => false,
			'pages'      => true
		),
		'capability_type' => 'post',
	);

	/**
	 * RBM_CPT_Projects constructor.
	 *
	 * @since 1.0.0
	 */
	function __construct() {

		// This allows us to Localize the Labels
		$this->label_singular = __( 'Project', 'cpt-projects' );
		$this->label_plural   = __( 'Projects', 'cpt-projects' );

		$this->labels = array(
			'menu_name' => __( 'Projects', 'cpt-projects' ),
			'all_items' => __( 'All Projects', 'cpt-projects' ),
		);

		parent::__construct();
		
	}
	
}