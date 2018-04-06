<?php

namespace App\GraphQL\Query;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\ResolveInfo;

class Example extends Query
{
    protected $attributes = [
        'name' => 'Example',
        'description' => 'Example query',
    ];

    public function type()
    {
        return Type::nonNull(Type::string());
    }

    public function args()
    {
        return [

        ];
    }

    public function resolve($root, $args, $context, ResolveInfo $info)
    {
        return 'Example query';
    }
}
