<?php declare(strict_types=1);


namespace domain\services;


use Doctrine\ORM\EntityManagerInterface;
use domain\entity\Basket;
use domain\entity\BasketProduct;
use domain\entity\Product;
use domain\repository\BasketProductRepositoryInterface;

class BasketProductService
{
    /**
     * @var BasketProductRepositoryInterface
     */
    private $basketProductRepository;
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * BasketProductService constructor.
     * @param BasketProductRepositoryInterface $basketProductRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(BasketProductRepositoryInterface $basketProductRepository, EntityManagerInterface $entityManager)
    {
        $this->basketProductRepository = $basketProductRepository;
        $this->entityManager = $entityManager;
    }

    /**
     * @param Product $product
     * @param Basket $basket
     * @return BasketProduct
     */
    public function createByBasketAndProduct(Basket $basket, Product $product): BasketProduct
    {
        return (new BasketProduct)
            ->setBasketId($basket->getId())
            ->setProductId($product->getId());
    }

    /**
     * @param Basket $basket
     * @param Product $product
     * @return BasketProduct
     * @throws \domain\exceptions\ModelNotFoundExceptionInterface
     */
    public function getByBasketAndProduct(Basket $basket, Product $product): BasketProduct
    {
        return $this->basketProductRepository->getByBasketIdAndProductId($basket->getId(), $product->getId());
    }

    /**
     * @param Basket $basket
     * @param Product $product
     * @throws \domain\exceptions\ModelNotFoundExceptionInterface
     */
    public function deleteByBasketAndProduct(Basket $basket, Product $product)
    {
        $this->entityManager->remove(
            $this->getByBasketAndProduct($basket, $product)
        );
    }
}