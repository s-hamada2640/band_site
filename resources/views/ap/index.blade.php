
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">ap</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("ap/create") }}" class="btn btn-success btn-sm" title="Add New ap">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("ap") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="search" placeholder="Search...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-info" type="submit">
                                                <span>Search</span>
                                            </button>
                                        </span>
                                    </div>
                                </form>


                                <br/>
                                <br/>
                                
                                
                                <div class="table-responsive">
                                    <table class="table table-borderless">
                                        <thead>
                                            <tr><th>id</th><th>userID</th><th>recruitID</th><th>timestamp</th><th>username</th><th>email</th><th>password</th><th>area1</th><th>part1</th><th>level1</th><th>favorite</th><th>age</th><th>sex</th><th>activity1</th><th>title</th><th>area2</th><th>part2</th><th>level2</th><th>level3</th><th>level4</th><th>activity2</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($ap as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->userID}} </td>

                                            <td>{{ $item->recruitID}} </td>

                                            <td>{{ $item->timestamp}} </td>

                                                    <td>{{ $item->username}} </td>

                                                    <td>{{ $item->email}} </td>

                                                    <td>{{ $item->password}} </td>

                                                    <td>{{ $item->area1}} </td>

                                                    <td>{{ $item->part1}} </td>

                                                    <td>{{ $item->level1}} </td>

                                                    <td>{{ $item->favorite}} </td>

                                                    <td>{{ $item->age}} </td>

                                                    <td>{{ $item->sex}} </td>

                                                    <td>{{ $item->activity1}} </td>

                                                    <td>{{ $item->title}} </td>

                                                    <td>{{ $item->area2}} </td>

                                                    <td>{{ $item->part2}} </td>

                                                    <td>{{ $item->level2}} </td>

                                                    <td>{{ $item->level3}} </td>

                                                    <td>{{ $item->level4}} </td>

                                                    <td>{{ $item->activity2}} </td>
  
                                                <td><a href="{{ url("/ap/" . $item->id) }}" title="View ap"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/ap/" . $item->id . "/edit") }}" title="Edit ap"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/ap/{{ $item->id }}" class="form-horizontal" style="display:inline;">
                                                        {{ csrf_field() }}
                                                        
                                                        {{ method_field("DELETE") }}
                                                        <button type="submit" class="btn btn-danger btn-xs" title="Delete User" onclick="return confirm('Confirm delete')">
                                                        Delete
                                                        </button>    
                                                    </form>
                                                   </td>
                                              </tr>

                                        @endforeach
                                        </tbody>
                                    </table>
                                    <div class="pagination-wrapper"> {!! $ap->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    