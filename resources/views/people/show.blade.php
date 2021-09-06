@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">user {{ $person->id }}</div>
                    <div class="panel-body">

                        <a href="{{ url("people") }}" title="Back"><button class="btn btn-warning btn-xs">Back</button></a>
                        <a href="{{ url("people") ."/". $perso->id . "/edit" }}" title="Edit person"><button class="btn btn-primary btn-xs">Edit</button></a>
                        <form method="POST" action="/people/{{ $person->id }}" class="form-horizontal" style="display:inline;">
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
                                <tr><th>id</th><td>{{$person->id}} </td></tr>
                                <tr><th>username</th><td>{{$person->username}} </td></tr>
                                <tr><th>email</th><td>{{$person->email}} </td></tr>
                                <tr><th>password</th><td>{{$person->password}} </td></tr>
                                <tr><th>area1</th><td>{{$person->area1}} </td></tr>
                                <tr><th>part1</th><td>{{$person->part1}} </td></tr>
                                <tr><th>level1</th><td>{{$person->level1}} </td></tr>
                                <tr><th>favorite</th><td>{{$person->favorite}} </td></tr>
                                <tr><th>age</th><td>{{$person->age}} </td></tr>
                                <tr><th>sex</th><td>{{$person->sex}} </td></tr>
                                <tr><th>activity1</th><td>{{$person->activity1}} </td></tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
