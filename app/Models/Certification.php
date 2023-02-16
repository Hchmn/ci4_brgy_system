<?php

namespace App\Models;

use CodeIgniter\Model;

class Certification extends Model
{
  protected $table = 'certification';

  protected $primaryKey = 'id';
  protected $allowedFields = ['cert_num', 'type_of_cert', 'purpose_id', 'ornum', 'resident_id', 'date_recorded'];
}