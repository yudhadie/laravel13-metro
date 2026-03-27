<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="system" dir="ltr"
    {{ str_replace('_', '-', app()->getLocale()) }}>
@include('layouts.partials.head')

<body class="antialiased flex h-full text-base text-foreground bg-background">
    @include('layouts.partials.theme')

    <div class="flex items-center justify-center grow h-full">
        <div class="flex flex-col items-center">
            <span class="kt-badge kt-badge-primary kt-badge-outline mb-3">
                @yield('code')
            </span>
            <h3 class="text-2xl font-semibold text-mono text-center mb-2">
                @yield('title')
            </h3>
            <div class="text-base text-center text-secondary-foreground mb-10">
                @yield('message')
            </div>
            <a class="kt-btn kt-btn-primary flex justify-center mt-4" href="/">
                Kembali ke Home
            </a>
        </div>
    </div>

    @include('layouts.partials.script')
</body>

</html>
