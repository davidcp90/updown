<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Editar Grupo <span style="text-transform:capitalize;"><?php echo $nombre_grupo;?></span>
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
            <?php echo form_open(current_url());?>
            <div class="clearfix" style="height:20px"></div>
            <input type="text" class="form-control input-lg" name="group_name" value="<?php echo $nombre_grupo;?>" id="group_name" placeholder="Nombre de Grupo">
            <div class="clearfix" style="height:5px"></div>
            <textarea class="form-control input-lg" name="group_description" value="<?php echo $descripcion_grupo;?>" id="description" placeholder="Descripcion"></textarea>
            <div class="clearfix" style="height:20px"></div>
            <button class="btn btn-primary btn-large" type="submit"><i class="fa fa-pencil"> </i> Editar Información</button>
            <div class="clearfix" style="height:20px"></div>
            <?php echo form_close();?>

        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->