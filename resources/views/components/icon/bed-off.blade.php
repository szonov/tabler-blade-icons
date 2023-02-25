@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-bed-off']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M3 7v11" />
  <path d="M3 14h11" />
  <path d="M18 14h3" />
  <path d="M21 18v-8a2 2 0 0 0 -2 -2h-7" />
  <path d="M11 11v3" />
  <path d="M7 10m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
  <path d="M3 3l18 18" />
</svg>


