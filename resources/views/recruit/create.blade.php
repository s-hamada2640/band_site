
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New recrui</div>
                            <div class="panel-body">
                                <a href="{{ url("/recrui") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/recrui/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="title" class="col-md-4 control-label">title: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="title" type="text" id="title" value="{{old('title')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="area2" class="col-md-4 control-label">area2: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="area2" type="text" id="area2" value="{{old('area2')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="part2" class="col-md-4 control-label">part2: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="part2" type="text" id="part2" value="{{old('part2')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="activity2" class="col-md-4 control-label">activity2: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" required="required" name="activity2" type="text" id="activity2" value="{{old('activity2')}}">
                                        </div>
                                    </div>
                    
                                    <div class="form-group">
                                        <div class="col-md-offset-4 col-md-4">
                                            <input class="btn btn-primary" type="submit" value="Create">
                                        </div>
                                    </div>     
                                </form>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    