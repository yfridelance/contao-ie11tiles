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
class Helper extends \Backend
{

    /**
     * Return the file picker wizard
     * @param \DataContainer
     * @return string
     */
    public function filePicker(\DataContainer $dc)
    {
        return ' <a href="contao/file.php?do=' . \Input::get('do') . '&amp;table=' . $dc->table . '&amp;field=' . preg_replace('/_row[0-9]*_/i',
            '__', $dc->field) . '&amp;value=' . $dc->value . '" title="' . specialchars(str_replace("'", "\\'",
                $GLOBALS['TL_LANG']['MSC']['filepicker'])) . '" onclick="Backend.getScrollOffset();Backend.openModalSelector({\'width\':765,\'title\':\'' . specialchars($GLOBALS['TL_LANG']['MOD']['files'][0]) . '\',\'url\':this.href,\'id\':\'' . $dc->field . '\',\'tag\':\'ctrl_' . $dc->field . ((\Input::get('act') == 'editAll') ? '_' . $dc->id : '') . '\',\'self\':this});return false">' . \Image::getHtml('pickfile.gif',
            $GLOBALS['TL_LANG']['MSC']['filepicker'], 'style="vertical-align:top;cursor:pointer"') . '</a>';
    }

    /**
     * Return the link picker wizard
     * @param \DataContainer
     * @return string
     */
    public function pagePicker(\DataContainer $dc)
    {
        return ' <a href="contao/page.php?do=' . \Input::get('do') . '&amp;table=' . $dc->table . '&amp;field=' . $dc->field . '&amp;value=' . str_replace(array(
                '{{link_url::',
                '}}'
            ), '',
            $dc->value) . '" onclick="Backend.getScrollOffset();Backend.openModalSelector({\'width\':765,\'title\':\'' . specialchars(str_replace("'",
                "\\'",
                $GLOBALS['TL_LANG']['MOD']['page'][0])) . '\',\'url\':this.href,\'id\':\'' . $dc->field . '\',\'tag\':\'ctrl_' . $dc->field . ((\Input::get('act') == 'editAll') ? '_' . $dc->id : '') . '\',\'self\':this});return false">' . \Image::getHtml('pickpage.gif',
            $GLOBALS['TL_LANG']['MSC']['pagepicker'], 'style="vertical-align:top;cursor:pointer"') . '</a>';
    }


} 