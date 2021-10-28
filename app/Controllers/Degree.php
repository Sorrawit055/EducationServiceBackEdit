<?php 
namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\DegreeModel;

class Degree extends ResourceController
{
    use ResponseTrait;

//+createDegree(degree_id, degree_name) : Degree
//+updateDegree(updateAttr,updatedata) : boolean


    public function index()
    {
        $model = new DegreeModel();
        $data['degree'] = $model->orderBy('name_degree','ASC')->findAll();
        return $this->respond($data);
    }

    public function getDegree($id = null){

        $model = new DegreeModel();
        $data = $model->where('id_degree',$id)->first();
        if($data){
            return $this->respond($data);
        }else{
            return $this->failNotFound('No Product Found');
        }

    }

    public function createDegree(){

//-degree_id : int
//-degree_name :string
//-degree_initials : string


        $degree = new DegreeModel();
        $data =[
            "id_degree"=> $this->request->getvar('id_degree'),
            "name_degree"=> $this->request->getvar('name_degree'),
            "initials_degree"=> $this->request->getvar('initials_degree')
        ];

        $checkdegree = $degree->where('name_degree',$data['name_degree'])->first();

        if ($checkdegree === null){
            $degree->insert($data);
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else{
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }  
    } 

    public function updateDegree($id = null)
    {
        
        $model = new DegreeModel();
        $data =[
            "name_degree"=> $this->request->getvar('name_degree'),
            "initials_degree"=> $this->request->getvar('initials_degree')
        ];
        if ($model) {
            $model->update($id,$data);
            $checkdeegree = $model->where('name_degree', $data['name_degree'])->first();
            foreach ($checkdeegree as $row) {
            }
            $response = ['message'  => 'success'];
            return $this->respond($response);
        } else {
            $response = ['message' => 'fail'];
            return $this->respond($response);
        }
    
    } 
    public function searchDegree()
    {
       $model = new DegreeModel();
       $keyword = $this->request->getvar('keyword');
       $data = $model->like('name_degree' , $keyword)
       ->orderBy('name_degree','ASC')
       -> findAll();

       return $this->respond($data);
    }

    
}
?>