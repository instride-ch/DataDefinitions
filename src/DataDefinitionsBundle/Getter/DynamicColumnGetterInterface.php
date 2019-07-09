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
 * @copyright  Copyright (c) 2016-2019 w-vision AG (https://www.w-vision.ch)
 * @license    https://github.com/w-vision/DataDefinitions/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

namespace Wvision\Bundle\DataDefinitionsBundle\Getter;

use Pimcore\Model\DataObject\Concrete;
use Wvision\Bundle\DataDefinitionsBundle\Model\ExportMapping;

interface DynamicColumnGetterInterface extends GetterInterface
{
    /**
     * @inheritDoc
     *
     * @return array The key-value array will be merged into the final data set,
     *               with array keys becoming column names.
     *
     *               It's up to the developer to ensure the keys don't collide
     *               with other columns from the definition and to always return
     *               exactly the same keys in exactly the same order for each object.
     */
    public function get(Concrete $object, ExportMappingInterface $map, $data): array;
}


