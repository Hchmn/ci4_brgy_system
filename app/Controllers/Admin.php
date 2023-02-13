<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function dashboard(){
        return view("admin/dashboard");
    }

    public function home(){
        return view("admin/home");
    }

    public function brgyProfile(){
        return view ("admin/brgyprofile");
    }

    public function brgyOfficial(){
        return view ("admin/brgyOfficial");
    }

    public function resident(){
        return view ("admin/resident");
    }

    public function blotter(){
        return view ("admin/blotter");
    }

}
