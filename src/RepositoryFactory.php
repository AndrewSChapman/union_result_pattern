<?php

namespace Chapmandigital\UnionResultPattern;

class RepositoryFactory
{
    public function getProductRepository(): ProductRepositoryInterface
    {
        return new ProductRepository();
    }
}