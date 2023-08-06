@extends('layouts.main')

@include('layouts.nav')

@section('content')
    <div style="height: 800px">
        <livewire:antrian.show-antrian>
            @include('layouts.footer')
    </div>
@endsection

@section('script')
    <script>
        window.addEventListener('closeModal', event => {
            $('#createAntrian').modal('hide')
            $('#editAntrian').modal('hide')
            $('#deleteAntrian').modal('hide')
        })

    </script>
@endsection


