<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Cart;

//return type View
use Illuminate\View\View;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $orders = Order::all();

        //render view with posts
        return view('admin.order', compact('orders'));
    }

    public function showdashboard()
    {
        //get posts
        $orders = Order::all();

        //render view with posts
        return view('admin.dashboard', compact('orders'));
    }

    /**
     * edit
     *
     * @param  mixed $id
     * @return View
     */
    public function edit(string $id): View
    {
        //get post by ID
        $orders = Order::findOrFail($id);

        //render view with post
        return view('admin.konfirmasi', compact('orders'));
    }
    
    /**
     * update
     *
     * @param  mixed $request
     * @param  mixed $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'name'     => 'required|min:1',
            'no_hp'     => 'required|min:1',
            'order_id'   => 'required|min:1',
            'payment'   => 'required|min:1',
            'total_harga'     => 'required|min:1',
            'alamat'     => 'required|min:1',
            'status'   => 'required|min:1'
         
        ]);

        $post = Order::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$post->image);
            $post->update([
                'name'     => $request->name,
                'no_hp'     => $request->no_hp,
                'order_id'   => $request->order_id,
                'payment'     => $request->payment,
                'total_harga'     => $request->total_harga,
                'alamat'   => $request->alamat,
                'status'   => $request->status
            ]);
        

        } else {

            //update post without image
            $post->update([
                'name'     => $request->name,
                'no_hp'     => $request->no_hp,
                'order_id'   => $request->order_id,
                'payment'     => $request->payment,
                'total_harga'     => $request->total_harga,
                'alamat'   => $request->alamat,
                'status'   => $request->status
            ]);
        }

        //redirect to index
        return redirect()->route('order.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function cart(Request $request)
    {
    return view('user.cart');
    }

    public function showCheckoutForm() {
        return view('user.checkout');
    }

    public function processCheckout(Request $request) {
        $request->validate([
            'name' => 'required',
            'qty' => 'required|integerr',
            'alamat' => 'required',
            'no_hp' => 'required',
            'payment' => 'required',
            'total_harga' => 'required|numeric',
        ]);

        Order::create($request->all());

        return redirect()->back()->with('success', 'Order has been placed successfully!');
    }
}
