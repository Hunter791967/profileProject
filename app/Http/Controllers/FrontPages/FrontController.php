<?php

namespace App\Http\Controllers\FrontPages;

use App\Models\HomeSlider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FrontPages\About;
use App\Models\FrontPages\Academic;
use App\Models\FrontPages\Competency;
use App\Models\FrontPages\Contact_detail;
use App\Models\FrontPages\Contact_icon;
use App\Models\FrontPages\Gallery;
use App\Models\FrontPages\Main_service;
use App\Models\FrontPages\Methodology;
use App\Models\FrontPages\MethodologyDetail;
use App\Models\FrontPages\Prospect_detail;
use App\Models\FrontPages\Skill;
use App\Models\ProjType;
use App\Models\Service;

class FrontController extends Controller
{
    /**
     * Display a listing of the HomeSlider Section.
     *
     * @return \Illuminate\Http\Response
     */
    public function front()
    {
        $showData = HomeSlider::all()->last();
        $aboutData = About::all()->last();
        $Gallery = Gallery::all();
        $serviceData = Service::take(5)->get();
        $mainService = Main_service::all(['main_title', 'sub_title'])->first();
        $contactDetails = Contact_detail::all()->last();
        $contactIcon = Contact_icon::all();
        $methodolgyOne = Methodology::all()->first();
        $methodolgyTwo = Methodology::all()->last();
        $methodologyDetail = MethodologyDetail::take(6)->get();
        $methodologyDetailTwo = MethodologyDetail::get()->skip(6);
        $projFirst = ProjType::all()->first();
        $projType = ProjType::get()->skip(1);
        // $methodologyDetailTwo = MethodologyDetail::latest('id')->limit(6)->get();;
        return view('front', get_defined_vars());
    }

    public function about()
    {
        $showData = HomeSlider::all(['panner'])->last();
        $aboutData = About::all()->last();
        $Gallery = Gallery::take(16)->get();
        $skill = Skill::all();
        $competency = Competency::all();
        $academic = Academic::all();
        $mainService = Main_service::all(['sub_title'])->first();
        $serviceData = Service::all();
        $contactDetails = Contact_detail::all()->last();
        $contactIcon = Contact_icon::all();
        return view('about', get_defined_vars());
    }

    public function service()
    {
        $serviceData = Service::all();
        $serviceImage = Service::take(4)->get();
        $mainService = Main_service::all()->first();
        $contactDetails = Contact_detail::all()->last();
        $contactIcon = Contact_icon::all();
        return view('services', get_defined_vars());
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'min:8|max:80',
            'email' => 'email',
            'phone' => 'min:11|numeric',
            'message' => 'max:500',
        ]);

        // dd($request);
        $prospectDetail = Prospect_detail::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);

        toast('New Prospect_Details Has Been Submitted Successfully!', 'success');
        return redirect()->back();
    }
}
