# Laravel 演示ioc容器

## 基础环境

- php 7.2
- laravel 8.45.1

## IOC

在 laravel 框架中， 服务容器是整个 laravel 的核心，它提供了整个系统功能及服务的配置，调用。容器按照字面上的理解就是装东西的东西，比如冰箱， 当我们需要冰箱里面的东西的时候直接从里面拿就行了。服务容器也可以这样理解， 当程序开始运行的时候，我们把我们需要的一些服务放到或者注册到 (bind) 到容器里面，当我需要的时候直接取出来 (make) 就行了。上面提到的 bind 和 make 就是注册 和 取出的 两个动作.

