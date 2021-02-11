@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-uppercase">{{ __('Bookshop!') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @foreach($books as $book)
                            <div class="card m-1" style="width: 19.34%;">
                                <img class="card-img-top" src="{{url('/images/cover.jpg')}}" alt="{{ $book->cover }}">
                                <div class="card-body text-center">
                                    <h5 class="card-title"> {{ $book->author }}</h5>
                                    <p class="card-text">{{ $book->genre }}</p>
                                    <a href="#" class="btn btn-primary">Check Book</a>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="mt-3">
                        {{ $books->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
