<?php

class Product extends DB
{
    private $table = "patient";
    private $conn; 

    public function __construct()
    {
        $this->conn = $this->connect();
        
    }
    public function getAllProducts()
    {
        $sql = "SELECT * FROM $this->table";
        $patients = mysqli_query($this->conn,$sql); 
        return mysqli_fetch_all($patients,MYSQLI_ASSOC);
    }
}