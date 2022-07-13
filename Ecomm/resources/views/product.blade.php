@extends('layouts.master')
@section('content')
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">


    <div class="carousel-inner">
        @foreach ($products as $item)
        <div class="item {{$item['table_id']==1?'active':''}}">
            <img src="{{$item['gallery']}}">
            <div class="carousel-caption">
              <h5>{{$item['name']}}</h5>
              <p>{{$item['description']}}</p>
            </div>
        </div>
        @endforeach
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
@endsection
