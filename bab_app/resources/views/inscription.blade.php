@extends('layouts.base-connection-layout')
@section('content')
<x-dynamic-component :component="$componentName"/>
@endsection
@include('layouts.footer')
