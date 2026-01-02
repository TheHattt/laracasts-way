@props(['active' => false])
<a  class= "{{ $active ? 'bg-slate-900 text-white ': 'text-gray-600 hover:bg-gray-700 hover:text-white'}} rounded-md py-2 px-3" aria-current="{{$active ? "page": "false" }}"
    {{$attributes}}
>{{ $slot }}</a>
