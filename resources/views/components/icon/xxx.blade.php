@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-xxx']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M10 8l4 8" />
  <path d="M10 16l4 -8" />
  <path d="M17 8l4 8" />
  <path d="M17 16l4 -8" />
  <path d="M3 8l4 8" />
  <path d="M3 16l4 -8" />
</svg>


