  <header class="flex lg:hidden items-center fixed z-10 top-0 start-0 end-0 shrink-0 bg-muted h-(--header-height)"
      id="header">
      <div class="kt-container-fixed flex items-center justify-between flex-wrap gap-3">
          <a href="#">
              <img class="dark:hidden min-h-[30px]" src="{{ asset('assets/media/logos/logo-dark.png') }}" />
              <img class="hidden dark:block min-h-[30px]" src="{{ asset('assets/media/logos/logo-white.png') }}" />
          </a>
          <button class="kt-btn kt-btn-icon kt-btn-ghost -me-2" data-kt-drawer-toggle="#sidebar">
              <i class="ki-filled ki-menu"></i>
          </button>
      </div>
  </header>
