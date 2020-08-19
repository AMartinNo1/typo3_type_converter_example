<?php
declare(strict_types=1);

namespace AMartinNo1\Typo3TypeConverterExample\Controller;

use AMartinNo1\Typo3TypeConverterExample\Domain\Model\Person;
use AMartinNo1\Typo3TypeConverterExample\TypeConverter\PersonConverter;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ExampleController extends ActionController
{
    public function initializeAction()
    {
        parent::initializeAction();
        if (isset($this->arguments['person'])) {
            /** @var \TYPO3\CMS\Extbase\Property\PropertyMappingConfiguration $propertyMappingConfiguration */
            $propertyMappingConfiguration = $this->arguments['person']->getPropertyMappingConfiguration();
            $propertyMappingConfiguration->setTypeConverter(
                $this->objectManager->get(PersonConverter::class)
            );
        }
    }

    public function showAction(Person $person = null):void
    {
        $this->view->assign('person', $person);
    }
}