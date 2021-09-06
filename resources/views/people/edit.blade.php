@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Edit person #{{ $person->id }}</div>
                    <div class="panel-body">
                        <a href="{{ url("people") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                        <br />
                        <br />

                    @if ($errors->any())
                        <ul class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <form method="POST" action="/people/{{ $person->id }}" class="form-horizontal">
                                {{ csrf_field() }}
                                {{ method_field("PUT") }}
    
                                <div class="form-group">
                                <label for="id" class="col-md-4 control-label">id: </label>
                                <div class="col-md-6">{{$person->id}}</div>
                            </div>
                                <div class="form-group">
                                    <label for="username" class="col-md-4 control-label">username: </label>
                                    <div class="col-md-6">
                                        <input class="form-control" required="required" name="username" type="text" id="username" value="{{$person->username}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email" class="col-md-4 control-label">email: </label>
                                    <div class="col-md-6">
                                        <input class="form-control" required="required" name="email" type="text" id="email" value="{{$person->email}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="password" class="col-md-4 control-label">password: </label>
                                <div class="col-md-6">{{$person->password}}</div>
                            </div>
                                <div class="form-group">
                                <label for="area1" class="col-md-4 control-label">area1: </label>
                                <div class="col-md-6">{{$person->area1}}</div>
                            </div>
                                <div class="form-group">
                                <label for="part1" class="col-md-4 control-label">part1: </label>
                                <div class="col-md-6">{{$person->part1}}</div>
                            </div>
                                <div class="form-group">
                                <label for="level1" class="col-md-4 control-label">level1: </label>
                                <div class="col-md-6">{{$person->level1}}</div>
                            </div>
                                <div class="form-group">
                                    <label for="favorite" class="col-md-4 control-label">favorite: </label>
                                    <div class="col-md-6">
                                        <input class="form-control" required="required" name="favorite" type="text" id="favorite" value="{{$person->favorite}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                <label for="age" class="col-md-4 control-label">age: </label>
                                <div class="col-md-6">{{$person->age}}</div>
                            </div>
                                <div class="form-group">
                                    <label for="sex" class="col-md-4 control-label">sex: </label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="sex" type="text" id="sex" value="{{$person->sex}}">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="activity1" class="col-md-4 control-label">activity1: </label>
                                    <div class="col-md-6">
                                        <input class="form-control" name="activity1" type="text" id="activity1" value="{{$person->activity1}}">
                                    </div>
                                </div>
        
                            <div class="form-group">
                                <div class="col-md-offset-4 col-md-4">
                                    <input class="btn btn-primary" type="submit" value="Update">
                                </div>
                            </div>   
                        </form>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
