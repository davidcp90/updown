
           <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Crear Usuario
        </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php if ($message) { ?>
       <div class="callout callout-danger lead">
    <h4>Mensaje de Sistema</h4>
    <p><?php echo $message;?></p>
  </div>
       <?php } ?>
        <div class="box box-primary col-md-6 col-sm-6">
<?php echo form_open("auth/create_user");?>
                <div class="clearfix" style="height:20px"></div>
                <input type="text" class="form-control input-lg" name="first_name" value="" id="first_name" placeholder="Nombres">
                <div class="clearfix" style="height:5px"></div>
                <input type="text" class="form-control input-lg" name="last_name" value="" id="last_name" placeholder="Apellidos">
                <div class="clearfix" style="height:5px"></div>
                <input type="email" class="form-control input-lg" name="email" value="" id="email" placeholder="Email">
               <input type="hidden" name="company" id="company" value="Upsidedown">
               <div class="clearfix" style="height:5px"></div>
               <input type="text" class="form-control input-lg" name="phone" value="" id="phone" placeholder="Telefono">
                <div class="clearfix" style="height:5px"></div>
                <input type="password" class="form-control input-lg" name="password" value="" id="password" placeholder="Contraseña">
                <div class="clearfix" style="height:5px"></div>
                <input type="password" class="form-control input-lg" name="password_confirm" value="" id="password_confirm" placeholder="Confirma tu contraseña">
                <div class="clearfix" style="height:5px"></div>
                <select class="form-control input-lg" name="es_admin" placeholder="Usuario con privilegios de administrador">
                    <option disabled selected="selected">¿Usuario tiene privilegios de administración?</option>
                    <option value="si">Si</option>
                    <option value="no">No</option>
                </select>
                <div class="clearfix" style="height:20px"></div>
               <div class="text-center">
                <button class="btn btn-primary" type="submit"><i class="fa fa-plus"> </i>  Crear usuario</button>
            </div>
            <div class="clearfix" style="height:20px"></div>
            
            <?php echo form_close();?>
            
        </div>

<div class="clearfix"></div>
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->



           