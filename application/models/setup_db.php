<?php
class Setup_db extends CI_Model{

    public function setup_database(){
        $this->load->dbforge(); 
        $this->load->dbutil();
        if($this->dbutil->database_exists('happytech')){
                // $db = $this->load->database('happytech');
        } else {
                $this->dbforge->create_database('happytech', TRUE);
        }
        
        $db = $this->load->database('happytech'); 
        $this->db->query('use happytech');
        
        $fields = array(
                'id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE,
                ),
                'template_id' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                ),
                'comment' => array(
                        'type' =>'text',
                ),
        );
                
        $this->dbforge->add_field($fields);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('comments', TRUE);
                

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
                        

        // Table for application form ===========================================
        
        $fields_application = array(
                'id' => array(
                        'type' => 'INT',
                        'constraint' => 5,
                        'unsigned' => TRUE,
                        'auto_increment' => TRUE,
                ),
                'fullname' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                ),
                'email' => array(
                        'type' =>'varchar',
                        'constraint' => '100',
                ),
                'address' => array(
                        'type' =>'varchar',
                        'constraint' => '100', 
                ),
                'city' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                ),
                'state' => array(
                        'type' =>'varchar',
                        'constraint' => '100',
                ),
                'work' => array(
                        'type' =>'varchar',
                        'constraint' => '100',
                ),
                'uni' => array(
                        'type' =>'varchar',
                        'constraint' => '100',
                ),
                'fieldofstdy' => array(
                        'type' =>'varchar',
                        'constraint' => '100', 
                ),
                'degree' => array(
                        'type' => 'VARCHAR',
                        'constraint' => '100',
                ),
                'file1' => array(
                        'type' =>'varchar',
                        'constraint' => '100',
                ),
                'fiele2' => array(
                        'type' =>'varchar',
                        'constraint' => '100',
                ),
        );              
        $this->dbforge->add_field($fields_application);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('application', TRUE);
        //============================================================================
        }

}



