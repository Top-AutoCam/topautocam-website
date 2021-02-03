@if ($paginator->hasPages())


<nav class="woocommerce-pagination">
    <ul class="page-numbers">

        @if($paginator->onFirstPage())
        <li>
            <a class="next page-numbers">←</a>
        </li>
        @else
        <li>
            <a class="next page-numbers" wire:click="previousPage">←</a>
        </li>
        @endif
        <li>
            <span aria-current="page" class="page-numbers current">{{ $paginator->currentPage() }}</span>
        </li>
        @if ($paginator->hasMorePages())
        <li>
            <a class="next page-numbers" wire:click="nextPage">→</a>
        </li>
        @else
        <li>
            <a class="next page-numbers">→</a>
        </li>
        
        @endif
    </ul>
</nav>

@endif