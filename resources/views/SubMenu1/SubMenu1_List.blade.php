@extends('layout/default')
@section('menu1', 'menu-open')
@section('Sub-menu-1', 'active-sidebar')
<!--===================== TITLE =====================-->
@section('title')
CMS Laravel
@endsection
<!--===================== END =====================-->

<!--===================== CONTENT =====================-->
@section('content')
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-bold" style="font-size: 26px;">Sub Menu 1</h1>
            </div>
            <!--<div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active">Dashboard v2</li>
                    </ol>
                  </div>-->
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    $(document).ready(function () {
        var table_simulasi = $('#example').DataTable({
                    'deferRender': true,
                    //'pageLength'  : 10,
                    "paging": true,
                    'lengthChange': false,
                    'searching': false,
                    'ordering': false,
                    'info': true,
                    'autoWidth': true,
                    'scrollX': false,
                    sDom: 'lrtip',
                    processing: true,
                    serverSide: true,
                    pagingType: 'full_numbers',
                    ajax: function ( data, callback, settings ) {                    
                        var search = $('.InputSearch').val();
                        var filter = $('#filtersimulasi option:selected').val();
                        var sort = $('#sortsimulasi option:selected').val();
                        $.ajax({
                        url: "{{ url('/getListSubMenu1') }}",
                        // dataType: 'text',
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        data: JSON.stringify({'page': ((data.start / 10)+1), "filteredBy" : filter, "sortBy" : sort, "search" : search}),
                        dataType: 'json',
                        contentType: 'application/json',
                        type: 'post',
                        success: function( data, textStatus, jQxhr ){
                            callback({
                                // draw: data.draw,
                                data: data.data,
                                recordsTotal:  data.totalData,
                                recordsFiltered:  data.totalData
                            });
                        },
                        error: function( jqXhr, textStatus, errorThrown ){
                        }
                        });
                    },
                    columns: [
                        { data: "First_name" },
                        { data: "Last_name" },
                        { data: "Position" },
                        { data: "Office" },
                        { data: "Start_date" },
                        { data: "Salary" },
                    ]
            });
    });
</script>
@endsection
<!--===================== END =====================-->
