@extends('index')
@section('classpages', 'about-page')
@section('meta')
	@if (App::isLocale('vn'))
		<meta name="keywords" content="{!! $data->keywordseo !!}" />
	<meta name="description" content="{!! $data->descriptionseo !!}" />
	@else
		<meta name="keywords" content="{!! $data->keywordseoeg !!}" />
		<meta name="description" content="{!! $data->descriptionseoeg !!}" />
	@endif
@endsection
@section('content' )
	<section class="about-header">
		<div class="container-140">
			<!-- <div class="text-center apage-logo">
				<video autoplay width="" height="" >
				  <source src="images/logodt.mp4" type="video/mp4">
				  <source src="images/logodt.ogg" type="video/ogg">
				Your browser does not support the video tag.
				</video>
			</div> -->
			<div class="text-center py-4 about-logo wow bounceInUp">
				<a href="{{ asset('/') }}" title=""><img src="{{ asset('upload/hinhanh/logo') }}/{{ $common->logo }}" alt="" title=""></a>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-9">
					<div class="text-center apage content">
						<h1 class="s35 bold apage-tit">
							@if (App::isLocale('vn'))
								{{ $data->name }}
							@else
								{{ $data->nameeg }}
							@endif
						</h1>
						<div class="s32 apage-sum">
							<p>
								@if (App::isLocale('vn'))
									{{ $data->title }}
								@else
									{{ $data->titleeg }}
								@endif
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="text-white position-relative about-mid">
		<div class="about-mid-wrap wow fadeInUp">
			<div class="container-140">
				<div class="row justify-content-center">
					<div class="col-sm-3">
						<article class="text-center am-number wow fadeInUpBig chart" data-wow-offset="">
							<!-- <div class="chart">
							    <div class="percentage" data-percent="71">
							      <span>71</span><sup>%</sup>
							    </div>
							    <div class="label">New visits</div>
							  </div>
							  
							  <div class="chart">
							    <div class="percentage" data-percent="46">
							      <span>46</span><sup>%</sup>
							    </div>
							    <div class="label">Bounce rate</div>
							  </div> -->

							<div class="s40 am-number-sta percentage" data-percent="{{ $data->namhd }}"><span class="counter">0</span></div>
							<div class="s28 italic py-3 am-number-tit">{{ trans('home.title10') }}</div>
						</article>
					</div>
					<div class="col-sm-3">
						<article class="text-center am-number wow fadeInUpBig chart" data-wow-offset="">
							<div class="s40 am-number-sta percentage" data-percent="{{ $data->duanHT }}">+<span class="counter">5000</span></div>
							<div class="s28 italic py-3 am-number-tit">{{ trans('home.title11') }}</div>
						</article>
					</div>
					<div class="col-sm-3">
						<article class="text-center am-number wow fadeInUpBig chart" data-wow-offset="">
							<div class="s40 am-number-sta percentage" data-percent="{{ $data->khthanthiet }}">+<span class="counter">500</span></div>
							<div class="s28 italic py-3 am-number-tit">{{ trans('home.title12') }}</div>
						</article>
					</div>

					<div class="col-lg-8">
						<div class="text-center am-content wow fadeInUp" data-wow-duration=".5s" data-wow-offset="200">
							@if (App::isLocale('vn'))
								{!! $data->content !!}
							@else
								{!! $data->contenteg !!}
							@endif
							
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="text-center apage-img"><img src="images/about1.png" alt="" title=""></div>
	</section>
	<section class="py-5 vision">
		<div class="container-fluid">
			<div class="row no-gutters">
				<div class="col-md-7 d-flex align-items-center justify-content-center flex-column">
					<div class="avis">
						<h2 class="text-right s25 t1 bold ser-tit avis-tit wow fadeInLeft">
							@if (App::isLocale('vn'))
								{{ $data->titlecontent1 }}
							@else
								{{ $data->titlecontent1eg }}
							@endif
						</h2>
						<blockquote class="wow fadeInUp">
							@if (App::isLocale('vn'))
								{!! $data->content1 !!}
							@else
								{!! $data->content1eg !!}
							@endif
						</blockquote>
					</div>
					<div class="avis">
						<h2 class="s25 t1 bold ser-tit avis-tit wow fadeInRight">
							@if (App::isLocale('vn'))
								{{ $data->titlecontent2 }}
							@else
								{{ $data->titlecontent2eg }}
							@endif
						</h2>
						<blockquote class="wow fadeInUp">
							@if (App::isLocale('vn'))
								{!! $data->content2 !!}
							@else
								{!! $data->content2eg !!}
							@endif
						</blockquote>
					</div>
				</div>
				<div class="col-md-5">
					<div class="text-center avis-img">
						<img src="images/about2.png" alt="" title="">
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection