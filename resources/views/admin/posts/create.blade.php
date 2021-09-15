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
   
    <form action="{{ route('admin.posts.store')}}" method="post">
        @csrf
      

    <div class="mb-3">
        <label for="title" >Write Title</label>

        {{-- Remember method old so you don't delete the values already insert / doesn't delete your data --}}

        {{-- You can also use the error class that put you an exclamation warning with is-invalid / or you can add a message  --}}
        <input type="title" name="title" class="form-control 
        @error('title')
        is-invalid
        @enderror
        " id="title" value="{{old('title')}}" >
        @error('title')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
   
      </div>
      <div class="mb-3">
        <label for="descrizione" class="form-label">Descrizione</label>
        <textarea class="form-control" type="text" name="content" cols="30" rows="10"  id="descrizione" >{{old('content')}}</textarea>
        
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
</div>




@endsection