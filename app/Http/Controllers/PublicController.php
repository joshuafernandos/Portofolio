<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
        return view('home', [
            'portoimg' => Image::all()
        ]);
    }

    public function porto(Image $image)
    {
        return view('porto', [
            'item' => $image
        ]);
    }

    public function webDev()
    {
        return view('webdev');
    }
}
