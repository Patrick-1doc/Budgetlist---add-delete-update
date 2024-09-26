<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $table = 'accounts2';

    protected $fillable = [
        'accountid',
        'accountname',
        'bankname',
        'currentbalance',
        'dateopened'
    ];
}
