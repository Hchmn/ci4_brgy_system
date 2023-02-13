<?php

namespace App\Models;

use CodeIgniter\Model;

class Blotter extends Model
{
  protected $table = 'blotter';

  protected $primaryKey = 'id';
  protected $allowedFields = ['brgy_address', 'brgy_contact', 'person_complain_name', 'complaint', 'action_taken',
            'location_of_incidence', 'resident_id', 'complaint_id', 'date_recorded'];
}