@extends('errors::illustrated-layout')

@section('title', 'não autorizado')
@section('code', '429')
@section('message')
'Muitos pedidos foram solicitados.<br>Por motivos de segurança não pudemos exibir.
@stop
