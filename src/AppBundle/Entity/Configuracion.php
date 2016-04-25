<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Configuracion
 *
 * @ORM\Table(name="configuracion")
 * @ORM\Entity
 */
class Configuracion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idconfiguracion", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idconfiguracion;

    /**
     * @var integer
     *
     * @ORM\Column(name="limitacion24h", type="integer", nullable=true)
     */
    private $limitacion24h;

    /**
     * @var integer
     *
     * @ORM\Column(name="limitacion7d", type="integer", nullable=true)
     */
    private $limitacion7d;

    /**
     * @var integer
     *
     * @ORM\Column(name="limitacion30d", type="integer", nullable=true)
     */
    private $limitacion30d;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="renovacion_pass_usuarios_asociados", type="datetime", nullable=true)
     */
    private $renovacionPassUsuariosAsociados;



    /**
     * Get idconfiguracion
     *
     * @return integer
     */
    public function getIdconfiguracion()
    {
        return $this->idconfiguracion;
    }

    /**
     * Set limitacion24h
     *
     * @param integer $limitacion24h
     *
     * @return Configuracion
     */
    public function setLimitacion24h($limitacion24h)
    {
        $this->limitacion24h = $limitacion24h;

        return $this;
    }

    /**
     * Get limitacion24h
     *
     * @return integer
     */
    public function getLimitacion24h()
    {
        return $this->limitacion24h;
    }

    /**
     * Set limitacion7d
     *
     * @param integer $limitacion7d
     *
     * @return Configuracion
     */
    public function setLimitacion7d($limitacion7d)
    {
        $this->limitacion7d = $limitacion7d;

        return $this;
    }

    /**
     * Get limitacion7d
     *
     * @return integer
     */
    public function getLimitacion7d()
    {
        return $this->limitacion7d;
    }

    /**
     * Set limitacion30d
     *
     * @param integer $limitacion30d
     *
     * @return Configuracion
     */
    public function setLimitacion30d($limitacion30d)
    {
        $this->limitacion30d = $limitacion30d;

        return $this;
    }

    /**
     * Get limitacion30d
     *
     * @return integer
     */
    public function getLimitacion30d()
    {
        return $this->limitacion30d;
    }

    /**
     * Set renovacionPassUsuariosAsociados
     *
     * @param \DateTime $renovacionPassUsuariosAsociados
     *
     * @return Configuracion
     */
    public function setRenovacionPassUsuariosAsociados($renovacionPassUsuariosAsociados)
    {
        $this->renovacionPassUsuariosAsociados = $renovacionPassUsuariosAsociados;

        return $this;
    }

    /**
     * Get renovacionPassUsuariosAsociados
     *
     * @return \DateTime
     */
    public function getRenovacionPassUsuariosAsociados()
    {
        return $this->renovacionPassUsuariosAsociados;
    }
}
