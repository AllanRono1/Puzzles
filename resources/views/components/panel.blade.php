@php
 $classes = 'py-5 bg-white/5 rounded-xl border border-transparent hover:border-orange-600 
 transition-colors duration-900 group'
@endphp

<div {{$attributes(['class' => $classes])}}>
{{$slot}}
</div>