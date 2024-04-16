<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home() {
        return view('frontend.pages.home.home');
    }
    public function about() {
        return view('frontend.pages.about.about');
    }
    public function services() {
        return view('frontend.pages.services.services');
    }
    public function portfolio() {
        return view('frontend.pages.portfolio.portfolio');
    }
    public function portfolioDetails() {
        return view('frontend.pages.portfolio.portfolio-details');
    }
    public function team() {
        return view('frontend.pages.team.team');
    }
    public function blog() {
        return view('frontend.pages.blog.blog');
    }
    public function blogDetails() {
        return view('frontend.pages.blog.blog-details');
    }
    public function contact() {
        return view('frontend.pages.contact.contact');
    }
}
