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

namespace WVision\Bundle\DataDefinitionsBundle\Interpreter;

use WVision\Bundle\DataDefinitionsBundle\Model\DataSetAwareInterface;
use WVision\Bundle\DataDefinitionsBundle\Model\DataSetAwareTrait;
use WVision\Bundle\DataDefinitionsBundle\Model\DefinitionInterface;
use WVision\Bundle\DataDefinitionsBundle\Model\Mapping;
use Pimcore\Model\DataObject\Concrete;

class QuantityValueInterpreter implements InterpreterInterface, DataSetAwareInterface
{
    use DataSetAwareTrait;

    /**
     * {@inheritdoc}
     */
    public function interpret(Concrete $object, $value, Mapping $map, $data, DefinitionInterface $definition, $params, $configuration)
    {
        $unit = $configuration['unit'];

        return new \Pimcore\Model\DataObject\Data\QuantityValue($value, $unit);
    }
}

class_alias(QuantityValueInterpreter::class, 'ImportDefinitionsBundle\Interpreter\QuantityValueInterpreter');