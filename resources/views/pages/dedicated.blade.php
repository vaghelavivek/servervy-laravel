@extends('Layouts.landing')

@section('title', 'Home')

@section('body')

    {{-- dedicated hero section --}}
    @livewire('section.d-hero')

    {{-- benifits section  --}}
    @livewire('section.benifits')

    {{-- dedicated server --}}
    @livewire('section.d-server')

    {{-- vps section --}}
    @livewire('section.vps')

    {{-- dedicated feature section --}}
    @livewire('section.d-feature')

    {{-- choose server section  --}}
    @livewire('section.choose-server')
@endsection

