<?php

namespace IPFLibraries\PublicAssetsManager;

/**
 * Manages public assets
 *
 * @package IPFLibraries\PublicAssetsManager
 */
class AssetsManager
{

	/**
	 * Public path where assets will be stored
	 *
	 * @var string
	 */
	protected $public_assets_path = '';

	/**
	 * Data path where
	 *
	 * @var string
	 */
	protected $data_path = '';

	/**
	 * AssetsManager constructor.
	 *
	 * @param string $public_assets_path Public path where assets should be located
	 * @param string $data_path Data path where some settings will be storied
	 */
	public function __construct($public_assets_path, $data_path)
	{
		$this->public_assets_path = $public_assets_path;
		$this->data_path = $data_path;
	}

	public function install($module_path)
	{

	}

	public function uninstall($module_path)
	{

	}

	public function update($module_path)
	{

	}

	public function getResourceUrl($resource_url)
	{

	}

}