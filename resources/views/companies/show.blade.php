@extends('layouts.app')

@section('content')
    <h1 class="text-center p-3">Tashkilot haqida malumot</h1>
    <div class="row justify-content-center">
        <div class="col-md-6">
            <button class="btn bg-secondary rounded-pill mb-1 ">
                <a class="nav-link" href="{{route('companies.index')}}">orqaga</a>
            </button>
            <table class="table table-bordered">
                <tr>
                    <td>Tashkilot nomi</td>
                    <td>{{$company->name}}</td>
                </tr>
                <tr>
                    <td>Tashkilot manzili</td>
                    <td>{{$company->title}}</td>
                </tr>
                <tr>
                    <td>text</td>
                    <td>{{$company->text}}</td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>{{$company->phone}}</td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td>{{$company->created_at}}</td>
                </tr>
            </table>
        </div>
    </div>


@endsection
