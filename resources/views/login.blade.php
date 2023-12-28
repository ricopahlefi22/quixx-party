<form action="{{url('login')}}" method="post">
	@csrf
	<input type="email" value="admin@gmail.com" name="email">
	<input type="password" value="12345678" name="password">
	<button>Masuk</button>
</form>