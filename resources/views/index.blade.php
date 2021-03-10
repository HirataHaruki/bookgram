@extends('layouts.app')

@section('css')
	<link href="{{ asset('css/top.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="review-index-wrapper">
	@foreach($reviews as $review)
		<div class="card mb50">
			<div class="card-body">
				<h3 class='h3 book-title'>{{ $review->title }}</h3>
				<p class='description'>
					{{ $review->content }}
				</p>
				<a href=""class="btn btn-secondary detail-btn">詳細を読む</a>
			</div>
		</div>
	@endforeach
</div>
@endsection