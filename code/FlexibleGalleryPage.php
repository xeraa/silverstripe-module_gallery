<?php


/**
 * Defining the custom item of this page type.
 */
define('FLEXIBLEGALLERY_ICON_PATH', MODULE_GALLERY_DIR . '/icons/flexible');



/**
 * Definining the flexible gallery page.
 *
 * @package module_gallery
 */
class FlexibleGalleryPage extends AbstractGalleryPage {


	/**
	 * Add a custom icon for easier recognition.
	 */
	public static $icon = FLEXIBLEGALLERY_ICON_PATH;


	/**
	 * Provide the short code for including the gallery.
   * Example: [FlexibleGallery]
   * 
   * @return SSViewer Array containing the images so the Gallery include can be reused.
	 */
	public static function FlexibleGalleryHandler($arguments, $caption = null, $parser = null){
    $customise = array();
    //var_dump(DataObject::get('CustomImage', 'BelongToPageID = ' . Controller::curr()->ID));die();
		$customise['GalleryImages'] = DataObject::get('CustomImage', 'BelongToPageID = ' . Controller::curr()->ID);
		$template = new SSViewer('Gallery');
		return $template->process(new ArrayData($customise));
	}


}



/**
 * Controller for the flexible gallery page.
 *
 * @package module_gallery
 */
class FlexibleGalleryPage_Controller extends AbstractGalleryPage_Controller {


}
