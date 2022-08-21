@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-circuit-ammeter']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="12" r="7" />
  <path d="M5 12h-3" />
  <path d="M19 12h3" />
  <path d="M10 14v-3c0 -1.036 .895 -2 2 -2s2 .964 2 2v3" />
  <path d="M14 12h-4" />
</svg>


