<?php

namespace App\Models;

use CodeIgniter\Model;

class Resident extends Model
{
  protected $table = 'resident';

  protected $primaryKey = 'id';
  protected $allowedFields = ['fname', 'lname', 'mname', 'bdate', 'bplace', 'age', 'zone', 'num_household', 'occupation',
            'civil_status', 'educational_attainment', 'blood_type', 'nationality', 'sex', 'barangay', 'status', 'photo'];
}