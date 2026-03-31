 <div class="pb-5">
     <!-- Container -->
     <div class="kt-container-fluid flex items-center justify-between flex-wrap gap-3">
         <div class="flex items-center flex-wrap gap-1 lg:gap-5">
             <h1 class="font-medium text-lg text-mono">
                 {{ $title }}
             </h1>
             @include('layouts.partials.breadcrumbs')
         </div>
         <div class="flex items-center flex-wrap gap-1.5 lg:gap-3.5">
             @yield('head_button')
         </div>
     </div>
 </div>
