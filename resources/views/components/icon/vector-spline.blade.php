@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-vector-spline']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="17" y="3" width="4" height="4" rx="1" />
  <rect x="3" y="17" width="4" height="4" rx="1" />
  <path d="M17 5c-6.627 0 -12 5.373 -12 12" />
</svg>


