<?php declare(strict_types=1);


namespace domain\entity;


class Order
{
    /**
     * @var $id int
     */
    private $id;

    /**
     * @var $basketId int
     */
    private $basketId;

    /**
     * @var $isPayed boolean
     */
    private $isPayed;

    /**
     * @var $description string
     */
    private $description;

    /**
     * @var $buyerId int
     */
    private $buyerId;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int
     */
    public function getBasketId(): int
    {
        return $this->basketId;
    }

    /**
     * @param int $basketId
     * @return Order
     */
    public function setBasketId(int $basketId): Order
    {
        $this->basketId = $basketId;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPayed(): bool
    {
        return $this->isPayed;
    }

    /**
     * @param bool $isPayed
     * @return Order
     */
    public function setIsPayed(bool $isPayed): Order
    {
        $this->isPayed = $isPayed;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Order
     */
    public function setDescription(string $description): Order
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return int
     */
    public function getBuyerId(): int
    {
        return $this->buyerId;
    }

    /**
     * @param int $buyerId
     * @return Order
     */
    public function setBuyerId(int $buyerId): Order
    {
        $this->buyerId = $buyerId;
        return $this;
    }
}