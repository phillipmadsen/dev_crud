@extends('admin.layouts.admin')
@section('title')
	replace this text
@endsection

@section('per-page-stylesheets')@endsection
@section('header-page-script')@endsection

@section('parent-breadcrumb')
Dashboard
@endsection

@section('active-breadcrumb')
	active
@endsection

@section('header-title')
	this is the header title section
@endsection

@section('header-title-small')
	small subline text here
@endsection


@section('content')
	<h1>this is content</h1>
@endsection

@section('page-section')
	page section
@endsection

@section('admin-modal-config')@endsection
@section('per-page-javascripts')@endsection
@section('footer-page-script')@endsection
@section('custom-in-script')
	Main.init();
	Index.init();
@endsection
{{--
 @if (Request::url() === 'users')
  <h1>this is a index page</h1>
  <script src="{!! asset('/assets/plugins/jquery-validation/dist/jquery.validate.min.js') !!}"></script>
  <script src="{!! asset('/assets/plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js') !!}"></script>
  <script src="{!! asset('/assets/js/form-wizard.js') !!}"></script>
  @elseif  (Request::url() === 'users/edit' || 'users/show')
  <script src="{!! asset('/assets/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js') !!}"></script>
  <script src="{!! asset('/assets/plugins/jquery.pulsate/jquery.pulsate.min.js') !!}"></script>
  <script src="{!! asset('/assets/js/pages-user-profile.js') !!}"></script>
  @endif
  --}}