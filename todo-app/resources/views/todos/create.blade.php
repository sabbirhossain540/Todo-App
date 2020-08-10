@extends('layout.app')

@section('title')
	Create New Todo
@endsection

@section('content')
       
    <h1 class="text-center my-5">Create Todo</h1>    

    <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-default">
                        <div class="card-header">
                            Create New Todo
                        </div>
                        <div class="card-body">
                            <form action="/store-todos" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>

                                <div class="form-group">
                                    <textarea name="description" placeholder="Description" id="" cols="30" rows="10" class="form-control">
                                        
                                    </textarea>
                                </div>

                                <div class="form-group text-right">
                                    <button type="submit" class="btn btn-success" >Create Todo</button>
                                </div>


                            </form>
                        </div>
                    </div>
                </div>
            </div> 
        

@endsection