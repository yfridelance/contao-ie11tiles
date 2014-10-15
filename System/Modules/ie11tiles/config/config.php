<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   IE_Tiles
 * @author    Yves Fridelance <yves@fridelance.ch>
 * @license   GNU/LGPL
 * @copyright Fridelance 2014
 */

/**
 * Module Version
 */
define('IE11TILES_VERSION', '1.0.0 alpha1');
define('IE11TILES_DEBUG', 1); // 0 = none | 1 = Screen | 2 = Write to file

/**
 * Path definitions
 */
define('IE11TILES_BROWSERCONFIG_URL', 'assets/ie11tiles');

/**
 * BACK END MODULES
 *
 * Back end modules are stored in a global array called "BE_MOD". You can add
 * your own modules by adding them to the array.
 *
 * $GLOBALS['BE_MOD'] = array
 * (
 *    'group_1' => array
 *    (
 *       'module_1' => array
 *       (
 *          'tables'       => array('table_1', 'table_2'),
 *          'callback'     => 'ClassName',
 *          'key'          => array('Class', 'method'),
 *          'icon'         => 'path/to/icon.gif',
 *          'stylesheet'   => 'path/to/stylesheet.css',
 *          'javascript'   => 'path/to/javascript.js'
 *       )
 *    )
 * );
 *
 * Not all of the keys mentioned above (like "tables", "key", "callback" etc.)
 * have to be set. Take a look at the system/modules/core/config/config.php
 * file to see how back end modules are configured.
 */
array_insert($GLOBALS['BE_MOD']['design'], 3, array
(
    'ie11tiles' => array
    (
        //'tables'      => array('tl_ie11tiles','tl_ie11tiles_notifications'),
        'tables' => array('tl_ie11tiles'),
        'icon'   => 'system/modules/ie11tiles/assets/icon.jpeg',
    )
));

/**
 * FRONT END MODULES
 *
 * Front end modules are stored in a global array called "FE_MOD". You can add
 * your own modules by adding them to the array.
 *
 * $GLOBALS['FE_MOD'] = array
 * (
 *    'group_1' => array
 *    (
 *       'module_1' => 'ModuleClass1',
 *       'module_2' => 'ModuleClass2'
 *    )
 * );
 *
 * The keys (like "module_1") are the module names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "ModuleClass1") are the names of the classes, which will be loaded when the
 * module is rendered. The class "ModuleClass1" has to be stored in a file
 * named "ModuleClass1.php" in your module folder.
 */

/**
 * CONTENT ELEMENTS
 *
 * Content elements are stored in a global array called "TL_CTE". You can add
 * your own content elements by adding them to the array.
 *
 * $GLOBALS['TL_CTE'] = array
 * (
 *    'group_1' => array
 *    (
 *       'cte_1' => 'ContentClass1',
 *       'cte_2' => 'ContentClass2'
 *    )
 * );
 *
 * The keys (like "cte_1") are the element names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "ContentClass1") are the names of the classes, which will be loaded when the
 * element is rendered. The class "ContentClass1" has to be stored in a file
 * named "ContentClass1.php" in your module folder.
 */


/**
 * BACK END FORM FIELDS
 *
 * Back end form fields are stored in a global array called "BE_FFL". You can
 * add your own form fields by adding them to the array.
 *
 * $GLOBALS['BE_FFL'] = array
 * (
 *    'input'  => 'FieldClass1',
 *    'select' => 'FieldClass2'
 * );
 *
 * The keys (like "input") are the field names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "FieldClass1") are the names of the classes, which will be loaded when the
 * field is rendered. The class "FieldClass1" has to be stored in a file named
 * "FieldClass1.php" in your module folder.
 */


