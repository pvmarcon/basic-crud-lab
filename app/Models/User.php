<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'phone',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function address(): HasOne
    {
        return $this->hasOne(Address::class, 'user_id');
    }
}
