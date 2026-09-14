<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

    protected $table = 'statuses';

    const STATUSES = [
        'active' => 1,
        'draft' => 2,
        'deleted' => 3
    ];
}
