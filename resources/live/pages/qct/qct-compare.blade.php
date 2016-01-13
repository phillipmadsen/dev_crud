@extends('frontend.layout.layout')
@section('schemahtml')itemscope itemtype="http://schema.org/Article"@endsection
@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection
@section('jsonschema')
  @include('frontend/pages/qct/partials/microjson')
@endsection
@section('bodytag')rows @endsection
@section('styles')
 {!! HTML::style("frontend/custom-css/qct.css") !!}
@endsection
@section('scripts') @endsection
@section('top')
    @include('frontend/top-default')
@endsection
@section('submenu')
  @include('frontend/pages/qct/partials/submenu')
@endsection
@section('slider') @endsection
@section('intro')

@endsection
@section('pagetitle')
	@include('frontend/layout/temp-title')
@endsection
@section('content')

@endsection

@section('footer') @endsection
@section('footerscripts')
  @include('frontend/pages/footscript')
@endsection
@stop
