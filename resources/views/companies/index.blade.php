@extends('layouts.app')
@section('content')
    <h1>Companies</h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <a href="{{route('companies.create')}}">
            <button class="btn btn-outline-success " type="button">Tashkilot Qo'shish</button>
        </a>

    </div>
    <br>
    <table class="table table-dark table-striped-columns">
        <thead>
        <tr>
            <th>T/R</th>
            <th>Name</th>
            <th>title</th>
            <th>text</th>
            <th>Phone</th>
            <th>Amallar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{($companies->currentpage()-1)*$companies->perpage()+($loop->index+1)}}</td>
                <td>
                    <a href="{{route('companies.show',['company'=>$company->id])}}">
                        {{$company->name}}
                    </a>

                </td>
                <td>{{$company->title}}</td>
                <td>{{$company->text}}</td>
                <td>{{$company->phone}}</td>
                <td>
                    <div class="d-flex ">
                        <a href="{{route('companies.edit',['company'=>$company->id])}}"  class="btn bg-success">
                            <i class="bi bi-pencil-square"></i>
                        </a>

                        <a href="" class="btn bg-danger">
                            <i class="bi bi-trash3-fill"></i>
                        </a>


                    </div>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$companies->links()}}
@endsection

