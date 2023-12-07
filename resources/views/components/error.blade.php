
@props(['for'])

@error($for)
<span class="error" style="color:red">
    {{ $message }}
    </span>
@enderror