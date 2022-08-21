@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-steering-wheel']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="12" r="9" />
  <circle cx="12" cy="12" r="2" />
  <line x1="12" y1="14" x2="12" y2="21" />
  <line x1="10" y1="12" x2="3.25" y2="10" />
  <line x1="14" y1="12" x2="20.75" y2="10" />
</svg>


