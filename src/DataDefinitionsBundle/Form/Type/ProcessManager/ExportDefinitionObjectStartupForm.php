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

namespace Instride\Bundle\DataDefinitionsBundle\Form\Type\ProcessManager;

use ProcessManagerBundle\Form\Type\AbstractStartupFormType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;

final class ExportDefinitionObjectStartupForm extends AbstractStartupFormType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('root', TextType::class, [
                'required' => false,
            ])
            ->add('query', TextType::class, [
                'required' => false,
            ])
            ->add('only_direct_children', CheckboxType::class, [
                'required' => false,
            ])
            ->add('condition', TextType::class, [
                'required' => false,
            ])
            ->add('ids', CollectionType::class, [
                'allow_add' => true,
                'entry_type' => TextType::class,
                'required' => false,
            ]);
    }
}
