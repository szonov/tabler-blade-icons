@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-coin-yen']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="12" r="9" />
  <path d="M9 12h6" />
  <path d="M9 15h6" />
  <path d="M9 8l3 4.5" />
  <path d="M15 8l-3 4.5v4.5" />
</svg>


