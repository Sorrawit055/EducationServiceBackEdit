<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\FacultyModel;

class Faculty extends ResourceController
{
    use ResponseTrait;

    //+createFaculty(FacultyName) : Faculty
    //+updateFaculty(updateAttr,updatedata): boolean

    public function index()
    {
        $model = new FacultyModel();
        $data['faculty'] = $model->orderBy('name_Faculty', 'ACS')->findAll();
        return $this->respond($data);
    }

    public function getFacultyAll()
    {
        $model = new FacultyModel();
        $data['faculty'] = $model->orderBy('name_Faculty', 'ASC')->findAll();
        return $this->respond($data);
    }
    
    public function getFaculty($id = null){

        $model = new FacultyModel();
        $data = $model->where('id_Faculty',$id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Product Found');
        }

    }

    public function createFaculty()
    {
        //-faculty_id : int
        //-faculty_name :string

        $faculty = new FacultyModel();
        $data = [
            "id_faculty" => $this->request->getvar('id_university'),
            "name_faculty" => $this->request->getvar('name_faculty')
        ];

        $checkfac = $faculty->where('name_faculty',$data['name_faculty'])->first();
        if ($checkfac === null) {
            $faculty->insert($data);
            $response = ['message'  => 'success'];
        } else{
            $response = ['message' => 'fail'];

        }

        return $this->respond($response);
    }

    public function updateFaculty($id = null)
    {

        $model = new FacultyModel();
        $data = [
            "name_faculty" => $this->request->getvar('name_faculty')
        ];
        if ($model) {
            $model->update($id,$data);
            $checkfaculty = $model->where('name_faculty', $data['name_faculty'])->first();
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }

    public function searchFaculty()
    {
       $model = new FacultyModel();
       $keyword = $this->request->getvar('keyword');
       $data = $model->like('name_faculty' , $keyword)
       ->orderBy('name_Faculty', 'ASC')
       -> findAll();

       return $this->respond($data);
    }
}
