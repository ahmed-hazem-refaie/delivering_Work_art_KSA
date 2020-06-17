@extends('userLayout.layout')

@section('content')
<div class="hero hero-classic" id="block-1592300721990">
    <img class="hero-image-pc" src="//cdn.shopify.com/s/files/1/3000/4362/files/desktop-hero-1_2048x.jpg?v=1592197390" alt="Fine art">
    <div class="hero-content">

        <p class="hero-subtitle">INTRODUCING</p>
        <h3 class="hero-title">Fine art</h3>
        <a href="https://ecstase.com/pages/walltones?artwork=synthetic-3" class="hero-btn btn">Shop now</a>
        <div class="hero-counter">
            <span class="hero-counter__live">Live</span>
            <img class="hero-counter__eye" src="//cdn.shopify.com/s/files/1/3000/4362/t/109/assets/eye.png?v=10839783198912625093">
            <span id="hero-counter">408</span>
            shoppers
        </div>

    </div>
</div>
<div class="container">
    <h2 class="home-products-slider__title section-title">
        <span>New Release</span>
        <span class="sTitle">THIS WEEK’S RELEASE OF LIMITED ARTWORKS</span>
    </h2>
    <div class="owl-carousel">
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
        <div> Your Content </div>
    </div>
</div>


@endsection

@section('scripts')
    <script>

    $(document).ready(function(){
      $(".owl-carousel").owlCarousel();
    });
    </script>
@endsection
