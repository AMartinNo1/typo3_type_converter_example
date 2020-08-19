<?php
declare(strict_types=1);


namespace AMartinNo1\Typo3TypeConverterExample\TypeConverter;

use AMartinNo1\Typo3TypeConverterExample\Domain\Model\Person;
use TYPO3\CMS\Extbase\Property\PropertyMappingConfigurationInterface;
use TYPO3\CMS\Extbase\Property\TypeConverter\AbstractTypeConverter;

class PersonConverter extends AbstractTypeConverter
{
    public function convertFrom($source, string $targetType, array $convertedChildProperties = [], PropertyMappingConfigurationInterface $configuration = null)
    {
        if ($source === null || (string)$source === '') {
            return null;
        }
        $personData = explode('+', $source);
        return new Person($personData[0], $personData[1]);
    }

}