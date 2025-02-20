<?php
class cCustomer
{
    public $conn;
    public $query;
    public $result;
    private $cusId;
    private $cusName;
    private $cusSex;
    private $cusTel;
    private $cusAddress;

    function __construct()
    {
        $this->conn = new mysqli("localhost", "root", "", "dbcustomer");
        if ($this->conn->connect_error) {
            die("Cannot connect to the database server: " . $this->conn->connect_error);
        }
    }

    function setCustomer($name, $sex, $tel, $address)
    {
        $this->cusId = $name;
        $this->cusName = $name;
        $this->cusSex = $sex;
        $this->cusTel = $tel;
        $this->cusAddress = $address;
    }
    function insertCustomer()
    {
        if ($this->conn === null) {
            return "Database connection is not established.";
        }

        $this->query = "INSERT INTO tblCustomer(cusName,cusSex,cusTel,cusAddress) VALUES ('" . $this->cusName . "','" . $this->cusSex . "', '" . $this->cusTel . "','" . $this->cusAddress . "')";
        $this->result = $this->conn->query($this->query);

        if ($this->result == true) {
            return $this->result;
        } else {
            return "Failed to execute Insert query: " . $this->conn->error; // Show specific error
        }
    }

    function updateCustomer($id)
    {
        $this->cusId = $id;
        $this->query = "UPDATE tblCustomer SET cusName = '" . $this->cusName . "','" . $this->cusSex . "','" . $this->cusTel . "','" . $this->cusAddress . "' WHERE cusId = $this -> cusId ";
        $this->result = $this->conn->query($this->query);
        if ($this->result == true) {
            return $this->result;
        } else {
            return "Failed to excute Update query.";
        }
    }
    function deleteCustomer($id)
    {
        $this->cusId = $id;
        $this->query = "DELETE FROM tblCustomer WHERE cusId = $this-> cusId";
        $this->result = $this->conn->query($this->query);
        if ($this->result == true) {
            return $this->result;
        } else {
            return "Failed to excute Delte query";
        }
        $this->conn->close();
    }
}
