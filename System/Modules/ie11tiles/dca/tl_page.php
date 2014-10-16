<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   IE11Tile
 * @author    Yves Fridelance <yves@fridelance.ch>
 * @license   GNU/LGPL
 * @copyright Fridelance 2014
 */


/**
 * Table palettes
 */
$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'enableIE11Tile';
$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace
(
    '{protected_legend:hide}',
    '{ie11tile_legend:hide},enableIE11Tile;{protected_legend:hide}',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']
);
$GLOBALS['TL_DCA']['tl_page']['palettes']['root'] = str_replace
(
    '{protected_legend:hide}',
    '{ie11tile_legend:hide},enableIE11Tile;{protected_legend:hide}',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['root']
);
$GLOBALS['TL_DCA']['tl_page']['subpalettes']['enableIE11Tile'] = 'selectIE11Tile';

/**
 * Table fields
 */
$GLOBALS['TL_DCA']['tl_page']['fields']['enableIE11Tile'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_page']['enableIE11Tile'],
    'exclude'   => true,
    'inputType' => 'checkbox',
    'eval'      => array('submitOnChange' => true, 'tl_class' => 'w50'),
    'sql'       => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_page']['fields']['selectIE11Tile'] = array
(
    'label'            => &$GLOBALS['TL_LANG']['tl_page']['selectIE11Tile'],
    'inputType'        => 'select',
    //'options_callback' => array('IE11TilesHelper', 'getAllPublishedTilesForPage'),
    'eval'             => array('includeBlankOption' => true, 'chosen' => true, 'tl_class' => 'clr w50'),
    'sql'              => "int(10) unsigned NOT NULL default '0'",
);

