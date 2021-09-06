@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">User</div>
                    <div class="panel-body">
                    
                    
                        <a href="{{ url("people/create") }}" class="btn btn-success btn-sm" title="Add New person">
                            Add New
                        </a>

                        <form method="GET" action="{{ url("people") }}" accept-charset="UTF-8" class="navbar-form navbar-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Search...">
                                <span class="input-group-btn">
                                    <button class="btn btn-info" type="submit">
                                        <span>検索</span>
                                    </button>
                                </span>
                            </div>
                        </form>


                        <br/>
                        <br/>
                        
                        
                        <div class="table-responsive">
                            <table class="table table-borderless">
                                <thead>
                                    <tr><th>id</th><th>username</th><th>email</th><th>password</th><th>area1</th><th>part1</th><th>level1</th><th>favorite</th><th>age</th><th>sex</th><th>activity1</th></tr>
                                </thead>
                                <tbody>
                                @foreach($person as $item)
                            
                            <tr>

                                    <td>{{ $item->id}} </td>

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

                                        <td><a href="{{ url("/people/" . $item->id) }}" title="View person"><button class="btn btn-info btn-xs">View</button></a></td>
                                        <td><a href="{{ url("/people/" . $item->id . "/edit") }}" title="Edit person"><button class="btn btn-primary btn-xs">Edit</button></a></td>
                                        <td>
                                            <form method="POST" action="/people/{{ $item->id }}" class="form-horizontal" style="display:inline;">
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
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
