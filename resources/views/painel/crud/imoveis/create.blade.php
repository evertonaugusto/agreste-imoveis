<form action="{{ route('imoveis.store') }}" method="POST">
    @csrf
    @method('POST')
    <div>
        <label for="tipo_imovel">Tipo do imóvel:</label>
        <input type="text" name="tipo_imovel" id="tipo_imovel">
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
        <label for="endereco_id">Endereço:</label>
        <input type="number" name="endereco_id" id="endereco_id">
    </div>

    <div>
        <label for="metros_quadrados">Metros quadrados:</label>
        <input type="number" name="metros_quadrados" id="metros_quadrados">
    </div>

    <button type="submit">Cadastrar</button>

</form>
