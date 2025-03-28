<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class UserBusiness extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = ['user_id', 'business_id', 'role'];

    public function user() {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function business() {
        return $this->belongsTo(Business::class, 'business_id');
    }
}
