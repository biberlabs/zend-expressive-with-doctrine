# Expressive Skeleton with Doctrine

Firstly, Check Zend expressive [document](https://github.com/zendframework/zend-expressive-skeleton#expressive-skeleton-and-installer)

After that, create a `doctrine.local.php` file from `.dist` file. You can use MySQL, PostgreSql or SQLite, ...etc.
Your connection information should be at `doctrine.local.php`

I choose SQLite and create a database with following commands :

```
php vendor/bin/doctrine orm:schema-tool:create
```

This command creates my db file in `data/db/` folder. This folder is ignored by git. So, you should execute above command
to see.
