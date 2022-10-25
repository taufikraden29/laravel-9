@extends('layouts.app', ['title' => 'Homepage'])
@section('content')
    <x-alert>
        @slot('title')
            Header Compontent <s>Tapi Boong</s>
        @endslot
        ini adalah slot
        @slot('footer')
            Ini Footer
        @endslot
    </x-alert>
    <p>
        Ini alert
    </p>
@endsection
