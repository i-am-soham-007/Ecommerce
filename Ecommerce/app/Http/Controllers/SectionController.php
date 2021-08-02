<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Section;

class SectionController extends Controller
{
    //

    public function AddSection()
    {
        return view('master-admin.section.add');
    }

    public function SectionList()
    {
        $sections = Section::All();
        return view('master-admin.section.list')->with('sections', $sections);
    }

    public function UpdateStatus(Request $request)
    {
        if($request->ajax())
        {
            $data = $request->all();
            $status = ($data['status'] == 'Active') ? 0 : 1;
            Section::where('id',$data['section_id'])->update(['status'=>$status]);
            return response()->json(['status'=>$status,'section_id' => $data['section_id']]);
        }
    }
}
