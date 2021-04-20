<div class="feedbackback">
    <img class="backimg feed" src="<?php echo base_url() ?>assets/images/6c1299c2a5d7fb27788d6df7d4a5dc3b.jpg" />
    <div class="container">
    <br/><br/>
    <?php 
    // $id_value = $this->session->flashdata('template_id');
    // echo $id_value; 
    
    foreach($tmplform as $tmpl){
        echo $tmpl->title;
    }
    
    // print_r($commentform);
    ?>
        <div class="row">
            <div class="col-md-4 tmplbox1 ScrollStyle">
            <?php foreach($tmplform as $tmpl){ ?>
                <form action="<?php echo base_url(); ?>pages/edit_tmpl" method="post">
                <input type="hidden" name="tmpl_id" value="<?php echo $tmpl->id; ?>"/>
                    <div class="box"></div>
                    <strong class="cttitle">Edit Template</strong>
                    <div class="yellowbox">

                        <p><strong>Title</strong><input type="text" name="title" value="<?php echo $tmpl->title;?>" placeholder="Enter Template Title" /></p>
                        <div class='cmbox'>
                        
                        <?php $c = (int)1;
                    
                        foreach($commentform as $row){ 
                            
                            ?>
                            <p><strong>Comment <?php echo $c; ?></strong><input type="text" name="comment[]" value="<?php echo $row->comment; ?>" /></p>
                        <?php 
                            $c = $c +1;
                        } ?>
                        </div>
                        <p><Strong><h2 class='addcm'>+</h2></Strong></p>
                        Type:</br>
                        <input type="radio" name="type" value="accept">Accept
                        <br>
                        <input type="radio" name="type" value="reject">Reject
                        <br/><br/>
                        <button type='submit' class='btn btn-success' value='SubEdit'>Create</button>
                    </div>
                </form>
                <?php } ?>
            </div>
            
        </div>
    </div>

    
</div>