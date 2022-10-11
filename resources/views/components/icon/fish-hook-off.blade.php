@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-fish-hook-off']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M16 9v3m-.085 3.924a5.002 5.002 0 0 1 -9.915 -.924v-4l3 3" />
  <circle cx="16" cy="7" r="2" />
  <path d="M16 5v-2" />
  <path d="M3 3l18 18" />
</svg>


