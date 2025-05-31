<?php
// filepath: /home/x-0r/Downloads/projet-web/src/Service/CartService.php
namespace App\Service;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartService
{
    private SessionInterface $session;

    public function __construct(
        private RequestStack $requestStack,
        private ProductRepository $productRepository
    ) {
        $this->session = $this->requestStack->getSession();
    }

    public function getCart(): array
    {
        return $this->session->get('cart', []);
    }

    public function addToCart(int $productId, int $quantity = 1): array
    {
        $cart = $this->getCart();
        $product = $this->productRepository->find($productId);
        
        if (!$product) {
            return ['success' => false, 'message' => 'Product not found!'];
        }

        // Check stock availability
        if ($product->getStock() <= 0) {
            return ['success' => false, 'message' => 'Sorry, this product is out of stock!'];
        }
        
        $currentQuantity = isset($cart[$productId]) ? $cart[$productId] : 0;
        
        if ($currentQuantity + $quantity > $product->getStock()) {
            return ['success' => false, 'message' => 'Cannot add more of this product. Maximum stock reached!'];
        }
        
        if (!isset($cart[$productId])) {
            $cart[$productId] = 0;
        }
        
        $cart[$productId] += $quantity;
        $this->session->set('cart', $cart);
        
        return ['success' => true, 'message' => 'Product added to cart!'];
    }
    
    public function updateQuantity(int $productId, int $quantity): array
    {
        $cart = $this->getCart();
        $product = $this->productRepository->find($productId);
        
        if (!$product) {
            return ['success' => false, 'message' => 'Product not found!'];
        }
        
        // Validate stock
        if ($quantity > $product->getStock()) {
            $quantity = $product->getStock();
            $message = 'Quantity adjusted to maximum available stock.';
        } else {
            $message = 'Cart updated!';
        }
        
        if ($quantity > 0) {
            $cart[$productId] = $quantity;
        } else {
            unset($cart[$productId]);
            $message = 'Product removed from cart!';
        }
        
        $this->session->set('cart', $cart);
        
        return ['success' => true, 'message' => $message];
    }
    
    public function removeFromCart(int $productId): array
    {
        $cart = $this->getCart();
        
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            $this->session->set('cart', $cart);
            return ['success' => true, 'message' => 'Product removed from cart!'];
        }
        
        return ['success' => false, 'message' => 'Product not in cart!'];
    }
    
    public function clearCart(): void
    {
        $this->session->remove('cart');
    }
    
    public function getFullCart(): array
    {
        $cart = $this->getCart();
        $cartItems = [];
        $total = 0;
        
        foreach ($cart as $id => $quantity) {
            $product = $this->productRepository->find($id);
            if ($product) {
                // Check if the requested quantity exceeds current stock
                if ($quantity > $product->getStock()) {
                    $quantity = $product->getStock();
                    $cart[$id] = $quantity;
                    $this->session->set('cart', $cart);
                }
                
                $subtotal = $product->getPrice() * $quantity;
                $cartItems[] = [
                    'product' => $product,
                    'quantity' => $quantity,
                    'subtotal' => $subtotal
                ];
                $total += $subtotal;
            }
        }
        
        return [
            'items' => $cartItems,
            'total' => $total
        ];
    }
}
