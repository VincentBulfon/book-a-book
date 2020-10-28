@extends('layouts.base-connection-layout') @section('title', 'Modifier votre mot
de passe') @section('link', './forgotten-password.blade.php')
@section('content')
<x-dynamic-component :component="$componentName"/>
@endsection
@include('layouts.footer')
