<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class portfolioController extends Controller
{
    public function index() {
        return view('home');
    }
    public function projets() {
        return view('projets');
    }
    public function formation() {
        return view('formation');
    }
    public function experience() {
        return view('experience');
    }
    public function contact() {
        return view('contact');
    }
    public function formContact(Request $request) {
        return view('contact', ['data' => $request]);
    }
}
