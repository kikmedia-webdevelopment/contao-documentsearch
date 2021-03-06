<?php if (!defined('TL_ROOT')) die('You can not access this file directly!');

/**
 * TYPOlight webCMS
 * Copyright (C) 2005-2009 Leo Feyer
 *
 * This program is free software: you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation, either
 * version 2.1 of the License, or (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 * 
 * You should have received a copy of the GNU Lesser General Public
 * License along with this program. If not, please visit the Free
 * Software Foundation website at http://www.gnu.org/licenses/.
 *
 * PHP version 5
 * @copyright  Andreas Schempp 2009
 * @author     Andreas Schempp <andreas@schempp.ch>
 * @license    http://opensource.org/licenses/lgpl-3.0.html
 * @version    $Id$
 */


/**
 * Fields
 */
$GLOBALS['TL_LANG']['tl_settings']['searchExtensions']		= array('Document extensions to be indexed', 'Please check the extensions you want to include in your search.<br />Extensions not listed here are currently not supported or need additional modules.');
$GLOBALS['TL_LANG']['tl_settings']['searchDocuments']		= array('Document locations to be indexed', 'Please check the locations you want documents to be found and indexed.');
$GLOBALS['TL_LANG']['tl_settings']['searchToolPDF']			= array('Path to .pdf converter (pdftotext/pdf2ascii)', 'Please enter the absolute path to the PDF converter.');
$GLOBALS['TL_LANG']['tl_settings']['searchToolDOC']			= array('Path to "catdoc" application', 'Please enter the absolute path to the Word document converter.');
$GLOBALS['TL_LANG']['tl_settings']['searchToolPPT']			= array('Path to "ppthtml" application', 'Please enter the absolute path to the PowerPoint converter.');

