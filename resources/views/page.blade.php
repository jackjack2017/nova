@extends('core/base')
@section('content')

@include('parts/_breadcrumbs')

<section class="page">
	<div class="container">
		<div class="container-with-sidebar">

			@include('blocks/_sidebar-menu', ['active_category' => $category->id])

			<div class="cnt">

				@include('/blocks/_banner-main-right')
				@include('/blocks/_banner-main-left')

				<h2 class="ttl-L">Новые поступления</h2>
				@include('/blocks/_slider-main', ['products' => $new])
			</div>
		</div>
	</div>
</section>

@endsection