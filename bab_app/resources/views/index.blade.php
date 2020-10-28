@extends('layouts.app-layout') @section('main-content')
@section('navigation-section')
<x-dynamic-component :component="$navigationSection" />
@endsection
<x-dynamic-component :component="$mainComponent" />
@section('parameters-section')
<x-app-menu />
@endsection
@endsection