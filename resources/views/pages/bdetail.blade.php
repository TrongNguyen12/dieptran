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
	<section class="text-center position-relative sbanner">
		@if ($data->bannertop !=null)
			<img class="wow fadeInDown" src="{{ asset('upload/hinhanh/post/new/') }}/{{ $data->bannertop }}" alt="" title="">
		@else
			<img class="wow fadeInDown" src="images/bannerser4.png" alt="" title="">
		@endif
		<h1 class="bold s27 text-center sbanner-tit wow fadeInDown" data-wow-delay="300" data-wow-duration=".8s">
			<a href="{{ asset('tin-tuc.html') }}"><span>{{ trans('home.title7') }}</span></a>
		</h1>
	</section>
	<section class="serpage bdetail">
		<div class="container-140">
			<div class="bdetail-reslider">
				@foreach ($listPost as $item)
				<article class="bdetail-re-item">
					<div class="row">
						<div class="col-sm-6">
							<figure class="blog-img">
								<a href="{{ asset('tin-tuc/'.$item->slug.'-p'.$item->id) }}.html" title=""><img src="{{ asset('upload/hinhanh/post/new/') }}/{{ $item->photo }}" alt="" title=""></a>
							</figure>
						</div>
						<div class="col-sm-6">
							<figcaption class="s14 blog-info">
								<h3 class="bold blog-info-tit">
									<a href="{{ asset('tin-tuc/'.$item->slug.'-p'.$item->id) }}.html" title="">
										@if (App::isLocale('vn'))
											{{ $item->title }}
										@else
											{{ $item->titleeg }}
										@endif
									</a>
								</h3>

								<div class="s14 blog-info-content">
									<p>
										@if (App::isLocale('vn'))
											{{ $item->shortdescription }}
										@else
											{{ $item->shortdescriptioneg }}
										@endif
									</p>
								</div>
							</figcaption>
						</div>
					</div>
				</article>
				@endforeach
			</div>
			<div class="b4 sdetail-content-wrap">
				<span class="s26 cate text-white"><a href="{{ asset('danh-muc/'.$data->Catepost->slug.'-p'.$item->Catepost->id) }}.html" title="">{{ $data->Catepost->name }}</a></span>
				<h3 class="s24 sdetail-time">{{ $data->dateUpdate }}</h3>
				<h1 class="bold s50 sdetail-tab-tit">
					@if (App::isLocale('vn'))
						{{ $data->title }}
					@else
						{{ $data->titleeg }}
					@endif
					
				</h1>
	
				<div class="sdetail-content">
					@if (App::isLocale('vn'))
						{!! $data->content !!}
					@else
						{!! $data->contenteg !!}
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

				<h1 class="bold py-4 s20 sdetail-tab-tit">{{ trans('home.title18') }}</h1>

				<ul class="list-unstyled bdetail-list">

					@foreach ($listPost as $item)
						<li><a href="{{ asset('tin-tuc/'.$item->slug.'-p'.$item->id) }}.html" title="">
							@if (App::isLocale('vn'))
								{{ $item->title }}
							@else
								{{ $item->titleeg }}
							@endif
							
						</a></li>
					@endforeach
					
					{{-- <li><a href="bdetail.html" title="">Thiết kế lịch bàn - Quà tặng ý nghĩa và hữu dụng</a></li>
					<li><a href="bdetail.html" title="">Thiết kế lịch bàn - Quà tặng ý nghĩa và hữu dụng</a></li>
					<li><a href="bdetail.html" title="">Thiết kế lịch bàn - Quà tặng ý nghĩa và hữu dụng</a></li>
					<li><a href="bdetail.html" title="">Thiết kế lịch bàn - Quà tặng ý nghĩa và hữu dụng</a></li> --}}
				</ul>
			</div>
		</div>
	</section>
@endsection