<?php

namespace Chapmandigital\UnionResultPattern;

class ProductItem
{
    public function __construct(
        public readonly string $id,
        public readonly string $name
    ) {}
}