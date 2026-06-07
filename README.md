# 🚀 Easy API HTTP Connect - OpenCart

Uma extensão para **OpenCart** que simplifica a integração com APIs externas através de requisições HTTP de forma rápida, prática e eficiente.

Com o **Easy API HTTP Connect**, você pode realizar chamadas **GET**, **POST**, **PATCH**, **PUT** e **DELETE** sem precisar desenvolver integrações complexas, acelerando a comunicação entre sua loja OpenCart e qualquer serviço externo.

---

## ✨ Principais Recursos

- ✅ Requisições HTTP GET
- ✅ Requisições HTTP POST
- ✅ Requisições HTTP PUT
- ✅ Requisições HTTP PATCH
- ✅ Requisições HTTP DELETE
- ✅ Configuração simples e intuitiva
- ✅ Suporte a Headers personalizados
- ✅ Envio de dados em JSON
- ✅ Autenticação via Token, Bearer ou API Key
- ✅ Tratamento de respostas HTTP
- ✅ Fácil integração com APIs REST
- ✅ Compatível com OpenCart

---

## 🎯 Objetivo

O **Easy API HTTP Connect** foi desenvolvido para facilitar a integração do OpenCart com:

- Sistemas ERP
- Gateways de pagamento
- Marketplaces
- Sistemas de CRM
- APIs de logística
- Serviços de automação
- Aplicações customizadas
- Qualquer API REST externa

---

## 📦 Instalação

1. Faça o download da extensão.
2. Acesse o painel administrativo do OpenCart.
3. Vá em:

```text
Extensões → Instalador
```

4. Envie o arquivo `.ocmod.zip`.
5. Atualize as modificações em:

```text
Extensões → Modificações
```

6. Limpe o cache do OpenCart.

---

## 🔧 Exemplo de Requisição GET

```php
$this->easy_api = new EasyApi('https://api.opencartmaster.com.br');
$result = $this->easy_api->get(
    [   'Accept' => ' */*',
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer TOKEN'
    ], 
    '/v1/check'
);
```

---

## 🔧 Exemplo de Requisição POST

```php
$this->easy_api = new EasyApi('https://api.opencartmaster.com.br');
$result = $this->easy_api->post(
    [   'Accept' => ' */*',
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer TOKEN'
    ],
    '/v1/check',
    [
        'nome'  => 'Produto Teste',
        'preco' => 99.90
    ],
);
```

---

## 🔧 Exemplo de Requisição PUT

```php
$this->easy_api = new EasyApi('https://api.opencartmaster.com.br');
$result = $this->easy_api->put(
    [   'Accept' => ' */*',
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer TOKEN'
    ],
    '/v1/check',
    [
        'nome'  => 'Produto Novo Nome',
        'preco' => 99.90
    ],
);
```

---

## 🔧 Exemplo de Requisição PATCH

```php
$this->easy_api = new EasyApi('https://api.opencartmaster.com.br');
$result = $this->easy_api->patch(
    [   'Accept' => ' */*',
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer TOKEN'
    ],
    '/v1/check',
    [
        'quantidade'  => 2,
    ],
);
```

---

## 🔧 Exemplo de Requisição DELETE

```php
$this->easy_api = new EasyApi('https://api.opencartmaster.com.br');
$result = $this->easy_api->delete(
     [   'Accept' => ' */*',
        'Content-Type' => 'application/json',
        'Authorization' => 'Bearer TOKEN'
    ],
    '/v1/check/1',
);
```

---

## 📄 Estrutura da Resposta

```php
Array
(
    [status] => 200
    [body] => {...}
)
```

---

## 🔐 Suporte a Autenticação

A extensão permite trabalhar com diferentes métodos de autenticação:

- Bearer Token
- API Key
- Basic Auth
- Headers personalizados

Exemplo:

```php
$headers = [
    'Authorization' => 'Bearer SEU_TOKEN',
    'Content-Type'  => 'application/json'
];
```

---

## 💡 Casos de Uso

- Sincronização de produtos
- Atualização de estoque
- Integração com ERPs
- Consulta de fretes
- Emissão de documentos fiscais
- Comunicação com CRMs
- Automações entre sistemas
- Integrações personalizadas

---

## 🚀 Benefícios

- Menos código
- Integrações mais rápidas
- Fácil manutenção
- Padronização das requisições
- Maior produtividade no desenvolvimento

---

## 📋 Requisitos

- OpenCart 2.x ou superior
- PHP 7.2+
- Extensão cURL habilitada

---

## 🤝 Contribuições

Contribuições são bem-vindas!

Caso encontre algum problema ou tenha sugestões de melhorias, abra uma **Issue** ou envie um **Pull Request**.

---

## 📄 Licença

Este projeto está licenciado sob a licença MIT.

---

# Easy API HTTP Connect

**Conecte qualquer API externa ao OpenCart em minutos, utilizando requisições HTTP simples, rápidas e padronizadas.**
