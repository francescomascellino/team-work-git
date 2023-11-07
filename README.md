<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# comandi git
- git status
- git branch
- git branch nome_branch
- git checkout nome_branch
- git checkout -b nome_branch


# Scaletta git flow
- per invitare collaboratori alla repo: settings > collaborators > add people
- se sono invitato come collaboratore
    - clono la repo
    - composer install
    - npm install
    - copia di .env.example e lo rinomino in .env
    - php artisan key:generate
    - php artisan serve
- per importare modifiche
    - git checkout main
    - git pull
    - se sono state fatte modifiche ai pacchetti, occorre digitare
        - composer install
        - npm install
- quando si fanno modifiche:
    - si crea nuovo branch git checkout -b nome-branch
    - si fanno le modifiche
    - si committa
    - si pubblica
    - si fa compare & pull request