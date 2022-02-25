<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function edit()
    {
        $edit  = Skill::first();
        return view('admin.skillsEdit', compact('edit'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'skill1' => ['required', 'min:0', 'max:100'],
            'skill2' => ['required', 'min:0', 'max:100'],
            'skill3' => ['required', 'min:0', 'max:100'],
            'skill4' => ['required', 'min:0', 'max:100'],
            'skill1_txt' => ['required', 'string'],
            'skill2_txt' => ['required', 'string'],
            'skill3_txt' => ['required', 'string'],
            'skill4_txt' => ['required', 'string'],
        ]);

        $update = Skill::first();
        $update->skill1 = $request->skill1;
        $update->skill2 = $request->skill2;
        $update->skill3 = $request->skill3;
        $update->skill4 = $request->skill4;
        $update->skill1_txt = $request->skill1_txt;
        $update->skill2_txt = $request->skill2_txt;
        $update->skill3_txt = $request->skill3_txt;
        $update->skill4_txt = $request->skill4_txt;
        $update->save();
        return redirect()->back();
    }
}
