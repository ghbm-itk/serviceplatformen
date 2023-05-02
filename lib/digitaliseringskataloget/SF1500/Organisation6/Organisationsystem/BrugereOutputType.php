<?php

namespace Digitaliseringskataloget\SF1500\Organisation6\Organisationsystem;

/**
 * Class representing BrugereOutputType
 *
 *
 * XSD Type: BrugereOutputType
 */
class BrugereOutputType
{
    /**
     * @var \Digitaliseringskataloget\SF1500\Organisation6\Bruger\FiltreretOejebliksbilledeType[] $filtreretOejebliksbillede
     */
    private $filtreretOejebliksbillede = [
        
    ];

    /**
     * Adds as filtreretOejebliksbillede
     *
     * @return self
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Bruger\FiltreretOejebliksbilledeType $filtreretOejebliksbillede
     */
    public function addToFiltreretOejebliksbillede(\Digitaliseringskataloget\SF1500\Organisation6\Bruger\FiltreretOejebliksbilledeType $filtreretOejebliksbillede)
    {
        $this->filtreretOejebliksbillede[] = $filtreretOejebliksbillede;
        return $this;
    }

    /**
     * isset filtreretOejebliksbillede
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFiltreretOejebliksbillede($index)
    {
        return isset($this->filtreretOejebliksbillede[$index]);
    }

    /**
     * unset filtreretOejebliksbillede
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFiltreretOejebliksbillede($index)
    {
        unset($this->filtreretOejebliksbillede[$index]);
    }

    /**
     * Gets as filtreretOejebliksbillede
     *
     * @return \Digitaliseringskataloget\SF1500\Organisation6\Bruger\FiltreretOejebliksbilledeType[]
     */
    public function getFiltreretOejebliksbillede()
    {
        return $this->filtreretOejebliksbillede;
    }

    /**
     * Sets a new filtreretOejebliksbillede
     *
     * @param \Digitaliseringskataloget\SF1500\Organisation6\Bruger\FiltreretOejebliksbilledeType[] $filtreretOejebliksbillede
     * @return self
     */
    public function setFiltreretOejebliksbillede(array $filtreretOejebliksbillede = null)
    {
        $this->filtreretOejebliksbillede = $filtreretOejebliksbillede;
        return $this;
    }
}

