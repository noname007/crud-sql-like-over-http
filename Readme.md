### 启动项目背景

前端有大量的对数据库数据的crud操作，此时后端起到的作用，更像是根据前端的过来的参数拼装sql，然后封装数据，返回结果，这样一种角色。故希望能做个一工具，提供前端一个类似SQL的操作功能，但是要对其功能进行一些削减。发现现有两个类似功能的工具MySql Http plugin[^1] 、Dreamfactory[^2],但其都直接暴露出来数据库的信息。

[^1]: http://blog.dreamfactory.com/sql-and-rest-working-with-related-data
[^2]: https://mysqlserverteam.com/mysql-5-7-labs-inserting-updating-and-deleting-records-via-http/