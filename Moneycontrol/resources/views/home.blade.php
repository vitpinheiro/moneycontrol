<!-- resources/views/home.blade.php -->
@extends('layouts.layout')

@section('title', 'Home Page')

@section('content')

<main>
    <div class="bg-success d-flex justify-content-center flex-wrap mt-5" style="height:11em; gap:5em;">
        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">ENTRADAS</h5>
                <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-currency-exchange" style="font-size: 1.5rem;"></i>
                    <h2 class="ms-2">10000</h2>
                </div>
            </div>
        </div>

        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">SAÍDAS</h5>
                <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-currency-exchange" style="font-size: 1.5rem;"></i>
                    <h2 class="ms-2">5000</h2>
                </div>
            </div>
        </div>

        <div class="card m-2" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">TOTAL</h5>
                <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-currency-exchange" style="font-size: 1.5rem;"></i>
                    <h2 class="ms-2">5000</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div id="minhasestatisticas" class="row justify-content-center text-center mt-5">
    <h2>
        Minhas estatísticas
        <i class="bi bi-bar-chart ms-2" style="font-size: 2rem;"></i>
    </h2>
</div>

</main>



@endsection

