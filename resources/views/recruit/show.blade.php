
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">recrui {{ $recrui->level4 }}</div>
                            <div class="panel-body">

                                <a href="{{ url("recrui") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("recrui") ."/". $recrui->level4 . "/edit" }}" title="Edit recrui"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/recrui/{{ $recrui->level4 }}" class="form-horizontal" style="display:inline;">
                                        {{ csrf_field() }}
                                        {{ method_field("delete") }}
                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                        Delete
                                        </button>    
                            </form>
                            <br/>
                            <br/>
                            <div class="table-responsive">
                                <table class="table table-borderless">
                                    <tbody>
										<tr><th>id</th><td>{{$recrui->id}} </td></tr>
										<tr><th>title</th><td>{{$recrui->title}} </td></tr>
										<tr><th>area2</th><td>{{$recrui->area2}} </td></tr>
										<tr><th>part2</th><td>{{$recrui->part2}} </td></tr>
										<tr><th>level2</th><td>{{$recrui->level2}} </td></tr>
										<tr><th>level3</th><td>{{$recrui->level3}} </td></tr>
										<tr><th>level4</th><td>{{$recrui->level4}} </td></tr>
										<tr><th>activity2</th><td>{{$recrui->activity2}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    