# first
我的 first  php框架 ---用laravel的思想 实现 一个 简单的 API 框架


> 1. index.php  入口页
> 2. autoload自动加载，我这里用的是 composer
> 3. 路由Router 类，实现 controller/action/parm  以及get，post
> 4. 错误报告类 Error，分product，test，development报告不同等级的错误
> 5. Http类 ，模拟 get 和 post方法，这样我在下面可以调用http协议，写一个批量的测试接口类
> 6. 批量测试api接口，建TestController，可以一边写接口，一遍测试，有可见性，提高效率