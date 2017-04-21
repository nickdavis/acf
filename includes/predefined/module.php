<?php
/**
 * Description
 *
 * @package     ${NAMESPACE}
 * @since       1.0.0
 * @author      Nick Davis
 * @link        https://iamnickdavis.com
 * @license     GNU General Public License 2.0+
 */

namespace NickDavis\ACF\Predefined;

function autoload() {
	$files = array(
		'helpers.php',

		'fields/flexible-content.php',
		'fields/image.php',
		'fields/text.php',
		'fields/url.php',
		'fields/wysiwyg.php',

		'groups/hero.php',
		'groups/rows.php',

		'layouts/hero.php',
		'layouts/posts.php',
		'layouts/terms.php',
	);

	foreach ( $files as $file ) {
		include __DIR__ . '/' . $file;
	}
}

autoload();

add_action( 'init', __NAMESPACE__ . '\register_acf_field_groups' );
/**
 * Process an array of predefined ACF field groups.
 *
 * @since 1.0.0
 *
 */
function register_acf_field_groups() {
	$configs = array();

	/**
	 * Add ACF hero runtime configurations for generating and registering each
	 * field group with WordPress.
	 *
	 * @since 1.0.0
	 *
	 * @param array Array of configurations.
	 */
	$configs = (array) apply_filters( 'add_acf_config', $configs );

	foreach ( $configs as $key => $config ) {
		register_acf_field_group( $config['type'], $config['key'], $config );
		store_acf_configuration( $config['key'], $config );
	}
}

/**
 * Register a predefined ACF field group.
 *
 * @since 1.0.0
 *
 * @param $type
 * @param $key
 * @param $config
 */
function register_acf_field_group( $type, $key, $config ) {
	if ( ! $type ) {
		return;
	}

	$args = array();
	$args = process_predefined_acf_groups( $type, $key, $config );

	acf_add_local_field_group( $args );
}

function process_predefined_acf_groups( $type, $key, array $config ) {
	$get_group = __NAMESPACE__ . '\get_acf_' . $type . '_group';

	return $get_group( $key, $config );
}

/**
 * Process predefined layouts for an ACF field group.
 *
 * @since 1.0.0
 *
 * @param $predefined_layouts
 *
 * @return array
 */
function process_predefined_acf_layouts( $key, $predefined_layouts ) {
	if ( ! $predefined_layouts ) {
		return;
	}

	$layouts = array();

	foreach ( $predefined_layouts as $layout ) {
		$get_layout = __NAMESPACE__ . '\get_acf_' . $layout . '_layout';
		$layouts[]  = $get_layout();
	}

	return $layouts;
}

/**
 * Process predefined fields for an ACF field group.
 *
 * @since 1.0.0
 *
 * @param string $key Key of the field group
 * @param array $predefined_fields Predefined field to turn into actual fields
 * @param bool $sub_fields Are these sub fields or regular fields?
 *
 * @return array
 */
function process_predefined_acf_fields( $key, $predefined_fields, $sub_fields = false ) {
	$fields = array();
	$key    = $key . '_';

	if ( $sub_fields ) {
		$key = '';
	}

	foreach ( $predefined_fields as $field ) {
		$get_field = __NAMESPACE__ . '\get_acf_' . $field . '_field';
		$fields[]  = $get_field( $key, $field );
	}

	return $fields;
}

/**
 * Process a view for an ACF field group.
 *
 * @since 1.0.0
 *
 * @param $key
 */
function do_acf_group( $key ) {
	$config = get_acf_configuration( $key );
	$type   = $config['type'];

	if ( ! $config || ! $type ) {
		return;
	}

	$do_view = __NAMESPACE__ . '\do_acf_' . $type . '_group';

	$do_view( $key, $config );
}

/**
 * Get the runtime configuration parameters for the specified ACF field group.
 *
 * @since 1.3.0
 *
 * @param string $key Name of the shortcode
 *
 * @return array|false
 */
function get_acf_configuration( $key ) {
	return _acf_configuration_store( $key );
}

/**
 * Store the field group runtime configuration parameters into the static store.
 *
 * @since 1.3.0
 *
 * @param string $key Name of the hero field group
 *
 * @return array|false
 */
function store_acf_configuration( $key, $config ) {
	return _acf_configuration_store( $key, $config );
}

/**
 * ACF field group configuration store.
 *
 * @since 1.0.0
 *
 * @param string $key
 * @param array $config Array of rutime configuration parameters to store (optional)
 *
 * @return array|false
 */
function _acf_configuration_store( $key, $config = false ) {
	static $configurations = array();

	if ( ! isset( $configurations[ $key ] ) ) {
		$configurations[ $key ] = $config;
	}

	return $configurations[ $key ];
}
