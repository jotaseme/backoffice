<?php

namespace ComprabuenaBundle\Entity;

/**
 * Orders
 */
class Orders
{
    /**
     * @var string
     */
    private $reference;

    /**
     * @var integer
     */
    private $idShopGroup = '1';

    /**
     * @var integer
     */
    private $idShop = '1';

    /**
     * @var integer
     */
    private $idCarrier;

    /**
     * @var integer
     */
    private $idLang;

    /**
     * @var integer
     */
    private $idCustomer;

    /**
     * @var integer
     */
    private $idCart;

    /**
     * @var integer
     */
    private $idCurrency;

    /**
     * @var integer
     */
    private $idAddressDelivery;

    /**
     * @var integer
     */
    private $idAddressInvoice;

    /**
     * @var integer
     */
    private $currentState;

    /**
     * @var string
     */
    private $secureKey = '-1';

    /**
     * @var string
     */
    private $payment;

    /**
     * @var string
     */
    private $conversionRate = '1.000000';

    /**
     * @var string
     */
    private $module;

    /**
     * @var boolean
     */
    private $recyclable = '0';

    /**
     * @var boolean
     */
    private $gift = '0';

    /**
     * @var string
     */
    private $giftMessage;

    /**
     * @var boolean
     */
    private $mobileTheme = '0';

    /**
     * @var string
     */
    private $shippingNumber;

    /**
     * @var string
     */
    private $totalDiscounts = '0.000000';

    /**
     * @var string
     */
    private $totalDiscountsTaxIncl = '0.000000';

    /**
     * @var string
     */
    private $totalDiscountsTaxExcl = '0.000000';

    /**
     * @var string
     */
    private $totalPaid = '0.000000';

    /**
     * @var string
     */
    private $totalPaidTaxIncl = '0.000000';

    /**
     * @var string
     */
    private $totalPaidTaxExcl = '0.000000';

    /**
     * @var string
     */
    private $totalPaidReal = '0.000000';

    /**
     * @var string
     */
    private $totalProducts = '0.000000';

    /**
     * @var string
     */
    private $totalProductsWt = '0.000000';

    /**
     * @var string
     */
    private $totalShipping = '0.000000';

    /**
     * @var string
     */
    private $totalShippingTaxIncl = '0.000000';

    /**
     * @var string
     */
    private $totalShippingTaxExcl = '0.000000';

    /**
     * @var string
     */
    private $carrierTaxRate = '0.000';

    /**
     * @var string
     */
    private $totalWrapping = '0.000000';

    /**
     * @var string
     */
    private $totalWrappingTaxIncl = '0.000000';

    /**
     * @var string
     */
    private $totalWrappingTaxExcl = '0.000000';

    /**
     * @var boolean
     */
    private $roundMode = '2';

    /**
     * @var boolean
     */
    private $roundType = '1';

    /**
     * @var integer
     */
    private $invoiceNumber = '0';

    /**
     * @var integer
     */
    private $deliveryNumber = '0';

    /**
     * @var \DateTime
     */
    private $invoiceDate;

    /**
     * @var \DateTime
     */
    private $deliveryDate;

    /**
     * @var integer
     */
    private $valid = '0';

    /**
     * @var \DateTime
     */
    private $dateAdd;

    /**
     * @var \DateTime
     */
    private $dateUpd;

    /**
     * @var integer
     */
    private $idOrder;


    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Orders
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set idShopGroup
     *
     * @param integer $idShopGroup
     *
     * @return Orders
     */
    public function setIdShopGroup($idShopGroup)
    {
        $this->idShopGroup = $idShopGroup;

        return $this;
    }

    /**
     * Get idShopGroup
     *
     * @return integer
     */
    public function getIdShopGroup()
    {
        return $this->idShopGroup;
    }

    /**
     * Set idShop
     *
     * @param integer $idShop
     *
     * @return Orders
     */
    public function setIdShop($idShop)
    {
        $this->idShop = $idShop;

        return $this;
    }

    /**
     * Get idShop
     *
     * @return integer
     */
    public function getIdShop()
    {
        return $this->idShop;
    }

