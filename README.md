Para rodar o projeto, seguir os seguintes passos (caso tenha Docker instalado na máquina):

- Copiar o arquivo `.env.example` e renomear para `.env`  
  Via terminal Linux, usar o seguinte comando: `cp .env.example .env`

- Rodar o comando:  
  `docker run --rm -u "$(id -u):$(id -g)" -v $(pwd):/var/www/html -w /var/www/html laravelsail/php84-composer:latest composer install --ignore-platform-reqs`

- Rodar o comando:  
  `alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'`

- Rodar o comando:  
  `sail up -d`

- Rodar o comando:  
  `sail artisan key:generate`

- Rodar o comando:  
  `sail artisan migrate --seed`

- Acessar via `http://localhost:8001`
