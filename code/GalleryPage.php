<?php


/**
 * Defining the custom item of this page type.
 */
define('GALLERY_ICON_PATH', MODULE_GALLERY_DIR . '/icons/gallery');



/**
 * Definining the gallery page.
 *
 * @package mysite
 */
class GalleryPage extends Page {


	/**
	 * Relation to all included images.
	 */
	static $has_many = array(
		'GalleryImages' => 'GalleryImage',
	);


	/**
	 * Add a custom icon for easier recognition.
	 */
	public static $icon = GALLERY_ICON_PATH;


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


}



/**
 * Controller for the gallery page.
 *
 * @package mysite
 */
class GalleryPage_Controller extends Page_Controller {


	/**
	 * Functions exposed via their URL.
	 */
	public static $allowed_actions = array();


	/**
	 * Initializer, used on loading required JavaScript.
	 */
	public function init(){
		parent::init();

    // Do not use SilverStripe's included jQuery version 1.4.2 (THIRDPARTY_DIR . '/jquery/jquery-packed.js') as it does not work with the latest Colorbox version
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
