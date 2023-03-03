



@if ($paginator->hasPages())

    @foreach ($elements as $element)
        @if (is_string($element))
            <li class="">{{ $element }}</li>
        @endif
        @if (is_array($element))
            @foreach ($element as $page => $url)
                @if ($page == $paginator->currentPage())
                <a class="active">{{$page}}</a>
                @else
                <a href="{{ $url }}">{{ $page }}</a>
                @endif
            @endforeach
        @endif
    @endforeach


@endif
