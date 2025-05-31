<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Service\CartService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cart')]
class CartController extends AbstractController
{
    public function __construct(
        private ProductRepository $productRepository,
        private CartService $cartService
    ) {}

    #[Route('/', name: 'app_cart_index')]
    public function index(): Response
    {
        $cartData = $this->cartService->getFullCart();
        
        return $this->render('cart/index.html.twig', [
            'products' => $cartData['items'],
            'total' => $cartData['total']
        ]);
    }

    #[Route('/add/{id}', name: 'app_cart_add')]
    public function add(Product $product): Response
    {
        $result = $this->cartService->addToCart($product->getId());
        
        if ($result['success']) {
            $this->addFlash('success', $result['message']);
        } else {
            $this->addFlash('error', $result['message']);
        }

        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/remove/{id}', name: 'app_cart_remove')]
    public function remove(Product $product): Response
    {
        $result = $this->cartService->removeFromCart($product->getId());
        
        if ($result['success']) {
            $this->addFlash('success', $result['message']);
        } else {
            $this->addFlash('error', $result['message']);
        }

        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/update/{id}', name: 'app_cart_update', methods: ['POST'])]
    public function update(Product $product, Request $request): Response
    {
        $quantity = $request->request->getInt('quantity');
        $result = $this->cartService->updateQuantity($product->getId(), $quantity);
        
        if ($result['success']) {
            $this->addFlash('success', $result['message']);
        } else {
            $this->addFlash('error', $result['message']);
        }

        return $this->redirectToRoute('app_cart_index');
    }
    
    #[Route('/clear', name: 'app_cart_clear')]
    public function clear(): Response
    {
        $this->cartService->clearCart();
        $this->addFlash('success', 'Your cart has been cleared!');
        
        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/checkout', name: 'app_cart_checkout')]
    public function checkout(): Response
    {
        // Check if user is logged in
        if (!$this->getUser()) {
            $this->addFlash('error', 'Please log in to proceed with checkout');
            return $this->redirectToRoute('app_login');
        }
        
        // Check if cart is empty
        $cartData = $this->cartService->getFullCart();
        if (empty($cartData['items'])) {
            $this->addFlash('error', 'Your cart is empty');
            return $this->redirectToRoute('app_cart_index');
        }
        
        return $this->render('cart/checkout.html.twig', [
            'cart' => $cartData
        ]);
    }
}
