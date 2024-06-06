<?php

namespace App\Controllers;
use App\Models\adminModel;
use App\Models\countryModel;
use App\Models\cityModel;

class Admin extends BaseController
{
    // 1. Method to view admin signin form
    public function index(){
        return view('admin_signin');
    }

    // 2. Method of admin signin through signin form
    public function adminSignin(){
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

    // 3. Method to view admin dashboard after admin login
    public function adminDashboard(){
        return view('admin_dashboard');
    }

    // 4. Method to add country data in database
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

    // 5. Method to view country page in admin dashboard
    public function viewCountries(){
        return view('admin_view_country');
    }

    // 6.Method to fetch country data from database and display it on admin dashboard
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

    // 7. Method to fetch country from country id
    public function fetchCountry($id = null){
        $country = new countryModel;
        $data= $country->find($id);
        return $this->response->setJSON($data); 
    }

    // 8. Method to update country data in database
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

    // 9. Method to delete country data from database
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

    // 10. Method to view city page in admin dashbaord
    public function viewCities(){
        return view('admin_view_cities');
    }

    // 11. Method to fetch country id and country name and display it on select box
    public function countryList(){
        $country = new countryModel;
        $data = $country->orderBy('country_name', 'ASC')->findAll();
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

    // 12. Method to add city data in database
    public function addCityInDb(){
        $file = $this->request->getFile('cityimg');
        $fileName = $file->getRandomName();
        $data = [
            'country_id' => $this->request->getPost('countrySelect'),
            'city_name' => $this->request->getPost('cityname'),
            'city_image'=> $fileName,
            'city_created_at' => date('Y-m-d H:i:s')
        ];
        
        $validation = \Config\Services::validation();
        $validation->setRules([
            'cityimage' => 'uploaded[cityimg]|max_size[cityimg,1024]|is_image[cityimg]|mime_in[cityimg,image/jpg,image/png,image/jpeg]',
        ]);
        if (!$validation->withRequest($this->request)->run()) {
            return $this->response->setJSON([
                'error' => true,
                'message' => $validation->getErrors()
            ]);
        } else {
            $file->move('public/assets/images/cities_images/', $fileName);
            $city = new cityModel;
            $city->save($data);
            return $this->response->setJSON([
                'error'   => false,
                'message' => 'City Added Successfully!'
            ]); 
        }  
    }

    // 13. Method to view cities data from database to admin dashbaord
    public function citiesInDb(){
        $city = new cityModel;
        $data = $city->join('country_table', 'city_table.country_id=country_table.country_id', 'LEFT')->findAll(); 
        $city = '';
        $count=1;
        if ($data) {
            foreach($data as $row){
                $city .= '<tr>
                <td> '.$count++  .'</td>
                <td><img src="public/assets/images/nations-flag/'.$row['country_image'].'" class="img-fluid rounded-circle border border-dark" height="90" width="80"> </td> 
                <td>'.$row['country_name'].' </td> 
                <td><img src="public/assets/images/cities_images/'.$row['city_image'].'" class="img-fluid rounded-circle border border-dark" height="90" width="80"> </td> 
                <td>'.$row['city_name'].' </td> 
                <td>'.date('d F Y', strtotime($row['city_created_at'])).' </td>

                <td><button type="button" class="btn btn-shadow btn-light d-inline-flex editCityBtn" id="'.$row['city_id'].'" data-bs-toggle="modal" data-bs-target="#editCityModal"><a href="#"><i class="fas fa-pencil"></i> </td>

                <td><button type="button" class="btn btn-shadow btn-danger d-inline-flex deleteCityBtn" id="'.$row['city_id'].'"><i class="fas fa-trash"></i></button> </td>

                </tr>';
            }
            return $this->response->setJSON([
                'error' => false,
                'message' => $city
            ]);
        } else {
            return $this->response->setJSON([
                'error' => false,
                'message' => '<tr ><td colspan="8"><div class="alert alert-danger " role="alert"> <h3 class="text-indigo-300"><i class="fa fa-ban"></i> No City Found In Database </h3></div></td> </tr>'
            ]);
        }
    }

    // 14. Method to fetch city from city id
    public function fetchCity($id = null){
        $city = new cityModel;
        $data= $city->join('country_table', 'city_table.country_id=country_table.country_id', 'LEFT')->find($id);
        return $this->response->setJSON($data); 
    }

    // 15. Method to update city data in database
    public function updateCityInDb(){
        $cityId = $this->request->getPost('city-id');
        $file = $this->request->getFile('editcityimg');
        $fileName = $file->getFilename();
        // if filename is not empty then this means that the admin has updated the image
        if ($fileName != '') {
            $fileName = $file->getRandomName();
            $file->move('public/assets/images/cities_images/',$fileName);
            // now removing the old file
            if($this->request->getPost('old-city-img') != ''){
                unlink('public/assets/images/cities_images/'.$this->request->getPost('old-city-img'));
            }

        } else {
            $fileName = $this->request->getPost('old-city-img');
        }
        
        $data = [
            'country_id' => $this->request->getPost('editCountrySelect'),
            'city_name' => $this->request->getPost('editcityname'),
            'city_image' => $fileName,
            'city_created_at' => date('Y-m-d H:i:s')
        ];
        
        $city = new cityModel;
        $city->update($cityId, $data);
        return $this->response->setJSON([
            'error' => false,
            'message' => 'City Updated Successfully!'
        ]);

    }

    // 16. Method to delete city data from database
    public function deleteCityInDb($id = null){
        $city = new cityModel;
        $cdata = $city->find($id);
        $city->delete($id);
        unlink('public/assets/images/cities_images/'. $cdata['city_image']);
        return $this->response->setJSON([
            'error' => false,
            'message' => 'City Deleted Successfully!'
        ]); 
    }


    // 17. Method to view edit profile page on admin dashboard
    public function editProfile(){
        return view('admin_edit_profile');
    }
    // xx. Method of admin logout from admin dashboard
    public function adminLogout(){
        session_destroy();
        return redirect()->to('admin-signin');
    }

     
    
}