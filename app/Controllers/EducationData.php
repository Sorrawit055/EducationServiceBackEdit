<?php 
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\EducationDataModel;
use ResourceBundle;

class EducationData extends ResourceController
{
    use ResponseTrait;

    public function getAllEducationData()
    {
        $edumodel = new EducationDataModel();
        $educationdata  = $edumodel->join('education', 'education.id_education = education_detail.id_education')
        ->join('course', 'course.id_course = education_detail.id_course')
        ->join('faculty', 'faculty.id_faculty = education_detail.id_faculty')
        ->join('university', 'university.id_university = education.id_university')
        ->join('round', 'round.id_round = education.id_round')
        ->join('group_major', 'group_major.id_major = course.id_major')
        ->select('group_major.*')
        ->select('round.*')
        ->select('university.*')
        ->select('faculty.*')
        ->select('course.*')
        ->select('education.*')
        ->select('education_detail.*')
        ->orderBy('education_detail.id_edu_detail')->findAll();
        return $this->respond($educationdata);
    }

    
    public function getAllEducationDataStudent()
    {
        $edumodel = new EducationDataModel();
        $educationdata ['educationdata'] = $edumodel->join('education', 'education.id_education = education_detail.id_education')
        ->join('course', 'course.id_course = education_detail.id_course')
        ->join('faculty', 'faculty.id_faculty = education_detail.id_faculty')
        ->join('university', 'university.id_university = education.id_university')
        ->join('group_major', 'group_major.id_major = course.id_major')
        ->select('group_major.name_major')
        ->select('university.name_uni')
        ->select('faculty.name_faculty')
        ->select('course.name_course')
        ->orderBy('education_detail.id_edu_detail')->findAll();
        return $this->respond($educationdata);
    }


    public function getAllEducationCourse()
    {
        $edumodel = new EducationDataModel();
        $educationdata ['course'] = $edumodel->join('course', 'course.id_course = education_detail.id_course')
        ->select('course.id_course')
        ->distinct()
        ->orderBy('name_course', 'ASC')
        ->select('name_course')
        ->findAll();
        return $this->respond($educationdata);
    }
    public function getAllEducationFaculty()
    {
        $edumodel = new EducationDataModel();
        $educationdata ['faculty'] = $edumodel->join('faculty', 'faculty.id_faculty = education_detail.id_faculty')
        ->select('faculty.id_faculty')
        ->distinct()
        ->orderBy('name_faculty', 'ASC')
        ->select('name_faculty')
        ->findAll();
        return $this->respond($educationdata);
    }
    public function getAllEducationMajor()
    {
        $edumodel = new EducationDataModel();
        $educationdata ['major'] = $edumodel->join('group_major', 'group_major.id_major = education_detail.id_major')
        ->select('group_major.id_major')
       ->distinct()
       ->orderBy('name_major', 'ASC')
        ->select('name_major')
        ->findAll();
        return $this->respond($educationdata);
    }
    public function getAllEducationUniversity()
    {
        $edumodel = new EducationDataModel();
        $educationdata ['university'] = $edumodel->join('education', 'education.id_education = education_detail.id_education')
        ->join('university', 'university.id_university = education.id_university')
        ->select('university.id_university')
        ->distinct()
        ->orderBy('name_uni', 'ASC')
        ->select('name_uni')
        ->findAll();
        return $this->respond($educationdata);
    }
    
    public function getEducationdataID($educationID = null)
    {
        $edumodel = new EducationDataModel();
        $educationdata = $edumodel->join('education', 'education.id_education = education_detail.id_education')
        ->join('course', 'course.id_course = education_detail.id_course')
        ->join('faculty', 'faculty.id_faculty = education_detail.id_faculty')
        ->join('university', 'university.id_university = education.id_university')
        ->join('round', 'round.id_round = education.id_round')
        ->join('group_major', 'group_major.id_major = course.id_major')
        ->select('group_major.*')
        ->select('round.*')
        ->select('university.*')
        ->select('faculty.*')
        ->select('course.*')
        ->select('education.*')
        ->select('education_detail.*')
        ->where('education_detail.id_edu_detail',$educationID)->first();
        if($educationdata){
            return $this->respond($educationdata);
        }else{
            return $this->failNotFound('Not found');
        }
    }


    // public function SearchEducation($educationdata = null)
    // {
    //     $model = new EducationDataModel();
    //     $educationdata = $model->like('id_edu_detail', $this->request->getVar('id_edu_detail'))
    //     ->orLike('id_course', $this->request->getVar('id_course'))->get();
    //     return $this->respond($educationdata);
    // }
    // $educationdata = $model->like('id_edu_detail',$Keyword,'both');
    // $educationdata = $model->orLike('number_of_edu',$Keyword,'both')

    public function SearchEducation()
    {
        $model = new EducationDataModel();
    
        $educationdata ['item'] = $model->like(  [
                    "name_course"=> $this->request->getvar('name_course'),
                    "name_faculty"=> $this->request->getvar('name_faculty'),
                    "name_major"=> $this->request->getvar('name_major'),
                    "name_uni"=> $this->request->getvar('name_uni'),

            ]
            )->join('education', 'education.id_education = education_detail.id_education')
            ->join('course', 'course.id_course = education_detail.id_course')
            ->join('faculty', 'faculty.id_faculty = education_detail.id_faculty')
            ->join('university', 'university.id_university = education.id_university')
            ->join('round', 'round.id_round = education.id_round')
            ->join('group_major', 'group_major.id_major = course.id_major')
            ->select('group_major.*')
            ->select('round.*')
            ->select('university.*')
            ->select('faculty.*')
            ->select('course.*')
            ->select('education.*')
            ->select('education_detail.*')
            ->orderBy('education_detail.id_edu_detail')->findAll();

        return $this->respond($educationdata);
    }
  
    public function search2($keyword = null)
    {
        $model = new EducationDataModel();
       $data = $model->like("name_course", $keyword)
       ->orlike("name_faculty", $keyword)
       ->join('course', 'course.id_course = education_detail.id_course')
       ->join('faculty', 'faculty.id_faculty = education_detail.id_faculty')
       ->join('education', 'education.id_education = education_detail.id_education')
       ->where('id_edu_detail',$keyword)->groupBy('id_edu_detail')
       ->findAll();
       return $this->respond($data);
    }


    public function search3()
    {
       $model = new EducationDataModel();
       $educationdata = $model->join('education', 'education.id_education = education_detail.id_education')
       ->join('course', 'course.id_course = education_detail.id_course')
       ->join('faculty', 'faculty.id_faculty = education_detail.id_faculty')
       ->join('university', 'university.id_university = education.id_university')
       ->join('round', 'round.id_round = education.id_round')
       ->join('group_major', 'group_major.id_major = course.id_major')
       ->select('group_major.*')
       ->select('round.*')
       ->select('university.*')
       ->select('faculty.*')
       ->select('course.*')
       ->select('education.*')
       ->select('education_detail.*');
       $keyword = $this->request->getvar('keyword');
       $educationdata = $model->like('name_course' , $keyword)
       ->orlike("name_faculty", $keyword)
       ->orlike("name_major", $keyword)
       -> findAll();

       return $this->respond($educationdata);
    }



  
}