# Nome do Projeto
> *atividade-teste-banco-php*

---

## Objetivo da Aplicação
Este projeto foi desenvolvido com o objetivo de aprender o básico de php e a conexão entre site e banco de dados. 

---

## Tecnologias Utilizadas
O projeto foi construído utilizando as seguintes ferramentas e linguagens:
* HTML para criação da página
* PHP para conexão com o banco e para funcionalidades de back-end
* MySQL para criação e manutenção do banco de dados

---

## Estrutura Básica dos Arquivos
A organização dos arquivos do projeto segue a estrutura abaixo:

```text
ATIVIDADE_TESTE_1/
├── infra/
│   ├── db/
│   │   ├── connect.php     # Configuração e conexão com o banco de dados
│   │   └── script.sql      # Script de criação das tabelas do banco
│   └── redes/              # Configurações de rede 
├── public/                 #pasta para os itens públicos
│   ├── component/          
│   │   └── table.php       # Componente de tabela
│   ├── home.php            # Página home
│   └── logout.php          # Código para encerrar a sessão do usuário
├── index.php               # Página de login inicial
└── README.md               # README do projeto
```

---

## Funcionamento do Código
A lógica geral do sistema baseia-se no fluxo descrito a seguir:

1. O usuário entra no sistema
2. O usuário pode adicionar novos usuários
3. O usuário pode ver a tabela mostrando os dados do Banco

---

## Principais Aprendizados
A análise e o desenvolvimento deste projeto proporcionaram a consolidação de conceitos importantes:
* Lógica do PHP
* Conexão, inserção e gerenciamento do banco via php
* Segurança com Back-end
* Estruturação de pasta
