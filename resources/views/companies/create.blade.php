@extends('layouts.app')

@section('content')
    <h1 class="text-center p-3">Tashkilot qo'shish sahifa</h1>
    <div class="row ">
        <div class="col-md-6">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post" action="{{route('companies.store')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
                </div>
                <div class="mb-3">
                    <label for="text" class="form-label">Text</label>
                    <input type="text" class="form-control" id="text" name = "text" value="{{old('text')}}">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phnone</label>
                    <input type="tel" class="form-control" id="phone" name="phone" value="{{old('phone')}}">
                </div>
                <button type="submit" class="btn btn-primary">Saqlash</button>
            </form>
        </div>
    </div>

@endsection
