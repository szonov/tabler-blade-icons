@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-mood-annoyed-2']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle transform="matrix(-1 0 0 1 24 0)" cx="12" cy="12" r="9" />
  <path d="M15 14c-2 0 -3 1 -3.5 2.05" />
  <path d="M10 9.25c-.5 1 -2.5 1 -3 0" />
  <path d="M17 9.25c-.5 1 -2.5 1 -3 0" />
</svg>


