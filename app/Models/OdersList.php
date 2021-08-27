<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OdersList extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Order_Items()
    {
        return $this->hasMany(OdersItem::class, 'order_list_id', 'id');
    }
    public function customer()
    {
        return $this->belongsTo(Customers::class);
    }
}
