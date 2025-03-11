@extends('layout.app')

@section('content')
<div class="red">
    This is the home page
    <a href="{{ route('cruds.index') }}">crud1</a>
</div>
@endsection