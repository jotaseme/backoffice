<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Proveedores
 *
 * @ORM\Table(name="proveedores")
 * @ORM\Entity(repositoryClass="AppBundle\Entity\ProveedorRepository")
 */
class Proveedores
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_PROVEEDOR", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProveedor;

    /**
     * @var string
     *
     * @ORM\Column(name="NUMERO_CONVENIO", type="string", length=8, nullable=true)
     */
    private $numeroConvenio;

    /**
     * @var string
     *
     * @ORM\Column(name="RAZON_SOCIAL", type="string", length=100, nullable=true)
     */
    private $razonSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSONA_1", type="string", length=100, nullable=true)
     */
    private $persona1;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSONA_2", type="string", length=100, nullable=true)
     */
    private $persona2;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSONA_3", type="string", length=100, nullable=true)
     */
    private $persona3;

    /**
     * @var string
     *
     * @ORM\Column(name="PERSONA_PREINSCRIPCION", type="string", length=100, nullable=true)
     */
    private $personaPreinscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="CARGO_PERSONA_PREINSCRIPCION", type="string", length=40, nullable=true)
     */
    private $cargoPersonaPreinscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="E_MAIL_PERSONA_PREINSCRIPCION", type="string", length=100, nullable=true)
     */
    private $eMailPersonaPreinscripcion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_PREINSCRIPCION", type="datetime", nullable=true)
     */
    private $fechaPreinscripcion;

    /**
     * @var string
     *
     * @ORM\Column(name="NOMBRE_COMERCIAL", type="string", length=255, nullable=true)
     */
    private $nombreComercial;

    /**
     * @var string
     *
     * @ORM\Column(name="DIRECCION", type="string", length=255, nullable=true)
     */
    private $direccion;

    /**
     * @var string
     *
     * @ORM\Column(name="POBLACION", type="string", length=90, nullable=true)
     */
    private $poblacion;

    /**
     * @var string
     *
     * @ORM\Column(name="PROVINCIA", type="string", length=90, nullable=true)
     */
    private $provincia;

    /**
     * @var string
     *
     * @ORM\Column(name="CODIGO_POSTAL", type="string", length=30, nullable=true)
     */
    private $codigoPostal;

    /**
     * @var string
     *
     * @ORM\Column(name="CIF", type="string", length=255, nullable=true)
     */
    private $cif;

    /**
     * @var string
     *
     * @ORM\Column(name="TELEFONO", type="string", length=90, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="FAX", type="string", length=90, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="E_MAIL", type="string", length=255, nullable=true)
     */
    private $eMail;

    /**
     * @var string
     *
     * @ORM\Column(name="RESPONSABLE", type="string", length=255, nullable=true)
     */
    private $responsable;

    /**
     * @var string
     *
     * @ORM\Column(name="CARGO_RESPONSABLE", type="string", length=255, nullable=true)
     */
    private $cargoResponsable;

    /**
     * @var string
     *
     * @ORM\Column(name="MARCAS", type="text", length=65535, nullable=true)
     */
    private $marcas;

    /**
     * @var string
     *
     * @ORM\Column(name="PARTICIPO_CATALOGO", type="string", length=50, nullable=true)
     */
    private $participoCatalogo;

    /**
     * @var string
     *
     * @ORM\Column(name="PAGO_CENTRALIZADO", type="string", length=50, nullable=true)
     */
    private $pagoCentralizado;

    /**
     * @var string
     *
     * @ORM\Column(name="FINANCIA_FERIA", type="string", length=50, nullable=true)
     */
    private $financiaFeria;

    /**
     * @var boolean
     *
     * @ORM\Column(name="LOGOTIPO", type="boolean", nullable=true)
     */
    private $logotipo = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ARTICULOS_QUE_COMERC_2", type="text", length=65535, nullable=true)
     */
    private $articulosQueComerc2;

    /**
     * @var string
     *
     * @ORM\Column(name="RAPPEL_2", type="text", length=65535, nullable=true)
     */
    private $rappel2;

    /**
     * @var string
     *
     * @ORM\Column(name="RELACION_RAPPEL", type="text", length=65535, nullable=true)
     */
    private $relacionRappel;

    /**
     * @var string
     *
     * @ORM\Column(name="OBSERVACIONES", type="text", length=65535, nullable=true)
     */
    private $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="RAPPEL", type="text", length=65535, nullable=true)
     */
    private $rappel;

    /**
     * @var string
     *
     * @ORM\Column(name="CEUTA_Y_MELILLA", type="string", length=255, nullable=true)
     */
    private $ceutaYMelilla;

    /**
     * @var string
     *
     * @ORM\Column(name="BALEARES", type="string", length=255, nullable=true)
     */
    private $baleares;

    /**
     * @var string
     *
     * @ORM\Column(name="CANARIAS", type="string", length=255, nullable=true)
     */
    private $canarias;

    /**
     * @var string
     *
     * @ORM\Column(name="PORTUGAL", type="string", length=255, nullable=true)
     */
    private $portugal;

    /**
     * @var string
     *
     * @ORM\Column(name="GIBRALTAR", type="string", length=255, nullable=true)
     */
    private $gibraltar;

    /**
     * @var string
     *
     * @ORM\Column(name="ANDORRA", type="string", length=255, nullable=true)
     */
    private $andorra;

    /**
     * @var string
     *
     * @ORM\Column(name="PRONTO_PAGO", type="string", length=255, nullable=true)
     */
    private $prontoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="FORMA_DE_PAGO", type="string", length=255, nullable=true)
     */
    private $formaDePago;

    /**
     * @var string
     *
     * @ORM\Column(name="PORTES", type="text", length=65535, nullable=true)
     */
    private $portes;

    /**
     * @var string
     *
     * @ORM\Column(name="TARIFA_EN_SOPORTE_MAGNETICO", type="string", length=50, nullable=true)
     */
    private $tarifaEnSoporteMagnetico;

    /**
     * @var string
     *
     * @ORM\Column(name="DTOS_FACTURA", type="text", length=65535, nullable=true)
     */
    private $dtosFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="IVA", type="string", length=100, nullable=true)
     */
    private $iva;

    /**
     * @var string
     *
     * @ORM\Column(name="PRECIOS", type="string", length=255, nullable=true)
     */
    private $precios;

    /**
     * @var string
     *
     * @ORM\Column(name="VIGENCIA", type="string", length=50, nullable=true)
     */
    private $vigencia;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="FECHA_CONVENIO", type="datetime", nullable=true)
     */
    private $fechaConvenio;

    /**
     * @var string
     *
     * @ORM\Column(name="ARTICULOS_PROVEEDOR", type="string", length=765, nullable=true)
     */
    private $articulosProveedor;



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
     * Set numeroConvenio
     *
     * @param string $numeroConvenio
     *
     * @return Proveedores
     */
    public function setNumeroConvenio($numeroConvenio)
    {
        $this->numeroConvenio = $numeroConvenio;

        return $this;
    }

    /**
     * Get numeroConvenio
     *
     * @return string
     */
    public function getNumeroConvenio()
    {
        return $this->numeroConvenio;
    }

    /**
     * Set razonSocial
     *
     * @param string $razonSocial
     *
     * @return Proveedores
     */
    public function setRazonSocial($razonSocial)
    {
        $this->razonSocial = $razonSocial;

        return $this;
    }

    /**
     * Get razonSocial
     *
     * @return string
     */
    public function getRazonSocial()
    {
        return $this->razonSocial;
    }

    /**
     * Set persona1
     *
     * @param string $persona1
     *
     * @return Proveedores
     */
    public function setPersona1($persona1)
    {
        $this->persona1 = $persona1;

        return $this;
    }

    /**
     * Get persona1
     *
     * @return string
     */
    public function getPersona1()
    {
        return $this->persona1;
    }

    /**
     * Set persona2
     *
     * @param string $persona2
     *
     * @return Proveedores
     */
    public function setPersona2($persona2)
    {
        $this->persona2 = $persona2;

        return $this;
    }

    /**
     * Get persona2
     *
     * @return string
     */
    public function getPersona2()
    {
        return $this->persona2;
    }

    /**
     * Set persona3
     *
     * @param string $persona3
     *
     * @return Proveedores
     */
    public function setPersona3($persona3)
    {
        $this->persona3 = $persona3;

        return $this;
    }

    /**
     * Get persona3
     *
     * @return string
     */
    public function getPersona3()
    {
        return $this->persona3;
    }

    /**
     * Set personaPreinscripcion
     *
     * @param string $personaPreinscripcion
     *
     * @return Proveedores
     */
    public function setPersonaPreinscripcion($personaPreinscripcion)
    {
        $this->personaPreinscripcion = $personaPreinscripcion;

        return $this;
    }

    /**
     * Get personaPreinscripcion
     *
     * @return string
     */
    public function getPersonaPreinscripcion()
    {
        return $this->personaPreinscripcion;
    }

    /**
     * Set cargoPersonaPreinscripcion
     *
     * @param string $cargoPersonaPreinscripcion
     *
     * @return Proveedores
     */
    public function setCargoPersonaPreinscripcion($cargoPersonaPreinscripcion)
    {
        $this->cargoPersonaPreinscripcion = $cargoPersonaPreinscripcion;

        return $this;
    }

    /**
     * Get cargoPersonaPreinscripcion
     *
     * @return string
     */
    public function getCargoPersonaPreinscripcion()
    {
        return $this->cargoPersonaPreinscripcion;
    }

    /**
     * Set eMailPersonaPreinscripcion
     *
     * @param string $eMailPersonaPreinscripcion
     *
     * @return Proveedores
     */
    public function setEMailPersonaPreinscripcion($eMailPersonaPreinscripcion)
    {
        $this->eMailPersonaPreinscripcion = $eMailPersonaPreinscripcion;

        return $this;
    }

    /**
     * Get eMailPersonaPreinscripcion
     *
     * @return string
     */
    public function getEMailPersonaPreinscripcion()
    {
        return $this->eMailPersonaPreinscripcion;
    }

    /**
     * Set fechaPreinscripcion
     *
     * @param \DateTime $fechaPreinscripcion
     *
     * @return Proveedores
     */
    public function setFechaPreinscripcion($fechaPreinscripcion)
    {
        $this->fechaPreinscripcion = $fechaPreinscripcion;

        return $this;
    }

    /**
     * Get fechaPreinscripcion
     *
     * @return \DateTime
     */
    public function getFechaPreinscripcion()
    {
        return $this->fechaPreinscripcion;
    }

    /**
     * Set nombreComercial
     *
     * @param string $nombreComercial
     *
     * @return Proveedores
     */
    public function setNombreComercial($nombreComercial)
    {
        $this->nombreComercial = $nombreComercial;

        return $this;
    }

    /**
     * Get nombreComercial
     *
     * @return string
     */
    public function getNombreComercial()
    {
        return $this->nombreComercial;
    }

    /**
     * Set direccion
     *
     * @param string $direccion
     *
     * @return Proveedores
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;

        return $this;
    }

    /**
     * Get direccion
     *
     * @return string
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * Set poblacion
     *
     * @param string $poblacion
     *
     * @return Proveedores
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
     * Set provincia
     *
     * @param string $provincia
     *
     * @return Proveedores
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
     * Set codigoPostal
     *
     * @param string $codigoPostal
     *
     * @return Proveedores
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
     * Set cif
     *
     * @param string $cif
     *
     * @return Proveedores
     */
    public function setCif($cif)
    {
        $this->cif = $cif;

        return $this;
    }

    /**
     * Get cif
     *
     * @return string
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Proveedores
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
     * @return Proveedores
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
     * @return Proveedores
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
     * Set responsable
     *
     * @param string $responsable
     *
     * @return Proveedores
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set cargoResponsable
     *
     * @param string $cargoResponsable
     *
     * @return Proveedores
     */
    public function setCargoResponsable($cargoResponsable)
    {
        $this->cargoResponsable = $cargoResponsable;

        return $this;
    }

    /**
     * Get cargoResponsable
     *
     * @return string
     */
    public function getCargoResponsable()
    {
        return $this->cargoResponsable;
    }

    /**
     * Set marcas
     *
     * @param string $marcas
     *
     * @return Proveedores
     */
    public function setMarcas($marcas)
    {
        $this->marcas = $marcas;

        return $this;
    }

    /**
     * Get marcas
     *
     * @return string
     */
    public function getMarcas()
    {
        return $this->marcas;
    }

    /**
     * Set participoCatalogo
     *
     * @param string $participoCatalogo
     *
     * @return Proveedores
     */
    public function setParticipoCatalogo($participoCatalogo)
    {
        $this->participoCatalogo = $participoCatalogo;

        return $this;
    }

    /**
     * Get participoCatalogo
     *
     * @return string
     */
    public function getParticipoCatalogo()
    {
        return $this->participoCatalogo;
    }

    /**
     * Set pagoCentralizado
     *
     * @param string $pagoCentralizado
     *
     * @return Proveedores
     */
    public function setPagoCentralizado($pagoCentralizado)
    {
        $this->pagoCentralizado = $pagoCentralizado;

        return $this;
    }

    /**
     * Get pagoCentralizado
     *
     * @return string
     */
    public function getPagoCentralizado()
    {
        return $this->pagoCentralizado;
    }

    /**
     * Set financiaFeria
     *
     * @param string $financiaFeria
     *
     * @return Proveedores
     */
    public function setFinanciaFeria($financiaFeria)
    {
        $this->financiaFeria = $financiaFeria;

        return $this;
    }

    /**
     * Get financiaFeria
     *
     * @return string
     */
    public function getFinanciaFeria()
    {
        return $this->financiaFeria;
    }

    /**
     * Set logotipo
     *
     * @param boolean $logotipo
     *
     * @return Proveedores
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
     * Set articulosQueComerc2
     *
     * @param string $articulosQueComerc2
     *
     * @return Proveedores
     */
    public function setArticulosQueComerc2($articulosQueComerc2)
    {
        $this->articulosQueComerc2 = $articulosQueComerc2;

        return $this;
    }

    /**
     * Get articulosQueComerc2
     *
     * @return string
     */
    public function getArticulosQueComerc2()
    {
        return $this->articulosQueComerc2;
    }

    /**
     * Set rappel2
     *
     * @param string $rappel2
     *
     * @return Proveedores
     */
    public function setRappel2($rappel2)
    {
        $this->rappel2 = $rappel2;

        return $this;
    }

    /**
     * Get rappel2
     *
     * @return string
     */
    public function getRappel2()
    {
        return $this->rappel2;
    }

    /**
     * Set relacionRappel
     *
     * @param string $relacionRappel
     *
     * @return Proveedores
     */
    public function setRelacionRappel($relacionRappel)
    {
        $this->relacionRappel = $relacionRappel;

        return $this;
    }

    /**
     * Get relacionRappel
     *
     * @return string
     */
    public function getRelacionRappel()
    {
        return $this->relacionRappel;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return Proveedores
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set rappel
     *
     * @param string $rappel
     *
     * @return Proveedores
     */
    public function setRappel($rappel)
    {
        $this->rappel = $rappel;

        return $this;
    }

    /**
     * Get rappel
     *
     * @return string
     */
    public function getRappel()
    {
        return $this->rappel;
    }

    /**
     * Set ceutaYMelilla
     *
     * @param string $ceutaYMelilla
     *
     * @return Proveedores
     */
    public function setCeutaYMelilla($ceutaYMelilla)
    {
        $this->ceutaYMelilla = $ceutaYMelilla;

        return $this;
    }

    /**
     * Get ceutaYMelilla
     *
     * @return string
     */
    public function getCeutaYMelilla()
    {
        return $this->ceutaYMelilla;
    }

    /**
     * Set baleares
     *
     * @param string $baleares
     *
     * @return Proveedores
     */
    public function setBaleares($baleares)
    {
        $this->baleares = $baleares;

        return $this;
    }

    /**
     * Get baleares
     *
     * @return string
     */
    public function getBaleares()
    {
        return $this->baleares;
    }

    /**
     * Set canarias
     *
     * @param string $canarias
     *
     * @return Proveedores
     */
    public function setCanarias($canarias)
    {
        $this->canarias = $canarias;

        return $this;
    }

    /**
     * Get canarias
     *
     * @return string
     */
    public function getCanarias()
    {
        return $this->canarias;
    }

    /**
     * Set portugal
     *
     * @param string $portugal
     *
     * @return Proveedores
     */
    public function setPortugal($portugal)
    {
        $this->portugal = $portugal;

        return $this;
    }

    /**
     * Get portugal
     *
     * @return string
     */
    public function getPortugal()
    {
        return $this->portugal;
    }

    /**
     * Set gibraltar
     *
     * @param string $gibraltar
     *
     * @return Proveedores
     */
    public function setGibraltar($gibraltar)
    {
        $this->gibraltar = $gibraltar;

        return $this;
    }

    /**
     * Get gibraltar
     *
     * @return string
     */
    public function getGibraltar()
    {
        return $this->gibraltar;
    }

    /**
     * Set andorra
     *
     * @param string $andorra
     *
     * @return Proveedores
     */
    public function setAndorra($andorra)
    {
        $this->andorra = $andorra;

        return $this;
    }

    /**
     * Get andorra
     *
     * @return string
     */
    public function getAndorra()
    {
        return $this->andorra;
    }

    /**
     * Set prontoPago
     *
     * @param string $prontoPago
     *
     * @return Proveedores
     */
    public function setProntoPago($prontoPago)
    {
        $this->prontoPago = $prontoPago;

        return $this;
    }

    /**
     * Get prontoPago
     *
     * @return string
     */
    public function getProntoPago()
    {
        return $this->prontoPago;
    }

    /**
     * Set formaDePago
     *
     * @param string $formaDePago
     *
     * @return Proveedores
     */
    public function setFormaDePago($formaDePago)
    {
        $this->formaDePago = $formaDePago;

        return $this;
    }

    /**
     * Get formaDePago
     *
     * @return string
     */
    public function getFormaDePago()
    {
        return $this->formaDePago;
    }

    /**
     * Set portes
     *
     * @param string $portes
     *
     * @return Proveedores
     */
    public function setPortes($portes)
    {
        $this->portes = $portes;

        return $this;
    }

    /**
     * Get portes
     *
     * @return string
     */
    public function getPortes()
    {
        return $this->portes;
    }

    /**
     * Set tarifaEnSoporteMagnetico
     *
     * @param string $tarifaEnSoporteMagnetico
     *
     * @return Proveedores
     */
    public function setTarifaEnSoporteMagnetico($tarifaEnSoporteMagnetico)
    {
        $this->tarifaEnSoporteMagnetico = $tarifaEnSoporteMagnetico;

        return $this;
    }

    /**
     * Get tarifaEnSoporteMagnetico
     *
     * @return string
     */
    public function getTarifaEnSoporteMagnetico()
    {
        return $this->tarifaEnSoporteMagnetico;
    }

    /**
     * Set dtosFactura
     *
     * @param string $dtosFactura
     *
     * @return Proveedores
     */
    public function setDtosFactura($dtosFactura)
    {
        $this->dtosFactura = $dtosFactura;

        return $this;
    }

    /**
     * Get dtosFactura
     *
     * @return string
     */
    public function getDtosFactura()
    {
        return $this->dtosFactura;
    }

    /**
     * Set iva
     *
     * @param string $iva
     *
     * @return Proveedores
     */
    public function setIva($iva)
    {
        $this->iva = $iva;

        return $this;
    }

    /**
     * Get iva
     *
     * @return string
     */
    public function getIva()
    {
        return $this->iva;
    }

    /**
     * Set precios
     *
     * @param string $precios
     *
     * @return Proveedores
     */
    public function setPrecios($precios)
    {
        $this->precios = $precios;

        return $this;
    }

    /**
     * Get precios
     *
     * @return string
     */
    public function getPrecios()
    {
        return $this->precios;
    }

    /**
     * Set vigencia
     *
     * @param string $vigencia
     *
     * @return Proveedores
     */
    public function setVigencia($vigencia)
    {
        $this->vigencia = $vigencia;

        return $this;
    }

    /**
     * Get vigencia
     *
     * @return string
     */
    public function getVigencia()
    {
        return $this->vigencia;
    }

    /**
     * Set fechaConvenio
     *
     * @param \DateTime $fechaConvenio
     *
     * @return Proveedores
     */
    public function setFechaConvenio($fechaConvenio)
    {
        $this->fechaConvenio = $fechaConvenio;

        return $this;
    }

    /**
     * Get fechaConvenio
     *
     * @return \DateTime
     */
    public function getFechaConvenio()
    {
        return $this->fechaConvenio;
    }

    /**
     * Set articulosProveedor
     *
     * @param string $articulosProveedor
     *
     * @return Proveedores
     */
    public function setArticulosProveedor($articulosProveedor)
    {
        $this->articulosProveedor = $articulosProveedor;

        return $this;
    }

    /**
     * Get articulosProveedor
     *
     * @return string
     */
    public function getArticulosProveedor()
    {
        return $this->articulosProveedor;
    }
}
