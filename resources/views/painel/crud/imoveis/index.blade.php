@extends('painel.app')

@section('content')
    <div class="max-w-5xl mx-auto flex flex-col">
        <div class="bg-orange-500 w-full p-10 flex flex-row flex-wrap items-center">
            @foreach ($imoveis as $imovel)
                <div class="p-2 w-full sm:w-1/2 lg:w-1/3">
                    <div class="bg-white overflow-hidden shadow-lg flex flex-col w-full">
                        <div class="w-full h-52" style="background-image: url('https://fotos.vivadecora.com.br/piscina-casa-cristal-design-de-interiores-iara-kilaris-iarakilaris-290706-square_cover_xsmall.jpg')"></div>
                        <div class="p-4 relative">
                            <div class="bg-gray-700 rounded-sm font-mono font-bold text-lg text-white absolute right-5 -mt-8 px-2 py-0.5 -rotate-3">aluga-se</div>
                            <span class="bg-orange-700 px-3 text-white text-sm rounded-full">{{ $imovel->tipo_imovel }}</span>
                            <p class="mt-2">{{ $imovel->descricao }}</p>
                            <p class="bg-gray-200 px-2 py-1 mt-2 font-bold text-xl text-center rounded-md">R$ {{ $imovel->valor }} / mês</p>
                            <p class="mt-2"><span class="font-bold">Extensão:</span> {{ $imovel->metros_quadrados }} m²</p>
                           <a href="{{ route('imoveis.show', [$imovel->id]) }}"><p class="bg-green-700 w-28 float-right py-1 mt-8 font-bold text-center text-white text-base rounded-full">VER MAIS</p></a>
                        </div>
                    </div>
                </div>

            @endforeach

        </div>
        <div class="p-2">
            {{ $imoveis->links() }}
        </div>
    </div>
@endsection
