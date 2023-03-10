<?php

declare(strict_types=1);

namespace ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SoegOutputType StructType
 * Meta information extracted from the WSDL
 * - definition: urn:oio:sagdok:soegoutput:ADD:1.0.0
 * @subpackage Structs
 */
class SoegOutputType extends AbstractStructBase
{
    /**
     * The StandardRetur
     * Meta information extracted from the WSDL
     * - content: standardretur
     * - ref: sd:StandardRetur
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType $StandardRetur = null;
    /**
     * The IdListe
     * Meta information extracted from the WSDL
     * - content: idliste
     * - minOccurs: 0
     * - ref: sd:IdListe
     * @var \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\IdListeType|null
     */
    protected ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\IdListeType $IdListe = null;
    /**
     * Constructor method for SoegOutputType
     * @uses SoegOutputType::setStandardRetur()
     * @uses SoegOutputType::setIdListe()
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType $standardRetur
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\IdListeType $idListe
     */
    public function __construct(?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType $standardRetur = null, ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\IdListeType $idListe = null)
    {
        $this
            ->setStandardRetur($standardRetur)
            ->setIdListe($idListe);
    }
    /**
     * Get StandardRetur value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType|null
     */
    public function getStandardRetur(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType
    {
        return $this->StandardRetur;
    }
    /**
     * Set StandardRetur value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType $standardRetur
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegOutputType
     */
    public function setStandardRetur(?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\StandardReturType $standardRetur = null): self
    {
        $this->StandardRetur = $standardRetur;
        
        return $this;
    }
    /**
     * Get IdListe value
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\IdListeType|null
     */
    public function getIdListe(): ?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\IdListeType
    {
        return $this->IdListe;
    }
    /**
     * Set IdListe value
     * @param \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\IdListeType $idListe
     * @return \ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\SoegOutputType
     */
    public function setIdListe(?\ItkDev\Serviceplatformen\SF1500\OrganisationAdministration\StructType\IdListeType $idListe = null): self
    {
        $this->IdListe = $idListe;
        
        return $this;
    }
}
