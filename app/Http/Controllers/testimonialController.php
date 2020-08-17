<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Testimonial;

class testimonialController extends Controller
{
  
    public function index()
    {
        $testimonials = Testimonial::all();
        $page = "all_testimonials";
        return view('admin.testimonials.all_testimonials',compact('testimonials','page'));
    }

    public function create()
    {
        $page = "add_testimonial";
        return view('admin.testimonials.add_testimonial',compact('page'));
    }

  
    public function store(Request $request)
    {

            $testimonial = new  Testimonial;
            $testimonial->fullname = $request->input('fullname');
            $testimonial->content = $request->input('content');
            $testimonial->tag = $request->input('tag');
            $testimonial->visibility = $request->input('visibility');
            $testimonial->publish = $request->input('publish');

           // SAVE
             $testimonial->save();

            // AFTER
            $success = 'Added  Successfully .';
            //PAGE NAME
            $page = "add_testimonial";

           return view('admin.testimonials.add_testimonial',compact('success','page'));

    }

  
    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $testimonial = Testimonial::find($id);
        $page = "edit_testimonial";
        return view('admin.testimonials.edit_testimonial', compact('testimonial','page'));
    }

    
    public function update(Request $request, $id)
    {
        $testimonial = Testimonial::find($id);;
        $testimonial->fullname = $request->input('fullname');
        $testimonial->content = $request->input('content');
        $testimonial->tag = $request->input('tag');
        $testimonial->visibility = $request->input('visibility');
        $testimonial->publish = $request->input('publish');

       // SAVE
         $testimonial->save();

        // AFTER
        $success = 'Edited  Successfully.';
        //PAGE NAME
        $page = "add_testimonial";

       return back()->with($success);
       //view('admin.testimonials.edit_testimonial',compact('success','page'));

    }

   
    public function destroy($id)
    {
        $delete_img = Testimonial::find($id)->delete();
        return back()->with("Deleted Successfully");
        //return "Deleted Successfully";
    }
}
