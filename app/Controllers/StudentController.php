<?php 

namespace App\Controllers;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\StudentModel;


class StudentController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function importCsvToDb()
    {
        $input = $this->validate([
            'file' => 'uploaded[file]|max_size[file,2048]|ext_in[file,csv],'
        ]);

        if (!$input) {
            $data['validation'] = $this->validator;
            return view('index', $data); 
        }else{

            if($file = $this->request->getFile('file')) {
            if ($file->isValid() && ! $file->hasMoved()) {
                $newName = $file->getRandomName();
                $file->move('../public/csvfile', $newName);
                $file = fopen("../public/csvfile/".$newName,"r");
                $i = 0;
                $numberOfFields = 10;

                $csvArr = array();
                
                while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                    $num = count($filedata);
                    if($i > 0 && $num == $numberOfFields){ 
                        $csvArr[$i]['id_stu'] = $filedata[0];
                        $csvArr[$i]['title'] = $filedata[1];
                        $csvArr[$i]['fname_stu'] = $filedata[2];
                        $csvArr[$i]['lname_stu'] = $filedata[3];
                        $csvArr[$i]['id_curriculum'] = $filedata[4];
                        $csvArr[$i]['GPA_stu'] = $filedata[5];
                        $csvArr[$i]['year_class'] = $filedata[6];
                        $csvArr[$i]['class'] = $filedata[7];
                        $csvArr[$i]['year_stu'] = $filedata[8];
                        $csvArr[$i]['password_stu'] = $filedata[9];

                    }
                    $i++;
                }
                fclose($file);

                $count = 0;
                foreach($csvArr as $userdata){
                    $students = new StudentModel();

                    $findRecord = $students->where('fname_stu', $userdata['fname_stu'])->countAllResults();

                    if($findRecord == 0){
                        if($students->insert($userdata)){
                            $count++;
                        }
                    }
                }
                session()->setFlashdata('message',' rows successfully added.');
                session()->setFlashdata('alert-class', 'alert-success');
            }
            else{
                session()->setFlashdata('message', 'CSV file coud not be imported.');
                session()->setFlashdata('alert-class', 'alert-danger');
            }
            }else{
            session()->setFlashdata('message', 'CSV file coud not be imported.');
            session()->setFlashdata('alert-class', 'alert-danger');
            }

        }

        return redirect()->route('/');         
    }
}