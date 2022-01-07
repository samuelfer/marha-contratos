@extends('errors::illustrated-layout')

@section('title', 'problemas no servidor')
@section('code', '500')
@section('message')
    Um problema foi encontrado no servidor.<br>Por este motivo não pudemos concluir a requisição solicitada
@stop
