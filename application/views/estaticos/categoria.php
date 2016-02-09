<!--carga estilos, titulo e inicia body -->
<?php $this->load->view('estaticos/base/header'); ?>
<!--STAGE-->
<div id='stage_interno' class='stage_labo'>
</div>
<!--CONTENT-->
<div id='content_in'>
	<!--cargamos navegacion por categorias-->
	<?php $this->load->view('estaticos/base/nav_categorias'); ?>
	<!--2SECTION_CONTENT-->
	<section id='content_academia'>
		<div class='wrapper'>
			<div>
				<div class='bloque_info' style="margin-bottom: 0">
					<h1><?= $title; ?></h1>
					<p class='highlights01' style='width:100%; top:0;'><?= $descripcion; ?></p>
				</div>
				<?php if($posts){ ?>
				<ul id='panel_academia' style="position:relative;top:-60px">
					<?php foreach ($posts as $p){ ?>
					<li>
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
								<p class="l-h-12 that-gray-bastard"><?= substr($p->texto,0,120) ; ?> ...</p>
							</div>
							
						</li>
						<?php $last_id = $p->p_id; } ?>
					</ul>
					<div class="before"><img src='<?= base_url(); ?>images/layout/preloader.gif' /></div>
					<input type="hidden" value="<?= echo $last_id; ?>" id="last-id" />
					<input type="hidden" value="<?= echo site_url($post_url); ?>" id="post-url" />
					<input type="hidden" value="<?= echo site_url($cat_url); ?>" id="cat-url" />
					<input type="hidden" value="<?= echo base_url(); ?>" id="base-url" />
					<?php } else{ ?>
					<p class='highlights01' style='width:100%; border-top: 1px solid #999;  padding-top: 40px'>Por el momento no existen entradas en esta categoría.</p>
					<?php }?>
				</div>
				
			</div>
		</section>
	</div>
	<!--lo siguiente solo se usa para usarlo como "componente" al traer por ajax el resto de post -->
	<li class="ajax-post-template">
		<a class="ajax-link" href="">
			<div class='panel_title'>Ver Más</div>
			<div class='ql_line'></div>
			<div class='curt_on'></div>
			<div class="post-img-cont">
			</div>
			</a>
			<div class="post-container">
				<a href="" class="post-titulo-cat"></a>
				<span class="post-comment-count"></span>
				<div class="clearfix"></div>
				<h3 class="tx-22 that-gray-bastard ajax-post-title"></h3>
				<p class="l-h-12 that-gray-bastard ajax-post-text"></p>
			</div>
			
		</li>
		<script type="text/javascript">
		function loadMore()
		{
		var id = $("#last-id").val(), 
		getLastId, 
		post=$('.ajax-post-template'),
		urlBase=$("#base-url").val(),
		urlPost=$("#post-url").val(),
		urlCat=$("#cat-url").val();
		if (id != "" || id != "undefined")
		{
		$.ajax({
		type : "POST",
		url : "http://localhost/scrollinfinito/scroll/loadMore",
		data : "lastId=" + id,//la última id
		beforeSend: function()
		{
		$(".before").show();
		},
		success : function(data)
		{
		$(".before").hide();
		var json = JSON.parse(data);
		if(json.res === "success")
		{
		for(datos in json.users)
		{
		html += '<div class="panel panel-info">';
			html += '<div class="panel-heading">';
				html += '<h3 class="panel-title">';
				html += 'Escrito por ' + json.users[datos].name;
				html += '<span class="pull-right">' + json.users[datos].id + '</span>';
				html += '</h3>';
			html += '</div>';
			html += '<div class="panel-body">';
				html += '<p>Escrito por ' + json.users[datos].name + '</p>';
				html += '<p>' + json.users[datos].registro + '</p>';
				html += '<p>' + json.users[datos].email + '</p>';
			html += '</div>';
		html += '</div>';
		getLastId = json.users[datos].id;
		}
		$(".content").append(html);
		}
		else
		{
		moreusers = false;
		$(".content").append("<div class='alert alert-danger text-center'>Ya no hay más users</div>");
		}
		$(".lastId").attr("id",getLastId);
		},
		error: function()
		{
		//hacer algo cuando ocurra un error
		}
		});
		}
		}
		
		//actuamos en en evento del scroll
		var scrollLoad = true;
		
		$(window).scroll(function () {
		if (scrollLoad && $(window).scrollTop() >= $(document).height() - $(window).height() - 10) {
		scrollLoad = false;
		loadMore();
		}
		});
		</script>
	</html>
	<!--carga estilos, javascript y cierra body, html -->
	<?php $this->load->view('estaticos/base/footer'); ?>