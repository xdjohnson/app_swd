<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>

		<!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
		<title>Safe Web Design | Business Websites</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- ==============================================
		Favicons
		=============================================== -->
		<link rel="shortcut icon" href="application/libraries/assets/mainImage_largeLetters_ico.ico">
		
		<!-- ==============================================
		CSS
		=============================================== -->    
		<link rel="stylesheet" href="/application/libraries/css/bootstrap.min.css">
		<link rel="stylesheet" href="/application/libraries/css/font-awesome.css">
		<link rel="stylesheet" href="/application/libraries/css/flexslider.css">
		<link rel="stylesheet" href="/application/libraries/css/seq-js-swd.css" />
		<link rel="stylesheet" href="/application/libraries/css/colorbox.css" />
		<link rel="stylesheet" href="/application/libraries/css/swd.css">
		<link rel="stylesheet" href="/application/libraries/css/swd-cyan.css">		
		
		<!-- ==============================================
		Fonts
		=============================================== -->
		<link href='http://fonts.googleapis.com/css?family=Dosis:600,700,800' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic,900' rel='stylesheet' type='text/css'>
		
		<!-- ==============================================
		JS
		=============================================== -->
			
		<!--[if lt IE 9]>
			<script src="application/libraries/js/respond.min.js"></script>
		<![endif]-->
		
		<script type="text/javascript" src="/application/libraries/js/libs/modernizr.min.js"></script>
		
		
		<style type="text/css">

			.small {
				font-size:14px;
			}
			.adjust-up {
				margin-top:-40px;
			}
			.adjust-down {
				margin-bottom:40px;
			}

			@media ( min-width: 768px ) and ( max-width: 991px ) {
				.p-adjustable{
					margin-top:30px;
				}
			}

			#blog-container{
				margin-top:100px;
			}

			#video-thumbnails-menu {
				margin: 0px auto;
			}

			#video-thumbnails-scroller {
				padding:0px;
				overflow:hidden;
			}

			#video-thumbnails td {
				width:150px;
				height:;
			}

			#video-thumbnails td + td {
				padding-left:20px;
			}

			#page-header-data {

			}

			#page-header-data > li {
				display:inline-block;
				vertical-align: top;
			}

			.float-right {
				float:right;
			}

			.dark-text {
				color:black;
			}

			.pad-top-10 {
				padding-top: 10px;
			}

			.scroll-left-indicator {
				position:absolute;
				top:30px;
				left:20px;
				font-size:30px;
				color:#428BCA;
				display:none;
			}

			.scroll-right-indicator {
				position:absolute;
				top:30px;
				right:20px;
				font-size:30px;
				color:#428BCA;
				display:none;
			}

			#video-thumbnails-scroller:hover .scroll-left-indicator {
				display:inline;
			}

			#video-thumbnails-scroller:hover .scroll-right-indicator {
				display:inline;
			}
		</style>

	</head>
  
	<body data-spy="scroll" data-target="#main-nav" data-offset="400">
		<!-- ==============================================
		MAIN NAV
		=============================================== -->
		<div id="main-nav" class="navbar navbar-fixed-top">
			<div class="container">
			
				<div class="navbar-header">
				
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-nav">
						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
					
					<!-- ======= LOGO ========-->
					<a class="navbar-brand scrollto" href="#home">Safe Web Design</a>
					
				</div>
				
				<div id="site-nav" class="navbar-collapse collapse">
					<ul id="menu-links" class="nav navbar-nav navbar-right">
						<li class="sr-only">
							<a href="#home" class="scrollto">Home</a>
						</li>
						<li>
							<a href="#about" class="scrollto">Benefits</a>
						</li>
						<li>
							<a href="#pricing" class="scrollto">Prices</a>
						</li>
						<li>
							<a href="#contact" class="scrollto">Contact</a>
						</li>
						<li id="blog-link" class="">
							<a href="">Blog</a>
						</li>
					</ul>
				</div><!--End navbar-collapse -->
				
			</div><!--End container -->
			
		</div><!--End main-nav -->

		<div id="blog-container" class="container">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Funny Videos</h3>
				</div>




				<div class="panel-body">

					Search Funny Videos
					<div class="input-group">
						<input id="video-thumbnail-search-tbx" type="text" class="form-control" />
						<span class="input-group-btn">
							<button id="video-search-btn" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
						</span>
					</div><!-- input-group -->

					<div class="row pad-top-10">
						<div class="col-md-4">

							<div class="list-group">
								<a href="#" class="list-group-item active">Cras justo odio</a>
								<a href="#" class="list-group-item">Dapibus ac facilisis in<span class="badge">14</span></a>
								<a href="#" class="list-group-item">Morbi leo risus<span class="badge">13</span></a>
								<a href="#" class="list-group-item">Porta ac consectetur ac<span class="badge">12</span></a>
								<a href="#" class="list-group-item">Vestibulum at eros<span class="badge">11</span></a>
							</div>

						</div>
						<div class="col-md-8">

						<div id="video-thumbnails-container">
							<div id="video-thumbnails-scroller">
								<table id="video-thumbnails">
									<tr onmousedown="return false">
										<td><img src="/application/libraries/images/thumb.png" onclick="$swd.get('-jz4DEljlVw')"/></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
										<td><img src="/application/libraries/images/thumb.png" /></td>
									</tr>
								</table> <!-- #video-thumbnails -->
								<i id="scroll-left-indicator" class="fa fa-arrow-circle-o-left scroll-left-indicator"></i>
								<i id="scroll-right-indicator" class="fa fa-arrow-circle-o-right scroll-right-indicator"></i>
							</div> <!-- #video-thumbnails-scroller -->
						</div> <!-- #video-thumbnails-container -->

						<p class="dark-text">Panel content: I really liked this video because it has the coolest features in the whole wide world.  I am certain that all the people in the sensible world would know that this video contains the most illustrious hilarity that is avaialbe in the norther hemishpere, barring Canada.  I am certain that yoou will like it also.</p>
						<div class="embed-responsive embed-responsive-4by3">
							<iframe width="560" height="315" src="//www.youtube.com/embed/hPQVYiP1QAo" allowfullscreen></iframe>
						</div>
						</div>
					</div> <!-- .row[0] -->

				</div> <!-- .panel-body -->
			</div> <!-- .panel -->
		</div> <!-- #blog-container -->

		<!-- ==============================================
		SCRIPTS
		=============================================== -->	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="application/libraries/js/libs/jquery-1.8.2.min.js">\x3C/script>')</script>
		<script type="text/javascript">

			$(document).ready(function(){
				var videoTh = document.getElementById('video-thumbnails')
				, videoThSc = document.getElementById('video-thumbnails-scroller')
				, sli = document.getElementById( 'scroll-left-indicator' )
				, sri = document.getElementById( 'scroll-right-indicator' )
				, init_offsetLeft = videoTh.offsetLeft
				, scroll_indicators = function(){
					var videoTh = document.getElementById('video-thumbnails')
					, videoThSc = document.getElementById('video-thumbnails-scroller')
					, limit = -1 * ( videoTh.clientWidth - videoThSc.clientWidth ) + init_offsetLeft

					if ( parseInt( videoTh.style.marginLeft ) == 0 || ! videoTh.style.marginLeft ){
						sli.style.display = 'none'
					} else {
						sli.style.display = 'inline'
					}

					if ( videoTh.clientWidth <= videoThSc.clientWidth || videoTh.offsetLeft == limit ){
						sri.style.display = 'none'
					} else {
						sri.style.display = 'inline'
					}
				}

				videoTh.onmouseover = function(){
					scroll_indicators()
				}
				videoTh.onmouseout = function(){
					sli.style.display = sri.style.display = 'none'
				}
				videoTh.onmousedown = function(e) {
					var e = e || event
					,self = this
					,init_x = e.pageX
					,init_marginLeft = ( parseInt( this.style.marginLeft ) ) ? parseInt( this.style.marginLeft ) : 0
					
					this.moved = false
					this.min = document.getElementById( 'video-thumbnails-scroller' ).clientWidth - this.clientWidth
					this.max = 0

					document.onmousemove = function( e ) {
						e = e || event
						var newPos = e.pageX - init_x + init_marginLeft
						if ( self.max >= newPos && newPos >= self.min ){
							self.style.marginLeft = e.pageX - init_x + init_marginLeft + 'px'
							self.moved = true							
						}
						if ( self.max < newPos ){
							self.style.marginLeft = 0 + 'px'
						} else if( newPos < self.min ) {
							self.style.marginLeft = self.min + 'px'
						}
						scroll_indicators()
					}
					this.onmouseup = function( e ) {
						e = e || event
						document.onmousemove = null
					}
				}

				setTimeout(function(){
					document.getElementById( 'blog-link' ).className = 'active'
				}, 750)		

//document.getElementById('ball').ondragstart = function() { return false }

				$swd = {
					get:function(str)
					{
						if ( ! document.getElementById( 'video-thumbnails' ).moved ){
							console.log( str )
						}
					}
				}
			})

		</script>




