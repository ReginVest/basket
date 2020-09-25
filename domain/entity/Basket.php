<?php declare(strict_types=1);


namespace domain\entity;


class Basket
{
    /**
     * @var $id int
     */
    private $id;

    /**
     * @var $productId int
     */
    private $productId;

    /**
     * @var $orderId int
     */
    private $orderId;

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
    public function getProductId(): int
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     * @return Basket
     */
    public function setProductId(int $productId): Basket
    {
        $this->productId = $productId;
        return $this;
    }

    /**
     * @return int
     */
    public function getOrderId(): int
    {
        return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return Basket
     */
    public function setOrderId(int $orderId): Basket
    {
        $this->orderId = $orderId;
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
     * @return Basket
     */
    public function setBuyerId(int $buyerId): Basket
    {
        $this->buyerId = $buyerId;
        return $this;
    }
}