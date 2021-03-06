<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Contacto</title>
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
						    	<li><a href="team.html">??Qui??n somos?</a></li>
						    	
						    	<li><a href="provedor.php">Proveedores</a></li>
								<li><a href="contact.html">Contacto</a></li>								
								<div class="clear"></div>
							</ul>
							<script type="text/javascript" src="js/responsive-nav.js"></script>
				    </div>							
	    		    <div class="clear"></div>
	    	    </div>
				<!-- C??digo de instalaci??n Cliengo para www.Laquita.com --> <script type="text/javascript">(function () { var ldk = document.createElement('script'); ldk.type = 'text/javascript'; ldk.async = true; ldk.src = 'https://s.cliengo.com/weboptimizer/6195d392f1a7b9002aa251a9/6195dca4dbe0c3002a59c535.js?platform=view_installation_code'; var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ldk, s); })();</script>
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
				<div class="col-md-7">
					<div class="map">
				  		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3733.9890238576463!2d-100.39778758604166!3d20.629304206672735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35afdcd97cdb3%3A0xba9d72f8b9141653!2sProductos%20L%C3%A1cteos%20La%20Quinta%20S.A.%20de%20C.V.%20%2F%20Quesos%20La%20Quinta%20%2F%20Planta%20Qro1!5e0!3m2!1ses-419!2smx!4v1637956695056!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				  	</div>
				</div>
				<div class="col-md-5">
					<p class="m_8">Somos una empresa Queretana con m??s de 30 a??os de crear productos l??cteos de calidad para toda la Familia. Disfruta de quesos la quinta y mas sin salir de casa ??ahora es muy facil! </p>
					<p class="m_8">Cualquier duda o incoveniente estamos a tus ??rdenes. </p>
					<div class="address">
				                <p>Quer??taro</p>
						   		
						   		<p>M??xico</p>
				   		<p>Tel??fono:442 479 7198</p>
				 	 	<p>Email: <span> info@lacteoslaquinta.com.mx</span></p>
				   		<p>Siguenos en: <span>Facebook</span>, <span>Twitter</span></p>
				   </div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 contact">
				  <form method="post">
					<div class="to">
                     	<input type="text" placeholder="name" name="name" required="">
						<input type="text" placeholder="email" name="email" required="" value="rojashernandezmiguel237@gmail.com">
						<input type="text" placeholder="tema" name="tema" required="">
					</div>
					<div class="text">
	                   <textarea placeholder="mensaje" name="msg"></textarea>
	                   <div class="form-submit">
			           <input type="submit" name="Enviar"><br>
			           </div>
	                </div>
	                <div class="clear"></div>
                   </form>
				   <?php
					include("correo.php");
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
		<a id="lectura" href="#" class="fa fa-sound"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-volume-up-fill" viewBox="0 0 16 16">
			<path d="M11.536 14.01A8.473 8.473 0 0 0 14.026 8a8.473 8.473 0 0 0-2.49-6.01l-.708.707A7.476 7.476 0 0 1 13.025 8c0 2.071-.84 3.946-2.197 5.303l.708.707z"/>
			<path d="M10.121 12.596A6.48 6.48 0 0 0 12.025 8a6.48 6.48 0 0 0-1.904-4.596l-.707.707A5.483 5.483 0 0 1 11.025 8a5.483 5.483 0 0 1-1.61 3.89l.706.706z"/>
			<path d="M8.707 11.182A4.486 4.486 0 0 0 10.025 8a4.486 4.486 0 0 0-1.318-3.182L8 5.525A3.489 3.489 0 0 1 9.025 8 3.49 3.49 0 0 1 8 10.475l.707.707zM6.717 3.55A.5.5 0 0 1 7 4v8a.5.5 0 0 1-.812.39L3.825 10.5H1.5A.5.5 0 0 1 1 10V6a.5.5 0 0 1 .5-.5h2.325l2.363-1.89a.5.5 0 0 1 .529-.06z"/>
		</svg></a>
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
						<li><a href="#">??Qui??n somos?</a></li>
						<li><a href="#">Preguntas frecuentes</a></li>
						
					</ul>
				</div>
				<div class="col-md-3">
					<ul class="footer_box">
						<h4>Atencion al cliente</h4>
						<li><a href="#">Cont??ctanos</a></li>
						<li><a href="#">Env??o y seguimiento de pedidos </a></li>
						<li><a href="#">Devoluciones f??ciles </a></li>
						
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
	<script src="js/speaker.js"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>

    <script src="js/app.js"></script>
    <script>
        $("#lectura").click(function() {


            if ($("#lectura").hasClass("active-lectura")) {
                $("#lectura").removeClass("active-lectura");
                console.log("LLLLLLLLLLLLLLLLLLLLLLLL");
            } else {
                console.log("ssssssssssss");
                $("#lectura").addClass("active-lectura");
            }


        });
        $("a,label,h1,h2,p,span,button").mouseenter(function() {
            if ($("#lectura").hasClass("active-lectura")) {
                var text = $(this).text();
                ejecutaVoz(text);
            }

        });
    </script>
</body>	
</html>