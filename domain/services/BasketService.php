<?php declare(strict_types=1);


namespace domain\services;


use Doctrine\ORM\EntityManagerInterface;
use domain\entity\Basket;
use domain\repository\BasketRepositoryInterface;

class BasketService
{
    /**
     * @var BasketRepositoryInterface
     */
    private $basketRepository;
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * BasketOrder constructor.
     * @param BasketRepositoryInterface $basketRepository
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(BasketRepositoryInterface $basketRepository, EntityManagerInterface $entityManager)
    {
        $this->basketRepository = $basketRepository;
        $this->entityManager = $entityManager;
    }

    /**
     * @return Basket
     */
    public function createBasket(): Basket
    {
        return new Basket;
    }

    /**
     * @param int $id
     * @return Basket
     * @throws \domain\exceptions\ModelNotFoundExceptionInterface
     */
    public function getById(int $id): Basket
    {
        if ($id < 1) {
            throw new \InvalidArgumentException('The value must not be less than one');
        }

        return $this->basketRepository->getById($id);
    }

    public function save(Basket $basket): Basket
    {
        $this->entityManager->persist($basket);
        $this->entityManager->flush();

        return $basket;
    }
}