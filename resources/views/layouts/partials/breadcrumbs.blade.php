  @unless ($breadcrumbs->isEmpty())
      <div class="flex items-center gap-1 text-sm font-normal">
          @foreach ($breadcrumbs as $breadcrumb)
              @if (!is_null($breadcrumb->url) && !$loop->last)
                  <a class="text-secondary-foreground hover:text-primary" href="{{ $breadcrumb->url }}">
                      {{ $breadcrumb->title }}
                  </a>
                  <span class="text-muted-foreground text-sm">
                      /
                  </span>
              @else
                  <span class="text-secondary-foreground">
                      {{ $breadcrumb->title }}
                  </span>
              @endif
          @endforeach
      </div>
  @endunless
