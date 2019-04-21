@extends('index')
@section('classpages', 'about-page')
@section('content' )
	<section class="banner wow fadeInUp" style="background: linear-gradient(rgba(3,70,148,.3), rgba(3,70,148,.4)), url('{{ asset('upload/hinhanh/banner/'.$bntrangTT->name) }}') no-repeat center center;background-size: cover">
		<div class="container">
			<h1 class="bold s50 text-center contact-tit text-white banner-tit wow fadeInDown" data-wow-delay="300" data-wow-duration=".8s"><a href="{{ asset('tuyen-dung.html') }}"><span>{{ trans('home.title8') }}</span></a></h1>
		</div>
	</section>

	<section class="blog">
		<div class="container-140">
			<div class="row blog-row" id="postBlogAjax">
				@foreach ($data as $item)
					<div class="col-lg-4 col-md-6 col-sm-6">
						<article class="blog-item">
							<figure class="position-relative blog-img">
								<a href="{{ asset('tuyen-dung/'.$item->slug.'-p'.$item->id) }}.html" title=""><img src="{{ asset('upload/hinhanh/post/new/') }}/{{ $item->photo }}" alt="" title=""></a>
								<span class="s26 cate text-white"><a href="{{ asset('tuyen-dung') }}.html" title="">{{ $item->Catepost->name }}</a></span>
								<div class="nav-link-eff">
									<span class="l1"></span>
	                                <span class="l2"></span>
	                                <span class="l3"></span>
	                                <span class="l4"></span>
								</div>
							</figure>
							<figcaption class="blog-info">
								<h3 class="blog-time s18 italic"></h3>
								<h2 class="s24 bold blog-info-tit"><a href="{{ asset('tuyen-dung/'.$item->slug.'-p'.$item->id) }}.html" title="">{{ $item->title }}</a></h2>
								<div class="s20 blog-info-content">
									<p>{{ $item->shortdescription }}</p>
								</div>
							</figcaption>
						</article>
					</div>
				@endforeach
			</div>
			<div class="text-center s26 blog-link">
				@if ($data->nextPageUrl() != null)
					<a href="javascript:;" class="" title="" id="loadMore">LOAD MORE</a>
				@endif
			</div>
		</div>
	</section>
@endsection

@section('script' )
<script>
	$(function() {
		page = 2;
		$( "#loadMore" ).on( "click", function() {
			$(this).text('LOADING...').addClass('isDisabled');
		  $.ajax({
		  	url: '{{ asset('loadmorepost') }}',
		  	type: 'GET',
		  	data: { 
		  		'page': page,
		  		'type': 'tuyendung'
		  	}
		  })
		  .done(function(data) {
		  	page = page + 1;
		  	if (data != 'false') {
				$('#postBlogAjax').append(data);
				$( "#loadMore" ).text('LOAD MORE').removeClass('isDisabled');
		  	}else{
		  		$( "#loadMore" ).text('LOAD MORE');
		  	}
		  })
		});
	});
</script>
@endsection