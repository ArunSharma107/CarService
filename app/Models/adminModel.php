<?php namespace App\Models;

use CodeIgniter\Model;

class adminModel extends Model{
    protected $table = 'admin';
    protected $primaryKey = 'admin-id';
    protected $allowFields = [
        'admin-email',
        'admin-password',
    ];

    


}