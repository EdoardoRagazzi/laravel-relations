@extends('layouts.app')

@section('content')
            <div class="container">
              <h2>Details Products</h2>
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                  <div class="card-header">{{$post->title}}</div>
                    <div class="card-body">
                      <h5 class="card-title">SLUG: {{$post->slug}}</h5>
                      <p class="card-text">{{$post->content}}</p>
                    </div>
                  </div>
                  <div>
                    <a href="{{ route('admin.posts.index')}}" class="btn btn-warning">Go Back</a>
                  </div>

            </div>
@endsection