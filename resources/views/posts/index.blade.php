@extends('layouts.app')

@section('content')
    <div class="row mb-5">
        <div class="col-lg-6 offset-lg-3">
            <h1>Dodaj posta:</h1>

            <form action="{{ route('posts') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <textarea class="form-control w-100" name="body" id="body" 
                        cols="30" rows="10"
                        placeholder="Napisz coś!"></textarea>
                        
                </div>
                @error('body')
                        <div class="alert alert-danger mb-3" role="alert">
                            {{ $message }}
                          </div>
                @enderror
                <div>
                    <button type="submit" class="btn btn-primary w-100">
                            Zapisz</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            @if ($posts->count())
                @foreach ($posts as $post)
                    <div class="mb-3">
                        <a href="" class="">{{ $post->user->name }}</a> <span class="">{{ $post->created_at }}</span>
                        <p>{{ $post->body }}</p>
                    </div>
                @endforeach
            @else 
            <div class="alert alert-warning" role="alert">
                Nie ma żadnych postów do wyświetlenia.
            </div>
            @endif
        </div>
    </div>
    
@endsection