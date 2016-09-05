<?php

namespace EpayZoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Transaction
 *
 * @ORM\Table(name="transaction")
 * @ORM\Entity(repositoryClass="EpayZoneBundle\Repository\TransactionRepository")
 */
class Transaction
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
     * @var \DateTime
     *
     * @ORM\Column(name="createdAt", type="datetime")
     */
    private $createdAt;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;
    
    /**
     * @ORM\ManyToOne(targetEntity="UserBundle\Entity\User")
     * @ORM\JoinColumn(nullable=true);
     */
    private $user;
    
    /**
     * @ORM\ManyToOne(targetEntity="EpayZoneBundle\Entity\Service")
     * @ORM\JoinColumn(nullable=false)
     */
    private $service;
    
    /**
     * @ORM\OneToOne(targetEntity="EpayZoneBundle\Entity\TransactionLog", mappedBy="transaction")
     */
    private $transactionLog;
    
    /**
     * @ORM\ManyToOne(targetEntity="EpayZoneBundle\Entity\Region")
     * @ORM\JoinColumn(nullable=true)
     */
    private $region;

    /**
     * @ORM\ManyToOne(targetEntity="EpayZoneBundle\Entity\PaymentOption")
     * @ORM\JoinColumn(nullable=false)
     */
    private $paymentOption;

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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return Transaction
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
     * Set amount
     *
     * @param float $amount
     *
     * @return Transaction
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set user
     *
     * @param \UserBundle\Entity\User $user
     *
     * @return Transaction
     */
    public function setUser(\UserBundle\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set service
     *
     * @param \EpayZoneBundle\Entity\Service $service
     *
     * @return Transaction
     */
    public function setService(\EpayZoneBundle\Entity\Service $service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \EpayZoneBundle\Entity\Service
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set transactionLog
     *
     * @param \EpayZoneBundle\Entity\TransactionLog $transactionLog
     *
     * @return Transaction
     */
    public function setTransactionLog(\EpayZoneBundle\Entity\TransactionLog $transactionLog = null)
    {
        $this->transactionLog = $transactionLog;

        return $this;
    }

    /**
     * Get transactionLog
     *
     * @return \EpayZoneBundle\Entity\TransactionLog
     */
    public function getTransactionLog()
    {
        return $this->transactionLog;
    }

    /**
     * Set region
     *
     * @param \EpayZoneBundle\Entity\Region $region
     *
     * @return Transaction
     */
    public function setRegion(\EpayZoneBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \EpayZoneBundle\Entity\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set paymentOption
     *
     * @param \EpayZoneBundle\Entity\PaymentOption $paymentOption
     *
     * @return Transaction
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
