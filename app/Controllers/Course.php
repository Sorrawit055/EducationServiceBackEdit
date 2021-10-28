<?php 
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\CourseModel;



class Course extends ResourceController
{
    use ResponseTrait;
    //+createCourse(courseData) : Course
    //+updateCourse(courseName): boolean
    //+editCouse(editAttr,editdata) :boolean
    //+addGroupMajor(groupMajor) : boolean
    //+getGroupMajor() :string
    //+addDegree(degree) : boolean
    //+getDegree():string



    public function index()
    {
       $model = new CourseModel();
        $data['course'] = $model->orderBy('name_course', 'ASC')->findAll();
        return $this->respond($data);  
    }


    public function getCourseAll()
    {
       $couse = new CourseModel();
        $datacouse = $couse->join('group_major','group_major.id_major = course.id_major')
        ->join('degree','degree.id_degree = course.id_degree')
        ->select('course.*')
        ->select('group_major.*')
        ->select('degree.*')
        ->orderBy('name_course','ASC')->findAll();        
        return $this->respond($datacouse);
    }

    public function getCourse($id = null){

        $couse = new CourseModel();
        $datacourse = $couse->join('group_major','group_major.id_major = course.id_major')
        ->join('degree','degree.id_degree = course.id_degree')
        ->select('course.*')
        ->select('group_major.*')
        ->select('degree.*')
        ->where('id_course',$id)->first();
        return $this->respond($datacourse);
     
        // $data = $datacourse->where('id_course',$id);
        // if($data){
        //     return $this->respond($data);
        // }else{
        //     return $this->failNotFound('No Product Found');
        // }

    }

    public function createCourse(){

        $couse = new CourseModel();
        $data =[
            "id_course"=> $this->request->getvar('id_course'),
            "name_course"=> $this->request->getvar('name_course'),
            "id_major"=> $this->request->getvar('id_major'),
            "id_degree"=> $this->request->getvar('id_degree')

        ];
        $checkcourse = $couse->where('name_course',$data['name_course'])->first();
        if ($checkcourse === null) {
            $couse->insert($data);
            $response = ['message'  => 'success'];
            return $this->respond($response);

        } else{
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
        
  
    }
    
    public function updateCourse($id = null)
    {
        
        $couse = new CourseModel();
        $data =[
            "name_course"=> $this->request->getvar('name_course'),
            "id_major"=> $this->request->getvar('id_major'),
            "id_degree"=> $this->request->getvar('id_degree')
        ];
        if ($couse) {
            $couse->update($id,$data);
            $checkcourse = $couse->where('name_course', $data['name_course'])->first();
            foreach ($checkcourse as $row) {
            }
            $response = ['message'  => 'success'];

            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }

       
    }

    public function searchCourse()
    {
       $model = new CourseModel();
       $keyword = $this->request->getvar('keyword');
       
       $data = $model->like('name_course' , $keyword)
       ->orderBy('name_course','ASC')
       ->findAll();

       return $this->respond($data);
    }
}
?>