<?php

namespace App\Product\Domain\Repository;

use App\Product\Domain\Entity\Product;

interface ProductRepositoryInterface
{
    /**
     * @return array<int, Product>
     */
    public function search(int $page = 1, int $nbPerPage = 30): array;

    /**
     * @param array<string, mixed> $criteria
     */
    public function count(array $criteria = []): int;

    public function save(Product $article): void;
}
