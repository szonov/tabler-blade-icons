@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-headset']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="4" y="13" rx="2" width="4" height="6" />
  <rect x="16" y="13" rx="2" width="4" height="6" />
  <path d="M4 15v-3a8 8 0 0 1 16 0v3" />
  <path d="M18 19a6 3 0 0 1 -6 3" />
</svg>

