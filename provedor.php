<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Free Snow Bootstrap Website Template | Contact :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/estilo.css">
<!--Icon-Font-->
<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
            $(".dropdown img.flag").addClass("flagvisibility");

            $(".dropdown dt a").click(function() {
                $(".dropdown dd ul").toggle();
            });
                        
            $(".dropdown dd ul li a").click(function() {
                var text = $(this).html();
                $(".dropdown dt a span").html(text);
                $(".dropdown dd ul").hide();
                $("#result").html("Selected value is: " + getSelectedValue("sample"));
            });
                        
            function getSelectedValue(id) {
                return $("#" + id).find("dt a span.value").html();
            }

            $(document).bind('click', function(e) {
                var $clicked = $(e.target);
                if (! $clicked.parents().hasClass("dropdown"))
                    $(".dropdown dd ul").hide();
            });


            $("#flagSwitcher").click(function() {
                $(".dropdown img.flag").toggleClass("flagvisibility");
            });
        });
     </script>
<script>
    var tgs = new Array('div','td','tr','th','li','h6','p','h4','a','h1','button');

    var szs = new Array('xx-small','x-small','small','medium','large','x-large','xx-large');
    var startSz = 2;

    function ts(trgt,inc)
    {
        if(!document.getElementById) return
        var d = document,cEl = null,sz = startSz,i,j,cTags;

        sz += inc;
        if(sz < 0) sz = 0;
        if(sz > 6) sz = 6;
        startSz = sz;

        if(!(cEl = d.getElementById(trgt))) cEl = d.getElementsByTagName(trgt)[0];

        cEl.style.fontSize = szs[sz];

        for(i = 0; i < tgs.length; i++)
        {
            cTags = cEl.getElementsByTagName(tgs[i]);
            for(j = 0; j < cTags.length; j++) cTags[j].style.fontSize = szs[sz];
        }
    }
  </script>
 </head>
 <body style="background-image:url('images/findex.jpg')">
	<div class="header">
		<div class="container">
			<div class="row">
			  <div class="col-md-12">
				 <div class="header-left">
					 <div class="logo">
						<a href="index.html"><img src="images/logo234.png" alt=""/></a>
					 </div>
					 <div class="menu">
						  <a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav" id="nav">
						    	<li><a href="shop.html">Productos</a></li>
						    	<li><a href="team.html">¿Quién somos?</a></li>
						    	
						    	<li><a href="shop.html">Sucursales</a></li>
								<li><a href="contact.html">Contacto</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
				<!-- Código de instalación Cliengo para www.Laquita.com --> <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/6195d392f1a7b9002aa251a9/6195dca4dbe0c3002a59c535.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
	            <div class="header_right">
	    		  <!-- start search-->
				      <div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"> </span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="js/classie.js"></script>
						<script src="js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
				    <ul class="icon1 sub-icon1 profile_img">
					 <li><a class="active-icon c1" href="#"> </a>
						<ul class="sub-icon1 list">
						  <div class="product_control_buttons">
						  	<a href="#"><img src="images/edit.png" alt=""/></a>
						  		<a href="#"><img src="images/close_edit.png" alt=""/></a>
						  </div>
						   <div class="clear"></div>
						  <li class="list_img"><img src="images/1.jpg" alt=""/></li>
						  <li class="list_desc"><h4><a href="#">velit esse molestie</a></h4><span class="actual">1 x
                          $12.00</span></li>
						  <div class="login_buttons">
							 <div class="check_button"><a href="checkout.html">Check out</a></div>
							 <div class="login_button"><a href="login.html">Login</a></div>
							 <div class="clear"></div>
						  </div>
						  <div class="clear"></div>
						</ul>
					 </li>
				   </ul>
		           <div class="clear"></div>
	       </div>
	      </div>
		 </div>
	    </div>
		
	</div>
     <div class="main">
      <div class="shop_top">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12 contact"><h2>Quieres ser nuestro proveedor?</h2>
					  <hr>
					  <h3>Escribenos sobre tu empresa</h3>
				  <form method="post">
					  

					<div class="to">
                     	<input type="text" placeholder="Nombre Completo" name="name" required="">
						<input type="text" placeholder="email" name="Email" required="" value="salasrayasdiego13@gmail.com" disabled>
						<input type="text" placeholder="Tipo de Local co el que cuentas" name="Tlocal" required="">
						<input type="text" placeholder="Numero de Telefono" name="Telefono" required="">  
						<input type="text" placeholder="Ciudad de Residencia" name="Ciudad" required="">  
						<input type="text" placeholder="Por que el interes en vender nuestros quesos?" name="interes" required="">
					</div>
					<div class="text">
	                   <textarea placeholder="Comentarios" name="Comentarios"></textarea>
	                   <div class="form-submit">
			           <input type="submit" name="Enviar"><br>
			           </div>
	                </div>
	                <div class="clear"></div>
                   </form>
				   <?php
					include("correo2.php");
				   ?>
			     </div>
		    </div>
	     </div>
	   </div>
	  </div>
	  <div class="containerr">
	<input type="checkbox" id="btn-mas">
	<div class="redes">
		<a href="javascript:ts('body',1)" class="fa fa-zoom-in">T+</a>
		<a href="javascript:ts('body',-1)" class="fa fa-zoom-out">T-</a>
	</div>
	<div class="btn-mas">
		<label for="btn-mas" class="fa fa-universal-access"></label>
	</div>
</div>
	  <div class="footer">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Productos</h4>
						<li><a href="#">Quesos Oaxaca</a></li>
						<li><a href="#">Quesos Panela</a></li>
						<li><a href="#">Quesos Ranchero</a></li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Acerca de</h4>
						<li><a href="#">¿Quién somos?</a></li>
						<li><a href="#">Preguntas frecuentes</a></li>
						
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Atencion al cliente</h4>
						<li><a href="#">Contáctanos</a></li>
						<li><a href="#">Envío y seguimiento de pedidos </a></li>
						<li><a href="#">Devoluciones fáciles </a></li>
						
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Newsletter</h4>
						<div class="footer_search">
						   <form>
							<input type="text" value="Enter your email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your email';}">
							<input type="submit" value="Go">
						   </form>
						</div>
						<ul class="social">	
						  <li class="facebook"><a href="#"><span> </span></a></li>
						  <li class="twitter"><a href="#"><span> </span></a></li>
						  <li class="instagram"><a href="#"><span> </span></a></li>	
						  <li class="pinterest"><a href="#"><span> </span></a></li>	
						  <li class="youtube"><a href="#"><span> </span></a></li>										  				
						</ul>
						   
					</ul>
				</div>
			</div>
			<div class="row footer_bottom">
				<div class="copy">
				   
				</div>
				  <dl id="sample" class="dropdown">
					<dt><a href="#"><span>Change Region</span></a></dt>
					<dd>
						<ul>
							<li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
							<li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
							<li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
							<li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
							<li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
							<li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
						</ul>
					 </dd>
					 </dl>
			   </div>
		</div>
	</div>
</body>	
</html>