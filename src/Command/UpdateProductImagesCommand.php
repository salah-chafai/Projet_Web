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
    name: 'app:update-product-images',
    description: 'Updates existing product images',
)]
class UpdateProductImagesCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $productImages = [
            'Ferrari F40' => 'https://images.unsplash.com/photo-1629323487410-c1abe62ea9ba?q=80&w=1925&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'Porsche 911 GT3' => 'https://images.unsplash.com/photo-1713256606752-4af258739fb0?q=80&w=1740&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'Lamborghini Aventador' => 'https://images.unsplash.com/photo-1612825173281-9a193378527e?q=80&w=1999&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
            'BMW M3' => 'https://images.unsplash.com/photo-1555215695-3004980ad54e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
            'McLaren F1' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/16/1996_McLaren_F1_Chassis_No_63_6.1_Front.jpg/1200px-1996_McLaren_F1_Chassis_No_63_6.1_Front.jpg',
            'Aston Martin DB5' => 'https://images.unsplash.com/photo-1599072832402-39901fa25016?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YXN0b24lMjBtYXJ0aW4lMjBkYjV8ZW58MHx8MHx8fDA%3D',
            'Mercedes-Benz 300SL' => 'https://images.unsplash.com/photo-1629653944541-84d79f7ea9da?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fE1lcmNlZGVzJTIwQmVueiUyMDMwMFNMfGVufDB8fDB8fHww',
            'Bugatti Chiron' => 'https://images.unsplash.com/photo-1627454820516-dc767bcb4d3e?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
        ];

        $repository = $this->entityManager->getRepository(Product::class);
        $updated = 0;

        foreach ($productImages as $name => $image) {
            $product = $repository->findOneBy(['name' => $name]);
            if ($product) {
                $product->setImage($image);
                $updated++;
            }
        }

        $this->entityManager->flush();

        $io->success(sprintf('Updated images for %d products.', $updated));

        return Command::SUCCESS;
    }
} 