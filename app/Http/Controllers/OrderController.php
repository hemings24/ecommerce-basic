<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Http\Requests\OrderRequest;
use Illuminate\Http\Request;


class OrderController extends Controller
{
   public function __construct()
   {
      $this->middleware(['auth','verified'])->except(['index','show']);
   }

   public function index()
   { 
      return view('order.index', compact('order'));
   }

   public function show(Order $order)
   {
      return view('order.show', compact('order'));
   }

   public function create()
   {
      $order = new Order;

      return view('order.create', compact('order'));
   }

   public function store(OrderRequest $request, Order $order)
   {
      $orderData = $request->validateForm($order);
      $order = $order->create($orderData);

      return redirect()->route('order.index')->with('success', "Order has been added");
   }
         
   public function edit(Order $order)
   {
      return view('order.edit', compact('order'));
   }
   
   public function update(OrderRequest $request, Order $order)
   { 
      $orderData = $request->validateForm($order);
      $order->update($orderData);

      return redirect()->route('order.index')->with('success', "Order has been updated");
   }
     
   public function destroy(Order $order)
   {
      $request = new OrderRequest;
      $order->delete();

      return redirect()->route('order.index')->with('success', "Order has been removed");
   }
}