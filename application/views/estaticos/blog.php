<!--carga estilos, titulo e inicia body -->
<?php $this->load->view('estaticos/base/header'); ?>
<!--STAGE-->
<div id='stage_interno' class='stage_labo'>
</div>
<!--CONTENT-->
<div id='content_in'>
  <!--SECTION_HORIZONTALBAR-->
  <section id='horizontal_bar'>
    <div class='wrapper'>
      <h1 style="font-size:36px;">"Nunca dudes que un <span style='color:#ff6f00'>pequeño grupo de ciudadanos</span><br> pensantes y comprometidos pueden<span style='color:#ff6f00'> cambiar el mundo.</span> <br> De hecho, son los únicos que lo han logrado"</h1> <br><h1 style="font-size:18px;">— Margaret Mead</h1>
      <br>
    </div>
  </section>
  
  <!--2SECTION_CONTENT-->
  <section id='content_academia'>
    <div class='wrapper'>
      <div>
        <div class='bloque_info' style="margin-bottom: 0">
          <h1>Nuestro Blog</h1>
          <p class='highlights01' style='width:100%; top:0;'>Bienvenido al blog de UpsideDown. Estas son las publicaciones mas recientes.</p>
        </div>
        <?php if($posts){ ?>
        <ul id='panel_academia' style="position:relative;top:-60px">
          <?php foreach ($posts as $p): ?>
          <li>
            <a href="<?php echo site_url('blog/post'); ?>/<?= $p->p_id ; ?>">
              <div class='panel_title'>Leer</div>
              <div class='ql_line'></div>
              <div class='curt_on'></div>
                            <?php
              if(isset($p->p_imagen)){?>
              <div class="post-img-cont" style="background-image: url('<?= base_url(); ?>assets/uploads/files/<?= $p->p_imagen ; ?>') !important;">
              <?php } else{ ?>
              <div class="post-img-cont">
              <?php }?>
              </div>
            </a>
            <div class="post-container">
              <span class="post-titulo-cat"><?= $p->p_categoria ; ?></span>
              <span class="post-comment-count"><?= $p->comentarios ; ?></span>
              <div class="clearfix"></div>
              <h3 class="tx-22 that-gray-bastard"><?php echo substr($p->p_nombre,0,80); if(strlen($p->p_nombre)>80){echo '...';}; ?></h3>
              <p class="l-h-12 that-gray-bastard"><?= substr($p->texto,0,120) ; ?> ...</p>
            </div>
     

          </li>
          <?php endforeach ?>
        </ul>
        <?php } else{ ?>
        <p class='highlights01' style='width:100%; border-top: 1px solid #999;  padding-top: 40px'>Por el momento no existen entradas en esta categoría.</p>
        <?php }?>
      </div>
      
    </div>
  </section>
</div>
<!--carga estilos, javascript y cierra body, html -->
<?php $this->load->view('estaticos/base/footer'); ?>