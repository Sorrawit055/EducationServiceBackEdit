<?php
namespace app\Models;
use CodeIgniter\Model;

class NameLogoModel extends Model{
    protected $table = 'namelogo';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id','NameHeaderWeb','LogoWeb','EngNameWeb','DetailWeb','NameWeb']; 
}
?>