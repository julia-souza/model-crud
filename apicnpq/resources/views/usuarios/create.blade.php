<x-layout title="Novo Beneficiário">
    <form action="#" method="post">

        <label for="beneficiario">Nome do beneficário: </label>
        <input type="text" id="beneficiario" name="beneficiario">

        <label for="processo">N° do processo: </label>
        <input type="text" id="processo" name="processo">
        
        <label for="instituicao">Nome da instituição: </label>
        <input type="text" id="instituicao" name="instituicao">

        <label for="sigla_instituicao">Sigla da instituição: </label>
        <input type="text" id="sigla_instituicao" name="sigla_instituicao">

        <label for="programaCNPq">Programa CNPq: </label>
        <input type="text" id="programaCNPq" name="programaCNPq">
        
        <label for="data_inicio">Data Início: </label>
        <input type="date" id="data_inicio" name="data_inicio">

        <label for="data_termino">Data Término: </label>
        <input type="date" id="data_termino" name="data_termino">

        <label for="grande_area">Grande Área: </label>
        <input type="text" id="grande_area" name="grande_area">

        <label for="area">Área: </label>
        <input type="text" id="area" name="area">

        <label for="subarea">Subarea: </label>
        <input type="text" id="subarea" name="subarea">

        <label for="ano_referencia">Ano de referência: </label>
        <input type="number" id="ano_referencia" name="ano_referencia" minlength = 4 maxlength = 4>

        <label for="pais">País de origem: </label>
        <input type="text" id="pais" name="pais">

        <label for="uf">UF: </label>
        <input type="text" id="uf" name="uf" maxlength = 4>

        <label for="valor_pago">Valor da bolsa: </label>
        <input type="text" id="valor_pago" name="valor_pago">

    </form>
</x-layout>