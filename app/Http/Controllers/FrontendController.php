<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Client;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Service;
use App\Models\FSService;
use App\Models\Portfolio;
use App\Models\OurService;
use App\Models\Testimonial;
use App\Models\ContactUs;
use App\Models\TopManagement;
use App\Models\Accessory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Home Page
     */
    public function homePage()
    {
        $all_sliders        = Slider::all();
        $all_portfolio      = Portfolio::all();
        $all_services       = Service::all();
        $all_fsservices     = FSService::all();
        $all_testimonial    = Testimonial::all();
        return view('frontend.home', [
            'all_sliders'       => $all_sliders,
            'all_portfolio'     => $all_portfolio,
            'all_services'      => $all_services,
            'all_fsservices'    => $all_fsservices,
            'all_testimonial'   => $all_testimonial,
        ]);
    }

    /**
     * Clients Page
     */
    public function showClientPage()
    {
        $all_clients    = Client::all();
        return view('frontend.clients', [
            'all_clients'       => $all_clients,
        ]);
    }

    /**
     * Gallery Page
     */
    public function showGalleryPage()
    {
        $all_gallery    = Gallery::all();
        return view('frontend.gallery', [
            'all_gallery'       => $all_gallery,
        ]);
    }

    /**
     * Our Services Page
     */
    public function showOurServicePage()
    {
        
        $top_service = OurService::find(1);
        $accessory_data    = Accessory::all();
        return view('frontend.our-service', [
            'top_service'       => $top_service,
            'accessory_data'    => $accessory_data,
        ]);
    }

    /**
     * About Us Page
     */
    public function showAboutUsPage()
    {
        $all_message        = AboutUs::all();
        $all_management     = TopManagement::all();
        $contactus          = ContactUs::find(1);
        return view('frontend.about', compact('all_message', 'all_management', 'contactus'));
    }

    /**
     * Contact Us Page
     */
    public function showContactUsPage()
    {
        $contactus = ContactUs::find(1);
        return view('frontend.contact', compact('contactus'));
    }


}
