@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-chart-bar']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="3" y="12" width="6" height="8" rx="1" />
  <rect x="9" y="8" width="6" height="12" rx="1" />
  <rect x="15" y="4" width="6" height="16" rx="1" />
  <line x1="4" y1="20" x2="18" y2="20" />
</svg>