/**
 * FRONT END FORM FIELDS
 *
 * Front end form fields are stored in a global array called "TL_FFL". You can
 * add your own form fields by adding them to the array.
 *
 * $GLOBALS['TL_FFL'] = array
 * (
 *    'input'  => 'FieldClass1',
 *    'select' => 'FieldClass2'
 * );
 *
 * The keys (like "input") are the field names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "FieldClass1") are the names of the classes, which will be loaded when the
 * field is rendered. The class "FieldClass1" has to be stored in a file named
 * "FieldClass1.php" in your module folder.
 */


/**
 * PAGE TYPES
 *
 * Page types are stored in a global array called "TL_PTY". You can add your own
 * page types by adding them to the array.
 *
 * $GLOBALS['TL_PTY'] = array
 * (
 *    'type_1' => 'PageType1',
 *    'type_2' => 'PageType2'
 * );
 *
 * The keys (like "type_1") are the field names, which are e.g. stored in the
 * database and used to find the corresponding translations. The values (like
 * "PageType1") are the names of the classes, which will be loaded when the
 * page is rendered. The class "PageType1" has to be stored in a file named
 * "PageType1.php" in your module folder.
 */


/**
 * MODEL MAPPINGS
 *
 * Model names are usually built from the table names, e.g. "tl_user_group"
 * becomes "UserGroupModel". There might be situations, however, where you need
 * to specify a custom mapping, e.g. when you are using nested namespaces.
 *
 * $GLOBALS['TL_MODELS'] = array
 * (
 *    'tl_user'       => 'Vendor\Application\UserModel',
 *    'tl_user_group' => 'Vendor\Application\UserGroupModel'
 * );
 *
 * You can register your mappings in the config.php file of your extension.
 */


/**
 * MAINTENANCE MODULES
 *
 * Maintenance modules are stored in a global array called "TL_MAINTENANCE". You
 * can add your own maintenance modules by adding them to the array.
 *
 * $GLOBALS['TL_MAINTENANCE'] = array
 * (
 *    'ClearCache',
 *    'RebuildSearchIndex'
 * );
 *
 * Take a look at the system/modules/core/classes/PurgeData.php file to see how
 * maintenance modules are set up. The class "ClearCache" has to be stored in a
 * file named "ClearCache.php" in your module folder.
 */


/**
 * PURGE JOBS
 *
 * Purge jobs are stored in a global array called "TL_PURGE". You can add your
 * own purge jobs by adding them to the array.
 *
 * $GLOBALS['TL_PURGE'] = array
 * (
 *    'job_1' => array
 *    (
 *       'tables' => array
 *       (
 *          'index' => array
 *          (
 *             'callback' => array('Automator', 'purgeSearchTables'),
 *             'affected' => array('tl_search', 'tl_search_index')
 *          ),
 *       )
 *   );
 *
 * There are three categories: "tables" stores jobs which truncate database
 * tables, "folders" stores jobs which purge folders and "custom" stores jobs
 * which only trigger a callback function.
 */
//$GLOBALS['TL_PURGE']['folders']['ie11tiles']['callback'] = array('ModuleIE11Tiles', 'removeAllIE11TilesBrowserConfigFiles');
//$GLOBALS['TL_PURGE']['folders']['ie11tiles']['affected'] = array('assets/ie11tiles');

//$GLOBALS['TL_PURGE']['folders']['ie11tiles'] = array
//(
//    'callback'  => array(),
//    'affected'  => array(),
//);

/**
 * CRON JOBS
 *
 * Cron jobs are stored in a global array called "TL_CRON". You can add your own
 * cron jobs by adding them to the array.
 *
 * $GLOBALS['TL_CRON'] = array
 * (
 *    'monthly' => array
 *    (
 *       array('Automator', 'purgeImageCache')
 *    ),
 *    'weekly'   => array(),
 *    'daily'    => array(),
 *    'hourly'   => array(),
 *    'minutely' => array()
 * );
 *
 * Note that this is rather a command scheduler than a cron job, which does not
 * guarantee an exact execution time. You can replace the command scheduler with
 * a real cron job though.
 */


