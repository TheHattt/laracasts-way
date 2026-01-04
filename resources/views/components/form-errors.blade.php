@props(['name'=>''])

@error($name)
<p {{$attributes->merge(['class'=> 'text-xs text-red-600'])}}>
    {{$message}}
</p>
@enderror
