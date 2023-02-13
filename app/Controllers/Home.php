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
                $this->setSession($queryUser);
                return redirect()->to("admin_dashboard");
            }
            else{
                session()->setFlashdata("Invalid", "Invalid Password");
                return redirect()->to("/");
            }
        }

    }

    public function setSession($data){
        $data = [
            "id" => $data["id"],
        ];

        session()->set($data);
        return true;
    }

    public function userSignUp(){
        return view ('signup');
    }

    public function userRegistration(){

        if($this->request->getMethod() == "post"){
            $fname = $this->request->getVar("fname");
            $mname = $this->request->getVar("mname");
            $lname = $this->request->getVar("lname");
            $place = $this->request->getVar("place");
            $zone = $this->request->getVar("zone");
            $brgy = $this->request->getVar("brgy");
            $cstatus = $this->request->getVar("cstatus");
            $occupation = $this->request->getVar("occupation");
            $bdate = $this->request->getVar("bdate");
            $photo = $this->request->getVar("photo");
            $age = $this->request->getVar("age");
            $sex = $this->request->getVar("sex");
            $btype = $this->request->getVar("btype");
            $nationality = $this->request->getVar("nationality");
            $member = $this->request->getVar("member");
            $education = $this->request->getVar("education");
            $voter = $this->request->getVar("voter");
            $username = $this->request->getVar("username");
            $password = $this->request->getVar("password");


            $residentData = [
                "fname" => $fname,
                "lname" => $lname,
                "mname" => $mname,
                "bdate" => $bdate,
                "bplace" => $place,
                "age" => $age,
                "zone" => $zone,
                "num_household" => $member,
                "bdate" => $bdate,
                "occupation" => $occupation,
                "civil_status" => $cstatus,
                "educational_attainment" => $education,
                "blood_type" => $btype,
                "nationality" => $nationality,
                "sex" => $sex,
                "barangay" => $brgy,
                "status" => $voter,
                "photo" => " "
            ];

            $this->residentModel->save($residentData);
            
            $userData = [
                "username" => $username,
                "password" => $password,
                "type" => 0,
                "resident_id" => $this->residentModel->getInsertId()
            ];
            
            $this->userModel->save($userData);
            session()->setFlashData("registered", "Successfully Registered");

            
        }
        return redirect()->to("/");
    }

}
