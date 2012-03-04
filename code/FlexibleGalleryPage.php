<?php


/**
 * Defining the custom item of this page type.
 */
define('FLEXIBLEGALLERY_ICON_PATH', MODULE_GALLERY_DIR . '/icons/flexible');



/**
 * Definining the flexible gallery page.
 *
 * @package mysite
 */
class FlexibleGalleryPage extends Page {


	/**
	 * Relation to all included images.
	 */
	static $has_many = array(
		'GalleryImages' => 'GalleryImage',
	);


	/**
	 * Add a custom icon for easier recognition.
	 */
	public static $icon = FLEXIBLEGALLERY_ICON_PATH;


	/**
	 * Adding the image field together with its title and caption.
	 *
	 * @return FieldSet Cleaned up tabs and fields.
	 */
	public function getCMSFields(){
		$images = new ImageDataObjectManager(
			$this,
			'GalleryImages',
			'GalleryImage',
			'BaseImage',
			array(
				'Title' => _t('GalleryPage.TITLE', 'Title'),
			)
		);

		$fields = parent::getCMSFields();
		$fields->addFieldToTab("Root.Content.Gallery", $images);
		return $fields;
  }


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
 * @package mysite
 */
class FlexibleGalleryPage_Controller extends Page_Controller {


	/**
	 * Functions exposed via their URL.
	 */
	public static $allowed_actions = array();


	/**
	 * Initializer, used on loading required JavaScript.
	 */
	public function init(){
		parent::init();

		Requirements::javascript(MODULE_GALLERY_DIR . '/thirdparty/jquery/jquery.min.js');
		Requirements::css(MODULE_GALLERY_DIR . '/thirdparty/colorbox/colorbox.css', 'screen,projection');
		Requirements::javascript(MODULE_GALLERY_DIR . '/thirdparty/colorbox/jquery.colorbox-min.js');
		$js =
<<<JS
			$(document).ready(function(){
				$(".group").colorbox({rel:'group'});
			});
JS;
		Requirements::customScript($js);
	}


}

