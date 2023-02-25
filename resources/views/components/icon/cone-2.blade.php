@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-cone-2']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M12 7m-7 0a7 3 0 1 0 14 0a7 3 0 1 0 -14 0" />
  <path d="M19 7v.5l-7 12.5l-7 -12.5v-.5" />
</svg>


