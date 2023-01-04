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
                        <label for="house">CASA</label>
                        <input type="text" id="house">
                    </div>
                    <div>
                        <label for="house">CASA</label>
                        <input type="text" id="house">
                    </div>
                    <div>
                        <label for="house">UF</label>
                        <input type="text" id="house">
                    </div>
                    <div>
                        <label for="house">CIDADE</label>
                        <input type="text" id="house">
                    </div>
                    <div>
                        <label for="house">BAIRRO</label>
                        <input type="text" id="house">
                    </div>
                </div>
                <button class="w-full mt-10 py-3 bg-white text-orange-600 text-xl font-bold font-mono border-2 border-orange-600 rounded-full hover:border-gray-400 hover:bg-gray-50" type="submit">BUSCAR</button>
            </div>
        </div>
    </div>
    <div>
        teste
    </div>
@endsection