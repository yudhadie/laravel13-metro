 <div class="fixed top-0 bottom-0 z-20 hidden lg:flex flex-col shrink-0 w-(--sidebar-width) bg-muted [--kt-drawer-enable:true] lg:[--kt-drawer-enable:false]"
     data-kt-drawer="true" data-kt-drawer-class="kt-drawer kt-drawer-start flex top-0 bottom-0" id="sidebar">
     <div id="sidebar_header">
         <div class="flex items-center gap-2.5 px-3.5 h-[70px]">
             <a href="#">
                 <img class="dark:hidden h-[42px]" src="{{ asset('assets/media/logos/logo-small.png') }}" />
                 <img class="hidden dark:inline-block h-[42px]" src="{{ asset('assets/media/logos/logo-small.png') }}" />
             </a>
             <div class="kt-menu kt-menu-default grow" data-kt-menu="true">
                 <div class="kt-menu-item grow">
                     <div class="kt-menu-label cursor-pointer text-mono font-medium grow justify-between">
                         <span class="text-base font-medium text-mono grow justify-start">
                             JJPROMOTION
                         </span>
                     </div>
                 </div>
             </div>
         </div>
         <div class="pt-2.5 px-3.5 mb-1">
             <div class="kt-input">
                 <i class="ki-filled ki-magnifier"></i>
                 <input class="min-w-0" placeholder="Search" type="text" value="" />
                 <span class="text-xs text-secondary-foreground text-nowrap"></span>
             </div>
         </div>
     </div>
     <div class="flex items-stretch grow shrink-0 justify-center my-5" id="sidebar_menu">
         <div class="kt-scrollable-y-auto grow" data-kt-scrollable="true"
             data-kt-scrollable-dependencies="#sidebar_header, #sidebar_footer" data-kt-scrollable-height="auto"
             data-kt-scrollable-offset="0px" data-kt-scrollable-wrappers="#sidebar_menu">
             <!-- Primary Menu -->
             <div class="kt-menu flex flex-col w-full gap-1.5 px-3.5" data-kt-menu="true"
                 data-kt-menu-accordion-expand-all="false" id="sidebar_primary_menu">
                 {{ $slot }}
             </div>
             {{-- <div class="border-b border-input mt-4 mb-1 mx-3.5"></div> --}}
         </div>
     </div>
     <div class="flex flex-center justify-between shrink-0 ps-4 pe-3.5 mb-3.5" id="sidebar_footer">
         <div data-kt-dropdown="true" data-kt-dropdown-offset="10px, 10px" data-kt-dropdown-offset-rtl="-20px, 10px"
             data-kt-dropdown-placement="bottom-start" data-kt-dropdown-placement-rtl="bottom-end"
             data-kt-dropdown-trigger="click">
             <div class="cursor-pointer shrink-0" data-kt-dropdown-toggle="true">
                 <img alt="" class="size-9 rounded-full border-2 border-mono/25 shrink-0"
                     src="{{ asset('assets/media/blank-avatars.png') }}" />
             </div>
             <div class="kt-dropdown-menu w-[250px]" data-kt-dropdown-menu="true">
                 <div class="flex items-center justify-between px-2.5 py-1.5 gap-1.5">
                     <div class="flex items-center gap-2">
                         <img alt="" class="size-9 shrink-0 rounded-full border-2 border-green-500"
                             src="{{ asset('assets/media/blank-avatars.png') }}" />
                         <div class="flex flex-col gap-1.5">
                             <span class="text-sm text-foreground font-semibold leading-none">
                                 Administrator
                             </span>
                             <a class="text-xs text-secondary-foreground hover:text-primary font-medium leading-none"
                                 href="#">
                                 admin@admin.com
                             </a>
                         </div>
                     </div>
                     <span class="kt-badge kt-badge-sm kt-badge-primary kt-badge-outline">
                         ADMIN
                     </span>
                 </div>
                 <ul class="kt-dropdown-menu-sub">
                     <li>
                         <div class="kt-dropdown-menu-separator"></div>
                     </li>
                     <li>
                         <a class="kt-dropdown-menu-link" href="#">
                             <i class="ki-filled ki-setting-2"></i>
                             Account Setting
                         </a>
                     </li>
                     <li>
                         <div class="kt-dropdown-menu-separator"></div>
                     </li>
                 </ul>
                 <div class="px-2.5 pt-1.5 mb-2.5 flex flex-col gap-3.5">
                     <div class="flex items-center gap-2 justify-between">
                         <span class="flex items-center gap-2">
                             <i class="ki-filled ki-moon text-base text-muted-foreground"></i>
                             <span class="font-medium text-2sm">
                                 Dark Mode
                             </span>
                         </span>
                         <input class="kt-switch" data-kt-theme-switch-state="dark" data-kt-theme-switch-toggle="true"
                             name="check" type="checkbox" value="1" />
                     </div>
                     {{-- <a class="kt-btn kt-btn-outline justify-center w-full" href="#">
                         Log out
                     </a> --}}
                     <div onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                         <a href="{{ route('logout') }}" class="kt-btn kt-btn-outline justify-center w-full">
                             Sign Out
                         </a>
                     </div>
                 </div>
             </div>
         </div>
         <div class="flex items-center gap-1.5"
             onclick="event.preventDefault();document.getElementById('logout-form').submit();">
             <a class="kt-btn kt-btn-ghost kt-btn-icon size-8 hover:bg-background hover:[&_i]:text-primary"
                 href="{{ route('logout') }}">
                 <i class="ki-filled ki-exit-right"></i>
             </a>
             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
         </div>
     </div>
 </div>
