<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentType extends Model
{
  protected $table = 'payment_type';

  protected $primaryKey = 'id';
  protected $allowedFields = ['name'];
}