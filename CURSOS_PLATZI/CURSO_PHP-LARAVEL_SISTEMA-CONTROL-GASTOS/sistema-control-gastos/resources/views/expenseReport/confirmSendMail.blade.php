@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <h1> Send Report</h1>
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
        <form action="/expense_reports/{{$report->id}}/sendMail" method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="type a mail" value="{{old('email')}}">
            </div>
            <button class="btn btn-primary" type="submit">Send Email</button>
        </form>
    </div>
</div>
@endsection
