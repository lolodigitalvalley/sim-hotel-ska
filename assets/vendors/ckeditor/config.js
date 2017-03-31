/**
 * @license Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config )
{
config.filebrowserBrowseUrl = '../assets/vendors/kcfinder/browse.php?type=files';
config.filebrowserImageBrowseUrl = '../assets/vendors/kcfinder/browse.php?type=images';
config.filebrowserFlashBrowseUrl = '../assets//vendors/kcfinder/browse.php?type=flash';
config.filebrowserUploadUrl = '../assets//vendors/kcfinder/upload.php?type=files';
config.filebrowserImageUploadUrl = '../assets//vendors/kcfinder/upload.php?type=images';
config.filebrowserFlashUploadUrl = '../assets//vendors/kcfinder/upload.php?type=flash';
// Define changes to default configuration here. For example:
// config.language = 'fr';
// config.uiColor = '#AADC6E';
config.toolbar =
[
	{ name: 'document', items : [ 'Source','-','Save','NewPage','DocProps','Preview','Print','-','Templates' ] },    
	{ name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },
	{ name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },
    { name: 'tools', items : [ 'Maximize', 'ShowBlocks','-','About' ] },
	'/',
	{ name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },
	{ name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
	'-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },
	{ name: 'links', items : [ 'Link','Unlink','Anchor' ] },	
	{ name: 'styles', items : [ 'Styles','Format','Font','FontSize' ] },
	{ name: 'colors', items : [ 'TextColor','BGColor' ] },
    { name: 'insert', items : [ 'Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe' ] }	
];
};