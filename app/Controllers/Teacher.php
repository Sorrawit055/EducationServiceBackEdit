<?php 
//https://github.com/Sorrawit055/EducationServiceBack2.git
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;//ทำAPI
use CodeIgniter\API\ResponseTrait;//จัดเป็น json เอง
use App\Models\StudentModel;
use App\Models\EducationModel;
use App\Models\TitleModel;
use App\Models\StaffModel;

use ResourceBundle;

class Teacher extends ResourceController
{
    use ResponseTrait;

    public function getYear()
    {
        $model = new StudentModel();
        $studentdata['year'] = $model->distinct();
        $studentdata['year'] = $model->select('year_stu')->findAll();
        return $this->respond($studentdata);
    }


    public function getClass()
    {
        $model = new StudentModel();
        $studentdata['class'] = $model->distinct();
        $studentdata['class'] = $model->groupBy('class' , 'year_class')->findAll();
        return $this->respond($studentdata);
    }


    public function getStudentClass($classID = null){
        $stumodel = new StudentModel();
        $studentdata = $stumodel
        ->where('class',$classID)
        ->orderBy('year_stu', 'DESC')
        ->findAll();
        return $this->respond($studentdata);
        // $stumodel = new StudentModel();
        // $studentdata = $stumodel->where('student.class',$classID)->findAll();
        // return $this->respond($studentdata);
    }


    public function getYearClass($YearID = null){
        $stumodel = new StudentModel();
        $studentdata = $stumodel->distinct();
        $studentdata = $stumodel->groupBy('class','year_stu');
        $studentdata = $stumodel->where('student.year_stu',$YearID)->findAll();
        return $this->respond($studentdata);
    }

//     public function addStudent(){
//         $model = new StudentModel();
//         $studentdata =[
//             "id_stu"=> $this->request->getvar('id_stu'),
//             "id_title"=> $this->request->getvar('id_title'),
//             "fname_stu"=> $this->request->getvar('fname_stu'),
//             "lname_stu"=> $this->request->getvar('lname_stu'),
//             "id_curriculum"=> $this->request->getvar('id_curriculum'),
//             "GPA_stu"=> $this->request->getvar('GPA_stu'),
//             "year_class"=> $this->request->getvar('year_class'),
//             "class"=> $this->request->getvar('class'),
//             "year_stu"=> $this->request->getvar('year_stu'),
//             "password_stu"=> $this->request->getvar('password_stu'),

//         ];
//         $check = $model->where('id_stu',$studentdata['id_stu'])->first();

//         if($check === null){
//         $model->insert($studentdata);
//         $response=[
//             'satatus'=>201,
//             'error'=>null,
//             'meessage'=>[
//                 'success' => 'สมัครสำเร็จ'
//             ]
//         ];
//         return $this->respond($response);
//     }else{
//         $response=[
//             'satatus'=>400,
//             'error'=>null,
//             'meessage'=>[
//                 'success' => 'ข้อมูลมีอยู่เเล้ว'
//             ]
//         ];
//         return $this->respond($response);

//     } 

// }
    public function updateProfileStudent($studentID = null)
    {
        $model = new StudentModel();
        $studentdata =[
            "id_title "=> $this->request->getvar('id_title'),
            "fname_stu"=> $this->request->getvar('fname_stu'),
            "lname_stu"=> $this->request->getvar('lname_stu'),
            "id_curriculum"=> $this->request->getvar('id_curriculum'),
            "GPA_stu"=> $this->request->getvar('GPA_stu'),
            "year_class"=> $this->request->getvar('year_class'),
            "class"=> $this->request->getvar('class'),
            "year_stu"=> $this->request->getvar('year_stu'),
            "password_stu"=> $this->request->getvar('password_stu'),
        ];

        $model->update($studentID,$studentdata);
        $response=[
            'satatus'=>201,
            'error'=>null,
            'meessage'=>[
                'success' => 'อัพเดตข้อมูลส่วนตัวเสร็จสิ้น'
            ]
        ];
            return $this->respond($response);
    } 

    // public function InsertEducationStudent($studentID = null){
    //     $model = new StudentModel();
    //     $model = new EducationModel();
    //     $studentdata = $model->where('id_stu',$studentID)->first();
    //     $studentdata =[
    //         "id_stu"=> $this->request->getvar('id_stu'),
    //         "id_university"=> $this->request->getvar('id_university'),
    //         "id_faculty"=> $this->request->getvar('id_faculty'),
    //         "id_course"=> $this->request->getvar('id_course'),
    //         "id_major"=> $this->request->getvar('id_major'),
    //     ];
    //     $model->insert($studentdata,);
    //     $response=[
    //         'satatus'=>201,
    //         'error'=>null,
    //         'meessage'=>[
    //             'success' => 'สมัครสำเร็จ'
    //         ]
    //     ];
    //         return $this->respond($response);
    // } 
    
    public function getStaff($staffId = null){
        $staffmodel = new StaffModel();
        $staffdata = $staffmodel->join('title', 'title.id_title = staff.id_title')
        ->join('position', 'position.id_position = staff.id_position')
        ->select('title.name_title')
        ->select('position.name_position')
        ->select('staff.*')
        ->where('staff.id_staff',$staffId)->first();
        return $this->respond($staffdata);
    }

    public function updateTeacher($staffId = null)
    {
        $staffmodel = new StaffModel();
        $staffdata = [
            "id_title" => $this->request->getvar('id_title'),
            "fname_staff" => $this->request->getvar('fname_staff'),
            "lname_staff" => $this->request->getvar('lname_staff'),
            "phone_staff" => $this->request->getvar('phone_staff'),
            "id_position" => $this->request->getvar('id_position'),
            "password_staff" => $this->request->getvar('password_staff')
        ];
        if ($staffmodel) {
            $staffmodel->update($staffId,$staffdata);
            $checkStaff = $staffmodel->where('fname_staff', $staffdata['fname_staff'])->first();
            $response = ['message'  => 'success'];

            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }

        $staffmodel->update($staffId,$staffdata);
        $response = [
            'satatus' => 201,
            'error' => null,
            'meessage' => [
                'success' => 'อัพเดตข้อมูลส่วนตัวเรียบร้อย'
            ]
        ];

        return $this->respond($response);
    }

    public function getYear1($classID=null)
    {
        $model = new StudentModel();
        $studentdata['year'] = $model->distinct();
        $studentdata['year'] = $model->select('year_stu')->where('class',$classID)->findAll();


        return $this->respond($studentdata);
    }
}