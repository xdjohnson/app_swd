<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>

		<!-- ==============================================
		Title and Meta Tags
		=============================================== -->
		<meta charset="utf-8">
		<title>Safe Web Design | Business Websites | Showcase</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- ==============================================
		Favicons
		=============================================== -->
		<link rel="shortcut icon" href="application/libraries/assets/mainImage_largeLetters_ico.ico">
		
		<!-- ==============================================
		CSS
		=============================================== -->    
		<link rel="stylesheet" href="application/libraries/css/bootstrap.min.css">
		<link rel="stylesheet" href="application/libraries/css/font-awesome.css">
		<link rel="stylesheet" href="application/libraries/css/flexslider.css">
		<link rel="stylesheet" href="application/libraries/css/seq-js-swd.css" />
		<link rel="stylesheet" href="application/libraries/css/colorbox.css" />
		<link rel="stylesheet" href="application/libraries/css/swd.css">
		<link rel="stylesheet" href="application/libraries/css/swd-cyan.css">
		
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
		
		<script type="text/javascript" src="application/libraries/js/libs/modernizr.min.js"></script>

		<style type="text/css">
			@media ( min-width: 768px ) and ( max-width: 991px ) {
				#about {
					margin-top: 50px;
				}
			}
			#ajax_pending {
				display: none;
				position:fixed;
				top:250px;
				width:100px;
				left:45%;
				z-index:75;
			}
			#no_results_found {
				display: none;
				color:red;
				margin-left:10px;
			}
			#gallery div {
				margin-bottom:10px;
			}
			.pager-item {
				margin-top:0px !important;
				float:left;
			}
			.mt20 {
				margin-top:20px;
			}
			#image_show {
				display:none;
				position:absolute;
			}
			#paginator {
				margin:auto;
			}
			.row-flex{
				padding-top:10px;
			}
			@media ( min-width: 768px ) {
				.first_image {
					margin-left:-224px;
				}
				.second_image {
					margin-left:-310px;
				}
				.third_image {
					margin-left:-380px;
				}
				.row-flex {
					width:735px;
				}
				#paginator {
					width:100%;
				}
				.col-sm-4 + .col-sm-4 {
					margin-left:10px;
				}
				.row-flex > .col-sm-4:first-child {
					margin-left:5px;
				}
			}
			@media ( max-width: 767px ) {
				.first_image, .second_image, .third_image {
					margin-left:-310px;
				}
				.row-flex {
					width:236px;
				}
				#paginator {
					width:350px;
				}
			}
			@media ( max-width: 768px ){
				#no_results_found {
					top:0px;
				}
			}
			@media ( min-width: 768px ) and ( max-width: 991px ) {
				#no_results_found {
					top:0px;
				}
			}
			.swd_responsive {
				position:absolute;
				background:url( 'application/libraries/assets/responsive.png' );
				width:95px;
				height:58px;
				margin-left:145px;
				margin-top:0px;
			}
			.first_image, .second_image, .third_image {
				/*height:390px;*/
				width:390px;
			}
			@media ( min-width: 871px ) and ( max-width: 991px ){
				.container{
					width:970px;
				}
			}
			@media ( min-width: 768px ) and ( max-width: 1080px ){
				.navbar-header{
					width:250px;
				}
			}
		</style>

	</head>
  
	<body data-spy="scroll" data-target="#main-nav" data-offset="400">
		<div id="ajax_pending"><img alt="Pending" src="application/libraries/assets/ajax-loader.gif" /></div>

		<div id="main-nav" class="navbar navbar-fixed-top">
			<div class="container">
			
				<div class="navbar-header">
					
					<!-- ======= LOGO ========-->
					<a class="navbar-brand scrollto" href="#home">Safe Web Design</a>
					
				</div>
				
			</div><!--End container -->
		</div><!--End main-nav -->
	
		<section id="about" class="white-bg padding-top-bottom">
		
			<div class="container features">
				
				<h1 class="section-title">Welcome!</h1>
				<p class="section-description">Choose your website by category or keyword.</p>

				<div class="row">

					<form id="search-form" class="col-sm-12" action="" method="post" novalidate>
					
						<div class="col-sm-4 col-sm-offset-2">
							<label class="control-label" for="search-keyword">By category</label>
							<div id="category-block" class="btn-group btn-block">
								<?=@$drop_down_categories?>
							</div>
						</div>

						<div class="col-sm-4">
							<label class="control-label" for="search-keyword">By keyword<span id="no_results_found">No results.</span></label>
							<div class="input-group">
								<input id="search_keyword_txt" name="search_keyword" placeholder="Enter keyword" type="text" class="form-control requiredField label_better" data-error-empty="Please enter keyword(s)">
								<span class="input-group-btn">
									<button id="go_btn" class="btn btn-default" type="button">Go!</button>
								</span>
							</div>
						</div>

					</form><!-- End search-form -->

				</div>
				
				<div class="row" style="margin-top:50px;">

					&nbsp;

				</div>

				<div id="gallery" class="gray-bg row">

				</div>
			
			</div>
			
		</section>
		
		<footer id="main-footer" class="color-bg light-typo">
		
			<div class="container text-center">
				<p>&copy;<?=date( 'Y' )?> Safe Web Design</p>
			</div>
			
		</footer>
		
		
		<!-- ==============================================
		SCRIPTS
		=============================================== -->	
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="application/libraries/js/libs/jquery-1.8.2.min.js">\x3C/script>')</script>
		
		<script src="application/libraries/js/libs/bootstrap.min.js"></script>
		<script src="application/libraries/js/jquery.easing.1.3.min.js"></script>
		<script src="application/libraries/js/jquery.scrollto.js"></script>
		<script src="application/libraries/js/jquery.flexslider.min.js"></script>
		<script src="application/libraries/js/jquery.fitvids.js"></script>
		<script src="application/libraries/js/jquery.fittext.js"></script>
		<script src="application/libraries/js/waypoints.min.js"></script>
		<script src="application/libraries/js/jquery.countTo.js"></script>
		<script src="application/libraries/js/jquery.easypiechart.js"></script>
		<script src="application/libraries/js/jquery.sequence-min.js"></script>
		<script src="application/libraries/js/jquery.colorbox-min.js"></script>
		<script src="application/libraries/js/contact.js"></script>
		<script src="application/libraries/js/swd.js"></script>
		
		<script type="text/javascript">

			$( document ).ready(function(){

				$swd = {
					user_on_first_page:function(){
						if ( $( '#select_page > option:selected' ).val() == 1 ){
							return true
						}
						
						return false
					}
					,user_on_last_page:function(){
						var last_option_value = $( '#select_page > option:last' ).val()
						,selected_option_value = $( '#select_page > option:selected' ).val()
						if ( selected_option_value == last_option_value ){
							return true
						}
						
						return false
					}
					,pagination_select_change:function(){
						var page_num = $( '#select_page > option:selected' ).val().trim()

						switch( $swd.controller ){
							case 'categorysearch':
								post_data = { categorysearch: $( '#categories_ddn > option:selected' ).val().trim(), page: page_num }
							break

							case 'keywordsearch':
								post_data = { keywordsearch: $swd.keywords, page: page_num }
							break
						}

						if ( ! post_data ){
							return
						}

						$.ajax({
							type: 'POST'
							,url: $swd.controller
							,data: post_data
						})
						.done(function( resp ){
							var respObj = JSON.parse( resp )
							if ( respObj.status === 0 ){
								alert( respObj.data )
								return
							}

							// generate new gallery
							$swd.gallery_clean()
							$swd.gallery_build( respObj, false )
						})
						.fail(function(){

						})
					}
					,pagination_click:function( pager_item ){
						if ( $swd.user_on_first_page() && pager_item == 'Previous' ){
							return
						}
						if ( $swd.user_on_last_page() && pager_item == 'Next' ){
							return
						}

						var current_page = $( '#select_page > option:selected' ).val()
						,post_data = null

						if ( pager_item == 'Previous' ){
							current_page--
						} else {
							current_page++
						}

						switch( $swd.controller ){
							case 'categorysearch':
								post_data = { categorysearch: $( '#categories_ddn > option:selected' ).val(), page: current_page }
							break

							case 'keywordsearch':
								post_data = { keywordsearch: $swd.keywords, page: current_page }
							break
						}

						if ( ! post_data ){
							return
						}

						$.ajax({
							type: 'POST'
							,url: $swd.controller
							,data: post_data
						})
						.done(function( resp ){
							var respObj = JSON.parse( resp )
							if ( respObj.status === 0 ){
								alert( respObj.data )
								return
							}

							// generate new gallery
							$swd.gallery_clean()
							$swd.gallery_build( respObj, false )

							// adjust the page selector either backwards or forwards
							var select_page = document.getElementById( 'select_page' )
							,si = select_page.selectedIndex
							if ( pager_item == 'Previous' ){
								select_page.selectedIndex = --si
							}
							if ( pager_item == 'Next' ){
								select_page.selectedIndex = ++si
							}
						})
						.fail(function(){

						})						
					}
					,gallery_create_pagination:function( respObj, el_gallery ){
						// get number of pages
						var num_pages = 1
						if ( respObj.data.image_count > 24 ){
							num_pages = Math.ceil( respObj.data.image_count / 24 )
						}

						// if it's only one page, then return
						if ( num_pages == 1 ){
							return
						}

						// create the pagination
						var ul_pager
						,li
						,a
						,pager_items = [ 'Previous', 'Select', 'Next' ]
						,pager_item
						,pager_items_length = pager_items.length
						,div_row
						,div_col

						div_row = document.createElement( 'div' )
						div_row.className = 'row'
						div_row.id = 'paginator'

						for ( var i = 0; i < pager_items_length; i++ ){
							div_col = document.createElement( 'div' )
							div_col.className = ( pager_items[i] == 'Previous' ) ? 'col-sm-2 col-sm-offset-3 pager-item' : 'col-sm-2 pager-item'

							if ( pager_items[i] != 'Select' ){
								ul_pager = document.createElement( 'ul' )
								ul_pager.className = 'pager'

								li = document.createElement( 'li' )

								a = document.createElement( 'a' )
								a.setAttribute( 'onclick', "$swd.pagination_click( '" + pager_items[i] + "' ); return false;" )
								a.setAttribute( 'href', '#' )
								a.appendChild( document.createTextNode( pager_items[i] ) )

								li.appendChild( a )
								ul_pager.appendChild( li )

								div_col.appendChild( ul_pager )
							} else {
								var select = document.createElement( 'select' )
								,option

								select.id = 'select_page'
								select.className = 'form-control mt20'
								select.onchange = function(){
									$swd.pagination_select_change()
								}

								for ( var j = 0; j < num_pages; j++ ){
									option = document.createElement( 'option' )
									option.value = j + 1
									if ( j == 0 ){
										option.selected = true
									}
									option.appendChild( document.createTextNode( 'Page: ' + ( j + 1  ) ) )
									select.appendChild( option )
								}
								div_col.appendChild( select )
							}
							div_row.appendChild( div_col )
						}
						el_gallery.appendChild( div_row )
					}
					,gallery_build:function( respObj, createPagination ){
						var parent = document.getElementById( 'gallery' )
						,row_div
						,img_index = 0
						,img_show
						,row_counter = 0

						if ( createPagination ){
							$swd.gallery_create_pagination( respObj, parent )
						}

						if ( ! respObj.data.srcs ){
							$swd.oopsNoResultsFound_show()
							return
						}

						while ( respObj.data.srcs[img_index] ){
							row_counter++

							// create the row
							row_div = document.createElement( 'div' )
							row_div.className = 'row row-flex'
							row_div.style.margin ='auto'

							// add three images to the row_div, if each image exists
							for ( var i = 0; i < 3; i++) {
								if ( respObj.data.srcs[img_index] ){
									$swd.create_image_section( respObj, row_div, img_index, row_counter, i )
									img_index++
								} else {
									break
								}
							}

							parent.appendChild( row_div )
						}
					}
					,categories_ddn_select_change: function(){
						var option_value = $( '#categories_ddn option:selected' ).val().trim()

						if ( option_value == 0 ){
							return
						}

						$.ajax({
							type: 'POST'
							,url: 'categorysearch'
							,data: { categorysearch: option_value }
						})
						.done(function( resp ){
							$swd.controller = 'categorysearch'
							var respObj = JSON.parse( resp )
							if ( respObj.status === 0 ){
								alert( respObj.data )
								return
							}

							$swd.gallery_clear()
							$swd.gallery_build( respObj, true )

							$( '#search_keyword_txt' ).val( '' )
						})
						.fail(function(){
							alert( 'Request ended.  Please try again.' )
						})
					}
					,create_image_section:function( respObj, parent, img_index, row_counter, classesIndex ){

						// initialize variables
						var img
							,img_show
							,a
							,br_1, br_2
							,retail_price_1, retail_price_2
							,col_div
							,responsive_div
							,div_around_a
							,div_around_img_show
							,data_div_1, data_div_2
							,outer_span_1, outer_span_2
							,inner_span_1, inner_span_2
							,classes = [ 'first_image', 'second_image', 'third_image' ]
							,to = null

						// create the div that goes around the img
						div_around_a = document.createElement( 'div' )
						div_around_a.style.padding = 10 + 'px'
						div_around_a.style.width = 235 + 'px'
						div_around_a.style.backgroundColor = 'white'

						// create and append the data div
						data_div_1 = document.createElement( 'div' )
						data_div_2 = document.createElement( 'div' )
						outer_span_1 = document.createElement( 'span' )
						outer_span_2 = document.createElement( 'span' )
						inner_span_1 = document.createElement( 'span' )
						inner_span_2 = document.createElement( 'span' )
						retail_price_1 = document.createElement( 'span' )
						retail_price_2 = document.createElement( 'span' )
						br_1 = document.createElement( 'br' )
						br_2 = document.createElement( 'br' )

						data_div_1.style.height		= data_div_2.style.height		= 5	+ 'px'
						outer_span_1.style.color	= 'gray'
						outer_span_2.style.color	= 'white'
						outer_span_1.style.marginTop= outer_span_2.style.marginTop	= 25 + 'px'
						inner_span_1.style.color	= 'black'
						inner_span_2.style.color	= 'white'
						retail_price_1.style.color	= 'red'
						retail_price_1.style.float	= 'right'
						retail_price_2.style.color	= '#00DDDD'
						retail_price_2.style.float	= 'right'

						retail_price_1.appendChild( document.createTextNode( '$' + respObj.data.retail_price[img_index] ) )
						inner_span_1.appendChild( document.createTextNode( respObj.data.tid[img_index] ) )
						outer_span_1.appendChild( document.createTextNode( 'Template Id: ' ) )
						outer_span_1.appendChild( inner_span_1 )
						outer_span_1.appendChild( retail_price_1 )
						data_div_1.appendChild( outer_span_1 )

						retail_price_2.appendChild( document.createTextNode( '$' + respObj.data.retail_price[img_index] ) )
						inner_span_2.appendChild( document.createTextNode( respObj.data.tid[img_index] ) )
						outer_span_2.appendChild( document.createTextNode( 'Template Id: ' ) )
						outer_span_2.appendChild( inner_span_2 )
						outer_span_2.appendChild( retail_price_2 )
						data_div_2.appendChild( outer_span_2 )

						// create the main image tag with attributes and the show image tag with attributes
						img	= document.createElement( 'img' )
						img.setAttribute( 'src', respObj.data.srcs[img_index] )
						img.setAttribute( 'alt', respObj.data.alts[img_index] )
						img.setAttribute( 'style', 'width:214px; height:214px' )
						img_show = document.createElement( 'img' )
						img_show.src = respObj.data.srcs[img_index]
						img_show.alt = respObj.data.alts[img_index]

						div_around_img_show = document.createElement( 'div' )
						div_around_img_show.id = 'show_image_' + img_index
						div_around_img_show.style.padding = 10 + 'px'
						div_around_img_show.style.backgroundColor = 'gray'
						div_around_img_show.style.display = 'none'
						div_around_img_show.style.position = 'absolute'
						div_around_img_show.style.marginTop = -10 + 'px'
						div_around_img_show.style.zIndex = 10
						div_around_img_show.style.cursor = 'pointer'
						div_around_img_show.className = classes[classesIndex]
						div_around_img_show.tid = respObj.data.tid[img_index]
						div_around_img_show.price = respObj.data.price[img_index]
						div_around_img_show.retail_price = respObj.data.retail_price[img_index]

						if ( respObj.data.demos[img_index] == 0 ){
							var span = document.createElement( 'span' )
							if ( window.ActiveXObject ){
								span.style.filter = 'alpha(opacity=' + 80 + ')'
							} else {
								span.style.opacity = 0.80
							}
							span.style.backgroundColor = 'black'
							span.style.color = 'white'
							span.style.position = 'absolute'
							span.style.padding = 10 + 'px'
							span.onmouseover = function(){
								$swd.span_event = true
							}
							span.onmouseout = function(){
								$swd.span_event = true
							}
							span.appendChild( document.createTextNode( 'Demo Unavailable' ) )
							div_around_img_show.appendChild( span )
						}

						if ( respObj.data.demos[img_index] == 1 ){
							div_around_img_show.onclick = function(){
								window.open(
									'<?=site_url("demo")?>/' + this.price.length + this.price + this.tid + '/',
									'_blank'
								)
							}
						} else {
							div_around_img_show.onclick = function(){
								$swd.flash_demo_unavailable( this )
							}
						}

						div_around_img_show.onmouseout = function(){
							if ( $swd.span_event ){
								$swd.span_event = false
								return
							}

							var el = $( '#' + div_around_img_show.id + ' > span:first' )
							if ( el.length > 0 ){
								if ( el.is( ':hover' ) ){
									return
								}
							}

							this.style.display = 'none'
						}
						img.onmouseover = function(){						
							var image_show = document.getElementById( div_around_img_show.id )
							$swd.store_clear()
							$swd.store.push( image_show )
							image_show.style.display = 'inline'
						}

						// create column div and append anchor
						col_div = document.createElement( 'div' )
						col_div.className = 'col-sm-4'
						col_div.style.width = 235 + 'px'
						col_div.style.padding = 0 + 'px'

						// if image is responsive,
						// then create a responsive div as sibling of column div,
						// and append it to the parent
						if ( respObj.data.responsives[img_index] ){
							responsive_div = document.createElement( 'div' )
							responsive_div.className = 'swd_responsive'
							col_div.appendChild( responsive_div )
						}
						div_around_a.appendChild( img )
						div_around_a.appendChild( div_around_img_show )
						div_around_a.appendChild( data_div_1 )
						div_around_img_show.appendChild( img_show )
						div_around_img_show.appendChild( data_div_2 )

						col_div.appendChild( div_around_a )

						// append column div to parent
						parent.appendChild( col_div )
					}
					,gallery_clear:function(){
						var gallery = document.getElementById( 'gallery' )

						if ( ! gallery.firstChild.nextSibling ){
							return
						}

						while ( gallery.firstChild.nextSibling ){
							gallery.removeChild( gallery.firstChild.nextSibling )
						}
					}
					,gallery_clean:function(){
						var paginator = document.getElementById( 'paginator' )

						while ( paginator.nextSibling ){
							paginator.parentNode.removeChild( paginator.nextSibling )
						}
					}
					,oopsNoResultsFound_show:function(){
						$( '#no_results_found' ).show()
						setTimeout(function(){
							$( '#no_results_found' ).hide()
						},3000)
					}
					,search_keyword_txt_submit:function(){
						$.ajax({
							type: 'POST'
							,url: 'keywordsearch'
							,data: { keywordsearch: $( '#search_keyword_txt' ).val().trim() }
						})
						.done(function( resp ){
							$swd.controller = 'keywordsearch'
							$swd.keywords = $( '#search_keyword_txt' ).val().trim()

							var respObj = JSON.parse( resp )

							if ( respObj.data == -1 ){
								$( '#no_results_found' ).show()
								setTimeout(function(){
									$( '#no_results_found' ).hide()
								}, 5000)
							} else {
								$swd.gallery_clear()
								$swd.gallery_build( respObj, true )
								document.getElementById( 'categories_ddn' ).selectedIndex = 0
							}
						})
						.fail(function(){
							console.log( 'request failed' )
						})
					}
					,flash_demo_unavailable:function( obj ){
						var span = obj.getElementsByTagName( 'span' )[0]
						,text = ['white', 'black', 'white']
						,bg = ['black', 'white', 'black']
						,i = 0
						,txt_len = text.length
						,intervalNum

						span.style.color = 'black'
						span.style.backgroundColor = 'white'

						intervalNum = setInterval(function(){
							if ( i > txt_len ){
								clearInterval( intervalNum )
							} else {
								span.style.color = text[i]
								span.style.backgroundColor = bg[i]
							}
							i++
						}, 125)
					}
					,store_clear:function(){
						var length = $swd.store.length
						if ( length == 0 ){
							return
						}

						for ( var i = 0; i < length; i++ ){
							$swd.store[i].style.display = 'none'
						}

						$swd.store = []
					}
					,store:[]
					,controller:null
					,keywords:null
					,span_event:false
				}

				$( document ).ajaxStart(function(){
					$( '#ajax_pending' ).show()
				}).ajaxStop(function(){
					$( '#ajax_pending' ).hide()
				})

				$( '#go_btn' ).click(function(){
					$swd.search_keyword_txt_submit()
				})

				$( '#categories_ddn' ).change(function(){
					$swd.categories_ddn_select_change()
				})

				$( '#search_keyword_txt' ).keypress(function(e){
					var code = ( e.keyCode ) ? e.keyCode : e.which
					if ( code == 13 ){
						$swd.search_keyword_txt_submit()
						return false
					}
				})
			})
		</script>
		
	</body>
	
</html>