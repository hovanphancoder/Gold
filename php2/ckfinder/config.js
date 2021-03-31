/*
 Copyright (c) 2007-2019, CKSource - Frederico Knabben. All rights reserved.
 For licensing, see LICENSE.html or https://ckeditor.com/sales/license/ckfinder
 */

var config = {};
config.filebrowserBrowseUrl = "https://localhost/ckfinder/ckfinder.html";
config.filebrowserImageBrowseUrl = "https://localhost/ckfinder/ckfinder.html?type=Images";
config.filebrowserFlashBrowseUrl = "https://localhost/ckfinder/ckfinder.html?type=Flash";
config.filebrowserUploadUrl = "https://localhost/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files";
config.filebrowserImageUploadUrl = "https://localhost/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images";
config.filebrowserFlashUploadUrl = "https://localhost/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash";


// http://hellolaptrinh.com/huong-dan-tich-hop-ckeditor-va-ckfinder-vao-website.html
// Set your configuration options below.
// Examples:
// config.language = 'pl';
// config.skin = 'jquery-mobile';

CKFinder.define(config);