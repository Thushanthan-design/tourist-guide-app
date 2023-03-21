@extends('layouts.admin')
@section('content')
admindash>>
<style>
  body{
    background:#eee;    
}
.main-box.no-header {
    padding-top: 20px;
}
.main-box {
    background: #FFFFFF;
    -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
    -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
    box-shadow: 1px 1px 2px 0 #CCCCCC;
    margin-bottom: 16px;
    -webikt-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
}
.table a.table-link.danger {
    color: #e74c3c;
}
.label {
    border-radius: 3px;
    font-size: 0.875em;
    font-weight: 600;
}
.user-list tbody td .user-subhead {
    font-size: 0.875em;
    font-style: italic;
}
.user-list tbody td .user-link {
    display: block;
    font-size: 1.25em;
    padding-top: 3px;
    margin-left: 60px;
}
a {
    color: #3498db;
    outline: none!important;
}
.user-list tbody td>img {
    position: relative;
    max-width: 50px;
    float: left;
    margin-right: 15px;
}

.table thead tr th {
    text-transform: uppercase;
    font-size: 0.875em;
}
.table thead tr th {
    border-bottom: 2px solid #e7ebee;
}
.table tbody tr td:first-child {
    font-size: 1.125em;
    font-weight: 300;
}
.table tbody tr td {
    font-size: 0.875em;
    vertical-align: middle;
    border-top: 1px solid #e7ebee;
    padding: 12px 8px;
}
a:hover{
text-decoration:none;
}
</style>
<div>
  <style>
    body{
    margin-top:20px;
    background:#FAFAFA;
}
.order-card {
    color: #fff;
}

.bg-c-blue {
    background: linear-gradient(45deg,#4099ff,#73b4ff);
}

.bg-c-green {
    background: linear-gradient(45deg,#2ed8b6,#59e0c5);
}

.bg-c-yellow {
    background: linear-gradient(45deg,#FFB64D,#ffcb80);
}

.bg-c-pink {
    background: linear-gradient(45deg,#FF5370,#ff869a);
}


.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    box-shadow: 0 1px 2.94px 0.06px rgba(4,26,55,0.16);
    border: none;
    margin-bottom: 30px;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

.card .card-block {
    padding: 25px;
}

.order-card i {
    font-size: 26px;
}

.f-left {
    float: left;
}

.f-right {
    float: right;
}
</style>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">

    <div class="row">
        <div class="col-md-4 col-xl-3">
        <a href="{{Route('addpost')}}" >
            <div class="card bg-c-blue order-card">
                <div class="card-block">
                    <h6 class="m-b-20">Add Blogs</h6>
                    <h2 class="text-right"><i class="fa fa-cart-plus f-left"></i><span>486</span></h2>
                    <p class="m-b-0">Add new Blogs<span class="f-right">351</span></p>
                </div>
            </div>
            </a>
        </div>
        
        <div class="col-md-4 col-xl-3">
        <a href="{{Route('admin.addhotel')}}" >
            <div class="card bg-c-green order-card">
                <div class="card-block">
                    <h6 class="m-b-20"> ADD HOTEL AGENCY </h6>
                    <h2 class="text-right"><i class="fa fa-h-square f-left"></i><span>486</span></h2>
                    <p class="m-b-0">add new agency<span class="f-right">351</span>
                   </p>
                </div>
            </div>
            </a>
        </div>
        
        <div class="col-md-4 col-xl-3">
        <a href="{{Route('admin.addtravel')}}">
            <div class="card bg-c-yellow order-card">
                <div class="card-block">
                    <h6 class="m-b-20">ADD TRAVEL AGENCY</h6>
                    <h2 class="text-right"><i class="fa fa-taxi f-left"></i><span>535</span></h2>
                    <p class="m-b-0">add new agency here<span class="f-right">351</span>  
                  </p>
                </div>
            </div>
            </a>
            
        </div>
        
        <div class="col-md-4 col-xl-3">
        <a href="{{Route('admin.addplaces')}}" >
            <div class="card bg-c-pink order-card">
               
                <div class="card-block">
                    <h6 class="m-b-20">ADD PLACES</h6>
                    <h2 class="text-right"><i class="fa fa-map-marker f-left"></i><span>486</span></h2>
                    <p class="m-b-0">add new places <span class="f-right">351</span>
                    </p>
                </div>
                
            </div>
</a>
        </div>
	</div>
</div>
</div>


              

<br><br>


<div class="container py-5 h-100">
  <h1>Places Table</h1>
   <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($places as $place)
                <tr>
                    <th scope="row">{{$place->id}}</th>
                    <td>{{$place->place_name}}</td>
                    <td>{{$place->description}}</td>
                    <td>
                        
                        <a href="{{Route('place.edit',$place->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{Route('place.delete',$place->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        </div>

        
        <br><br>


        
 <div>
<h1>Admin's Blogs</h1>
<table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->description}}</td>
                    <td>
                        
                        <a href="{{Route('posts.edit',$post->id)}}" class="btn btn-sm btn-primary">Edit</a>
                        <a href="{{Route('posts.delete',$post->id)}}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
        </div>
     
        

        <br><br>

        <section  class="vh-100" style="background-color: #f4f5f7;">
<h1>User Table</h1>
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
<hr>
<div class="container bootstrap snippets bootdey">
    <div class="row">
        <div class="col-lg-12">
            <div class="main-box no-header clearfix">
                <div class="main-box-body clearfix">
                    <div class="table-responsive">
                        <table class="table user-list">
                            <thead>
                                <tr>
                                <th><span>Name</span></th>
                                <th><span>Email</span></th>

                                <th><span>Address</th>
                               

                                <th>Action</th>
                      
                            
                                <th>&nbsp;</th>
                                </tr>
                            </thead>
                            @foreach ($users as $user)
                            <tbody>
                              
                           
        
 
                                    <td>
                                        <img src="images/profile.jpg" alt="">
                                      
                                        <span class="user-subhead">{{$user->name}}</span>
                                    </td>
                                    <td>{{$user->email}}</td>
                                   
                                    <td>{{$user->address}}</td>
                                  
                                  
                                
                                    <td style="width: 20%;">
                                        <a href="#" class="table-link  text-warning">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                        <a href="{{Route('user.edit',$user->id)}}" class="table-link  text-info">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                        <a href="{{Route('user.delete',$user->id)}}" class="table-link danger">
                                            <span class="fa-stack">
                                                <i class="fa fa-square fa-stack-2x"></i>
                                                <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                            </span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
   

    
    </section>
    <br>
@endsection