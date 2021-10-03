<?php 
//https://github.com/Sorrawit055/EducationServiceBack2.git
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;//ทำAPI
use CodeIgniter\API\ResponseTrait;//จัดเป็น json เอง
use App\Models\FooterModel;


use ResourceBundle;

class Footer extends ResourceController
{
    use ResponseTrait;

    public function getFooter()
    {
        $model = new FooterModel();

        $data = $model->orderBy('id','ASC')->findAll();
        return $this->respond($data);
    }

    public function getFooterId($id = null){
        $model = new FooterModel();
        $data = $model->where('id',$id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Found');
        }

    }

    public function updateFooter($id = null)
    {

        $model = new FooterModel();
        $data = [
            "footer_contact" => $this->request->getvar('footer_contact'),
            "footer_contact_detail" => $this->request->getvar('footer_contact_detail'),
            "footer_devloper" => $this->request->getvar('footer_devloper'),
            "footer_devloper_detail" => $this->request->getvar('footer_devloper_detail'),
            "footer_license" => $this->request->getvar('footer_license'),

        ];
        if ($model) {
            $model->update($id,$data);
            $checkfooter = $model->where('footer_contact', $data['footer_contact'])->first();
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }
}
?>