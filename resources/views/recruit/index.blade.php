
        @extends("layouts.app")
        @section("content")
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">recrui</div>
                            <div class="panel-body">
                            
                            
                                <a href="{{ url("recrui/create") }}" class="btn btn-success btn-sm" title="Add New recrui">
                                    Add New
                                </a>

                                <form method="GET" action="{{ url("recrui") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
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
                                            <tr><th>id</th><th>title</th><th>area2</th><th>part2</th><th>level2</th><th>level3</th><th>level4</th><th>activity2</th></tr>
                                        </thead>
                                        <tbody>
                                        @foreach($recrui as $item)
                                    
                                    <tr>

                                            <td>{{ $item->id}} </td>

                                            <td>{{ $item->title}} </td>

                                            <td>{{ $item->area2}} </td>

                                            <td>{{ $item->part2}} </td>

                                            <td>{{ $item->level2}} </td>

                                            <td>{{ $item->level3}} </td>

                                            <td>{{ $item->level4}} </td>

                                            <td>{{ $item->activity2}} </td>
  
                                                <td><a href="{{ url("/recrui/" . $item->level4) }}" title="View recrui"><button class="btn btn-info btn-xs">View</button></a></td>
                                                <td><a href="{{ url("/recrui/" . $item->level4 . "/edit") }}" title="Edit recrui"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                                <td>
                                                    <form method="POST" action="/recrui/{{ $item->level4 }}" class="form-horizontal" style="display:inline;">
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
                                    <div class="pagination-wrapper"> {!! $recrui->appends(["search" => Request::get("search")])->render() !!} </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
    