<?php

namespace WebpConverter\Conversion\Directory;

/**
 * Manages generation of server paths.
 */
class PathsGenerator {

	/**
	 * Returns path to root directory of WordPress installation.
	 */
	public function get_wordpress_root_path(): string {
		return apply_filters(
			'webpc_site_root',
			realpath( dirname( wp_upload_dir()['basedir'], 2 ) )
		);
	}
}
