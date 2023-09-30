<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Sushi\Sushi;

class Location extends Model
{
    use Sushi;

    protected array $rows = [
        [
            'id' => 1,
            'name' => 'New York',
            'code' => 'NY345'
        ],
        [
            'id' => 2,
            'name' => 'Los Angeles',
            'code' => 'LA123'
        ],
        [
            'id' => 3,
            'name' => 'San Francisco',
            'code' => 'SF567'
        ],
        [
            'id' => 4,
            'name' => 'Chicago',
            'code' => 'CH789'
        ],
        [
            'id' => 5,
            'name' => 'Seattle',
            'code' => 'SE901'
        ]
    ];
}
