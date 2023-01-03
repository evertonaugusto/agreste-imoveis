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
                    <div class="h-full" style="background-image: url('https://media.gettyimages.com/id/1221023970/pt/foto/small-red-brick-house-with-green-grass.jpg?s=612x612&w=gi&k=20&c=Vev7Jo-RN0_pqI3xIza4ky9JIj1e8eqptxxeTC7GiiE='); background-position: center; background-size: cover"></div>
                </div>
                <div class="p-1 w-1/2 h-28">
                    <div class="h-full" style="background-image: url('https://hips.hearstapps.com/hmg-prod.s3.amazonaws.com/images/kitchen-decor-ideas-1580491833.jpg?crop=1.00xw:0.669xh;0,0.151xh&resize=640:*'); background-position: center; background-size: cover"></div>
                </div>
                <div class="p-1 w-1/2 h-28">
                    <div class="h-full" style="background-image: url('https://fotos.vivadecora.com.br/piscina-casa-cristal-design-de-interiores-iara-kilaris-iarakilaris-290706-square_cover_xsmall.jpg'); background-position: center; background-size: cover"></div>
                </div>
                <div class="p-1 w-1/2 h-28">
                    <div class="h-full" style="background-image: url('https://fotos.vivadecora.com.br/piscina-casa-cristal-design-de-interiores-iara-kilaris-iarakilaris-290706-square_cover_xsmall.jpg'); background-position: center; background-size: cover"></div>
                </div>
            </div>
            <div class="bg-green-700 w-full float-right py-1 mt-2 font-bold text-center text-white text-base rounded-full hover:cursor-pointer hover:bg-green-600 hover:shadow-lg">ALUGAR</div>
        </div>
    </div>
@endsection