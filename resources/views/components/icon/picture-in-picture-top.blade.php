@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-picture-in-picture-top']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M11 5h-6a2 2 0 0 0 -2 2v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2 -2v-4" />
  <rect transform="matrix(1 0 0 -1 0 15)" x="14" y="5" width="7" height="5" rx="1" />
</svg>


