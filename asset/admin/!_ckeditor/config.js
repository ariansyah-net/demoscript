/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 *
 * Powered By Ariansyah.Net
 */
  // CKEDITOR.editorConfig = function( config ) {
  //    config.allowedContent = true;
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
  };
