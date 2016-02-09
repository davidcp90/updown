<?php $this->load->helper('html');
$this->load->helper('url');?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Recuperar contraseña | UpsideDown</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Bootstrap 3.3.2 -->
        <link href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url();?>bootstrap/css/logintheme.css" rel="stylesheet" type="text/css" />
        <!-- Font Awesome Icons -->
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <!-- Ionicons -->
        <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
    </head>
<body>
    <div class="container">
       <!--alerta para mebsajes de error-->
       <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <img class="yourlogo" src="<?php echo base_url();?>images/layout/logo.png"/>
        </div>
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3  well">
            <?php
                if ($message){
            ?>
            <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-ban"></i> Mensaje Sistema!</h4>
                    <?php echo $message;?>
            </div>
            <?php } ?>
            <?php echo form_open('auth/reset_password/' . $code);?>
            <h3>Recuperar contraseña</h3>
            <p>Ingresa tu correo para recuperar tu contraseña. Un email sera enviado</p>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input type="text" class="form-control input-lg" name="new_password" value="" id="new_password" placeholder="Nueva Contraseña">
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input type="text" class="form-control input-lg" name="new_password_confirm" value="" id="new_password_confirm" placeholder="Confirma tu contraseña">
            </div>
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-lock"></i>
                </span>
                <input type="text" class="form-control input-lg" name="user_id" value="" id="user_id">
            </div>
            <?php echo form_hidden($csrf); ?>
            <div class="text-center">
                <button class="btn btn-primary" type="submit">Entrar</button>
            </div>
            <?php echo form_close();?>
        </div>
        </div>
        
        
    </div>
