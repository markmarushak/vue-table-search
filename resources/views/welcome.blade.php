@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    

        <div class="container">
            <div class="row">
                
                <div class="col-sm-12 text-center">
                    
                    <div id="app">
                        <example-component></example-component>
                        <search-grid></search-grid>
                    </div>


                </div>

            </div>
        </div>

        


@endsection



            
