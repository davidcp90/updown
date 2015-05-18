<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Lista de Usuarios
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
        <a href="<?php echo site_url('auth/create_user'); ?>" class="btn btn-success"><i class="fa fa-user"> </i>  Crear Usuario</a>
            <a href="<?php echo site_url('auth/create_group'); ?>" class="btn btn-primary"><i class="fa fa-users"> </i>  Crear Grupo</a>
            <div class="clearfix" style="height:20px"></div>
        <div class="box">
            <table class="table table-hover">
                <tr>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Email</th>
                    <th>Grupos</th>
                    <th>Acciones</th>
                </tr>
                <?php foreach ($users as $user):?>
                <tr>
                    <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                    <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                    <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                    <td>
                        <?php foreach ($user->groups as $group):?>
                        <span class="label label-default" style="color:white !important"><?php echo anchor("auth/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8')) ;?></span><br />
                        <?php endforeach?>
                    </td>
                    <td><?php echo anchor("auth/edit_user/".$user->id, 'Editar') ;?></td>
                </tr>
                <?php endforeach;?>
            </table>
        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
