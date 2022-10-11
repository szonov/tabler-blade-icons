@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-go-game']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="6" cy="6" r="2" />
  <circle cx="12" cy="12" r="2" />
  <circle cx="6" cy="18" r="2" />
  <circle cx="18" cy="18" r="2" />
  <path d="M3 12h7m4 0h7" />
  <path d="M3 6h1m4 0h13" />
  <path d="M3 18h1m4 0h8m4 0h1" />
  <path d="M6 3v1m0 4v8m0 4v1" />
  <path d="M12 3v7m0 4v7" />
  <path d="M18 3v13m0 4v1" />
</svg>

