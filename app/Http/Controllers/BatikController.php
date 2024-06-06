<?php

namespace App\Http\Controllers;

use App\Models\Batik;

use Illuminate\View\View;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Storage;

class BatikController extends Controller
{
    
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $batiks = Batik::all();

        //render view with posts
        return view('admin.batik', compact('batiks'));
    }

    public function show ()
    {
        $batiks = Batik::all();

      
        // return response()->json($batiks);
        return view('user.ragam', compact('batiks'));
    }

 //MENAMPILKAN DATA PAKET DIHALAMAN DAFTAR PAKET
 public function showragam()
 {
     $batiks = Batik::all();
     return view ('user.ragam', compact('batiks'));
 }
//SHOW HALAMAN DAFTAR PAKET

//   public function showdaftarpaket()
//   {
//      $items = Paket::all();
//      return view ('user.daftarpaket', compact('items'));
//      }


     /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.create_batik');
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
            
            'nama_batik'     => 'required|min:1',
            'asal'   => 'required|min:1',
            'history'   => 'required|min:1',
            'image'     => 'required|image|mimes:jpeg,jpg,png,svg|max:2048'
           
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/posts', $image->hashName());

        //create post
        Batik::create([
            'image'     => $image->hashName(),
            'nama_batik'     => $request->nama_batik,
            'asal'   => $request->asal,
            'history'   => $request->history,
           
            
        ]);

        //redirect to index
        return redirect()->route('batik.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $batiks = Batik::findOrFail($id);

        //render view with post
        return view('admin.edit_batik', compact('batiks'));
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
            'nama_batik'     => 'required|min:1',
            'asal'   => 'required|min:1',
            'history'   => 'required|min:1'
            
        ]);

        //get post by ID
        $post = Batik::findOrFail($id);

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
                'nama_batik'     => $request->nama_batik,
                'asal'   => $request->asal,
                'history'   => $request->history
               
            ]);

        } else {

            //update post without image
            $post->update([
                'nama_batik'     => $request->nama_batik,
                'asal'   => $request->asal,
                'history'   => $request->history
            ]);
        }

        //redirect to index
        return redirect()->route('batik.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $batiks = Batik::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $batiks->image);

        //delete post
        $batiks->delete();

        //redirect to index
        return redirect()->route('batik.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
