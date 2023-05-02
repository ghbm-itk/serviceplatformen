<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for InteressefaellesskabType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:interessefaellesskab:ADD:2.0.0
 * @subpackage Structs
 */
class InteressefaellesskabType extends AktoerType
{
    /**
     * The Registrering
     * Meta information extracted from the WSDL
     * - content: registreringer
     * - maxOccurs: unbounded
     * - ref: intfs:Registrering
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType[]
     */
    protected ?array $Registrering = null;
    /**
     * Constructor method for InteressefaellesskabType
     * @uses InteressefaellesskabType::setRegistrering()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType[] $registrering
     */
    public function __construct(?array $registrering = null)
    {
        $this
            ->setRegistrering($registrering);
    }
    /**
     * Get Registrering value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType[]
     */
    public function getRegistrering(): ?array
    {
        return $this->Registrering;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRegistrering method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRegistrering method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRegistreringForArrayConstraintFromSetRegistrering(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $interessefaellesskabTypeRegistreringItem) {
            // validation for constraint: itemType
            if (!$interessefaellesskabTypeRegistreringItem instanceof \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType) {
                $invalidValues[] = is_object($interessefaellesskabTypeRegistreringItem) ? get_class($interessefaellesskabTypeRegistreringItem) : sprintf('%s(%s)', gettype($interessefaellesskabTypeRegistreringItem), var_export($interessefaellesskabTypeRegistreringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Registrering property can only contain items of type \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Registrering value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType[] $registrering
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskabType
     */
    public function setRegistrering(?array $registrering = null): self
    {
        // validation for constraint: array
        if ('' !== ($registreringArrayErrorMessage = self::validateRegistreringForArrayConstraintFromSetRegistrering($registrering))) {
            throw new InvalidArgumentException($registreringArrayErrorMessage, __LINE__);
        }
        $this->Registrering = $registrering;
        
        return $this;
    }
    /**
     * Add item to Registrering value
     * @throws InvalidArgumentException
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType $item
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\InteressefaellesskabType
     */
    public function addToRegistrering(\ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType) {
            throw new InvalidArgumentException(sprintf('The Registrering property can only contain items of type \ItkDev\Serviceplatformen\SF1500\OrganisationSystem\StructType\RegistreringType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->Registrering[] = $item;
        
        return $this;
    }
}
