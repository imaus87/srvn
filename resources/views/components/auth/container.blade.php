<div {{ $attributes->merge(['class' => 'flex min-h-screen flex-col items-center justify-center']) }}>
    {{ $logo }}
    <div class="w-full pt-5 pb-9 px-3 md:px-6 sm:max-w-md">
        {{ $slot }}
    </div>
</div>
