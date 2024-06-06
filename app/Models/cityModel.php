<?php namespace App\Models;

use CodeIgniter\Model;

class cityModel extends Model{
    protected $table = 'city_table';
    protected $primaryKey = 'city_id';
    protected $pretectFields = true;
    protected $allowedFields = [
        'city_id',
        'city_name',
        'city_image',
        'country_id',
        'city_created_at',
    ];
}