@if ($paginator->hasPages())
    <nav class="pagination-nav">
        <div class="d-flex justify-content-between flex-column flex-sm-row align-items-center">
            <div class="pagination-info mb-3 mb-sm-0">
                <p class="text-muted small mb-0">
                    {!! __('Showing') !!}
                    <span class="fw-bold">{{ $paginator->firstItem() }}</span>
                    {!! __('to') !!}
                    <span class="fw-bold">{{ $paginator->lastItem() }}</span>
                    {!! __('of') !!}
                    <span class="fw-bold">{{ $paginator->total() }}</span>
                    {!! __('results') !!}
                </p>
            </div>

            <ul class="pagination mb-0">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li title="@lang('pagination.previous')" class="page-item disabled">
                        <span class="page-link" aria-hidden="true">&laquo;</span>
                    </li>
                @else
                    <li title="@lang('pagination.previous')" class="page-item">
                        <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"
                           aria-label="@lang('pagination.previous')">
                            &laquo;
                        </a>
                    </li>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled">
                            <span class="page-link">{{ $element }}</span>
                        </li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" aria-current="page">
                                    <span class="page-link">{{ $page }}</span>
                                </li>
                            @else
                                <li class="page-item">
                                    <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li title="@lang('pagination.next')" class="page-item">
                        <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                           aria-label="@lang('pagination.next')">
                            &raquo;
                        </a>
                    </li>
                @else
                    <li title="@lang('pagination.next')" class="page-item disabled">
                        <span class="page-link" aria-hidden="true"> &raquo;</span>
                    </li>
                @endif
            </ul>
        </div>
    </nav>
@endif
