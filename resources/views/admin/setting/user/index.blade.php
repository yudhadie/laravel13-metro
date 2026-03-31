@extends('layouts.app')

@section('content')
    <div class="animate-pulse bg-accent rounded-lg grow h-screen" data-slot="skeleton">
    </div>
@endsection

@push('scripts')
    <x-admin.menu.show menu="menu-setting" />
    <x-admin.menu.active menu="menu-setting-user" />
@endpush
