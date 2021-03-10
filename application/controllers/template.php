<?php 

class Template extends CI_Controller {

    public function create_tmpl() {
        $title = $this->input->post('title');
        $comments = $this->input->post('comment[]');
        // $comment2 = $this->input->post('comment2');
        // $comment3 = $this->input->post('comment3');
        $type = $this->input->post('type');
        $this->load->model('create_template');
        if($this->create_template->create($title, $comments, $type)){
            redirect(base_url());
        }
    }
}