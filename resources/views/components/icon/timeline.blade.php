@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-timeline']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M4 16l6 -7l5 5l5 -6" />
  <circle cx="15" cy="14" r="1" />
  <circle cx="10" cy="9" r="1" />
  <circle cx="4" cy="16" r="1" />
  <circle cx="20" cy="8" r="1" />
</svg>


