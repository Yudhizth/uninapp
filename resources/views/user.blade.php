@extends('system/admin_template')

@section('content')
<?php 
$page_title='Master User'; 
$page_description='Halaman untuk input permohonan';
$level='Master';
$here='User';
?>
@if (Session::has('message1'))
		<div class='col-md-10'>	 			  
		<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <i class="icon fa fa-check"></i>
            {{ Session::get('message1') }}
        </div>
		</div>

	@endif
	
    <div class='row'>
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Master User</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th>Nama</th>
                  <th>Email</th>
				  
                  <th>Aksi</th>
                
                </tr>
                
                @foreach($users as $user)
                
                <tr>
                 	
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                 
				 
                  <td><a href="detail/{{$user->id}}">
				  		<button type="button" class="btn btn-info"> 
				  		<i class="fa fa-play"></i> Detail</button>
              		 </a>
              		 <a href="edit/{{$user->id}}">
				  		<button type="button" class="btn btn-success">
				  		<i class="fa fa-edit"></i> Edit</button>
              		 </a>
              		 <a href="delete/{{$user->id}}">
				  		<button type="button" class="btn btn-danger">
				  		<i class="fa fa-warning"></i> Delete</button>
              		 </a>
                 <!-- <td><a class="btn btn-app" href="edit/{{$user->id}}">
				  		<i class="fa fa-edit"></i> Edit
              		 </a>
                  <td><a class="btn btn-app" href="delete/{{$user->id}}">
				  		<i class="fa fa-warning"></i> Delete
              		 </a></td>
                 -->
                </tr>
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
            <div class="box-footer clearfix">
              {{$users->links()}}
            </div>
          </div>
            
            
            
          </div>
          <!-- /.box -->
    </div><!-- /.row -->
@endsection