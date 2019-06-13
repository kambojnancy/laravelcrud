@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn-success" type="button" href="{{ route('posts.create') }}">Create New Post</a></br></br></br>
             @if ($message = Session::get('success'))
                 <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
             @endif  
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
            <table class="table">
                <thead>
                  <tr>
                    <th>Sr. No</th>
                    <th>User Name</th>
                    <th>Post Title</th>
                    <th>Post Description</th>
                    <th>Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                  <tr>
                    
                    
                    <td>{{  ++$i  }}</td>
                    <td>{{  $post->user->name }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->description }}</td> 
                     <td>
                      <form action="{{ route('posts.destroy',$post->id) }}" method="POST">
                          <a href="{{ route('posts.edit',$post->id) }}" class="btn-primary">Edit</a>
                         
                           @csrf
                    @method('DELETE')
                     <button class="btn-danger" type="submit" >Delete</button> 
                      </form>
                    </td>
                  </tr>      
                  @endforeach
                </tbody>
              </table>
            
        </div>
    </div>
</div>
{!! $posts->links() !!}
@endsection
