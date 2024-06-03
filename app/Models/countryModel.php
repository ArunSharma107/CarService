<?php namespace App\Models;

use CodeIgniter\Model;

class countryModel extends Model{
    protected $table = 'country_table';
    protected $primaryKey = 'country_id';
    protected $pretectFields = true;
    protected $allowedFields = [
        'country_name',
        'country_image',
        'created_at',
    ];
}