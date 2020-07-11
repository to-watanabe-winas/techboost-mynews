@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">

        @foreach($product_reviews as $product_review)
            <div>
                商品名
                {{ $product_review['product']['name'] }}
            </div>

            <div>
                レビュー
                @foreach($product_review['reviews'] as $review)
                    <div>
                        {{ $review['content'] }}
                    </div>
                @endforeach
            </div>

            <hr color="#c0c0c0">

        @endforeach
    </div>
@endsection