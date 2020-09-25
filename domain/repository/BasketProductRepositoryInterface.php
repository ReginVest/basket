<?php declare(strict_types=1);


namespace domain\repository;


use domain\entity\BasketProduct;
use domain\exceptions\ModelNotFoundExceptionInterface;

interface BasketProductRepositoryInterface
{
    /**
     * @param int $basketId
     * @param int $productId
     * @return BasketProduct
     * @throws ModelNotFoundExceptionInterface
     */
    public function getByBasketIdAndProductId(int $basketId, int $productId): BasketProduct;
}