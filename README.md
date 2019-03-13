# Produção


## Requisitos mínimos 
1. Composer >= **1.8.0**
2. Apache2 >= **2.4.29**
3. PHP >= **7.0**

# Realizar o Deploy 
1. Copie a pasta **pfc-master** para pasta do SERVIDOR

2. Crie o banco de dados
    ```
    create database db_documentos;
    ```
3. Entre na pasta do projeto e abra o terminal

4. Baixe todas as dependências do projeto  
    ```
    composer install
    ``` 
5. Crie as tabelas no banco
    ```
    php artisan migrate
    ```
6. Crie uma nova chave para aplicação
    ```
    php artisan key:generate
    ```
7. Execute a aplicação
    ```
    php artisan serve
    ``` 
### O que será exibido
``` 
Laravel development server started: <http://127.0.0.1:8000>
```

Copiar a URL **http://127.0.0.1:8000** e coloca no navegador, o projeto estará em total execução.