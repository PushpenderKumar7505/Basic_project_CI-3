<?php
class StudentModel extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        // Load database library
        $this->load->database();
    }
// for deleting the data in the form
    public function delete_row($id)
    {
        // Perform deletion
        $this->db->where('id', $id);
        return $this->db->delete('student_details');

    }

    // used to take the data from the database
    public function getdata()
    {
        // ye jo niche line h vo keval database ki studentdetail vali table k data dikhaaegi
        // $record=$this->db->select('*')->from('studentdetail')->get()->result();

        // ye jo niche line h vo keval database ki student_details vali table k data dikhaaegi
        $record = $this->db->select('*')->from('student_details')->get()->result();
        return $record;
    }
// used to insert the data only
    public function insertdetails($data)
    {
        $this->db->insert('student_details', $data);
    }
    //used to update the data in the datatable in the list
    public function updateEmployee($id)
    {
        $record = $this->db->select('*')->from('student_details')->where('id', $id)->get()->result();
        //    print_r($record);exit;
        return $record;
    }   
    //used to update the table
    public function updateEmployee2($data, $id)
    {
        $this->db->where('id', $id);
        $this->db->update('student_details', $data);
    }
    // it is used to select the data from the database  and store  in the result variable and the data is goes in the $r variable and return it.
    public function login($EMAIL, $PASSWORD)
    {

        $r = $this->db->select('*')->from('student_details')->where('Email', $EMAIL)->where('password', $PASSWORD)->get()->result();
        //   echo "<pre>"; print_r($r);exit;
        return $r;
    }

}
