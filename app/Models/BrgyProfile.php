<?php

namespace App\Models;

use CodeIgniter\Model;

class BrgyProfile extends Model
{
  protected $table = 'brgy_profile';

  protected $primaryKey = 'id';
  protected $allowedFields = ['image', 'name', 'city', 'province', 'region', 'location', 'email_address', 'phone_number',
                'tel_number'];
}