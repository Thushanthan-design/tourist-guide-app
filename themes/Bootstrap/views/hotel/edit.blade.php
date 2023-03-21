@extends('layouts.admin')

@section('content')
edit Hotel
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New Hotel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('hotel.update',$hotel->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" >Hotel Name</label>
                            <input  name="hotel_name" type="text" class="form-control"  placeholder="Enter Place Name" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >type of Hotel </label>
                            <input  name="type" type="text" class="form-control"  placeholder="Enter Place type" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >Address</label>
                            <input  name="address" type="text" class="form-control"  placeholder="Enter address " required >
                            
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
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
