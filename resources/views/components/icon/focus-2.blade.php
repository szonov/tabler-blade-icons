@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-focus-2']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="12" r=".5" fill="currentColor" />
  <circle cx="12" cy="12" r="7" />
  <line x1="12" y1="3" x2="12" y2="5" />
  <line x1="3" y1="12" x2="5" y2="12" />
  <line x1="12" y1="19" x2="12" y2="21" />
  <line x1="19" y1="12" x2="21" y2="12" />
</svg>


