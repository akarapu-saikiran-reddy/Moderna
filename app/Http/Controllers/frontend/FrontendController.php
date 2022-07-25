<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Blog;
use App\Models\BlogPosts;
use App\Models\Contactus;
use App\Models\Home;
use App\Models\Feature;
use App\Models\Slider;
use App\Models\Portfolio;
use App\Models\Services;
use App\Models\Team;
use App\Services\Helpers;

class FrontendController extends Controller
{
    public function __construct()
    {
        view()->share('contacta_description', Helpers::get_static_option('contacta_description'));
        view()->share('contacte_description', Helpers::get_static_option('contacte_description'));
        view()->share('contactp_description', Helpers::get_static_option('contactp_description'));
    }
    public function teamindex()
    {
        $data = Team::orderBy('id', 'asc')->paginate(10);
        return view('pages.frontend.team', compact('data',));
    }

    public function blogindex()
    {
        $data = Blog::orderBy('id', 'asc')->paginate(10);
        $data2 = Blog::latest()->take(5)->get();

        return view('pages.frontend.blog', compact('data', 'data2',));
    }
    public function blogsingle()
    {
        $data = Blog::orderBy('id', 'asc');

        return view('pages.frontend.blogsingle', compact('data'));
    }
    public function contactusindex()
    {
        $gmap_link = Helpers::get_static_option('gmap_link');
        $contacta_logo = Helpers::get_static_option('contacta_logo');
        $contacte_logo = Helpers::get_static_option('contacte_logo');
        $contacte_description = Helpers::get_static_option('contacte_description');
        $contactp_description = Helpers::get_static_option('contactp_description');
        $contacta_description = Helpers::get_static_option('contacta_description');
        $contactp_logo = Helpers::get_static_option('contactp_logo');
        $data = Contactus::orderBy('id', 'asc')->paginate(10);
        return view('pages.frontend.contact', compact(
            'data',
            'contacte_logo',
            'contacte_description',
            'contacta_logo',
            'contacta_description',
            'contactp_logo',
            'contactp_description',
            'gmap_link'
        ));
    }
    public function servicesindex()
    {
        $svg_logo = Helpers::get_static_option('svg_logo');
        $image = Helpers::get_static_option('image');
        $video_link = Helpers::get_static_option('video_link');
        $title = Helpers::get_static_option('title');
        $logo = Helpers::get_static_option('logo');
        $description = Helpers::get_static_option('description');
        $pricing_title = Helpers::get_static_option('pricing_title');
        $pricing_description = Helpers::get_static_option('pricing_description');
        $data = Feature::orderBy('id', 'asc')->paginate(10);
        $data2 = Services::orderBy('id', 'asc')->paginate(10);
        return view('pages.frontend.services', compact(
            'image',
            'svg_logo',
            'video_link',
            'title',
            'logo',
            'description',
            'pricing_title',
            'pricing_description',
            'data',
            'data2',
        ));
    }

    public function portfolioindex()
    {
        $data = Portfolio::orderBy('id', 'asc')->paginate(10);
        'portfolio';
        return view('pages.frontend.portfolio', compact('data'));
    }
    public function aboutindex()
    {
        $about_image = Helpers::get_static_option('about_image');
        $about_description = Helpers::get_static_option('about_description');
        $testimonial_description = Helpers::get_static_option('testimonial_description');
        $skill_description = Helpers::get_static_option('skill_description');
        $data = About::orderBy('id', 'asc')->paginate(10);

        return view('pages.frontend.about', compact(
            'skill_description',
            'data',
            'about_description',
            'about_image',
            'testimonial_description',
        ));
    }

    public function homepageindex()
    {
        $video_link = Helpers::get_static_option('video_link');
        $image = Helpers::get_static_option('image');
        $title = Helpers::get_static_option('title');
        $card_title = Helpers::get_static_option('card_title');
        $card_description = Helpers::get_static_option('card_description');
        $description = Helpers::get_static_option('description');
        $videio_url = Helpers::get_static_option('videio_url');
        $svg_logo = Helpers::get_static_option('svg_logo');
        $slider = Slider::orderBy('id', 'asc')->paginate(10);
        $feature = Feature::orderBy('id', 'asc')->paginate(10);
        $home = Home::orderBy('id', 'asc')->paginate(10);

        return view('pages.frontend.home', compact(
            'video_link',
            'slider',
            'feature',
            'home',
            'card_title',
            'card_description',
            'title',
            'description',
            'card_title',
            'card_description',
            'videio_url',
            'svg_logo',
            'image'
        ));
    }
}
