@extends('layouts.master')

@section('content')
	<div class="container-fluid">
		<div class="row">
			@if ( ! is_null($toc))
				<div id="sidebar" class="col-md-3">
					<nav class="menu">
						{{ $toc }}
					</nav>
				</div>

				<div class="col-md-9 pages">
					<div class="col-md-10">
						<div class="well page active documentation">
						{{ $content }}

						</div>
						@include('partials.footer')
					</div>

				</div>
			@else
				<div class="col-md-12 documentation">
					<p class="pull-right">
						<small>{{ $lastUpdated }}</small>
					</p>

					{{ $content }}

					@include('partials.footer')
				</div>
			@endif
		</div>
	</div>
@stop
