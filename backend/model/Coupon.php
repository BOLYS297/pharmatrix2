<?php
require_once 'Database.php';

class CouponDB {
    private $db;
    private $tablename;
    private $tableid;

    public function __construct() {
        $this->db= new Database();
        $this->tablename= 'coupon';
        $this->tableid= 'coupon_id';
    }

    public function create($reference, $create_at) {
        $sql= "insert into $this->tablename set reference=?, create_at=?";
        $params= array($reference, $create_at);
        $this->db->prepare($sql, $params);
    }

    public function update($id, $reference, $create_at){
        $sql= "update $this->tablename set reference=?, create_at=? where $this->tableid=?";
        $params= array($reference, $create_at, $id);
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