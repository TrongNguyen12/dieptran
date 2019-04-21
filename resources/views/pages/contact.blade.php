@extends('index')
@section('classpages', 'about-page')
@section('content' )
	<section class="banner wow fadeInUp" style="background: linear-gradient(rgba(3,70,148,.3), rgba(3,70,148,.4)), url('{{ asset('upload/hinhanh/banner/'.$bnLH->name) }}') no-repeat center center;background-size: cover">
		<div class="container">
			<h1 class="bold s50 text-center contact-tit text-white banner-tit wow fadeInDown" data-wow-delay="300" data-wow-duration=".8s">{{ trans('home.title3') }}</h1>
		</div>
	</section>
	<section class="contact">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="contact-l">
								<p>
									@if (App::isLocale('vn'))
										<li>{!! $common->contentcode !!}</li>
									@else
										<li>{!! $common->contentcodeeg !!}</li>
									@endif
								</p>

								<ul class="s25 list-unstyled contact-list">
									<li><i class="fas fa-map-marker-alt"></i> 
										@if (App::isLocale('vn'))
											<li>{{ $common->address }}</li>
										@else
											<li>{{ $common->addresseg }}</li>
										@endif
									</li>
									<li class="bold"><i class="fas fa-phone"></i> 
										<div class="">
											<a href="tel:{{ $common->phone }}" title="">
												{{ $common->phone }}
											</a>
												-- 
											<a href="tel:{{ $common->didong }}" title="">
												{{ $common->didong }}
											</a>
										</div>
									</li>
									<li>
										<i class="fas fa-envelope"></i> 
										<div class="">
											@php
												$email = explode("||", $common->email);
											@endphp
											@if (count($email) >1 )
												@foreach ($email as $em)
						            				<a href="mailto:{{ $em }}" title="">{{ $em.' - ' }}</a>   
						            			@endforeach
											@else
												<a href="mailto:{{ $email[0] }}" title="">{{ $email[0] }}</a>
											@endif>
										</div>
									</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-6 offset-lg-1 col-md-6 col-sm-6">
							<form action="" method="POST" class="contact-frm">
								@if (session('status'))
								<div class="box-header">
								    <h3 class="box-title text-green alert_thongbao">{{ session('status') }}</h3>
								</div>
								@endif
								<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
								<input type="text" required="required" placeholder="{{ trans('home.title19') }}" class="w-100" name="name">
								<input type="tel" required="required" placeholder="{{ trans('home.title20') }}" class="w-100" name="phone">
								<input type="email" required="required" placeholder="{{ trans('home.title21') }}" class="w-100" name="Email">
								<input type="text" required="required" placeholder="{{ trans('home.title22') }}" class="w-100" name="title">
								<textarea rows="4" required="required" placeholder="{{ trans('home.title23') }}" class="w-100" name="content"></textarea>
								<div class="contact-btn text-md-left text-center">
									<button type="submit" class="btn contact-btn">{{ trans('home.title24') }}</button>
								</div>

								{{-- <p>Gửi Thông Tin Thành Công !</p> --}}
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-flush maps">
			{!! $common->codemap !!}
		</div>
	</section>
	
@endsection