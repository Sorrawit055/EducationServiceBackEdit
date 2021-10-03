<?php
namespace app\Models;
use CodeIgniter\Model;

class FooterModel extends Model{
    protected $table = 'footer';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id' , 'footer_contact' , 'footer_contact_detail' , 'footer_devloper' , 'footer_devloper_detail','footer_license'];
}
?>