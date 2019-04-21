	<div class="container-140 fadeInDown" data-wow-delay="20" style="background-image: url(./images/bgft.png);" data-wow-offset="200">
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<div class="ft-bwrap">
					<ul class="list-unstyled text-center text-white ft-wrap wow fadeInUp" data-wow-delay="40" data-wow-offset="200" style="visibility: visible; animation-name: fadeInUp;">
						@if (App::isLocale('vn'))
							<li>{{ $common->address }}</li>
						@else
							<li>{{ $common->addresseg }}</li>
						@endif
						<li class="bold">
							<a href="tel:{{ $common->phone }}" title="">
								<i class="fas fa-phone"></i> 
								{{ $common->phone }}
							</a>
								- 
							<a href="tel:{{ $common->didong }}" title="">
								{{ $common->didong }}
							</a>
						</li>
						<li>
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
						</li>
					</ul>

					<ul class="list-unstyled social text-center wow zoomInUp animated" data-wow-delay="50" style="visibility: visible;">
						<li><a href="{{ $common->links1 }}" title=""><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="{{ $common->links5 }}" title=""><i class="fab fa-google-plus-g"></i></a></li>
						<li><a href="{{ $common->links4 }}" title=""><i class="fab fa-youtube"></i></a></li>
						<li><a href="{{ $common->links3 }}" title=""><i class="fab fa-skype"></i></a></li>
						<li><a href="{{ $common->links2 }}" title=""><img src="images/zalo.png" alt="" title=""></a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
