@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Dodaj zdjęcie</h3>

    <div class="card mb-3">
        <div class="card-body">

            <form
                action="/zdjecie"
                method="post"
                enctype="multipart/form-data">

                {{csrf_field()}}

                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">
                            {{$error}}
                        </div>
                    @endforeach
                @endif

                <div class="form-group">
                    <label>Nazwa</label>
                    <input type="text" name="nazwa" class="form-control">
                </div>

                <div class="form-group">
                    <label>Dodaj plik</label>
                    <input type="file" name="plik" multiple class="form-control">
                </div>

                <div class="form-check">
                    <input
                    type="checkbox"
                    class="form-check-input"
                    id="publiczne"
                    name="publiczne"
                    value="publiczne">

                    <label class="form-check-label" for="publiczne">publiczne</label>

                </div>

                <div class="form-group">
                    <button class="btn btn-success">Dodaj!</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection