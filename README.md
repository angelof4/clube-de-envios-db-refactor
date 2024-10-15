# Clube de Envios - Refatoração do Banco de Dados

## Objetivo do Projeto

Este projeto Laravel tem como objetivo **refatorar o banco de dados** do sistema **Clube de Envios**, visando implementar **chaves primárias e estrangeiras** adequadas. O banco de dados recebido não possui a estrutura de chaves bem definida, o que compromete a **integridade referencial dos dados**.

A refatoração será realizada para garantir que o banco de dados tenha:

- Chaves primárias definidas em todas as tabelas.
- Relacionamentos apropriados utilizando chaves estrangeiras.
- Integridade e consistência dos dados, evitando problemas como duplicação ou perda de referências.


## Funcionalidades

As principais atividades deste projeto incluem:

1. **Análise da Estrutura Atual**: Avaliar o banco de dados existente, identificando as tabelas e colunas que precisam ser refatoradas, bem como os relacionamentos entre elas.
   
2. **Definição e Correção de Chaves Estrangeiras**: Revisar e corrigir as chaves estrangeiras para garantir que os relacionamentos entre tabelas estejam corretamente implementados, promovendo a integridade referencial.

3. **Renomeação de Tabelas e Colunas**: Aplicar as melhores práticas de desenvolvimento, renomeando tabelas e colunas para nomes mais claros e consistentes com as convenções de nomenclatura modernas, melhorando a legibilidade e a manutenção do banco de dados.

4. **Implementação de Chaves Primárias**: Garantir que todas as tabelas possuam chaves primárias adequadas, proporcionando uma identificação única e robusta para cada registro.

5. **Migração de Dados**: Desenvolver scripts de migração que transferem os dados do banco de dados atual para a nova estrutura, garantindo que todos os dados sejam migrados corretamente, sem perdas ou inconsistências.

6. **Testes e Validação**: Realizar testes rigorosos para garantir que todas as mudanças e migrações de dados estejam funcionando corretamente, preservando a integridade do sistema e a qualidade dos dados.

7. **Migrações Laravel**: Utilizar migrações do Laravel para automatizar a criação da nova estrutura de banco de dados e aplicar as refatorações de forma segura e controlada.

8. **Documentação das Mudanças**: Manter uma documentação clara das mudanças feitas, incluindo as renomeações de tabelas e colunas, assim como os novos relacionamentos, facilitando futuras manutenções e desenvolvimento.

## Estrutura do Projeto

Este projeto segue a estrutura padrão do Laravel e utiliza o sistema de **migrações** para implementar as mudanças no banco de dados.

- **Migrations**: As migrações serão utilizadas para alterar e refatorar a estrutura do banco de dados, incluindo a criação de chaves primárias e estrangeiras.
- **Models**: As mudanças no banco de dados serão refletidas nos **models** do Laravel, garantindo que os relacionamentos entre as tabelas sejam corretamente mapeados.

## Como Executar o Projeto

1. Clone o repositório do projeto:
    ```bash
    git clone https://github.com/angelof4/clube-de-envios-db-refactor.git
    ```

2. Instale as dependências do Laravel:
    ```bash
    composer install
    ```

3. Configure o arquivo `.env` com os dados de conexão do banco de dados.

4. Execute as migrações para aplicar as mudanças no banco de dados:
    ```bash
    php artisan migrate
    ```

5. Opcional: Popule o banco de dados com dados de exemplo (se aplicável):
    ```bash
    php artisan db:seed
    ```

## Considerações Finais

A refatoração do banco de dados do Clube de Envios é essencial para garantir a **escalabilidade**, **consistência** e **segurança** dos dados. Implementando chaves primárias e estrangeiras adequadas, o sistema poderá gerenciar melhor seus dados e evitar problemas futuros relacionados à integridade referencial.

Este projeto segue as **melhores práticas** de desenvolvimento de bancos de dados, utilizando as ferramentas e recursos nativos do Laravel para facilitar a manutenção e o crescimento do sistema.



**Desenvolvido por:** Angelo Barreto Farias de Melo

