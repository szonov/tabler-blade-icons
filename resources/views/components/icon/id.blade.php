@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-id']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="3" y="4" width="18" height="16" rx="3" />
  <circle cx="9" cy="10" r="2" />
  <line x1="15" y1="8" x2="17" y2="8" />
  <line x1="15" y1="12" x2="17" y2="12" />
  <line x1="7" y1="16" x2="17" y2="16" />
</svg>


