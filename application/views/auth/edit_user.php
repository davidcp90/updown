<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Editar Usuario <span style="text-transform:capitalize;"><?php echo $nombre_persona;?></span>
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
           <?php echo form_open(uri_string());?>

      <p>
          <strong>Nombres: </strong> <br/>
            <?php echo form_input($first_name);?>
      </p>

      <p>
          <strong>Apellidos:</strong> <br />
            <?php echo form_input($last_name);?>
      </p>
<input type="hidden" name="company" value="<?php echo $compania; ?>">

      <p>
            <strong>Telefono:</strong><br />
            <?php echo form_input($phone);?>
      </p>

      <p>
            <strong>Contraseña:</strong><br />
            <?php echo form_input($password);?>
      </p>

      <p>
            <strong>Confirmar Contraseña:</strong><br />
            <?php echo form_input($password_confirm);?>
      </p>

      <?php if ($this->ion_auth->is_admin()): ?>

          <h3>Grupos a los que pertenece</h3>
          <div class="row">
          <div class="col-md-8 col-md-offset-1">
          <?php foreach ($groups as $group):?>
              <label class="checkbox">
              <?php
                  $gID=$group['id'];
                  $checked = null;
                  $item = null;
                  foreach($currentGroups as $grp) {
                      if ($gID == $grp->id) {
                          $checked= ' checked="checked"';
                      break;
                      }
                  }
              ?>
              <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
              <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
              </label>
          <?php endforeach?>
            </div>
            </div>
      <?php endif ?>
<div class="clearfix" style="height: 20px"></div>
            <?php echo form_hidden('id', $user->id);?>
      <?php echo form_hidden($csrf); ?>

      <p><?php echo form_submit('submit', 'Guardar Usuario');?></p>

<?php echo form_close();?>


        </div>


    </section><!-- /.content -->
</div><!-- /.content-wrapper -->