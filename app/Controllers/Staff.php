<?php 
//https://github.com/Sorrawit055/EducationServiceBack2.git
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;//ทำAPI
use CodeIgniter\API\ResponseTrait;//จัดเป็น json เอง
use App\Models\StaffModel;
use App\Models\PositionModel;
use App\Models\TitleModel;
use App\Models\StudentModel;

use ResourceBundle;

class Staff extends ResourceController
{
    use ResponseTrait;

    public function getAllStaff()
    {
        $model = new StaffModel();

        $AdminTeacher = $model->orderBy('id_staff','DESC')
        ->join('title', 'title.id_title = staff.id_title')
        ->join('position ', 'position.id_position = staff.id_position')
        ->findAll();
        return $this->respond($AdminTeacher);
    }

    public function AddOneStudent()
    {
        
        $studentmodel = new StudentModel();
        $studentdata=[
                        "id_stu"=> $this->request->getvar('id_stu'),
                        "title"=> $this->request->getvar('title'),
                        "fname_stu"=> $this->request->getvar('fname_stu'),
                        "lname_stu"=> $this->request->getvar('lname_stu'),
                        "id_curriculum"=> $this->request->getvar('id_curriculum'),
                        "GPA_stu"=> $this->request->getvar('gpa_stu'),
                        "year_class"=> $this->request->getvar('year_class'),
                        "class"=> $this->request->getvar('room'),
                        "year_stu"=> $this->request->getvar('year_stu'),
                        "password_stu"=> $this->request->getvar('password_stu'),
            
                    ];

                   
       $check = $studentmodel->where('id_stu',$studentdata['id_stu'])->first();
        
        
        
        if($check === null){
            $studentmodel->insert($studentdata);
            $response = ['message'  => 'success'];
                   
                   return $this->respond($response);
        }else{
            $response = ['message' => 'fail'];
                   return $this->respond($response);
                
            
        }


        


    }

    public function AddTeacher()
    {
        $teachermodel = new StaffModel();
        $teacherdata = [
            "id_staff" => $this->request->getvar('id_staff'),
            "id_title" => $this->request->getvar('id_title'),
            "fname_staff" => $this->request->getvar('fname_staff'),
            "lname_staff" => $this->request->getvar('lname_staff'),
            "phone_staff" => $this->request->getvar('phone_staff'),
            "id_position" => $this->request->getvar('id_position'),
            "password_staff" => $this->request->getvar('password_staff')
        ];
        $checkTeacher = $teachermodel->where('id_staff',$teacherdata['id_staff'])->first();

        if($checkTeacher === null){
            $teachermodel->insert($teacherdata);
            $response = ['message'  => 'success'];

            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }

}

public function DeleteStaff($staffId = null)
{
    $staffmodel = new StaffModel();
    $staffdata = $staffmodel->find($staffId);

    if($staffdata){
        $staffmodel->delete($staffId);
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

public function updateStaff($staffId = null)
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

public function getStudent(){
    $stumodel = new StudentModel();
    $studentdata = $stumodel
    ->orderBy('id_stu', 'DESC')
    ->findAll();
    return $this->respond($studentdata);
    // $stumodel = new StudentModel();
    // $studentdata = $stumodel->where('student.class',$classID)->findAll();
    // return $this->respond($studentdata);
}

// public function AddStudentAll()
// {
//     $studentmodel = new StudentModel();

//     $data = [
//         "students" => $this->request->getvar('students'),
//     ];
    
//     if(is_array($data)) {
//         foreach($data as $stu ){
//             $studentdata = [
//                 "id_stu" => $stu['id_stu'],
//                 "title"  => $stu['title'],
//                 "fname_stu" => $stu['fname_stu'],
//                 "lname_stu" => $stu['lname_stu'],
//                 "id_curriculum" => $stu['id_curriculum'],
//                 "GPA_stu" => $stu['GPA_stu'],
//                 "year_class" => $stu['year_class'],
//                 "class"  => $stu['class'],
//                 "year_stu" => $stu['year_stu'],
//                 "password_stu" => $stu['password_stu'],

//             ];

//             $checkIDstu = $studentmodel->where('id_stu',$studentdata['id_stu'])->first();

//             if($checkIDstu === null) {
//                 $studentmodel->insert($studentdata);
//                 $response = [
//                     'satatus' => 201,
//                     'error' => null,
//                     'meessage' => [
//                         'success' => 'เพิ่มนักเรียนชั้นนี้สำเร็จ'
//                     ]
//                 ];
//             }else{
//                 $response = [
//                     'satatus' => 202,
//                     'error' => null,
//                     'meessage' => [
//                         'success' => 'นักเรียนชั้นนี้มีข้อมูลอยู่แล้ว'
//                     ]
//                 ];
//             }

//             return $this->respond($response);

//         }
//     }else{
//         $response = [
//             'satatus' => 502,
//             'error' => null,
//             'meessage' => [
//                 'success' => 'การรับส่งข้อมูลระหว่างเซริฟเวอร์'
//             ]
//         ];

//     }
    
// }
// public function AddStudentAll()
// {
//     $studentmodel = new StudentModel();
    
//     $data = $this->resquest->getvar('students');

//     if(is_array($data)) {
//         foreach($data as $stu ){
//             $studentdata = [
//                 "id_stu" => $stu['id_stu'],
//                 "title"  => $stu['title'],
//                 "fname_stu" => $stu['fname_stu'],
//                 "lname_stu" => $stu['lname_stu'],
//                 "id_curriculum" => $stu['id_curriculum'],
//                 "GPA_stu" => $stu['GPA_stu'],
//                 "year_class" => $stu['year_class'],
//                 "class"  => $stu['class'],
//                 "year_stu" => $stu['year_stu'],
//                 "password_stu" => $stu['password_stu'],

//             ];

//             $checkIDstu = $studentmodel->where('id_stu',$studentdata['id_stu'])->first();

//             if($checkIDstu === null) {
//                 $studentmodel->insert($studentdata);
//                 $response = [
//                     'satatus' => 201,
//                     'error' => null,
//                     'meessage' => [
//                         'success' => 'เพิ่มนักเรียนชั้นนี้สำเร็จ'
//                     ]
//                 ];
//             }else{
//                 $response = [
//                     'satatus' => 202,
//                     'error' => null,
//                     'meessage' => [
//                         'success' => 'นักเรียนชั้นนี้มีข้อมูลอยู่แล้ว'
//                     ]
//                 ];
//             }

//             return $this->respond($response);

//         }
//     }else{
//         $response = [
//             'satatus' => 502,
//             'error' => null,
//             'meessage' => [
//                 'success' => 'การรับส่งข้อมูลระหว่างเซริฟเวอร์'
//             ]
//         ];

//     }
    
// }


}
?>