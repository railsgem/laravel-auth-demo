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
                     <tr role="row" class="odd">
                         <td>{{$store_item->sales_person_name}}</td>
                         <td>{{$store_item->name_of_cafe}}</td>
                         <td>{{$store_item->name_of_cafe}}</td>
                         <td>{{$store_item->contact_number}}</td><!-- Single edit button -->
                     	<td><a href="/admin/sales/edit/{{$store_item->id}}" class="btn btn-xs btn-default"><i class="fa fa-edit"></i> Edit</a>
                            <a class="btn btn-xs btn-danger"  data-toggle="modal" data-target="#delete_sales_<?php echo $store_item->id;?>"><i class="fa ion-trash-a"></i> Delete</a>

                             @include('sales.delete')
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
