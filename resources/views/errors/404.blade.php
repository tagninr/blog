@extends('frontend.layouts.master')

@push('title')
    <title>404 | Page Not Found {{-- | {{ config('camera_app.meta.title') }} --}}</title>
    <!-- <meta name="description" content="{{ config('camera_app.meta.description') }}"/>
    <meta name="keywords" content="{{ config('camera_app.meta.keywords') }}"/> -->
@endpush

@section('content')
<div class="row" id="content-wrapper">
    <div class="clear"></div>
    <div id="error-wrap">
        <h1 class="error-item">404</h1>
        <h2>Không tìm thấy trang!</h2>
        <p>Rất tiếc, trang bạn đang tìm kiếm trong blog này không tồn tại.</p>
        <div class="clear"></div>
        <a class="homepage" href="/"><i class="fa fa-home"></i> Trang Chủ </a>
    </div>
    <div class="clear"></div>
</div>
@endsection