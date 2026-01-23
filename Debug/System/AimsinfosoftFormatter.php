<?php
/**
 * Aimsinfosoft
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Aimsinfosoft.com license that is
 * available through the world-wide-web at this URL:
 * https://www.aimsinfosoft.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Aimsinfosoft
 * @package     Aimsinfosoft_Base
 * @copyright   Copyright (c) Aimsinfosoft (https://www.aimsinfosoft.com/)
 * @license     https://www.aimsinfosoft.com/LICENSE.txt
 */


namespace Aimsinfosoft\Base\Debug\System;

use Monolog\Formatter\LineFormatter;
use Monolog\LogRecord;

class AimsinfosoftFormatter extends LineFormatter
{
    /**
     * format
     *
     * @param LogRecord $record
     * @return string
     */
    public function format(LogRecord $record): string
    {
        $output = $this->format;

        $output = str_replace(
            '%datetime%',
            $record->datetime->format('H:i d/m/Y'),
            $output
        );

        $output = str_replace(
            '%message%',
            $record->message,
            $output
        );

        return $output;
    }
}
