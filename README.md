<h1 align="center">Primeira APIRest</h1>

<p align="center">ApiREST para cadastrar triângulos e retângulos através do POST, e buscar o valor somado do total das áreas dos polígonos cadastrados, através do GET.</p>


<h2>Tabela de conteúdos</h2>



	
		1º) Iniciar um localhost, de preferência na porta 8080;
		2º) Através da URL: "http://localhost:8080/curso/projeto_apiREST/public_html/api/";</li>
		3º) Realizar um POST com os seguintes parâmetros:
		
			- "tp" => string;  
			- "ht" => integer;
			- "bs" => integer;
      
  <strong>Legenda:</strong>
  - "tp" é igual ao tipo(type1) do polígono (Retângulo ou Triângulo); 
  - "ht" é igual altura(height) do polígono; 
  - "bs" é igual a base.
   
<strong>Observação:</strong>
Para se realizar o GET da soma das áreas dos polígonos cadastrados, é necessário usar a URL anteriormente passada com a URI "/getTotal". 



<p> [x] Cadastro de triângulo <br>
 [x] Cadastro de retângulo<br>
 [x] Busca de soma das áreas dos polígonos
</p>


<h2>🛠 Tecnologias</h2>

As seguintes ferramentas foram usadas na construção do projeto:

- [Insomnia/Postman] (https://insomnia.rest)/(https://www.postman.com/)
- [PHP] (https://www.https://www.php.net/)

<hr>
<h5>Notas Importantes:</h5>

<p>- Foi usado PHP puro para construção da API Rest;<br>
- Ainda preciso implementar uma autenticação no estilo da JSON Web Token (JWT);<br>
- Ainda irei criar uma validação para impedir de cadastrar outros polígonos ou medidas nulas ou negativas dos polígonos.
</p>
