@extends('shared.base')
@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <div class="panel-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Tem certeza que deseja remover o Imovel?</h4>
                            <hr>
                            <h4>Sobre o Imovel</h4>
                        <p>Desrição: {{ $imovel->descricao }}</p>
                            <p>Preço R$: {{ number_format($imovel->preco, 2, ',', '.') }}</p>
                            <p>Qt de Quartos: {{ $imovel->qtdQuartos }}</p>
                            <p>Tipo: {{ $imovel->tipo }}</p>
                            <p>Finalidade: {{ $imovel->finalidade }}</p>
                            <hr>
                            <h4>Endereço</h4>
                            <p>Logradouro: {{ $imovel->logradouroEndereco }}</p>
                            <p>Bairro: {{ $imovel->bairroEndereco }}</p>
                            <p>Numero: {{ $imovel->numeroEndereco }}</p>
                            <p>CEP: {{ $imovel->cepEndereco }}</p>
                            <p>Cidade: {{ $imovel->cidadeEndereco }}</p>
                        </div>
                    </div>
                    <button class="btn btn-danger" type="submit">Remover</button>
                <a href="{{ url()->previous() }}" class="btn btn-default">Cancelar</a>
                </form>
            </div>
        </div>
    </div>
@endsection