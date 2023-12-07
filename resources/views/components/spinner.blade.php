@props(['target'])

<div wire:loading  wire:target='{{ $target }}' >
    <!-- Be present above all else. - Naval Ravikant -->
    <div  class="spinner-border spinner-border-sm"></div>
</div>