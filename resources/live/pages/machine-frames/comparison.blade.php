@extends('frontend.layout.layout')
@section('schemahtml')itemscope itemtype="http://schema.org/Article"@endsection
@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection
@section('styles') @endsection
@section('scripts') @endsection
@section('top')
    @include('frontend/top-default')
@endsection
@section('submenu') @endsection
@section('slider')
    @include('frontend/layout/temp-title')
@endsection
@section('pagetitle')

@endsection
@section('content')

<!-- Content ============================================= -->
<section id="content">
	<div class="container clearfix">
		<div class="fancy-title title-dotted-border title-center">
			<h3>Comparison Table</h3>
		</div>
		<div class="table-responsive">
			<table class="table table-hover table-comparison nobottommargin">
				<thead>
					<tr>

						<th>&nbsp;</th>
						<th>GQ Frame</th>
						<th>Gracie King</th>
						<th>Gracie Queen</th>
						<th>SR-2 Frame</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>&nbsp;</td>
						<td><img src="{!! url('frontend/images/product-overviews/gq-frame/gq--frame-438.png') !!}" alt="Grace GQ Machine Quilting Frame" /></td>
						<td><img src="{!! url('frontend/images/product-overviews/gracie-king/gracie-king-438.png') !!}" alt="Gracie King Machine Quilting Frame" /></td>
						<td><img src="{!! url('frontend/images/product-overviews/gracie-queen/gracie-queen-438.png') !!}" alt="Gracie Queen Machine Quilting Frame" /></td>
						<td><img src="{!! url('frontend/images/product-overviews/sr-2-frame/sr-2-frame-438.png') !!}" alt="SR-2 Machine Quilting Frame" /></td>
					</tr>
					<tr>
						<td>Sets up in sizes:</td>
						<td>King, Crib</td>
						<td>King, Queen, Crib</td>
						<td>Queen, Crib</td>
						<td>Queen, Crib</td>
					</tr>
					<tr>
						<td>Maximum Length:</td>
						<td>124 Inches</td>
						<td>136 Inches</td>
						<td>100 Inches</td>
						<td>103 Inches</td>
					</tr>
					<tr>
						<td>Maximum Quilting Area</td>
						<td>109</td>
						<td>121</td>
						<td>85</td>
						<td>88</td>
					</tr>
					<tr>
						<td>Maximum Machine Throat Length:</td>
						<td>18 Inches</td>
						<td>18 inches</td>
						<td>18 inches</td>
						<td>13 inches</td>
					</tr>
					<tr>
						<td>Included 4th Rail for Batting:</td>
						<td><i class="icon-ok"></i></td>
						<td><i class="icon-ok"></i> </td>
						<td><i class="icon-remove"></i></td>
						<td><i class="icon-remove"></i></td>
					</tr>
					<tr>
						<td>Track System</td>
						<td>Dual-Wheel SureTrack</td>
						<td>Single-wheel system</td>
						<td>Single-wheel system</td>
						<td>Single-wheel system</td>
					</tr>
					<tr>
						<td>Height Adjustable Legs:</td>
						<td><i class="icon-ok"></i></td>
						<td><i class="icon-ok"></i></td>
						<td><i class="icon-ok"></i></td>
						<td><i class="icon-remove"></i></td>
					</tr>
					<tr>
						<td>Build Material</td>
						<td>Steel</td>
						<td>Wood</td>
						<td>Wood</td>
						<td>Steel</td>
					</tr>
					<tr>
						<td>Rail Material:</td>
						<td>Steel</td>
						<td>Aluminum</td>
						<td>Aluminum</td>
						<td>Steel</td>
					</tr>
					<tr rowspan="3">
						<td>Special Feature</td>
						<td>Optional idler rail available</td>
						<td>Flip-up rail to quickly inspect underside stitching</td>
						<td>Flip-up rail to quickly inspect underside stitching</td>
						<td>2-rail system and "Quilt-Clips" for easiest fabric loading ever</td>
					</tr>
<tr></tr>
					<tr>
						<td>&nbsp;</td>
						<td><a href="{!! url('/' . getLang()) !!}/machine-frames/gq-frame/" class="button button-rounded button-secondary">Learn More</a></td>
						<td><a href="{!! url('/' . getLang()) !!}/machine-frames/gracie-king/" class="button button-rounded button-secondary">Learn More</a></td>
						<td><a href="{!! url('/' . getLang()) !!}/machine-frames/gracie-queen/" class="button button-rounded button-secondary">Learn More</a></td>
						<td><a href="{!! url('/' . getLang()) !!}/machine-frames/sr-2-frame/" class="button button-rounded button-secondary">Learn More</a></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</section>
<!-- #content end -->

@endsection

@section('footer') @endsection
@section('footerscripts') @endsection
@stop
