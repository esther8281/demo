@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <!-- <div class="card-header"> Admin Dashboard</div> -->
                <div class="card-body">

                    <div class="container">
                        <h2>Add Directory</h2>
                       <form  method="post"  action="/directory">
                       	<input type="hidden" name="_token" value="{{csrf_token()}}">
                       	<div class="form-group">
						    <label for="name">Directory Name:</label>
						    <input type="text" class="form-control" id="name" name="name" >
                            @if($errors->has('name'))
                            <label class="error">
                                {{$errors->first('name')}}
                            </label>
                            @endif
						  </div>
						  <button type="submit" class="btn btn-default">Submit</button>
					</form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
