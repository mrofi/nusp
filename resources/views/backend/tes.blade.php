@extends('master')

@section('contentMain')

	{!! nusp_forms(array_except($forms, ['foto_id'])) !!}

@endsection