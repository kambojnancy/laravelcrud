@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn-success" href="/back">Back</a></br></br></br>
            @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                    <form method="post" action="{{ route('posts.update',$post->id) }}">
                        @csrf
                         @method('PUT')
                        <input type="text" name="title"  value="{{$post->title}}">
                        <input type="text" name="description"  value="{{$post->description}}">
                        <input type="submit" name="update" value="Update">
                    </form>
                    {{--  --}}
        </div>
    </div>
</div>
@endsection
