<?php


/**
 * Make images sortable per drag-and-drop.
 */
SortableDataObject::add_sortable_class('CustomImage');


/**
 * Set the module's directory.
 */
define('MODULE_GALLERY_DIR', 'module_gallery');


/**
 * Add the flexible gallery handler for including one anywhere on a flexible gallery page.
 */
ShortcodeParser::get()->register('FlexibleGallery', array('FlexibleGalleryPage', 'FlexibleGalleryHandler'));
