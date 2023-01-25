@extends('painel.app')

@section('content')
    <div class="max-w-7xl mx-auto">
        <div class="bg-gray-800 py-2 px-4 mt-4 text-2xl text-orange-500 font-bold">CADASTRAR ANÚNCIO</div>
        <form action="{{ route('imoveis.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div>
                <label for="is_rent">ALUGUEL</label>
                <input type="checkbox" name="is_rent" id="is_rent">
                <label for="is_sell">VENDA</label>
                <input type="checkbox" name="is_sell" id="is_sell">
            </div>
            <div>
                <label for="tipo_imovel">Tipo do imóvel:</label>
                <select name="tipo_imovel" id="tipo_imovel">
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                </select>
            </div>
            <div>
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao"></textarea>
            </div>
            <div>
                <label for="valor">Valor R$:</label>
                <input type="text" name="valor" id="valor">
            </div>

            <div>
                <label for="qt_comodos">Quantidade de comodos:</label>
                <input type="number" name="qt_comodos" id="qt_comodos">
            </div>

            <div>
                <label for="nu_registro">Nº Registro:</label>
                <input type="number" name="nu_registro" id="nu_registro">
            </div>

            <div>
                <label for="street">Rua:</label>
                <input type="text" name="street" id="street">
            </div>

            <div>
                <label for="number">Número:</label>
                <input type="number" name="number" id="number">
            </div>

            <div>
                <label for="bairro">Bairro:</label>
                <input type="text" name="bairro" id="bairro">
            </div>

            <div>
                <label for="cep">CEP:</label>
                <input type="number" name="cep" id="cep">
            </div>

            <div>
                <label for="city">Cidade:</label>
                <input type="text" name="city" id="city">
            </div>

            <div>
                <label for="uf">UF:</label>
                <input type="text" name="uf" id="uf">
            </div>

            <div>
                <label for="metros_quadrados">Metros quadrados:</label>
                <input type="number" name="metros_quadrados" id="metros_quadrados">
            </div>

            <div>
                <label for="imgs">Imagens:</label>
                <input type="file" name="imgs[]" id="imgs" multiple>
            </div>

            <button type="submit" class="bg-green-700 px-4 py-2 text-white rounded-full">Cadastrar</button>
        </form>
    </div>
@endsection