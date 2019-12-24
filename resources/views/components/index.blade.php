@foreach($components as $component)
	<div>
		<a href="{{route('components.show', $component)}}">{{$component}}</a>
	</div>
	
@endforeach