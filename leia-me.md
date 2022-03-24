## Tópicos aprendidos no projeto

O controle de rotas e direcionamento de rotas pelas views linkando a botões <br>
Criar e personalizar os Controllers para manipulação do bando de dados da aplicação <br>
Passagem de argumentos para as Views de forma a mostrar dados do banco <br>
Criação de Models com lista de preenchimento (fillable) para o banco de dados, de forma a preencher "automaticamente" usando apenas a request com o método 'all()' de acordo com as chaves especificadas no array fillable da classe do Model <br>
Criação de migrations para fazer a estrutura do banco, personalizando os tipos de dados, valores padrões e possibilidade de ser nulo<br>
Criação de classe personalizada de Request para fazer o "handling" das regras de validação.<br>
Criação de View HTML 5 usando CSS e JavaScript (Primeiro projeto usando JavaScript, usado superficialmente para facilitar a vida em algumas questões, e para fins de aprendizado na linguagem em sí)<br>
Uso de CSS e Java Script foi feito no mesmo arquivo da View, por eu ter percebido depois, que o método asset() busca os itens da pasta public
Foi usado um pacote a parte, que implementa o Toast disponibilizado pelo yoeunes

Em HTML foi seguido a linguagem semantica, conforme pregado pelo HTML 5, CSS foi usado para todos os estilos, e em JavaScript foram usadas 
funções simples, para ligar botões a rotas passando variáveis para as rotas, funções para implementar um simples "inputMask" o qual precisa 
de revisão e melhorias, pois ainda está com alguns problemas, pois os eventos são disparados com o "onkeyup", caso uma tecla seja segurada a 
função é ignorada, passando as limitações impostas pelo inputMask aplicado, além de funcionar com base em condicionais if, verificando o 
length da propriedade text do input, foi uma solução prática, fácil de aplicar que ajudou na digitação correta caso respeitadas algumas limitações

A rota de destroy do controller estava dando um retorno inesperado para mim, por isso linkei a função de exclusão do banco de dados 
ao metodo "show", as funções do controller acabaram ficando um pouco bagunçadas ao meu ver atual, aprendi muito sobre como lidar com o 
controller as rotas e as views com sessões e com valores determinados por variáveis passadas as views.

Não foi aplicado ao projeto, pelo mesmo estar com validação front-end e back-end, mas aprendi a lidar com o retorno da validação quando é 
passada a request, e retorna erro, fazendo assim aparecer as mesagens de erro e usando o helper "old()" para manter os valores mesmo com o 
recarregamento da página. Mas foi implementado as mensagens de erro caso a validação do front-end falhe e seja passado a classe processadora
dos requests e retorne em falha.