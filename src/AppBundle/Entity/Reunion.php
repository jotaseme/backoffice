<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reunion
 *
 * @ORM\Table(name="reunion")
 * @ORM\Entity
 */
class Reunion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_REUNION", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idReunion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO", type="integer", nullable=true)
     */
    private $idUsuario;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="DIA_HORA", type="datetime", nullable=true)
     */
    private $diaHora;

    /**
     * @var integer
     *
     * @ORM\Column(name="ESTADO", type="smallint", nullable=true)
     */
    private $estado;

    /**
     * @var string
     *
     * @ORM\Column(name="TIPO_ASIGNACION", type="string", nullable=true)
     */
    private $tipoAsignacion;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO_REUNION", type="integer", nullable=true)
     */
    private $idUsuarioReunion;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION", type="string", length=200, nullable=true)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="POSICION", type="integer", nullable=true)
     */
    private $posicion;



    /**
     * Get idReunion
     *
     * @return integer
     */
    public function getIdReunion()
    {
        return $this->idReunion;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return Reunion
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
     * Set diaHora
     *
     * @param \DateTime $diaHora
     *
     * @return Reunion
     */
    public function setDiaHora($diaHora)
    {
        $this->diaHora = $diaHora;

        return $this;
    }

    /**
     * Get diaHora
     *
     * @return \DateTime
     */
    public function getDiaHora()
    {
        return $this->diaHora;
    }

    /**
     * Set estado
     *
     * @param integer $estado
     *
     * @return Reunion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return integer
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set tipoAsignacion
     *
     * @param string $tipoAsignacion
     *
     * @return Reunion
     */
    public function setTipoAsignacion($tipoAsignacion)
    {
        $this->tipoAsignacion = $tipoAsignacion;

        return $this;
    }

    /**
     * Get tipoAsignacion
     *
     * @return string
     */
    public function getTipoAsignacion()
    {
        return $this->tipoAsignacion;
    }

    /**
     * Set idUsuarioReunion
     *
     * @param integer $idUsuarioReunion
     *
     * @return Reunion
     */
    public function setIdUsuarioReunion($idUsuarioReunion)
    {
        $this->idUsuarioReunion = $idUsuarioReunion;

        return $this;
    }

    /**
     * Get idUsuarioReunion
     *
     * @return integer
     */
    public function getIdUsuarioReunion()
    {
        return $this->idUsuarioReunion;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Reunion
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set posicion
     *
     * @param integer $posicion
     *
     * @return Reunion
     */
    public function setPosicion($posicion)
    {
        $this->posicion = $posicion;

        return $this;
    }

    /**
     * Get posicion
     *
     * @return integer
     */
    public function getPosicion()
    {
        return $this->posicion;
    }
}
