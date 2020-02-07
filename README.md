Symfony 5 and Api Platform

1. Setup: Download and Install Composer and Symfony
    https://symfony.com/doc/current/setup.html

2. Creating Symfony Applications

    symfony new api-project

3. Running Symfony Application

    cd api-project/
    symfony server:start

4. Installing Packages: Api Platform

    composer require api

5. Creating First Model

    5.1 Config .env

        DATABASE_URL=mysql://root:password@127.0.0.1:3306/my-api-project?serverVersion=5.7

    5.2 Install MakeBundle

        composer require maker --dev

        note: linux require permision sudo. Recomende read: https://getcomposer.org/doc/faqs/how-to-install-untrusted-packages-safely.md

    5.3 Generate Entities: tramites, 


    
