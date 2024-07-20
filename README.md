<p align="center"><a href="" target="_blank"><img src="https://github.com/cirolacerda/open-dev-app/blob/dev/storage/app/public/open-dev-login.png?raw=true" width="600" alt="Open dev"></a></p>

## Open Dev App

Status: Em desenvolvimento

Este é um sistema baseado em Laravel que permitirá ao CTO avaliar e filtrar desenvolvedores de código aberto. O aplicativo é integrado à API GitHub para realizar a busca dos desenvolvedores. 

## Screenshorts

<p align="left"><a href="" target="_blank"><img src="https://github.com/cirolacerda/open-dev-app/blob/dev/storage/app/public/open-dev-github-stats.png?raw=true" width="600" alt="Open dev"></a>
 
<p align="left"><a href="" target="_blank"><img src="https://github.com/user-attachments/assets/5a63aaa5-f667-44a8-9deb-e11cd7069145" width="600" alt="Open dev"></a></p>



## Tecnologias Utilizadas

- [Laravel 11.x](https://laravel.com/docs/routing).
- Front-End - Views Blade
- Breeze para autenticação
- Ambiente de desenvolvimento com Laravel Sail e Docker
- Banco de dados MySQL
- Integrações Api Github e github-readme-stats (Anurag Hazra)  


## Instalação

O projeto utiliza o pacote Laravel Sail, Será necessário a instalação do Docker, Docker Compose e git em sua máquina.

1. Clone o repositório do Github:
    
    `git clone https://github.com/cirolacerda/open-dev-app.git`

2. Entre na pasta do projeto: 

    `cd open-dev-app`

3. Copie o arquivo .env.example para .env e insira o seu github token

   ``` 
   GITHUB_TOKEN=your_github_token
   ```
   
4. Execute o comando de configuração

    ```shell
        composer install --ignore-platform-reqs
     ```
5. Inicie o ambiente de desenvolvimento

   Execute o comando abaixo:
    ```shell
    ./vendor/bin/sail up

6. Execute as migrações e seeders para criar as tabelas e os usuários
    ```shell
    ./vendor/bin/sail artisan migrate
    ./vendor/bin/sail artisan db:seed UserSeeder
    ```
7. Acesse a aplicação
    [http://localhost](http://localhost)

8. Usuários
    - **Admin**
        - E-mail: admin@teste.com
        - Senha: password
    - **CTO**
        - E-mail: cto@teste.com
        - Senha: password
    - **Assistant**
        - E-mail: assistant@teste.com
        - Senha: password
          

### Autor
---

<a href="#">
 <img style="border-radius: 50%;" src="https://avatars.githubusercontent.com/u/12432749?v=4" width="100px;" alt=""/>
 <br />
 <sub><b>Ciro Lacerda</b></sub></a> <a href="#" title="Ciro Lacerda">🚀</a>
 <br />

Feito com ❤️ por Ciro Lacerda 👋🏽 Entre em contato!

[![Twitter Badge](https://img.shields.io/badge/-@Ciroblacerda-1ca0f1?style=flat-square&labelColor=1ca0f1&logo=twitter&logoColor=white&link=https://twitter.com/tgmarinho)](https://twitter.com/ciroblacerda) 
[![Gmail Badge](https://img.shields.io/badge/-cirolacerda@gmail.com-c14438?style=flat-square&logo=Gmail&logoColor=white&link=mailto:cirolacerda@gmail.com)](mailto:cirolacerda@gmail.com)

## License

Open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
