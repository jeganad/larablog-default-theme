@if ($paginator->hasPages())
    <section class="section">
        <div class="container">
            <nav class="pagination is-centered">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <a class="is-disabled pagination-previous"><span>&laquo;</span></a>
                @else
                    <a class="pagination-previous" href="{{ $paginator->previousPageUrl() }}" rel="prev">&laquo;</a>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <a class="pagination-next" href="{{ $paginator->nextPageUrl() }}" rel="next">&raquo;</a>
                @else
                    <a class="is-disabled pagination-next"><span>&raquo;</span></a>
                @endif

                <ul class="pagination-list">
                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="is-disabled"><span>{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="is-current pagination-link"><span>{{ $page }}</span></li>
                                @else
                                    <li><a class="pagination-link" href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach
                </ul>
            </nav>
        </div>
    </section>
@endif