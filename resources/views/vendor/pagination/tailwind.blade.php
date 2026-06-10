@if ($paginator->hasPages())
    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between py-3 w-full">
        <!-- Tampilan Mobile (Sederhana: Prev & Next) -->
        <div class="flex flex-1 justify-between sm:hidden w-full">
            @if ($paginator->onFirstPage())
                <span class="inline-flex items-center px-4 py-2 text-label-lg font-label-lg text-on-surface-variant/40 bg-surface-container border border-outline-variant/30 rounded-xl cursor-not-allowed">
                    Sebelumnya
                </span>
            @else
                <a href="{{ $paginator->previousPageUrl() }}" class="inline-flex items-center px-4 py-2 text-label-lg font-label-lg text-on-surface-variant hover:text-primary bg-surface-container-lowest border border-outline-variant/30 rounded-xl transition-all duration-200 hover:border-primary">
                    Sebelumnya
                </a>
            @endif

            @if ($paginator->hasMorePages())
                <a href="{{ $paginator->nextPageUrl() }}" class="inline-flex items-center px-4 py-2 text-label-lg font-label-lg text-on-surface-variant hover:text-primary bg-surface-container-lowest border border-outline-variant/30 rounded-xl transition-all duration-200 hover:border-primary">
                    Berikutnya
                </a>
            @else
                <span class="inline-flex items-center px-4 py-2 text-label-lg font-label-lg text-on-surface-variant/40 bg-surface-container border border-outline-variant/30 rounded-xl cursor-not-allowed">
                    Berikutnya
                </span>
            @endif
        </div>

        <!-- Tampilan Desktop (Lengkap) -->
        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between w-full gap-md">
            <div>
                <p class="font-body-sm text-body-sm text-on-surface-variant">
                    {!! __('Menampilkan') !!}
                    @if ($paginator->firstItem())
                        <span class="font-semibold text-on-surface">{{ $paginator->firstItem() }}</span>
                        {!! __('sampai') !!}
                        <span class="font-semibold text-on-surface">{{ $paginator->lastItem() }}</span>
                    @else
                        {{ $paginator->count() }}
                    @endif
                    {!! __('dari') !!}
                    <span class="font-semibold text-on-surface">{{ $paginator->total() }}</span>
                    {!! __('konten') !!}
                </p>
            </div>

            <div>
                <span class="inline-flex items-center gap-xs">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                            <span class="w-10 h-10 inline-flex items-center justify-center text-on-surface-variant/30 bg-surface-container-lowest border border-outline-variant/20 rounded-lg cursor-not-allowed" aria-hidden="true">
                                <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                            </span>
                        </span>
                    @else
                        <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="w-10 h-10 inline-flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary bg-surface-container-lowest border border-outline-variant/30 rounded-lg transition-all duration-200" aria-label="{{ __('pagination.previous') }}">
                            <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                        </a>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <span aria-disabled="true">
                                <span class="w-10 h-10 inline-flex items-center justify-center text-body-sm font-body-sm text-on-surface-variant bg-surface-container-lowest border border-outline-variant/30 rounded-lg">{{ $element }}</span>
                            </span>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <span aria-current="page">
                                        <span class="w-10 h-10 inline-flex items-center justify-center text-body-sm font-semibold text-white bg-primary border border-primary rounded-lg">{{ $page }}</span>
                                    </span>
                                @else
                                    <a href="{{ $url }}" class="w-10 h-10 inline-flex items-center justify-center text-body-sm font-body-sm text-on-surface-variant hover:text-primary hover:border-primary bg-surface-container-lowest border border-outline-variant/30 rounded-lg transition-all duration-200" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                        {{ $page }}
                                    </a>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <a href="{{ $paginator->nextPageUrl() }}" rel="next" class="w-10 h-10 inline-flex items-center justify-center text-on-surface-variant hover:text-primary hover:border-primary bg-surface-container-lowest border border-outline-variant/30 rounded-lg transition-all duration-200" aria-label="{{ __('pagination.next') }}">
                            <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                        </a>
                    @else
                        <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                            <span class="w-10 h-10 inline-flex items-center justify-center text-on-surface-variant/30 bg-surface-container-lowest border border-outline-variant/20 rounded-lg cursor-not-allowed" aria-hidden="true">
                                <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                            </span>
                        </span>
                    @endif
                </span>
            </div>
        </div>
    </nav>
@endif
