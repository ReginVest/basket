<?php declare(strict_types=1);


namespace domain\repository;


use domain\entity\Order;
use domain\exceptions\ModelNotFoundExceptionInterface;

interface OrderRepositoryInterface
{
    /**
     * @param int $id
     * @return Order
     * @throws ModelNotFoundExceptionInterface
     */
    public function getById(int $id): Order;
}