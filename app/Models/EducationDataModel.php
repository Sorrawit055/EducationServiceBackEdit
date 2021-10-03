<?php

namespace App\Models;

use CodeIgniter\Model;

class EducationDataModel extends Model
{
    protected $table = 'education_detail';
    protected $primaryKey = 'id_edu_detail';
    protected $allowedFields = ['number_of_edu','id_course','id_faculty','id_education','GPA','note_condi','id_curriculum','id_major'];
    
  
}
