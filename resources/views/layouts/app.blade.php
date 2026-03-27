  <!DOCTYPE html>
  <html class="h-full" data-kt-theme="true" data-kt-theme-mode="system" dir="ltr"
      {{ str_replace('_', '-', app()->getLocale()) }}>
  @include('layouts.partials.head')

  <body
      class="antialiased flex h-full text-base text-foreground bg-background [--header-height:60px] [--sidebar-width:270px] lg:overflow-hidden bg-muted">
      @include('layouts.partials.theme')

      <div class="flex grow">
          @include('layouts.partials.header')
          @include('layouts.partials.sidebar')

          <div class="flex flex-col lg:flex-row grow pt-(--header-height) lg:pt-0">
              <div
                  class="flex flex-col grow items-stretch rounded-xl bg-background border border-input lg:ms-(--sidebar-width) mt-0 lg:mt-[15px] m-[15px]">
                  <div class="flex flex-col grow kt-scrollable-y-auto [--kt-scrollbar-width:auto] pt-5"
                      id="scrollable_content">
                      <main class="grow" role="content">
                          @include('layouts.partials.toolbar')
                          <div class="kt-container-fluid">
                              {{ $slot }}
                          </div>
                      </main>
                      @include('layouts.partials.footer')
                  </div>
              </div>
          </div>

      </div>

      @include('layouts.partials.script')
  </body>

  </html>
