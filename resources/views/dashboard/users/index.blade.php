@extends('dashboard.index')

@section('content')
<div class="content">
    <div class="container-fluid">

        <div class="col-md-12">
            <div class="card card-plain">
                <div class="card-header card-header-warning">
                    <h4 class="card-title ">Users</h4>
                    <p class="card-category">            <a href="{{route('dashboard.users.create')}}" class="btn btn-primary px-4"> 
                      Add  </a>
                    </p>

                    <p class="card-category"> list of all our users</p>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-center">
                            <thead class=" text-primary">
                                <th>
                                    ID
                                </th>
                                <th>
                                    User Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Active
                                </th>
                                <th>
                                    Action
                                </th>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                <tr id={{$user->id}}>
                                    <td>
                                        {{$user->id}}
                                    </td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                 
                                    <td>
                                        <button type="button" rel="tooltip" 
                                            onclick="deleteUser({{$user->id}})" class="btn btn-white btn-link btn-sm">
                                            <i class="material-icons">close</i>
                                        </button>
                                    </td>
                               
                                </tr>
                                @empty
                                <p>No users</p>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<script>
  
  function deleteUser(id) {
        var row = document.getElementById(id);
        row.parentNode.removeChild(row);
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("GET", "deleteUser/" + id, true);
        xmlhttp.send();
  }
</script>