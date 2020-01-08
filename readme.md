<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>


# laravel basics (by SMB)

### To run use
```
php artisan serve
```
 Note this will not launch the database. if you need to see the data from database host the project on vagrant and create the database
```
mysql create database tododb
```
then do the migration to vagrant

```
php artisan migrate
```
Then launch the app depending on the domain you give it on the homestead or vagrant config file.
##### select on Todo App link and then create your tasks and view added tasks as you add and delete.
## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
