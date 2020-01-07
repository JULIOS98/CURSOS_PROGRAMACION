@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <h1> New Report</h1>
    </div>
</div>

<div class="row">
    <div class="col">
     <a class="btn btn-secondary" href="/expense_reports">Return</a>
    </div>
</div>

<div class="row">
    <div class="col">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li> {{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/expense_reports" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="titel">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="type a title" value="{{old('title')}}">
            </div>
            <button class="btn btn-primary" type="submit">Registra</button>
        </form>
    </div>
</div>
@endsection
