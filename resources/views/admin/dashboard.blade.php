<x-layouts.app :title="__('Admin Dashboard')">

    @if (session('success'))
        <p class="text-green-500">{{ session('success') }}</p>
    @endif

    <div class="relative mb-6 w-full">
        <flux:heading size="xl" level="1">{{ __('Admin') }}</flux:heading>
        <flux:subheading size="lg" class="mb-6">{{ __('Now you can go to Dashboard') }}</flux:subheading>
        <flux:separator variant="subtle" />
    </div>
    
    
  
</x-layouts.app>