@extends('layouts.main')

@section('page-title', $comic->title)

@section('main-content')
<div class="container">
    <div class="row py-5">
        <div class="col-12 bg-light">
            <h1>
                {{ $comic->title }}
            </h1>
        </div>

        <div class="card col-3 bg-light">
            <div class="img-box">
                <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            </div>
        </div>

        <div class="card col-9 bg-light">
            <div class="card-body">
                <span class="card-text">
                    <strong>
                        Description:
                    </strong>
                    {{ $comic->description }}
                </span>
                <br>
                <span>
                    <strong>
                        Series:
                    </strong>
                    {{ $comic->series }}
                </span>
                <br>
                <span>
                    <strong>
                        Price:
                    </strong>
                    {{ $comic->price }}€
                </span>
                <br>
                <span>
                    <strong>
                        Artists:
                    </strong>
                    {{ $comic->artists }}
                </span>
                <br>
                <span>
                    <strong>
                        Writers:
                    </strong>
                    {{ $comic->writers }}
                </span>
            </div>
        </div>
    </div>
</div>
@endsection
