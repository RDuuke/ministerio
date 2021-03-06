@extends('layouts.app')

@section('content')
    <section class="container-question">
        <div class="rd-container">
            <div class="rd-element rd-s-100">
                <h1 class="text-color-blue-bold title">Mensajes para recordar</h1>
            </div>
        </div>
        <div class="rd-container">
            @foreach(__('messages') as $message)
                <div class="rd-element rd-s-100 rd-l-50">
                    <div class="container-text message">
                        <p>
                            {{ $message }}
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section class="bg-color-blue-blod full margin-top-2-5em">
        <div class="rd-container">
            <div class="rd-element rd-s-100 t-center flex rd-element-align-center rd-element-justify-center">
                <p class="text-color-blue-ligth">
                    <a class="next-sub next-four" href="{{ route('evaluate-what-knows') }}">
                    </a>
                </p>
            </div>
        </div>
    </section>
@endsection
