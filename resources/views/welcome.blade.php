@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header"> Admin Dashboard</div> -->
                <div class="card-body">

                    <div class="container">
                        <button><a href="{{url('/directory')}}">Add Directory</a></button>
                        <h2>Directory List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sl/No</th>
                                    <th>Name</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($directories as $key=> $directory)
                                <tr>
                                    <td>{{$key++}}</td>
                                   <td>{{$directory->name}}</td>
                                   <td><a href="{{url('directory',$directory->id)}}">View</a></td>
                                   <td><a href="{{url('delete/directory',$directory->id)}}">Delete</a></td>
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
