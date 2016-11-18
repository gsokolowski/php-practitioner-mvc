<?php

// namespace mimic the folder structure
namespace App\Controllers;

class PagesController {

    public function home()
    {


        return view('index'); // 'users' not compact( $users )

    }
    public function about() {

        $company = 'Laracasts';

        return view('about', compact( 'company' ));
    }

    public function contact() {

        return view('contact');
    }
}