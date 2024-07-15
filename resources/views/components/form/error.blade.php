@props(['name'])

@error($name)
<p class="alert alert-error" >
    {{ $message }}
</p>
@enderror
