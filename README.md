# Clube de Envios - Refatoração do Banco de Dados

## Objetivo do Projeto

Este projeto Laravel tem como objetivo **refatorar o banco de dados** do sistema **Clube de Envios**, visando implementar **chaves primárias e estrangeiras** adequadas. O banco de dados recebido não possui a estrutura de chaves bem definida, o que compromete a **integridade referencial dos dados**.

A refatoração será realizada para garantir que o banco de dados tenha:

- Chaves primárias definidas em todas as tabelas.
- Relacionamentos apropriados utilizando chaves estrangeiras.
- Integridade e consistência dos dados, evitando problemas como duplicação ou perda de referências.
- A migraçao dos dados do banco Legado para o Novo Banco de dados

---
# Refatoração de Tabelas

## 1. Tabela `serviços` -> `shipping_methods`

- **Antigo Nome**: `serviços`
- **Novo Nome**: `shipping_methods`
- **Significado**: O novo nome reflete mais precisamente a função da tabela, que é armazenar diferentes métodos de envio disponíveis, como PAC e SEDEX.

### Relacionamentos:
- **Relacionamento**: Um método de envio (`shipping_methods`) pode estar associado a várias transportadoras (`carriers`).
- **Chave Estrangeira**: `shipping_method_id` em `vtex_shipping_rates`, que referencia `id` em `shipping_methods`.

---

## 2. Tabela `transportadoras` -> `carriers`

- **Antigo Nome**: `transportadoras`
- **Novo Nome**: `carriers`
- **Significado**: O termo "carriers" é o termo em inglês utilizado para designar transportadoras. Esse nome é mais alinhado ao vocabulário comum em sistemas de logística e transporte.

### Relacionamentos:
- **Relacionamento**: Cada transportadora (`carriers`) pode ter vários métodos de envio (`shipping_methods`), dependendo de como ela opera.
- **Chave Estrangeira**: `carriers_id` em `shipping_methods` que referencia `id` em `carriers`.

---

## 3. Tabela `cotacao` -> `user_shipping_quotes`

- **Antigo Nome**: `cotacao`
- **Novo Nome**: `user_shipping_quotes`
- **Significado**: O novo nome indica que a tabela é responsável por armazenar as cotações de frete feitas pelos usuários. O uso do prefixo "user" deixa claro que essas cotações são específicas para cada usuário.

### Relacionamentos:
- **Relacionamento**: Uma cotação de frete (`user_shipping_quotes`) é específica para um usuário e pode estar associada a um método de envio (`shipping_methods`).
- **Chave Estrangeira**: `shipping_method_id` em `user_shipping_quotes`, que referencia `id` em `shipping_methods`.

---

## 4. Tabela `vtex_valores` -> `vtex_shipping_rates`

- **Antigo Nome**: `vtex_valores`
- **Novo Nome**: `vtex_shipping_rates`
- **Significado**: Esta tabela é a sucessora da tabela `vtex_valores` e armazena as taxas de envio específicas para a integração com a VTEX. O novo nome descreve mais claramente que a tabela contém as taxas de envio, incluindo detalhes como prazo de entrega e valores associados a diferentes métodos de envio.

### Relacionamentos:
- **Relacionamento**: As taxas de envio (`vtex_shipping_rates`) estão relacionadas a um método de envio específico (`shipping_methods`).
- **Chave Estrangeira**: `shipping_method_id` em `vtex_shipping_rates`, que referencia `id` em `shipping_methods`.

---

## 5. Tabela `access_token` -> `access_tokens`

- **Antigo Nome**: `access_token`
- **Novo Nome**: `access_tokens`
- **Significado**: O novo nome no plural segue a convenção de nomenclatura que indica que a tabela armazena múltiplos tokens de acesso. Isso é mais claro e consistente, refletindo que a tabela pode conter vários registros.

### Relacionamentos:
- **Relacionamento**: Cada token de acesso (`access_tokens`) pode estar relacionado a um usuário específico (`users`).
- **Chave Estrangeira**: `id_usuario` em `access_tokens`, que referencia `id` em `users`.

---

## 6. Tabela `usuarios` -> `users`

- **Antigo Nome**: `usuarios`
- **Novo Nome**: `users`
- **Significado**: A tabela de usuários foi renomeada para `users`, um termo em inglês amplamente reconhecido. Esse nome padroniza a nomenclatura com outras tabelas e facilita a compreensão em um contexto de desenvolvimento internacional.

### Relacionamentos:
- **Relacionamento**: Cada usuário (`users`) pode ter múltiplos tokens de acesso (`access_tokens`).
- **Chave Estrangeira**: `id_usuario` em `access_tokens`, que referencia `id` em `users`.

---

### Considerações Finais

Essas refatorações foram feitas para melhorar a clareza e a legibilidade do código, tornando mais fácil para desenvolvedores e colaboradores entenderem a estrutura do banco de dados. A adoção de nomes em inglês e a adoção de convenções de nomenclatura consistentes também ajudam a padronizar o projeto e facilitar futuras manutenções. A definição clara dos relacionamentos entre as tabelas também possibilita um entendimento mais profundo das interações no sistema.


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

