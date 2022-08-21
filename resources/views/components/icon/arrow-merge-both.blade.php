@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-arrow-merge-both']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <path d="M16 8l-4 -4l-4 4" />
  <path d="M12 20v-16" />
  <path d="M18 18c-4 -1.333 -6 -4.667 -6 -10" />
  <path d="M6 18c4 -1.333 6 -4.667 6 -10" />
</svg>


