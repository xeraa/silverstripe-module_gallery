<?php


/**
 * Defining the custom item of this page type.
 */
define('GALLERY_ICON_PATH', MODULE_GALLERY_DIR . '/icons/gallery');



/**
 * Definining the gallery page.
 *
 * @package module_gallery
 */
class GalleryPage extends AbstractGalleryPage {


  /**
	 * Remove unused page types in ancestors.
	 */
	public static $hide_ancestor = 'AbstractGalleryPage';


	/**
	 * Add a custom icon for easier recognition.
	 */
	public static $icon = GALLERY_ICON_PATH;


}



/**
 * Controller for the gallery page.
 *
 * @package module_gallery
 */
class GalleryPage_Controller extends AbstractGalleryPage_Controller {


}
