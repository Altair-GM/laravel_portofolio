<?php

namespace App\Http\Controllers;

use App\Models\Work;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WorkController extends Controller
{



    public  function  index()
    {
        $works = Work::all();

        return  view('admin.works.index', compact('works'));
    }

    public function create()
    {
        return view('admin.works.create');
    }

    public  function  store(Request  $request)
    {
        $request->validate([
            'title1' => ['required'],
            'txt' => ['required'],
            'img' => ['required', 'image'],
        ]);
        $store = new Work;
        $store->title1 = $request->title1;
        $store->txt = $request->txt;

        $filename = $request->file("img")->storePublicly("images", "public");
        $store->img = $filename;
        $store->save();

        return  redirect("/");
    }


    public function edit($id)
    {
        $edit = Work::find($id);
        return view('admin.works.edit', compact('edit'));
    }

    public  function  update(Request  $request, $id)
    {
        $request->validate([
            'title1' => ['required'],
            'txt' => ['required'],
            'img' => ['required', 'image'],
        ]);
        $update = Work::find($id);
        $update->title1 = $request->title1;
        $update->txt = $request->txt;

        Storage::disk("public")->delete($update->img);
        $filename = $request->file("img")->storePublicly("images", "public");
        $update->img = $filename;
        $update->save();

        return  redirect("/");
    }

    public function destroy($id)
    {
        $work = Work::find($id);
        $work->delete();
        return back();
    }
};
