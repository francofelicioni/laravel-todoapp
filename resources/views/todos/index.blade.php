@extends('app')

@section('content')
<div class="container w-25 border p-4 mt-4">
    <form>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Task Title</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Create a new task</div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection