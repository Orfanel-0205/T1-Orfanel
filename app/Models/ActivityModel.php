<?php 

namespace App\Models;

use CodeIgniter\Model;

class ActivityModel extends Model

{
    protected $table = 'activities';
    protected $primarykey = 'id';
    protected $allowedFields = ['name', 'description'];
    protected $useTimestamps = true;
}