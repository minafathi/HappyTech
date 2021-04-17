
<html>
    <header>
        <title>HappyTech</title>
        <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/fontawesome.min.css">
    </header>
    <body>
        <nav class="navbar navbar-expand-lg">
            <a class="navbar-brand" href="<?php echo base_url(); ?>">HappyTech</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item home" >
                    <a class="nav-link" href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dashboard">
                    <a class="nav-link" href="<?php echo base_url(); ?>/dashboard">Dashboard</a>
                </li>
                <li class="nav-item pending">
                    <a class="nav-link" href="<?php echo base_url(); ?>/pending">Pending Reviews</a>
                </li>
                <li class="nav-item reviewed">
                    <a class="nav-link" href="<?php echo base_url(); ?>/reviewed">Reviewed</a>
                </li>
                <li class="nav-item app">
                    <a class="nav-link" href="<?php echo base_url(); ?>/app">Application</a>
                </li>
                <li class="nav-item feedback">
                    <a class="nav-link" href="<?php echo base_url(); ?>/feedback">Feedback</a>
                </li>
                <li class="nav-item login">
                    <a class="nav-link login" href="<?php echo base_url(); ?>/feedback">Login</a>
                </li>
                </ul>
            </div>
        </nav>
    