@extends('layouts.app')

@section ('title', 'Perfil')

@section ('content')

    <paciente></paciente>

@endsection

@section ('scripts')
<script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    });
    $('.popover-dismiss').popover({
        trigger: 'focus'
    });
</script>
@endsection