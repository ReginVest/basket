<?php declare(strict_types=1);


namespace domain\repository;


use domain\entity\Product;
use domain\exceptions\ModelNotFoundExceptionInterface;

interface ProductRepositoryInterface
{

    /**
     * @param int $id
     * @return Product
     * @throws ModelNotFoundExceptionInterface
     */
    public function getById(int $id): Product;

    /**
     * @param int[] $ids
     * @return Product[]
     */
    public function getByIds(array $ids): array;
}