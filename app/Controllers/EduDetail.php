<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\EduDetailModel;
use App\Models\EducationModel;

use ResourceBundle;

class EduDetail extends ResourceController
{
    use ResponseTrait;

    public function index()
    {
        $model = new EduDetailModel();
        $educationDetaildata['eduDetail'] = $model->orderBy('id_edu_Detail', 'DESC')->findAll();
        return $this->respond($educationDetaildata);
    }

    public function getEduDetail()
    {
        $model = new EduDetailModel();
        $educationDetaildata = $model->join('course','course.id_course = education_detail.id_course')
        ->join('faculty','faculty.id_faculty = education_detail.id_faculty')
        ->select('course.name_course')
        ->select('faculty.name_faculty')
        ->select('education_detail.*')
        ->orderBy('education_detail.id_edu_detail ')->findAll();
        return $this->respond($educationDetaildata);
    }
    public function getEduDetailById($id = null)
    {
        $model = new EduDetailModel();
        $educationDetaildata = $model->join('course','course.id_course = education_detail.id_course')
        ->join('faculty','faculty.id_faculty = education_detail.id_faculty')
        ->select('course.name_course')
        ->select('faculty.name_faculty')
        ->select('education_detail.*')
        ->orderBy('education_detail.id_edu_detail' )
        ->where('id_edu_Detail',$id)->first();
        if($educationDetaildata){
            return $this->respond($educationDetaildata);
        }else{
            return $this->failNotFound('Not Found');
        }
       
    }
    public function getEduDetailByIdeducation($id = null)
    {
        $model = new EduDetailModel();
        $educationDetaildata = $model->join('course','course.id_course = education_detail.id_course')
        ->join('faculty','faculty.id_faculty = education_detail.id_faculty')
        ->join('curriculum','curriculum.id_curriculum = education_detail.id_curriculum')
        ->select('course.name_course')
        ->select('faculty.name_faculty')
        ->select('curriculum.name_curriculum')
        ->select('education_detail.*')
        ->orderBy('education_detail.id_edu_detail')
        ->where('id_education',$id)->findAll();
        if($educationDetaildata){
            return $this->respond($educationDetaildata);
        }else{
            return $this->failNotFound('Not Found');
        }
       
    }
        public function getEducatioById($id = null)
    {
        $model = new EducationModel();
        $educationdata = $model->join('round', 'round.id_round = education.id_round')
        ->join('university', 'university.id_university = education.id_university')
        ->select('round.name_round')
        ->select('university.name_uni')
        ->select('education.*')
        ->orderBy('education.id_education')
        ->where('id_education',$id)->first();
        if($educationdata){
            return $this->respond($educationdata);
        }else{
            return $this->failNotFound('Not found');
        }
    }
    public function getEduDetailByIdedu($id = null)
    {
        $model = new EduDetailModel();
        $educationDetaildata ['edu'] = $model
        ->select('id_education')
        ->where('id_education',$id)
        ->first();
        if($educationDetaildata){
            return $this->respond($educationDetaildata);
        }else{
            return $this->failNotFound('Not Found');
        }
       
    }
   

    public function createEduDetail()
    {
        $model = new EduDetailModel();
        $educationDetaildata = [
            "id_edu_detail" => $this->request->getVar('id_edu_detail'),
            "number_of_edu" => $this->request->getVar('number_of_edu'),
            "GPA"=> $this->request->getVar('GPA'),
            "id_major" => $this->request->getVar('id_major'),
            "id_curriculum"=> $this->request->getVar('id_curriculum'),
            "note_condi"=> $this->request->getVar('note_condi'),
            "id_course" => $this->request->getVar('id_course'),
            "id_faculty" => $this->request->getVar('id_faculty'),
            "id_education" => $this->request->getVar('id_education')
        ];

        $checkedudetail = $model->where('id_edu_detail',$educationDetaildata['id_edu_detail'])->first();
        if ($checkedudetail === null) {
            $model->insert($educationDetaildata);
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    }

    public function updateEduDetail($id = null)
    {
        $model = new EduDetailModel();
        $educationDetaildata = [
            "number_of_edu" => $this->request->getVar('number_of_edu'),
            "GPA"=> $this->request->getVar('GPA'),
            "id_major" => $this->request->getVar('id_major'),
            "id_curriculum"=> $this->request->getVar('id_curriculum'),
            "note_condi"=> $this->request->getVar('note_condi'),
            "id_course" => $this->request->getVar('id_course'),
            "id_faculty" => $this->request->getVar('id_faculty'),
            "id_education" => $this->request->getVar('id_education')
        ];
        if ($model) {
            $model->update($id,$educationDetaildata);
            $checkedudetail = $model->where('id_course', $educationDetaildata['id_course'])->first();
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
       
    }

    public function searchEducationdetail()
    {
       $model = new EduDetailModel();
       $data = $model->join('course','course.id_course = education_detail.id_course')
       ->join('faculty','faculty.id_faculty = education_detail.id_faculty')
       ->join('curriculum','curriculum.id_curriculum = education_detail.id_curriculum')
       ->select('course.name_course')
       ->select('faculty.name_faculty')
       ->select('curriculum.name_curriculum')
       ->select('education_detail.*');
       $keyword = $this->request->getvar('keyword');
       $data = $model->like('name_course' , $keyword)-> findAll();

       return $this->respond($data);
    }
}