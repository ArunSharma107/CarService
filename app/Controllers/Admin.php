<?php

namespace App\Controllers;
use App\Models\adminModel;
use App\Models\countryModel;
 


class Admin extends BaseController
{
    public function index()
    {
        return view('admin_signin');
    }

    public function adminSignin()
    {
        $admin  = new adminModel;

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // $hpwd = password_hash($password, PASSWORD_DEFAULT);
        $hpwd = md5($password);


        $result['admin'] = $admin->where('admin_email', $email)->first();
        if($result['admin']){
            if ($hpwd == $result['admin']['admin_password']) {
                // logging in 
                $data = ['status' => 1];
                $this->session->set('admin', $result['admin']);

            } else {
                // Password did not matched
                $data = ['status' => 2];
                
            }
            return $this->response->setJSON($data);
                     
        }else{
            // The email id is not registered with us.
            $data = ['status' => 3];
            return $this->response->setJSON($data);     
        }

    }

    public function adminDashboard(){
        return view('admin_dashboard');
    }

 

    public function addCountriesInDb(){
        $file = $this->request->getFile('countryimg');
        $fileName = $file->getRandomName();
        $data = [
            'country_name' => $this->request->getPost('countryname'),
            'country_image'=> $fileName,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $validation = \Config\Services::validation();
        $validation->setRules([
            'countryimage' => 'uploaded[countryimg]|max_size[countryimg,1024]|is_image[countryimg]|mime_in[countryimg,image/jpg,image/png,image/jpeg]',
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'error' => true,
                'message' => $validation->getErrors()
            ]);
        } else {
            $file->move('public/assets/images/nations-flag/', $fileName);
            $country  = new countryModel;
            $country->save($data);
            return $this->response->setJSON([
                'error'   => false,
                'message' => 'Country Added Successfully!'
            ]); 
        }
        
         
    }

    public function viewCountries(){
        return view('admin_view_country');
    }

    public function countriesInDB(){
        $country = new countryModel;
        $data = $country->findAll();
        $country = '';
        $count=1;
        if ($data) {
            foreach($data as $row){
                $country .= '<tr>
                <td> '.$count++  .'</td>
                <td><img src="public/assets/images/nations-flag/'.$row['country_image'].'" class="img-fluid rounded-circle border border-primary" height="80" width="80"> </td> 
                <td>'.$row['country_name'].' </td> 
                <td>'.date('d F Y', strtotime($row['created_at'])).' </td> 
                <td><button type="button" class="btn btn-shadow btn-warning d-inline-flex editCountryBtn" id="'.$row['country_id'].'" data-bs-toggle="modal" data-bs-target="#editCountryModal"><a href="#"><i class="fas fa-pencil"></i> </td>

                <td><button type="button" class="btn btn-shadow btn-danger d-inline-flex deleteCountryBtn" id="'.$row['country_id'].'"><i class="fas fa-trash"></i></button> </td>

                </tr>';
            }

            return $this->response->setJSON([
                'error' => false,
                'message' => $country
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<tr ><td colspan="6"><div class="alert alert-danger " role="alert"> <h3 class="text-indigo-300"><i class="fa fa-ban"></i> No Country Found In Database </h3></div></td> </tr>'
            ]);
        }
        
        
    }

    public function fetchCountry($id = null){
        $country = new countryModel;
        $data= $country->find($id);
        return $this->response->setJSON($data); 
    }


    public function updateCountriesInDb(){
        $countryId = $this->request->getPost('country-id');
        $file = $this->request->getFile('editcountryimg');
        $fileName = $file->getFilename();
        // if filename is not empty then this means that the admin has updated the image
        if ($fileName != '') {
            $fileName = $file->getRandomName();
            $file->move('public/assets/images/nations-flag/', $fileName);
            // now removing the old file
            if($this->request->getPost('old-country-img') != ''){
                unlink('public/assets/images/nations-flag/'. $this->request->getPost('old-country-img'));
            }

        } else {
            $fileName = $this->request->getPost('old-country-img');
        }
        
        $data = [
            'country_name' => $this->request->getPost('editcountryname'),
            'country_image' => $fileName,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $country = new countryModel;
        $country->update($countryId, $data);
        return $this->response->setJSON([
            'error' => false,
            'message' => 'Country Updated Successfully!'
        ]);

    }

    public function deleteCountryInDb($id = null){
        $country = new countryModel;
        $cdata = $country->find($id);
        $country->delete($id);
        unlink('public/assets/images/nations-flag/'. $cdata['country_image']);
        return $this->response->setJSON([
            'error' => false,
            'message' => 'Country Deleted Successfully!'
        ]); 

  
    }

    public function viewCities(){
        return view('admin_view_cities');
    }

    public function countryList(){
        $country = new countryModel;
        $data = $country->findAll();
        $country = '';
        if ($data) {
            foreach($data as $row){
                $country .= ' <option value="'.$row['country_id'].'">'.$row['country_name'].'</option>';
            }

            return $this->response->setJSON([
                'error' => false,
                'message' => $country
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<option value="0"> No records found in database</option>'
            ]);
        }

    }


    public function adminLogout(){
        
        session_destroy();
        return redirect()->to('admin-signin');

    }

     
    
}