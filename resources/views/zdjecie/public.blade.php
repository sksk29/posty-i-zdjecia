@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Zdjęcia publiczne</h3>

            @if(!empty($zdjecia))
                @foreach($zdjecia as $zdjecie)
                    @if(!empty($zdjecie))
                    <div class="card mb-3">
                        <div class="card-body">
                            <h3>
                                {{ $zdjecie->nazwa }}
                            </h3>
                            <img style="max-width: 100px"
                            src="/storage/zdjecia/{{ $zdjecie->nazwaPliku }}" >
                        </div>
                    </div>
                    @endif
                @endforeach
            @endif
    </div>
@endsection