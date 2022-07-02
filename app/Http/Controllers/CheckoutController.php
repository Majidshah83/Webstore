<?php

namespace App\Http\Controllers;
use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Cart;
use App\Models\Billingdetail;
use App\Models\Order_item;
use Illuminate\Support\Facades\Session;
use Auth;

class CheckoutController extends Controller
{
     public function showCheckout()
    {
         return view('frontend.checkout');
    }
   
}