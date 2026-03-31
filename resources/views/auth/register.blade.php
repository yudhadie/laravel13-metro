<!DOCTYPE html>
<html class="h-full" data-kt-theme="true" data-kt-theme-mode="system" dir="ltr"
    {{ str_replace('_', '-', app()->getLocale()) }}>
@include('layouts.partials.head')

<body class="antialiased flex h-full text-base text-foreground bg-background">
    @include('layouts.partials.theme')

    <style>
        .page-bg {
            background-image: url({{ asset('assets/media/bg/bg-10.png') }});
        }

        .dark .page-bg {
            background-image: url({{ asset('assets/media/bg/bg-10-dark.png') }});
        }
    </style>
    <div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
        <div class="kt-card max-w-[500px] w-full">
            <form class="kt-card-content flex flex-col gap-5 p-10" id="sign_in_form" method="POST"
                action="{{ route('register') }}">
                @csrf
                <div class="text-center mb-4">
                    <img src="{{ asset('assets/media/logos/logo-dark.png') }}" alt="Logo" class="h-20 mx-auto" />
                </div>
                <div class="text-center mb-2.5">
                    <h3 class="text-lg font-medium text-mono leading-none mb-2.5">
                        DAFTAR
                    </h3>
                    <div class="flex items-center justify-center font-medium">
                        <span class="text-sm text-secondary-foreground me-1.5">
                            Sudah punya akun?
                        </span>
                        <a class="text-sm link" href="{{ route('login') }}">
                            Login
                        </a>
                    </div>
                </div>
                @include('layouts.partials.alert')
                {{-- <div class="grid gap-2.5">
                    <a class="kt-btn kt-btn-outline justify-center" href="#">
                        <img alt="" class="size-3.5 shrink-0"
                            src="{{ asset('assets/media/brand-logos/google.svg') }}" />
                        Use Google
                    </a>
                </div>
                <div class="flex items-center gap-2">
                    <span class="border-t border-border w-full">
                    </span>
                    <span class="text-xs text-muted-foreground font-medium uppercase">
                        Or
                    </span>
                    <span class="border-t border-border w-full">
                    </span>
                </div> --}}
                <div class="flex flex-col gap-1">
                    <label class="kt-form-label font-normal text-mono">
                        Nama
                    </label>
                    <input class="kt-input" placeholder="Nama Anda" type="text" name="name"
                        value="{{ old('name') }}" autofocus />
                </div>
                <div class="flex flex-col gap-1">
                    <label class="kt-form-label font-normal text-mono">
                        Email
                    </label>
                    <input class="kt-input" placeholder="email@email.com" type="text" name="email"
                        value="{{ old('email') }}" />
                </div>
                <div class="flex flex-col gap-1">
                    <div class="flex items-center justify-between gap-1">
                        <label class="kt-form-label font-normal text-mono">
                            Password
                        </label>
                    </div>
                    <div class="kt-input" data-kt-toggle-password="true">
                        <input name="password" placeholder="Enter Password" type="password" value="" />
                        <button class="kt-btn kt-btn-sm kt-btn-ghost kt-btn-icon bg-transparent! -me-1.5"
                            data-kt-toggle-password-trigger="true" type="button">
                            <span class="kt-toggle-password-active:hidden">
                                <i class="ki-filled ki-eye text-muted-foreground">
                                </i>
                            </span>
                            <span class="hidden kt-toggle-password-active:block">
                                <i class="ki-filled ki-eye-slash text-muted-foreground">
                                </i>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="flex flex-col gap-1">
                    <label class="kt-form-label font-normal text-mono">
                        Ulangi Password
                    </label>
                    <div class="kt-input" data-kt-toggle-password="true">
                        <input name="password_confirmation" placeholder="Re-enter Password" type="password"
                            value="" />
                        <button class="kt-btn kt-btn-sm kt-btn-ghost kt-btn-icon bg-transparent! -me-1.5"
                            data-kt-toggle-password-trigger="true" type="button">
                            <span class="kt-toggle-password-active:hidden">
                                <i class="ki-filled ki-eye text-muted-foreground">
                                </i>
                            </span>
                            <span class="hidden kt-toggle-password-active:block">
                                <i class="ki-filled ki-eye-slash text-muted-foreground">
                                </i>
                            </span>
                        </button>
                    </div>
                </div>
                <button class="kt-btn kt-btn-primary flex justify-center grow">
                    Daftar
                </button>
            </form>
        </div>
    </div>

    @include('layouts.partials.script')
</body>

</html>
