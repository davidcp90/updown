<!--carga estilos, titulo e inicia body -->
<?php $this->load->view('estaticos/base/header'); ?>

<!--STAGE-->
<div id='stage_interno' class='stage_meto'>
</div>

<!--CONTENT-->
<div id='content_in'>
  
  <!--SECTION_CONTENT-->
  <section id='content_academia' style="padding-bottom: 0;">
    <div class='wrapper'>
      <div class='bloque_info post-wrapper-border'>
        <span class="tx-18 corbel p-b-10 block soft-black"><?php setlocale(LC_ALL, 'es_ES.ISO-8859-1'); echo date('d F Y', strtotime($post['fecha'])); ?></span>
        <h2><?= $post['nombre']; ?></h2><div class="clearfix"></div>
        <h3><?= $categoria['nombre']; ?></h3>
        <img style="max-width: 100%; height: auto;margin-top: 40px;"src="<?php echo base_url();?>assets/uploads/files/<?= $post['imagen'] ; ?>">
        <p class="texto-detalle"><?= $post['texto']; ?></p>
        <div class="clearfix"></div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div id='social_interna'>
      <ul>
        <a class="pop-share" href='http://www.facebook.com/sharer/sharer.php?u=<?= current_url(); ?>&title=UpsideDown - <?= $post['nombre']; ?>'><li class='social_interna_face'></li></a>
        <a class="pop-share" href='http://twitter.com/intent/tweet?status=UpsideDown - <?= $post['nombre']; ?>+<?= current_url(); ?>'><li class='social_interna_twit'></li></a>
        <a class="pop-share" href='https://plus.google.com/share?url=<?= current_url(); ?>'><li class='social_interna_google'></li></a>
        <a class="pop-share" href='mailto:?subject=UpsideDown - <?= $post['nombre']; ?>&body=Quiero compartir contigo este articulo de UpsideDown <?= current_url(); ?>'><li class='social_interna_mail'></li></a>
      </ul>
      <h5 class="autor-text">Por: <span class="green-tx"><?= $autor; ?></span></h5>
      <a href="<?= site_url($cat_url); ?>/<?= $categoria['id'] ; ?>" class="categoria-text"><?= $categoria['nombre']; ?></a>
    </div>
    <div class="clearfix"></div>
  </section>
<?php if(isset($related)){ ?>
  <section id='others_labs' style="margin-top: 0">
          <div class='wrapper'>
            <h3>Más artículos en categoría <?= $categoria['nombre'] ; ?></h3>
          <ul id='panel_laboratorio'>
 <?php foreach ($related as $p): ?>
          <li style="padding-bottom: 25px">
            <a href="<?php echo site_url($post_url); ?>/<?= $p->p_id ; ?>">
              <div class='panel_title'>Ver Más</div>
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
              <a href="<?php echo site_url($cat_url); ?>/<?= $p->cat_id ; ?>" class="post-titulo-cat"><?= $p->p_categoria ; ?></a>
              <span class="post-comment-count"><?= $p->comentarios ; ?></span>
              <div class="clearfix"></div>
              <h3 class="tx-22 that-gray-bastard"><?php echo substr($p->p_nombre,0,80); if(strlen($p->p_nombre)>80){echo '...';}; ?></h3>
              <p class="l-h-12 that-gray-bastard"><?= substr($p->texto,0,80) ; ?> ...</p>
            </div>
     

          </li>
          <?php endforeach ?>
              </div>
       </section> 
<?php } ?>

  <div class="clearfix"></div>
  
  
</div>
<!--Social sharing-->
<script type="text/javascript">
$('.pop-share').click(function (event) {
event.preventDefault();
window.open($(this).attr("href"), "popupWindow", "width=480,height=300,scrollbars=yes");
});
</script>
<?php $this->load->view('estaticos/base/footer'); ?>
