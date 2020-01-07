@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <h1> Edit Report {{$report->id}}</h1>
    </div>
</div>

<div class="row">
    <div class="col">
     <a class="btn btn-secondary" href="/expense_reports">Return</a>
    </div>
</div>

<div class="row">
    <div class="col">
      <form action="/expense_reports/{{$report->id}}" method="POST">
      {{ csrf_field() }}
      @method('put')
        <div class="form-group">
            <label for="titel">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="type a title">
        </div>
        <button class="btn btn-primary" type="submit">Actualiza</button>
      </form>
    </div>
</div>
@endsection
