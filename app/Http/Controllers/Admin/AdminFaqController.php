<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Faq;

class AdminFaqController extends Controller
{
    public function index()
    {
        $faqs = Faq::get();
        return view('admin.faq', compact('faqs'));
    }

    public function create()
    {
        return view('admin.faq_create');
    }

    public function store(Request $request)
    {
        $request->validate([            
            'question' => 'required',
            'answer' => 'required',
        ]);

        $obj = new Faq();
        
        $obj->question = $request->question;
        $obj->answer = $request->answer;
        $obj->save();

        return redirect()->route('admin_faq')->with('success', __('Data is saved successfully.'));
    }
    
    public function edit($id)
    {
        $faq_single = Faq::where('id', $id)->first();
        return view('admin.faq_edit', compact('faq_single'));
    }

    public function update(Request $request)
    {
        $obj = Faq::where('id', $request->id)->first();

        $request->validate([           
            'question' => 'required',
            'answer' => 'required',
        ]);
        
        $obj->question = $request->question;
        $obj->answer = $request->answer;
        $obj->update();

        return redirect()->route('admin_faq')->with('success', __('Data is updated successfully.'));
    }
    
    public function delete($id)
    {
        Faq::where('id', $id)->delete();
        return redirect()->route('admin_faq')->with('success', __('Data is deleted successfully.'));
    }
}
