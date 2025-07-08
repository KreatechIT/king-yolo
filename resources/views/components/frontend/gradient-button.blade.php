<div class="relative inline-block">
    <a href="{{ $url }}"
        class="block bg-red-900 text-white font-medium text-center px-6 py-2 rounded transition-colors duration-300 hover:bg-red-800"
        style="background: rgba(255, 0, 0, 0.3);">
        {{ $text }}
    </a>

    <!-- Top-left corner -->
    <div class="absolute top-0 left-0 w-2.5 h-2.5 border-t border-l border-white/50"></div>

    <!-- Top-right corner -->
    <div class="absolute top-0 right-0 w-2.5 h-2.5 border-t border-r border-white/50"></div>

    <!-- Bottom-left corner -->
    <div class="absolute bottom-0 left-0 w-2.5 h-2.5 border-b border-l border-white/50"></div>

    <!-- Bottom-right corner -->
    <div class="absolute bottom-0 right-0 w-2.5 h-2.5 border-b border-r border-white/50"></div>
</div>
