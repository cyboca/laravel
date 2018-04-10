<!-- 存放在 resources/views/child.blade.php -->

@extends('layouts.master')

@section('title', 'Page Title test')

@section('sidebar')
    @parent
    <p>This is appended to the master sidebar.</p>
    <p>add another p tag</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection