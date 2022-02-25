<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public  function  edit()
    {
        $edit = About::first();
        return  view('admin.about.edit', compact("edit"));
    }

    public  function  update(Request  $request)
    {
        $update = About::first();
        $update->title1 = $request->title1;
        $update->title2 = $request->title2;
        $update->text1 = $request->text1;

        Storage::disk("public")->delete("images/" . $update->src);
        $request->file("img")->storePublicly("images/", "public");
        $update->img = $request->file("img")->hashName();
        $update->save();

        return  redirect("/");
    }
};
