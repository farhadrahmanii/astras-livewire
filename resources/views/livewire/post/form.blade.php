<div class="container">
    {{-- The Master doesn't talk, he acts. --}}
    <h2>job post form</h2>
    <div class="row">
        <div class="col-lg-6">
            <form  @if ($isedit) wire:submit.prevent="update" @else wire:submit.prevent="save" @endif>
                <div class="form-group">
                
            
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" wire:model="title" class="form-control">
                    
                </div>
                <div class="form-group">
                    <label for="company name">Company name</label>
                    <input type="text" wire:model="company_name" class="form-control">
                    
                </div>
                <div class="form-group"> 
                    <label for="post_body">Post</label>
                    <input type="text" wire:model="post_body" class="form-control">
                    
                </div>
                <div class="form-group mt-2">

                    <input type="submit" class="btn btn-info" value="save">
                </div>
            </form>
        </div>
        <div class="container">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>title</th>
                        <th>company name</th>
                        <th>post body</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post as $pos)
                    <tr>
                        <td>{{$pos->id}}</td>
                        <td>{{$pos->title}}</td>
                        <td>{{$pos->compny_name}}</td>
                        <td>{{$pos->post_body}}</td>
                        <td>
                            <a wire:click="delete({{$pos->id}})" class="btn btn-danger">delete</a>
                            <a wire:click="edit({{$pos->id }})" class="btn btn-info">edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
</div>
