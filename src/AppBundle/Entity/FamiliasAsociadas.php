<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FamiliasAsociadas
 *
 * @ORM\Table(name="familias_asociadas")
 * @ORM\Entity
 */
class FamiliasAsociadas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="codigo_asociado", type="integer", nullable=true)
     */
    private $codigoAsociado;

    /**
     * @var string
     *
     * @ORM\Column(name="familia", type="string", length=45, nullable=true)
     */
    private $familia;

    /**
     * @var string
     *
     * @ORM\Column(name="volumen", type="string", length=45, nullable=true)
     */
    private $volumen;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigoAsociado
     *
     * @param integer $codigoAsociado
     *
     * @return FamiliasAsociadas
     */
    public function setCodigoAsociado($codigoAsociado)
    {
        $this->codigoAsociado = $codigoAsociado;

        return $this;
    }

    /**
     * Get codigoAsociado
     *
     * @return integer
     */
    public function getCodigoAsociado()
    {
        return $this->codigoAsociado;
    }

    /**
     * Set familia
     *
     * @param string $familia
     *
     * @return FamiliasAsociadas
     */
    public function setFamilia($familia)
    {
        $this->familia = $familia;

        return $this;
    }

    /**
     * Get familia
     *
     * @return string
     */
    public function getFamilia()
    {
        return $this->familia;
    }

    /**
     * Set volumen
     *
     * @param string $volumen
     *
     * @return FamiliasAsociadas
     */
    public function setVolumen($volumen)
    {
        $this->volumen = $volumen;

        return $this;
    }

    /**
     * Get volumen
     *
     * @return string
     */
    public function getVolumen()
    {
        return $this->volumen;
    }
}
