<!DOCTYPE html>
 
<html>
 <head>
 <title> Plano de Chamada - CIGS </title>
 <meta name="description" content="Formulário para controle do plano de chamada - CIGS">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
 
 <link rel="stylesheet" type="text/css" href="planodechamada.css">

<!-- Validação de obrigatoriedade de campos--> 
<script type="text/javascript">
  function validacao() {
    if (document.cadastro.nome.value=="") {
      alert("Informe um nome válido!");
      document.cadastro.nome.focus();
      return false;
    }
    if (document.cadastro.nome_guerra.value=="") {
      alert("Informe nome de Guerra!");
      document.cadastro.nome_guerra.focus();
      return false;
    }
    if (document.cadastro.fone01.value=="") {
      alert("Informe um número de telefone");
      document.cadastro.fone01.focus();
      return false;
    } 
    if (document.cadastro.familiar.value=="") {
      alert("Informe algum familiar de contato");
      document.cadastro.familiar.focus();
      return false;
    }
    if (document.cadastro.bairro.value=="1") {
      alert("Selecione um Bairro válido");
      document.cadastro.bairro.focus();
      return false;
    }

    if (document.cadastro.login.value=="") {
      alert("Informe um login válido");
      document.cadastro.login.focus();
      return false;
    }

    if (document.cadastro.senha.value.length < 6 || document.cadastro.senha.value=="") {
      alert("Preencha a senha corretamente.");
      document.cadastro.senha.focus();
      return false;
}
    
    }

</script>

 </head>

 <body>
  <h1> Plano de Chamada - CIGS</h1> 
  <h2> Inclusão de Militar</h2>
 
<form action="inclusao_backend.php" method="post" name="cadastro" onsubmit=" return validacao()">

<!-- DADOS PESSOAIS-------------------->
<fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
<tr>
   <td>
    <label for="postograduacao">Posto/Graduação: </label>
   </td>
   <td align="left">
    <select name="postograduacao">
    <option value="" selected="">Selecione Posto Graduação... </option>
    <option value="coronel">Coronel</option>
    <option value="tenentecoronel">Tenente Coronel</option>
    <option value="major">Major</option>
    <option value="capitao">Capitão</option>
    <option value="1tenente">1º Tenente</option>
    <option value="2tenente">2º Tenente</option>
    <option value="aspirante">Aspirante</option> 
    <option value="subtenente">Subtenente</option>
    <option value="1sargento">1º Sargento</option>
    <option value="2sargento">2º Sargento</option>  
    <option value="3sargento">3º Sargento</option>  
    <option value="cabo">Cabo</option>
    <option value="soldadoEP">Soldado EP</option>
    <option value="soldadoEV">Soldado EV</option>
    <option value="civil">Civil</option>
   </select>
   </td>
  </tr>

  <tr>
   <td>
    <label for="nome">Nome completo: </label>
   </td>
   <td align="left">
    <input type="text" name="nome" id="nome" size="50" maxlength="50">
   </td>
   </tr>
   <tr>
   <td>
    <label for="nome_guerra">Nome de Guerra: </label>
   </td>
   <td align="left">
    <input type="text" name="nome_guerra" maxlength="20">
   </td>
   </tr>
  </table>
</fieldset>

<br />
<!---------------------------- ENDEREÇO ------------------------>
<fieldset>
 <legend>Dados de Endereço</legend>
 <table cellspacing="10">
