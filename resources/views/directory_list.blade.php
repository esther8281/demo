@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header"> Admin Dashboard</div> -->
                <div class="card-body">

                    <div class="container">
                        <h2>Add File</h2>
                       <form enctype="multipart/form-data" method="post"  action="{{url('file',$directory->id)}}">
                       	<input type="hidden" name="_token" value="{{csrf_token()}}">
                       	<div class="form-group">
						    <label for="name">File:</label>
						    <input type="file" class="form-control" id="avatar" name="avatar" >
                            @if($errors->has('avatar'))
                            <label class="error">
                                {{$errors->first('avatar')}}
                            </label>
                            @endif
						  </div>
						  <button type="submit" class="btn btn-default">Submit</button>
					</form>
                        
                        <h2>File List</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Sl/No</th>
                                    <th>Directory Name</th>
                                    <th>File Name</th>
                                </tr>
                            </thead>
                            <tbody>
                               @foreach($files as $key=> $file)
                                <tr>
                                    <td>{{$key++}}</td>
                                    <td>{{$file->directory->name}}</td>
                                   <td>{{$file->avatar}}</td>
                                  
                                </tr>
                                @endforeach
                            </tbody>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
