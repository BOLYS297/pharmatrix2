<?php
require_once 'Database.php';

class MedicamentDB {
    private $db;
    private $tablename;
    private $tableid;

    public function __construct() {
        $this->db= new Database();
        $this->tablename= 'medicament';
        $this->tableid= 'medicament_id';
    }

    public function create($price, $quantity) {
        $sql= "insert into $this->tablename set price=?, quantity=?";
        $params= array($price, $quantity);
        $this->db->prepare($sql, $params);
    }

    public function update($id, $price, $quantity) {
        $sql= "update $this->tablename set price=?, quantity=? where $this->tableid=?";
        $params= array($price, $quantity, $id);
        $this->db->prepare($sql, $params);
    }

    public function delete($id) {
        $sql= "delete from $this->tablename where $this->tableid=?";
        $params= array($id);
        $this->db->prepare($sql, $params);
    }

    public function read($id) {
        $sql= "select * from $this->tablename where $this->tableid=?";
        $params= array($id);
        $req= $this->db->prepare($sql, $params);
        return $this->db->getDatas($req, true);
    }

    public function readAll() {
        $sql= "select * from $this->tablename order by $this->tableid desc";
        $params= null;
        $req= $this->db->prepare($sql, $params);
        return $this->db->getDatas($req, false);
    }

    // public function readConnexion($email, $password) {
    //     $sql= "select * from $this->tablename where email=? and password=?";
    //     $params= array($email, $password);
    //     $req= $this->db->prepare($sql, $params);
    //     return $this->db->getDatas($req, true);
    // }
}

?>