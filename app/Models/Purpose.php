<?php

namespace App\Models;

use CodeIgniter\Model;

class Purpose extends Model
{
  protected $table = 'purpose';

  protected $primaryKey = 'id';
  protected $allowedFields = ['name'];
}