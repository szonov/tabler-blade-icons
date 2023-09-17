@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-http-patch']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M3 12h2a2 2 0 1 0 0 -4h-2v8" />
  <path d="M10 16v-6a2 2 0 1 1 4 0v6" />
  <path d="M10 13h4" />
  <path d="M17 8h4" />
  <path d="M19 8v8" />
</svg>


