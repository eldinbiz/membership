## About This Membership App Test

This is an application that accomodates some kinda user registration to a subscription packages. This apa was created as a result for development test for entry as programmer in loops
At the moment, here are (in my opinion) few of the fullfiled objectives that currently completed and which one's not:

- [ ] TDD principle development 
- [ ] PSR-2 sniffed code
- [ ] Test class using Dusk
- [x] TALL (I used Filamentphp stack, but not in its entirely. to be honest, this is the first tame i've ever used this stack. Turns out that i need a more dedicated time to be able to get used to this laravel stack)
- [x] PHP 8.1 (I used Laravel9, and it automatically verify if it needs php8.1 as dependency during composer installation of Laravel stack)
- [x] MariaDB 10 was used. Might be better as a proof if i could provide some kind of dockcer-compose.yml as an evidence of the database version usage for this project. But sorry, i also still trying to get used of using laravel-sails deployment.
- [ ] Using Enum and State strategy
- [x] refrained from using DB::query() (Most of the query here are accomodated by filamentphp, but some that needs modification, I used Eloquent builder. Ex: get package detail at app\Filament\Resources\MemberResource\Pages\CreateMember.php)
- [x] Seeder provided, I used orangehill/iseed package to generate the seeder
- [x] Provided this Readme.md (might not be the kind of comprehensive readme you'd expect)
- [x] Push this to my own github repo.
- [ ] I've never used github CI/CD pipeline "github action" before. I'm sorry i couldn't provide any case on how to use that in this project properly.

> I'm aware that this project is not entirely completed, and does not fully represent the best answer for the test case provide. But thank you for exposing me to this stacks, enables me to learned something new (or something that I should've been trying to learn before). If you find this result inadequate, Terimakasih telah sempat memberikan kesempatan pada saya untuk mengikuti test ini.

## How to install this project

Here are how install this project

1. Install all laravel packages necessary

```console
$ composer install
$ composer dumpautoload -o
```
2. migrate all the database 
```console
$ php artisan migrate
```
3. run Seed for the package detail
```console
$ php artisan db:seed
```
4. To make sure that filamentphp asset dependency resolved, run npm install and run on this:
```console
$ npm install
$ npm run dev
```
5. open a new console, and serve the laravel
```console
$ php artisan serve
```
6. to create initial first user, use this command provided by filamentphp and follow it's instruction:
```console
$ php artisan make:filament-user
```
7. access laravel by this url: `http://localhost:[custom_port_if_any]/admin/`. Enter the new user credential previously created in no.6
