<?php

namespace EpayZoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentOptionType
 *
 * @ORM\Table(name="payment_option_type")
 * @ORM\Entity(repositoryClass="EpayZoneBundle\Repository\PaymentOptionTypeRepository")
 */
class PaymentOptionType
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\ManyToOne(targetEntity = "EpayZoneBundle\Entity\PaymentOption", inversedBy="paymentOptionType")
     * @ORM\JoinColumn(nullable=false)
     */
    private $paymentOption;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return PaymentOptionType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return PaymentOptionType
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set paymentOption
     *
     * @param \EpayZoneBundle\Entity\PaymentOption $paymentOption
     *
     * @return PaymentOptionType
     */
    public function setPaymentOption(\EpayZoneBundle\Entity\PaymentOption $paymentOption)
    {
        $this->paymentOption = $paymentOption;

        return $this;
    }

    /**
     * Get paymentOption
     *
     * @return \EpayZoneBundle\Entity\PaymentOption
     */
    public function getPaymentOption()
    {
        return $this->paymentOption;
    }
}
