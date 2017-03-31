<form action="{{ url('/') }}?foo=get&baz=get" method="POST">

	{{ csrf_field() }}	

	<input type="hidden" name="foo" value="bar" />
	<input type="hidden" name="baz" value="boo" />

	<input type="submit" value="Send" />

</form>