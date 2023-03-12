<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = "customers";

    //    protected $guarded = []; // Tablodaki tüm alanların kullanılabileceğini belirtir.
    
    protected $fillable = [
        "customer_id" ,
        "title" ,
        "description" ,
    ];


    public function order(){
        return $this->hasOne(Order::class);
    }

    public function billing(){
        return $this->hasOne(Billing::class);
    }

}
