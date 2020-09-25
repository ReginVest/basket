<?php declare(strict_types=1);


namespace domain\repository;


use domain\entity\Basket;
use domain\exceptions\ModelNotFoundExceptionInterface;

interface BasketRepositoryInterface
{
    /**
     * @param int $id
     * @return Basket
     * @throws ModelNotFoundExceptionInterface
     */
    public function getById(int $id): Basket;
}