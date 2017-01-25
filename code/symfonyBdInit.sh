php bin/console doctrine:database:drop --force
php bin/console doctrine:database:create
php bin/console doctrine:schema:update --force
php bin/console doctrine:fixture:load 

php bin/console doctrine:generate:entities AppBundle 
php bin/console doctrine:schema:update --force
 
sudo chmod 777 src/AppBundle/Entity/*.php~
rm -R src/AppBundle/Entity/*.php~
