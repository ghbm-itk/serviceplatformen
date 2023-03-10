<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ImportInputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:klassifikationimportinput:ADD:2.0.0 | urn:oio:sagdok:importinput:ADD:1.0.0
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
     * The Klassifikation
     * Meta information extracted from the WSDL
     * - content: klassifikation
     * - ref: klasfik:Klassifikation
     * @var \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\KlassifikationType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\KlassifikationType $Klassifikation = null;
    /**
     * Constructor method for ImportInputType
     * @uses ImportInputType::setNoteTekst()
     * @uses ImportInputType::setKlassifikation()
     * @param string $noteTekst
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\KlassifikationType $klassifikation
     */
    public function __construct(?string $noteTekst = null, ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\KlassifikationType $klassifikation = null)
    {
        $this
            ->setNoteTekst($noteTekst)
            ->setKlassifikation($klassifikation);
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
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\ImportInputType
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
     * Get Klassifikation value
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\KlassifikationType|null
     */
    public function getKlassifikation(): ?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\KlassifikationType
    {
        return $this->Klassifikation;
    }
    /**
     * Set Klassifikation value
     * @param \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\KlassifikationType $klassifikation
     * @return \ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\ImportInputType
     */
    public function setKlassifikation(?\ItkDev\Serviceplatformen\SF1500\Klassifikation\StructType\KlassifikationType $klassifikation = null): self
    {
        $this->Klassifikation = $klassifikation;
        
        return $this;
    }
}
