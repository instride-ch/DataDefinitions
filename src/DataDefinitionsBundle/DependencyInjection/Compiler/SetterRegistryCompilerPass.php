<?php
/**
 * Data Definitions.
 *
 * LICENSE
 *
 * This source file is subject to the GNU General Public License version 3 (GPLv3)
 * For the full copyright and license information, please view the LICENSE.md and gpl-3.0.txt
 * files that are distributed with this source code.
 *
 * @copyright 2024 instride AG (https://instride.ch)
 * @license   https://github.com/instride-ch/DataDefinitions/blob/5.0/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

declare(strict_types=1);

namespace Instride\Bundle\DataDefinitionsBundle\DependencyInjection\Compiler;

use CoreShop\Component\Registry\RegisterRegistryTypePass;

final class SetterRegistryCompilerPass extends RegisterRegistryTypePass
{
    public const SETTER_TAG = 'data_definitions.setter';

    public function __construct()
    {
        parent::__construct(
            'data_definitions.registry.setter',
            'data_definitions.form.registry.setter',
            'data_definitions.setters',
            self::SETTER_TAG
        );
    }
}
