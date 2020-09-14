@if ($paginator->hasPages())
    <div class="flex justify-around items-center w-1/3">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <span
                class="ml-2 rounded-l rounded-sm bg-gray-300 hover:bg-gray-800 hover:text-white border border-brand-light px-3 py-2 cursor-not-allowed no-underline">&laquo;</span>
        @else
            <a
                class="ml-2 rounded-l rounded-sm bg-gray-300 hover:bg-gray-800 hover:text-white border-t border-b border-l border-brand-light px-3 py-2 text-brand-dark hover:bg-brand-light no-underline"
                href="{{ $paginator->previousPageUrl() }}"
                rel="prev"
            >
                &laquo;
            </a>
        @endif
        <div>

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <span
                        class=" border-t border-b border-l border-brand-light px-3 py-2 cursor-not-allowed no-underline">{{ $element }}</span>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span
                                class="border-t border-b border-l bg-gray-800  text-pink-400 border-brand-light px-3 py-2 bg-brand-light no-underline">{{ $page }}</span>
                        @else
                            <a class="border-t border-b border-l bg-gray-300 hover:bg-gray-800 hover:text-white border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline"
                               href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
            @endforeach
        </div>

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a class="mr-2 rounded-r rounded-sm border bg-gray-300 hover:bg-gray-800 hover:text-white border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline"
               href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
        @else
            <span
                class="mr-2 rounded-r rounded-sm border bg-gray-300 hover:bg-gray-800 hover:text-white border-brand-light px-3 py-2 hover:bg-brand-light text-brand-dark no-underline cursor-not-allowed">&raquo;</span>
        @endif
    </div>
@endif
