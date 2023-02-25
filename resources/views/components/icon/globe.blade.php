@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-globe']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M12 10m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
  <path d="M6.75 16a8.015 8.015 0 1 0 9.25 -13" />
  <path d="M12 18l0 4" />
  <path d="M8 22l8 0" />
</svg>


