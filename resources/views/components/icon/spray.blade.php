@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-spray']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="4" y="10" width="8" height="11" rx="2" />
  <path d="M6 10v-4a1 1 0 0 1 1 -1h2a1 1 0 0 1 1 1v4" />
  <path d="M15 7h.01" />
  <path d="M18 9h.01" />
  <path d="M18 5h.01" />
  <path d="M21 3h.01" />
  <path d="M21 7h.01" />
  <path d="M21 11h.01" />
  <path d="M10 7h1" />
</svg>


