<?php

class Result{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllResults(){
        $this->db->query("SELECT * FROM Skambutis");

        //assign results
        $results = $this->db->resultSet();

        return $results;
    }


    public function countPagalba(){
        $this->db->query("SELECT Pagalba FROM Skambutis");
        $count = 0;
        $counter = 0;
        $helps = $this->db->resultSet();

        foreach ($helps as $help){
            $count +=$help->Pagalba;
            $counter++;
        }

        $result = $count / $counter;

        return $result;
    }

    public function countKokybe(){
        $this->db->query("SELECT RysioKokybe FROM Skambutis");
        $count = 0;
        $counter = 0;
        $helps = $this->db->resultSet();

        foreach ($helps as $help){
            $count +=$help->RysioKokybe;
            $counter++;
        }

        $result = $count / $counter;

        return $result;
    }



    public function countKomun(){
        $this->db->query("SELECT Komunikabilumas FROM Skambutis");
        $count = 0;
        $counter = 0;
        $helps = $this->db->resultSet();

        foreach ($helps as $help){
            $count +=$help->Komunikabilumas;
            $counter++;
        }

        $result = $count / $counter;

        return $result;
    }

    public function create($data){
        $this->db->query("INSERT INTO Skambutis (Komunikabilumas, RysioKokybe, Pagalba)
            VALUES (:Komunikabilumas,:RysioKokybe,:Pagalba)");
        //bind data
        $this->db->bind(':Komunikabilumas', $data['Komunikabilumas']);
        $this->db->bind(':RysioKokybe', $data['RysioKokybe']);
        $this->db->bind(':Pagalba', $data['Pagalba']);

        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }


}