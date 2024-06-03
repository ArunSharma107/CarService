<?php

namespace App\Controllers;
use App\Models\adminModel;
use App\Models\userModel;
use App\Models\countryModel;


class Home extends BaseController
{
    public function index()
    {
        $countrylist = new countryModel();
        $data['country'] = $countrylist->findAll();
        return view('welcome_message', $data);
    }

    public function featuredCity($id) {
        $featCountry = new countryModel();
        $data['country'] = $featCountry->find($id);
        return view('featured_city',$data);
    }

    public function userSignin() {
        return view('user_signin');
    }

    public function signup($id) {
        $featCountry = new countryModel();
        $data['country'] = $featCountry->find($id);
        return view('user_signup', $data);
      
    }

    public function userSignup() {
        
        if($this->request->getMethod()=='POST'){
            $rules = [
                'user-email'=>'required|min_length[8]|max_length[20]|valid_email|is_unique[users.user-email]',
                'user-password'=>'required|min_length[8]|max_length[16]',
                 

            ];
            if(!$this->validate($rules)){
                $data['validation'] = $this->validator;
                 
            }else{
                 $model=new userModel();
                 $data = array(
                    'user-email' => $this->request->getvar('user-email'),
                    'user-password' => $this->request->getvar('user-password')
                 );
                 $model->save($data);
            }
           

        }
        // print_r($data);
        return view('user_signup', $data);

    }
}
