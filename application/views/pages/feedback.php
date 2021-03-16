<div class="feedbackback">
    <img class="backimg feed" src="<?php echo base_url() ?>assets/images/6c1299c2a5d7fb27788d6df7d4a5dc3b.jpg" />
    <div class="container">
        <div class="row">
            <div class="col-md-4 tmplbox1 ScrollStyle">
                
                <form action="<?php echo base_url(); ?>template/create_tmpl" method="post">
                    <div class="box"></div>
                    <strong class="cttitle">Create Template for CV</strong>
                    <div class="yellowbox">

                        <p><strong>Title</strong><input type="text" name="title" placeholder="Enter Template Title" /></p>
                        <div class='cmbox'>
                            <p><strong>Comment 1</strong><input type="text" name="comment[]" placeholder="Enter a Comment" /></p>
                            <p><strong>Comment 2</strong><input type="text" name="comment[]" placeholder="Enter a Comment" /></p>
                            <p><strong>Comment 3</strong><input type="text" name="comment[]" placeholder="Enter a Comment" /></p>
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
                <form method='post' action=''>
                    <div class="commentbox">
                        <table>
                            <tr>
                                <th>Id</th>
                                <th>Comment</th>
                            </tr>
                            <tr>
                                <td><input type='radio' value='1'>1</td>
                                <td>Some Comment</td>
                            </tr>
                            <tr>
                                <td><input type='radio' value='2'>2</td>
                                <td>Some Comment</td>
                            </tr>
                            <tr>
                                <td><input type='radio' value='3'>3</td>
                                <td>Some Comment</td>
                            </tr>
                            <tr>
                                <td><strong>Add to:</strong><input type='text' name='id' class='idinp'></td>
                                <td><input type='text' name='comment'></td>
                            </tr>
                        </table>
                        <div class="row crow">
                            <div class='com-md-4 cmb'><button type='submit' value='Delete' class='btn btn-danger'>Delete</button></div>
                            <div class='com-md-4 cmb'><button type='submit' value='Edit' class='btn btn-primary'>Edit</button></div>
                            <div class='com-md-4 cmb'><button type='submit' value='Select' class='btn btn-success'>Select</button></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br/><br/><br/>
    <div class="container">
        <div class="bluebox">
            <form method='post' action=''>
                <strong><p>Applicant     William Smit</p></strong> 
                <br /><br />
                <strong>Reviewer    </strong><input type="text" name="reviewer" placeholder="Enter Your Name" />
                <br /><br />
                <strong>Header    </strong><input type='text' name='header' placeholder='Enter header for feedback' />
                <br /><br />
                <input type='radio' value='now' name='sendingop'>Send Now
                <br />
                <input type='radio' value='now' name='sendingop'>Send Later
                <br />
                <strong>Date:    </strong><input class='fdate' type='text' name='date'>
                <br /><br />
                <strong>Free Comment :</strong>
                <br />
                <textarea name='fcomment'></textarea>
                <br/><br/>
                <button type='submit' class='btn btn-success subform' value='Submit'>Submit</button>
            </form>        
        </div>
    </div>
</div>