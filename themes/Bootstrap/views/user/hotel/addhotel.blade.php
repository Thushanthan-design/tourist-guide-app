@extends('layouts.hotel')

@section('content')
Add hotel
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('New hotel') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="post" action="{{route('hotel.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label" >hotel Name</label>
                            <input  name="hotel_name" type="text" class="form-control"  placeholder="Enter hotel Name" required >
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label" >type of hotel </label>
                            <input  name="type" type="text" class="form-control"  placeholder="Enter hotel type" required >
                            
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
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
