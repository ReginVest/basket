<?php declare(strict_types=1);


namespace domain\entity;


class BasketProduct
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
     * @var $productId int
     */
    private $productId;

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
     * @return BasketProduct
     */
    public function setBasketId(int $basketId): BasketProduct
    {
        $this->basketId = $basketId;
        return $this;
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
     * @return BasketProduct
     */
    public function setProductId(int $productId): BasketProduct
    {
        $this->productId = $productId;
        return $this;
    }
}