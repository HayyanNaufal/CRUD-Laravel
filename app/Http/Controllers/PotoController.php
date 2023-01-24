<?php

namespace App\Http\Controllers;

use App\Models\Poto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PotoController extends Controller
{
    public function index()
    {
        //get posts
        $poto = Poto::latest()->paginate(5);

        //render view with posts
        return view('poto.index', compact('poto'));
    }

    public function create()
    {
        return view('poto.create');
    }

    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //upload image
        $image = $request->file('image');
        $image->storeAs('public/potos', $image->hashName());

        //create post
        Poto::create([
            'image'     => $image->hashName(),
            'title'     => $request->title,
            'content'   => $request->content
        ]);

        //redirect to index
        return redirect()->route('poto.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(Poto $poto)
    {
        return view('poto.edit', compact('poto'));
    }

    public function update(Request $request, Poto $poto)
    {
        //validate form
        $this->validate($request, [
            'image'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title'     => 'required|min:5',
            'content'   => 'required|min:10'
        ]);

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/potos', $image->hashName());

            //delete old image
            Storage::delete('public/potos/'.$poto->image);

            //update post with new image
            $poto->update([
                'image'     => $image->hashName(),
                'title'     => $request->title,
                'content'   => $request->content
            ]);

        } else {

            //update post without image
            $poto->update([
                'title'     => $request->title,
                'content'   => $request->content
            ]);
        }

        //redirect to index
        return redirect()->route('poto.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    public function destroy(Poto $poto)
    {
        //delete image
        Storage::delete('public/potos/'. $poto->image);

        //delete post
        $poto->delete();

        //redirect to index
        return redirect()->route('poto.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
