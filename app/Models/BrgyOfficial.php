<?php

namespace App\Models;

use CodeIgniter\Model;

class BrgyOfficial extends Model
{
  protected $table = 'brgy_official';

  protected $primaryKey = 'id';
  protected $allowedFields = ['position', 'term_start', 'term_end', 'status', 'resident_id'];
}