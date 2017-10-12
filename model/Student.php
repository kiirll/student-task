<?php

require_once (ROOT.'/core/DB.php');

class Student
{
    private $db;

    function __construct()
    {
        $this->db = new DB();
    }

    public function getStudentList()
    {

        $query = $this->db->query("select * from students limit 50");
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $studList = array();
        $i=0;
        while($row = $query->fetch()){
            $studList[$i]['id'] = $row['id'];
            $studList[$i]['name'] = $row['sname'];
            $studList[$i]['surname'] = $row['surname'];
            $studList[$i]['father'] = $row['father'];
            $studList[$i]['group'] = $row['ngroup'];
            $studList[$i]['score'] = $row['score'];
            $i++;
        }
        return $studList;
    }

    public function getStudent($email)
    {

        $query = $this->db->query("select * from students where `email` = '".$email."'");
        $count = $query->rowCount();
        if ($count == 0 ) return 0;
        $row = $query->fetch();

        $result['id']       = $row['id'];
        $result['email']       = $row['email'];
        $result['name']     = $row['sname'];
        $result['surname']  = $row['surname'];
        $result['father']   = $row['father'];
        $result['group']    = $row['ngroup'];
        $result['score']    = $row['id'];

        return $result;
    }

    public function updateStudent($email,$name,$surname,$father,$group,$score)
    {
        $query = $this->db->query("update students set
          email = '".$email."',
          sname = '".$name."',
          surname = '".$surname."',
          father = '".$father."',
          ngroup = '".$group."',
          score = ".$score."
          where email = '".$email."'
        ");
        $result = $query->rowCount();
        return $result;
    }

    public  function sortStudent($field, $sort)
    {
        $sort = strtoupper($sort);
        $query = $this->db->query("select * from students order by $field $sort limit 50");
        //echo "select * from students limit 50 order by $field $sort";
        $query->setFetchMode(PDO::FETCH_ASSOC);
        $studList = array();
        $i=0;
        while($row = $query->fetch()){
            $studList[$i]['id'] = $row['id'];
            $studList[$i]['name'] = $row['sname'];
            $studList[$i]['surname'] = $row['surname'];
            $studList[$i]['father'] = $row['father'];
            $studList[$i]['group'] = $row['ngroup'];
            $studList[$i]['score'] = $row['score'];
            $i++;
        }
        return $studList;

    }

    public function addStudent($email,$name,$surname,$father,$group,$score)
    {

        $query = $this->db->query("insert into students 
        (email,sname,surname, father, ngroup, score) 
        VALUES ('".$email."','".$name."','".$surname."','".$father."','".$group."',".$score.")");
        $result = $query->rowCount();
        return $result;
    }


    public  function checkEmail($email)
    {

        $query = $this->db->query("select * from students where `email` = '".$email."'");
        $result = $query->rowCount();

        return $result;

    }
}