# Silverstripe 4.3.3 Boilerplate

Front-End Developers Silverstripe Template

### How to install Silverstripe 4.3.3 boiler

- go to `/var/www/html`
- to create your project, type 
  `composer create-project silverstripe/installer <project-name> 4.3.3`
- go to your project
- type `sudo chown -R [laptop-name]:www-data .`
- type `sudo chmod -R 775 .`
- go to URL `localhost/<project-name>/public` then set up and install
- go to .env and add
```
SS_DEFAULT_ADMIN_USERNAME='admin'
SS_DEFAULT_ADMIN_PASSWORD='admin'
SS_ENVIRONMENT_TYPE='dev'
```
- type `git init`
- type `git remote add boiler ssh://git@gitlab.praxxys.ph:52222/praxxys-websites/silverstripe-4.3.3-boilerplate.git`
- type `git pull boiler dev`
- type `composer update`
- type `npm install`