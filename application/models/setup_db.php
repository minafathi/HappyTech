
<?php
class Setup_db extends CI_Model{

    public function setup_database(){
        $this->load->dbforge(); 
        $this->dbforge->create_database('happytech');

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
                        'unique' => TRUE,
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
                        'unique' => TRUE,
                ),
                'type' => array(
                        'type' =>'varchar',
                        'constraint' => '255',
                ),
                'comment_number' => array(
                        'type' =>'varchar',
                        'constraint' => '100',                            ),
        );
                            
        $this->dbforge->add_field($fields_template);
        $this->dbforge->add_key('id', TRUE);
        $this->dbforge->create_table('templates', TRUE);
                        
                 
        }

}
