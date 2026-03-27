@extends('errors::minimal')

@section('title', __('Tidak Terautentikasi'))
@section('code', '401')
@section('message', __('Anda harus login terlebih dahulu untuk mengakses halaman ini.'))
