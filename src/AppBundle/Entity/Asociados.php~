<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Asociados
 *
 * @ORM\Table(name="asociados")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\AsociadoRepository")
 */

class Asociados
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_ASOCIADO", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAsociado;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE", type="string", length=150, nullable=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMICILIO", type="string", length=255, nullable=true)
     */
    private $domicilio;

    /**
     * @var string
     *
     * @ORM\Column(name="POBLACION", type="string", length=100, nullable=true)
     */
    private $poblacion;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_POSTAL", type="string", length=30, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="PROVINCIA", type="string", length=50, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTACTO", type="string", length=100, nullable=true)
     */
    private $contacto;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="string", length=20, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=20, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="E_MAIL", type="string", length=200, nullable=true)
     */
    private $eMail;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_EMPLEADOS", type="integer", nullable=true)
     */
    private $numEmpleados;

    /**
     * @var integer
     *
     * @ORM\Column(name="NUM_VENDEDORES", type="integer", nullable=true)
     */
    private $numVendedores;

    /**
     * @var string
     *
     * @ORM\Column(name="ZONA_INFLUENCIA", type="string", length=255, nullable=true)
     */
    private $zonaInfluencia;

    /**
     * @var string
     *
     * @ORM\Column(name="SUPERFICIE_TIENDA", type="string", length=100, nullable=true)
     */
    private $superficieTienda;

    /**
     * @var string
     *
     * @ORM\Column(name="ABRASIVOS", type="string", nullable=true)
     */
    private $abrasivos;

    /**
     * @var string
     *
     * @ORM\Column(name="ACC_ALUMINIO", type="string", nullable=true)
     */
    private $accAluminio;

    /**
     * @var string
     *
     * @ORM\Column(name="ADHESIVOS", type="string", nullable=true)
     */
    private $adhesivos;

    /**
     * @var string
     *
     * @ORM\Column(name="BOMBAS", type="string", nullable=true)
     */
    private $bombas;

    /**
     * @var string
     *
     * @ORM\Column(name="AGRICOLA", type="string", nullable=true)
     */
    private $agricola;

    /**
     * @var string
     *
     * @ORM\Column(name="ART_BRICOLAJE", type="string", nullable=true)
     */
    private $artBricolaje;

    /**
     * @var string
     *
     * @ORM\Column(name="CALEF", type="string", nullable=true)
     */
    private $calef;

    /**
     * @var string
     *
     * @ORM\Column(name="CERR_METALIC", type="string", nullable=true)
     */
    private $cerrMetalic;

    /**
     * @var string
     *
     * @ORM\Column(name="CERR_MADERA", type="string", nullable=true)
     */
    private $cerrMadera;

    /**
     * @var string
     *
     * @ORM\Column(name="CONSTRUC", type="string", nullable=true)
     */
    private $construc;

    /**
     * @var string
     *
     * @ORM\Column(name="EQ_COMERCIAL", type="string", nullable=true)
     */
    private $eqComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="FERR_INDUSTRIAL", type="string", nullable=true)
     */
    private $ferrIndustrial;

    /**
     * @var string
     *
     * @ORM\Column(name="FIJACIONES", type="string", nullable=true)
     */
    private $fijaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="FONTANERIA", type="string", nullable=true)
     */
    private $fontaneria;

    /**
     * @var string
     *
     * @ORM\Column(name="HERRAJES", type="string", nullable=true)
     */
    private $herrajes;

    /**
     * @var string
     *
     * @ORM\Column(name="HERR_NEUMATICA", type="string", nullable=true)
     */
    private $herrNeumatica;

    /**
     * @var string
     *
     * @ORM\Column(name="HERR_CORTE", type="string", nullable=true)
     */
    private $herrCorte;

    /**
     * @var string
     *
     * @ORM\Column(name="HERR_ELECTRIC", type="string", nullable=true)
     */
    private $herrElectric;

    /**
     * @var string
     *
     * @ORM\Column(name="HERR_MANUAL", type="string", nullable=true)
     */
    private $herrManual;

    /**
     * @var string
     *
     * @ORM\Column(name="HIDRAULICA", type="string", nullable=true)
     */
    private $hidraulica;

    /**
     * @var string
     *
     * @ORM\Column(name="JARDINERIA", type="string", nullable=true)
     */
    private $jardineria;

    /**
     * @var string
     *
     * @ORM\Column(name="MANUTENCION", type="string", nullable=true)
     */
    private $manutencion;

    /**
     * @var string
     *
     * @ORM\Column(name="MAQ_MADERA", type="string", nullable=true)
     */
    private $maqMadera;

    /**
     * @var string
     *
     * @ORM\Column(name="MAQ_METAL", type="string", nullable=true)
     */
    private $maqMetal;

    /**
     * @var string
     *
     * @ORM\Column(name="MAT_ELECTRIC", type="string", nullable=true)
     */
    private $matElectric;

    /**
     * @var string
     *
     * @ORM\Column(name="MENAJE", type="string", nullable=true)
     */
    private $menaje;

    /**
     * @var string
     *
     * @ORM\Column(name="MOB_KIT", type="string", nullable=true)
     */
    private $mobKit;

    /**
     * @var string
     *
     * @ORM\Column(name="MOB_TALLER", type="string", nullable=true)
     */
    private $mobTaller;

    /**
     * @var string
     *
     * @ORM\Column(name="PINTURAS", type="string", nullable=true)
     */
    private $pinturas;

    /**
     * @var string
     *
     * @ORM\Column(name="PROT_LABORAL", type="string", nullable=true)
     */
    private $protLaboral;

    /**
     * @var string
     *
     * @ORM\Column(name="QUIMICA_IND", type="string", nullable=true)
     */
    private $quimicaInd;

    /**
     * @var string
     *
     * @ORM\Column(name="RIEGO", type="string", nullable=true)
     */
    private $riego;

    /**
     * @var string
     *
     * @ORM\Column(name="SANITARIOS", type="string", nullable=true)
     */
    private $sanitarios;

    /**
     * @var string
     *
     * @ORM\Column(name="MEDICION", type="string", nullable=true)
     */
    private $medicion;

    /**
     * @var string
     *
     * @ORM\Column(name="SOLDADURA", type="string", nullable=true)
     */
    private $soldadura;

    /**
     * @var string
     *
     * @ORM\Column(name="TORNILLERIA", type="string", nullable=true)
     */
    private $tornilleria;

    /**
     * @var string
     *
     * @ORM\Column(name="TEFILERIA", type="string", nullable=true)
     */
    private $tefileria;

    /**
     * @var string
     *
     * @ORM\Column(name="VENTILACION", type="string", nullable=true)
     */
    private $ventilacion;

    /**
     * @var string
     *
     * @ORM\Column(name="OTRAS", type="string", nullable=true)
     */
    private $otras;

    /**
     * @var string
     *
     * @ORM\Column(name="OTRAS_ESPEC", type="string", length=200, nullable=true)
     */
    private $otrasEspec;

    /**
     * @var string
     *
     * @ORM\Column(name="GOMA", type="string", nullable=true)
     */
    private $goma;

    /**
     * @var integer
     *
     * @ORM\Column(name="CODIGO_ASOCIADO", type="integer", nullable=true)
     */
    private $codigoAsociado;

    /**
     * @var boolean
     *
     * @ORM\Column(name="SOLO_PEDIR_CITAS", type="boolean", nullable=true)
     */
    private $soloPedirCitas = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="LOGOTIPO", type="boolean", nullable=true)
     */
    private $logotipo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="SUP_ALMACEN", type="string", length=100, nullable=true)
     */
    private $supAlmacen;

    /**
     * @var string
     *
     * @ORM\Column(name="PAG_WEB", type="string", length=255, nullable=true)
     */
    private $pagWeb;

    /**
     * @var string
     *
     * @ORM\Column(name="COMUNIDAD_AUTONOMA", type="string", length=100, nullable=true)
     */
    private $comunidadAutonoma;

    /**
     * @var string
     *
     * @ORM\Column(name="NIF", type="string", length=100, nullable=true)
     */
    private $nif;

    /**
     * @var string
     *
     * @ORM\Column(name="PAIS", type="string", length=10, nullable=true)
     */
    private $pais;

    /**
     * @var integer
     *
     * @ORM\Column(name="ACC_FERIA", type="integer", nullable=true)
     */
    private $accFeria = '1';

    /**
     * @ORM\OneToMany(targetEntity="Usuario", mappedBy="idAsociado")
     */
    protected $usuarios;

    function __construct()
    {
        $this->usuarios = new ArrayCollection();
    }



    /**
     * Get idAsociado
     *
     * @return integer
     */
    public function getIdAsociado()
    {
        return $this->idAsociado;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Asociados
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
     * Set domicilio
     *
     * @param string $domicilio
     *
     * @return Asociados
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Get domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Set poblacion
     *
     * @param string $poblacion
     *
     * @return Asociados
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get poblacion
     *
     * @return string
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Asociados
     */
    public function setCodigoPostal($codigoPostal)
    {
        $this->codigoPostal = $codigoPostal;

        return $this;
    }

    /**
     * Get codigoPostal
     *
     * @return string
     */
    public function getCodigoPostal()
    {
        return $this->codigoPostal;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Asociados
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;

        return $this;
    }

    /**
     * Get provincia
     *
     * @return string
     */
    public function getProvincia()
    {
        return $this->provincia;
    }

    /**
     * Set contacto
     *
     * @param string $contacto
     *
     * @return Asociados
     */
    public function setContacto($contacto)
    {
        $this->contacto = $contacto;

        return $this;
    }

    /**
     * Get contacto
     *
     * @return string
     */
    public function getContacto()
    {
        return $this->contacto;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Asociados
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Asociados
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set eMail
     *
     * @param string $eMail
     *
     * @return Asociados
     */
    public function setEMail($eMail)
    {
        $this->eMail = $eMail;

        return $this;
    }

    /**
     * Get eMail
     *
     * @return string
     */
    public function getEMail()
    {
        return $this->eMail;
    }

    /**
     * Set numEmpleados
     *
     * @param integer $numEmpleados
     *
     * @return Asociados
     */
    public function setNumEmpleados($numEmpleados)
    {
        $this->numEmpleados = $numEmpleados;

        return $this;
    }

    /**
     * Get numEmpleados
     *
     * @return integer
     */
    public function getNumEmpleados()
    {
        return $this->numEmpleados;
    }

    /**
     * Set numVendedores
     *
     * @param integer $numVendedores
     *
     * @return Asociados
     */
    public function setNumVendedores($numVendedores)
    {
        $this->numVendedores = $numVendedores;

        return $this;
    }

    /**
     * Get numVendedores
     *
     * @return integer
     */
    public function getNumVendedores()
    {
        return $this->numVendedores;
    }

    /**
     * Set zonaInfluencia
     *
     * @param string $zonaInfluencia
     *
     * @return Asociados
     */
    public function setZonaInfluencia($zonaInfluencia)
    {
        $this->zonaInfluencia = $zonaInfluencia;

        return $this;
    }

    /**
     * Get zonaInfluencia
     *
     * @return string
     */
    public function getZonaInfluencia()
    {
        return $this->zonaInfluencia;
    }

    /**
     * Set superficieTienda
     *
     * @param string $superficieTienda
     *
     * @return Asociados
     */
    public function setSuperficieTienda($superficieTienda)
    {
        $this->superficieTienda = $superficieTienda;

        return $this;
    }

    /**
     * Get superficieTienda
     *
     * @return string
     */
    public function getSuperficieTienda()
    {
        return $this->superficieTienda;
    }

    /**
     * Set abrasivos
     *
     * @param string $abrasivos
     *
     * @return Asociados
     */
    public function setAbrasivos($abrasivos)
    {
        $this->abrasivos = $abrasivos;

        return $this;
    }

    /**
     * Get abrasivos
     *
     * @return string
     */
    public function getAbrasivos()
    {
        return $this->abrasivos;
    }

    /**
     * Set accAluminio
     *
     * @param string $accAluminio
     *
     * @return Asociados
     */
    public function setAccAluminio($accAluminio)
    {
        $this->accAluminio = $accAluminio;

        return $this;
    }

    /**
     * Get accAluminio
     *
     * @return string
     */
    public function getAccAluminio()
    {
        return $this->accAluminio;
    }

    /**
     * Set adhesivos
     *
     * @param string $adhesivos
     *
     * @return Asociados
     */
    public function setAdhesivos($adhesivos)
    {
        $this->adhesivos = $adhesivos;

        return $this;
    }

    /**
     * Get adhesivos
     *
     * @return string
     */
    public function getAdhesivos()
    {
        return $this->adhesivos;
    }

    /**
     * Set bombas
     *
     * @param string $bombas
     *
     * @return Asociados
     */
    public function setBombas($bombas)
    {
        $this->bombas = $bombas;

        return $this;
    }

    /**
     * Get bombas
     *
     * @return string
     */
    public function getBombas()
    {
        return $this->bombas;
    }

    /**
     * Set agricola
     *
     * @param string $agricola
     *
     * @return Asociados
     */
    public function setAgricola($agricola)
    {
        $this->agricola = $agricola;

        return $this;
    }

    /**
     * Get agricola
     *
     * @return string
     */
    public function getAgricola()
    {
        return $this->agricola;
    }

    /**
     * Set artBricolaje
     *
     * @param string $artBricolaje
     *
     * @return Asociados
     */
    public function setArtBricolaje($artBricolaje)
    {
        $this->artBricolaje = $artBricolaje;

        return $this;
    }

    /**
     * Get artBricolaje
     *
     * @return string
     */
    public function getArtBricolaje()
    {
        return $this->artBricolaje;
    }

    /**
     * Set calef
     *
     * @param string $calef
     *
     * @return Asociados
     */
    public function setCalef($calef)
    {
        $this->calef = $calef;

        return $this;
    }

    /**
     * Get calef
     *
     * @return string
     */
    public function getCalef()
    {
        return $this->calef;
    }

    /**
     * Set cerrMetalic
     *
     * @param string $cerrMetalic
     *
     * @return Asociados
     */
    public function setCerrMetalic($cerrMetalic)
    {
        $this->cerrMetalic = $cerrMetalic;

        return $this;
    }

    /**
     * Get cerrMetalic
     *
     * @return string
     */
    public function getCerrMetalic()
    {
        return $this->cerrMetalic;
    }

    /**
     * Set cerrMadera
     *
     * @param string $cerrMadera
     *
     * @return Asociados
     */
    public function setCerrMadera($cerrMadera)
    {
        $this->cerrMadera = $cerrMadera;

        return $this;
    }

    /**
     * Get cerrMadera
     *
     * @return string
     */
    public function getCerrMadera()
    {
        return $this->cerrMadera;
    }

    /**
     * Set construc
     *
     * @param string $construc
     *
     * @return Asociados
     */
    public function setConstruc($construc)
    {
        $this->construc = $construc;

        return $this;
    }

    /**
     * Get construc
     *
     * @return string
     */
    public function getConstruc()
    {
        return $this->construc;
    }

    /**
     * Set eqComercial
     *
     * @param string $eqComercial
     *
     * @return Asociados
     */
    public function setEqComercial($eqComercial)
    {
        $this->eqComercial = $eqComercial;

        return $this;
    }

    /**
     * Get eqComercial
     *
     * @return string
     */
    public function getEqComercial()
    {
        return $this->eqComercial;
    }

    /**
     * Set ferrIndustrial
     *
     * @param string $ferrIndustrial
     *
     * @return Asociados
     */
    public function setFerrIndustrial($ferrIndustrial)
    {
        $this->ferrIndustrial = $ferrIndustrial;

        return $this;
    }

    /**
     * Get ferrIndustrial
     *
     * @return string
     */
    public function getFerrIndustrial()
    {
        return $this->ferrIndustrial;
    }

    /**
     * Set fijaciones
     *
     * @param string $fijaciones
     *
     * @return Asociados
     */
    public function setFijaciones($fijaciones)
    {
        $this->fijaciones = $fijaciones;

        return $this;
    }

    /**
     * Get fijaciones
     *
     * @return string
     */
    public function getFijaciones()
    {
        return $this->fijaciones;
    }

    /**
     * Set fontaneria
     *
     * @param string $fontaneria
     *
     * @return Asociados
     */
    public function setFontaneria($fontaneria)
    {
        $this->fontaneria = $fontaneria;

        return $this;
    }

    /**
     * Get fontaneria
     *
     * @return string
     */
    public function getFontaneria()
    {
        return $this->fontaneria;
    }

    /**
     * Set herrajes
     *
     * @param string $herrajes
     *
     * @return Asociados
     */
    public function setHerrajes($herrajes)
    {
        $this->herrajes = $herrajes;

        return $this;
    }

    /**
     * Get herrajes
     *
     * @return string
     */
    public function getHerrajes()
    {
        return $this->herrajes;
    }

    /**
     * Set herrNeumatica
     *
     * @param string $herrNeumatica
     *
     * @return Asociados
     */
    public function setHerrNeumatica($herrNeumatica)
    {
        $this->herrNeumatica = $herrNeumatica;

        return $this;
    }

    /**
     * Get herrNeumatica
     *
     * @return string
     */
    public function getHerrNeumatica()
    {
        return $this->herrNeumatica;
    }

    /**
     * Set herrCorte
     *
     * @param string $herrCorte
     *
     * @return Asociados
     */
    public function setHerrCorte($herrCorte)
    {
        $this->herrCorte = $herrCorte;

        return $this;
    }

    /**
     * Get herrCorte
     *
     * @return string
     */
    public function getHerrCorte()
    {
        return $this->herrCorte;
    }

    /**
     * Set herrElectric
     *
     * @param string $herrElectric
     *
     * @return Asociados
     */
    public function setHerrElectric($herrElectric)
    {
        $this->herrElectric = $herrElectric;

        return $this;
    }

    /**
     * Get herrElectric
     *
     * @return string
     */
    public function getHerrElectric()
    {
        return $this->herrElectric;
    }

    /**
     * Set herrManual
     *
     * @param string $herrManual
     *
     * @return Asociados
     */
    public function setHerrManual($herrManual)
    {
        $this->herrManual = $herrManual;

        return $this;
    }

    /**
     * Get herrManual
     *
     * @return string
     */
    public function getHerrManual()
    {
        return $this->herrManual;
    }

    /**
     * Set hidraulica
     *
     * @param string $hidraulica
     *
     * @return Asociados
     */
    public function setHidraulica($hidraulica)
    {
        $this->hidraulica = $hidraulica;

        return $this;
    }

    /**
     * Get hidraulica
     *
     * @return string
     */
    public function getHidraulica()
    {
        return $this->hidraulica;
    }

    /**
     * Set jardineria
     *
     * @param string $jardineria
     *
     * @return Asociados
     */
    public function setJardineria($jardineria)
    {
        $this->jardineria = $jardineria;

        return $this;
    }

    /**
     * Get jardineria
     *
     * @return string
     */
    public function getJardineria()
    {
        return $this->jardineria;
    }

    /**
     * Set manutencion
     *
     * @param string $manutencion
     *
     * @return Asociados
     */
    public function setManutencion($manutencion)
    {
        $this->manutencion = $manutencion;

        return $this;
    }

    /**
     * Get manutencion
     *
     * @return string
     */
    public function getManutencion()
    {
        return $this->manutencion;
    }

    /**
     * Set maqMadera
     *
     * @param string $maqMadera
     *
     * @return Asociados
     */
    public function setMaqMadera($maqMadera)
    {
        $this->maqMadera = $maqMadera;

        return $this;
    }

    /**
     * Get maqMadera
     *
     * @return string
     */
    public function getMaqMadera()
    {
        return $this->maqMadera;
    }

    /**
     * Set maqMetal
     *
     * @param string $maqMetal
     *
     * @return Asociados
     */
    public function setMaqMetal($maqMetal)
    {
        $this->maqMetal = $maqMetal;

        return $this;
    }

    /**
     * Get maqMetal
     *
     * @return string
     */
    public function getMaqMetal()
    {
        return $this->maqMetal;
    }

    /**
     * Set matElectric
     *
     * @param string $matElectric
     *
     * @return Asociados
     */
    public function setMatElectric($matElectric)
    {
        $this->matElectric = $matElectric;

        return $this;
    }

    /**
     * Get matElectric
     *
     * @return string
     */
    public function getMatElectric()
    {
        return $this->matElectric;
    }

    /**
     * Set menaje
     *
     * @param string $menaje
     *
     * @return Asociados
     */
    public function setMenaje($menaje)
    {
        $this->menaje = $menaje;

        return $this;
    }

    /**
     * Get menaje
     *
     * @return string
     */
    public function getMenaje()
    {
        return $this->menaje;
    }

    /**
     * Set mobKit
     *
     * @param string $mobKit
     *
     * @return Asociados
     */
    public function setMobKit($mobKit)
    {
        $this->mobKit = $mobKit;

        return $this;
    }

    /**
     * Get mobKit
     *
     * @return string
     */
    public function getMobKit()
    {
        return $this->mobKit;
    }

    /**
     * Set mobTaller
     *
     * @param string $mobTaller
     *
     * @return Asociados
     */
    public function setMobTaller($mobTaller)
    {
        $this->mobTaller = $mobTaller;

        return $this;
    }

    /**
     * Get mobTaller
     *
     * @return string
     */
    public function getMobTaller()
    {
        return $this->mobTaller;
    }

    /**
     * Set pinturas
     *
     * @param string $pinturas
     *
     * @return Asociados
     */
    public function setPinturas($pinturas)
    {
        $this->pinturas = $pinturas;

        return $this;
    }

    /**
     * Get pinturas
     *
     * @return string
     */
    public function getPinturas()
    {
        return $this->pinturas;
    }

    /**
     * Set protLaboral
     *
     * @param string $protLaboral
     *
     * @return Asociados
     */
    public function setProtLaboral($protLaboral)
    {
        $this->protLaboral = $protLaboral;

        return $this;
    }

    /**
     * Get protLaboral
     *
     * @return string
     */
    public function getProtLaboral()
    {
        return $this->protLaboral;
    }

    /**
     * Set quimicaInd
     *
     * @param string $quimicaInd
     *
     * @return Asociados
     */
    public function setQuimicaInd($quimicaInd)
    {
        $this->quimicaInd = $quimicaInd;

        return $this;
    }

    /**
     * Get quimicaInd
     *
     * @return string
     */
    public function getQuimicaInd()
    {
        return $this->quimicaInd;
    }

    /**
     * Set riego
     *
     * @param string $riego
     *
     * @return Asociados
     */
    public function setRiego($riego)
    {
        $this->riego = $riego;

        return $this;
    }

    /**
     * Get riego
     *
     * @return string
     */
    public function getRiego()
    {
        return $this->riego;
    }

    /**
     * Set sanitarios
     *
     * @param string $sanitarios
     *
     * @return Asociados
     */
    public function setSanitarios($sanitarios)
    {
        $this->sanitarios = $sanitarios;

        return $this;
    }

    /**
     * Get sanitarios
     *
     * @return string
     */
    public function getSanitarios()
    {
        return $this->sanitarios;
    }

    /**
     * Set medicion
     *
     * @param string $medicion
     *
     * @return Asociados
     */
    public function setMedicion($medicion)
    {
        $this->medicion = $medicion;

        return $this;
    }

    /**
     * Get medicion
     *
     * @return string
     */
    public function getMedicion()
    {
        return $this->medicion;
    }

    /**
     * Set soldadura
     *
     * @param string $soldadura
     *
     * @return Asociados
     */
    public function setSoldadura($soldadura)
    {
        $this->soldadura = $soldadura;

        return $this;
    }

    /**
     * Get soldadura
     *
     * @return string
     */
    public function getSoldadura()
    {
        return $this->soldadura;
    }

    /**
     * Set tornilleria
     *
     * @param string $tornilleria
     *
     * @return Asociados
     */
    public function setTornilleria($tornilleria)
    {
        $this->tornilleria = $tornilleria;

        return $this;
    }

    /**
     * Get tornilleria
     *
     * @return string
     */
    public function getTornilleria()
    {
        return $this->tornilleria;
    }

    /**
     * Set tefileria
     *
     * @param string $tefileria
     *
     * @return Asociados
     */
    public function setTefileria($tefileria)
    {
        $this->tefileria = $tefileria;

        return $this;
    }

    /**
     * Get tefileria
     *
     * @return string
     */
    public function getTefileria()
    {
        return $this->tefileria;
    }

    /**
     * Set ventilacion
     *
     * @param string $ventilacion
     *
     * @return Asociados
     */
    public function setVentilacion($ventilacion)
    {
        $this->ventilacion = $ventilacion;

        return $this;
    }

    /**
     * Get ventilacion
     *
     * @return string
     */
    public function getVentilacion()
    {
        return $this->ventilacion;
    }

    /**
     * Set otras
     *
     * @param string $otras
     *
     * @return Asociados
     */
    public function setOtras($otras)
    {
        $this->otras = $otras;

        return $this;
    }

    /**
     * Get otras
     *
     * @return string
     */
    public function getOtras()
    {
        return $this->otras;
    }

    /**
     * Set otrasEspec
     *
     * @param string $otrasEspec
     *
     * @return Asociados
     */
    public function setOtrasEspec($otrasEspec)
    {
        $this->otrasEspec = $otrasEspec;

        return $this;
    }

    /**
     * Get otrasEspec
     *
     * @return string
     */
    public function getOtrasEspec()
    {
        return $this->otrasEspec;
    }

    /**
     * Set goma
     *
     * @param string $goma
     *
     * @return Asociados
     */
    public function setGoma($goma)
    {
        $this->goma = $goma;

        return $this;
    }

    /**
     * Get goma
     *
     * @return string
     */
    public function getGoma()
    {
        return $this->goma;
    }

    /**
     * Set codigoAsociado
     *
     * @param integer $codigoAsociado
     *
     * @return Asociados
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
     * Set soloPedirCitas
     *
     * @param boolean $soloPedirCitas
     *
     * @return Asociados
     */
    public function setSoloPedirCitas($soloPedirCitas)
    {
        $this->soloPedirCitas = $soloPedirCitas;

        return $this;
    }

    /**
     * Get soloPedirCitas
     *
     * @return boolean
     */
    public function getSoloPedirCitas()
    {
        return $this->soloPedirCitas;
    }

    /**
     * Set logotipo
     *
     * @param boolean $logotipo
     *
     * @return Asociados
     */
    public function setLogotipo($logotipo)
    {
        $this->logotipo = $logotipo;

        return $this;
    }

    /**
     * Get logotipo
     *
     * @return boolean
     */
    public function getLogotipo()
    {
        return $this->logotipo;
    }

    /**
     * Set supAlmacen
     *
     * @param string $supAlmacen
     *
     * @return Asociados
     */
    public function setSupAlmacen($supAlmacen)
    {
        $this->supAlmacen = $supAlmacen;

        return $this;
    }

    /**
     * Get supAlmacen
     *
     * @return string
     */
    public function getSupAlmacen()
    {
        return $this->supAlmacen;
    }

    /**
     * Set pagWeb
     *
     * @param string $pagWeb
     *
     * @return Asociados
     */
    public function setPagWeb($pagWeb)
    {
        $this->pagWeb = $pagWeb;

        return $this;
    }

    /**
     * Get pagWeb
     *
     * @return string
     */
    public function getPagWeb()
    {
        return $this->pagWeb;
    }

    /**
     * Set comunidadAutonoma
     *
     * @param string $comunidadAutonoma
     *
     * @return Asociados
     */
    public function setComunidadAutonoma($comunidadAutonoma)
    {
        $this->comunidadAutonoma = $comunidadAutonoma;

        return $this;
    }

    /**
     * Get comunidadAutonoma
     *
     * @return string
     */
    public function getComunidadAutonoma()
    {
        return $this->comunidadAutonoma;
    }

    /**
     * Set nif
     *
     * @param string $nif
     *
     * @return Asociados
     */
    public function setNif($nif)
    {
        $this->nif = $nif;

        return $this;
    }

    /**
     * Get nif
     *
     * @return string
     */
    public function getNif()
    {
        return $this->nif;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return Asociados
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

    /**
     * Set accFeria
     *
     * @param integer $accFeria
     *
     * @return Asociados
     */
    public function setAccFeria($accFeria)
    {
        $this->accFeria = $accFeria;

        return $this;
    }

    /**
     * Get accFeria
     *
     * @return integer
     */
    public function getAccFeria()
    {
        return $this->accFeria;
    }

    /**
     * Add usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     *
     * @return Asociados
     */
    public function addUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuarios[] = $usuario;

        return $this;
    }

    /**
     * Remove usuario
     *
     * @param \AppBundle\Entity\Usuario $usuario
     */
    public function removeUsuario(\AppBundle\Entity\Usuario $usuario)
    {
        $this->usuarios->removeElement($usuario);
    }

    /**
     * Get usuarios
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getUsuarios()
    {
        return $this->usuarios;
    }
}
