<?php 
    class Pages extends CI_Controller{

        public function __construct(){
            parent::__construct();
            $this->load->model('setup_db');                                                 
            $this->setup_db->setup_database();
            $this->load->dbforge('project');
                    $fields_template = array(
                        'id' => array(
                                'type' => 'INT',
                                'constraint' => 5,
                                'unsigned' => TRUE,
                                'auto_increment' => TRUE,
                        ),
                        'title' => array(
                                'type' => 'VARCHAR',
                                'constraint' => '255',
                                'unique' => TRUE,
                        ),
                        'type' => array(
                                'type' =>'varchar',
                                'constraint' => '255',
                        ),
                        'comment_number' => array(
                        'type' =>'varchar',
                        'constraint' => '100',
                ),
                );
                


                $this->dbforge->add_field($fields_template);
                $this->dbforge->add_key('id', TRUE);
                $this->dbforge->create_table('templates', TRUE);
            // $this->load->dbforge();
            
            // if($this->dbforge->create_database('happytech'))
            //         {
            //             $db['default'] = array(
            //                 'dsn'	=> '',
            //                 'hostname' => '127.0.0.1:8889',
            //                 'username' => 'root',
            //                 'password' => 'root',
            //                 'database' => 'happytech',
            //                 'dbdriver' => 'mysqli',
            //                 'dbprefix' => '',
            //                 'pconnect' => FALSE,
            //                 'db_debug' => FALSE,
            //                 'cache_on' => FALSE,
            //                 'cachedir' => '',
            //                 'char_set' => 'utf8',
            //                 'dbcollat' => 'utf8_general_ci',
            //                 'swap_pre' => '',
            //                 'encrypt' => FALSE,
            //                 'compress' => FALSE,
            //                 'stricton' => FALSE,
            //                 'failover' => array(),
            //                 'save_queries' => TRUE
            //             );
                    // }
            
        }
        public function viewhome($page = 'home'){
            
            $data['title'] = ucfirst($page);
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
            $this->load->view('templates/footer');
            
        }
        
        public function view_feedback(){
            // $this->load->model('setup_db');
            // $this->setup_db->setup_tables();
            $this->load->model('read_template'); 
            $dataf['templates'] = $this->read_template->read_tmpl();
            $dataf['comments'] = $this->read_template->read_comm();
            $this->load->view('templates/header');
            $this->load->view("pages/feedback",$dataf);
            $this->load->view('templates/footer');
            

        }

        public function view_app(){
            $this->load->view('templates/header');
            $this->load->view("pages/app");
            $this->load->view('templates/footer');

        }

        public function view_edittmpl(){
            $this->load->view('templates/header');
            $this->load->view("pages/edit_template");
            $this->load->view('templates/footer');
        }

        public function view_pending(){
            $this->load->view('templates/header');
            $this->load->view("pages/pending");
            $this->load->view('templates/footer');

        }

        public function view_reviewed(){
            $this->load->view('templates/header');
            $this->load->view("pages/reviewed");
            $this->load->view('templates/footer');

        }
        
        public function view_dashboard(){
            $this->load->view('templates/header');
            $this->load->view("pages/dashboard");
            $this->load->view('templates/footer');

        }

        public function add_to() {
            $action = $this->input->post('action');
            if($action == 'Delete') {
                $id = $this->input->post('tmpl_id');
                $this->load->model('delete_template');
                if($this->delete_template->delete_tmpl($id)) {
                    $this->session->set_userdata('changes', 'Changes were successfully made!', 300);
                    redirect(base_url().'/feedback');
                } 
            }
            if($action == 'Edit') {
                $id = $this->input->post('tmpl_id');
                $this->session->set_flashdata('template_id', $id);
                $this->load->model('edit_template');
                if($this->edit_template->retrieve_tmpl($id)){
                    $data['tmplform'] = $this->edit_template->retrieve_tmpl($id);
                }
        
                if($this->edit_template->retrieve_comment($id)){
                    $data['commentform'] = $this->edit_template->retrieve_comment($id);
                }
                // redirect(base_url().'/edit_template');
                $this->load->view('templates/header');
                $this->load->view("pages/edit_template",$data);
                $this->load->view('templates/footer');
            }
            if($action == 'addto') {
                $commid = $this->input->post('commid');
                $commtext = $this->input->post('commtext');
                $this->load->model('edit_comment');
                if($this->edit_comment->edit_com($commid, $commtext)) {
                    $this->session->set_userdata('changes', 'Changes were successfully made!', 300);
                    redirect(base_url().'/feedback');
                }
            }
            if($action == 'Select') {
                $commid = $this->input->post('comment');
                $this->load->model('get_comments');
                if(isset($_SESSION['comments'])){
                    $cms = $this->session->userdata('comments');
                } else {
                    $cms = [];
                }
                foreach($commid as $cm){
                    array_push($cms, $cm);
                }
                $this->session->set_userdata('comments', $cms);
                $this->session->set_userdata('cmnts_to_email',$this->get_comments->get_comment($cms));
                redirect(base_url().'/feedback');
            }
        }

        public function edit_tmpl() {
            $id = $this->input->post('tmpl_id');
            $title = $this->input->post('title');
            $comments = $this->input->post('comment[]');
            $type = $this->input->post('type');
            $this->load->model('edit_template');
            if($this->edit_template->edit_tmpl($id, $title, $comments, $type)) {
                $this->session->set_userdata('changes', 'Changes were successfully made!', 300);
                redirect(base_url().'/feedback');
            }
        }

        public function send_email() {
            $action = $this->input->post('action_email');
            if($action == 'Show'){ 
                
                // $subject = $this->input->post('subject');
                // $reviewer = $this->input->post('reviewer');
                // $free_comment = $this->input->post('fcomment');
                // $emaile_date = $this->input->post('emaile_date');
                // $edate = $this->input->post('edate');
                $this->session->set_userdata('subject', $this->input->post('subject'));
                $this->session->set_userdata('reviewer', $this->input->post('reviewer'));
                $this->session->set_userdata('free_comment', $this->input->post('fcomment'));
                $this->session->set_userdata('emaile_date', $this->input->post('emaile_date'));
                $this->session->set_userdata('edat', $this->input->post('edate'));
                redirect(base_url().'/feedback');
            }
            if($action == 'Submit') {
                $email = 'solmina.92@gmail.com';
                $this->load->model('send_email');
                $sub = $this->session->userdata('subject');
                $rev = $this->session->userdata('reviewer');
                $fcom = $this->session->userdata('free_comment');
                $edat = $this->session->userdata('edat');
                $emaile_date = $this->session->userdata('emaile_date');
                if($this->send_email->email($sub, $rev, $fcom, $emaile_date, $edat, $this->session->userdata('cmnts_to_email'), $email)){
                    $this->session->set_userdata('emailed', 'The feedback is successfully emailed!', 300);
                    $this->session->unset_userdata('comments');
                    $this->session->unset_userdata('cmnts_to_email');
                    $this->session->unset_userdata('subject');
                    $this->session->unset_userdata('reviewer');
                    $this->session->unset_userdata('free_comment');
                    $this->session->unset_userdata('edat');
                    redirect(base_url().'/feedback');
                }
            }

            if($action == 'Erase') {
                $this->session->unset_userdata('emailed');
                $this->session->unset_userdata('comments');
                $this->session->unset_userdata('cmnts_to_email');
                $this->session->unset_userdata('subject');
                $this->session->unset_userdata('reviewer');
                $this->session->unset_userdata('free_comment');
                redirect(base_url().'/feedback');
            }
            
        }
    }
?>