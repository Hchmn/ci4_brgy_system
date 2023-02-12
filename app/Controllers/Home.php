<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function userLogin(){

        if($this->request->getMethod() == "post"){
            $username = $this->request->getVar("username");
            $password = $this->request->getVar("password");

            $queryUser = $this->userModel->where("username", $username)->where("password", $password)->first();

            if($queryUser){
                
            }
            else{
                session()->setFlashdata("Invalid", "Invalid Password");
                return redirect()->to("/");
            }
        }

    }

}
