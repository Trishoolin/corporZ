<?php

class Student_model extends CI_Model
{

    public $_table = 'students';
    public $primary_key = 'id';
    public $std_name = 'std_name';
    public $std_email = 'std_email';
    public $student_id = 'student_id';
    public $session = 'session';


    function __construct()
    {
        parent::__construct();
    }

    // Insert New records
    public function create($insertData)
    {
        $this->db->insert($this->_table, $insertData);
        return $this->db->insert_id();
    }

    // get all records
    public function get_all()
    {
        $this->db->select('*')
            ->from($this->_table)
            ->order_by($this->primary_key, 'DESC');
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    // get a record by id
    public function get_by_id($id)
    {
        $this->db->select('*')
            ->from($this->_table)
            ->where($this->primary_key, $id);
        $query = $this->db->get();
        if ($query->num_rows() != 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    // get a stduent by student_id
    public function get_by_student_id($student_id)
    {
        $this->db->select('*')
            ->from($this->_table)
            ->where($this->student_id, $student_id);
        $query = $this->db->get();
        return ($query->num_rows() != 0);
    }

    // update studetent by student id
    public function student_update($updateData, $student_id)
    {
        $result = $this->db->where($this->student_id, $student_id)->update($this->_table, $updateData);

        return $result;
    }

    // check duplicate entry or already exists
    public function exist($data, $id)
    {
        $query = $this->db->select('*')
            ->from($this->_table)
            ->where($this->name, $data)
            ->where_not_in($this->primary_key, $id)
            ->get();
        return ($query->num_rows() == 0);
    }


    // edit a record
    public function edit($updateData, $updateId)
    {
        $this->db->where($this->primary_key, $updateId)->update($this->_table, $updateData);

		return (bool) $this->db->affected_rows();
    }


    // delete a record
    public function delete($id)
    {
        $this->db->delete($this->_table, array($this->primary_key => $id));

		return (bool) $this->db->affected_rows();
    }

}