<?php

namespace App\Http\Controllers;

use App\Models\Billing;
use App\Models\Customer;
use App\Models\Order;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function create(){
        
        $customer_id = 1;
        $title = "Bilgisayar";
        $description = "LAPTOP 16GB RAM i7 11.Nesil";

        $customer = Customer::findorFail($customer_id);

        $order = new Order([
            "customer_id" => $customer_id,
            "title" => $title,
            "description" => $description,
        ]);    
        
        $billing = new Billing([
            "customer_id" => $customer_id,
            "title" => "Title 1",
            "description" => "Ödeme",
            "total" => 500,
        ]);
        
        $customer->order()->save($order);
        $customer->billing()->save($billing);
        
        
        return "order ve billing eklendi";
    }

    public function update(){
        $order_id  =1;
        $new_title = "Yeni Başlık";
        $new_description = "Yeni Açıklama";

        Order::where("id", $order_id )
            ->update([
                "title" => $new_title,
                "description" => $new_description,
            ]);
        return "1 numaralı order kaydı güncellendi";
    }

    public function readOrder(){
        $customer_id = 1;
        $customer = Customer::findorFail($customer_id);

        return $customer->order->title;
    }

    public function readBilling(){
        $customer_id = 1;
        $customer = Customer::findorFail($customer_id);
        
        return $customer->billing->title;
    }

    public function deleteOrder(){
        $order_id = 3;
        Order::where("id", $order_id)->delete();
        return "$order_id numaralı order silndi";
    }

    public function deleteBilling(){
        $billing_id = 3;
        Billing::where("id", $billing_id)->delete();
        return "$billing_id numaralı billing silindi";
    }


}
