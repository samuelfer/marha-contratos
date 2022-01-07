@extends('errors::illustrated-layout')

@section('title', 'não autorizado')
@section('code', '403')
@section('message')
    Você não está autorizado a realizar esta requisição baseada nas regras de acesso.
@stop
