@extends('layouts.book_app')


@section('content')

<div class="container-fluid">
<div class="row">
<div class="col-xl-12">
<div class="slider-area">
<div class="slider-height2 slider-bg4 d-flex align-items-center justify-content-center">
<div class="hero-caption hero-caption2">
<h2>Book Category</h2>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="listing-area pt-50 pb-50">
<div class="container">
<div class="row">

<div class="col-xl-4 col-lg-4 col-md-6">

<div class="category-listing mb-50">

<div class="single-listing">

<div class="select-Categories pb-30">
<div class="small-tittle mb-20">
<h4>Filter by Genres</h4>
</div>
<label class="container">History
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Horror - Thriller
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
<label class="container">Love Stories
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Science Fiction
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Biography
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>


<aside class="left_widgets p_filter_widgets price_rangs_aside sidebar_box_shadow mb-40">
<div class="small-tittle">
<h4>Filter by Price</h4>
</div>
<div class="widgets_inner">
<div class="range_item">
<input type="text" class="js-range-slider" value="" />
<div class="d-flex align-items-center">
<div class="price_value d-flex justify-content-center">
<input type="text" class="js-input-from" id="amount" readonly />
<span>to</span>
<input type="text" class="js-input-to" id="amount" readonly />
</div>
</div>
</div>
</div>
</aside>


<div class="select-job-items2 mb-30">
<div class="col-xl-12">
<select name="select2">
<option value="">Filter by Rating</option>
<option value="">5 Star Rating</option>
<option value="">4 Star Rating</option>
<option value="">3 Star Rating</option>
<option value="">2 Star Rating</option>
<option value="">1 Star Rating</option>
</select>
</div>
</div>


<div class="select-Categories pt-100 pb-60">
<div class="small-tittle mb-20">
<h4>Filter by Publisher</h4>
</div>
<label class="container">Green Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Anondo Publications
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
<label class="container">Rinku Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Sheba Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Red Publications
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>


<div class="select-Categories">
<div class="small-tittle mb-20">
<h4>Filter by Author Name</h4>
</div>
<label class="container">Buster Hyman
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Phil Harmonic
<input type="checkbox" checked>
<span class="checkmark"></span>
</label>
<label class="container">Cam L. Toe
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Otto Matic
<input type="checkbox">
<span class="checkmark"></span>
</label>
<label class="container">Juan Annatoo
<input type="checkbox">
<span class="checkmark"></span>
</label>
</div>

</div>
</div>

</div>

<div class="col-xl-8 col-lg-8 col-md-6">
<div class="row justify-content-end">
<div class="col-xl-4">
<div class="product_page_tittle">
<div class="short_by">
<select name="#" id="product_short_list">
<option>Browse by popularity</option>
<option>Name</option>
<option>NEW</option>
<option>Old</option>
<option>Price</option>
</select>
</div>
</div>
</div>
</div>
<div class="best-selling p-0">
<div class="row">
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.I1tWDKCBJ-.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.DxXSrUIXGk.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.bfR6lCdMw-.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.t9lNibrWVM.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.xDoolBlJLs.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling7.jpg.pagespeed.ic.I1tWDKCBJ-.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling8.jpg.pagespeed.ic.DxXSrUIXGk.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling6.jpg.pagespeed.ic.bfR6lCdMw-.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling4.jpg.pagespeed.ic.SS9XjNMbIy.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling9.jpg.pagespeed.ic.t9lNibrWVM.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12 col-sm-6">
<div class="properties pb-30">
<div class="properties-card">
<div class="properties-img">
<a href="book-details.html"><img src="assets/img/gallery/xbest_selling2.jpg.pagespeed.ic.xDoolBlJLs.jpg" alt=""></a>
</div>
<div class="properties-caption properties-caption2">
<h3><a href="book-details.html">Moon Dance</a></h3>
<p>J. R Rain</p>
<div class="properties-footer d-flex justify-content-between align-items-center">
<div class="review">
<div class="rating">
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star-half-alt"></i>
</div>
<p>(<span>120</span> Review)</p>
</div>
<div class="price">
<span>$50</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="row">
<div class="col-xl-12">
<div class="more-btn text-center mt-15">
<a href="#" class="border-btn border-btn2 more-btn2">Browse More</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


<section class="subscribe-area">
<div class="container">
<div class="subscribe-caption text-center  subscribe-padding section-img2-bg" data-background="assets/img/gallery/section-bg1.jpg">
<div class="row justify-content-center">
<div class="col-xl-6 col-lg-8 col-md-9">
<h3>Join Newsletter</h3>
<p>Lorem started its journey with cast iron (CI) products in 1980. The initial main objective was to ensure pure water and affordable irrigation.</p>
<form action="#">
<input type="text" placeholder="Enter your email">
<button class="subscribe-btn">Subscribe</button>
</form>
</div>
</div>
</div>
</div>
</section>
@endsection