<?php 
//https://github.com/Sorrawit055/EducationServiceBack2.git
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;//ทำAPI
use CodeIgniter\API\ResponseTrait;//จัดเป็น json เอง
use App\Models\EducationNewModel;


use ResourceBundle;

class EducationNew extends ResourceController
{
    use ResponseTrait;

    public function getDataNewAll()
    {
        $model = new EducationNewModel();
        $data = $model->orderBy('id_new','DESC')->findAll();
        return $this->respond($data);
    }

    public function getDataNewId($id = null){
        $model = new EducationNewModel();
        $data = $model->where('id_new',$id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Product Found');
        }

    }
    public function createDataNew()
    {
        $model = new EducationNewModel();
        $data = [
            "id_new" => $this->request->getvar('id_new'),
            "new_name" => $this->request->getvar('new_name'),
            "new_date" => $this->request->getvar('new_date'),
            "new_detail" => $this->request->getvar('new_detail'),
            "new_url" => $this->request->getvar('new_url'),
            "new_image" => $this->request->getvar('new_image'),
        ];
        $checkNew = $model->where('id_new', $data['id_new'])->first();
        if ($checkNew === null){
            $model->insert($data);
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }

    public function updateDataNew($id = null)
    {

        $model = new EducationNewModel();
        $data = [
            "new_name" => $this->request->getvar('new_name'),
            "new_date" => $this->request->getvar('new_date'),
            "new_detail" => $this->request->getvar('new_detail'),
            "new_url" => $this->request->getvar('new_url'),
            "new_image" => $this->request->getvar('new_image'),
        ];
        if ($model) {
            $model->update($id,$data);
            $checkNew = $model->where('new_name', $data['new_name'])->first();
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }
    public function updateDataNewImage($id = null)
    {

        $model = new EducationNewModel();
        $data = [
            "new_image" => $this->request->getvar('new_image'),
        ];
        if ($model) {
            $model->update($id,$data);
            $checkNew = $model->where('new_image', $data['new_image'])->first();
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }
}
?>