<?php

define('FRONTEND_EDIT_PREFIX', 'frontendedit');
define('LOCKABLE_PREFIX', '__lockable');
define('TREE_PREFIX', '__tree');

Director::addRules(100, array(
	FRONTEND_EDIT_PREFIX.'//$Action' => 'FrontendEditing_Controller',
	LOCKABLE_PREFIX.'//$Action//$ID' => 'LockableController',
	TREE_PREFIX.'//$Action//$ID' => 'SimpleTreeController',

));

if (($FRONTEND_EDITING_MODULE = basename(dirname(__FILE__))) != 'frontend-editing') {
	die("The Frontend Editing module MUST be in the /frontend-editing directory, not $FRONTEND_EDITING_MODULE");
}

// Add something like the following for pages that you are going to use frontend editing on
// DataObject::add_extension('Page', 'FrontendEditableExtension');
// DataObject::add_extension('Page', 'FrontendLockable');
//
// Then, in templates, use $EditableField(<fieldname>) to have an html editable field
//

