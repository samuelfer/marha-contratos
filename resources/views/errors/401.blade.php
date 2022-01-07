@extends('errors::illustrated-layout')

@section('title', 'não autorizado')
@section('code', '401')
@section('message')
    Você não está autorizado a realizar esta requisição.
@stop
