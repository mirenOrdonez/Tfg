@extends('layouts.layoutPrincipal')

@section('titulo', 'Admin')

@section('encabezado')
    @parent
@endsection

<br><br>

@section('contenido')

<body class="fondo">
	<div class="container">
		<div class="row justify-content-center">
			<img src="{{ asset('img/logoletra.png') }}">
		</div>
		<div class="row justify-content-center">
			<form>
				<div class="form-group">
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-block btn-info">Log in</button>
				</div>
			</form>
		</div>
	</div>
</body>

@endsection

