@extends('index')
@section('classpages', 'about-page')
@section('content' )
	<section class="banner wow fadeInLeft" style="background: linear-gradient(rgba(3,70,148,.3), rgba(3,70,148,.4)), url('{{ asset('upload/hinhanh/banner/'.$bntrangdv->name) }}') no-repeat center center;background-size: cover">
		<div class="container">
			<h1 class="bold s50 text-center contact-tit text-white banner-tit wow fadeInRight" data-wow-delay="300" data-wow-duration=".8s">{{ trans('home.title1') }}</h1>
		</div>
	</section>
	@if (count($listSevices)>0)
		<section class="serpage">
			<div class="container-flush serpage-wrap">
				@foreach ($listSevices as $item)
					<div class="section ser-item">
						<div class="row no-gutters">
							<div class="col-lg-7 col-md-6 col-sm-6">
								<div class="text-center position-relative ser-img">
									<div class="serpage-slider">
										@foreach ($listImages as $img)
											@if ($img->id_cat == $item->id)
												<div class="serpage-item">
													<a href="javascript:;" title="">
														<img src="{{ asset('upload/hinhanh/post/lib') }}/{{ $img->name }}" alt="" title="">
													</a>
												</div>
											@endif
										@endforeach
									</div>
									<h2 class="bold s27 ser-stit"><a href="{{ asset('dich-vu/'.$item->slug.'-p'.$item->id) }}.html" title="">
										@if (App::isLocale('vn'))
											{{ $item->name }}
										@else
											@php
												$nameeg = str_replace('||', ' ', $item->nameeg);
											@endphp
											{{ $nameeg }}
										@endif
									</a></h2>
								</div>
							</div>
							<div class="col-lg-5 col-md-6 col-sm-6 d-flex align-items-center justify-content-center">
								<div class="ser-item-info">
									<div class="ser-item-content">
										@if (App::isLocale('vn'))
											{!! $item->shortdes !!}
										@else
											{!! $item->shortdeseg !!}
										@endif 
										
									</div>
									<div class="text-center">
										<a href="{{ asset('dich-vu/'.$item->slug.'-p'.$item->id) }}.html" title="" class="btn see-btn">{{ trans('home.title9') }}</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			</div>
		</section>
		@else
			<h3>Chưa có nội dung</h3>
	@endif


	<section class="ship">
		<div class="container-140">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<ul class="list-unstyled text-center ship-list">
						<li class="wow fadeInUp" data-wow-delay=".2s">
							<img src="images/icon11.png" alt="" title="">
							<span class="d-block shipt-tit">
								{!! trans('home.title13') !!}
							</span>
						</li>
						<li class="wow fadeInUp" data-wow-delay=".4s">
							<img src="images/icon10.png" alt="" title="">
							<span class="d-block shipt-tit">{!! trans('home.title14') !!}
						</li>
						<li class="wow fadeInUp" data-wow-delay=".6s">
							<img src="images/icon7.png" alt="" title="">
							<span class="d-block shipt-tit">{!! trans('home.title15') !!}
						</li>
						<li class="wow fadeInUp" data-wow-delay=".8s">
							<img src="images/icon8.png" alt="" title="">
							<span class="d-block shipt-tit">{!! trans('home.title16') !!}
						</li>
						<li class="wow fadeInUp" data-wow-delay="1s">
							<img src="images/icon9.png" alt="" title="">
							<span class="d-block shipt-tit">{!! trans('home.title17') !!}
						</li>
					</ul>
				</div>
			</div>
			
		</div>
	</section>
@endsection