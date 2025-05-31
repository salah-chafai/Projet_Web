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
    name: 'app:remove-all-products',
    description: 'Removes all products from the database',
)]
class RemoveAllProductsCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $entityManager
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $repository = $this->entityManager->getRepository(Product::class);
        $products = $repository->findAll();

        foreach ($products as $product) {
            $this->entityManager->remove($product);
        }

        $this->entityManager->flush();

        $io->success(sprintf('Removed %d products from the database.', count($products)));

        return Command::SUCCESS;
    }
} 