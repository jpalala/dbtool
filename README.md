# DBtool 

This is not a fully-fledged package for interfacing with multi-tenant database. There are tools that do that already. This is a simple idea to allow one to  keep track of all tenant migrations/seeders in a multi-tenant architecture.


This project is built with:

<p align="center">
    <img title="Laravel Zero" height="100" src="https://raw.githubusercontent.com/laravel-zero/docs/master/images/logo/laravel-zero-readme.png" alt="Laravel Zero Logo" />
</p>


## License

Dbtool is opensource software licensed under the [MIT license](LICENSE.md).

Laravel Zero is an open-source software licensed under the MIT license.

## General Idea

Given a multi-tenant architecture and microservice architecture: typicall you would have various migrations/seeders in each of those microservices depending on the database / entity that concern only that microservice.

The problem is during deploy time,  every backend service needs to be migrated one by one. Having one place to store everything is a good idea so you only have to run it from there once.

This is where dbtool comes in. It allows you to keep track of all migrations/seeders in a multi-tenant architecture.


## Usage

Typically you would rotate through all your tenants and it would run through it them all.

In your migration file, you need to specify if it is for a specific tenant or all tenants. You could make a config file that fetches and stores connection details for each tenant.

the trait `TenantAware` is used to specify if the migration is for a specific tenant or all tenants.

Then, in your migration, you call the trait and init() method, which allows you to determine if you will run it to all tenants or to a specific array. Using the inherited `$this->tenants` you can put that a migration connects to each tenant and runs the migration

## TODO

- [ ] Start an idea
- [ ] Log as JSON to storage path
- [ ] Log the env that a migration was run
- [ ] Create git script to commit and share that JSON log for publishing to a repo (maybe via git hook)
- [ ] Gzip command for backing up log (and sending it to a remote server)
- [ ] Add tests
- [ ] Profit
