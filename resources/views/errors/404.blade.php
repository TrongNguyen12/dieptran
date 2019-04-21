<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{ asset('public') }}/">
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/fullpage.min.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<!-- <link rel="stylesheet" type="text/css" href="css/jquery.mmenu.all.css"> -->
	<link rel="stylesheet" type="text/css" href="fonts/fontawesome/fontawesome-all.css">
	<link rel="stylesheet" href="css/animate.css">
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="icon" href="images/logo4.png" type="image/x-icon"/>
</head>
<body class="@yield('class-body')">
	<div class="wrapper @yield('classpages')">
		<div class="loading">
			<img src="images/dethi.svg" alt="" title="">
		</div>
		<header class="b1 top">
			<div class="container-fluid">
				@include('templates.header')
			</div>
		</header>
		<main @yield('classmain')>
	        
	     	<h4>Không tìm thấy trang này !</h4>
	        <footer class="section ft">
				@include('templates.footer');
			</footer>
	    </main>

		<!-- modal video -->
		<div class="modal fade video-modal" id="video-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h3 class="modal-title" id="exampleModalCenterTitle">Video</h3>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body d-sm-inline-block d-none">
		        <iframe width="964" height="542" src="https://www.youtube.com/embed/gNhBiw9pgUo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		      </div>
		    </div>
		  </div>
		</div>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<!-- <script src="js/jquery.mmenu.min.all.js"></script> -->
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/fullpage.js"></script>
	<script src="js/scrolloverflow.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src='js/jquery.easy-pie-chart.js'></script>
	<script src="js/jquery.kwicks.min.js"></script>
	<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
	<script src="js/main.js"></script>
	    

	<script type="text/javascript">
		$(document).ready(function() {
			//preventDefault();
			var width = $(window).width();
	        if(width > 767 ){
				var myFullpage = new fullpage('#fullpage', {
			        /*anchors: ['firstPage', 'secondPage', '3rdPage', '4rdPage', '5rdPage', '6rdPage'],*/
			        //sectionsColor: ['#C63D0F', '#1BBC9B', '#7E8F7C'],
			        /*css3: true,*/
			        scrollBar:true,
			        scrollOverflow: true
					//scrollHorizontally: true,
			        /*afterRender: function(){
	                    new WOW().init();
	                }*/
			    });
	        }
		});
		
	    
	</script>
	<script type='text/javascript'>
        $(document).ready(function() {
        	var width = $(window).width();
        	if(width > 767 && $('.kwicks').length){
	        	$('.kwicks').kwicks({
	                maxSize : '50%',
	                behavior: 'menu'
	            });
        	}
            $(window).resize(function(event) {
            	/* Act on the event */
            	var width = $(window).width();
	        	if(width > 767 && $('.kwicks').length){
		        	$('.kwicks').kwicks({
		                maxSize : '50%',
		                behavior: 'menu'
		            });
	        	}
            });
        });
    </script>
    <script>
		$(document).ready(function() {
			var time = 2000;
			if($(window).width() < 768){
				time = 4000;
			}
			setTimeout(function() {
		  	$('.percentage').easyPieChart({
			  animate: 2000,
			  lineWidth: 3,
			  size: 140,
			  //backgroundColor: '#333',
			  scaleColor: '#fff',/*false*/
			  //barColor:'#ffc107',
			  trackColor:'#fff',
			  onStep: function(value) {
			    this.$el.find('span').text(Math.round(value));
			  },
			  onStop: function(value, to) {
			    this.$el.find('span').text(Math.round(to));
			  }
			});
		}, time);
			
			
		});
    </script>

	{!! $common->analytics !!}
</body>
</html>