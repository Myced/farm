@extends('layouts.admin')

@section('title')
    {{ __(' Villages') }}
@endsection

@section('css.plugins')
<!-- Bootstrap Select Css -->
<link href="/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

<!-- JQuery DataTable Css -->
<link href="/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2 class="page-header"> Villages </h2>
        </div>

        <div class="card">
            <div class="header">
                <h2> Villages  ({{ count($villages) }})  </h2>
            </div>

            <div class="body">

                <div class="row">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary waves-effect"
                            data-target="#village" data-toggle="modal">
                            <i class="material-icons">add_circle_outline</i>
                            <span> Add Village </span>
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-bordered table-condensed dataTable" id="data">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th> Village </th>
                                        <th>Sub Division</th>
                                        <th>Division</th>
                                        <th>Region</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tfoot>
                                    <tr>
                                        <th>S/N</th>
                                        <th> Village </th>
                                        <th>Sub Division</th>
                                        <th>Division</th>
                                        <th>Region</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>

                                @if(count($villages) == 0)
                                <tbody>
                                    <tr>
                                        <td class="text-center" colspan="7">
                                            <strong class="col-cyan font-20"> No Villages Yets </strong>
                                        </td>
                                    </tr>
                                </tbody>
                                @else
                                    <tbody>
                                        <?php $count = 1; ?>
                                        @foreach($villages as $village)
                                        <tr class="text-dark">
                                            <td> {{ $count++ }} </td>
                                            <td> <strong> {{ $village->name }} </strong> </td>
                                            <td> {{ $village->subDivision->name }} </td>
                                            <td> {{ $village->division->name }} </td>
                                            <td> {{ $village->region->name }} </td>
                                            <td>


                                                <a href="javascript:void(0)" data-id1="{{ $village->id }}"
                                                    class="btn bg-red waves-effect" title="Delete Subdivision"
                                                    data-toggle="tooltip" data-placement="top" title="Delete Village">
                                                    <i class="material-icons">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                @endif


                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="village" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <form class="" action="{{ route('village.store') }}" method="post" id="form">
               @csrf
               <div class="modal-header">
                   <button type="button" role="close" data-dismiss="modal" name="button"
                    class="close">
                       &times;
                   </button>
                   <h4 class="modal-title " id="defaultModalLabel">Add Village</h4>
               </div>
               <div class="modal-body">
                   <br>
                   <div class="row">
                       <div class="col-md-12">
                           <div class="col-red text-center" id="alert">

                           </div>
                       </div>
                   </div>

                   <div class="row clearfix">
                       <div class="col-md-12">
                           <div class="row clearfix">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name"
                                            placeholder="Village Name"
                                                required/>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row clearfix">

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="region" name="region">
                                                <option value="">-- Select Region --</option>
                                                @foreach($regions as $region)
                                                    <option value="{{ $region->id }}">
                                                        {{ $region->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>



                            </div>

                            <div class="row clearfix">



                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="division" name="division">
                                                <option value="">-- Select Division --</option>
                                                @foreach($divisions as $division)
                                                    <option value="{{ $division->id }}">
                                                        {{ $division->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">

                                    <div class="form-group">
                                        <div class="form-line">
                                            <select class="form-control show-tick" id="division" name="subdivision">
                                                <option value="">-- Select Sub Division --</option>
                                                @foreach($subDivisions as $division)
                                                    <option value="{{ $division->id }}">
                                                        {{ $division->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                   </div>

               </div>
               <div class="modal-footer">
                   <button type="submit" class="btn btn-primary waves-effect">  Add Village </button>
                   <button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">CLOSE</button>
               </div>
           </form>
       </div>
   </div>
</div>
@endsection

@section('scripts')
<!-- Select Plugin Js -->
<script src="/plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="/plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>

<script src="/assets/js/pages/ui/tooltips-popovers.js"></script>

<script type="text/javascript">
$("#form").submit(function(e){
    var region = $("#region").val();

    if(region == '')
    {
        e.preventDefault();
        $("#alert").text('Please select the region');
    }

});

$('#data').DataTable({
    responsive: true
});
</script>
@endsection
