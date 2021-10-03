<?php 
//https://github.com/Sorrawit055/EducationServiceBack2.git
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;//ทำAPI
use CodeIgniter\API\ResponseTrait;//จัดเป็น json เอง
use App\Models\NameLogoModel;


use ResourceBundle;

class NameLogo extends ResourceController
{
    use ResponseTrait;

    public function getDataNameLogo()
    {
        $model = new NameLogoModel();
        $data = $model->orderBy('id','ASC')->findAll();
        return $this->respond($data);
    }

    public function getDataNameLogoId($id = null){
        $model = new NameLogoModel();
        $data = $model->where('id',$id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Product Found');
        }

    }
    public function createDataNameLogo()
    {
        $model = new NameLogoModel();
        $data = [
            "id" => $this->request->getvar('id'),
            "NameHeaderWeb" => $this->request->getvar('NameHeaderWeb'),
            "LogoWeb" => $this->request->getvar('LogoWeb'),
            "NameWeb" => $this->request->getvar('NameWeb'),
            "EngNameWeb" => $this->request->getvar('EngNameWeb'),
            "DetailWeb" => $this->request->getvar('DetailWeb'),
        ];
        $checkNameLogo = $model->where('id', $data['id'])->first();
        if ($checkNameLogo === null){
            $model->insert($data);
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }

    public function updateDataNameLogo($id = null)
    {

        $model = new NameLogoModel();
        $data = [
            "NameHeaderWeb" => $this->request->getvar('NameHeaderWeb'),
            "LogoWeb" => $this->request->getvar('LogoWeb'),
            "NameWeb" => $this->request->getvar('NameWeb'),
            "EngNameWeb" => $this->request->getvar('EngNameWeb'),
            "DetailWeb" => $this->request->getvar('DetailWeb'),
        ];
        if ($model) {
            $model->update($id,$data);
            $checkNameLogo = $model->where('NameHeaderWeb', $data['NameHeaderWeb'])->first();
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }
    public function updateDataNameLogoImage($id = null)
    {

        $model = new NameLogoModel();
        $data = [
            "LogoWeb" => $this->request->getvar('LogoWeb'),
        ];
        if ($model) {
            $model->update($id,$data);
            $checkNameLogo = $model->where('LogoWeb', $data['LogoWeb'])->first();
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }
}
?>