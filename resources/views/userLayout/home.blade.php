@extends('userLayout.layout')

@section('content')
	@component('components.Header')
	@endcomponent

	@component('components.Slider')
	@endcomponent
@endsection

@section('scripts')
<script>
	$('.product-grid-item__image').hover(function(e) {
		console.log(e)

	}, function() {
		// out
	});
	$(document).ready(function() {
		$(".owl-carousel").owlCarousel();
	});
	var swiper = new Swiper('.swiper-container', {
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
</script>
@endsection