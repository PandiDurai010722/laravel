<div>
    @if (session()->has('message'))
    <div class='alert alert-success'>
        {{session('message')}}
    </div>
    @endif
 @if($edit_mode)
    @include('livewire.edit')
    @else
    @include('livewire.create')
    @endif

    <table class="table table-dark table-striped">
            <thead>
              <tr>
                <th scope="col">No.</th>
                <th scope="col">Name</th>
                <th scope="col">Rol</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Date_of_join</th>
                <th scope="col">Salary</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)


              <tr>
                <th scope="row">{{$post->id}}</th>
                <td>{{$post->name}}</td>
                <td>{{$post->rol}}</td>
                <td>{{$post->email}}</td>
                <td>{{$post->phone}}</td>
                <td>{{$post->dateofjoin}}</td>
                <td>{{$post->salary}}</td>
                <td>
                   <button wire:click="edit({{$post->id}})" class='btn btn-primary btn-sm'>Edit</button>
                   <button wire:click="delete({{$post->id}})"  class='btn btn-primary btn-sm'>Delete</button>
                </td>
              </tr>
              @endforeach
            </tbody>
      </table>
</div>
