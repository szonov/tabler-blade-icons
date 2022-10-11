@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-home-cancel']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <circle cx="19" cy="19" r="3" />
  <path d="M17 21l4 -4" />
  <path d="M19 12h2l-9 -9l-9 9h2v7a2 2 0 0 0 2 2h5.5" />
  <path d="M9 21v-6a2 2 0 0 1 2 -2h2c.58 0 1.103 .247 1.468 .642" />
</svg>


