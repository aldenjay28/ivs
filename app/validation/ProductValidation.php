<?php
// app/validation/ProductValidation.php

class ProductValidation {
    public static function validate($data) {
        $errors = [];

        if (empty($data['product_name'])) {
            $errors[] = 'Product name is required.';
        }
        if (empty($data['sku'])) {
            $errors[] = 'SKU is required.';
        }
        if (!is_numeric($data['cost_price']) || $data['cost_price'] <= 0) {
            $errors[] = 'Cost price must be a positive number.';
        }
        if (!is_numeric($data['selling_price']) || $data['selling_price'] <= 0) {
            $errors[] = 'Selling price must be a positive number.';
        }
        if ($data['selling_price'] < $data['cost_price']) {
            $errors[] = 'Selling price must be greater than cost price.';
        }

        return $errors;
    }
}
?>