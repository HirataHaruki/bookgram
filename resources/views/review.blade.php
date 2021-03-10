@extends('layouts.app')

@section('content')

<h1 class="text-center">レビュー投稿</h1>

@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif

<div class="review-create-wrapper">
	<form method='POST' action="{{ route('store') }}">
		@csrf
		<div class="card">
			<div class="card-body">
				<div class="form-group">
					<label>本のタイトル</label>
					<input type='text' class='form-control' name='title' placeholder='タイトルを入力'>
				</div>
				<div class="form-group">
					<label>本の内容</label>
					<input type='text' class='form-control' name='content' placeholder='内容を入力'>
				</div>
				<div class="form-group">
					<label>感想</label>
					<input type='text' class='form-control' name='impression' placeholder='感想を入力'>
				</div>
				<input type='submit' class='btn btn-primary' value='レビューを登録'>
			</div>
		</div>
	</form>
</div>
@endsection