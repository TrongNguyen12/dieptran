@extends('index')
@section('class-body', 'body-index')
@section('classpages', 'index')
@section('classmain', 'id=fullpage')
@section('content' )
	<section class="section active fp-auto-height slider-wrap">
		<!-- <div class="text-center my-4 logovideo">poster="images/logo.png"
			<video data-autoplay width="" height="" >
			  <source src="images/logodt.mp4" type="video/mp4">
			  <source src="images/logodt.ogg" type="video/ogg">
			Your browser does not support the video tag.
			</video>
		</div> -->
		<div class="text-center logo wow bounceInUp">
			<a href="{{ asset('/') }}" title="">
				<img src="{{ asset('upload/hinhanh/logo').'/'.$common->logo }}" alt="" title=""></a>
		</div>
		<h1 class="s37 text-center bold sabout-tit wow bounceInUp" data-wow-delay=".4s" data-wow-duration=".7s" data-wow-offset="350">
			@if (App::isLocale('vn'))
				@php
    				$tiles = explode("||", $common->company);
	    		@endphp
	    			{{ $tiles[0] }}
	    		@if (count($tiles) > 1)
					<span class="t1 s65">{{ $tiles[1] }}</span>
	    		@endif
	    	@else
	    		@php
    				$tiles = explode("||", $common->companyeg);
	    		@endphp
	    			{{ $tiles[0] }}
	    		@if (count($tiles) > 1)
					<span class="t1 s65">{{ $tiles[1] }}</span>
	    		@endif
			@endif
			
			
		</h1>
		<div class="position-relative">
			<div class="index-slider">
				@foreach ($listSlider as $item)
					<a href="javascript:;" title=""><img src="{{ asset('upload/hinhanh/slider') }}/{{ $item->photo }}" alt="" title="{{ $item->mota }}"></a>
				@endforeach
			</div>
		</div>
	</section>
	<section class="section sabout">
		<div class="container-140">
			<div class="row">
				<div class="col-xl-4 wow fadeInLeft" data-wow-delay="70" data-wow-duration=".4s" data-wow-offset="350">
					<div class="sabout-l">
						@if (App::isLocale('vn'))
							{!! $textdescvi->decs !!}
						@else
							{!! $textdesceg->decs !!}
						@endif
						
					</div>
				</div>
			<div class="col-xl-8 wow fadeInRight" data-wow-delay="70" data-wow-duration=".4s" data-wow-offset="350">
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-9">
						<div class="slider italic text-center video-for">
							@if(App::isLocale('vn'))
								@foreach ($videovi as $item)
									<div class="position-relative video-content">
										<a data-toggle="modal"  data-link="{!! $item->link !!}" data-target="#video-modal" href="javascript:0;" title="">
											<img src="{!! asset('upload/hinhanh/video') !!}/{!! $item->photo !!}" title="" width="" height="" alt="">
											<h3 class="d-flex align-items-center f1 s24 video-modal-tit text-truncate">{{  $item->name}}</h3>
										</a>
									</div>
								@endforeach
							@else
								@foreach ($videoeg as $item)
									<div class="position-relative video-content">
										<a data-toggle="modal"  data-link="{!! $item->link !!}" data-target="#video-modal" href="javascript:0;" title="">
											<img src="{!! asset('upload/hinhanh/video') !!}/{!! $item->photo !!}" title="" width="" height="" alt="">
											<h3 class="d-flex align-items-center f1 s24 video-modal-tit text-truncate">{{  $item->name}}</h3>
										</a>
									</div>
								@endforeach
							@endif
						</div>
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3">
						<div class="m-auto slider video-nav">
							@if (App::isLocale('vn'))
								@foreach ($videovi as $item)
									<div class="d-flex position-relative video-thumb">
										<img src="{!! asset('upload/hinhanh/video') !!}/{!! $item->photo !!}" alt="" title="" width="" height="" class="lazy">
										<h3 class="d-flex align-items-center f1 s10 video-modal-tit text-truncate">{{ $item->name }}</h3>
									</div>
								@endforeach	
							@else
								@foreach ($videoeg as $item)
									<div class="d-flex position-relative video-thumb">
										<img src="{!! asset('upload/hinhanh/video') !!}/{!! $item->photo !!}" alt="" title="" width="" height="" class="lazy">
										<h3 class="d-flex align-items-center f1 s10 video-modal-tit text-truncate">{{ $item->name }}</h3>
									</div>
								@endforeach	
							@endif
							
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section ser">
		<div class="container-flush">
			<h2 class="s25 t1 text-center bold pb-lg-5 pb-4 ser-tit wow bounceInRight" data-wow-delay="30" data-wow-offset="300">{{ trans('home.title1') }}</h2>
			<ul class='kwicks kwicks-horizontal wow fadeInUp' data-wow-delay="70" data-wow-duration=".3s" data-wow-offset="500">
	            @foreach ($listdv as $item)
	            	<li class="kwicks-item">
		            	<a href="{{ asset('dich-vu/'.$item->slug.'-p'.$item->id) }}.html" class="position-relative text-center ser-inside" style="background: url('{{ asset('upload/hinhanh/post') }}/{{ $item->img }}') no-repeat center center;">
			            	<h3 class="bold s24 text-center ser-stit">
			            		<!-- <img src="images/slider2.jpg" alt="" title=""> -->
			            		<span>
			            			@if(App::isLocale('vn'))
					            		@php
					            			$tiles = explode("||", $item->titlehome);
					            		@endphp
					            		@if (count($tiles) > 1)
					            			@foreach ($tiles as $tile)
					            				<span class="d-block">{{ $tile }}</span>
					            			@endforeach
					            		@else
					            			<span class="d-block">{{ $item->titlehome }}</span>
					            		@endif
					            	@else
					            		@php
					            			$tiles = explode("||", $item->nameeg);
					            		@endphp
					            		@if (count($tiles) > 1)
					            			@foreach ($tiles as $tile)
					            				<span class="d-block">{{ $tile }}</span>
					            			@endforeach
					            		@else
					            			<span class="d-block">{{ $item->nameeg }}</span>
					            		@endif
					            	@endif
				            		{{-- <span class="d-block">BAO BÌ SẢN PHẨM</span> --}}
			            		</span>
			            		
			            	</h3>
		            	</a>
	            	</li>
	            @endforeach
	        </ul>
		</div>
	</section>

	<section class="section brand" style="background: linear-gradient(to right, rgba(17,255,0,.2), rgba(0,250,255,.2),rgba(0,9,255,.2), rgba(212,0,255,.2)), url('./images/brandbg.png');background-size: cover;background-position: center center;">
		<div class="container-140">
			<div class="row no-gutters justify-content-center">
				<div class="col-lg-10">
					<h2 class="s25 t1 text-center bold brand-tit wow bounceInLeft" data-wow-delay="30" data-wow-offset="300">{{ trans('home.title2') }}</h2>

					<div class="brand-slider wow fadeInUp" data-wow-delay="70" data-wow-duration=".3s" data-wow-offset="250">
						@foreach ($logodt as $item)
							<div class="brand-item text-center">
								<img src="{{ asset('upload/hinhanh/slider') }}/{{ $item->photo }}" alt="" title="">
							</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section scontact">
		<div class="scontact-first" style="background: url(./images/bg1.png) no-repeat center right;">
			<div class="container-140">
				<div class="row justify-content-center">
					<div class="col-lg-8">
						<h2 class="s25 t1 text-center scontact-tit bold wow bounceInRight" data-wow-delay="20" data-wow-offset="200">{{ trans('home.title3') }}</h2>
						<div class="s29 text-center scontact-sum m-auto wow fadeInUp" data-wow-delay="30" data-wow-offset="300">
							@if (App::isLocale('vn'))
								{!! $common->contentcode !!}
							@else
								{!! $common->contentcodeeg !!}
							@endif
						</div>
						<div class="row justify-content-center">
							<div class="col-lg-10">
								<ul class="s23 list-unstyled contact-list wow fadeInUp" data-wow-delay="40" data-wow-offset="400">
									<li><i class="fas fa-map-marker-alt"></i>
										@if (App::isLocale('vn'))
											{{ $common->address }}
										@else
											{{ $common->addresseg }}
										@endif
									</li>
									<li class="bold"><i class="fas fa-phone"></i> 
										<div class="">
											<a href="tel:{{ $common->phone }}" title="">
												{{ $common->phone }}
											</a>
												- 
											<a href="tel:{{ $common->didong }}" title="">
												{{ $common->didong }}
											</a>
										</div>
									</li>
									<li><i class="fas fa-envelope"></i> 
										<div class="">
											@php
												$email = explode("||", $common->email);
											@endphp
											@if (count($email) >1 )
												@foreach ($email as $em)
						            				<a href="mailto:{{ $em }}" title="">{{ $em }}</a> -
						            			@endforeach
											@else
												<a href="mailto:{{ $email[0] }}" title="">{{ $email[0] }}</a>
											@endif
										</div>
									</li>
								</ul>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>
		

		<div class="container-flush maps wow fadeInUp" data-wow-delay="50">
			{!! $common->codemap !!}
		</div>
	</section>
@endsection