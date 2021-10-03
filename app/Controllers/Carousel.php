<?php 
//https://github.com/Sorrawit055/EducationServiceBack2.git
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;//ทำAPI
use CodeIgniter\API\ResponseTrait;//จัดเป็น json เอง
use App\Models\CarouselModel;


use ResourceBundle;

class Carousel extends ResourceController
{
    use ResponseTrait;

    public function getCarousel()
    {
        $model = new CarouselModel();

        $AdminTeacher = $model->orderBy('id_carousel','ASC')->findAll();
        return $this->respond($AdminTeacher);
    }
    public function getCarouselId($id = null){
        $model = new CarouselModel();
        $data = $model->where('id_carousel',$id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Product Found');
        }

    }
    public function createCarousel()
    {
        $model = new CarouselModel();
        $data = [
            "id_carousel" => $this->request->getvar('id_carousel'),
            "image_carousel" => $this->request->getvar('image_carousel'),
        ];
        $checkcarousel = $model->where('image_carousel', $data['image_carousel'])->first();
        if ($checkcarousel === null){
            $model->insert($data);
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }

    public function updateCarousel($id = null)
    {

        $model = new CarouselModel();
        $data = [
            "image_carousel" => $this->request->getvar('image_carousel'),
        ];
        if ($model) {
            $model->update($id,$data);
            $checkcarousel = $model->where('image_carousel', $data['image_carousel'])->first();
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }
public function DeleteCarousel($staffId = null)
{
    $model = new CarouselModel();
    $data = $model->find($staffId);

    if($data){
        $model->delete($staffId);
        $response = [
            'satatus'=>200,
            'error'=>null,
            'meessage'=>[
                    'success' => 'delete successfully'
            ]
        ];
        return $this->respond($response);
    }else{
        return $this->failNotFound('No IDStaff Found');
    }

}
}
?>