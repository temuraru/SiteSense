﻿/** SiteSense** NOTICE OF LICENSE** This source file is subject to the Open Software License (OSL 3.0)* that is bundled with this package in the file LICENSE.txt.* It is also available through the world-wide-web at this URL:* http://opensource.org/licenses/osl-3.0.php* If you did not receive a copy of the license and are unable to* obtain it through the world-wide-web, please send an email* to license@sitesense.org so we can send you a copy immediately.** DISCLAIMER** Do not edit or add to this file if you wish to upgrade SiteSense to newer* versions in the future. If you wish to customize SiteSense for your* needs please refer to http://www.sitesense.org for more information.** @author     Full Ambit Media, LLC <pr@fullambit.com>* @copyright  Copyright (c) 2011 Full Ambit Media, LLC (http://www.fullambit.com)* @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)* * ckEditor (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.* For licensing see http://ckeditor.com/license*/CKEDITOR.editorConfig = function( config ) {	// Define changes to default configuration here. For example:	// config.language = 'fr';	// config.uiColor = '#AADC6E';	config.baseHref=CMSBasePath;	config.toolbar_Full = [    { name: 'tools',       items : [ 'Preview','Maximize','Source' ] },    { name: 'clipboard',   items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },    { name: 'editing',     items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },    { name: 'objects',     items : [ 'Link','Unlink','Anchor','Image','Flash','Table','HorizontalRule','SpecialChar','PageBreak' ] },    '/',    { name: 'styles',      items : [ 'Styles','Format','TextColor','BGColor','Bold','Italic','Underline','Strike','Subscript','Superscript','RemoveFormat' ] },    { name: 'paragraph',   items : [ 'NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'] }	];	config.resize_dir = 'vertical';	config.startupOutlineBlocks = true;	config.format_tags = 'p;h3;h4;h5;h6;pre;div';	config.coreStyles_strike = { element : 'del', overrides : 'strike' };	config.stylesSet = "default:sitesense/styles.js";	config.contentsCss = 'ckeditor/sitesense/contents.css';};