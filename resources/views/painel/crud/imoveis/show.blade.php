@extends('painel.app')

@section('content')
    <div class="max-w-5xl mx-auto flex flex-row">
        <div class="w-1/2 p-10">
            <div class="text-orange-500">
                <p class="underline text-2xl font-bold">INFORMAÇÕES</p>
                <span class="mt-4 font-bold">CÓDIGO: </span>{{ $imovel->nu_registro }}
                <span class="font-bold">VALOR: </span>R$ {{ $imovel->valor }}
                <span class="font-bold">ÁREA: </span>{{ $imovel->metros_quadrados }}
                <p class="underline text-2xl font-bold">LOCALIZAÇÃO</p>
                #
            </div>
            <livewire:comments />
        </div>
        <div class="w-1/2 p-10">
            <div class="flex flex-wrap">
                <div class="p-1 w-1/2 h-28">
                    <div class="h-full" style="background-image: url('{{ asset("images/imoveis/{$imovel->id}/1") }}'); background-position: center; background-size: cover"></div>
                </div>
                <div class="p-1 w-1/2 h-28">
                    <div class="h-full" style="background-image: url('{{ asset("images/imoveis/{$imovel->id}/2") }}'); background-position: center; background-size: cover"></div>
                </div>
                <div class="p-1 w-1/2 h-28">
                    <div class="h-full" style="background-image: url('{{ asset("images/imoveis/{$imovel->id}/3") }}'); background-position: center; background-size: cover"></div>
                </div>
                <div class="p-1 w-1/2 h-28">
                    <div class="h-full" style="background-image: url('{{ asset("images/imoveis/{$imovel->id}/4") }}'); background-position: center; background-size: cover"></div>
                </div>
            </div>
            <div class="bg-green-700 w-full float-right py-1 mt-2 font-bold text-center text-white text-base rounded-full hover:cursor-pointer hover:bg-green-600 hover:shadow-lg">ALUGAR</div>
        </div>
    </div>
@endsection