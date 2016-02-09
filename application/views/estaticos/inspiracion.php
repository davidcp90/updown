  <!--carga estilos, titulo e inicia body -->
  <?php $this->load->view('estaticos/base/header'); ?>

     <!--STAGE-->
     <div id='stage_interno' class='stage_meto'> 
     </div>

     
     <!--CONTENT-->
     <div id='content_in'>
       
       <!--2SECTION_CONTENT-->
       <section id='content_inspiracion'>
       	<div class='wrapper'>
       		<div>
            	<h1>Algo de inspiración</h1>
                <ul id='panel_inspiracion'>
                	<li>
                    	<a href='<?= site_url('upsidestatic/inspiracion_uno'); ?>'>
                        	<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div> 
                            <img src="<?= base_url(); ?>images/inspiracion/01.jpg">     
                        </a>
                        <p>Experiencia de usuario</p>
                        <p>Dandole forma a la interacción humana</p>
                        <p>Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/inspiracion_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div> 
                        	<img src="<?= base_url(); ?>images/inspiracion/02.jpg">
                        </a>
                        <p>Experiencia de usuario</p>
                        <p>Dandole forma a la interacción humana</p>
                        <p>Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/inspiracion_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div> 
                        	<img src="<?= base_url(); ?>images/inspiracion/03.jpg">
                        </a>
                        <p>Experiencia de usuario</p>
                        <p>Dandole forma a la interacción humana</p>
                        <p>Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/inspiracion_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div> 
                        	<img src="<?= base_url(); ?>images/inspiracion/04.jpg">
                        </a>
                        <p>Experiencia de usuario</p>
                        <p>Dandole forma a la interacción humana</p>
                        <p>Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/inspiracion_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div> 
                        	<img src="<?= base_url(); ?>images/inspiracion/05.jpg">
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