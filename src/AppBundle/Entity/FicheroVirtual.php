<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FicheroVirtual
 *
 * @ORM\Table(name="fichero_virtual")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\FicheroVirtualRepository")
 */
class FicheroVirtual
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_FICHERO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFichero;

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROVEEDOR", type="integer", nullable=false)
     */
    private $idProveedor = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="IS_FOLDER", type="boolean", nullable=false)
     */
    private $isFolder = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CONTENEDOR", type="integer", nullable=true)
     */
    private $idContenedor;

    /**
     * @var string
     *
     * @ORM\Column(name="PATH", type="text", length=65535, nullable=false)
     */
    private $path;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=255, nullable=false)
     */
    private $nombre = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CREACION", type="date", nullable=false)
     */
    private $fechaCreacion = '0000-00-00';

    /**
     * @var boolean
     *
     * @ORM\Column(name="PUBLICADO", type="boolean", nullable=false)
     */
    private $publicado = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="TITULO_OFERTA", type="string", length=255, nullable=true)
     */
    private $tituloOferta;

    /**
     * @var string
     *
     * @ORM\Column(name="DESCRIPCION_OFERTA", type="text", length=65535, nullable=true)
     */
    private $descripcionOferta;

    /**
     * @var string
     *
     * @ORM\Column(name="FINANCIACION_OFERTA", type="text", length=65535, nullable=true)
     */
    private $financiacionOferta;

    /**
     * @var string
     *
     * @ORM\Column(name="PAIS", type="string", length=10, nullable=true)
     */
    private $pais;



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
     * Set idProveedor
     *
     * @param integer $idProveedor
     *
     * @return FicheroVirtual
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
     * Set isFolder
     *
     * @param boolean $isFolder
     *
     * @return FicheroVirtual
     */
    public function setIsFolder($isFolder)
    {
        $this->isFolder = $isFolder;

        return $this;
    }

    /**
     * Get isFolder
     *
     * @return boolean
     */
    public function getIsFolder()
    {
        return $this->isFolder;
    }

    /**
     * Set idContenedor
     *
     * @param integer $idContenedor
     *
     * @return FicheroVirtual
     */
    public function setIdContenedor($idContenedor)
    {
        $this->idContenedor = $idContenedor;

        return $this;
    }

    /**
     * Get idContenedor
     *
     * @return integer
     */
    public function getIdContenedor()
    {
        return $this->idContenedor;
    }

    /**
     * Set path
     *
     * @param string $path
     *
     * @return FicheroVirtual
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return FicheroVirtual
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set fechaCreacion
     *
     * @param \DateTime $fechaCreacion
     *
     * @return FicheroVirtual
     */
    public function setFechaCreacion($fechaCreacion)
    {
        $this->fechaCreacion = $fechaCreacion;

        return $this;
    }

    /**
     * Get fechaCreacion
     *
     * @return \DateTime
     */
    public function getFechaCreacion()
    {
        return $this->fechaCreacion;
    }

    /**
     * Set publicado
     *
     * @param boolean $publicado
     *
     * @return FicheroVirtual
     */
    public function setPublicado($publicado)
    {
        $this->publicado = $publicado;

        return $this;
    }

    /**
     * Get publicado
     *
     * @return boolean
     */
    public function getPublicado()
    {
        return $this->publicado;
    }

    /**
     * Set tituloOferta
     *
     * @param string $tituloOferta
     *
     * @return FicheroVirtual
     */
    public function setTituloOferta($tituloOferta)
    {
        $this->tituloOferta = $tituloOferta;

        return $this;
    }

    /**
     * Get tituloOferta
     *
     * @return string
     */
    public function getTituloOferta()
    {
        return $this->tituloOferta;
    }

    /**
     * Set descripcionOferta
     *
     * @param string $descripcionOferta
     *
     * @return FicheroVirtual
     */
    public function setDescripcionOferta($descripcionOferta)
    {
        $this->descripcionOferta = $descripcionOferta;

        return $this;
    }

    /**
     * Get descripcionOferta
     *
     * @return string
     */
    public function getDescripcionOferta()
    {
        return $this->descripcionOferta;
    }

    /**
     * Set financiacionOferta
     *
     * @param string $financiacionOferta
     *
     * @return FicheroVirtual
     */
    public function setFinanciacionOferta($financiacionOferta)
    {
        $this->financiacionOferta = $financiacionOferta;

        return $this;
    }

    /**
     * Get financiacionOferta
     *
     * @return string
     */
    public function getFinanciacionOferta()
    {
        return $this->financiacionOferta;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return FicheroVirtual
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }
}
