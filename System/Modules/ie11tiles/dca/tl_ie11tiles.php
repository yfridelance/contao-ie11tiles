<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   IE11Tiles
 * @author    Yves Fridelance <yves@fridelance.ch>
 * @license   GNU/LGPL
 * @copyright Fridelance 2014
 */


/**
 * Table tl_ie11tiles
 */
$GLOBALS['TL_DCA']['tl_ie11tiles'] = array
(

    // Config
    'config'      => array(
        'dataContainer'     => 'Table',
        'enableVersioning'  => true,
        //'ctable'                => array('tl_ie11tiles_notifications'),
        'onsubmit_callback' => array
        (//array('tl_ie11tiles', 'generateBrowserConfig'),
        ),
        'sql'               => array
        (
            'keys' => array
            (
                'id' => 'primary'
            )
        ),
    ),
    // List
    'list'        => array
    (
        'sorting'           => array
        (
            'mode'        => 1,
            'fields'      => array('title'),
            'flag'        => 1,
            'panelLayout' => 'filter;search,limit'
        ),
        'label'             => array
        (
            'fields' => array('title'),
            'format' => '%s'
        ),
        'global_operations' => array
        (
            'all' => array
            (
                'label'      => &$GLOBALS['TL_LANG']['MSC']['all'],
                'href'       => 'act=select',
                'class'      => 'header_edit_all',
                'attributes' => 'onclick="Backend.getScrollOffset()" accesskey="e"'
            )
        ),
        'operations'        => array
        (
            'edit'       => array
            (
                'label' => &$GLOBALS['TL_LANG']['tl_cds']['edit'],
                'href'  => 'table=tl_ie11tiles_notifications',
                'icon'  => 'edit.gif'
            ),
            'editheader' => array
            (
                'label' => &$GLOBALS['TL_LANG']['tl_calendar']['editheader'],
                'href'  => 'act=edit',
                'icon'  => 'header.gif',
                //'button_callback'     => array('tl_calendar', 'editHeader')
            ),
            'copy'       => array
            (
                'label' => &$GLOBALS['TL_LANG']['tl_cds']['copy'],
                'href'  => 'act=copy',
                'icon'  => 'copy.gif'
            ),
            'delete'     => array
            (
                'label'      => &$GLOBALS['TL_LANG']['tl_cds']['delete'],
                'href'       => 'act=delete',
                'icon'       => 'delete.gif',
                'attributes' => 'onclick="if(!confirm(\'' . $GLOBALS['TL_LANG']['MSC']['deleteConfirm'] . '\'))return false;Backend.getScrollOffset()"'
            ),
            'toggle'     => array
            (
                'label'           => &$GLOBALS['TL_LANG']['tl_page']['toggle'],
                'icon'            => 'visible.gif',
                'attributes'      => 'onclick="Backend.getScrollOffset();return AjaxRequest.toggleVisibility(this,%s)"',
                'button_callback' => array('tl_ie11tiles', 'toggleIcon')
            ),
            'show'       => array
            (
                'label' => &$GLOBALS['TL_LANG']['tl_cds']['show'],
                'href'  => 'act=show',
                'icon'  => 'show.gif'
            )
        )
    ),
    // Palettes
    'palettes'    => array
    (
        '__selector__' => array('enableWideTile', 'enableLargeTile'),
        'default'      => '{title_legend},title,appName,startUrl;{static-tile_legend},tilesColor,smallImage,mediumImage,enableWideTile;{live-tile_legend:hide},title',
    ),
    // Subpalettes
    'subpalettes' => array
    (
        'enableWideTile'  => 'wideImage,enableLargeTile',
        'enableLargeTile' => 'largeImage',
    ),
    // Fields
    'fields'      => array
    (
        'id'              => array
        (
            'sql' => "int(10) unsigned NOT NULL auto_increment"
        ),
        'tstamp'          => array
        (
            'sql' => "int(10) unsigned NOT NULL default '0'"
        ),
        'published'       => array
        (
            'sql' => "char(1) NOT NULL default ''"
        ),
        'title'           => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_ie11tiles']['title'],
            'exclude'   => true,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => array('mandatory' => true, 'maxlength' => 128, 'tl_class' => 'w50'),
            'sql'       => "varchar(128) NOT NULL default ''"
        ),
        'appName'         => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_ie11tiles']['appName'],
            'exclude'   => true,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => array('mandatory' => false, 'maxlength' => 128, 'tl_class' => 'clr w50'),
            'sql'       => "varchar(128) NOT NULL default ''"
        ),
        'startUrl'        => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_ie11tiles']['startUrl'],
            'exclude'   => true,
            'search'    => true,
            'inputType' => 'text',
            'eval'      => array('mandatory' => false, 'maxlength' => 255, 'tl_class' => 'w50'),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'tilesColor'      => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_ie11tiles']['tilesColor'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => array(
                'maxlength'      => 6,
                'multiple'       => false,
                'size'           => 2,
                'colorpicker'    => true,
                'isHexColor'     => true,
                'decodeEntities' => true,
                'tl_class'       => 'w50 wizard'
            ),
            'sql'       => "varchar(64) NOT NULL default ''"
        ),
        'enableWideTile'  => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_ie11tiles']['enableWideTile'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => array('submitOnChange' => true, 'doNotCopy' => true, 'tl_class' => 'm12 w50 clr'),
            'sql'       => "char(1) NOT NULL default ''"
        ),
        'enableLargeTile' => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_ie11tiles']['enableLargeTile'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => array('submitOnChange' => true, 'doNotCopy' => true, 'tl_class' => 'm12 w50 clr'),
            'sql'       => "char(1) NOT NULL default ''"
        ),
        'smallImage'      => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_ie11tiles']['smallImage'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => array('filesOnly'  => true,
                                 'extensions' => array('png'),
                                 'fieldType'  => 'radio',
                                 'tl_class'   => 'clr w50 wizard'
            ),
            'wizard'    => array
            (
                array('IE11TilesHelper', 'filePicker')
            ),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'mediumImage'     => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_ie11tiles']['mediumImage'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => array('filesOnly'  => true,
                                 'extensions' => array('png'),
                                 'fieldType'  => 'radio',
                                 'tl_class'   => 'w50 wizard'
            ),
            'wizard'    => array
            (
                array('IE11TilesHelper', 'filePicker')
            ),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'wideImage'       => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_ie11tiles']['wideImage'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => array('filesOnly'  => true,
                                 'extensions' => array('png'),
                                 'fieldType'  => 'radio',
                                 'tl_class'   => 'w50 wizard'
            ),
            'wizard'    => array
            (
                array('IE11TilesHelper', 'filePicker')
            ),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),
        'largeImage'      => array
        (
            'label'     => &$GLOBALS['TL_LANG']['tl_ie11tiles']['largeImage'],
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => array('filesOnly'  => true,
                                 'extensions' => array('png'),
                                 'fieldType'  => 'radio',
                                 'tl_class'   => 'w50 wizard'
            ),
            'wizard'    => array
            (
                array('IE11TilesHelper', 'filePicker')
            ),
            'sql'       => "varchar(255) NOT NULL default ''"
        ),

    ),
);