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