<tr>
   <td>
    <label for="estado">Estado:</label>
   </td>
   <td align="left">
    <select name="estado" > 
    <option value="am" selected="am">Amazonas</option>
   
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <select name="cidade">
    <option value="1" selected="1">Selecione Cidade... </option>
    <option value="Manaus">Manaus</option>
    <option value="Manacapuru">Manacapuru</option>
    <option value="Iranduba">Iranduba</option>
    <option value="Itacoatiara">Itacoatiara</option>
   </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <select name="bairro">
    <option value="1" selected="1">Selecione Bairro...</option>
    <option value="Adrianópolis">Adrianópolis</option>
    <option value="Aleixo">Aleixo</option>
    <option value="Alvorada">Alvorada</option>
    <option value="Armando Mendes">Armando Mendes</option>
    <option value="Betânia">Betânia</option>
    <option value="Cachoeirinha">Cachoeirinha</option>
    <option value="Centro">Centro</option>
    <option value="Chapada">Chapada</option>
    <option value="Cidade de Deus">Cidade de Deus</option>
    <option value="Cidade Nova">Cidade Nova</option>
    <option value="Colônia Antônio Aleixo">Colônia Antônio Aleixo</option>
    <option value="Colônia Oliveira Machado">Colônia Oliveira Machado</option>
    <option value="Colônia Santo Antônio">Colônia Santo Antônio</option>
    <option value="Colônia Terra Nova">Colônia Terra Nova</option>
    <option value="Compensa">Compensa</option>
    <option value="Coroado">Coroado</option>    
    <option value="Crespo">Crespo</option>  
    <option value="Da Paz">Da Paz</option>
    <option value="Distrito Industrial I">Distrito Industrial I</option>
    <option value="Distrito Industrial II">Distrito Industrial II</option>
    <option value="Dom Pedro">Dom Pedro</option>
    <option value="Educandos">Educandos</option>
    <option value="Flores">Flores</option>
    <option value="Gilberto Mestrinho">Gilberto Mestrinho</option>
    <option value="Glória">Glória</option>
    <option value="Japiim">Japiim</option>
    <option value="Jorge Teixeira">Jorge Teixeira</option>
    <option value="Lago Azul">Lago Azul</option>
    <option value="Lírio do Vale">Lírio do Vale</option>
    <option value="Mauazinho">Mauazinho</option>
    <option value="Monte das Oliveiras">Monte das Oliveiras</option>
    <option value="Morro da Liberdade">Morro da Liberdade</option>
    <option value="Nossa Senhora Aparecida">Nossa Senhora Aparecida</option>
    <option value="Nossa Senhora das Graças">Nossa Senhora das Graças</option>
    <option value="Nova Cidade">Nova Cidade</option>
    <option value="Nova Esperança">Nova Esperança</option>
    <option value="Novo Aleixo">Novo Aleixo</option>
    <option value="Novo Israel">Novo Israel</option>
    <option value="Parque 10 de Novembro">Parque 10 de Novembro</option>
    <option value="Petrópolis">Petrópolis</option>
    <option value="Planalto">Planalto</option>
    <option value="Ponta Negra">Ponta Negra</option>
    <option value="Praça 14 de Janeiro">Praça 14 de Janeiro</option>
    <option value="Presidente Vargas">Presidente Vargas</option>
    <option value="Puraquequara">Puraquequara</option>
    <option value="Raiz">Raiz</option>
    <option value="Redenção">Redenção</option>
    <option value="Santa Etelvina">Santa Etelvina</option>
    <option value="Santa Luzia">Santa Luzia</option>
    <option value="Santo Agostinho">Santo Agostinho</option>
    <option value="Santo Antônio">Santo Antônio</option>
    <option value="São Francisco">São Francisco</option>
    <option value="São Geraldo">São Geraldo</option>
    <option value="São Jorge">São Jorge</option>
    <option value="São José Operário">São José Operário</option>
    <option value="São Lázaro">São Lázaro</option>
    <option value="São Raimundo">São Raimundo</option>
    <option value="Tancredo Neves">Tancredo Neves</option>
    <option value="Tarumã">Tarumã</option>
    <option value="Tarumã-Açu">Tarumã-Açu</option>
    <option value="Vila Buriti">Vila Buriti</option>
    <option value="Vila da Prata">Vila da Prata</option>
    <option value="Zumbi dos Palmares">Zumbi dos Palmares</option>
    </select>
   </td>
  </tr>
  <tr>
   <td>
    <label for="rua">Rua/Ave/Ala:</label>
   </td>
   <td align="left">
    <input type="text" name="rua" maxlength="30">
   </td>
   <td>
    <label for="numero">Número:</label>
   </td>
   <td align="left">
       <input type="text" name="numero" size="4" maxlength="5">
   </td>
  </tr>
  <td>
    <label for="complemento">Complemento:</label>
   </td>
   <td align="left">
       <input type="text" name="complemento" size="50" maxlength="128">
   </td>
     </table>
</fieldset>
<br />

<!-- DADOS DE CONTATO -->
<fieldset>
 <legend>Dados de Contato</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="fone01">Telefone 01: </label>
   </td>
   <td align="left">
       <input type="text" name="fone01" id="fone01" maxlength="12" >
   </td>
  </tr>
  <tr>
   <td>
    <label for="fone02">Telefone 02: </label>
   </td>
   <td align="left">
    <input type="text" name="fone02" maxlength="12">
   </td>
  </tr>
  <tr>
   <td>
    <label for="Email">E-mail: </label>
   </td>
   <td align="left">
    <input type="email" name="email">
   </td>
  </tr>
  <tr>
    <td>
      <label for="Familiar_contato">Familiar de Contato:</label>
    </td>
    <td>
      <input type="text" name="familiar" maxlength="50"></input>
    </td>
    <td>
      <label for="Numero_familiar">Contato do Familiar:</label>
    </td>
    <td> 
    <input type="text" name="contato_familiar" maxlength="12"></input>
    </td>



  </tr>
  </table>
</fieldset>

<!----------------------- DADOS DE ACESSO ---------------------->
<fieldset>
 <legend>Dados de Acesso</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="login">Login: </label>
   </td>
   <td align="left">
       <input type="text" name="login" id="login" maxlength="20" >
   </td>
  </tr>
  <tr>
   <td>
    <label for="password">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="senha" maxlength="12" minlength="6"><b>*No mínimo 6 caracteres</b>
   </td>
  



  </tr>
  </table>
</fieldset>
<br />
<input class="botoes" type="submit" value="Salvar">
<input class="botoes" type="reset" value="Limpar">
</form>
  
 </body>
</html>