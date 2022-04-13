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

declare(strict_types=1);

namespace Wvision\Bundle\DataDefinitionsBundle\Provider;

use Pimcore\Model\Asset;

abstract class AbstractFileProvider
{
    protected function getFile(array $params): string
    {
//        if (!str_starts_with($file, '/')) {
//            $file = sprintf('%s/%s', PIMCORE_PROJECT_ROOT, $file);
//        }

        if (isset($params['asset'])) {
            $asset = Asset::getByPath($params['asset']);

            return $asset->getTemporaryFile();
        }

        if (isset($params['file'])) {
            return $params['file'];
        }

        throw new \RuntimeException('No file or asset given');
    }
}
