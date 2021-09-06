
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">ap {{ $ap->id }}</div>
                            <div class="panel-body">

                                <a href="{{ url("ap") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                                <a href="{{ url("ap") ."/". $ap->id . "/edit" }}" title="Edit ap"><button class="btn btn-primary btn-xs">Edit</button></a>
                                <form method="POST" action="/ap/{{ $ap->id }}" class="form-horizontal" style="display:inline;">
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
										<tr><th>id</th><td>{{$ap->id}} </td></tr>
										<tr><th>userID</th><td>{{$ap->userID}} </td></tr>
										<tr><th>recruitID</th><td>{{$ap->recruitID}} </td></tr>
										<tr><th>timestamp</th><td>{{$ap->timestamp}} </td></tr>
										<tr><th>username</th><td>{{$ap->username}} </td></tr>
										<tr><th>email</th><td>{{$ap->email}} </td></tr>
										<tr><th>password</th><td>{{$ap->password}} </td></tr>
										<tr><th>area1</th><td>{{$ap->area1}} </td></tr>
										<tr><th>part1</th><td>{{$ap->part1}} </td></tr>
										<tr><th>level1</th><td>{{$ap->level1}} </td></tr>
										<tr><th>favorite</th><td>{{$ap->favorite}} </td></tr>
										<tr><th>age</th><td>{{$ap->age}} </td></tr>
										<tr><th>sex</th><td>{{$ap->sex}} </td></tr>
										<tr><th>activity1</th><td>{{$ap->activity1}} </td></tr>
										<tr><th>title</th><td>{{$ap->title}} </td></tr>
										<tr><th>area2</th><td>{{$ap->area2}} </td></tr>
										<tr><th>part2</th><td>{{$ap->part2}} </td></tr>
										<tr><th>level2</th><td>{{$ap->level2}} </td></tr>
										<tr><th>level3</th><td>{{$ap->level3}} </td></tr>
										<tr><th>level4</th><td>{{$ap->level4}} </td></tr>
										<tr><th>activity2</th><td>{{$ap->activity2}} </td></tr>

                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    