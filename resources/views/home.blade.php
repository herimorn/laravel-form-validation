
        @extends('layoult.master')
        @section("content")
               @foreach ($blogs as $blog )
                       {{ $blog ['title']}}
               @endforeach
                @endsection
        