<?php
declare(strict_types=1);

require_once '../vendor/autoload.php';

use Chapmandigital\UnionResultPattern\FetchError;
use Chapmandigital\UnionResultPattern\ProductItem;
use Chapmandigital\UnionResultPattern\RepositoryFactory;

$repoFactory = new RepositoryFactory();
$productRepo = $repoFactory->getProductRepository();

for ($productId = 0; $productId <= 4; $productId++) {
    $result = $productRepo->getProductById($productId);

    match ($result) {
        FetchError::AccessDenied => handleAccessDenied(),
        FetchError::EntityNotFound => handleEntityNotFound(),
        FetchError::InvalidArgument => handleInvalidArgument(),
        FetchError::UnexpectedError => handleUnexpectedError(),
        default => handleProductFound($result)
    };
}

function handleAccessDenied(): void {
    print "Access Denied\n";
}

function handleEntityNotFound(): void {
    print "Entity Not Found\n";
}

function handleInvalidArgument(): void {
    print "Invalid argument\n";
}

function handleUnexpectedError(): void {
    print "Unexpected error\n";
}

function handleProductFound(ProductItem $productItem): void {
    print "Product Found: {$productItem->id}:{$productItem->name}\n";
}