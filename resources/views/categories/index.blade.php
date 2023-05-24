@extends ('app')

@section('content')

<div class="container w-25 border p-4 my-4">
    <div class="row mx-auto">
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            @if(session('success'))
            <h6 class="alert alert-success">{{session('success')}}</h6>
            @endif

            @error('title')
            <h6 class="alert alert-danger">{{$message}}</h6>
            @enderror

            <div class="mb-3">
                <label for="name" class="form-label">Category name</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="mb-3">
                <label for="color" class="form-label">Category color</label>
                <input type="color" name="color" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Create category</button>
        </form>

        <div class="mt-4">
            @foreach ($categories as $category )
            <ul>
                <li>{{ $category ->name }} - {{ $category -> color }}</li>
            </ul>
            @endforeach
        </div>

    </div>
</div>

@endsection