@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-mood-kid']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="12" r="9" />
  <line x1="9" y1="10" x2="9.01" y2="10" />
  <line x1="15" y1="10" x2="15.01" y2="10" />
  <path d="M9.5 15a3.5 3.5 0 0 0 5 0" />
  <path d="M12 3a2 2 0 0 0 0 4" />
</svg>


