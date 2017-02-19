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

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<!-- Default box -->
		<a href="/admin/sales"><i class="fa fa-angle-double-left"></i> Back to all  <span class="text-lowercase">sales</span></a><br><br>
		  <form method="POST" action="/admin/sales/store" accept-charset="UTF-8">
              {{ csrf_field() }}
              <!-- <input name="_token" type="hidden" value="5G4cbBb5l3kltuLlMb7AaZ05mBlWPIEkEYhakFsV"> -->
    		  <div class="box">
    		    <div class="box-header with-border">
    		      <h3 class="box-title">Add a new  tag</h3>
    		    </div>
    		    <div class="box-body row">
    		      <!-- load the view from the application if it exists, otherwise load the one in the package -->
    		        <!-- load the view from the application if it exists, otherwise load the one in the package -->
                    <!-- text input -->
                    <div class="form-group col-md-12 {{ $errors->has('sales_person_name') ? ' has-error' : '' }}">
                        <label>sales_person_name</label>
                        <input type="text" class="form-control" id="sales_person_name" name="sales_person_name" value="{{ old('sales_person_name') }}" placeholder="sales_person_name">
                        @if ($errors->has('sales_person_name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sales_person_name') }}</strong>
                            </span>
                        @endif
                    </div>
    		    </div><!-- /.box-footer-->
                <div class="box-footer">
                    <div id="saveActions" class="form-group">

                        <input type="hidden" name="save_action" value="save_and_back">

                        <div class="btn-group">

                            <button type="submit" class="btn btn-success">
                                <span class="fa fa-save" role="presentation" aria-hidden="true"></span> &nbsp;
                                <span data-value="save_and_back">Save and back</span>
                            </button>

                            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aira-expanded="false" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Save Dropdown</span>
                            </button>

                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0);" data-value="save_and_edit">Save and edit this item</a></li>
                                <li><a href="javascript:void(0);" data-value="save_and_new">Save and new item</a></li>
                            </ul>

                        </div>

                        <a href="/admin/sales" class="btn btn-default"><span class="fa fa-ban"></span> &nbsp;Cancel</a>
                    </div>
                </div>
    		  </div><!-- /.box -->
		  </form>
	</div>
</div>

@endsection
