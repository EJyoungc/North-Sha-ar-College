    @props(['tags'=>[]])
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <select class="select2"  wire:model.live='tag' id="select2" multiple="multiple" style="width:100%" >
        <option value="">select</option>
        @forelse ($tags as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @empty
            <option value="">Empty</option>
        @endforelse
    </select>
    <x-error for="tag" />

    