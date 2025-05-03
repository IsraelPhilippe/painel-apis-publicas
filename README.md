# Painel de Controle para APIs Públicas

Este é um projeto Laravel que funciona como uma galeria de APIs públicas. Usuários autenticados podem visualizar as APIs cadastradas, acessar seus detalhes e testar as respostas JSON diretamente no sistema.

## 🧰 Tecnologias Utilizadas

- PHP 8.2+
- Laravel 11
- Docker & Docker Compose
- MySQL 8
- Tailwind CSS (via Vite)
- Laravel Breeze (para autenticação)
- Blade

## 📚 Funcionalidades

- Listagem de todas as APIs públicas cadastradas
    
- Visualização dos detalhes de cada API (com retorno JSON real via cURL)
    
- Integração com API CoinGecko como exemplo
    
- Estilo visual agradável com tabela centralizada

## 📦 Pré-requisitos

- [Docker](https://www.docker.com/)
    
- Docker Compose

---

## 🔧 Como Rodar o Projeto

### 1. Clonar o Repositório
```bash
git clone https://github.com/seu-usuario/painel-apis-publicas.git
```

### 2. Estrutura de Pastas Esperada
```bash
painel-apis-publicas/
├── docker-compose.yml
├── Dockerfile
├── src/   ← Código Laravel está dentro dessa pasta
│   ├── app/
│   ├── database/
│   └── ... 
```

### 3. Entre no diretório
```bash 
cd painel-apis-publicas
```


## ⚙️ Rodando o Projeto com Docker

### 1. Subir os containers
```bash 
docker-compose up -d --build
```

### 2. Acessar o container da aplicação
```bash 
docker exec -it painel-apis-app bash
```

### 3. Instalar as dependências do Laravel
```bash
composer install
```

### 4. Copiar o arquivo `.env`
```bash
cp .env.example .env
```

### 5. Gerar a chave da aplicação
```bash 
php artisan key:generate
```

### 6. Rodar as migrações
```bash 
php artisan migrate
```

### 7. Compilar os assets (CSS/JS)
```bash 
npm install
npm run dev
``` 

### 8. Iniciar o projeto
```bash 
php artisan serve
```

### 9. Criando usuário
```bash
- No seu navegador, acesse a rota: localhost:8000

- Ao acessar a rota devera aparecer a seguinte tela:
![image](https://github.com/user-attachments/assets/06908d3d-9e2f-40f6-9041-010e5b241503)


- Clique em 'Register'
![image](https://github.com/user-attachments/assets/6e19f9aa-2ab4-40ec-96ea-cfac320c1947)

- Preencha os campos e clique novamente em register

```

## 📚 Aprendizados

Durante o projeto, foram praticados:

- Uso de Laravel com Docker
    
- Migrações e Seeders
    
- Consumo de APIs públicas 
    
- Blade Templates e Tailwind CSS
    
- Organização de código seguindo MVC


## 🧠 Autor

Feito com ❤️ por [Israel Philippe](https://github.com/IsraelPhilippe)
