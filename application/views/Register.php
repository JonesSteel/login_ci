<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registration-CI Login Registration</title>
        <link href="<?php echo base_url('assests/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <span style="background-color: red;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="login-panel panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Registration</h3>
                            </div>
                            <div class="panel-body">
                                <?php
                                    $error_msg = $this->session->flashdata('error_msg');
                                    if ($error_msg){
                                        echo $error_msg;
                                    }
                                ?>
                                <form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>"></form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </span>
    </body>
</html>