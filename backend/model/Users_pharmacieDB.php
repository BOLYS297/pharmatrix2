<?php
require_once 'Database.php';

class User_pharmacieDB
{
    private $db;
    private $tablename;
    private $tableid;
    private $tableid2;

    public function __construct()
    {
        $this->db = new Database();
        $this->tablename = 'users_pharmacie';
        $this->tableid = 'users_id';
        $this->tableid2 = 'pharmacie_id';
    }

    public function create($users_id, $pharmacie_id)
    {
        $sql = "INSERT INTO $this ->tablename set first_name=?, last_name=?, phone=?, location=?, email=?, password=?, role=?, photo=?";
        $params = array($users_id, $pharmacie_id);
        $this->db->prepare($sql, $params);
    }

    public function update($id,$id2,$users_id,$pharmacie_id)
    {
        $sql = "update $this ->tablename set users_id=?,pharmacie_id=? where $this->tableid=? and $this->tableid2=?";
        $params = array($users_id, $pharmacie_id, $id, $id2);
        $this->db->prepare($sql, $params);
    }
    public function delete($id, $id2)
    {
        $sql = "delete from $this ->tablename where $this->tableid=? and $this->tableid2=?";
        $params = array($id,$id2);
        $this->db->prepare($sql, $params);
    }
    public function read($id,$id2)
    {
        $sql = "select * from $this ->tablename where $this->tableid=? and $this->tableid2=?";
        $params = array($id,$id2);
        $req = $this->db->prepare($sql, $params);
        return $this->db->getDatas($req, true);
    }
    public function readAll()
    {
        $sql = "select * from $this->tablename order by $this->tableid and $this->tableid2 desc";
        $params = null;
        $req = $this->db->prepare($sql, $params);
    }
     public function search($search)
    {
        $sql = "select * from $this->tablename where users_id like ? or pharmacie_id like ? order by $this->tableid and $this->tableid2 desc";
        $params = array("%$search%", "%$search%");
        $req = $this->db->prepare($sql, $params);
        return $this->db->getDatas($req, false);
    }
    public function countUsers()
    {
        $sql = "select count(*) as total from $this->tablename";
        $params = null;
        $req = $this->db->prepare($sql, $params);
        $result = $this->db->getDatas($req, true);
        return $result->total;
    }
}
