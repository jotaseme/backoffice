<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * Descarga
 *
 * @ORM\Table(name="descarga", indexes={@ORM\Index(name="USUARIO_has_FICHERO_FKIndex2", columns={"FICHERO_ID_FICHERO"}), @ORM\Index(name="DESCARGA_FKIndex2", columns={"USUARIO_ID_USUARIO"})})
 * @ORM\Entity(repositoryClass="AppBundle\Entity\DescargaRepository")
 */
class Descarga
{
    /**
     * @var integer
     *
     * @ORM\Column(name="FICHERO_ID_FICHERO", type="integer", nullable=false)
     */

    /**
     * @var \Fichero
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Fichero",inversedBy="descargas")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="FICHERO_ID_FICHERO", referencedColumnName="ID_FICHERO")
     * })
     *
     */
    private $ficheroIdFichero = '0';

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario",inversedBy="descargas")
     * @ORM\JoinColumns({
     * @ORM\JoinColumn(name="USUARIO_ID_USUARIO", referencedColumnName="ID_USUARIO")
     * })
     *
     */
    private $usuarioIdUsuario = '0';

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
     * Set ficheroIdFichero
     *
     * @param integer $ficheroIdFichero
     *
     * @return Descarga
     */
    public function setFicheroIdFichero($ficheroIdFichero)
    {
        $this->ficheroIdFichero = $ficheroIdFichero;

        return $this;
    }

    /**
     * Get ficheroIdFichero
     *
     * @return integer
     */
    public function getFicheroIdFichero()
    {
        return $this->ficheroIdFichero;
    }

    /**
     * Set usuarioIdUsuario
     *
     * @param integer $usuarioIdUsuario
     *
     * @return Descarga
     */
    public function setUsuarioIdUsuario($usuarioIdUsuario)
    {
        $this->usuarioIdUsuario = $usuarioIdUsuario;

        return $this;
    }

    /**
     * Get usuarioIdUsuario
     *
     * @return integer
     */
    public function getUsuarioIdUsuario()
    {
        return $this->usuarioIdUsuario;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Descarga
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
