<?php 

namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class StudentModeltest extends Model
{
    protected $table = 'student';
    protected $allowedFields = ['id_stu','title','fname_stu','lname_stu','id_curriculum'
    ,'GPA_stu','year_class','class','year_stu','password_stu'];

}