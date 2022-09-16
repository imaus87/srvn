<div {{ $attributes->merge(['class' => 'flex min-h-screen flex-col items-center justify-center']) }}>
    {{ $logo }}
    <div class="w-full p-6 pt-3 sm:max-w-md">
        {{ $slot }}
    </div>
</div>
