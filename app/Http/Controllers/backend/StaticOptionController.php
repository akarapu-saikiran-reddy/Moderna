<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Services\Helpers;
use Illuminate\Http\Request;

class StaticOptionController extends Controller
{
    public function __construct()
    {
        view()->share('title', '');
    }
    public function submitoptions(Request $request)
    {
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/homepage/image', $filename);
            $value = $filename;
            $key = 'image';
            Helpers::set_static_option($key, $value);
        }
        if ($request->hasfile('about_image')) {
            $file = $request->file('about_image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('Upload/images/homepage/about-image', $filename);
            $value = $filename;
            $key = 'about_image';
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('title')) {
            $key = 'title';
            $value = $request->title;
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('description')) {
            $key = 'description';
            $value = $request->description;
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('video_link')) {
            $key = 'video_link';
            $value = $request->video_link;
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('svg_logo')) {
            $key = 'svg_logo';
            $value = $request->svg_logo;
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('card_title')) {
            $key = 'card_title';
            $value = $request->card_title;
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('card_description')) {
            $key = 'card_description';
            $value = $request->card_description;
            Helpers::set_static_option($key, $value);
        }

        if ($request->has('about_description')) {
            $key = 'about_description';
            $value = $request->about_description;
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('testimonial_description')) {
            $key = 'testimonial_description';
            $value = $request->testimonial_description;
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('skill_description')) {
            $key = 'skill_description';
            $value = $request->skill_description;
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('about_description')) {
            $key = 'about_description';
            $value = $request->about_description;
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('contacte_description')) {
            $key = 'contacte_description';
            $value = $request->contacte_description;
            Helpers::set_static_option($key, $value);
        };
        if ($request->has('contacte_logo')) {
            $key = 'contacte_logo';
            $value = $request->contacte_logo;
            Helpers::set_static_option($key, $value);
        };
        if ($request->has('contactp_logo')) {
            $key = 'contactp_logo';
            $value = $request->contactp_logo;
            Helpers::set_static_option($key, $value);
        };

        if ($request->has('contactp_description')) {
            $key = 'contactp_description';
            $value = $request->contactp_description;
            Helpers::set_static_option($key, $value);
        };

        if ($request->has('contacta_description')) {
            $key = 'contacta_description';
            $value = $request->contacta_description;
            Helpers::set_static_option($key, $value);
        };
        if ($request->has('contacta_logo')) {
            $key = 'contacta_logo';
            $value = $request->contacta_logo;
            Helpers::set_static_option($key, $value);
        }
        if ($request->has('gmap_link')) {
            $key = 'gmap_link';
            $value = $request->gmap_link;
            Helpers::set_static_option($key, $value);
        };
        if ($request->has('services_title')) {
            $key = 'services_title';
            $value = $request->services_title;
            Helpers::set_static_option($key, $value);
        };
        if ($request->has('services_description')) {
            $key = 'services_description';
            $value = $request->services_description;
            Helpers::set_static_option($key, $value);
        };
        if ($request->has('services_video_link')) {
            $key = 'services_video_link';
            $value = $request->services_video_link;
            Helpers::set_static_option($key, $value);
        };
        if ($request->has('services_svg_logo')) {
            $key = 'services_svg_logo';
            $value = $request->services_svg_logo;
            Helpers::set_static_option($key, $value);
        };
        if ($request->has('pricing_title')) {
            $key = 'pricing_title';
            $value = $request->pricing_title;
            Helpers::set_static_option($key, $value);
        };

        if ($request->has('pricing_description')) {
            $key = 'pricing_description';
            $value = $request->pricing_description;
            Helpers::set_static_option($key, $value);
        };

        return redirect()->back();
    }
    public function homeoptionsindex()
    {
        return view('pages.backend.homepagestatics');
    }
    public function aboutoptionsindex()
    {
        return view('pages.backend.aboutstatics');
    }
    public function contactoptionsindex()
    {
        return view('pages.backend.contactstatics');
    }
    public function servicesoptionsindex()
    {
        return view('pages.backend.servicesstatics');
    }
}
