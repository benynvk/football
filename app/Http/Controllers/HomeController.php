<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Van KHOA
 * Date: 5/12/2017
 * Time: 9:15 AM
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        
        return view('home.index');
    }
}