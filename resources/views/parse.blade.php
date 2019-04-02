@extends('layouts.app')


@section('content')
    <h1>Загрзить файлы в базу данных</h1>
    {{ Form::open(array('route' => 'parse', 'files' => true, 'method' => 'post')) }}
    {{ Form::file('file', $attributes = array()) }}
    {{ Form::submit('Send file to dataBase')  }}
    {{ Form::close() }}

@endsection