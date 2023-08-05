<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;

class Posts extends Component
{

    public $name,$rol,$email,$phone,$dateofjoin,$salary;
    public $posts;
    public $edit_mode=false;
    public $post_id;
    public function store(){
       $validated_data= $this->validate(['name'=>'required',
        'rol'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'dateofjoin'=>'required',
        'salary'=>'required'
    ]);
    Post::create($validated_data);
    session()->flash('message','Created Succesfully!');
    $this->resetInputField();
    }
    private function resetInputField(){
        $this->name ='';
        $this->rol='';
        $this->email='';
        $this->phone='';
        $this->dateofjoin='';
        $this->salary='';
    }
    public function edit($id){
     $this->edit_mode=true;
     $post=Post::find($id);
     $this->name =$post->name;
     $this->rol=$post->rol;
     $this->email=$post->email;
     $this->phone=$post->phone;
     $this->dateofjoin=$post->dateofjoin;
     $this->salary=$post->salary;
     $this->post_id=$id;
    }
    public function update(){
        $validated_data= $this->validate(['name'=>'required',
        'rol'=>'required',
        'email'=>'required',
        'phone'=>'required',
        'dateofjoin'=>'required',
        'salary'=>'required'
    ]);
   $post= Post::find($this->post_id);
   $post->update($validated_data);
   session()->flash('message',' Update Succesfully!');
   $this->resetInputField();
   $this->edit_mode=false;

    }
    public function cancelupdate(){
        $this->edit_mode=false;
        $this->resetInputField();

    }

    public function delete($id){
        $post=Post::find($id);
        $post->delete();
    }
    public function render()
    {
        $this->posts=Post::all();
        return view('livewire.posts');
    }
}
