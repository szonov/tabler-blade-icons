@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-arrows-right-left']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M21 7l-18 0" />
  <path d="M18 10l3 -3l-3 -3" />
  <path d="M6 20l-3 -3l3 -3" />
  <path d="M3 17l18 0" />
</svg>


