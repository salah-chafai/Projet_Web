<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cart')]
class CartController extends AbstractController
{
    public function __construct(
        private ProductRepository $productRepository
    ) {}

    #[Route('/', name: 'app_cart_index')]
    public function index(Request $request): Response
    {
        $cart = $request->getSession()->get('cart', []);
        $products = [];
        $total = 0;

        foreach ($cart as $id => $quantity) {
            $product = $this->productRepository->find($id);
            if ($product) {
                $products[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'subtotal' => $product->getPrice() * $quantity
                ];
                $total += $product->getPrice() * $quantity;
            }
        }

        return $this->render('cart/index.html.twig', [
            'products' => $products,
            'total' => $total
        ]);
    }

    #[Route('/add/{id}', name: 'app_cart_add')]
    public function add(Product $product, Request $request): Response
    {
        $session = $request->getSession();
        $cart = $session->get('cart', []);

        if (isset($cart[$product->getId()])) {
            $cart[$product->getId()]++;
        } else {
            $cart[$product->getId()] = 1;
        }

        $session->set('cart', $cart);
        $this->addFlash('success', 'Product added to cart!');

        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/remove/{id}', name: 'app_cart_remove')]
    public function remove(Product $product, Request $request): Response
    {
        $session = $request->getSession();
        $cart = $session->get('cart', []);

        if (isset($cart[$product->getId()])) {
            unset($cart[$product->getId()]);
        }

        $session->set('cart', $cart);
        $this->addFlash('success', 'Product removed from cart!');

        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/update/{id}', name: 'app_cart_update', methods: ['POST'])]
    public function update(Product $product, Request $request): Response
    {
        $session = $request->getSession();
        $cart = $session->get('cart', []);
        $quantity = $request->request->getInt('quantity');

        if ($quantity > 0) {
            $cart[$product->getId()] = $quantity;
        } else {
            unset($cart[$product->getId()]);
        }

        $session->set('cart', $cart);
        $this->addFlash('success', 'Cart updated!');

        return $this->redirectToRoute('app_cart_index');
    }
}
