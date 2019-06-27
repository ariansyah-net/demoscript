/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 * Powered By Ariansyah.Net
 */
// CKEDITOR.editorConfig = function( config ) {
//     config.allowedContent = {
//         script: true,
//         $1: {
//             // This will set the default set of elements
//             elements: CKEDITOR.dtd,
//             attributes: true,
//             styles: true,
//             classes: true
//         }
//     };
// };


CKEDITOR.editorConfig = function( config ) {

 config.allowedContent = {
         script: true,
         $1: {
             // This will set the default set of elements
             elements: CKEDITOR.dtd,
             attributes: true,
             styles: true,
             classes: true
         }
     };
config.filebrowserBrowseUrl = './asset/admin/kcfinder/browse.php?type=files';
config.filebrowserImageBrowseUrl = './asset/admin/kcfinder/browse.php?type=images';
config.filebrowserFlashBrowseUrl = './asset/admin/kcfinder/browse.php?type=flash';
config.filebrowserUploadUrl = './asset/admin/kcfinder/upload.php?type=files';
config.filebrowserImageUploadUrl = './asset/admin/kcfinder/upload.php?type=images';
config.filebrowserFlashUploadUrl = './asset/admin/kcfinder/upload.php?type=flash';

};
