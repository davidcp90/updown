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
              <h1>Empresa y Emprendedores</h1>
               <h1 style="font-size:36px;">"Nunca dudes que un <span style='color:#ff6f00'>pequeño grupo de ciudadanos</span><br> pensantes y comprometidos pueden<span style='color:#ff6f00'> cambiar el mundo.</span> <br> De hecho, son los únicos que lo han logrado"</h1> <br><h1 style="font-size:18px;">— Margaret Mead</h1>
              <br>
              <hr>
              </div>
            </section>
       
       <!--2SECTION_CONTENT-->
       <section id='content_empresa'>
       	<div class='wrapper'>
       		<div> 

                <div class='bloque_info'>
                    <p class='highlights01' style='width:100%;'>Encontrar caminos novedosos de crecer o encontrar ideas originales de nuevos negocios siempre será un desafío para las compañías y emprendedores. Encontrar estas oportunidades es el foco de la agenda de directivos y emprendedores a nivel global. Como respuesta, un cambio importante de paradigma esta emergiendo. De productos y servicios inspirados tan sólo en la evolución de la ciencia y la tecnología, hoy concentramos nuestros esfuerzos en intentar desarrollar soluciones originales a problemas humanos.
                    <br><br>
                    De ahí que las grandes oportunidades de innovación se encuentren en la posibilidad de desarrollar, implementar y escalar soluciones originales a desafíos que afectan a millones de personas tales como la pobreza, la educación, la nutrición, la energía, la vivienda, las ciudades y el medio ambiente. Esta mirada distinta a las fuentes de innovación transforma a nuestros países del tercer mundo en los nuevos epicentros de los esfuerzos por desarrollar nuevos negocios y soluciones que hagan de nuestro mundo un mejor lugar para vivir para todos. 
                    <br><br>
                    Upsidedown inspira y ayuda a compañías y emprendedores a desarrollar, implementar y escalar estas soluciones. Creemos que la innovación que crea valor económico y social incrementa las posibilidades de crecimiento de largo plazo de las compañías así como el bienestar de la población y del planeta. Aplicar estas nuevas reglas a los negocios comienza por descubrir nuevas oportunidades y un cambio en la manera de pensar. Luego viene la acción. Esta es la razón por la cual hemos construido nuestros servicios alrededor de dos pilares: ofrecer inspiración y datos sobre tendencias, necesidades globales y oportunidades de innovación, de una parte. De otra, proveer entrenamiento y acompañamiento que ayude a desarrollar nuevos negocios.
                    </p>
                </div>

                <ul id='panel_empresa'>
                	<li>
                    	<a href='<?= site_url('upsidestatic/empresa_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div>
                        	<img src="<?= base_url(); ?>images/inspiracion/01.jpg">
                        </a>
                        <p>Inspiración</p>
                        <p>Estas líneas contienen la explicación del servicio. Este texto esta pendiente.Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/empresa_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div>
                        	<img src="<?= base_url(); ?>images/inspiracion/02.jpg">
                        </a>
                        <p>Entrenamiento</p>
                        <p>Estas líneas contienen la explicación del servicio. Este texto esta pendiente.Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/empresa_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div>
                        	<img src="<?= base_url(); ?>images/inspiracion/03.jpg">
                        </a>
                        <p>Desarrollo de proyectos de innovación</p>
                        <p>Estas líneas contienen la explicación del servicio. Este texto esta pendiente. Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/empresa_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div>
                        	<img src="<?= base_url(); ?>images/inspiracion/04.jpg">
                        </a>
                        <p>Diseño e implementación de negocios</p>
                        <p>Estas líneas contienen la explicación del servicio. Este texto esta pendiente. Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis.</p>
                    </li>
                    <li>
                    	<a href='<?= site_url('upsidestatic/empresa_uno'); ?>'>
                    		<div class='panel_title'>Ver caso</div>
                            <div class='ql_line'></div> 
                            <div class='curt_on'></div>
                        	<img src="<?= base_url(); ?>images/inspiracion/05.jpg">
                        </a>
                        <p>Diseño de ecosistemas de innovación abierta y emprendimiento corporativo</p>
                        <p>Estas líneas contienen la explicación del servicio. Este texto esta pendiente. Donec ipsum nulla, tempor nec volutpat et, posuere a lorem. Proin et mauris aliquet, tempus mi quis. </p>
                    </li>
                </ul>
              </div>
            
       </div>     
       </section>  
     </div>
     
     
      <!--carga estilos, javascript y cierra body, html -->
    <?php $this->load->view('estaticos/base/footer'); ?>
