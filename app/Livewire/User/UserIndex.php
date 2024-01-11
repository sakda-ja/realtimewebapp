<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserIndex extends Component
{


    use WithPagination; //ห้ามลืมสำคัญมากถ้าใช้ Pagination ต้อง Useเข้ามางั้น Livewireไม่ทำงาน

    public function render()
    {

        $users = User::orderBy ('id' , 'desc')->paginate(10); //Query Data

        return view ('livewire.user.user-index' , [
            'users' => $users

        ]);

    }



}
