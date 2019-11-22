@extends('layouts.default')

@section('title', '| Homepage')

@section('content')         
<div class = "middle marg-of-middle">
    <div class="row">
        <div class="column">
            <div class="article">
                <div class="article-pic">
                    <img class="img-responsive" src="{{url('assets/img/picture3.jpg')}}"width="400px" height="400px">
                </div>
                <div class="article-content">
                    <div class="change-col"><a href="#">A recipe of the happiness</a></div>
                    <p>Life is gorgeous, adventurous and full of miracles. Just learn how to notice it...</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="article">
                <div class="article-pic">
                    <img class="img-responsive" src="{{url('assets/img/picture4.jpg')}}" width="400px" height="400px">
                </div>
                <div class="article-content">
                    <div class="change-col"><a href="#">A recipe of the love</a></div>
                    <p>The recipe of the love is to love yourself. You are so beautiful, aren't you?</p>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="article">
                <div class="article-pic">
                    <img class="img-responsive" src="{{url('assets/img/picture5.jpg')}}" width="400px" height="400px">
                </div>
                <div class="article-content">
                    <div class="change-col"><a href="#">A recipe of the health</a></div>
                    <p>You are the only person you know best. Appreciate yourself and your body.</p>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection
