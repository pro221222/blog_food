@extends('layout')
@section('main')
<div style="width: auto; height: 150px; margin-left: 100px; display:flex">
    <a href="{{ route('Nutrition') }}" style="width: auto; height: auto; color: rgb(255, 255, 255); "> <button >Nutrition</button></a>
    <a href="{{ route('Planner') }}" style="width: 100px; height: 100px; color: #fff"><button style="margin-left: 400px">Planner</button></a>
</div>

@endsection
