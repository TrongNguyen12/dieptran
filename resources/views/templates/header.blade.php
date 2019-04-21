<div class="d-flex align-items-center justify-content-lg-end justify-content-between top-contact">
	<i class="d-lg-none d-inline-block fas fa-bars pr-2 toggle-menu"></i>
	<div class="bold s27 top-contact-l">
		<a href="tel:{{ $common->phone }}" title="">
			<i class="fas fa-phone"></i> 
			{{ $common->phone }}
		</a>
			<span class="px-md-3 px-1">-</span>   
		<a href="tel:{{ $common->didong }}" title="">
			{{ $common->didong }}
		</a>
	</div>
	<ul class="list-unstyled ml-lg-3 ml-2 d-flex align-items-center top-lang">
		@if (App::isLocale('vn'))
			<li class="active">
			<a href="{{ asset('change/vn') }}" title=""></a>
			</li>
			<li>
				<a href="{{ asset('change/en') }}" title=""></a>
			</li>
		@else
			<li>
				<a href="{{ asset('change/vn') }} " title=""></a>
			</li>
			<li class="active">
				<a href="{{ asset('change/en') }}" title=""></a>
			</li>
		@endif
	</ul>
</div>
<nav id="menu" class="menu-wrap">	
	<ul class="menu">
		<li class="{{ Request::segment(1) === null ? 'active' : null }}">
			<a href="{{ asset('/') }}" title="">
				<img src="images/icon1.png" alt="" title=""> 
					@if (App::isLocale('vn'))
						<span>TRANG CHỦ</span>
					@else
						<span>HOME</span>
					@endif
			</a>
		</li>
		
		<li class="{{ Request::segment(1) === 'gioi-thieu.html' ? 'active' : null }}">
			<a href="{{ asset('gioi-thieu.html') }}" title="" >
				<img src="images/icon2.png" alt="" title="">
					@if (App::isLocale('vn'))
						<span>GIỚI THIỆU</span>
					@else
						<span>INTRODUCE</span>
					@endif
			</a>
		</li>
		<li class="{{ Request::segment(1) === 'dich-vu.html' || Request::segment(1) === 'dich-vu' ? 'active' : null }}">
			<a href="{{ asset('dich-vu.html') }}" title="" ><img src="images/icon3.png" alt="" title=""> 
				@if (App::isLocale('vn'))
					<span>DỊCH VỤ</span>
				@else
					<span>SERVICE</span>
				@endif
			</a>
		</li>
		<li class="{{ Request::segment(1) === 'tin-tuc.html' || Request::segment(1) === 'danh-muc' || Request::segment(1) === 'tin-tuc' ? 'active' : null }}">
			<a href="{{ asset('tin-tuc.html') }}" title="" ><img src="images/icon4.png" alt="" title="">
				@if (App::isLocale('vn'))
					<span>TIN TỨC</span>
				@else
					<span>NEWS</span>
				@endif
			</a>
		</li>
		<li class="{{ Request::segment(1) === 'tuyen-dung.html' || Request::segment(1) === 'tuyen-dung' ? 'active' : null }}">
			<a href="{{ asset('tuyen-dung.html') }}" title="" ><img src="images/icon5.png" alt="" title="">
				@if (App::isLocale('vn'))
					<span>TUYỂN DỤNG</span>
				@else
					<span>RECRUITMENT</span>
				@endif
			</a>
		</li>
		<li class="{{ Request::segment(1) === 'lien-he.html' ? 'active' : null }}">
			<a href="{{ asset('lien-he.html') }}" title=""><img src="images/icon6.png" alt="" title="">
				@if (App::isLocale('vn'))
					<span>LIÊN HỆ</span>
				@else
					<span>CONTACT</span>
				@endif
			</a>
		</li>
	</ul>
</nav>