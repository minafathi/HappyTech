<?php 

class Template extends CI_Controller {

    public function create_tmpl() {
        $title = $this->input->post('title');
        $comments = $this->input->post('comment[]');
        $type = $this->input->post('type');
        $this->load->model('create_template');
        if($this->create_template->create($title, $comments, $type)){
            $this->session->set_userdata('template', 'Tmplate is successfully created!', 300);
            redirect(base_url().'/feedback');
        }
    }

    

    
}