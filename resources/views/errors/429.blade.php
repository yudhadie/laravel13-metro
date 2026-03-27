@extends('errors::minimal')

@section('title', __('Terlalu Banyak Request'))
@section('code', '429')
@section('message', __('Anda terlalu banyak melakukan permintaan. Silakan tunggu sebentar.'))
