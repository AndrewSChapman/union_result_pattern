<?php

namespace Chapmandigital\UnionResultPattern;

interface ProductRepositoryInterface
{
    public function getProductById(int $id): ProductItem|FetchError;
}