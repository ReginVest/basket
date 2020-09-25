<?php declare(strict_types=1);


namespace domain\entity;


class Product
{
    /**
     * @var $id int
     */
    private $id;

    /**
     * @var $name string
     */
    private $name;

    /**
     * @var $price float|int
     */
    private $price;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName(string $name): Product
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return float|int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param float|int $price
     * @return Product
     */
    public function setPrice($price): Product
    {
        $this->price = $price;
        return $this;
    }
}