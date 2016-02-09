  <!--carga estilos, titulo e inicia body -->
  <?php $this->load->view('estaticos/base/header'); ?>
         
     <!--STAGE-->
     <div id='stage_interno' class='stage_labo'> 
     </div>

     
     <!--CONTENT-->
     <div id='content_in'>

       <!--2SECTION_CONTENT-->
       <section id='content_laboratorio'>
       	<div class='wrapper'>
       		<div>

                <h1>Labs</h1>
                <div class='bloque_info'>
                    <p class='highlights01'><span style='font-weight:bold;'> Este texto esta pendiente </span> Nuestra generación tiene en sus manos la posibilidad de construir un futuro mejor.  La velocidad sin precedentes del cambio tecnológico hoy nos permite encontrar nuevas soluciones a viejos desafíos como la pobreza, el hábitat o la nutrición. La diversidad del mundo actual nos ofrece novedosas formas de arte y pensamiento que desafían paradigmas y nos permiten ver el mundo de distintas formas gracias a la multiplicidad de sensibilidades. Así mismo, buena parte del talento creativo disperso por todo el mundo concentra su esfuerzo en crear nuevas soluciones a nuestros problemas y poder transformarlas en negocios o emprendimientos sociales de gran impacto.</p>
                </div>
            	
                <ul id='panel_laboratorio'>
                	<li>
                    	<a href='<?= site_url('upsidestatic/labs_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div>
                        	<img src="<?php echo base_url();?>images/inspiracion/01.jpg">
                        </a>
                        <p>Experiencia de usuario</p>
                        <p>Dandole forma a la interacción humana</p>
                        <p>Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/labs_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div>
                        	<img src="<?php echo base_url();?>images/inspiracion/02.jpg">
                        </a>
                        <p>Experiencia de usuario</p>
                        <p>Dandole forma a la interacción humana</p>
                        <p>Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/labs_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div>
                        	<img src="<?php echo base_url();?>images/inspiracion/03.jpg">
                        </a>
                        <p>Experiencia de usuario</p>
                        <p>Dandole forma a la interacción humana</p>
                        <p>Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/labs_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div>
                        	<img src="<?php echo base_url();?>images/inspiracion/04.jpg">
                        </a>
                        <p>Experiencia de usuario</p>
                        <p>Dandole forma a la interacción humana</p>
                        <p>Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/labs_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div>
                        	<img src="<?php echo base_url();?>images/inspiracion/05.jpg">
                        </a>
                        <p>Experiencia de usuario</p>
                        <p>Dandole forma a la interacción humana</p>
                        <p>Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                </ul>
              </div>
            
       </div>     
       </section>  
     </div>
     
      <!--carga estilos, javascript y cierra body, html -->
    <?php $this->load->view('estaticos/base/footer'); ?>
