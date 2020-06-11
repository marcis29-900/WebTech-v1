@extends('layouts.app')

@section('content')

<div class="container">
  @if (Auth::user()->permissions == 1)
  <?php foreach ($users as $value): ?>
    <div class="">{{ $value->id }}</div>
    <div>{{ $value->name }}</div>
    <div>{{ $value->email }}</div>
    <div>{{ $value->username }}</div>
  <?php endforeach; ?>
  @else
    <br>
    <br>
    <p>Not authorized.</p>
  @endif
</div>
@endsection
