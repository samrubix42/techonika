@if ($paginator->hasPages())
    <nav role="navigation" aria-label="Pagination Navigation" class="flex items-center justify-center">
        <ul class="inline-flex items-center gap-3">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li aria-disabled="true" aria-label="&laquo; Previous">
                    <span class="px-4 py-2 text-sm text-slate-500">&larr; Prev</span>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}"
                       wire:click.prevent="previousPage"
                       rel="prev"
                       class="px-4 py-2 text-sm text-slate-300 hover:text-amber-400 transition">
                        &larr; Prev
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li aria-disabled="true"><span class="px-3 py-2 text-sm text-slate-500">{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li aria-current="page">
                                <span class="w-9 h-9 inline-flex items-center justify-center rounded-full bg-amber-400 text-black font-semibold">{{ $page }}</span>
                            </li>
                        @else
                            <li>
                                <a href="{{ $url }}"
                                   wire:click.prevent="gotoPage({{ $page }})"
                                   class="w-9 h-9 inline-flex items-center justify-center rounded-full border border-white/15 text-slate-300 hover:border-amber-400 hover:text-amber-400 transition">
                                    {{ $page }}
                                </a>
                            </li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}"
                       wire:click.prevent="nextPage"
                       rel="next"
                       class="px-4 py-2 text-sm text-slate-300 hover:text-amber-400 transition">
                        Next &rarr;
                    </a>
                </li>
            @else
                <li aria-disabled="true" aria-label="Next &raquo;">
                    <span class="px-4 py-2 text-sm text-slate-500">Next &rarr;</span>
                </li>
            @endif
        </ul>
    </nav>
@endif
