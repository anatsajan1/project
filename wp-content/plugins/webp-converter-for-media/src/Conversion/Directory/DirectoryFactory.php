<?php

namespace WebpConverter\Conversion\Directory;

use WebpConverter\HookableInterface;
use WebpConverter\Plugin\Uninstall\WebpFiles;

/**
 * Initializes integration for all directories.
 */
class DirectoryFactory implements HookableInterface {

	/**
	 * @var PathsGenerator
	 */
	private $paths_generator;

	/**
	 * Object of directories integration.
	 *
	 * @var DirectoryIntegration
	 */
	private $directories_integration;

	public function __construct( PathsGenerator $paths_generator = null ) {
		$this->paths_generator = $paths_generator ?: new PathsGenerator();

		$this->set_integration( new GalleryDirectory( $this->paths_generator ) );
		$this->set_integration( new PluginsDirectory( $this->paths_generator ) );
		$this->set_integration( new ThemesDirectory( $this->paths_generator ) );
		$this->set_integration( new UploadsDirectory( $this->paths_generator ) );
		$this->set_integration( new UploadsWebpcDirectory( $this->paths_generator ) );
	}

	/**
	 * Sets integration for directory.
	 *
	 * @param DirectoryInterface $directory .
	 *
	 * @return void
	 */
	private function set_integration( DirectoryInterface $directory ) {
		if ( $this->directories_integration === null ) {
			$this->directories_integration = new DirectoryIntegration( $this->paths_generator );
		}
		$this->directories_integration->add_directory( $directory );
	}

	/**
	 * {@inheritdoc}
	 */
	public function init_hooks() {
		$this->directories_integration->init_hooks();
	}

	/**
	 * Returns list of source directories.
	 *
	 * @return string[] Types of directories with labels.
	 */
	public function get_directories(): array {
		return $this->directories_integration->get_input_directories();
	}

	/**
	 * Removes converted files from output directory.
	 *
	 * @param string[] $source_dirs Types of source directories.
	 *
	 * @return void
	 */
	public function remove_unused_output_directories( array $source_dirs ) {
		$all_dirs = $this->directories_integration->get_output_directories();
		foreach ( $all_dirs as $output_dir => $output_path ) {
			if ( in_array( $output_dir, $source_dirs ) ) {
				continue;
			}
			WebpFiles::remove_webp_files( $output_path );
		}
	}
}
