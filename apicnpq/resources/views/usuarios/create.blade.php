<x-layout title="Novo Beneficiário">
<div class="container" >
    <form action="#" method="post">
        <div class="input-group mb-3" style="display: block;">
            <div class="mb-3">
                <label for="beneficiario">Nome do beneficário: </label>
                <input type="text" id="beneficiario" name="beneficiario">
            </div>
            
            <div class="mb-3">
                <label for="processo">N° do processo: </label>
                <input type="text" id="processo" name="processo">
            </div>
            
            <div class="mb-3">
                <label for="instituicao">Nome da instituição: </label>
                <input type="text" id="instituicao" name="instituicao">
            </div>

            <div class="mb-3">
                <label for="sigla_instituicao">Sigla da instituição: </label>
                <input type="text" id="sigla_instituicao" name="sigla_instituicao">
            </div>

            <div class="mb-3">
                <label for="programaCNPq">Programa CNPq: </label>
                <input type="text" id="programaCNPq" name="programaCNPq">
            </div>

            <div class="mb-3">
                <label for="data_inicio">Data Início: </label>
                <input type="date" id="data_inicio" name="data_inicio">
            </div>

            <div class="mb-3">
                <label for="data_termino">Data Término: </label>
                <input type="date" id="data_termino" name="data_termino">
            </div>

            <div class="mb-3">
                <label for="grande_area">Grande Área: </label>
                <input type="text" id="grande_area" name="grande_area">
            </div>

            <div class="mb-3">
                <label for="area">Área: </label>
                <input type="text" id="area" name="area">
            </div>

            <div class="mb-3">
                <label for="subarea">Subarea: </label>
                <input type="text" id="subarea" name="subarea">
            </div>

            <div class="mb-3">
                <label for="ano_referencia">Ano de referência: </label>
                <input type="number" id="ano_referencia" name="ano_referencia" minlength = 4 maxlength = 4>
            </div>

            <div class="mb-3">
                <label for="pais">País de origem: </label>
                <input type="text" id="pais" name="pais">
            </div>

            <div class="mb-3">
                <label for="uf">UF: </label>
                <input type="text" id="uf" name="uf" maxlength = 4>
            </div>

            <div class="mb-3">
                <label for="valor_pago">Valor da bolsa: </label>
                <input type="text" id="valor_pago" name="valor_pago">
            </div>
        </div>
        <button class="btn btn-primary" type="submit" >Cadastrar</button>
    </form>
</div>
</x-layout>