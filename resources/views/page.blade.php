@extends('core/base')
@section('content')

@include('parts/_breadcrumbs')

<section class="page">
	<div class="page-container-main">
		<div class="page-container">

			@include('blocks/_sidebar-menu')

			<div class="page-cnt">

				@include('/blocks/_banner-main-right')
				@include('/blocks/_banner-main-left')

				<h2 class="page-ttl">Новые поступления</h2>
				@include('/blocks/_slider-main')
			</div>
		</div>
	</div>
</section>

@endsection