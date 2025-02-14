<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use App\Models\Magz;
use Illuminate\Http\Request;
use App\Models\Post;

class LandingController extends Controller
{

    public function Home(){
        $carousels = Carousel::all()->map(function ($carousel) {
            $carousel->images = json_decode($carousel->images, true); // Decode JSON
            return $carousel;
        });

    // Ambil data Magazine terbaru
    $magzs = Magz::orderBy('created_at', 'desc')->get();

    // Kirim ke view
    return view('app.home', compact('carousels', 'magzs'));
    }

    public function About(){
        return view('app.about');
    }

    public function Menu(){
        return view('app.menu');
    }

    public function Store(){
        return view('app.store');
    }

    public function Partnership(){
        return view('app.partnership');
    }

    public function Bigorder(){
        return view('app.bigorder');
    }

    public function Contact(){
        return view('app.contact');
    }

    public function Career(){

        return view('app.career.career');
    }

    public function Retail(){
        return view('app.career.retail');
    }
    public function Headofficer(){
        return view('app.career.headofficer');
    }

    public function bangorberbagi(){
        return view('app.bangor-berbagi');
    }

    public function bangorgoestoschool(){
        return view('app.bangor-goestoschool');
    }
    public function bangorfuncookingclass(){
        return view('app.bangor-funcookingclass');
    }
    public function bangorstreetactivation(){
        return view('app.bangor-streetactivation');
    }

    public function bangorgoestoevent(){
        return view('app.bangor-goestoevent');
    }

    public function Blog()
    {
        $posts = Post::latest()->paginate(4);
        return view('app.blog', compact('posts'));
    }

    public function Show($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        return view('app.show', compact('post'));
    }

}
