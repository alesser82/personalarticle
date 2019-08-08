@extends('template/main')

@section('title','Personal Article | Home')
@section('page-title','Personal Article')
<?php
$backgroundHeader = URL::to('img/home-bg.jpg');
?>
@section('background_header',$backgroundHeader)
@section('subtitle_header', 'Read what you want.')

@section('content')
<!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      @foreach($articles as $article)
        <div class="post-preview">
          <a href="post.html">
            <h2 class="post-title">
              {{$article->title}}
            </h2>
            <h3 class="post-subtitle">
              {{ substr($article->content,0,40) }}
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
            on September 24, 2019</p>
        </div>
        <hr>
        @endforeach
        

        <!-- Pager -->
        <div class="clearfix">
          <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a>
        </div>
      </div>
    </div>
  </div>

  <hr>
@endsection