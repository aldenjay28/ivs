<?php
// tests/ProductTest.php

use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase {
    private $pdo;
    private $productModel;

    protected function setUp(): void {
        // Set up a PDO connection to a test database
        $this->pdo = new PDO('mysql:host=localhost;dbname=test_db', 'username', 'password');
        $this->productModel = new Product($this->pdo);
    }

    public function testCreateProduct() {
        $data = [
            'product_name' => 'Test Product',
            'sku' => 'TEST123',
            'cost_price' => 10.00,
            'selling_price' => 15.00,
            'quantity' => 100,
            'description' => 'This is a test product.'
        ];

        $result = $this->productModel->create($data);
        $this->assertTrue($result); // Assuming create returns true on success
    }

    public function testFindProduct() {
        $product = $this->productModel->find(1); // Assuming product ID 1 exists
        $this->assertNotNull($product);
        $this->assertEquals('Test Product', $product['product_name']);
    }

    // Add more tests for update, delete, etc.

    protected function tearDown(): void {
        // Clean up the database or close the connection
        $this->pdo = null;
    }
}
?>