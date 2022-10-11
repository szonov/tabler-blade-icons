@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-car-turbine']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="11" cy="13" r="4" />
  <path d="M18.86 11c.088 .66 .14 1.512 .14 2a8 8 0 1 1 -8 -8h6" />
  <path d="M11 9c2.489 .108 4.489 .108 6 0" />
  <rect x="17" y="3" width="4" height="8" rx="1" />
  <path d="M11 13l-3.5 -1.5" />
  <path d="M11 13l2.5 3" />
  <path d="M8.5 16l2.5 -3" />
  <path d="M11 13l3.5 -1.5" />
  <path d="M11 9v4" />
</svg>


