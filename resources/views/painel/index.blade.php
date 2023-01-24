@extends('painel.app')

@section('content')
    <div style="background: linear-gradient(rgba(237, 94, 31, 0.6), rgba(237, 94, 31, 0.6)),
                url('https://www.compassnzl.co.nz/wp-content/uploads/2020/06/patrick-tomasso-gMes5dNykus-unsplash.jpg');
                background-position: center; background-size: cover"
        class="w-full h-screen"
    >
        <div class="w-full h-full max-w-5xl mx-auto p-5 flex flex-col">
            <div class="flex-1 flex justify-center items-center">
                <h2 class="text-white text-5xl font-mono">Encontre o imóvel ideal para o seu estilo de vida.</h2>
            </div>
            <div class="flex-1">
                <div class="flex gap-2">
                    <button class="w-full mt-10 py-3 bg-white text-orange-600 text-xl font-bold font-mono border-2 border-orange-600 rounded-full hover:border-gray-400 hover:bg-gray-50" type="submit">ALUGAR</button>
                    <button class="w-full mt-10 py-3 bg-white text-orange-600 text-xl font-bold font-mono border-2 border-orange-600 rounded-full hover:border-gray-400 hover:bg-gray-50" type="submit">COMPRAR</button>
                </div>
                <div class="mt-10 flex-1 flex flex-wrap justify-center gap-10">
                    <div>
                        <select class="text-left pr-10 text-orange-600 text-xl font-bold font-mono border-2 border-orange-600 rounded-full" name="type" id="type">
                            <option value="" disabled selected hidden>Tipo do Imóvel</option>
                            <option value="house">Casa</option>
                            <option value="apartment">Apartamento</option>
                        </select>
                    </div>
                    <div>
                        <select class="text-left pr-10 text-orange-600 text-xl font-bold font-mono border-2 border-orange-600 rounded-full" name="uf" id="uf">
                            <option value="" disabled selected hidden>UF</option>
                            <option value="rn">RN</option>
                            <option value="pb">PB</option>
                        </select>
                    </div>
                    <div>
                        <select class="text-left pr-10 text-orange-600 text-xl font-bold font-mono border-2 border-orange-600 rounded-full" name="city" id="city">
                            <option value="" disabled selected hidden>CIDADE</option>
                            <option value="nova_cruz">Nova Cruz</option>
                            <option value="joao_pessoa">João Pessoa</option>
                        </select>
                    </div>
                    <div>
                        <select class="text-left pr-10 text-orange-600 text-xl font-bold font-mono border-2 border-orange-600 rounded-full" name="bairro" id="bairro">
                            <option value="" disabled selected hidden>BAIRRO</option>
                            <option value="centro">Centro</option>
                            <option value="sao_sebastiao">São Sebastião</option>
                        </select>
                    </div>
                </div>
                <button class="w-full mt-10 py-3 bg-white text-orange-600 text-xl font-bold font-mono border-2 border-orange-600 rounded-full hover:border-gray-400 hover:bg-gray-50" type="submit">BUSCAR</button>
            </div>
        </div>
    </div>
    <div class="bg-white max-w-7xl py-10 px-10 mx-auto flex flex-col md:flex-row gap-10">
        <div class="bg-gray-100 md:flex-1 box-border">
            <div class="flex-1 h-96 md:h-full" style="background-image: url('https://www.executivecentre.com/wp-content/uploads/centres/Banner-Product-PrivateOffice.jpg');
                background-position: center;
                background-size: cover"></div>
        </div>
        <div class="md:flex-1">
            <div class="bg-gray-800 h-20 relative">
                <span class="absolute -top-8 text-orange-500 font-bold text-5xl">Quem Somos?</span>
            </div>
            <p class="mt-5 text-orange-500 text-lg">Lorem ipsum dolor sit amet. Vel deleniti ipsam quo culpa similique vel repellendus deleniti. In commodi minus eum dolor consequatur At repellat error a ipsam reiciendis!.</p>
            <p class="mt-5 mb-5 text-orange-500 text-lg">Nam galisum odit et illo omnis eos iure adipisci. Est quas autem et rerum autem sit quasi similique. Ex perspiciatis odio et illum illo vel quia dignissimos ab possimus debitis.</p>
            <a href="#" class="text-orange-500 font-bold text-4xl">ler mais</a>
        </div>
    </div>
    <div class="bg-orange-500 py-10 px-10">
        <div class="max-w-7xl mx-auto">
            <div class="bg-gray-800 h-20 relative">
                <span class="absolute -top-8 text-white font-bold text-5xl">Imovéis</span>
            </div>
            <div class="mt-10 flex flex-col flex-wrap md:flex-row justify-center">
                @foreach ($imoveis as $imovel)
                    <div class="p-2 w-full md:w-80">
                        <div class="bg-white overflow-hidden shadow-lg flex flex-col w-full">
                            <div class="w-full h-52" style="background-image: url('https://fotos.vivadecora.com.br/piscina-casa-cristal-design-de-interiores-iara-kilaris-iarakilaris-290706-square_cover_xsmall.jpg'); background-position: center; background-size: cover; background-repeat: no-repeat"></div>
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
        </div>
    </div>
@endsection