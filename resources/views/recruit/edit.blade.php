
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Edit recrui #{{ $recrui->level4 }}</div>
                            <div class="panel-body">
                                <a href="{{ url("recrui") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                            @if ($errors->any())
                                <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
    
                            <form method="POST" action="/recrui/{{ $recrui->level4 }}" class="form-horizontal">
                                        {{ csrf_field() }}
                                        {{ method_field("PUT") }}
            
										<div class="form-group">
                                        <label for="id" class="col-md-4 control-label">id: </label>
                                        <div class="col-md-6">{{$recrui->id}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="title" class="col-md-4 control-label">title: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="title" type="text" id="title" value="{{$recrui->title}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="area2" class="col-md-4 control-label">area2: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="area2" type="text" id="area2" value="{{$recrui->area2}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                            <label for="part2" class="col-md-4 control-label">part2: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="part2" type="text" id="part2" value="{{$recrui->part2}}">
                                            </div>
                                        </div>
										<div class="form-group">
                                        <label for="level2" class="col-md-4 control-label">level2: </label>
                                        <div class="col-md-6">{{$recrui->level2}}</div>
                                    </div>
										<div class="form-group">
                                        <label for="level3" class="col-md-4 control-label">level3: </label>
                                        <div class="col-md-6">{{$recrui->level3}}</div>
                                    </div>
										<div class="form-group">
                                        <label for="level4" class="col-md-4 control-label">level4: </label>
                                        <div class="col-md-6">{{$recrui->level4}}</div>
                                    </div>
										<div class="form-group">
                                            <label for="activity2" class="col-md-4 control-label">activity2: </label>
                                            <div class="col-md-6">
                                                <input class="form-control" required="required" name="activity2" type="text" id="activity2" value="{{$recrui->activity2}}">
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
    