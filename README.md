## PROJETO - BLOG

Este trabalho tem como objetivo obter nota na M2 de Desenvolvimento Web II do professor Leandro Bona;
Criação de um blog aonde é possível fazer ver publicações, cadastrar usuário, fazer login, fazer postagens, editar/deletar postagens e fazer comentários em postagens.

## ALUNOS

João Vitor Graf
Luiz Henrique Bonin
Thaís Eduarda Stanchack

## Iniciando o projeto

Para poder abrir o projeto, você precisa executar os seguintes comandos no terminal com o projeto aberto (e tendo PHP && Composer instalados em sua máquina):

### Para instalar as dependências:
```bash
composer install
```

### Criar uma cópia do arquivo .env.example e renomeá-la para .env:
```bash
cp .env.example .env
```

### Gerar uma nova chave de aplicação:
```bash
php artisan key:generate
```

### NÃO É NECESSÁRIO RODAR AS MIGRATION
Estamos fazendo o envio o banco sqlite para fins acadêmicos.


### Para servir o projeto na porta default:
```bash
php artisan serve
```