<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\tag;
use Illuminate\Http\Request;
use Illuminate\Support\str;

class MainController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
}
