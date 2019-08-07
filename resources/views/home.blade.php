@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent-atl3-1.cdninstagram.com/vp/1808bbf15c37a2f013d9b514c418d887/5DD679D9/t51.2885-19/66767504_498493600910468_5278863540948566016_n.jpg?_nc_ht=scontent-atl3-1.cdninstagram.com" class="rounded-circle" style="width: 150px;" alt="">
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1>{{ $user->name }} </h1>
            </div>
            <div class="d-flex">
                <div class="pr-5"> <strong>120</strong> posts </div>
                <div class="pr-5"> <strong>120</strong> followers </div>
                <div class="pr-5"> <strong>120</strong> following </div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->username }} </div>
            <div>Lorem ipsum...</div>
            <div><a href="#">www.ssdevelopments.com</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img class="w-100" style="max-height: 350px;" src="https://www.sideshow.com/storage/product-images/1000763/darth-vader_star-wars_gallery_5c4dfb2d2c70a.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" style="max-height: 350px;" src="https://www.sideshow.com/storage/product-images/1000763/darth-vader_star-wars_gallery_5c4dfb2d2c70a.jpg" alt="">
        </div>
        <div class="col-4">
            <img class="w-100" style="max-height: 350px;" src="https://www.sideshow.com/storage/product-images/1000763/darth-vader_star-wars_gallery_5c4dfb2d2c70a.jpg" alt="">
        </div>
    </div>
</div>
@endsection
