<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class AdminTestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::get();
        return view('admin.testimonial', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonial_create');
    }

    public function store(Request $request)
    {
        $request->validate([            
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif',
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required'
        ]);

        $obj = new Testimonial();
        
        $ext = $request->file('photo')->extension();
        $final_name = 'testimonial_' . time() . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        $obj->photo = $final_name;
        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comment = $request->comment;
        $obj->save();

        return redirect()->route('admin_testimonial')->with('success', __('Data is saved successfully.'));
    }
    
    public function edit($id)
    {
        $testimonial_single = Testimonial::where('id', $id)->first();
        return view('admin.testimonial_edit', compact('testimonial_single'));
    }

    public function update(Request $request)
    {
        $obj = Testimonial::where('id', $request->id)->first();

        $request->validate([         
            'photo' => 'image|mimes:jpg,jpeg,png,gif',
            'name' => 'required',
            'designation' => 'required',
            'comment' => 'required'
        ]);

        if($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            if(file_exists(public_path('uploads/' . $obj->photo))) {
                unlink(public_path('uploads/' . $obj->photo));
            }

            $ext = $request->file('photo')->extension();
            $final_name = 'testimonial_' . time() . '.' . $ext;

            $request->file('photo')->move(public_path('uploads/'), $final_name);

            $obj->photo = $final_name;
        }

        $obj->name = $request->name;
        $obj->designation = $request->designation;
        $obj->comment = $request->comment;
        $obj->update();

        return redirect()->route('admin_testimonial')->with('success', __('Data is updated successfully.'));
    }
    
    public function delete($id)
    {
        $testimonial_single = Testimonial::where('id', $id)->first();
        unlink(public_path('uploads/' . $testimonial_single->photo));
        Testimonial::where('id', $id)->delete();
        return redirect()->route('admin_testimonial')->with('success', __('Data is deleted successfully.'));
    }
}
