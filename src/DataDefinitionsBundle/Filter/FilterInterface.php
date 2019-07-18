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
 * @license    https://github.com/w-vision/ImportDefinitions/blob/master/gpl-3.0.txt GNU General Public License version 3 (GPLv3)
 */

namespace Wvision\Bundle\DataDefinitionsBundle\Filter;

use Pimcore\Model\DataObject\Concrete;
use Wvision\Bundle\DataDefinitionsBundle\Model\DefinitionInterface;

interface FilterInterface
{
    /**
     * @param DefinitionInterface $definition
     * @param array $data
     * @param Concrete $object
     *
     * @param array $configuration
     * @return boolean
     */
    public function filter(DefinitionInterface $definition, $data, $object, array $configuration);
}

class_alias(FilterInterface::class, 'ImportDefinitionsBundle\Filter\FilterInterface');
