<?php

require_once (ROOT.'/model/Student.php');

class StudentController
{
    public function actionIndex()
    {
        $student = new Student();
        $result = $student->getStudentList();

        include_once (ROOT.'/view/students/index.php');

        return true;
    }

    public function actionRegister(){
        if(isset($_COOKIE['email'])){
            $email = $_COOKIE['email'];
            $student = new Student();
            $result = $student->getStudent($email);;
            if ($result>0){

                if($_COOKIE['hash']==md5($email.'87uty4f7eu871zisl')){



                    if (isset($_POST['email'])){
                        $email = $_POST['email'];


                        $email  = $_POST['email'];
                        $name   = $_POST['name'];
                        $surname= $_POST['surname'];
                        $father = $_POST['father'];
                        $group  = $_POST['group'];
                        $score  = $_POST['score'];

                        if($this->validate($email,$name,$surname,$father,$group,$score))  {

                            $result = $student->updateStudent($email,$name,$surname,$father,$group,$score);
                            if($result){


                                $_SESSION['success'] = "$name $surname, Изменения успешно сохранены";
                                $this->afterRegister($email);

                            }

                        }



                       require_once (ROOT.'/view/students/edit.php');

                        return true;
                }
                }
            }


        }

        if (isset($_POST['email'])){
            $email = $_POST['email'];
            $student = new Student();
            //var_dump($student->getStudent($email));
            if($student->getStudent($email)>0){
                $_SESSION['error'] = "Данный email уже занят";

            }
            else{

            $email  = $_POST['email'];
            $name   = $_POST['name'];
            $surname= $_POST['surname'];
            $father = $_POST['father'];
            $group  = $_POST['group'];
            $score  = $_POST['score'];

            if($this->validate($email,$name,$surname,$father,$group,$score))  {

                $result = $student->addStudent($email,$name,$surname,$father,$group,$score);
                if($result){


                    $_SESSION['success'] = "$name $surname, Вы успешно зарегистрированы";
                    $this->afterRegister($email);

                }

            }
            }
        }

        include_once (ROOT.'/view/students/addStudent.php');

        return true;

    }

    public function actionEdit(){
        echo "StudentController actionEdit";
        return true;

    }

    public function actionSort($field, $sort)
    {
        if ($field=="name") $field="sname";
        if ($field=="group") $field="ngroup";
        $student = new Student();
        $result = $student->sortStudent($field, $sort);

        include_once (ROOT.'/view/students/index.php');

        return true;
    }

    private function validate($email,$name,$surname,$father,$group,$score){

        $errors = array();

        return true;

    }

    private function afterRegister($email){
        setcookie('email','',time()-1,'/');
        setcookie('hash','',time()-1,'/');
        setcookie('email', $email, time() + (86400 * 30 * 12 *10), "/");
        setcookie('hash', md5($email.'87uty4f7eu871zisl'), time() + (86400 * 30 * 12 *10), "/");
    }

}