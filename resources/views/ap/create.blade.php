
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create New ap</div>
                            <div class="panel-body">
                                <a href="{{ url("/ap") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <br />
                                <br />

                                @if ($errors->any())
                                    <ul class="alert alert-danger">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                @endif
                                
                                
                                <form method="POST" action="/ap/store" class="form-horizontal">
                                    {{ csrf_field() }}

    										<div class="form-group">
                                        <label for="userID" class="col-md-4 control-label">userID: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="userID" type="text" id="userID" value="{{old('userID')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="recruitID" class="col-md-4 control-label">recruitID: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="recruitID" type="text" id="recruitID" value="{{old('recruitID')}}">
                                        </div>
                                    </div>
										<div class="form-group">
                                        <label for="timestamp" class="col-md-4 control-label">timestamp: </label>
                                        <div class="col-md-6">
                                            <input class="form-control" name="timestamp" type="text" id="timestamp" value="{{old('timestamp')}}">
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
    