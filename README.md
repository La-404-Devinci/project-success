# Success project 

<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project 📁</a>
      <ul>
        <li><a href="#features">Features 📑</a></li>
      </ul>
    </li>
    <li>
      <a href="#Techs">Techs 💻</a>
    </li>
    <li><a href="#build-setup">Build Setup 🧑🏻‍💻</a></li>
    <li><a href="#contributors">Contributors 👥</a></li>
  </ol>
</details>

## About the project


### Features

- [x] Header
- [x] Footer
- [x] Home page with presentation of the project
- [x] Show all News Pages
- [x] Show one news
- [x] Back office: List all administrator
- [x] Back office: Authorize new administrator
- [x] Back office: Unauthorized administrator
- [x] Back office: Delete administrator for Super Administrator
- [ ] Back office: Edit administrator
- [x] Back office: List all news
- [x] Back office: Create News
- [x] Back office: Edit News
- [x] Back office: Delete News


## Techs

- [Symfony](https://symfony.com/doc/current/index.html)
- [TailwindCSS](https://tailwindcss.com/)
- [AlpineJS](https://alpinejs.dev/)


## Build Setup

```bash
# install dependencies
$ composer install 
# and
$ npm install
# or
$ yarn install

# migrate database after update .env
$ symfon console doctrine:database:create
$ symfony console doctrine:database:migrate

# then just run : 
$ symfony serve
# and    
$ npm run watch
# or
$ yarn watch


```
## Contributors

- [Guillaume FINE](https://github.com/Cosmeak)
- [Vincent MICHEL](https://github.com/CanarDev)

**README inspired by [Clément DUVIVIER](https://github.com/ClemOurs)**
