@extends('layouts.app')

@section('content')
<div class="container is-fluid">
<usertrades instrument="{{ $instrument }}"></usertrades>
{{ $instrument }}
    
</div>
@endsection
