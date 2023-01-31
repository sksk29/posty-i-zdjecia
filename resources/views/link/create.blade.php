@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Dodaj link</h3>

    <div class="card mb-3">
        <div class="card-body">

            <form
                action="/link"
                method="post"
                enctype="application/x-www-form-urlencoded">

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
                    <label>Dodaj link</label>
                    <input type="text" name="link" multiple class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Dodaj</button>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection