<p align="center"><img src="public/img/logo-myDreamBox.png" width="400"></p>
<h1 align="center">myDreamBox</h1>


## Sobre o myDreamBox

O myDreamBox é um aplicação para auxiliar no controle de metas financeiras pessoais. Com essa aplicação você poderá:

- Criar metas, definindo título, valor total, data de realização e o valor reservado atualmente.
- Editar metas
- Excluir metas

## Prototipagem

Antes de seu desenvolvimento, o myDreamBox teve seu protótipo criado, algo que oriontou toda a sua implementação. A paleta de cores, fontes e ícones também foram pensados nessa etapa.
**Cores:** Todo o projeto tem em sua base apenas duas cores. O verde associado ao dinheiro e o rosa ao porquinho que simboliza o ato de guardar dinheiro.

<p align="center"><img src="public/img/figma/colors.png" width="400"></p>
<p align="center"><img src="public/img/figma/fonts.png" width="400"></p>
<p align="center"><img src="public/img/figma/logos.png" width="400"></p>

**[Veja o protótipo](https://www.figma.com/file/r0loiAVkuDAUsMN7AzslbF/myDreamBox?node-id=0%3A1)**

## Como utilizar?

A utilização é fácil, siga os passos abaixo:

<h3>O que você precisa ter?</h3>

- **[XAMPP](https://www.apachefriends.org/pt_br/index.html)**
- **[Composer](https://getcomposer.org/download/)**
- **[Laravel](https://laravel.com/)**
- **[VSCode](https://code.visualstudio.com/Download)**

<h3>Instalação</h3>

Para isso, será necessário que você clone esse projeto para a sua máquina. 

1º - Crie um diretório específico para a aplicação;
2º - Abra-o no VSCode;
3º - Execute no terminal do projeto: *git init*;
4º - Execute no terminal do projeto: *git clone https://github.com/luizcampos/my-dream-box.git*

<h3>Conectando ao Banco de Dados</h3>

1º - Execute o XAMPP, dando start no **Apache** e no **MySQL**
2º - Acesse http://localhost/phpmyadmin/index.php
3º - Crie o Banco de Dados com nome "mydreambox"
4º Verifique o arquivo '.env', que contém todas as variáveis ambiente e altere o valor da variável DB_DATABASE para "mydreambox"
5º - No terminal do projeto execute o comando: *php artisan migrate*

<h3>Executando a aplicação</h3>

Para executar, basta digitar no terminal do projeto aberto no VSCode o seguinte: *php artisan serve*

<p align="center"><img src="public/img/screens/banner.png"></p>

## Tecnologias e ferramentas aplicadas

- **[Figma](https://www.figma.com/file/r0loiAVkuDAUsMN7AzslbF/myDreamBox?node-id=0%3A1)**
- Framework **[Laravel](https://laravel.com/)**
- HTML, CSS e JavaScript
- **[Bootstrap](https://getbootstrap.com.br/)**
- Biblioteca **[Phosphor Icons](https://phosphoricons.com/)**
- **[XAMPP](https://www.apachefriends.org/pt_br/index.html)** e phpmyadmin
- **[Git](https://git-scm.com/)** e **[GitHub](https://github.com/)**  
- Photoshop


## Autor e ajuda

O myDreamBox foi criado por Luiz Fellipe Campos. Você pode solicitar ajuda ou enviar uma mensagem através de um destes canais:

<div align="center">
  <a href="https://www.linkedin.com/in/luizfcampos" target="_blank"><img src="https://img.shields.io/badge/-LinkedIn-%230077B5?style=for-the-badge&logo=linkedin&logoColor=white" target="_blank"></a><br/>
  <a href="https://wa.me/5512982729562" target="_blank"><img src="https://img.shields.io/badge/-WhastApp-%23E4405F?style=for-the-badge&color=00BB2D&logo=whatsapp&logoColor=white" target="_blank"></a> 
  <br/>
  <a href="https://instagram.com/_fellipemoura_" target="_blank"><img src="https://img.shields.io/badge/-Instagram-%23E4405F?style=for-the-badge&logo=instagram&logoColor=white" target="_blank"></a>
</div>