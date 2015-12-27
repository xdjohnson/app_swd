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
				padding-left:5px;
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
				position:relative;
				top:0px;
				/*left: -5px;*/
				font-size:30px;
				color:#428BCA;
				display:none;
			}

			.scroll-right-indicator {
				position:relative;
				top:0px;
				/*right:-5px;*/
				font-size:30px;
				color:#428BCA;
				display:none;
			}

			.scroll-left-indicator:hover, .scroll-right-indicator:hover {
				cursor: default;
			}

			#blog-container:hover .scroll-left-indicator {
				display:inline;
			}

			#blog-container:hover .scroll-right-indicator {
				display:inline;
			}
			@media ( min-width: 768px ) and ( max-width: 991px ) {
				#blog-container {
					margin-top:160px;
				}
			}
			#video-thumbnails a:hover {
				cursor:default;
			}

			#video-thumbnails img {
				border:none;
				margin:0px;
				padding:0px;
			}

			.inline-block {
				display: inline-block;
			}

			.thumbnail {
				margin-bottom: 0px;
			}

			#imgs a {
				display:inline-block;
			}

			.scroll-right-container, .scroll-left-container{
				width:26px;
			}

			.scroll-right-container {
				margin-left:5px;
			}

			.scroll-left-container {
				margin-right:5px;
			}

		</style>

	</head>
  
	<body data-offset="400">
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
					<h3 class="panel-title">Funny Videos - <span id="msg"> </span></h3>
				</div>

				<div id="panel-hover" class="panel-body">
					<div class="row pad-top-10">
						<div class="col-md-3">

							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Special Offer</h3>
								</div>
								<div class="panel-body">
									Like on facebook and get 10% off new web site.
								</div>
							</div>

							Search Funny Videos
							<div class="input-group">
								<input id="video-thumbnail-search-tbx" type="text" class="form-control" />
								<span class="input-group-btn">
									<button id="video-search-btn" class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
								</span>
							</div><!-- input-group -->
							<br>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Video Categories</h3>
								</div>
								<div class="list-group">
									<a href="#" class="list-group-item active">Dogs<span class="badge">14</span></a>
									<a href="#" class="list-group-item">Cats<span class="badge">13</span></a>
									<a href="#" class="list-group-item">Family<span class="badge">12</span></a>
									<a href="#" class="list-group-item">Other<span class="badge">11</span></a>
								</div>
							</div>
						</div> <!-- row[0]col[0] -->
						<div id="video-thumbnails-container-pre" class="col-md-6">
							<!-- iPad -->
							<?php if ( $thumbnail_view == 'iPad' ): ?>
							<table>
								<tr>
									<td id="video-margin-left">
										<div class="scroll-left-container">
											<i id="scroll-left-indicator" class="fa fa-arrow-circle-o-left scroll-left-indicator"></i>
										</div>
									</td>
									<td>
										<div id="iPad-container" style="overflow:auto">
											<div id="imgs" style="width:1800px">
												<a href="#" class="thumbnail active" onclick="return false"><img class="active" src="<?=site_url('application/libraries/images/thumb1.png')?>" onclick="$swd.get('-jz4DEljlVw')"/></a>
												<a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb2.png')?>" alt="img"/></a>
												<a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb3.png')?>" alt="img"/></a>
												<a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb4.png')?>" alt="img"/></a>
												<a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb5.png')?>" alt="img"/></a>
												<a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb6.png')?>" alt="img"/></a>
												<a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb7.png')?>" alt="img"/></a>
												<a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb8.png')?>" alt="img"/></a>
												<a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb9.png')?>" alt="img"/></a>
												<a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb10.png')?>" alt="img"/></a>
												<a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb11.png')?>" alt="img"/></a>
											</div>
										</div>
									</td>
									<td id="video-margin-right">
										<div class="scroll-right-container">
											<i id="scroll-right-indicator" class="fa fa-arrow-circle-o-right scroll-right-indicator"></i>
										</div>
									</td>
								</tr>
							</table>
							<?php endif; ?>
							<!-- non-iPad -->
							<?php if ( $thumbnail_view == 'standard' ): ?>
							<table>
								<tr>
									<td id="video-margin-left"><div id="sli_container" class="scroll-left-container"><i id="scroll-left-indicator" class="fa fa-arrow-circle-o-left scroll-left-indicator"></i></div></td>
									<td>
										<div id="video-thumbnails-container" >
											<div id="video-thumbnails-scroller">
												<table id="video-thumbnails">
													<tr onmousedown="return false">
														<td><a href="#" class="thumbnail active" onclick="return false"><img class="active" src="<?=site_url('application/libraries/images/thumb1.png')?>" onclick="$swd.get('-jz4DEljlVw')"/></a></td>
														<td><a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb2.png')?>" alt="img"/></a></td>
														<td><a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb3.png')?>" alt="img"/></a></td>
														<td><a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb4.png')?>" alt="img"/></a></td>
														<td><a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb5.png')?>" alt="img"/></a></td>
														<td><a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb6.png')?>" alt="img"/></a></td>
														<td><a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb7.png')?>" alt="img"/></a></td>
														<td><a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb8.png')?>" alt="img"/></a></td>
														<td><a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb9.png')?>" alt="img"/></a></td>
														<td><a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb10.png')?>" alt="img"/></a></td>
														<td><a href="#" class="thumbnail" onclick="return false"><img src="<?=site_url('application/libraries/images/thumb11.png')?>" alt="img"/></a></td>
													</tr>
												</table> 
											</div> 
										</div>  
									</td>
									<td id="video-margin-right"><div id="sri_container" class="scroll-right-container"><i id="scroll-right-indicator" class="fa fa-arrow-circle-o-right scroll-right-indicator"></i></div></td>
								</tr>
							</table>
							<?php endif; ?>
							<p class="dark-text">Panel content: I really liked this video because it has the coolest features in the whole wide world.  I am certain that all the people in the sensible world would know that this video contains the most illustrious hilarity that is avaialbe in the norther hemishpere, barring Canada.  I am certain that yoou will like it also.</p>
							<div class="embed-responsive embed-responsive-4by3">
								<iframe width="100%" height="300" src="//www.youtube.com/embed/hPQVYiP1QAo" allowfullscreen></iframe>
							</div>
						</div> <!-- row[0]col[1] -->
						<div class="col-md-3">

							<div class="panel panel-default">
								<div class="panel-heading">
									<h3 class="panel-title">Safe Web Design</h3>
								</div>
								<div class="panel-body">
									<p>Increase sales!</p>
									<p>Get more clients!</p>
									<p>Beat the competition!</p>
									<p>Make more money!</p>
									<p>Like on facebook now!</p>
								</div>
							</div>

						</div> <!-- row[0]col[2] -->
					</div> <!-- row[0] -->
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
				var videoTh =	document.getElementById( 'video-thumbnails' ) || document.getElementById( 'imgs' )
				,	videoThSc = document.getElementById( 'video-thumbnails-scroller' ) || document.getElementById( 'iPad-container' )
				,	sli =		document.getElementById( 'scroll-left-indicator' )
				,	sri =		document.getElementById( 'scroll-right-indicator' )
				,	sli_container = document.getElementById( '' )
				,	sri_container = document.getElementById( '' )
				,	init_offsetLeft = videoTh.offsetLeft
				,	iPad = ( document.getElementById( 'video-thumbnails' ) ) ? false : true
				,set_sli = function( prop, val ){
					if ( ! sli ) return

					switch ( prop ){
						case 'display':
							sli.style.display = val
						break

						case 'onclick':
							sli.onclick = function(){ scroller( val ) }
						break
					}
				}
				,set_sri = function( prop, val ){
					if ( ! sri ) return

					switch ( prop ){
						case 'display':
							sri.style.display = val
						break

						case 'onclick':
							sri.onclick = function(){ scroller( val ) }
						break
					}
				}
				,scroll_indicators = function(){
					var videoTh = document.getElementById( 'video-thumbnails' ) || document.getElementById( 'imgs' )
					, videoThSc = document.getElementById( 'video-thumbnails-scroller' ) || document.getElementById( 'iPad-container' )
					, limit = -1 * ( videoTh.clientWidth - videoThSc.clientWidth ) + init_offsetLeft

					if ( parseInt( videoTh.style.marginLeft ) == 0 || ! videoTh.style.marginLeft ){
						set_sli( 'display', 'none' )
					} else {
						set_sli( 'display', 'inline' )
					}

					if ( videoTh.clientWidth <= videoThSc.clientWidth || videoTh.offsetLeft == limit ){
						set_sri( 'display', 'none' )
					} else {
						set_sri( 'display', 'inline' )
					}
				}
				,scroll_indicators_iPad = function(){
					var videoTh = document.getElementById( 'imgs' )
					,	videoThSc = document.getElementById( 'iPad-container' )
					,	scrollLimit = videoTh.clientWidth - videoThSc.clientWidth

					if ( videoThSc.scrollLeft == 0 ){
						set_sli( 'display', 'none' )
						set_sri( 'display', 'inline' )
					} else if ( ( videoTh.clientWidth - videoThSc.clientWidth - videoThSc.scrollLeft ) == 0 ){
						set_sri( 'display', 'none' )
						set_sli( 'display', 'inline' )
					} else {
						set_sri( 'display', 'inline' )
						set_sli( 'display', 'inline' )
					}
				}
				,scroller = function( str ){
					var videoTh = document.getElementById( 'video-thumbnails' ) || document.getElementById( 'imgs' )
					,	videoThSc = document.getElementById( 'video-thumbnails-scroller' ) || document.getElementById( 'iPad-container' )
					,	scrollable = ( videoTh.clientWidth <= videoThSc.clientWidth ) ? false : true
					,	pointer = 0
					,	move_values

					if ( ! scrollable ){
						return
					}

					function flash(){

					}

					function interval(){
						var retVal = move_values[pointer]
						,	max_pointer = move_values.length - 1

						if ( max_pointer == pointer ){
							pointer = 0
						} else {
							pointer++
						}

						return retVal
					}
					function get_move_values( intgr ){
						var move_scale = [0.01,0.02,0.04,0.07,0.12,0.24,0.24,0.12,0.07,0.04,0.02,0.01]
						,	new_intgrs = []
						,	sum = 0
						, 	temp = 0
						,	diff = 0

						for ( var i in move_scale ){
							temp = intgr * move_scale[i]

							new_intgrs.push( temp )
							sum += temp
						}

						diff = intgr - sum
						new_intgrs[new_intgrs.length - 1] = new_intgrs[new_intgrs.length - 1] + diff

						return new_intgrs
					}
					function view_width(){
						return videoThSc.clientWidth
					}
					function left_width(){
						return Math.abs( parseInt( videoTh.style.marginLeft ) ) || 0
					}
					function right_width(){
						return videoTh.clientWidth - videoThSc.clientWidth - ( Math.abs( parseInt( videoTh.style.marginLeft ) ) || 0 )
					}
					function move_left_view_width(){

						var move_values = get_move_values( view_width() )
						,	new_val
						,	length = move_values.length

						var si = setInterval(function(){
							var marginLeft = parseInt( videoTh.style.marginLeft ) || 0
							if ( length-- ){
								new_val = marginLeft + move_values[length]

								if ( new_val > 0 ){
									videoTh.style.marginLeft = 0 + 'px'
									clearInterval( si )
									scroll_indicators()
									return
								}

								videoTh.style.marginLeft = new_val + 'px'
							} else {
								clearInterval( si )
								scroll_indicators()
							}
						}, 70)
					}
					function move_left_left_width(){
						if ( left_width() == 0 ){
							return
						}

						var move_values = get_move_values( left_width() )
						,	new_val
						,	length = move_values.length

						var si = setInterval(function(){
							var marginLeft = parseInt( videoTh.style.marginLeft ) || 0
							if ( length-- ){
								new_val = marginLeft + move_values[length]

								if ( new_val > 0 ){
									videoTh.style.marginLeft = 0 + 'px'
									clearInterval( si )
									scroll_indicators()
									return
								}

								videoTh.style.marginLeft = new_val + 'px'
							} else {
								var new_marg = videoThSc.clientWidth + videoTh.clientWidth
								videoTh.style.marginLeft = new_marg + 'px'	
								clearInterval( si )
								scroll_indicators()
							}
						}, 70)
					}
					function move_right_view_width(){
						var move_values = get_move_values( view_width() )
						,	new_val
						,	length = move_values.length

						var si = setInterval(function(){
							var marginLeft = parseInt( videoTh.style.marginLeft ) || 0
							if ( length-- ){
								new_val = marginLeft - move_values[length]
								videoTh.style.marginLeft = new_val + 'px'
							} else {
								clearInterval( si )
								scroll_indicators()
							}
						}, 70)
					}
					function move_right_right_width(){
						if ( right_width() == 0 ){
							return
						}

						var move_values = get_move_values( right_width() )
						,	new_val
						,	length = move_values.length

						var si = setInterval(function(){
							var marginLeft = parseInt( videoTh.style.marginLeft ) || 0
							if ( length-- ){
								new_val = marginLeft - move_values[length]
								videoTh.style.marginLeft = new_val + 'px'
							} else {
								var new_marg = videoThSc.clientWidth - videoTh.clientWidth
								videoTh.style.marginLeft = new_marg + 'px'	
								clearInterval( si )
								scroll_indicators()
							}
						}, 70)
					}
					function left_width_iPad(){
						return videoThSc.scrollLeft
					}
					function move_left_view_width_iPad(){
						var move_values = get_move_values( view_width() )
						,	new_val
						,	length = move_values.length

						var si = setInterval(function(){
							var marginLeft = parseInt( left_width_iPad() ) || 0
							if ( length-- ){
								new_val = marginLeft - move_values[length]
								videoThSc.scrollLeft = new_val
							} else {
								clearInterval( si )
								scroll_indicators_iPad()
							}
						}, 70)
					}
					function move_left_left_width_iPad(){
						if ( left_width_iPad() == 0 ){
							return
						}

						var move_values = get_move_values( left_width_iPad() )
						,	new_val
						,	length = move_values.length

						var si = setInterval(function(){
							var marginLeft = parseInt( videoThSc.scrollLeft ) || 0
							if ( length-- ){
								new_val = marginLeft - move_values[length]

								if ( new_val > 0 ){
									videoThSc.scrollLeft = new_val
								} else {
									videoThSc.scrollLeft = 0
									clearInterval( si )
									scroll_indicators_iPad()
								}
							}
						}, 70)
					}
					function right_width_iPad(){
						return videoTh.clientWidth - videoThSc.clientWidth - videoThSc.scrollLeft
					}
					function move_right_view_width_iPad(){
						var move_values = get_move_values( view_width() )
						,	new_val
						,	length = move_values.length
						var si = setInterval(function(){
							var marginLeft = parseInt( left_width_iPad() ) || 0
							if ( length-- ){
								new_val = marginLeft + move_values[length]
								videoThSc.scrollLeft = new_val
							} else {
								clearInterval( si )
								scroll_indicators_iPad()
							}
						}, 70)
					}
					function move_right_right_width_iPad(){
						if ( right_width_iPad() <= 0 ){
							return
						}

						var move_values = get_move_values( right_width_iPad() )
						,	new_val
						,	length = move_values.length

						var si = setInterval(function(){
							var marginLeft = videoThSc.scrollLeft || 0
							if ( length-- ){
								new_val = marginLeft + move_values[length] + 0.75
								if ( new_val > videoTh.clientWidth ){
									videoThSc.scrollLeft = videoTh.clientWidth
									clearInterval( si )
									scroll_indicators_iPad()
								} else {
									videoThSc.scrollLeft = new_val
									scroll_indicators_iPad()
								}
							} else {
								clearInterval( si )
								scroll_indicators_iPad()
							}
						}, 70)
					}

					if ( iPad )
					{
						if ( str == 'left' ){
							if ( view_width() <= left_width_iPad() ){
								move_left_view_width_iPad()
							} else {
								move_left_left_width_iPad()
							}
						} else if ( str == 'right' ){
							if ( view_width() <= right_width_iPad() ){
								move_right_view_width_iPad()
							} else {
								move_right_right_width_iPad()
							}
						}
					}

					if ( ! iPad )
					{
						if ( str == 'left' ){
							if ( view_width() <= left_width() ){
								move_left_view_width()
							} else {
								move_left_left_width()
							}
						} else if ( str == 'right' ){
							if ( view_width() <= right_width() ){
								move_right_view_width()
							} else {
								move_right_right_width()
							}
						}
					}
				}

				videoThSc.onscroll = function(){
					if ( iPad )
						scroll_indicators_iPad()
					else
						scroll_indicators()
				}

				videoTh.onmouseover = function(){
					if ( iPad )
						scroll_indicators_iPad()
					else
						scroll_indicators()
				}
				videoTh.onmousedown = function(e) {
					if ( iPad ){
						return
					}

					var e = e || event
					,	self = this
					,	init_x = e.pageX
					,	init_marginLeft = ( parseInt( this.style.marginLeft ) ) ? parseInt( this.style.marginLeft ) : 0
					,	scrollable = ( this.clientWidth <= videoThSc.clientWidth ) ? false : true
					
					this.moved = false
					this.min = videoThSc.clientWidth - this.clientWidth
					this.max = 0

					document.onmousemove = function( e ) {
						if ( ! scrollable ){
							return
						}

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
				set_sli( 'onclick', 'left' )
				set_sri( 'onclick', 'right' )

				setTimeout(function(){
					document.getElementById( 'blog-link' ).className = 'active'

					$swd.set_thumbnail_width()

					scroll_indicators()
				}, 750)

				$swd = {
					get:function(str){
						if ( ! document.getElementById( 'video-thumbnails' ).moved ){
							console.log( str )
						}
					}
					,gid:function( str ){
						return document.getElementById( str )
					}
					,set_thumbnail_width:function(){
						var a = $( '#video-thumbnails-container-pre' )
						,	b = $swd.gid( 'video-thumbnails-container' )
						,	i = $swd.gid( 'iPad-container' )
						,	c = $('#scroll-left-indicator')
						,	d = $('#scroll-right-indicator')
						,	w = parseInt( a.css( 'width' ) )
						,	l = $swd.gid( 'video-margin-left' )
						,	r = $swd.gid( 'video-margin-right' )

						w = w
							- parseInt( a.css( 'padding-left' ) )
							- parseInt( a.css( 'padding-right' ) )
							- parseInt( a.css( 'margin-left' ) )
							- parseInt( a.css( 'margin-right' ) )
							- parseInt( l.clientWidth )
							- parseInt( r.clientWidth )

						if ( b )
							b.style.width = w +"px"
						if ( i )
							i.style.width = w + 'px'
					}
				}

				window.onresize = $swd.set_thumbnail_width
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
	</body>
	
</html>