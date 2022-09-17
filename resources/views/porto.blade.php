@extends('layouts.main')

@section('body')
    <div class="porto-detail">
        <div class="detail-title">
            {{ $item->name }}
            <div class="icons-link">
                <p>See More at:</p>
                <a href=""><i data-feather="github"></i></a>
                <a href=""><i data-feather="link"></i></a>
            </div>
        </div>
        <div class="detail-image">
            <img src="{{ asset($item->directory) }}" alt="">
        </div>
        <div class="detail-desc">
            {{ $item->desc }}
        </div>
    </div>
@endsection
