<?php 

class Send_email extends CI_Model{
    public function email($subject, $reviewer, $free_comment, $emaile_date, $edate, $comments_email, $email){
        $message = "Dear";
        $message .= "

";
        foreach( $comments_email as $cm){
            $message .= $cm;
            $message .= " ";
        }
        $message .= "
";
        $message .= $free_comment;
        $message .= "

";
        $message .= "Kind Regards,";
        $message .= "
";
        $message .= $reviewer;
        if($emaile_date == 'now'){
            mail($email, $subject, $message);
        } else {
            $this->session->set_userdata('em', $email);
            $this->session->set_userdata('subj', $subject);
            $this->session->set_userdata('mes', $message);
            if(strtotime("now") == strtotime($edate)){
                mail($this->session->userdata('em'), $this->session->userdata('subj'), $this->session->userdata('mes'));
                $this->session->unset_userdata('em');
                $this->session->unset_userdata('subj');
                $this->session->unset_userdata('mes');
            }
        }
        return true;
    }
}

?>