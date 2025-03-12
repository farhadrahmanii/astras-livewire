<?php

namespace App\Livewire\Post;

use App\Models\post;
use Livewire\Component;

class Form extends Component
{
    
    public $title;
    public $company_name;
    public $post_body;
    public $isedit=false;
    public $id;

    public function mount(){
        $this->title = '';
        $this->company_name = '';
        $this->post_body = '';
    }

public function save(){
    // $this->validate([
    //     'title' => 'required',
    //     'company_name' => 'required',
    //     'post_body' => 'required',
    // ]);
    post::create([
        'title' => $this->title,
        'compny_name' => $this->company_name,
        'post_body' => $this->post_body,
    ]);
   
    session()->flash('message', 'Post Created Successfully.');



}

public function edit($id){

    $this->id=$id;
    $this->isedit=true;
    $post=post::find($id);
    
    $this->title = $post->title;
    $this->company_name = $post->compny_name;
    $this->post_body = $post->post_body;
    
}


public function update(){
  
    post::find($this->id)->update([
        'title' => $this->title,
        'compny_name' => $this->company_name,
        'post_body' => $this->post_body,
    ]);
    $this->isedit=false;
    session()->flash('message', 'Post Updated]');
}
public function delete($id){
    post::find($id)->delete();
    session()->flash('message', 'Post Deleted Successfully.');
}


    public function render()
    {
        $post=post::all();
        return view('livewire.post.form',compact('post'));
    }
}
