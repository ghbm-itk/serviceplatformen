<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Adresse\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sts:adresseimportinput:ADD:2.0.0 | urn:oio:sagdok:importinput:ADD:1.0.0
 * @subpackage Structs
 */
class ImportInputType extends AbstractStructBase
{
    /**
     * The NoteTekst
     * Meta information extracted from the WSDL
     * - base: string
     * - content: note
     * - definition: urn:oio:sagdok:note:BDD:1.0.0
     * - maxLength: 1024
     * - minOccurs: 0
     * - ref: sd:NoteTekst
     * @var string|null
     */
    protected ?string $NoteTekst = null;
    /**
     * The Adresse
     * Meta information extracted from the WSDL
     * - content: adresse
     * - ref: adresse:Adresse
     * @var \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\AdresseType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Adresse\StructType\AdresseType $Adresse = null;
    /**
     * Constructor method for ImportInputType
     * @uses ImportInputType::setNoteTekst()
     * @uses ImportInputType::setAdresse()
     * @param string $noteTekst
     * @param \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\AdresseType $adresse
     */
    public function __construct(?string $noteTekst = null, ?\ItkDev\Serviceplatformen\SF1500\Adresse\StructType\AdresseType $adresse = null)
    {
        $this
            ->setNoteTekst($noteTekst)
            ->setAdresse($adresse);
    }
    /**
     * Get NoteTekst value
     * @return string|null
     */
    public function getNoteTekst(): ?string
    {
        return $this->NoteTekst;
    }
    /**
     * Set NoteTekst value
     * @param string $noteTekst
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\ImportInputType
     */
    public function setNoteTekst(?string $noteTekst = null): self
    {
        // validation for constraint: string
        if (!is_null($noteTekst) && !is_string($noteTekst)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($noteTekst, true), gettype($noteTekst)), __LINE__);
        }
        // validation for constraint: maxLength(1024)
        if (!is_null($noteTekst) && mb_strlen((string) $noteTekst) > 1024) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 1024', mb_strlen((string) $noteTekst)), __LINE__);
        }
        $this->NoteTekst = $noteTekst;
        
        return $this;
    }
    /**
     * Get Adresse value
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\AdresseType|null
     */
    public function getAdresse(): ?\ItkDev\Serviceplatformen\SF1500\Adresse\StructType\AdresseType
    {
        return $this->Adresse;
    }
    /**
     * Set Adresse value
     * @param \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\AdresseType $adresse
     * @return \ItkDev\Serviceplatformen\SF1500\Adresse\StructType\ImportInputType
     */
    public function setAdresse(?\ItkDev\Serviceplatformen\SF1500\Adresse\StructType\AdresseType $adresse = null): self
    {
        $this->Adresse = $adresse;
        
        return $this;
    }
}
