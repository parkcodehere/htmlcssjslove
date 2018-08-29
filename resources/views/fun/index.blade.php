@extends('layout.bootstrap.base')

@section('head')
  <style>
    .main {
      padding-top: 64px;
      text-align: center;
    }
    .list-group {
      display: inline-block;
      text-align: left;
    }
  </style>
@endsection

@php
  $items = [
    'test' => ['test'],
    'piano' => ['Piano'],
    'game-boards' => ['Game Boards'],
    'google-logo-colors' => ['Google Logo Colors'],
    'how-many-14' => ['How Many 14?'],
    'fb-cover-design' => ['Facebook Cover Design'],
    'colors' => ['Colors'],
  ];
@endphp

@section('content')
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="main">
          <ul class="list-group">
            @foreach ($items as $k => $i)
              <li class="list-group-item">
                <a href="{{ url('/fun/'.$k) }}">{{ $i[0] }}</a>
              </li>
            @endforeach
            <li class="list-group-item">Dapibus ac facilisis in</li>
            <li class="list-group-item">Morbi leo risus</li>
            <li class="list-group-item">Porta ac consectetur ac</li>
            <li class="list-group-item">Vestibulum at eros</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
