<?php
namespace app\Models;
use CodeIgniter\Model;

class CarouselModel extends Model{
    protected $table = 'carousel_slider';
    protected $primaryKey = 'id_carousel';
    protected $allowedFields = ['id_carousel', 'image_carousel']; 
}
?>