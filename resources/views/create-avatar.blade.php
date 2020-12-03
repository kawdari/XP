@extends('template')

@section('content')
    <form action="/store-avatar" method="post" enctype="multipart/form-data">
        @csrf
        @if (session('status'))
           <div class="alert alert-danger">
            {{ session('status') }}
          </div>
          @endif

          @if ($errors->any())
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

        <h2>Creer un avatar</h2>
        <label for="name">Nom:</label>
        <input type="text" name="name" id="name" value="{{old('src')}}">

        <label for="src">Rajouter une image:</label>
        <input type="file" name="src" value="{{old('src')}}">
    
        <button type="submit" class="btn btn-success">Rajouter</button>
    </form>
 
    <div>
        @foreach ($avatar as $item)
            <div class="card" style="width:18em;">
                 <img src="{{asset('images/'. $item->src)}}" class="card-img-top" alt="image">
                 <div class="card-body">
                    <h4 class="card-title">{{$item->name}}</h4>
                </div>
                <div>
                    <a class="btn btn-success" href="">Edit</a>
                    <a class="btn btn-danger" href="/delete-avatar/{{$item->id}}">Delete</a>
                </div>
            </div>
        @endforeach
        
    </div> 
@endsection