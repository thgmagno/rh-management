# Lista de testes da aplicação

- (pendente)
>>> (concluído)

>>> testar a rota inicial como sendo a página de login
- testar a rota de recuperação de senha
>>> testar processo de login com sucesso para o perfil de Admin
- testar processo de login com sucesso para o perfil de Rh
- testar processo de login com sucesso para o perfil de Colaborador

- testar a inserção de um novo user rh com o perfil do Admin
- testar a inserção de um novo colaborador com o perfil do Rh

- testar se um Admin, após login com sucesso, consegue ver a página de colaboradores Rh
- testar se, sem usuário logado, é possível acessar a página home
- testar se, com usuário logado, é possível acessar a página de login
- testar se, estando logado, é possível acessar a página de recuperação de senha

1ª fase: arrange (preparação do ambinete, definir variáveis, etc)
  >>> Definir em que base de dados iremos trabalhar (sqlite | in-memory)
2ª fase: act (executar o teste, inserir, eliminar, etc)
  - Executar o teste
3ª fase: assert (verificar se o teste foi executado com sucesso)
  - Verificar se o teste foi executado com sucesso
