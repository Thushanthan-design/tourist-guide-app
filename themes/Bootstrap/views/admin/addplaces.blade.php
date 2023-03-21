@extends('layouts.admin')

@section('content')
Add places
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Places') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('place.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" >Place Name</label>
                            <input  name="place_name" type="text" class="form-control"  placeholder="Enter Place Name" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >typw of place </label>
                            <input  name="type" type="text" class="form-control"  placeholder="Enter Place type" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >Province</label>
                            <input  name="province" type="text" class="form-control"  placeholder="Enter province " required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >City </label>
                            <input  name="city" type="text" class="form-control"  placeholder="Enter City" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description</label>
                            <textarea name="description"  class="form-control"   placeholder="Enter post description" rows="10" required ></textarea >
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="thumbnail" type="file">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
