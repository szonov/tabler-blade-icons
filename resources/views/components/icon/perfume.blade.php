@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-perfume']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M10 6v3" />
  <path d="M14 6v3" />
  <rect x="5" y="9" width="14" height="12" rx="2" />
  <circle cx="12" cy="15" r="2" />
  <path d="M9 3h6v3h-6z" />
</svg>


