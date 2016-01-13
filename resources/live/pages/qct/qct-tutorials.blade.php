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
<section id="page-title">
    <div class="container clearfix">
        <h1>Tutorials</h1>
        <span>Learn how to use QuiltMotion. </span>
         <ol class="breadcrumb" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
        <li class="breadcrumb-lead"><a title="Go Home." href="{!! url('/' . getLang()) !!}/" itemprop="url"><span itemprop="title">Home</span></a></li>
          <li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a title="Go to QuiltMotion." href="{!! url('/' . getLang()) !!}/automation/qct/" itemprop="url"><span itemprop="title">QuiltMotion</span></a></li>
          <li class="active" itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title">QuiltMotion Tutorials</span></li>
        </ol>
    </div>
</section>
@endsection
@section('content')
comming soon...
@endsection

@section('footer') @endsection
@section('footerscripts')
  @include('frontend/pages/footscript')
@endsection
@stop
