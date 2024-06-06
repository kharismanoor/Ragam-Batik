<?php

namespace App\Http\Controllers;

use App\Models\Event;

use Illuminate\View\View;

use Illuminate\Http\Request;

use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    
    /**
     * index
     *
     * @return View
     */
    public function index(): View
    {
        //get posts
        $events = Event::all();

        //render view with posts
        return view('admin.event', compact('events'));
    }

    public function showevent ()
    {
        $events = Event::all();

      
        // return response()->json($batiks);
        return view('user.event', compact('events'));
    }

    public function showEvent2 (Request $request, $id)
    {
        $events = Event::findOrFail($id);

      
        // return response()->json($batiks);
        return view('user.event2', compact('events'));
    }

    /**
     * create
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.create_event');
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
            'nama_event'     => 'required|min:1',
            'pelaksanaan'   => 'required|min:1',
            'lokasi'   => 'required|min:1',
            'map'   => 'required|min:1',
            'description'   => 'required|min:1'
            
        ]);

        //upload image
        // $image = $request->file('image');
        // $image->storeAs('public/posts', $image->hashName());

        //create post
        Event::create([
            'nama_event'     => $request->nama_event,
                'pelaksanaan'   => $request->pelaksanaan,
                'lokasi'   => $request->lokasi,
                'map'     => $request->map,
                'description'   => $request->description
                
        ]);

        //redirect to index
        return redirect()->route('event.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
        $events = Event::findOrFail($id);

        //render view with post
        return view('admin.edit_event', compact('events'));
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
            'nama_event'     => 'required|min:1',
            'pelaksanaan'   => 'required|min:1',
            'lokasi'   => 'required|min:1',
            'map'   => 'required|min:1',
            'description'   => 'required|min:1'
            
        ]);

        //get post by ID
        $post = Event::findOrFail($id);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Storage::delete('public/posts/'.$post->image);

            //update post with new image
            $post->update([
                'nama_event'     => $request->nama_event,
                'pelaksanaan'   => $request->pelaksanaan,
                'lokasi'   => $request->lokasi,
                'map'     => $request->map,
                'description'   => $request->description
               
            ]);

        } else {

            //update post without image
            $post->update([
                'nama_event'     => $request->nama_event,
                'pelaksanaan'   => $request->pelaksanaan,
                'lokasi'   => $request->lokasi,
                'map'     => $request->map,
                'description'   => $request->description
                
            ]);
        }

        //redirect to index
        return redirect()->route('event.index')->with(['success' => 'Data Berhasil Diubah!']);
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
        $events = Event::findOrFail($id);

        //delete image
        Storage::delete('public/posts/'. $events->image);

        //delete post
        $events->delete();

        //redirect to index
        return redirect()->route('event.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
