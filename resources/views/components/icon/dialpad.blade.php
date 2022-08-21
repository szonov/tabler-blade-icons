@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-dialpad']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M3 3h4v4h-4z" />
  <path d="M17 3h4v4h-4z" />
  <path d="M10 3h4v4h-4z" />
  <path d="M3 10h4v4h-4z" />
  <path d="M17 10h4v4h-4z" />
  <path d="M10 10h4v4h-4z" />
  <path d="M10 17h4v4h-4z" />
</svg>

