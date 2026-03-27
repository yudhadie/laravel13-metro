<div class="kt-menu-item" {{ $attributes }} data-kt-menu-item-toggle="accordion" data-kt-menu-item-trigger="click">
    <div class="kt-menu-link gap-2.5 py-2 px-2.5 rounded-md border border-transparent">
        <span
            class="kt-menu-icon items-start text-secondary-foreground text-lg kt-menu-item-here:text-foreground kt-menu-item-show:text-foreground kt-menu-link-hover:text-foreground dark:menu-item-here:text-mono dark:menu-item-show:text-mono dark:menu-link-hover:text-mono">
            <i class="ki-filled {{ $icon }}"></i>
        </span>
        <span
            class="kt-menu-title font-medium text-sm text-foreground kt-menu-item-here:text-mono kt-menu-item-show:text-mono kt-menu-link-hover:text-mono">
            {{ $menu }}
        </span>
        <span
            class="kt-menu-arrow text-muted-foreground kt-menu-item-here:text-foreground kt-menu-item-show:text-foreground kt-menu-link-hover:text-foreground">
            <span class="inline-flex kt-menu-item-show:hidden">
                <i class="ki-filled ki-down text-xs"></i>
            </span>
            <span class="hidden kt-menu-item-show:inline-flex">
                <i class="ki-filled ki-up text-xs"></i>
            </span>
        </span>
    </div>
    <div class="kt-menu-accordion gap-px ps-7">
        {{ $slot }}
    </div>
</div>
