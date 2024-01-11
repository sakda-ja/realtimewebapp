{{-- หน้านี้สำหรับแสดงผลเมนูย่อยเวลาคลิกแถบ SIDEBAR--}}

@extends('layouts.dashboard-general')


@section('content')


<h4>หน้าแสดงผลตารางผู้ใช้งาน USER</h4>
<div class="flex flex-col mt-6">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-hidden">
          <table class="min-w-full text-sm font-light text-left">
            <thead class="font-medium border-b dark:border-neutral-500">
              <tr>
                <th scope="col" class="px-6 py-4">#</th>
                <th scope="col" class="px-6 py-4">ชื่อสกุล</th>
                <th scope="col" class="px-6 py-4">อีเมลล์</th>
                <th scope="col" class="px-6 py-4">สร้างเมื่อวันที่</th>
              </tr>
            </thead>
            <tbody>

@foreach ( $users as $user )
              <tr
                class="transition duration-300 ease-in-out border-b hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                <td class="px-6 py-4 font-medium whitespace-nowrap">{{$user->id}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$user->name}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$user->email}}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{$user->created_at}}</td>
              </tr>
@endforeach
            </tbody>
          </table>
            <div class="mt-4"> {{$users->links() }} </div> {{-- Pagination 1 2 3 4... --}}
        </div>
      </div>
    </div>
  </div>


@endsection
