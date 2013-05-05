<?php



/**
 * Generic definition of the gallery page.
 *
 * @package module_gallery
 */
class AbstractGalleryPage extends Page {


	/**
	 * Relation to all included images.
	 */
	static $has_many = array(
		'GalleryImages' => 'GalleryImage',
	);


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
 * Generic controller for the gallery page.
 *
 * @package module_gallery
 */
abstract class AbstractGalleryPage_Controller extends Page_Controller {


	/**
	 * Functions exposed via their URL.
	 */
	public static $allowed_actions = array();


	/**
	 * Initializer, used on loading required JavaScript.
	 */
	public function init(){
		parent::init();
		Requirements::css(MODULE_GALLERY_DIR . '/thirdparty/colorbox/colorbox.css', 'screen,projection');

		/**
		 * Do not use SilverStripe's included jQuery version 1.4.2 via ``THIRDPARTY_DIR . '/jquery/jquery-packed.js'``
		 * as it does not work with the latest Colorbox version.
		 * Include this version if you require a current jQuery version.
		 */
		//Requirements::javascript(MODULE_GALLERY_DIR . '/thirdparty/jquery/jquery.min.js');
		// We need to bind this jQuery version to something else than $ to avoid conflicts
		//Requirements::customScript('var jq17 = jQuery.noConflict(true);');

		Requirements::javascript(MODULE_GALLERY_DIR . '/thirdparty/colorbox/jquery.colorbox-min.js');

		/*$js =
<<<JS
jq17(document).ready(function(){
	jq17(".group").colorbox({rel:'group'});
});
JS;*/
		$js =
<<<JS
$(document).ready(function(){
	$(".group").colorbox({rel:'group'});
});
JS;
		Requirements::customScript($js, "custom-colorbox");
	}


}
