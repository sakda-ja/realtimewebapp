
<div> {{-- ต้องมี Div กฏของ Lirewire--}}


<!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
    เพิ่ม
  </button>

  <!-- Modal -->
  <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูล</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">


            <form novalidate wire:submit.prevent='store'>{{-- กด submit ส่งไป store และให้อยู่หน้าเดิม--}}
                <div class="mb-3">
                  <label for="firstname" class="form-label">First name</label>
                  <input wire:model='name' type="text" class="form-control" id="exampleInputEmail1" aria-describedby="firstname">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input wire:model='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>

                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input wire:model='password' type="password" class="form-control" id="exampleInputPassword1">
                </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">บันทึก</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
              </form>
        </div>
        </div>
      </div>
    </div>
  </div>




{{-- ตาราง Tailwind Element--}}
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
                  <th scope="col" class="px-6 py-4">เครื่องมือ</th>
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
                  <td class="px-6 py-4 whitespace-nowrap">EDIT | DELETE</td>
              </tr>
@endforeach
            </tbody>
          </table>
            <div class="mt-4"> {{$users->links() }} </div> {{-- Pagination 1 2 3 4... --}}
        </div>
      </div>
    </div>
  </div>
{{-- ตาราง Tailwind Element--}}


</div>



