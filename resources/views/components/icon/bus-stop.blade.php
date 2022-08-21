@props(['stroke' => 'currentColor','fill' => 'none'])

<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'icon icon-tabler icon-tabler-bus-stop']) }} width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke={{ $stroke }} fill={{ $fill }} stroke-linecap="round" stroke-linejoin="round">
  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
  <rect x="3" y="3" width="4" height="6" rx="1" />
  <circle cx="18" cy="17" r="2" />
  <path d="M10 5h7c2.761 0 5 3.134 5 7v5h-2" />
  <path d="M16 17h-8" />
  <path d="M16 5l1.5 7h4.5" />
  <path d="M9.5 10h7.5" />
  <path d="M12 5v5" />
  <path d="M5 9v11" />
</svg>


