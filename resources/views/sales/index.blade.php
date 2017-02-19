@extends('backpack::layout')

@section('header')
    <section class="content-header">
      <h1>
        {{ trans('backpack::base.dashboard') }}<small>{{ trans('backpack::base.first_page_you_see') }}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url(config('backpack.base.route_prefix', 'admin')) }}">{{ config('backpack.base.project_name') }}</a></li>
        <li class="active">{{ trans('backpack::base.dashboard') }}</li>
      </ol>
    </section>
@endsection


@section('content')

<!-- Default box -->
 <div class="row">

   <!-- THE ACTUAL CONTENT -->
   <div class="col-md-12">
       <div class="box">
            <div class="box-header">
                <a href="/admin/sales/create" class="btn btn-primary ladda-button" data-style="zoom-in"><span class="ladda-label"><i class="fa fa-plus"></i> Add store</span></a>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </thead>
                <tbody>
                 @if(count($sales)>0)
                     @foreach ($sales as $store_item)
                     <!-- <?php var_dump($store_item) ?> -->
                     <tr role="row" class="odd">
                         <td>{{$store_item->sales_person_name}}</td>
                         <td>{{$store_item->name_of_cafe}}</td>
                         <td>{{$store_item->name_of_cafe}}</td>
                         <td>{{$store_item->contact_number}}</td><!-- Single edit button -->
                     	<td><a href="http://127.0.0.1:8000/admin/user/1/edit" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit</a>
                             <a href="http://127.0.0.1:8000/admin/user/1" class="btn btn-xs btn-default" data-button-type="delete"><i class="fa fa-trash"></i> Delete</a>
                         </td>
                     </tr>
                     @endforeach
                 @else
                 <tr class="odd"><td valign="top" colspan="6" class="dataTables_empty">No data available in table</td></tr></tbody>
                 @endif

                </tbody>
                <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
   </div>

 </div>


@endsection

<!-- jQuery 2.2.3 -->
<script src="/vendor/adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="/vendor/adminlte/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="/vendor/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/vendor/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="/vendor/adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/vendor/adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/vendor/adminlte/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/vendor/adminlte/dist/js/demo.js"></script>
<!-- page script -->
<script>

jQuery(document).ready(function($){
  $("#example1").DataTable();
  $('#example2').DataTable({
    "paging": true,
    "lengthChange": false,
    "searching": false,
    "ordering": true,
    "info": true,
    "autoWidth": false
  });
});

  // $(function () {
  //   $("#example1").DataTable();
  //   $('#example2').DataTable({
  //     "paging": true,
  //     "lengthChange": false,
  //     "searching": false,
  //     "ordering": true,
  //     "info": true,
  //     "autoWidth": false
  //   });
  // });
</script>
