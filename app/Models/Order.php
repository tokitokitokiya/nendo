<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function item(){
        return $this->belongsTo(Item::class);
    }
    
    public function getByShopid(){
        return $this->items()->with('shops_id');
    }
    
    public $timestamps = false; // 追加
    
    protected $fillable = [
        'user_id',
        'item_id',
        'pcs',
        'season'
        ];
}

    
