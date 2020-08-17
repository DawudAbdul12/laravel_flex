<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Team;
use App\Product;
use App\Blog;
use App\Album;
use App\AlbumGallery;
use App\Slider;
use App\Testimonial;

// use App\Sponsor;
// use App\subscriber;

class publicController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //INDEX PAGE
        $today = now();// today's time and date
        $sliders = Slider::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->orderBy('created_at', 'ASC')->get(); // Slider

        // RETURN
        return view('frontend.index',compact('sliders'));// return data
    }


    public function testimonial()
    {
        //INDEX PAGE
        $today = now();// today's time and date
        $testimonials = Testimonial::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->orderBy('created_at', 'ASC')->get(); // Slider
        
        // RETURN
        return view('frontend.testimonials',compact('testimonials'));// return data
    }


    
    public function single_product($slug)
    {
        // SINGLE PRODUCT

            $today = now();// today's time and date
            $slug = str_slug($slug); // slug again for security purpose
            $product = Product::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->WHERE('slug', '=', $slug)->firstorfail(); // single Product
            $products = Product::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->WHERE('slug', '!=', $slug)->orderBy('created_at', 'DESC')->take(3)->get(); // Related Product

        // RETURN
            return view('frontend.single-product',compact('product','products'));// return data
    }

   

    public function gallery()
    {
        //  GALLERY
            $today = now();// today's time and date
            $gallery = Album::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->paginate(12); // albums
        // RETURN
            return view('frontend.gallery',compact('gallery'));// return data
    }

    public function gallery_single($slug)
    {
        //  SINGLE GALLERY
            $today = now();// today's time and date
            $slug = str_slug($slug); // slug again for security purpose
            $gallery = Album::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->WHERE('slug', '=', $slug)->firstorfail(); // albums
            $images = AlbumGallery::WHERE('album_id', '=', $gallery->id)->orderBy('id', 'Asc')->get(); // Album Images

        // RETURN
            return view('frontend.album',compact('gallery','images'));// return data
    }

    public function team()
    {
        //  TEAM
            $today = now();// today's time and date
            $teams = Team::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->orderBy('id', 'ASC')->paginate(15); // ALl Members
        
        // RETURN
            return view('frontend.team',compact('teams'));// return data
    }

    public function product()
    {
        //  PRODUCTS
            $today = now();// today's time and date
            $products = Product::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->orderBy('id', 'ASC')->paginate(15); // ALL PRODUCTS
        
        // RETURN
            return view('frontend.products',compact('products'));// return data
    }

    public function blog()
    {
        //  NEWS
            $today = now();// today's time and date
            $blogs = Blog::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->orderBy('publish', 'ASC')->paginate(15); // ALL NEWS
        // RETURN
            return view('frontend.blog',compact('blogs'));// return data
    }


    public function single_news($slug)
    {
        // SINGLE News

            $today = now();// today's time and date
            $slug = str_slug($slug); // slug again for security purpose
            $blog = Blog::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->WHERE('slug', '=', $slug)->firstorfail(); // single news
            $related = Blog::WHERE('publish', '<=', $today)->WHERE('visibility', '=', 'Public')->WHERE('slug', '!=', $slug)->orderBy('created_at', 'DESC')->take(3)->get(); // Related News

        // RETURN
            return view('frontend.single-blog',compact('blog','related'));// return data
    }


     public function about()
    {
        // ABOUT-US
        return view('frontend.about-us');
    }


    public function our_services()
    {
        // ABOUT-US
        return view('frontend.our-services');
    }

    public function how_it_works()
    {
        // ABOUT-US
        return view('frontend.how-it-works');
    }


    public function our_meal()
    {
        // ABOUT-US
        return view('frontend.meal-plans');
    }



    public function contact()
    {
        // CONTACT US
        return view('frontend.contact-us');
    }

}
