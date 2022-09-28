@props(['icon' => 'heroicon-s-users'])
<li>
    <a {!! $attributes->merge(['class' => 'flex items-center space-x-4 py-1 active:bg-srvn-orange']) !!}>
        {{ $slot }}
    </a>
</li>
