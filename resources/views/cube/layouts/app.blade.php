@include('cube.includes.header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

@section('top_nav')
@show
@include('cube.includes.side_bar')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
@section('mini_top_nav')
@show
@section('content')
@show

@include('cube.includes.footer')
@include('cube.includes.js_script')

