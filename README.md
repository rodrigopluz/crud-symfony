Teste Flexi
======

![version](https://img.shields.io/badge/version-1.0.0-blue.svg) 
[![license](https://img.shields.io/apm/l/vim-mode.svg)](LICENSE)

Projeto Exemplo Symfony 2.8
  - CRUD de produtos.
  - CRUD de clientes.
  - CRUD de pedidos e adição de itens no carrinho.
  
### Ferramentas utilizadas

  - Symfony Versão 2.8 com Doctrine 2.5
  - Bootstrap v3
  - jQuery com plugins:
    - Datatables: Pesquisa de registro por qualquer atributo
    - Masked Input: Máscara nos campos de data
    - Select 2: Facilitador de busca em elementos select
  
### Instalação

  - Apos clonar o projeto, seguir os passos abaixo

```sh
$ composer update
```
```sh
$ php app/console doctrine:database:create
```
```sh
$ php app/console doctrine:schema:update --force
```
```sh
$ php app/console server:run
```

### Browser Suportados

<img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/chrome.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/firefox.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/edge.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/safari.png" width="64" height="64"> <img src="https://s3.amazonaws.com/creativetim_bucket/github/browser/opera.png" width="64" height="64">

### Autor

<table>
  <tr>
    <td>
      <img src="https://avatars2.githubusercontent.com/u/8739638?s=460&v=4" width="100">
    </td>
    <td>
      :octocat: Rodrigo Pereira<br />
      <a href="mailto:rodrigopluz@gmail.com">:point_right: rodrigopluz@gmail.com</a><br />
    </td>
  </tr>
</table>