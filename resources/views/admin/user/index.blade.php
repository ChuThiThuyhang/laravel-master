@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Data Table With Full Features</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
	                        <tr>
	                            <th>User name</th>
	                            <th>Email</th>
	                            <th>Action</th>
	                        </tr>
                        </thead>
                        <tbody>
                        	@foreach($users as $user)
	                        <tr>
	                            <td> {{ $user->name }} </td>
	                            <td> {{ $user->email }} </td>
	                            <td> 
	                            	<button type="button" class="btn btn-primary">Edit</button> 
	                            	<button type="button" class="btn btn-danger">Delete</button>
	                            </td>
	                        </tr>
	                        @endforeach
                        </tfoot>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@stop

@section('js')
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $(function () {
        $('#example1').DataTable()
    })
</script>
@endsection