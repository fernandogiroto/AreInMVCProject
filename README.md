# AreIn - PHP Project MVC

[![N|Solid](https://fernandoportugal.com/php.jpg)](http://fernandoportugal.com/projeto_mvc)


Projeto para pequenas empresas de gestão de funcionários feito em php, sql, arquitetato em mvc.

# Sobre o projeto

  - Projeto do Zero usando PHP, HTML, CSS & Bootstrap 4
  - Projeto utilizando o padrão de desenvolvimento MVV


Após os diversos cursos que venho fazendo para aprender cada vez melhor a linguagens de programação **PHP** e **SQL**, venho somando a estes estudos o padrão de desenvolvimento **MVC** (Model-View-Controller (em português: Arquitetura Modelo-Visão-Controle - MVC)). Arquitetei então um projeto de gestão e controle de funcionários para uma empresa com estas funcionalidades até então:

  - Registro dos pontos entrada, entrada almoço, saída almoço, saída.
  - Relatório mensal dos pontos 
  - Saldos de horas trabalhadas 
  - Reltório gerencial com Qtde. de Funcionários
  - Faltas e horas no mês de cada funcionário
  - Quadro de usuários
  - Painéis para usuários e admin
  - Gestão da conta


### Tecnologias Usadas

Dillinger uses a number of open source projects to work properly:

* [PHP] - Hypertext Preprocessor
* [SQL] - Structured Query Languager
* [HTML] - Hyper Text Markup Language
* [CSS] - Cascading Style Sheets
* [BOOTSTRAP] - Framework front-end responsivo


### Instalação

Criar um schema no SQL com o nome **arein** e rodar estes comandos SQL abaixo: 

```sh
USE AREIN;

DROP TABLE IF EXISTS working_hours, users;
CREATE TABLE users (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    start_date DATE NOT NULL,
    end_date DATE,
    is_admin BOOLEAN NOT NULL DEFAULT false
);
CREATE TABLE working_hours (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    user_id INT(6),
    work_date DATE NOT NULL,
    time1 TIME,
    time2 TIME,
    time3 TIME,
    time4 TIME,
    worked_time INT,

    FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT cons_user_day UNIQUE (user_id, work_date)
);

-- Essa senha criptografada corresponde ao valor "a"
INSERT INTO users (id, name, password, email, start_date, end_date, is_admin)
VALUES (1, 'Admin', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'admin@cod3r.com.br', '2000-1-1', null, 1);

```

### Desenvolvimento & Atualizações

Abaixo vou colocando as informações referentes ao desenvolvimento e as atualizações que vou fazendo neste projeto.

| Data | DESCRIÇÃO |
| ------ | ------ |
| 14/Jun/2020 | Correções de CSS |
| 12/Jun/2020 | Primeiro Commit do Projeto. |



### Desenvovilmento MVC

MVC é um padrão de projeto de software, ou padrão de arquitetura de software formulado na década de 1970, focado no reuso de código e a separação de conceitos em três camadas interconectadas, onde a apresentação dos dados e interação dos usuários (front-end) são separados dos métodos que interagem com o banco de dados (back-end).

Normalmente usado para o desenvolvimento de interfaces de usuário que divide uma aplicação partes (camadas/componentes) interconectadas. Isto é feito para separar representações de informação internas dos modos como a informação é apresentada para e aceita pelo usuário, levando ao desenvolvimento paralelo de maneira eficiente.

```sh
Model-View-Controller (em português: Arquitetura Modelo-Visão-Controle - MVC)
```

[![N|Solid](https://fernandoportugal.com/img/mvcpro.png)](http://fernandoportugal.com/projeto_mvc)


### Próximas Atualizações

 - Download em pdf do relatório gerencial semanal
 - Novas colunas nas tabelas (cargo, tempo na empresa)

Desenvolvido por
----

[@Fernandoportugal](https://fernandoportugal.com)

