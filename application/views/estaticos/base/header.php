<?php $this->load->helper('html');
$this->load->helper('url');?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name='description' content=''>
    <meta name='keywords' content=''>
    <meta name='author' content='Upside Down'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title><?= $title ; ?>Upside Down</title>
    <link rel="shortcut icon" href="<?php echo base_url();?>images/layout/favicon.ico" type="image/x-icon">
<link rel="icon" href="<?php echo base_url();?>images/layout/favicon.ico" type="image/x-icon">
    <link href='<?php echo base_url();?>css/style_general.css' rel='stylesheet' type='text/css' media="screen"/>
    <link href='<?php echo base_url();?>css/style.css' rel='stylesheet' type='text/css' media="screen"/>
        <link href='<?php echo base_url();?>css/davidcp90.css' rel='stylesheet' type='text/css' media="screen"/>
    <script type="text/javascript" src="<?php echo base_url();?>scripts/jquery.js"></script>
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>scripts/html5shiv.js"></script>
    <script src="<?php echo base_url();?>scripts/html5shiv-printshiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--HEADER-->
    <header id="header_top">
      <div class='wrapper'>
        <section>
          <ul>
            <li><a href='<?php echo site_url('contactenos'); ?>'>CONTÁCTENOS</a></li>
            <li><a href='<?php echo site_url('blog'); ?>'>BLOG</a></li>
          </ul>
        </section>
        <nav>
          <ul>
            <li><a href="<?php echo site_url(); ?>">INICIO</a></li>
            <li><a href='<?php echo site_url('upsidedown'); ?>'>UPSIDEDOWN</a></li>
            <li><a href='<?php echo site_url('el-2065'); ?>'>EL 2065</a></li>
            <li><a href='<?php echo site_url('desafios'); ?>'>DESAFÍOS</a></li>
            <li><a href='<?php echo site_url('labs'); ?>'>LABS</a></li>
            <li><a href='<?php echo site_url('academia'); ?>'>ACADEMIA</a></li>
            <li><a href='<?php echo site_url('empresa'); ?>'>EMPRESA</a></li>
          </ul>
        </nav>
        <a href='<?php echo site_url(); ?>'><div></div></a>
      </div>
    </header>
    
    <!--ASIDE SOCIAL-->
    <aside>
      <ul>
        <li><a href='http://www.facebook.com' id='social_icon_fac'></a></li>
        <li><a href='' id='social_icon_twi'></a></li>
        <li><a href='' id='social_icon_vim'></a></li>
        <li><a href='' id='social_icon_lin'></a></li>
        <li><a href='' id='social_icon_mai'></a></li>
      </ul>
    </aside>