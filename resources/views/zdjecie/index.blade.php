@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Moje Zdjęcia</h3>
        <a class="btn btn-success mb-4" href="zdjecie/create">
            Dodaj
        </a>
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