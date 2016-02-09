    <!--carga estilos, titulo e inicia body -->
      <?php $this->load->view('estaticos/base/header'); ?>
             
         <!--STAGE-->
         <div id='stage'> 
         <div id="wowslider-container1">
          <div class="ws_images">
            <ul>
                <li><a href='<?= site_url('upsidedown');?>'><img src='<?php echo base_url();?>images/stage/01.jpg'></a></li>
                <li><a href='<?= site_url('el-2065');?>'><img src='<?php echo base_url();?>images/stage/02.jpg'></a></li>
                <li><a href='<?= site_url('desafios');?>'><img src='<?php echo base_url();?>images/stage/03.jpg'></a></li>
                <li><a href='<?= site_url('labs');?>'><img src='<?php echo base_url();?>images/stage/04.jpg'></a></li>
                <li><a href='<?= site_url('empresa');?>'><img src='<?php echo base_url();?>images/stage/05.jpg'></a></li>
            </ul>
          </div>
          <div class="ws_bullets">
            <div>
                <a href='#'><img src='<?php echo base_url();?>images/stage/tootips/01.jpg'></a>
                <a href='#'><img src='<?php echo base_url();?>images/stage/tootips/02.jpg'></a>
                <a href='#'><img src='<?php echo base_url();?>images/stage/tootips/03.jpg'></a>
                <a href='#'><img src='<?php echo base_url();?>images/stage/tootips/04.jpg'></a>
                <a href='#'><img src='<?php echo base_url();?>images/stage/tootips/05.jpg'></a>
            </div>
         </div>
        </div>
        <script type="text/javascript" src="<?php echo base_url();?>scripts/wowslider.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>scripts/script.js"></script>
         </div>
         
         <!--BITS-->
         <section id='bits'>
          <div classs='wrapper'>    
              <div class='bit02'></div>
            </div>
         </section>
         
         <!--CONTENT-->
         <div id='content'>
         
           <!--SECTION_HORIZONTALBAR-->
           <section id='horizontal_bar'>
             <div class='wrapper'> 
               <h1>En <span style='color:#ff6f00'>Upside Down</span> creemos que las ideas <br>radicales resuelven grandes desafíos</h1>
              </div>
            </section>
           <!--SECTION_COLLAGE_SPACE-->
           <section id='collage_space'>
             <div class='wrapper'>
             
                      <div class='collage_bt1'>   
                      </div>
                    
                      <div class='collage_bt1'>
                      </div>
    
                      <div class='collage_bt1'>
                        <img src='<?php echo base_url();?>images/collage/03.jpg'>
                      </div>
    
                   <a href='<?= site_url('academia'); ?>' class='collage_bt'>
                      <div class='collage_btflip'>
                        <div class='collage_rotate'>
                          <img src='<?php echo base_url();?>images/collage/04.jpg'>
                          <img src='<?php echo base_url();?>images/collage/04_1.jpg'>
                        </div>
                      </div>
                    </a>
                    
                    <a href='<?= site_url('empresa'); ?>' class='collage_bt'>
                      <div class='collage_btflip'>
                        <div class='collage_rotate'>
                          <img src='<?php echo base_url();?>images/collage/05.jpg'>
                            <img src='<?php echo base_url();?>images/collage/05_1.jpg'>
                        </div>
                      </div>
                    </a>
                    
                      <div class='collage_bt1'>
                        <img src='<?php echo base_url();?>images/collage/06.jpg'>
                      </div>
    
                    <a href='<?= site_url('inspiracion'); ?>' class='collage_bt'>
                      <div class='collage_btflip'>
                        <div class='collage_rotate'>
                          <img src='<?php echo base_url();?>images/collage/07.jpg'>
                            <img src='<?php echo base_url();?>images/collage/07_1.jpg'>
                        </div>
                      </div>
                    </a>
    
                      <div class='collage_bt1'>
                        <img src='<?php echo base_url();?>images/collage/08.jpg'>
                      </div>   
    
                      <div class='collage_bt1'>
                        <img src='<?php echo base_url();?>images/collage/09.jpg'>
                      </div>
    
                    <a href='<?= site_url('labs'); ?>' class='collage_bt'>
                      <div class='collage_btflip'>
                        <div class='collage_rotate'>
                          <img src='<?php echo base_url();?>images/collage/10.jpg'>
                            <img src='<?php echo base_url();?>images/collage/10_1.jpg'>
                         </div>
                      </div>
                    </a>
                    
                      <div class='collage_bt1'>
                        <img src='<?php echo base_url();?>images/collage/11.jpg'>
                      </div>   
                       
                      <a href='<?= site_url('recursos'); ?>' class='collage_bt'>
                      <div class='collage_btflip'>
                        <div class='collage_rotate'>
                          <img src='<?php echo base_url();?>images/collage/01.jpg'>
                            <img src='<?php echo base_url();?>images/collage/01_1.jpg'>
                        </div>
                      </div>
                    </a> 
    
                      <div id='panelcollage'> 
                        <p class='panel'>En <span >UpsideDown</span> integramos proyectos integrando un espacio que cambia paradigmas; experimenta y escala soluciones.<br>
                         <span>Explorar, generar ideas y experimentar. </span></p>
                        <div class='bt_green'><a href='<?= site_url('nuestro_metodo'); ?>'>NUESTRO MÉTODO</a></div>
                      </div>
             </div>
           </section>
           
           <!--2SECTION_HORIZONTALBAR2-->
           <!--<section id='horizontal_bar_anima'>
              <div class='wrapper'> 
                <h4>Creemos que las ideas<span style='color:#fff; text-shadow: 0 1px 2px rgba(0,0,0,0.2);'> radicales</span><br>resuelven grandes desafíos </h4>
                <div class='bt_green'><a href='Blog_01.html'>VISITA NUESTRO BLOG</a></div>
              </div>
           </section>-->
           <!--SECTION_QUICKLINKS-->
           <!--<section id='quick_links'>
             <div class='wrapper'>
             
              <a href='filosofia.html#the_team' class='quicklink'>
                <div class='curt_on'></div>
                <p>El equipo</p>
                <div class='ql_line'></div>
                <img src="<php echo base_url();?>images/layout/quicklink_img01.jpg">
                
             </a>
             
            <a href='recursos.html' class='quicklink'>
              <div class='curt_on'></div>
                <p>Recursos</p>
                <div class='ql_line'></div>
                <img src="<php echo base_url();?>images/layout/quicklink_img02.jpg">
            </a>
            
            <a href='' class='quicklink'>
              <div class='curt_on'></div>
                <p style="top:40px;">Medios <br>y prensa</p>
                <div class='ql_line'></div>
                <img src="<php echo base_url();?>images/layout/quicklink_img03.jpg">
            </a>
            
         </div>
       </section>-->
       
     </div>
     <!--carga estilos, javascript y cierra body, html -->
      <?php $this->load->view('estaticos/base/footer'); ?>
  