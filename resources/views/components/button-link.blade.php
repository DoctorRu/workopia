@props([
    'url' => '/',
    'icon' => null,
    'bgClass' => 'bg-yellow-400',
    'hoverClass' => 'hover:bg-yellow-300',
    'textClass' => 'text-black',
])
<a href="{{ $url }}"
  class="{{ $bgClass }} {{ $hoverClass }} {{ $textClass }} px-4 py-2 rounded hover:shadow-md transtion duration-300">
  @if ($icon)
    <i class="fa fa-{{ $icon }}"></i>
  @endif{{ $slot }}
</a>
