<?php

namespace App\Http\Controllers;

use Exception;
use App\Mail\ContactFormSubmitEmail;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class WebController extends Controller
{
    function index()
    {
        return view('index');
    }
    function about()
    {
        return view('about');
    }
    function businessSetup()
    {
        return view('business-setup');
    }
    function accountingAndTaxation()
    {
        return view('aandt');
    }
    function services()
    {
        return view('services');
    }
    function servicesLegal()
    {
        $title = "";
        $desc = "";
        $keywords = "";
        $canonical = "";
        return view('services.legal', compact('title', 'desc', 'keywords', 'canonical'));
    }
    function servicesBank()
    {
        $title = "";
        $desc = "";
        $keywords = "";
        $canonical = "";
        return view('services.bank', compact('title', 'desc', 'keywords', 'canonical'));
    }
    function servicesBrand()
    {
        $title = "";
        $desc = "";
        $keywords = "";
        $canonical = "";
        return view('services.brand', compact('title', 'desc', 'keywords', 'canonical'));
    }
    function servicesPro()
    {
        $title = "";
        $desc = "";
        $keywords = "";
        $canonical = "";
        return view('services.pro', compact('title', 'desc', 'keywords', 'canonical'));
    }
    function servicesVisa()
    {
        $title = "";
        $desc = "";
        $keywords = "";
        $canonical = "";
        return view('services.visa', compact('title', 'desc', 'keywords', 'canonical'));
    }
    function servicesOffice()
    {
        $title = "";
        $desc = "";
        $keywords = "";
        $canonical = "";
        return view('services.office', compact('title', 'desc', 'keywords', 'canonical'));
    }
    function servicesWill()
    {
        $title = "";
        $desc = "";
        $keywords = "";
        $canonical = "";
        return view('services.will', compact('title', 'desc', 'keywords', 'canonical'));
    }
    function servicesDifc()
    {
        $title = "";
        $desc = "";
        $keywords = "";
        $canonical = "";
        return view('services.difc', compact('title', 'desc', 'keywords', 'canonical'));
    }
    function privacy()
    {
        return view('privacy-policy');
    }
    function contact()
    {
        return view('contact');
    }
    function refreshCaptcha()
    {
        return response()->json(['captcha' => captcha_img('flat')]);
    }

    function contactSubmit(Request $request): RedirectResponse
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'mobile' => 'required',
                'subject' => 'required',
                'message' => 'required',
                //'captcha' => 'required|captcha',
            ],
            //['captcha.captcha' => 'Invalid captcha code.']
        );
        try {
            Mail::to('mastermindz.fze@gmail.com')->send(new ContactFormSubmitEmail($request));
        } catch (Exception $e) {
            return redirect()->back()->with("error", $e->getMessage())->withInput($request->all());
        }
        return redirect()->back()->with("success", "Contact form submitted successfully!");
    }
}
