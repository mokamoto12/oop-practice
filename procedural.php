<?php

if (empty($argv[1])) {
        echo "Please enter product name.\n";
            return;
}

$filteredProducts = filterProductsByName(loadProducts(), $argv[1]);

if (empty($filteredProducts)) {
        echo "Product name: {$argv[1]} is not found.\n";
            return;
}

echo formatProducts($filteredProducts, "%n: %p\n");


//-----------------------------------------------------------------------------------
function loadProducts()
{
    return [
        ['name' => 'A', 'price' => 1000],
        ['name' => 'A', 'price' => 1050],
        ['name' => 'B', 'price' => 1500],
        ['name' => 'C', 'price' => 2000],
        ['name' => 'D', 'price' => 2500],
        ['name' => 'E', 'price' => 3000],
        ['name' => 'F', 'price' => 3500]
    ];
}


function formatProducts(array $products, string $style): string
{
    return array_reduce($products, function ($carry, $product) use ($style) {
        return $carry . formatProduct($product, $style);
    });
}


function formatProduct(array $product, string $style): string
{
    return str_replace(['%n', '%p'], [$product['name'], number_format($product['price'])], $style);
}


function filterProductsByName(array $products, string $name): array
{
    return array_filter($products, function (array $product) use ($name) {
        return $product['name'] === $name;
    });
}
