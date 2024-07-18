<?php

namespace App\Product\Infrastructure\Repository;

use App\Product\Domain\Entity\Product;
use App\Product\Domain\Repository\ProductRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Product>
 */
class ProductRepository extends ServiceEntityRepository implements ProductRepositoryInterface
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Product::class);
    }

    /**
     * @return array<int, Product>
     */
    public function search(int $page = 1, int $perPage = 20): array
    {
        $qb = $this->createQueryBuilder('p')
            ->setMaxResults($perPage)
            ->setFirstResult($perPage * ($page - 1));

        return $qb->getQuery()->getResult();
    }

    public function save(Product $product): void
    {
    }
}
