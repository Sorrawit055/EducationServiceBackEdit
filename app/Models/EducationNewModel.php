<?php
namespace app\Models;
use CodeIgniter\Model;

class EducationNewModel extends Model{
    protected $table = 'education_new';
    protected $primaryKey = 'id_new';
    protected $allowedFields = ['id_new','new_name','new_date_open','new_date_close','new_sub_detail','new_detail','new_url','new_image']; 
}
?>