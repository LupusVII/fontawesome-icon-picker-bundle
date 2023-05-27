<?php

declare(strict_types=1);

/*
 * This file is part of Fontawesome Icon Picker Bundle.
 *
 * (c) Marko Cupic 2023 <m.cupic@gmx.ch>
 * @license LGPL-3.0+
 * For the full copyright and license information,
 * please view the LICENSE file that was distributed with this source code.
 * @link https://github.com/markocupic/fontawesome-icon-picker-bundle
 */

namespace Markocupic\FontawesomeIconPickerBundle;

class Config
{
    public const FONTAWESOME_VERSION = '6.1.2';

    public static array $styles = [
        'fas' => 'fa-solid',
        'far' => 'fa-regular',
        'fal' => 'fa-light',
        'fab' => 'fa-brands',
        'fad' => 'fa-duotone',
        'fat' => 'fa-thin',
    ];
}
