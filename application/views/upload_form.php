
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <title>Hello, world!</title>
</head>

<body>
  <div style="color:red">
  
  <?php if(isset($error)){print $error;}?>
</div>
<?php echo form_open_multipart('upload/file_data');?>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="custom-form custom-form-1">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="pic_title">Full Name*:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fullname" id="fullname">
                            </div>
                        </div>
                         <div style="color:red;"><?php echo form_error('fullname'); ?></div>
                        
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="pic_title">Email*:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div style="color:red;"><?php echo form_error('email'); ?></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="pic_title">Address*:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="address" id="address">
                            </div>
                        </div>
                        <div style="color:red;"><?php echo form_error('address'); ?></div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="pic_title">City*:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="city" id="city">
                                    </div>
                                </div>
                            </div>
                            <div style="color:red;"><?php echo form_error('city'); ?></div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label for="pic_title">State*:</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select name="state" id="state" class="form-control" required>
                                            <option value="Choose">Choose...</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="TamilNadu">TamilNadu</option>
                                        </select>
                                    </div>
                                    <div style="color:red;"><?php echo form_error('state'); ?></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
               
            </div>
            <div class="col-md-6">
                <div class="custom-form custom-form-2 upload-cv-wrapper">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="pic_file">Upload CV*:</label>
                                <input type="file" name="file2" class="form-control" id="file2" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="file2">Upload Cover Letter*:</label>
                                <input type="file" name="file1" class="form-control" id="file1" required>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h5 class="text-center mt-2 mb-2">Text</h5>
        <div class="row mt-md-4">
            <div class="col-md-6">
                <div class="custom-form custom-form-2">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="pic_title">Work Experience*:</label>
                            </div>
                            <div class="col-md-9">
                                <!-- <input type="number" class="form-control" name="work" id="work"> -->
                                <textarea class="form-control" name="work" id="work" cols="30" rows="2"></textarea>
                            </div>
                        </div>
                        <div style="color:red;"><?php echo form_error('work'); ?></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="pic_title">University*:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="uni" id="uni">
                            </div>
                        </div>
                        <div style="color:red;"><?php echo form_error('uni'); ?></div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="pic_title">Field of Study*:</label>
                            </div>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fieldofstudy" id="fieldofstudy">
                            </div>
                        </div>
                        <div style="color:red;"><?php echo form_error('fieldofstudy'); ?></div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label for="pic_title">Degree*:</label>
                            </div>
                            <div class="col-md-4">
                                <select name="degree" id="degree" class="form-control" required>
                                   <option value="Choose">Choose...</option>
                                    <option value="B.tech">B.tech</option>
                                    <option value="B.sc">B.sc</option>
                                    <option value="M.Sc">M.Sc</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="color:red;"><?php echo form_error('degree'); ?></div>
            </div>
            <div class="col-md-6">
                <div class="custom-form terms-condition">
                    <h3>Item 1</h3>
                    <p>Lorem ipsum dolor sit amet consectetur <br> impedit? Lorem ipsum dolor sit <br> Lorem ipsum dolor sit amet consectetur</p>
                    <h3>Item 2</h3>
                    <p>Lorem ipsum dolor sit amet consectetur <br> impedit? Lorem ipsum dolor sit <br> Lorem ipsum dolor sit amet consectetur</p>
                    <h3>Item 3</h3>
                    <p>Lorem ipsum dolor sit amet consectetur <br> impedit? Lorem ipsum dolor sit <br> Lorem ipsum dolor sit amet consectetur</p>
                    <div class="form-check pl-0">
                        <input class="form-check-input mt-0 checkbox" type="checkbox" id="condition" name="condition" value="1">
                        <label class="form-check-label condition" for="condition">
                          I accept terms and conditions
                        </label>
                    </div>
                    <div style="text-align: justify;
    background: brown;"><?php echo form_error('condition'); ?></div>
                </div>
            </div>

        </div>
    </div>
    <div class="d-flex justify-content-center mt-5">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>