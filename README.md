# social_service
Project for PRIISMA

To run the project in ubuntu
1.- install apache

```
sudo apt update
sudo apt install apache2
```
2.- install php
```
sudo apt install php libapache2-mod-php
```
3.- install nodejs and npm
```
sudo apt install nodejs npm
```
4.- start the apache webservice
```
sudo service apache2 start
```
5.- install the node dependencies
```
npm i
```
6.- generate the output.css
```
npx tailwindcss -i styles.css -o output.css
```
7.- run the project
```
php -S localhost:8000
```
