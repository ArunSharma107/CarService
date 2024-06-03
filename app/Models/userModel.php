<?php namespace App\Models;

use CodeIgniter\Model;

class userModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'user-id';
    protected $allowFields = [
        'user-email',
        'user-password',
         
    ];

    protected function beforeInsert(array $data){
        $data = $this->passwordHash($data);
        $data['data']['user-created-at'] = date('Y-m-d H:i:s');
        return $data;

    }

    protected function passwordHash(array $data){
        if(isset($data['data']['user-password']))
        $data['data']['user-password'] = password_hash($data['data']['user-password'], PASSWORD_DEFAULT);
        return $data;
    }
}