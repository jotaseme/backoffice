<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DescargaVirtual
 *
 * @ORM\Table(name="descarga_virtual")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\DescargaVirtualRepository")
 */
class DescargaVirtual
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FICHERO", type="integer", nullable=false)
     */
    private $idFichero = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO", type="integer", nullable=false)
     */
    private $idUsuario = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA", type="datetime", nullable=false)
     */
    private $fecha = '0000-00-00 00:00:00';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_DESCARGA", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDescarga;



    /**
     * Set idFichero
     *
     * @param integer $idFichero
     *
     * @return DescargaVirtual
     */
    public function setIdFichero($idFichero)
    {
        $this->idFichero = $idFichero;

        return $this;
    }

    /**
     * Get idFichero
     *
     * @return integer
     */
    public function getIdFichero()
    {
        return $this->idFichero;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return DescargaVirtual
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    /**
     * Get idUsuario
     *
     * @return integer
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return DescargaVirtual
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Get idDescarga
     *
     * @return integer
     */
    public function getIdDescarga()
    {
        return $this->idDescarga;
    }
}
