<?php

namespace Chapmandigital\UnionResultPattern;

class ProductRepository implements ProductRepositoryInterface
{
    public function getProductById(int $id): ProductItem|FetchError
    {
        // Simulate various conditions happening.  A value of 2 will actually return a product item.
        // The result will result in errors.
        return match ($id) {
            1 => FetchError::InvalidArgument,
            2 => new ProductItem(1, "Test Item"),
            3 => FetchError::AccessDenied,
            default => FetchError::UnexpectedError,
        };
    }
}