    /**
     * Set idCarrier
     *
     * @param integer $idCarrier
     *
     * @return Orders
     */
    public function setIdCarrier($idCarrier)
    {
        $this->idCarrier = $idCarrier;

        return $this;
    }

    /**
     * Get idCarrier
     *
     * @return integer
     */
    public function getIdCarrier()
    {
        return $this->idCarrier;
    }

    /**
     * Set idLang
     *
     * @param integer $idLang
     *
     * @return Orders
     */
    public function setIdLang($idLang)
    {
        $this->idLang = $idLang;

        return $this;
    }

    /**
     * Get idLang
     *
     * @return integer
     */
    public function getIdLang()
    {
        return $this->idLang;
    }

    /**
     * Set idCustomer
     *
     * @param integer $idCustomer
     *
     * @return Orders
     */
    public function setIdCustomer($idCustomer)
    {
        $this->idCustomer = $idCustomer;

        return $this;
    }

    /**
     * Get idCustomer
     *
     * @return integer
     */
    public function getIdCustomer()
    {
        return $this->idCustomer;
    }

    /**
     * Set idCart
     *
     * @param integer $idCart
     *
     * @return Orders
     */
    public function setIdCart($idCart)
    {
        $this->idCart = $idCart;

        return $this;
    }

    /**
     * Get idCart
     *
     * @return integer
     */
    public function getIdCart()
    {
        return $this->idCart;
    }

    /**
     * Set idCurrency
     *
     * @param integer $idCurrency
     *
     * @return Orders
     */
    public function setIdCurrency($idCurrency)
    {
        $this->idCurrency = $idCurrency;

        return $this;
    }

    /**
     * Get idCurrency
     *
     * @return integer
     */
    public function getIdCurrency()
    {
        return $this->idCurrency;
    }

    /**
     * Set idAddressDelivery
     *
     * @param integer $idAddressDelivery
     *
     * @return Orders
     */
    public function setIdAddressDelivery($idAddressDelivery)
    {
        $this->idAddressDelivery = $idAddressDelivery;

        return $this;
    }

    /**
     * Get idAddressDelivery
     *
     * @return integer
     */
    public function getIdAddressDelivery()
    {
        return $this->idAddressDelivery;
    }

    /**
     * Set idAddressInvoice
     *
     * @param integer $idAddressInvoice
     *
     * @return Orders
     */
    public function setIdAddressInvoice($idAddressInvoice)
    {
        $this->idAddressInvoice = $idAddressInvoice;

        return $this;
    }

    /**
     * Get idAddressInvoice
     *
     * @return integer
     */
    public function getIdAddressInvoice()
    {
        return $this->idAddressInvoice;
    }

    /**
     * Set currentState
     *
     * @param integer $currentState
     *
     * @return Orders
     */
    public function setCurrentState($currentState)
    {
        $this->currentState = $currentState;

        return $this;
    }

    /**
     * Get currentState
     *
     * @return integer
     */
    public function getCurrentState()
    {
        return $this->currentState;
    }

    /**
     * Set secureKey
     *
     * @param string $secureKey
     *
     * @return Orders
     */
    public function setSecureKey($secureKey)
    {
        $this->secureKey = $secureKey;

        return $this;
    }

    /**
     * Get secureKey
     *
     * @return string
     */
    public function getSecureKey()
    {
        return $this->secureKey;
    }

    /**
     * Set payment
     *
     * @param string $payment
     *
     * @return Orders
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;

        return $this;
    }

    /**
     * Get payment
     *
     * @return string
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * Set conversionRate
     *
     * @param string $conversionRate
     *
     * @return Orders
     */
    public function setConversionRate($conversionRate)
    {
        $this->conversionRate = $conversionRate;

        return $this;
    }

