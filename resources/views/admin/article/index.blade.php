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
	                            <th> Title </th>
	                            <th style="width: 300px"> Sologan </th>
                                <th> Content </th>
                                <th> Create by </th>
	                            <th> Created at </th>
                                <th> Action </th>
	                        </tr>
                        </thead>
                        <tbody>
                        	@foreach($articles as $article)
	                        <tr>
	                            <td> {{ $article->title }} </td>
                                <td> {{ $article->sologan }} </td>
                                <td>
                                    <!-- Large modal -->
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#content-{{$article->id}}"> View content </button>

                                    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="content-{{$article->id}}">
                                      <div class="modal-dialog modal-lg">
                                        <div class="modal-content">

                                          <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">The content of article</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            {!! $article->content !!}
                                          </div>
                                        </div>
                                    </div>
                                </td>
                                <td> {{ $article->user->name }} </td>
	                            <td> {{ $article->created_at }} </td>
	                            <td> 
                                    @if ($article->is_show == 0)
                                    <form method="POST" action="{{ route('admin.show-article') }}">
                                        @csrf
                                        <input type="hidden" name="article_id" value="{{$article->id}}">
	                            	    <button type="submit" class="btn btn-primary status-article">Show</button>
                                    </form>
                                    @else
                                    <form method="POST" action="{{ route('admin.hide-article') }}">
                                        @csrf
                                        <input type="hidden" name="article_id" value="{{$article->id}}">
	                            	    <button type="submit" class="btn btn-danger status-article">Hide</button>
                                    </form>
                                    @endif
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

        $('.status-article').click(function(e) {
            if (!confirm('Do you want change status this article?')) {
                e.preventDefault();
            }
        })
    })

</script>
@endsection