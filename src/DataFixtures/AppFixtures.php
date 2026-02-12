<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categoryCount = 5;
        $postCount = 15;

        $categorys = [
            "Lovitao",
            "Mpianjoria",
            "Mpamakilay",
            "Mpiandalana",
            "Mpiandraikitra"
        ];

        foreach ($categorys as $categorieName) {
            $category = new Category();
            $category->setName($categorieName);
            $category->setIsEnable(true);
            $manager->persist($category);


            for ($j = 0; $j < $postCount; $j++) {
                $post = new Post();
                $post->setTitle('Lasy an-tsaha' . $j);
                $post->setContent('lahasa mpianjoria, sy anjoria milay');
                $post->setCategory($category);
                $post->setPostedAt(new \DateTimeImmutable());

                // un sur deux publié : j pair = false, impair = true
                $post->setIsPublished($j % 2 === 1);

                $manager->persist($post);
            }
        }


        $manager->flush();
    }
}
