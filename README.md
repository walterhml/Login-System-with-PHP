
# Sistema Simples de Login com PHP
Este projeto consiste em um sistema simples de login desenvolvido em PHP, utilizando sessões para autenticação de usuários. O sistema possui duas páginas principais: login.php e home.php, além do arquivo index.php que serve como ponto de entrada da aplicação.

## Funcionamento Geral
O funcionamento básico do sistema é:

Quando um usuário acessa a página index.php, ele é redirecionado para a página de login (login.php) caso não esteja autenticado ou para a página inicial (home.php) caso já esteja autenticado.

Na página de login, o usuário insere seu nome de usuário e senha. Se os dados fornecidos forem iguais aos dados definidos no código ($login e $senha), o usuário é autenticado e redirecionado para a página inicial.

Se os dados fornecidos forem inválidos, uma mensagem de erro é exibida na própria página de login.

Na página inicial, o usuário tem a opção de fazer logout, o que destrói a sessão atual e o redireciona de volta para a página de login.

## Estrutura de Arquivos
O projeto é composto pelos seguintes arquivos:

index.php: Ponto de entrada da aplicação. Gerencia o redirecionamento para a página de login ou para a página inicial, dependendo do estado da sessão.

login.php: Página de login onde os usuários inserem suas credenciais. Se os dados forem válidos, o usuário é autenticado e redirecionado para a página inicial. Caso contrário, uma mensagem de erro é exibida.

home.php: Página inicial do sistema, acessível apenas para usuários autenticados. Aqui, o usuário pode visualizar informações privilegiadas ou realizar ações específicas relacionadas à sua autenticação.

## Aspectos Positivos do Projeto
Apesar de sua simplicidade, este projeto possui algumas características positivas:

Simplicidade de Implementação: O projeto é fácil de entender e implementar, sendo ideal para iniciantes em PHP ou para projetos que requerem uma solução de login rápida e direta.

Segurança Básica: Embora não utilize técnicas avançadas de segurança, como hash de senhas, o sistema utiliza sessões para autenticação, o que é uma prática comum e segura para sistemas simples.

Facilidade de Personalização: O código é modular e fácil de modificar para atender às necessidades específicas do projeto. Por exemplo, é fácil alterar as credenciais de login ou adicionar campos adicionais ao formulário de login.

Baixa Complexidade: A simplicidade do projeto contribui para uma baixa complexidade, o que significa que é menos propenso a erros e mais fácil de manter ao longo do tempo.

Boa Base de Aprendizado: Este projeto pode servir como uma base sólida para aprender sobre autenticação de usuários em PHP e o uso de sessões, fornecendo uma compreensão fundamental desses conceitos.

## Conclusão
Embora seja um projeto simples, este sistema de login em PHP oferece uma solução funcional e fácil de entender para autenticação de usuários em uma aplicação web. Sua simplicidade, combinada com sua facilidade de personalização e segurança básica, o torna uma escolha viável para diversos cenários de desenvolvimento web
