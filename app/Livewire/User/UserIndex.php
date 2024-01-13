<?php

namespace App\Livewire\User;
use App\Models\User; //นำเข้าตาราง
use Illuminate\Support\Facades\Hash; //เข้ารหัส password
use Livewire\Component;
use Livewire\WithPagination; //นำเข้า pagination

class UserIndex extends Component
{

    use WithPagination; //ห้ามลืมสำคัญมากถ้าใช้ Pagination ต้อง Useเข้ามางั้น Livewireไม่ทำงาน
    public $name;//รับค่าจากฟอร์ม store
    public $email;//รับค่าจากฟอร์ม store
    public $password;//รับค่าจากฟอร์ม store
    public User $user;//ประกาศตัวแปรเข้าฟังชั่น mount เพื่อไว้เรียกใช้


    
    public function mount(User $user)
    {
        $this->user = $user;
    }


    public function render()
    {

        $users = User::orderBy ('id' , 'desc')->paginate(5); //Query Data

        return view ('livewire.user.user-index' , [
            'users' => $users

        ]);

    }

    //รับค่าจากฟอร์ม store
    public function store ()
    {
        $this->user::create([
            'name' => $this->name,
            'email' => $this->email,
            'password'=>Hash::make($this->password),
        ]);
    }


}
