
@if (!$collection->onFirstPage())
<a href="{{ $collection->previousPageUrl() }}">Previous</a> 
@endif
@if ($collection->hasMorePages())
<a href="{{ $collection->nextPageUrl() }}">Next</a>
@endif
