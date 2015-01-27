{{ Form::open([
	'url'    => 'search/'.$currentManual.'/'.$currentVersion,
	'method' => 'GET',
	'class'  => 'navbar-form pull-right',
	'role'   => 'search'
]) }}
	<div class="input-group">
		<label>

		<input type="text" name="q" class="form-control floating-label" required placeholder="Enter search terms">
		</label>
	</div>
{{ Form::close() }}