    /**
     * Get conversionRate
     *
     * @return string
     */
    public function getConversionRate()
    {
        return $this->conversionRate;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return Orders
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set recyclable
     *
     * @param boolean $recyclable
     *
     * @return Orders
     */
    public function setRecyclable($recyclable)
    {
        $this->recyclable = $recyclable;

        return $this;
    }

    /**
     * Get recyclable
     *
     * @return boolean
     */
    public function getRecyclable()
    {
        return $this->recyclable;
    }

    /**
     * Set gift
     *
     * @param boolean $gift
     *
     * @return Orders
     */
    public function setGift($gift)
    {
        $this->gift = $gift;

        return $this;
    }

    /**
     * Get gift
     *
     * @return boolean
     */
    public function getGift()
    {
        return $this->gift;
    }

    /**
     * Set giftMessage
     *
     * @param string $giftMessage
     *
     * @return Orders
     */
    public function setGiftMessage($giftMessage)
    {
        $this->giftMessage = $giftMessage;

        return $this;
    }

    /**
     * Get giftMessage
     *
     * @return string
     */
    public function getGiftMessage()
    {
        return $this->giftMessage;
    }

    /**
     * Set mobileTheme
     *
     * @param boolean $mobileTheme
     *
     * @return Orders
     */
    public function setMobileTheme($mobileTheme)
    {
        $this->mobileTheme = $mobileTheme;

        return $this;
    }

    /**
     * Get mobileTheme
     *
     * @return boolean
     */
    public function getMobileTheme()
    {
        return $this->mobileTheme;
    }

    /**
     * Set shippingNumber
     *
     * @param string $shippingNumber
     *
     * @return Orders
     */
    public function setShippingNumber($shippingNumber)
    {
        $this->shippingNumber = $shippingNumber;

        return $this;
    }

    /**
     * Get shippingNumber
     *
     * @return string
     */
    public function getShippingNumber()
    {
        return $this->shippingNumber;
    }

    /**
     * Set totalDiscounts
     *
     * @param string $totalDiscounts
     *
     * @return Orders
     */
    public function setTotalDiscounts($totalDiscounts)
    {
        $this->totalDiscounts = $totalDiscounts;

        return $this;
    }

    /**
     * Get totalDiscounts
     *
     * @return string
     */
    public function getTotalDiscounts()
    {
        return $this->totalDiscounts;
    }

    /**
     * Set totalDiscountsTaxIncl
     *
     * @param string $totalDiscountsTaxIncl
     *
     * @return Orders
     */
    public function setTotalDiscountsTaxIncl($totalDiscountsTaxIncl)
    {
        $this->totalDiscountsTaxIncl = $totalDiscountsTaxIncl;

        return $this;
    }

    /**
     * Get totalDiscountsTaxIncl
     *
     * @return string
     */
    public function getTotalDiscountsTaxIncl()
    {
        return $this->totalDiscountsTaxIncl;
    }

    /**
     * Set totalDiscountsTaxExcl
     *
     * @param string $totalDiscountsTaxExcl
     *
     * @return Orders
     */
    public function setTotalDiscountsTaxExcl($totalDiscountsTaxExcl)
    {
        $this->totalDiscountsTaxExcl = $totalDiscountsTaxExcl;

        return $this;
    }

    /**
     * Get totalDiscountsTaxExcl
     *
     * @return string
     */
    public function getTotalDiscountsTaxExcl()
    {
        return $this->totalDiscountsTaxExcl;
    }

    /**
     * Set totalPaid
     *
     * @param string $totalPaid
     *
     * @return Orders
     */
    public function setTotalPaid($totalPaid)
    {
        $this->totalPaid = $totalPaid;

        return $this;
    }

    /**
     * Get totalPaid
     *
     * @return string
     */
    public function getTotalPaid()
    {
        return $this->totalPaid;
    }

    /**
     * Set totalPaidTaxIncl
     *
     * @param string $totalPaidTaxIncl
     *
     * @return Orders
     */
    public function setTotalPaidTaxIncl($totalPaidTaxIncl)
    {
        $this->totalPaidTaxIncl = $totalPaidTaxIncl;

        return $this;
    }

    /**
     * Get totalPaidTaxIncl
     *
     * @return string
     */
    public function getTotalPaidTaxIncl()
    {
        return $this->totalPaidTaxIncl;
    }

    /**
     * Set totalPaidTaxExcl
     *
     * @param string $totalPaidTaxExcl
     *
     * @return Orders
     */
    public function setTotalPaidTaxExcl($totalPaidTaxExcl)
    {
        $this->totalPaidTaxExcl = $totalPaidTaxExcl;

        return $this;
    }

    /**
     * Get totalPaidTaxExcl
     *
     * @return string
     */
    public function getTotalPaidTaxExcl()
    {
        return $this->totalPaidTaxExcl;
    }

    /**
     * Set totalPaidReal
     *
     * @param string $totalPaidReal
     *
     * @return Orders
     */
    public function setTotalPaidReal($totalPaidReal)
    {
        $this->totalPaidReal = $totalPaidReal;

        return $this;
    }

    /**
     * Get totalPaidReal
     *
     * @return string
     */
    public function getTotalPaidReal()
    {
        return $this->totalPaidReal;
    }

    /**
     * Set totalProducts
     *
     * @param string $totalProducts
     *
     * @return Orders
     */
    public function setTotalProducts($totalProducts)
    {
        $this->totalProducts = $totalProducts;

        return $this;
    }

    /**
     * Get totalProducts
     *
     * @return string
     */
    public function getTotalProducts()
    {
        return $this->totalProducts;
    }

    /**
     * Set totalProductsWt
     *
     * @param string $totalProductsWt
     *
     * @return Orders
     */
    public function setTotalProductsWt($totalProductsWt)
    {
        $this->totalProductsWt = $totalProductsWt;

        return $this;
    }

    /**
     * Get totalProductsWt
     *
     * @return string
     */
    public function getTotalProductsWt()
    {
        return $this->totalProductsWt;
    }

    /**
     * Set totalShipping
     *
     * @param string $totalShipping
     *
     * @return Orders
     */
    public function setTotalShipping($totalShipping)
    {
        $this->totalShipping = $totalShipping;

        return $this;
    }

    /**
     * Get totalShipping
     *
     * @return string
     */
    public function getTotalShipping()
    {
        return $this->totalShipping;
    }

    /**
     * Set totalShippingTaxIncl
     *
     * @param string $totalShippingTaxIncl
     *
     * @return Orders
     */
    public function setTotalShippingTaxIncl($totalShippingTaxIncl)
    {
        $this->totalShippingTaxIncl = $totalShippingTaxIncl;

        return $this;
    }

    /**
     * Get totalShippingTaxIncl
     *
     * @return string
     */
    public function getTotalShippingTaxIncl()
    {
        return $this->totalShippingTaxIncl;
    }

    /**
     * Set totalShippingTaxExcl
     *
     * @param string $totalShippingTaxExcl
     *
     * @return Orders
     */
    public function setTotalShippingTaxExcl($totalShippingTaxExcl)
    {
        $this->totalShippingTaxExcl = $totalShippingTaxExcl;

        return $this;
    }

    /**
     * Get totalShippingTaxExcl
     *
     * @return string
     */
    public function getTotalShippingTaxExcl()
    {
        return $this->totalShippingTaxExcl;
    }

    /**
     * Set carrierTaxRate
     *
     * @param string $carrierTaxRate
     *
     * @return Orders
     */
    public function setCarrierTaxRate($carrierTaxRate)
    {
        $this->carrierTaxRate = $carrierTaxRate;

        return $this;
    }

    /**
     * Get carrierTaxRate
     *
     * @return string
     */
    public function getCarrierTaxRate()
    {
        return $this->carrierTaxRate;
    }

    /**
     * Set totalWrapping
     *
     * @param string $totalWrapping
     *
     * @return Orders
     */
    public function setTotalWrapping($totalWrapping)
    {
        $this->totalWrapping = $totalWrapping;

        return $this;
    }

    /**
     * Get totalWrapping
     *
     * @return string
     */
    public function getTotalWrapping()
    {
        return $this->totalWrapping;
    }

    /**
     * Set totalWrappingTaxIncl
     *
     * @param string $totalWrappingTaxIncl
     *
     * @return Orders
     */
    public function setTotalWrappingTaxIncl($totalWrappingTaxIncl)
    {
        $this->totalWrappingTaxIncl = $totalWrappingTaxIncl;

        return $this;
    }

    /**
     * Get totalWrappingTaxIncl
     *
     * @return string
     */
    public function getTotalWrappingTaxIncl()
    {
        return $this->totalWrappingTaxIncl;
    }

    /**
     * Set totalWrappingTaxExcl
     *
     * @param string $totalWrappingTaxExcl
     *
     * @return Orders
     */
    public function setTotalWrappingTaxExcl($totalWrappingTaxExcl)
    {
        $this->totalWrappingTaxExcl = $totalWrappingTaxExcl;

        return $this;
    }

    /**
     * Get totalWrappingTaxExcl
     *
     * @return string
     */
    public function getTotalWrappingTaxExcl()
    {
        return $this->totalWrappingTaxExcl;
    }

    /**
     * Set roundMode
     *
     * @param boolean $roundMode
     *
     * @return Orders
     */
    public function setRoundMode($roundMode)
    {
        $this->roundMode = $roundMode;

        return $this;
    }

    /**
     * Get roundMode
     *
     * @return boolean
     */
    public function getRoundMode()
    {
        return $this->roundMode;
    }

    /**
     * Set roundType
     *
     * @param boolean $roundType
     *
     * @return Orders
     */
    public function setRoundType($roundType)
    {
        $this->roundType = $roundType;

        return $this;
    }

    /**
     * Get roundType
     *
     * @return boolean
     */
    public function getRoundType()
    {
        return $this->roundType;
    }

    /**
     * Set invoiceNumber
     *
     * @param integer $invoiceNumber
     *
     * @return Orders
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->invoiceNumber = $invoiceNumber;

        return $this;
    }

    /**
     * Get invoiceNumber
     *
     * @return integer
     */
    public function getInvoiceNumber()
    {
        return $this->invoiceNumber;
    }

    /**
     * Set deliveryNumber
     *
     * @param integer $deliveryNumber
     *
     * @return Orders
     */
    public function setDeliveryNumber($deliveryNumber)
    {
        $this->deliveryNumber = $deliveryNumber;

        return $this;
    }

    /**
     * Get deliveryNumber
     *
     * @return integer
     */
    public function getDeliveryNumber()
    {
        return $this->deliveryNumber;
    }

    /**
     * Set invoiceDate
     *
     * @param \DateTime $invoiceDate
     *
     * @return Orders
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * Get invoiceDate
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set deliveryDate
     *
     * @param \DateTime $deliveryDate
     *
     * @return Orders
     */
    public function setDeliveryDate($deliveryDate)
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * Get deliveryDate
     *
     * @return \DateTime
     */
    public function getDeliveryDate()
    {
        return $this->deliveryDate;
    }

    /**
     * Set valid
     *
     * @param integer $valid
     *
     * @return Orders
     */
    public function setValid($valid)
    {
        $this->valid = $valid;

        return $this;
    }

    /**
     * Get valid
     *
     * @return integer
     */
    public function getValid()
    {
        return $this->valid;
    }

    /**
     * Set dateAdd
     *
     * @param \DateTime $dateAdd
     *
     * @return Orders
     */
    public function setDateAdd($dateAdd)
    {
        $this->dateAdd = $dateAdd;

        return $this;
    }

    /**
     * Get dateAdd
     *
     * @return \DateTime
     */
    public function getDateAdd()
    {
        return $this->dateAdd;
    }

    /**
     * Set dateUpd
     *
     * @param \DateTime $dateUpd
     *
     * @return Orders
     */
    public function setDateUpd($dateUpd)
    {
        $this->dateUpd = $dateUpd;

        return $this;
    }

    /**
     * Get dateUpd
     *
     * @return \DateTime
     */
    public function getDateUpd()
    {
        return $this->dateUpd;
    }

    /**
     * Get idOrder
     *
     * @return integer
     */
    public function getIdOrder()
    {
        return $this->idOrder;
    }
}

