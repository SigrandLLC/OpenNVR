@extends('admin._layouts.default')

@section('main')

	<h2>Edit camera</h2>

	@include('admin._partials.notifications')

	{{ Form::model($camera, array('method' => 'put', 'route' => array('admin.cameras.update', $camera->id))) }}

		<div class="control-group">
			{{ Form::label('title', 'Title') }}
			<div class="controls">
				{{ Form::text('title') }}
			</div>
		</div>

		<div class="control-group">
			{{ Form::label('description', 'Description') }}
			<div class="controls">
				{{ Form::textarea('description') }}
			</div>
		</div>

        <div class="control-group">
            {{ Form::label('url', 'Url') }}
            <div class="controls">
                {{ Form::text('url') }}
            </div>
        </div>

        <div class="control-group">
    {{ Form::label('share', 'Share To') }}
    <div class="controls">
        {{ Form::textarea('share') }}
    </div>
</div>

		<div class="form-actions">
			{{ Form::submit('Save', array('class' => 'btn btn-success btn-save btn-large')) }}
			<a href="{{ URL::route('admin.cameras.index') }}" class="btn btn-large">Cancel</a>
		</div>

	{{ Form::close() }}

@stop
