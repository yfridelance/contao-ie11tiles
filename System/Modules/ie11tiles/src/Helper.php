<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   ie11tiles
 * @author    Yves Fridelance <yves@fridelance.ch>
 * @license   GNU/LGPL
 * @copyright Fridelance 2014
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Fry\Ie11tiles;


/**
 * Class Helper
 *
 * @copyright  Fridelance 2014
 * @author     Yves Fridelance <yves@fridelance.ch>
 * @package    ie11tiles
 */
class Helper
{
    public static function writeFile($file, $string)
    {
        \File::putContent($file, $string);
    }
} 