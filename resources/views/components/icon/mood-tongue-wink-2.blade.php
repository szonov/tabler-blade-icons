@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-mood-tongue-wink-2']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="12" cy="12" r="9" />
  <path d="M12 21a9 9 0 1 1 0 -18a9 9 0 0 1 0 18z" />
  <path d="M15 10h-.01" />
  <path d="M10 14v2a2 2 0 1 0 4 0v-2m1.5 0h-7" />
  <path d="M7 10c.5 -1 2.5 -1 3 0" />
</svg>


