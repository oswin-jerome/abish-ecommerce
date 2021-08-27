<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Customers extends Model
{
    use HasFactory, Notifiable;
    protected $guarded = [];

    public function Customer_addresses()
    {
        return $this->hasMany(CustomerAddresses::class, 'customer_id', 'id');
    }
    public function orders()
    {
        return $this->hasMany(OdersList::class, 'customer_id', 'id');
    }
}
