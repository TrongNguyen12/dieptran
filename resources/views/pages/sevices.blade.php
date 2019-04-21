@extends('index')
@section('classpages', 'about-page')

@section('content' )
	<section class="text-center position-relative sbanner">
		<!-- <img class="wow fadeInDown" src="images/bannerser1.png" alt="" title=""> -->
		<div class="index-slider ser1-slider">
			@foreach ($listImages as $item)
				<a title=""><img data-lazy="{{ asset('upload/hinhanh/post/lib') }}/{{ $item->name }}" alt="" title=""></a>
			@endforeach
		</div>
		<h1 class="bold s27 text-center sbanner-tit wow bounceIn" data-wow-delay="300" data-wow-duration=".8s">
			<span>
				@if (App::isLocale('vn'))
					{{ $listSevices[0]->Dichvu->name }}
				@else
					{{ str_replace("||", " ", $listSevices[0]->Dichvu->nameeg) }}
				@endif
					
			</span>
		</h1>
		<a data-toggle="tooltip" data-placement="top" title="{{ $dvkhac[0]->name }}" href=" {{ asset('dich-vu/'.$dvkhac[0]->slug.'-p'.$dvkhac[0]->id) }}.html" title="" class="ar ar-left"><img src="images/left2.png" alt="" title=""></a>
		<a data-toggle="tooltip" data-placement="top" title="{{ $dvkhac[1]->name }}" href="{{ asset('dich-vu/'.$dvkhac[1]->slug.'-p'.$dvkhac[1]->id) }}.html" title="" class="ar ar-right"><img src="images/right2.png" alt="" title=""></a>
	</section>

	<section class="serpage">
		<div class="container-140">
			<div class="sdetail-tabs">
				@foreach ($listSevices as $item)
					<div class="nav-link">
						<div class="nav-link-eff">
							<span class="l1"></span>
		                    <span class="l2"></span>
		                    <span class="l3"></span>
		                    <span class="l4"></span>
						</div>
				    	<img src="
				    	{{ asset('upload/hinhanh/sevices') }}/{{ $item->photo }}" alt="" title="">
				    		<span class="sdetail-tit bold s30 text-truncate text-truncate">
				    		@if (App::isLocale('vn'))
				    			{{ $item->title }}
				    		@else
				    			{{ $item->titleeg }}
				    		@endif
					    	
						</span>
					</div>
				@endforeach
			</div>

			<div class="sdetail-tabscontent">
				@foreach ($listSevices as $item)
					<div class="position-relative">
					<div class="b4 sdetail-content-wrap">
						<h3 class="s24 sdetail-time">{{ $item->dateUpdate }}</h3>
						<h2 class="bold s50 sdetail-tab-tit">
							@if (App::isLocale('vn'))
				    			{{ $item->title }}
				    		@else
				    			{{ $item->titleeg }}
				    		@endif
						</h2>
						<div class="sdetail-content">
							@if (App::isLocale('vn'))
				    			{!! $item->content !!}
				    		@else
				    			{!! $item->contenteg !!}
				    		@endif
							
						</div>
			
						<div class="sdetail-cm">
							<div class="fb-comments" data-href="http://tpl.gco.vn/dieptran/" data-width="1000px" data-numposts="5"></div>
			
							<!-- <ul class="s30 list-unstyled sdetail-share">
								<li>Share</li>
								<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" title=""><i class="fab fa-google-plus-g"></i></a></li>
							</ul> -->
						</div>
					</div>
					</div>
				@endforeach
				{{-- <div class="position-relative">
					<div class="b4 sdetail-content-wrap">
						<h3 class="s24 sdetail-time">27 tháng 2 năm 2019</h3>
						<h2 class="bold s50 sdetail-tab-tit">Thiết kế logo độc quyền</h2>
			
						<div class="sdetail-content">
							<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
							<p>Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
						</div>
			
						<div class="sdetail-cm">
							<div class="fb-comments" data-href="http://tpl.gco.vn/dieptran/" data-width="1000px" data-numposts="5"></div>
			
							<!-- <ul class="s30 list-unstyled sdetail-share">
								<li>Share</li>
								<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" title=""><i class="fab fa-google-plus-g"></i></a></li>
							</ul> -->
						</div>
					</div>
				</div>
				<div class="position-relative">
					<div class="b4 sdetail-content-wrap">
						<h3 class="s24 sdetail-time">27 tháng 2 năm 2019</h3>
						<h2 class="bold s50 sdetail-tab-tit">Thiết kế logo độc quyền</h2>
			
						<div class="sdetail-content">
							<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
							<p>Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
						</div>
			
						<div class="sdetail-cm">
							<div class="fb-comments" data-href="http://tpl.gco.vn/dieptran/" data-width="1000px" data-numposts="5"></div>
			
							<!-- <ul class="s30 list-unstyled sdetail-share">
								<li>Share</li>
								<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" title=""><i class="fab fa-google-plus-g"></i></a></li>
							</ul> -->
						</div>
					</div>
				</div>
				<div class="position-relative">
					<div class="b4 sdetail-content-wrap">
						<h3 class="s24 sdetail-time">27 tháng 2 năm 2019</h3>
						<h2 class="bold s50 sdetail-tab-tit">Thiết kế logo độc quyền</h2>
			
						<div class="sdetail-content">
							<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
							<p>Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
						</div>
			
						<div class="sdetail-cm">
							<div class="fb-comments" data-href="http://tpl.gco.vn/dieptran/" data-width="1000px" data-numposts="5"></div>
			
							<!-- <ul class="s30 list-unstyled sdetail-share">
								<li>Share</li>
								<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" title=""><i class="fab fa-google-plus-g"></i></a></li>
							</ul> -->
						</div>
					</div>
				</div>
				<div class="position-relative">
					<div class="b4 sdetail-content-wrap">
						<h3 class="s24 sdetail-time">27 tháng 2 năm 2019</h3>
						<h2 class="bold s50 sdetail-tab-tit">Thiết kế logo độc quyền</h2>
			
						<div class="sdetail-content">
							<p>What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
							<p>Why do we use it? It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
							<p>Where does it come from? Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
						</div>
			
						<div class="sdetail-cm">
							<div class="fb-comments" data-href="http://tpl.gco.vn/dieptran/" data-width="1000px" data-numposts="5"></div>
			
							<!-- <ul class="s30 list-unstyled sdetail-share">
								<li>Share</li>
								<li><a href="#" title=""><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" title=""><i class="fab fa-google-plus-g"></i></a></li>
							</ul> -->
						</div>
					</div>
				</div> --}}
			</div>
		</div>
	</section>
@endsection