<!-- 
		 <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
		<script type="text/javascript">
		$( '#video-thumbnails' ).draggable()
		</script>
-->
<!-- 
		<script src="/application/libraries/js/libs/bootstrap.min.js"></script>
		<script src="/application/libraries/js/jquery.easing.1.3.min.js"></script>
		<script src="/application/libraries/js/jquery.scrollto.js"></script>
		<script src="/application/libraries/js/jquery.flexslider.min.js"></script>
		<script src="/application/libraries/js/jquery.fitvids.js"></script>
		<script src="/application/libraries/js/jquery.fittext.js"></script>
		<script src="/application/libraries/js/waypoints.min.js"></script>
		<script src="/application/libraries/js/jquery.countTo.js"></script>
		<script src="/application/libraries/js/jquery.easypiechart.js"></script>
		<script src="/application/libraries/js/jquery.sequence-min.js"></script>
		<script src="/application/libraries/js/jquery.colorbox-min.js"></script>
		<script src="/application/libraries/js/contact.js"></script>
		<script src="/application/libraries/js/swd.js"></script>
 -->

		<script type="text/javascript">
/*
			var $swd = {
				get_form_data:function(){
					return {
						contact_name:$( '#contact_name' ).val(), contact_email:$( '#contact_email' ).val(), contact_message:$( '#contact_message' ).val()
					}
				}

				,form_data_valid:function(){
					var validation_errors = $swd.validation_errors()
					if ( validation_errors.length > 0 ){
						return false
					}

					return true
				}

				,set_validation:function( name, human_name, requirements ){
					var form_data = $swd.get_form_data()
					,value = form_data[name]
					,requireds = requirements.split( '|' )
					,length = requireds.length
					,new_err = ''

					for ( var i = 0; i < length; i++ ){
						switch( requireds[i] ){
							case 'required':
								new_err += ( value.trim().length > 0 ) ? "" : human_name + ' is required.' + "\r\n"
							break

							case 'valid_email':
								new_err += ( value.trim().match( /.+@.+\..+/i ) ) ? "" : human_name + ' is invalid.' + "\r\n"
							break

							case 'alpha':
								new_err += ( value.trim().match( /[a-z ]+/i ) ) ? "" : human_name + ' must contain letters and spaces only.' + "\r\n"
							break

							case 'alpha_num':
								new_err += ( value.trim().match( /[a-z 0-9]+/i ) ) ? "" : human_name + ' must contain letters, numbers, and spaces only.' + "\r\n"
							break
						} // switch

						if ( new_err != '' ){
							$swd.error_string += new_err
							return
						}

					} // for loop
				}

				,validation_errors:function( reset ){
					var temp = $swd.error_string

					if ( reset ){
						$swd.validation_error_reset()
					}
					return temp
				}

				,validation_error_reset:function(){
					$swd.error_string = ''
				}

				,init:function(){

				}

				,error_string:''
			} // $swd

			$( '#send_message_button' ).click(function(){

				$swd.validation_error_reset()

				$swd.set_validation( 'contact_name', 'Your name', 'required|alpha' )
				$swd.set_validation( 'contact_email', 'Your email address', 'required|valid_email' )
				$swd.set_validation( 'contact_message', 'Your message', 'required|alpha_num' )

				if ( $swd.form_data_valid() ){
					var post_data = $swd.get_form_data()

					$.ajax({
						type: 'POST'
						,url: 'webmessage'
						,data: post_data
					}).done(function(){
						$( '#contact_name' ).val('')
						$( '#contact_email' ).val('')
						$( '#contact_message' ).val('')
						alert( 'Message sent.' )
					}).fail(function(){
						alert( 'Sending message failed.' )
					})
				} else {
					alert( $swd.validation_errors() )
				}

			})

			setTimeout(function(){
				document.getElementById( 'blog-link' ).className = 'active'
			}, 750)			
*/
		</script>
	</body>
	
</html>