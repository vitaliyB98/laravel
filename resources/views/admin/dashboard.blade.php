@extends('admin.layouts.app_admin')

@section('content')
	<div class = "container">
		<div class = "row">
			<div class = "col-sm-3">
				<div class = "jumbotron">
					<p><span class = "label label-primary">Категорії 0</span></p>
				</div>
			</div>
			<div class = "col-sm-3">
				<div class = "jumbotron">
					<p><span class = "label label-primary">Матеріали 0</span></p>
				</div>
			</div>
			<div class = "col-sm-3">
				<div class = "jumbotron">
					<p><span class = "label label-primary">Користувачі 0</span></p>
				</div>
			</div>
			<div class = "col-sm-3">
				<div class = "jumbotron">
					<p><span class = "label label-primary">Нові користувачі 0</span></p>
				</div>
			</div>
		</div>
		<div class = "row">
			<div class = "col-sm-6">
			<a class = "btn btn-block btn-default" href = "#">Створити категорію</a>
			<a class = "list-group-item" href = "#">
				<h4 class = "list-group-item-heading">Категорії перша</h4>
				<p class = "list-group-item-text">
					Кількість матеріалів
				</p>
			</a>
			</div>
			<div class = "col-sm-6">
			<a class = "btn btn-block btn-default" href = "#">Створити матеріал</a>
			<a class = "list-group-item" href = "#">
				<h4 class = "list-group-item-heading">Категорії перша</h4>
				<p class = "list-group-item-text">
					Категорія
				</p>
			</a>
			</div>
		</div>
	</div>
@endsection