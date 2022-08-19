@extends('layouts.app')
@section('content')
    <h1>Companies</h1>
    <br>
    <table class="table table-dark table-striped-columns">
        <thead>
        <tr>
            <td>T/R</td>
            <td>Name</td>
            <td>title</td>
            <td>text</td>
        </tr>
        </thead>
        <tbody>
        @foreach($companies as $company)
            <tr>
                <td>{{($companies->currentpage()-1)*$companies->perpage()+($loop->index+1)}}</td>
                <td>{{$company->name}}</td>
                <td>{{$company->title}}</td>
                <td>{{$company->text}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{$companies->links()}}
@endsection

