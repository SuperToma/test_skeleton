<?php

namespace App\Product\Infrastructure\Fixtures;

use App\Supplier\Domain\Entity\Supplier;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class SupplierFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 4; ++$i) {
            $product = new Supplier();
            $product->setName('Supplier '.$i);
            $manager->persist($product);
        }

        $manager->flush();
    }
}
