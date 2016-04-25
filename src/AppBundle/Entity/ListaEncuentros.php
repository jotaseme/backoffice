<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ListaEncuentros
 *
 * @ORM\Table(name="lista_encuentros")
 * @ORM\Entity
 */
class ListaEncuentros
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ENCUENTRO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idEncuentro;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CLIENTE", type="integer", nullable=true)
     */
    private $idCliente;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROVEEDOR", type="integer", nullable=true)
     */
    private $idProveedor;

    /**
     * @var integer
     *
     * @ORM\Column(name="PREFERENCIA", type="integer", nullable=true)
     */
    private $preferencia;

    /**
     * @var string
     *
     * @ORM\Column(name="SOLICITANTE", type="string", nullable=true)
     */
    private $solicitante;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_USUARIO", type="integer", nullable=true)
     */
    private $idUsuario;



    /**
     * Get idEncuentro
     *
     * @return integer
     */
    public function getIdEncuentro()
    {
        return $this->idEncuentro;
    }

    /**
     * Set idCliente
     *
     * @param integer $idCliente
     *
     * @return ListaEncuentros
     */
    public function setIdCliente($idCliente)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return integer
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }

    /**
     * Set idProveedor
     *
     * @param integer $idProveedor
     *
     * @return ListaEncuentros
     */
    public function setIdProveedor($idProveedor)
    {
        $this->idProveedor = $idProveedor;

        return $this;
    }

    /**
     * Get idProveedor
     *
     * @return integer
     */
    public function getIdProveedor()
    {
        return $this->idProveedor;
    }

    /**
     * Set preferencia
     *
     * @param integer $preferencia
     *
     * @return ListaEncuentros
     */
    public function setPreferencia($preferencia)
    {
        $this->preferencia = $preferencia;

        return $this;
    }

    /**
     * Get preferencia
     *
     * @return integer
     */
    public function getPreferencia()
    {
        return $this->preferencia;
    }

    /**
     * Set solicitante
     *
     * @param string $solicitante
     *
     * @return ListaEncuentros
     */
    public function setSolicitante($solicitante)
    {
        $this->solicitante = $solicitante;

        return $this;
    }

    /**
     * Get solicitante
     *
     * @return string
     */
    public function getSolicitante()
    {
        return $this->solicitante;
    }

    /**
     * Set idUsuario
     *
     * @param integer $idUsuario
     *
     * @return ListaEncuentros
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
}
