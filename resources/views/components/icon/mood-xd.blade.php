@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-mood-xd']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="12" r="9" />
  <circle transform="matrix(-1 0 0 1 24 0)" cx="12" cy="12" r="9" />
  <path d="M9 14h6a3 3 0 0 1 -6 0z" />
  <path d="M9 8l6 3" />
  <path d="M9 11l6 -3" />
</svg>


