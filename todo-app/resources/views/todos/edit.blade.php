@extends('layout.app')

@section('title')
	Create New Todo
@endsection

@section('content')
       
    <h1 class="text-center my-5">Edit Todo</h1>    

    <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">
                            Edit Todo
                        </div>
                        <div class="card-body">
                            
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul class="list-group" >
                                        @foreach($errors->all() as $error)
                                            <li class="list-group-list" >
                                                {{ $error }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif


                            <form action="/todos/{{ $todo->id }}/update-todos" method="POST">
                                @csrf
                                <input type="hidden" name="todo_id" value="{{ $todo->id }}" >
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{ $todo->name }}">
                                </div>

                                <div class="form-group">
                                    <textarea name="description" placeholder="Description" id="" cols="30" rows="10" class="form-control">{{ $todo->description }}</textarea>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-success" >Update Todo</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        

@endsection