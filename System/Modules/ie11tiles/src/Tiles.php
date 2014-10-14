<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2014 Leo Feyer
 *
 * @package   contao-ie_tiles
 * @author    Yves Fridelance <yves@fridelance.ch>
 * @license   GNU/LGPL
 * @copyright Fridelance 2014
 */


/**
 * Run in a custom namespace, so the class can be replaced
 */
namespace Fry;


/**
 * Class Tiles
 *
 * @copyright  Fridelance 2014
 * @author     Yves Fridelance <yves@fridelance.ch>
 * @package    contao-ie_tiles
 */
class Tiles extends \Backend
{

    public function test()
    {
        \File::putContent('test.xml', 'Dies ist ein test');
    }
} 