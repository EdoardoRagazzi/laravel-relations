@extends('layouts.app')

@section('content')
<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <form action="{{ route('admin.posts.update', $post->id)}}" method="post">
        @csrf
        @method('PATCH')

    <div class="mb-3">
        <label for="title" >Write Title</label>
        {{-- Remeber the value  --}}
        <input type="title" name="title" class="form-control" id="title" value="{{old('title',$post->title)}}" >
   
      </div>
      <div class="mb-3">
        <label for="descrizione" class="form-label">Descrizione</label>
        {{-- Not value because is a TextArea --}}
        <textarea class="form-control" type="text" name="content" cols="30" rows="10"  id="descrizione" >{{old('content',$post->content)}}</textarea>
        
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>

</div>

@endsection