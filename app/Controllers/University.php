<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait; //จัด form ให้เป็น Json
use App\Models\UniversityModel;
use ResourceBundle;

class University extends ResourceController
{
    use ResponseTrait;

    //+createUniversity(universityName) : University
    //+updateUnniversity(updateAttr,updatedata) : boolean
    //+searchUniversity(keyword) : University[ ]
    public function index()
    {
        $uni = new UniversityModel();
        $data['university'] = $uni->orderBy('id_university', 'DESC')->findAll();
        return $this->respond($data);
    }
    public function getUniversityAll()
    {
        $model = new UniversityModel();
        $studentdata = $model->orderBy('id_university')->findAll();
        return $this->respond($studentdata);
    }   

    public function getUniversity($id = null){
        $uni = new UniversityModel();
        $data = $uni->where('id_university',$id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Product Found');
        }

    }


    public function createUniversity()
    {
        //-university_id: int
        //-university_name:string
        //-unversity_url : string
        //-university_logo :
        //-unversity_detail :string

        $uni = new UniversityModel();
        $data = [
            "id_university" => $this->request->getvar('id_university'),
            "name_uni" => $this->request->getvar('name_uni'),
            "detail_uni" => $this->request->getvar('detail_uni'),
            "url_uni" => $this->request->getvar('url_uni'),
            "logo_uni"=> $this->request->getvar('logo_uni')
        ];
        $checkuni = $uni->where('name_uni', $data['name_uni'])->first();
        if ($checkuni === null){
            $uni->insert($data);
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }
    public function updateUniversity($id = null)
    {

        $model = new UniversityModel();
        $data = [
            "name_uni" => $this->request->getvar('name_uni'),
            "detail_uni" => $this->request->getvar('detail_uni'),
            "url_uni" => $this->request->getvar('url_uni'),
            "logo_uni"=> $this->request->getvar('logo_uni')
        ];
        //update จาก field อื่น
        //$model->where("p_id", $id)->set($data)->update();

        //update จาก primary key
        if ($model) {
            $model->update($id,$data);
            $checkuni = $model->where('name_uni', $data['name_uni'])->first();
            foreach ($checkuni as $row) {
            }
            $response = ['message'  => 'success'];

            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }
    public function updateImageUniversity($id = null)
    {

        $model = new UniversityModel();
        $data = [
          
            "logo_uni"=> $this->request->getvar('logo_uni')
        ];
        //update จาก field อื่น
        //$model->where("p_id", $id)->set($data)->update();

        //update จาก primary key
        $model->update($id, $data);
        $response = [
            'satatus' => 201,
            'error' => null,
            'meessage' => [
                'success' => 'อัปเดตรูปตรามหาลัยสำเร็จ !!'
            ]
        ];
        return $this->respond($response);
    }

    /*public function searchUniversity($keyword = null){
        $model = new UniversityModel();
        $data = $model->havingLike('name_uni',$keyword)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No University Found');
        }
    }*/
    public function searchUniversity()
    {
       $model = new UniversityModel();
       $keyword = $this->request->getvar('keyword');
       $data = $model->like('name_uni' , $keyword)-> findAll();

       return $this->respond($data);
    }

  
}
