@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn-success" href="/back">Back</a></br></br></br>
            
                    <form method="post" action="{{ route('posts.store')}}">
                        @csrf
                        <input type="text" name="title" placeholder="Enter Post Title" >
                        <input type="text" name="description" placeholder="Enter Post Description">
                        <input type="submit" name="add" value="Add">
                    </form>
                    {{--  --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
