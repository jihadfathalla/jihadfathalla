@extends('layout.app')
@section('content')

<div class="pull-right m-3">
<h1 style="color:red"> Create Post  </h1>
</div>

<form method="post" action="/posts">
@csrf
  <div class="form-group m-3">
    <label for="exampleInputEmail1">Title</label>
    <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="form-group m-3">
    <label for="exampleInputPassword1">Describtion</label>
    <textarea name="descrabtion" class="form-control">
    </textarea>
  </div>
  <div class="form-group m-3">
    <label for="exampleInputPassword1">Users</label>
    <select name="user_id" class="form-control">
    @foreach($users as $user)  
          <option value="{{$user->id}}">{{$user->name}}</option>
        @endforeach
        </select>
  

  </div>
  </form>
  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-success">Create</button>
            </div>
           
    <div class="pull-right m-3">
                <a class="btn btn-primary" href="/posts"> Back</a>
            </div>
        </div>
    </div> 
@endsection