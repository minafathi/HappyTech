<div class="feedbackback">
    <?php if(isset($_SESSION['changes'])){ ?>
        <h3><?php echo $this->session->userdata('changes'); ?></h3>
    <?php } ?>
    <?php if(isset($_SESSION['emailed'])){ ?>
        <h3><?php echo $this->session->userdata('emailed'); ?></h3>
    <?php } ?>
    <?php if(isset($_SESSION['template'])){ ?>
        <h3><?php echo $this->session->userdata('template'); ?></h3>
    <?php } ?>
    <img class="backimg feed" src="<?php echo base_url() ?>assets/images/6c1299c2a5d7fb27788d6df7d4a5dc3b.jpg" />
    <div class="container">
        <div class="row">
            <div class="col-md-4 tmplbox1 ScrollStyle">
                <form action="<?php echo base_url(); ?>template/create_tmpl" method="post">
                    <div class="box"></div>
                    <h5><strong class="cttitle">Create a Template</strong></h5>
                    <div class="box"></div>
                    <div class="yellowbox">
                        <p><strong>Title</strong><input class="space" type="text" name="title" placeholder="Enter Template Title" /></p>
                        <div class='cmbox'>
                            <p><strong>Comment 1</strong><input class="space" type="text" name="comment[]" placeholder="Enter a Comment" /></p>
                            <p><strong>Comment 2</strong><input class="space" type="text" name="comment[]" placeholder="Enter a Comment" /></p>
                            <p><strong>Comment 3</strong><input class="space" type="text" name="comment[]" placeholder="Enter a Comment" /></p>
                        </div>
  
                        <p><Strong><h2 class='addcm'>+</h2></Strong></p>
                        Type:</br>
                        <input type="radio" name="type" value="accept">Accept
                        <br>
                        <input type="radio" name="type" value="reject">Reject
                        <br/><br/>
                        <button type='submit' class='btn btn-success' value='Create'>Create</button>
                    </div>
                </form>

            </div>

            <div class="col-md-4 tmplbox2 ScrollStyle">
                <br /><br />
                <?php foreach($templates as $row) {  ?>
                <form method='post' action="<?php echo base_url(); ?>pages/add_to">
                <input type="hidden" name="tmpl_id" value="<?php echo $row->id; ?>"/>
                    <div class="commentbox">
                        <h5 class="tmpl_ttl"><strong><?php echo $row->title; ?></strong></h5>
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>Comment</th>
                            </tr>
                            <?php foreach($comments as $crow) {  
                                if ($crow->template_id == $row->id) {?>
                            <tr>
                                <td><input name='comment[]' type='checkbox' value='<?php echo $crow->id; ?>'><?php echo $crow->id; ?></td>
                                <td><?php echo $crow->comment; ?></td>
                            </tr>
                            <?php }
                        } ?>
                        <hr class="hrc">
                        <br/>
                        </table>
                        <table>
                        <hr class="hrc">
                    
                                <tr>
                                    <td>  
                                    <strong class='adto'>Add to:</strong>
                                    <select  name='commid'  class='idinp'>
                                    <?php foreach($comments as $crow) {  
                                    if ($crow->template_id == $row->id) {
                                    ?>
                                        <option value="<?php echo  $crow->id; ?>"><?php echo  $crow->id; ?></option>
                                    <?php
                                        }
                                    }?>
                                    </select>
                                    <br/>
                                    <td><input type='text' name='commtext' class='commtext'></td>
                                    <td><button type='submit' name='action' value='addto' class='btn btn-success tbtn'><strong class='plus'>+</strong></button></td>
                                </tr>
                        </table>
             
                        <div class="row crow">
                            <div class='com-md-4 cmb'><button type='submit' name='action' value='Delete' class='btn btn-danger'>Delete</button></div>
                            <div class='com-md-4 cmb'><button type='submit' name='action' value='Edit' class='editme<?php echo $row->id; ?> btn btn-primary'>Edit</button></div>
                            <div class='com-md-4 cmb'><button type='submit' name='action' value='Select' class='btn btn-success'>Select</button></div>
                        </div>
                    </div>
                    
                </form>
                <?php } ?>
            </div>
            
        </div>
    </div>
    <br/><br/><br/>
    <div class="bluebox">
    
        
        <div class="container">
        <form method='post' action='<?php echo base_url(); ?>pages/send_email'>
            <div class='row'>
                
                    <div class="col-md-6 bx1">
                    
                        <strong><p>Applicant     William Smit</p></strong> 
                        <br /><br />
                        <strong>Reviewer</strong><input class="space" type="text" name="reviewer" placeholder="Enter Your Name" />
                        <br /><br />
                        <strong>Subject</strong><input class="space" type='text' name='subject' placeholder='Enter header for feedback' />
                        <br /><br />
                        <input type='radio' value='now' name='emaile_date'>Send Now
                        <br />
                        <input type='radio' value='later' name='emaile_date'>Send Later
                        <br />
                        <strong>Date:    </strong><input class='fdate' id='datepicker' type='text' name='edate'>
                        <br /><br />
                        <strong>Free Comment :</strong>
                        <br />
                        <textarea name='fcomment'></textarea>
                        <br/><br/>
                        <button type='submit' name="action_email" class='btn btn-success subform' value='Show'>Put in Email</button>
                    </div>
            
                    <div class="col-md-6 bx2">
                    Subject: <?php if(isset($_SESSION['subject'])){ echo $this->session->userdata('subject'); } ?>
                    <br/><br/>
                    Dear William <br/><br/>
                    <?php 
                    if(isset($_SESSION['cmnts_to_email'])){
                        foreach($this->session->userdata('cmnts_to_email') as $com) {
                            echo $com;
                        }
                    }  ?> 
                    <br/>
                    <?php if(isset($_SESSION['free_comment'])){ echo $this->session->userdata('free_comment'); } ?>
                    <br/><br/>
                    All the best,
                    <br/>
                    <?php if(isset($_SESSION['reviewer'])){ echo $this->session->userdata('reviewer'); } ?>
                    <br/><br/>
                    <div class="row crow">
                        <div class='com-md-4 cmb'><button type='submit' name="action_email" class='btn btn-success subform' value='Submit'>Send</button></div>
                        <div class='com-md-4 cmb'><button type='submit' name="action_email" class='btn btn-danger subform' value='Erase'>Erase</button></div>
                    </div>   
                </div>
                
                </div>
            </form> 
        </div>
    </div>
</div>