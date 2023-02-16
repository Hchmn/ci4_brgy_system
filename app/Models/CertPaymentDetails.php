<?php

namespace App\Models;

use CodeIgniter\Model;

class CertPaymentDetails extends Model
{
  protected $table = 'cert_payment_details';

  protected $primaryKey = 'id';
  protected $allowedFields = ['total_amount', 'resident_id', 'payment_type_id', 'certificate_id', 'date'];
}