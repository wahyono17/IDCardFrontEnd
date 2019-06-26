<?php  
class Employee extends CI_Controller{
    public function index(){
        $data['judul'] = "form Input";
        $this->load->view('Header',$data);
        $this->load->view('Employee');
        $this->load->view('footer');
        
    }
}
?>