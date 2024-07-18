<?php

namespace App\Product\Infrastructure\Fixtures;

use App\Product\Domain\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        for ($i = 1; $i < 25; ++$i) {
            $product = new Product();
            $product->setCode(substr(str_shuffle(md5(microtime())), 0, 8));
            $product->setDescription('Description product '.$i);
            $product->setPrice(mt_rand(10, 1000) / 100);
            $manager->persist($product);
        }

        $manager->flush();
    }
}
