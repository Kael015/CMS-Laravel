
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('images/logo/rmv2.png') }}" rel="icon">
<link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/jquery-ui/jquery-ui.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{asset('plugins/sweetalert2/sweetalert2.min.css')}}">
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">

<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<style>
  .field-icon {
    float: right;
    margin-left: -25px;
    margin-top: -25px;
    position: relative;
    z-index: 2;
  }

  .container {
    padding-top: 50px;
    margin: auto;
  }
</style>
