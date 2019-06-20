/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.extraPlugins = 'lineutils,widget,codesnippet';
	//重做(上一步)次數
	config.undoStackSize = 50
		
	//設true CKEDITOR.editor.filter 失去作用 (註二)
	config.allowedContent=true;

	//allowedContent為false特別允許某些未開啟功能的標籤&nbsp;(註二)
	config.extraAllowedContent='iframe';
		
	
	config.height = "50em";//高度
	config.resize_enabled = false;
	config.removePlugins = 'elementspath';

	// 預設字體 - 詳見最下方(註一)
	config.font_defaultLabel = 'Arial';
	
	// 預設字體尺寸 - 詳見最下方
	config.fontSize_defaultLabel = '12px'; 
	
	
	// 使用Shift+ Enter組合鍵的行為。
	// CKEDITOR.ENTER_P &nbsp; = <p>;
	// CKEDITOR.ENTER_BR &nbsp;= <br/>
	// CKEDITOR.ENTER_DIV = <div>
	// Defaults to: CKEDITOR.ENTER_BR
	config.shiftEnterMode = CKEDITOR.ENTER_P;
	
	
	// 使用ENTER鍵產生的標籤
	// CKEDITOR.ENTER_P &nbsp; = <p>;
	// CKEDITOR.ENTER_BR &nbsp;= <br/>
	// CKEDITOR.ENTER_DIV = <div>
	// Defaults to: CKEDITOR.ENTER_BR
	config.enterMode = CKEDITOR.ENTER_BR;
	
	//是否忽略所有的字體相關的格式化風格，包括：字體大小、字型、字體顏色、字體背景色
	//Defaults to: true
	config.pasteFromWordRemoveFontStyles = false;
	
	//是否刪除不能管理編輯器中的元素的樣式。請注意，這並不處理特定字體的風格，這取決於設置而不是pasteFromWordRemoveFontStyles。 Defaults to: true
	config.pasteFromWordRemoveStyles = false;
	
};
