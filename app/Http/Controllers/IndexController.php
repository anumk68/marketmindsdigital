<?php

namespace App\Http\Controllers;

use App\Mail\InquiryNotification;
use App\Models\Blog;
use App\Models\CustomerInquiry;
use App\Models\SettingPag;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class IndexController extends Controller
{
    protected $title_default;
    protected $description_default;
    protected $keyword_default;
    public function __construct()
    {
        $this->title_default = 'Marketing Minds Digital | Top Digital Marketing Agency USA';
        $this->description_default = 'Marketing Minds Digital is a leading digital marketing agency in the USA, specializing in
SEO, PPC, social media, content marketing, and web development.';
        $this->keyword_default = 'digital marketing, SEO, PPC, social media';
    }
    public function index()
    {
        $blog = Blog::latest()->take(3)->get();
        $data = SettingPag::where('page', 'home')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        $faqSchema = $data->faq_schema ?? null;
        return view('frontend.index', compact('blog', 'title', 'desc', 'key', 'faqSchema'));
    }
    public function about()
    {
        $data = SettingPag::where('page', 'about-us')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        return view('frontend.about', compact('title', 'desc', 'key'));
    }
    public function blog_detail($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blogs = Blog::latest()->limit(3)->get();
        return view('frontend.blog-details', compact('blog', 'blogs'));
    }
    public function blog()
    {
        $blog = Blog::all();
        $data = SettingPag::where('page', 'blog')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        return view('frontend.blog', compact('blog', 'title', 'desc', 'key'));
    }
    public function contact()
    {
        return view('frontend.contact');
    }
    public function content_marketing_agency()
    {
        $data = SettingPag::where('page', 'content-marketing-agency')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        return view('frontend.content-marketing-agency', compact('title', 'desc', 'key'));
    }
    public function ecommerce_seo()
    {
        $data = SettingPag::where('page', 'e-commerce-seo')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        return view('frontend.e-commerce-seo', compact('title', 'desc', 'key'));
    }
    public function local_seo()
    {
        $data = SettingPag::where('page', 'local-seo')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        return view('frontend.local-seo', compact('title', 'desc', 'key'));
    }
    public function ppc()
    {
        $data = SettingPag::where('page', 'ppc-services')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        return view('frontend.ppc-services', compact('title', 'desc', 'key'));
    }
    public function privacy()
    {
        return view('frontend.privacy-policy');
    }
    public function refund()
    {
        return view('frontend.refund-policy');
    }
    public function seo()
    {
        $data = SettingPag::where('page', 'seo-services')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        return view('frontend.seo-services', compact('title', 'desc', 'key'));
    }
    public function social_media_marketing()
    {
        $data = SettingPag::where('page', 'social-media-marketing')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        return view('frontend.social-media-marketing', compact('title', 'desc', 'key'));
    }
    public function term()
    {
        return view('frontend.terms-conditions');
    }
    public function web_design()
    {
        $data = SettingPag::where('page', 'web-design')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        return view('frontend.web-design', compact('title', 'desc', 'key'));
    }
    public function web_development()
    {
        $data = SettingPag::where('page', 'web-development')->first();
        $title = $data->title ?? $this->title_default;
        $desc = $data->description ?? $this->description_default;
        $key = $data->keyword ?? $this->keyword_default;
        return view('frontend.web-development', compact('title', 'desc', 'key'));
    }
    public function sendOtp(Request $request)
    {
        $request->validate(['email' => 'required|email']);
        $otp = rand(100000, 999999);
        Session::put('otp', $otp);
        Mail::raw("Your OTP is: $otp", function ($message) use ($request) {
            $message->to($request->email)
                ->subject('Email Verification OTP');
        });
        return response()->json(['success' => true, 'message' => 'OTP sent successfully']);
    }
    public function verifyOtp(Request $request)
    {
        if ($request->otp == Session::get('otp')) {
            Session::forget('otp');
            return response()->json(['verified' => true]);
        } else {
            return response()->json(['verified' => false, 'message' => 'Invalid OTP']);
        }
    }
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required',
            'service' => 'required',
        ]);
        CustomerInquiry::create($validated);
        Mail::to(env('MAIL_FROM_ADDRESS'))->send(new InquiryNotification($request->only(['name', 'email', 'phone', 'service'])));

        return response()->json(['success' => true, 'message' => 'Message sent successfully!']);
    }
    // public function subscribe(Request $request)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'email' => 'required|email' // Check proper email format
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Please enter a valid email address.'
    //         ]);
    //     }

    //     try {
    //         $subscriber = Subscribe::where('email', $request->email)->first();

    //         if ($subscriber) {
    //             if ($subscriber->is_active) {
    //                 return response()->json([
    //                     'success' => false,
    //                     'message' => 'This email is already subscribed.'
    //                 ]);
    //             } else {
    //                 $subscriber->update(['is_active' => true]);
    //                 return response()->json([
    //                     'success' => true,
    //                     'message' => 'Welcome back! You have been re-subscribed.'
    //                 ]);
    //             }
    //         }

    //         Subscribe::create([
    //             'email' => $request->email,
    //             'is_active' => true
    //         ]);

    //         return response()->json([
    //             'success' => true,
    //             'message' => 'Thank you for subscribing!'
    //         ]);
    //     } catch (\Exception $e) {
    //         return response()->json([
    //             'success' => false,
    //             'message' => 'Something went wrong. Please try again. ' . $e->getMessage()
    //         ]);
    //     }
    // }


    public function subscribe(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Please enter a valid email address.'
            ]);
        }
        try {
            $subscriber = Subscribe::where('email', $request->email)->first();
            if ($subscriber) {
                if ($subscriber->is_active) {
                    return response()->json([
                        'success' => false,
                        'message' => 'This email is already subscribed.'
                    ]);
                } else {
                    $subscriber->update(['is_active' => true]);
                    return response()->json([
                        'success' => true,
                        'message' => 'Welcome back! You have been re-subscribed.'
                    ]);
                }
            }
            $newSubscriber = Subscribe::create([
                'email' => $request->email,
                'is_active' => true
            ]);
            $adminEmail = env('MAIL_FROM_ADDRESS');
            Mail::raw("New subscriber: " . $request->email, function ($message) use ($adminEmail) {
                $message->to($adminEmail)
                    ->subject('New Newsletter Subscription');
            });
            return response()->json([
                'success' => true,
                'message' => 'Thank you for subscribing!'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Something went wrong. Please try again. ' . $e->getMessage()
            ]);
        }
    }


}
