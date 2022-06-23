<?php

namespace Chapmandigital\UnionResultPattern;

enum FetchError
{
    case AccessDenied;
    case EntityNotFound;
    case InvalidArgument;
    case UnexpectedError;
}