/**
 * HOOKS
 *
 * Hooks are stored in a global array called "TL_HOOKS". You can register your
 * own functions by adding them to the array.
 *
 * $GLOBALS['TL_HOOKS'] = array
 * (
 *    'hook_1' => array
 *    (
 *       array('MyClass', 'myPostLogin'),
 *       array('MyClass', 'myPostLogout')
 *    )
 * );
 *
 * Hooks allow you to add functionality to the core without having to modify the
 * source code by registering callback functions to be executed on a particular
 * event. For more information see https://contao.org/manual.html.
 */
$GLOBALS['TL_HOOKS']['generatePage'][] = array('\\Fry\\Ie11tiles\\Tiles', 'Test');

/**
 * AUTO ITEMS
 *
 * Auto items are stored in a global array called "TL_AUTO_ITEM". You can
 * register your own auto items by adding them to the array.
 *
 * $GLOBALS['TL_AUTO_ITEM'] = array('items', 'events');
 *
 * Auto items are keywords, which are used as parameters by certain modules.
 * When rebuilding the search index URLs, Contao needs to know about these
 * keywords so it can handle them properly.
 */

/**
 * Notification Templates Configuration
 */
$GLOBALS['TL_CONFIG']['ie11tiles']['notification_templates'] = array
(
    // Medium Tile (150x150)
    '150x150' => array
    (
        // Block
        'TileSquare150x150Block'              => array
        (
            'fallback' => 'TileSquareBlock',
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),

        ),
        // Text
        'TileSquare150x150Text01'             => array
        (
            'fallback' => 'TileSquareText01',
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
            ),
        ),
        'TileSquare150x150Text02'             => array
        (
            'fallback' => 'TileSquareText02',
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2, 'type' => 'multiline')),
            ),
        ),
        'TileSquare150x150Text03'             => array
        (
            'fallback' => 'TileSquareText03',
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
            ),
        ),
        'TileSquare150x150Text04'             => array
        (
            'fallback' => 'TileSquareText04',
            'fields'   => array
            (
                array('text' => array('id' => 1, 'type' => 'multiline')),
            ),
        ),
        // Image
        'TileSquare150x150Image'              => array
        (
            'fallback' => 'TileSquareImage',
            'fields'   => array
            (
                array('image' => array('width' => 270, 'height' => 270, 'id' => 1)),
            ),
        ),
        // Image and Text
        'TileSquare150x150PeekImageAndText01' => array
        (
            'fallback' => 'TileSquarePeekImageAndText01',
            'fields'   => array
            (
                array('image' => array('width' => 270, 'height' => 270, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
            ),
        ),
        'TileSquare150x150PeekImageAndText02' => array
        (
            'fallback' => 'TileSquarePeekImageAndText02',
            'fields'   => array
            (
                array('image' => array('width' => 270, 'height' => 270, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2, 'type' => 'multiline')),
            ),
        ),
        'TileSquare150x150PeekImageAndText03' => array
        (
            'fallback' => 'TileSquarePeekImageAndText03',
            'fields'   => array
            (
                array('image' => array('width' => 270, 'height' => 270, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
            ),
        ),
        'TileSquare150x150PeekImageAndText04' => array
        (
            'fallback' => 'TileSquarePeekImageAndText04',
            'fields'   => array
            (
                array('image' => array('width' => 270, 'height' => 270, 'id' => 1)),
                array('text' => array('id' => 1, 'type' => 'multiline')),
            ),
        ),
    ),
    // Wide Tile
    '310x150' => array
    (
        // Text
        'TileWide310x150Text01'                => array
        (
            'fallback' => 'TileWideText01',
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
            ),
        ),
        'TileWide310x150Text02'                => array
        (
            'fallback' => 'TileWideText02',
            'phone'    => false,
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
            ),
        ),
        'TileWide310x150Text03'                => array
        (
            'fallback' => 'TileWideText03',
            'fields'   => array
            (
                array('text' => array('id' => 1)),
            ),
        ),
        'TileWide310x150Text04'                => array
        (
            'fallback' => 'TileWideText04',
            'fields'   => array
            (
                array('text' => array('id' => 1, 'type' => 'multiline')),
            ),
        ),
        'TileWide310x150Text05'                => array
        (
            'fallback' => 'TileWideText05',
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
            ),
        ),
        'TileWide310x150Text06'                => array
        (
            'fallback' => 'TileWideText06',
            'phone'    => false,
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
            ),
        ),
        'TileWide310x150Text07'                => array
        (
            'fallback' => 'TileWideText07',
            'phone'    => false,
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
            ),
        ),
        'TileWide310x150Text08'                => array
        (
            'fallback' => 'TileWideText08',
            'phone'    => false,
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
            ),
        ),
        'TileWide310x150Text09'                => array
        (
            'fallback' => 'TileWideText09',
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2, 'type' => 'multiline')),
            ),
        ),
        'TileWide310x150Text10'                => array
        (
            'fallback' => 'TileWideText10',
            'phone'    => false,
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
            ),
        ),
        'TileWide310x150Text11'                => array
        (
            'fallback' => 'TileWideText11',
            'phone'    => false,
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
            ),
        ),
        // Block and text
        'TileWide310x150BlockAndText01'        => array
        (
            'fallback' => 'TileWideBlockAndText01',
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
            ),
        ),
        'TileWide310x150BlockAndText02'        => array
        (
            'fallback' => 'TileWideBlockAndText02',
            'fields'   => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
            ),
        ),
        // Image
        'TileWide310x150Image'                 => array
        (
            'fallback' => 'TileWideImage',
            'fields'   => array
            (
                array('image' => array('width' => 558, 'height' => 270, 'id' => 1)),
            ),
        ),
        'TileWide310x150ImageCollection'       => array
        (
            'fallback' => 'TileWideImageCollection',
            'fields'   => array
            (
                array('image' => array('width' => 288, 'height' => 270, 'id' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 2, 'row' => 1, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 3, 'row' => 1, 'column' => 2)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 4, 'row' => 2, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 5, 'row' => 2, 'column' => 2)),
            ),
        ),
        // Image and text
        'TileWide310x150ImageAndText01'        => array
        (
            'fallback' => 'TileWideImageAndText01',
            'fields'   => array(
                array('image' => array('width' => 558, 'height' => 180, 'id' => 1)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileWide310x150ImageAndText02'        => array
        (
            'fallback' => 'TileWideImageAndText02',
            'fields'   => array
            (
                array('image' => array('width' => 558, 'height' => 180, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),
        ),
        'TileWide310x150SmallImageAndText01'   => array
        (
            'fallback' => 'TileWideSmallImageAndText01',
            'fields'   => array
            (
                array('image' => array('width' => 144, 'height' => 144, 'id' => 1)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileWide310x150SmallImageAndText02'   => array
        (
            'fallback' => 'TileWideSmallImageAndText02',
            'fields'   => array
            (
                array('image' => array('width' => 144, 'height' => 144, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
            ),
        ),
        'TileWide310x150SmallImageAndText03'   => array
        (
            'fallback' => 'TileWideSmallImageAndText03',
            'fields'   => array
            (
                array('image' => array('width' => 144, 'height' => 144, 'id' => 1)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileWide310x150SmallImageAndText04'   => array
        (
            'fallback' => 'TileWideSmallImageAndText04',
            'fields'   => array
            (
                array('image' => array('width' => 144, 'height' => 144, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),
        ),
        'TileWide310x150SmallImageAndText05'   => array
        (
            'fallback' => 'TileWideSmallImageAndText05',
            'fields'   => array
            (
                array('image' => array('width' => 81, 'height' => 117, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),
        ),
        // Peak Image
        'TileWide310x150PeekImageCollection01' => array
        (
            'fallback' => 'TileWidePeekImageCollection01',
            'fields'   => array
            (
                array('image' => array('width' => 288, 'height' => 270, 'id' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 2, 'row' => 1, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 3, 'row' => 1, 'column' => 2)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 4, 'row' => 2, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 5, 'row' => 2, 'column' => 2)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),
        ),
        'TileWide310x150PeekImageCollection02' => array
        (
            'fallback' => 'TileWidePeekImageCollection02',
            'fields'   => array
            (
                array('image' => array('width' => 288, 'height' => 270, 'id' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 2, 'row' => 1, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 3, 'row' => 1, 'column' => 2)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 4, 'row' => 2, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 5, 'row' => 2, 'column' => 2)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
            ),
        ),
        'TileWide310x150PeekImageCollection03' => array
        (
            'fallback' => 'TileWidePeekImageCollection03',
            'fields'   => array
            (
                array('image' => array('width' => 288, 'height' => 270, 'id' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 2, 'row' => 1, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 3, 'row' => 1, 'column' => 2)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 4, 'row' => 2, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 5, 'row' => 2, 'column' => 2)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileWide310x150PeekImageCollection04' => array
        (
            'fallback' => 'TileWidePeekImageCollection04',
            'fields'   => array
            (
                array('image' => array('width' => 288, 'height' => 270, 'id' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 2, 'row' => 1, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 3, 'row' => 1, 'column' => 2)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 4, 'row' => 2, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 5, 'row' => 2, 'column' => 2)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileWide310x150PeekImageCollection05' => array
        (
            'fallback' => 'TileWidePeekImageCollection05',
            'fields'   => array
            (
                array('image' => array('width' => 288, 'height' => 270, 'id' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 2, 'row' => 1, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 3, 'row' => 1, 'column' => 2)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 4, 'row' => 2, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 5, 'row' => 2, 'column' => 2)),
                array('image' => array('width' => 144, 'height' => 144, 'id' => 6)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),
        ),
        'TileWide310x150PeekImageCollection06' => array
        (
            'fallback' => 'TileWidePeekImageCollection06',
            'fields'   => array
            (
                array('image' => array('width' => 288, 'height' => 270, 'id' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 2, 'row' => 1, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 3, 'row' => 1, 'column' => 2)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 4, 'row' => 2, 'column' => 1)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 5, 'row' => 2, 'column' => 2)),
                array('image' => array('width' => 144, 'height' => 144, 'id' => 6)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileWide310x150PeekImageAndText01'    => array
        (
            'fallback' => 'TileWidePeekImageAndText01',
            'fields'   => array
            (
                array('image' => array('width' => 558, 'height' => 180, 'id' => 1)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileWide310x150PeekImageAndText02'    => array
        (
            'fallback' => 'TileWidePeekImageAndText02',
            'fields'   => array
            (
                array('image' => array('width' => 558, 'height' => 180, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
            ),
        ),
        'TileWide310x150PeekImage01'           => array
        (
            'fallback' => 'TileWidePeekImage01',
            'fields'   => array
            (
                array('image' => array('width' => 558, 'height' => 270, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),
        ),
        'TileWide310x150PeekImage02'           => array
        (
            'fallback' => 'TileWidePeekImage02',
            'fields'   => array
            (
                array('image' => array('width' => 558, 'height' => 270, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
            ),
        ),
        'TileWide310x150PeekImage03'           => array
        (
            'fallback' => 'TileWidePeekImage03',
            'fields'   => array
            (
                array('image' => array('width' => 558, 'height' => 270, 'id' => 1)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileWide310x150PeekImage04'           => array
        (
            'fallback' => 'TileWidePeekImage04',
            'fields'   => array
            (
                array('image' => array('width' => 558, 'height' => 270, 'id' => 1)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileWide310x150PeekImage05'           => array
        (
            'fallback' => 'TileWidePeekImage05',
            'fields'   => array
            (
                array('image' => array('width' => 558, 'height' => 270, 'id' => 1)),
                array('image' => array('width' => 144, 'height' => 144, 'id' => 2)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),
        ),
        'TileWide310x150PeekImage06'           => array
        (
            'fallback' => 'TileWidePeekImage06',
            'fields'   => array
            (
                array('image' => array('width' => 558, 'height' => 270, 'id' => 1)),
                array('image' => array('width' => 144, 'height' => 144, 'id' => 2)),
                array('text' => array('id' => 1)),
            ),
        ),
    ),
    '310x310' => array
    (
        // Text
        'TileSquare310x310Text01'                   => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
            ),
        ),
        'TileSquare310x310Text02'                   => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
                array('text' => array('id' => 11)),
                array('text' => array('id' => 12)),
                array('text' => array('id' => 13)),
                array('text' => array('id' => 14)),
                array('text' => array('id' => 15)),
                array('text' => array('id' => 16)),
                array('text' => array('id' => 17)),
                array('text' => array('id' => 18)),
                array('text' => array('id' => 19)),
            ),
        ),
        'TileSquare310x310Text03'                   => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
                array('text' => array('id' => 11)),
            ),

        ),
        'TileSquare310x310Text04'                   => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
                array('text' => array('id' => 11)),
                array('text' => array('id' => 12)),
                array('text' => array('id' => 13)),
                array('text' => array('id' => 14)),
                array('text' => array('id' => 15)),
                array('text' => array('id' => 16)),
                array('text' => array('id' => 17)),
                array('text' => array('id' => 18)),
                array('text' => array('id' => 19)),
                array('text' => array('id' => 20)),
                array('text' => array('id' => 21)),
                array('text' => array('id' => 22)),
            ),
        ),
        'TileSquare310x310Text05'                   => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
                array('text' => array('id' => 11)),
                array('text' => array('id' => 12)),
                array('text' => array('id' => 13)),
                array('text' => array('id' => 14)),
                array('text' => array('id' => 15)),
                array('text' => array('id' => 16)),
                array('text' => array('id' => 17)),
                array('text' => array('id' => 18)),
                array('text' => array('id' => 19)),
            ),
        ),
        'TileSquare310x310Text06'                   => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
                array('text' => array('id' => 11)),
                array('text' => array('id' => 12)),
                array('text' => array('id' => 13)),
                array('text' => array('id' => 14)),
                array('text' => array('id' => 15)),
                array('text' => array('id' => 16)),
                array('text' => array('id' => 17)),
                array('text' => array('id' => 18)),
                array('text' => array('id' => 19)),
                array('text' => array('id' => 20)),
                array('text' => array('id' => 21)),
                array('text' => array('id' => 22)),
            ),
        ),
        'TileSquare310x310Text07'                   => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
                array('text' => array('id' => 11)),
                array('text' => array('id' => 12)),
                array('text' => array('id' => 13)),
                array('text' => array('id' => 14)),
                array('text' => array('id' => 15)),
                array('text' => array('id' => 16)),
                array('text' => array('id' => 17)),
                array('text' => array('id' => 18)),
                array('text' => array('id' => 19)),
            ),
        ),
        'TileSquare310x310Text08'                   => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
                array('text' => array('id' => 10)),
                array('text' => array('id' => 11)),
                array('text' => array('id' => 12)),
                array('text' => array('id' => 13)),
                array('text' => array('id' => 14)),
                array('text' => array('id' => 15)),
                array('text' => array('id' => 16)),
                array('text' => array('id' => 17)),
                array('text' => array('id' => 18)),
                array('text' => array('id' => 19)),
                array('text' => array('id' => 20)),
                array('text' => array('id' => 21)),
                array('text' => array('id' => 22)),
            ),
        ),
        'TileSquare310x310Text09'                   => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
            ),
        ),
        'TileSquare310x310TextList01'               => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
            ),
        ),
        'TileSquare310x310TextList02'               => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
            ),
        ),
        'TileSquare310x310TextList03'               => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
            ),
        ),
        'TileSquare310x310BlockAndText01'           => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
            ),
        ),
        'TileSquare310x310BlockAndText02'           => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 558, 'id' => 1)),
            ),

        ),
        // Image
        'TileSquare310x310Image'                    => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 558, 'id' => 1)),
            ),
        ),
        'TileSquare310x310ImageCollection'          => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 423, 'id' => 1)),
                array('image' => array('width' => 144, 'height' => 135, 'id' => 2)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 3)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 4)),
                array('image' => array('width' => 144, 'height' => 135, 'id' => 5)),
            ),
        ),
        'TileSquare310x310BlockAndText02'           => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 558, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
            ),
        ),
        // Image and Text
        'TileSquare310x310ImageAndText01'           => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 450, 'id' => 1)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileSquare310x310ImageAndText02'           => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 450, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),
        ),
        'TileSquare310x310ImageAndTextOverlay01'    => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 558, 'id' => 1)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileSquare310x310ImageAndTextOverlay02'    => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 558, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),
        ),
        'TileSquare310x310ImageAndTextOverlay03'    => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 558, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
            ),
        ),
        'TileSquare310x310ImageCollectionAndText01' => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 558, 'id' => 1)),
                array('image' => array('width' => 144, 'height' => 135, 'id' => 2)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 3)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 4)),
                array('image' => array('width' => 144, 'height' => 135, 'id' => 5)),
                array('text' => array('id' => 1)),
            ),
        ),
        'TileSquare310x310ImageCollectionAndText02' => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 558, 'height' => 558, 'id' => 1)),
                array('image' => array('width' => 144, 'height' => 135, 'id' => 2)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 3)),
                array('image' => array('width' => 135, 'height' => 135, 'id' => 4)),
                array('image' => array('width' => 144, 'height' => 135, 'id' => 5)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
            ),
        ),
        'TileSquare310x310SmallImagesAndTextList01' => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 108, 'height' => 108, 'id' => 1)),
                array('image' => array('width' => 108, 'height' => 108, 'id' => 2)),
                array('image' => array('width' => 108, 'height' => 108, 'id' => 3)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
                array('text' => array('id' => 8)),
                array('text' => array('id' => 9)),
            ),
        ),
        'TileSquare310x310SmallImagesAndTextList02' => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 108, 'height' => 108, 'id' => 1)),
                array('image' => array('width' => 108, 'height' => 108, 'id' => 2)),
                array('image' => array('width' => 108, 'height' => 108, 'id' => 3)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
            ),
        ),
        'TileSquare310x310SmallImagesAndTextList03' => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 108, 'height' => 108, 'id' => 1)),
                array('image' => array('width' => 108, 'height' => 108, 'id' => 2)),
                array('image' => array('width' => 108, 'height' => 108, 'id' => 3)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
            ),
        ),
        'TileSquare310x310SmallImagesAndTextList04' => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 81, 'height' => 117, 'id' => 1)),
                array('image' => array('width' => 81, 'height' => 117, 'id' => 2)),
                array('image' => array('width' => 81, 'height' => 117, 'id' => 3)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
            ),
        ),
        'TileSquare310x310SmallImagesAndTextList05' => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 108, 'height' => 108, 'id' => 1)),
                array('image' => array('width' => 108, 'height' => 108, 'id' => 2)),
                array('image' => array('width' => 108, 'height' => 108, 'id' => 3)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
                array('text' => array('id' => 4)),
                array('text' => array('id' => 5)),
                array('text' => array('id' => 6)),
                array('text' => array('id' => 7)),
            ),
        ),
        'TileSquare310x310SmallImageAndText01'      => array
        (
            'phone'  => false,
            'fields' => array
            (
                array('image' => array('width' => 144, 'height' => 144, 'id' => 1)),
                array('text' => array('id' => 1)),
                array('text' => array('id' => 2)),
                array('text' => array('id' => 3)),
            ),
        ),
    ),

);

