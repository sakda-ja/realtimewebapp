{{-- หน้านี้สำหรับแสดงผลเมนูย่อยเวลาคลิกแถบ SIDEBAR--}}

@extends('layouts.dashboard-general')


@section('content')

    <h4>ตาราง Livewire</h4>
    <livewire:user.user-index/> {{-- Livewire Render --}}

@endsection
