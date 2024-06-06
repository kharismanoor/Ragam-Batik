<?php

namespace App\Http\Controllers;

//import Model "Product"
use App\Models\Product;

use App\Models\Cart;

use Illuminate\View\View;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

//import Facade "Storage"
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $products = Product::all();

        //render view with posts
        return view('admin.product', compact('products'));
    }

    public function showkoleksi()
 {
     $products = Product::all();
     return view ('user.koleksi', compact('products'));
 }

 public function showKoleksi2 (Request $request, $id)
    {
        $products = Product::findOrFail($id);

      
        // return response()->json($batiks);
        return view('user.koleksi2', compact('products'));
    }

       /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.create');
    }



    /**
     * store
     *
     * @param  mixed $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            'title'     => 'required|min:1',
            'size'   => 'required|min:1',
            'description'   => 'required|min:1',
            'price'   => 'required|min:1',
            'stock'   => 'required|min:1'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Product::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'size'   => $request->size,
            'description'   => $request->description,
            'price'   => $request->price,
            'stock'   => $request->stock
        ]);

        //redirect to index
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $products = Product::findOrFail($id);

        //render view with post
        return view('admin.edit', compact('products'));
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
            'image'     => 'required|image|mimes:jpeg,jpg,png,svg|max:2048',
            'title'     => 'required|min:1',
            'size'   => 'required|min:1',
            'description'   => 'required|min:1',
            'price'   => 'required|min:1',
            'stock'   => 'required|min:1'
        ]);

        //get post by ID
        $post = Product::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $post->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'size'   => $request->size,
                'description'   => $request->description,
                'price'   => $request->price,
                'stock'   => $request->stock
            ]);

        } else {

            //update post without image
            $post->update([
                'title'     => $request->title,
                'size'   => $request->size,
                'description'   => $request->description,
                'price'   => $request->price,
                'stock'   => $request->stock
            ]);
        }

        //redirect to index
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    /**
     * destroy
     *
     * @param  mixed $post
     * @return void
     */
    public function destroy($id): RedirectResponse
    {
        //get post by ID
        $products = Product::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $products->image);

        //delete post
        $products->delete();

        //redirect to index
        return redirect()->route('produk.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }


    

}
