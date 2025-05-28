<?php

namespace App\Command;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:create-sample-products',
    description: 'Creates sample miniature car products',
)]
class CreateSampleProductsCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $products = [
            [
                'name' => 'Ferrari F40',
                'description' => 'Iconic Italian supercar in 1:18 scale. Features opening doors, hood, and trunk. This legendary model represents the pinnacle of Ferrari\'s engineering excellence.',
                'price' => 89.99,
                'brand' => 'Maisto',
                'scale' => '1:18',
                'stock' => 10,
                'image' => 'https://images.unsplash.com/photo-1629323487410-c1abe62ea9ba?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name' => 'Porsche 911 GT3',
                'description' => 'Detailed replica of the Porsche 911 GT3 in 1:24 scale. Includes detailed interior and engine. A perfect representation of Porsche\'s racing heritage.',
                'price' => 49.99,
                'brand' => 'Autoart',
                'scale' => '1:24',
                'stock' => 15,
                'image' => 'https://images.unsplash.com/photo-1713256606752-4af258739fb0?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fFBvcnNjaGUlMjA5MTElMjBHVDN8ZW58MHx8MHx8fDA%3D'
            ],
            [
                'name' => 'Lamborghini Aventador',
                'description' => 'Stunning replica of the Lamborghini Aventador in 1:18 scale. Features scissor doors and detailed interior. A masterpiece of Italian automotive design.',
                'price' => 99.99,
                'brand' => 'Burago',
                'scale' => '1:18',
                'stock' => 8,
                'image' => 'https://images.unsplash.com/photo-1612825173281-9a193378527e?q=80&w=1999&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name' => 'BMW M3',
                'description' => 'Classic BMW M3 in 1:24 scale. Includes detailed engine and interior. The perfect blend of luxury and performance in a compact scale.',
                'price' => 39.99,
                'brand' => 'Kyosho',
                'scale' => '1:24',
                'stock' => 20,
                'image' => 'https://images.unsplash.com/photo-1628079586925-6e7792daaf0b?q=80&w=1964&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'
            ],
            [
                'name' => 'McLaren F1',
                'description' => 'Legendary McLaren F1 in 1:18 scale. Features opening doors and detailed engine bay. A tribute to one of the greatest supercars ever built.',
                'price' => 129.99,
                'brand' => 'Minichamps',
                'scale' => '1:18',
                'stock' => 5,
                'image' => 'https://images.unsplash.com/photo-1618843479313-40f8afb4b4d8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'
            ],
            [
                'name' => 'Aston Martin DB5',
                'description' => 'Iconic Aston Martin DB5 in 1:18 scale. Features opening doors, hood, and trunk. The most famous James Bond car in a detailed scale model.',
                'price' => 79.99,
                'brand' => 'Corgi',
                'scale' => '1:18',
                'stock' => 12,
                'image' => 'https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2069&q=80'
            ],
            [
                'name' => 'Mercedes-Benz 300SL',
                'description' => 'Classic Mercedes-Benz 300SL Gullwing in 1:24 scale. Features iconic gullwing doors and detailed interior. A masterpiece of automotive history.',
                'price' => 59.99,
                'brand' => 'Autoart',
                'scale' => '1:24',
                'stock' => 7,
                'image' => 'https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'
            ],
            [
                'name' => 'Bugatti Chiron',
                'description' => 'Modern Bugatti Chiron in 1:18 scale. Features detailed interior and engine bay. The ultimate expression of luxury and performance.',
                'price' => 149.99,
                'brand' => 'Minichamps',
                'scale' => '1:18',
                'stock' => 6,
                'image' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80'
            ],
        ];

        foreach ($products as $productData) {
            $product = new Product();
            $product->setName($productData['name']);
            $product->setDescription($productData['description']);
            $product->setPrice($productData['price']);
            $product->setBrand($productData['brand']);
            $product->setScale($productData['scale']);
            $product->setStock($productData['stock']);
            $product->setImage($productData['image']);

            $this->entityManager->persist($product);
        }

        $this->entityManager->flush();

        $io->success('Sample products have been created successfully!');

        return Command::SUCCESS;
    }
}
