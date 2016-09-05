<?php

namespace EpayZoneBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TransactionLog
 *
 * @ORM\Table(name="transaction_log")
 * @ORM\Entity(repositoryClass="EpayZoneBundle\Repository\TransactionLogRepository")
 */
class TransactionLog
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
     * @ORM\OneToOne(targetEntity="EpayZoneBundle\Entity\Transaction", inversedBy="transactionLog")
     * @ORM\JoinColumn(nullable=false)
     */
    private $transaction;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

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
     * Set description
     *
     * @param string $description
     *
     * @return TransactionLog
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return TransactionLog
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     *
     * @return TransactionLog
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
     * Set transaction
     *
     * @param \EpayZoneBundle\Entity\Transaction $transaction
     *
     * @return TransactionLog
     */
    public function setTransaction(\EpayZoneBundle\Entity\Transaction $transaction)
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * Get transaction
     *
     * @return \EpayZoneBundle\Entity\Transaction
     */
    public function getTransaction()
    {
        return $this->transaction;
    }
}
