<?php
defined('BASEPATH') or exit('No direct script access allowed');

class StudentController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct(); // all property can use by function  in a controller
        $this->load->model('StudentModel'); // we can load the model for every function can utilize this model for only this controller
        // $this->load->library('session');
        $this->load->helper('url');
        $this->auth();
    }

    public function index()
    {
        $data['record'] = $this->StudentModel->getdata();
        // print_r($data['record']); // for checking the record in the record
        // die();

        // print_r ($data) ;exit;
        // $this->load->view('studentlist', $data);

        // $this->load->view('studentform',$data);

        //  ye hmne dashboard mein list dikhane k liye

        $this->load->view('rander/header');
        $this->load->view('studentlist', $data);
        $this->load->view('rander/footer');
    }

    public function GetAll() // used to get the value of the table of the database
    {
        $data['record'] = $this->StudentModel->getdata();
        $this->load->view('studentlist', $data);
        // $this->load->view('studentform',$data);
    }

    public function studentform()
    {
        $this->load->view('rander/header');
        $this->load->view('studentform');
        $this->load->view('rander/footer');
    }
// used to submit the form
    public function formsubmit()
    {

            $NAME = $this->input->post('Name'); // used to get the data from the table student_details or ek trh se input lene k tarika bss hmne isse ek alg naam ke variable meini store krva diya h
            $EMAIL = $this->input->post('E-mail');
            $WEBSITE = $this->input->post('Website');
            $COMMENT = $this->input->post('comment');
            $PASSWORD = $this->input->post('password');
            $GENDER = $this->input->post('radio');
        // print_r($_POST);exit;
        if (!empty($_POST['id'])) // it is used to check the id we can take is empty or not .
        {
            // make the array of the particular field and one side gave the field name of the table and another side we gave the name we create where the value of the particular field is come
            $form_data = array(
                'Name' => $NAME,
                'Email' => $EMAIL,
                'Website' => $WEBSITE,
                'Gender' => $GENDER,    
                'comment' => $COMMENT,
                'password' => $PASSWORD,

            );
            // print_r($form_data);// it will print all the data in the form of array
            $this->StudentModel->updateEmployee2($form_data, $_POST['id']);
            redirect('list');

        }

        // FOR fetching the particulat field
        // print_r($this->input->post('Name'));
        // print_r($this->input->post('comment'));

        // it will print all the form of the data in the array
        //print_r($_POST);

        // we can fetch the particular data from the form and save in their variable name like $NAME ....

        // $CREATED=$this->input->post('Created'); // basically it is used for the date and time when the user can submit the form

        // this is uesd to print the data of the variable
        // echo $NAME . '<br>';
        // echo $EMAIL . '<br>';
        // echo $WEBSITE . '<br>';
        // echo $COMMENT . '<br>';
        // echo "$GENDER";

        // Insert method

        // it is used to print all the form data  and used to insert the data in table (studentlist) mein
        $form_data = array(
            'Name' => $NAME,
            'Email' => $EMAIL,
            'Website' => $WEBSITE,
            'Gender' => $GENDER,
            'comment' => $COMMENT,
            'Created' => $CREATED,
            'password' => $PASSWORD,
        );
        $this->StudentModel->insertdetails($form_data); // used to insert the data in the form_data array.
        redirect('list'); // we can redirect the page when we can update the table it directly go to the list
    }

    // public function studentformdisplay()
    // {
    //    $data['record']= $this->StudentModel->getdata();

    //    print_r ($data) ;exit;
    // // $this->load->view('studentlist',$data);
    // }

    public function delete_row($id) // it is used delete the row when we delete the button of the list
    {

        // Check if $id is provided and is numeric (for safety)
        if (!is_numeric($id)) {
            show_error('Invalid ID');
        }

        // Call the delete method in the model
        if ($this->StudentModel->delete_row($id)) {
            // Delete successful
            redirect($_SERVER['HTTP_REFERER']);
            //  echo "Row deleted successfully.";
        } else {    
            // Delete failed
            echo "Failed to delete row.";
        }
    }

    public function update($id) // used to update the value
    {
        $data['record'] = $this->StudentModel->updateEmployee($id);
        $this->load->view('studentform2', $data);

    }
    public function loginform() // loginform
    {
        $this->load->view('loginform'); // view the form
    }
    public function getformdata() // it is used to get the data from the table
    {
        // print_r($_POST);exit;
        $EMAIL = $this->input->post('Email'); // it is used to get the value of the Email from the form or ek trh se input lene k tarika
        $PASSWORD = $this->input->post('password'); // it is used to get the value password from the form
        $data = $this->StudentModel->login($EMAIL, $PASSWORD);
        // echo "<pre>" ;print_r($data);exit;
        if (empty($data)) //check if $data is empty or not because $data is in  the form of array
        {
            echo "your email and password is incorrect ";
        } else {
            $this->session->set_userdata('email', $data[0]->Email); // for fetching the particular field in the array($data)
            $this->session->set_userdata('name', $data[0]->Name); //for fetching the particular field in the array($data)
            redirect('list');
        }

    }
    public function auth() // it is used to tell the session is only used in the page not in the incognito tab
    {
        if (empty($this->session->userdata('email'))) // checking the  email  is not empty
        {
            redirect('login'); //isse vapas login page pr chle jaae aur jo login h ye route bnaai  h hmne

        }
    }

    // it is used to destroy the session.
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login'); // isse vapas login page pr chle jaae aur jo login h ye route bnaai  h hmne
    }

    //dashboard form k dikhane k liye

    public function dashboard()
    {
        $this->load->view('rander/header');
        $this->load->view('dashboardform');
        $this->load->view('rander/footer');

    }

}
