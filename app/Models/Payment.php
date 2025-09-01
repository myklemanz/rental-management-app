<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = ['lease_id', 'payment_date', 'amount', 'status', 'payment_method'];

    public function lease()
    {
        return $this->belongsTo(Lease::class);
    }
}
