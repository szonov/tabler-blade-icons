@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-notes']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="5" y="3" width="14" height="18" rx="2" />
  <line x1="9" y1="7" x2="15" y2="7" />
  <line x1="9" y1="11" x2="15" y2="11" />
  <line x1="9" y1="15" x2="13" y2="15" />
</svg>

