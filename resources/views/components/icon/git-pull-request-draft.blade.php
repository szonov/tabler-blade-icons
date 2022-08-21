@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-git-pull-request-draft']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="6" cy="18" r="2" />
  <circle cx="6" cy="6" r="2" />
  <circle cx="18" cy="18" r="2" />
  <path d="M6 8v8" />
  <path d="M18 11h.01" />
  <path d="M18 6h.01" />
</svg>

