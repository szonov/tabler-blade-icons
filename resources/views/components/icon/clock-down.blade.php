@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-clock-down']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M21 12a9 9 0 1 0 -9 9" />
  <path d="M12 7v5l1 1" />
  <path d="M19 16v6" />
  <path d="M22 19l-3 3l-3 -3" />
</svg>


