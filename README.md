# Trabalho Ambientes Operacionais

Este repositório contém a descrição e códigos necessários para o trabalho aplicado da disciplina de Ambientes Operacionais.

Utilize o ambiente do curso "AWS Academy Learner Lab - Associate Services" para fazer o trabalho. Este ambiente persiste até o fechamento do curso, e fica  disponível aproximadamente 1 ano apos o inicio do semestre, para estudo

## Objetivo

Aplicar os conhecimentos adquiridos na disciplina de Ambientes Operacionais, provisionando recursos na AWS dentro de uma VPC e suas subredes públicas e privadas e criando regras de segurança par acesso aos recursos.

## Grupo

O trabalho deve ser feito em **grupos de até 5 alunos**. 

## Entrega

A entrega deverá ser feita até a data especificada no cronograma (ver plano de ensino no classroom). O grupo deverá gravar um vídeo mostrando a solução e entregar uma figura com a arquitetura da solução. Utilize https://app.diagrams.net para fazer o desenho da arquitetura. O vídeo deve mostrar evidências de todas as tarefas descritas a seguir. 


## Tarefas

1. Criar uma VPC com as seguintes características:

    1.1. A VPC deve ter 1024 endereços de IPv4 disponíveis 

    1.2. Duas subredes públicas

    1.3. Duas subredes privadas.

    1.4. Cada subrede deve conter 27 endereços de IPv4 disponíveis
    
    1.5. Utilizar duas zonas de disponibilidade diferentes. Uma subrede pública e uma privada deve estar em cada zona de disponibilidade

    1.6 A VPC deve conter um NAT Gateway

    1.7 A VPC deve conter um Internet Gateway

    1.8 A VPC deve conter as tabelas de rotas e associações apropriadas para as subredes

2. Criar 2 grupos de segurança na VPC criada anteriormente:

    2.1. Nome: ec2-sg. Deve permitir a conexão SSH e conexão HTTP de qualquer local

    2.2. Nome: bd-sg. Deve permitir a conexão PostgreSQL somente para o grupo de segurança anterior
    
    
3. Criar um bucket S3 com as seguintes características:

    3.1. O bucket deve ser configurado permitir acesso público

    3.2 O bucket deve ser configurado para hospedar um site estático

    3.3 O bucket deve ter a seguinte política de segurança. Troque **NOME_BUCKET** pelo nome do seu bucket:

    ```json
    {
        "Version": "2012-10-17",
        "Statement": [
            {
                "Effect": "Allow",
                "Principal": "*",
                "Action": "s3:GetObject",
                "Resource": "arn:aws:s3:::NOME_BUCKET/*"
            }
        ]
    }
    ```

    3.4 Coloque no bucket o conteúdo da pasta html deste repositório (https://github.com/fesousa/ambientes-operacionais-bd-trabalho/tree/main/html)

    3.5. Procure pelo endpoint de site do bucket e abra no seu navegador para testar. Você deve ver a seguinte tela:

    <img src="https://github.com/fesousa/ambientes-operacionais-bd-trabalho/raw/main/img/s3.png" />

    
4. Criar uma instância EC2 com seguintes características:

    4.1. Nome: flask-app

    4.2. Imagem: Amazon Linux

    4.3. Tipo de Instância: t2.micro

    4.4. Par de chaves: vockey

    4.4 Utilizar a VPC criada neste trabalho

    4.5 Colocar a instância em uma subrede pública

    4.6. Habilitar atribuição automática de IP Público

    4.7 Vincular o grupo de segurança ec2-sg

    4.8 Utilizar o seguinte código em user data (Dados do usuário):

    https://github.com/fesousa/ambientes-operacionais-bd-trabalho/blob/3822d09faca1f11c160cae658a951bd93673d66c/flask-ec2.sh#L1-L26


    Obs: Cuidado que ao copiar o código ele insere um espaço antes de cada comando, fazendo com que o ambiente não seja criado corretamente. Remova o espaço no início de cada comando, se houver.

5. Criar um grupo de sub-redes de banco de dados no RDS

    5.1. Deve estar na VPC criada neste projeto

    5.2. Deve conter apenas as subredes provadas da VPC

6. Criar um cluster RDS Aurora:

    6.1. Compatível com PostgreSQL versão 11.13

    6.2. Tipo Serverless (Tecnologia sem servidor)

    6.3. Defina um nome de usuário, senha e nome do banco de dados inicial. O Nome do banco de dados náo é o identificador. O nome é configurado em configuração adicional.

    6.4. Configure a Unidade de capacidade mínima e máxima para  2 ACU.

    6.5. Configure para escalar a capacidade para zero ACUs quando o cluster estiver ocioso

    6.6 Coloque o cluster RDS na VPC criada e na subnet privada

    6.7 Selecione o grupo de subredes criado anteriormente

    6.8. Associe o grupo de segurança bd-sg. Somente este grupo de segurança deve estar associado.

    6.9. Habilite a API de dados

7. Para testar a solução:

    7.1. Procure pelo endpoint de site do bucket e abra no seu navegador

    7.2. Clique em configurações

    7.3. Configure os campos:

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a. Endereço IPv4 público EC2: IP público da instãncia EC2 criada

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b. Host Banco de Dados: Endpoint do cluster RDS

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c. Banco de dados: nome do banco de dados criado (não é o identificador da instância)

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d. Usuário: usuário do banco de dados

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;e. Senha: senha do banco de dados

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f. Clique em Salvar

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;g. Clique em Voltar
    
&nbsp;&nbsp;&nbsp;&nbsp;7.4. Clique em SQL

&nbsp;&nbsp;&nbsp;&nbsp;7.5. Escreva comandos SQL do tipo `CREATE TABLE`, `INSERT` e `SELECT` para testar
