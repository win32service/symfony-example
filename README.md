Win32Service Bundle Example
===========================

This project use Symfony 4 and the Win32Service Bundle for integrate the Win32Service Extension into the project.

# Requirements

For run this example, you need this:

* [PHP 7.1 or newer](http://windows.php.net)
* The [PHP extension Win32Service 0.4](http://pecl.php.net/package/win32service) or newer
* [Composer](https://getcomposer.org) for install the project dependencies


# Install the project

After install PHP and the Win32Service extension, download this repository.

Unzip the archive content when you want.

> Note: The path nost does not contains space or long name.

Execute the command

```
php composer.phar install -o
```

# Read the code and configuration

## Enable the bundle

Read into the [config/bundles.php](config/bundles.php).

## Configure the bundle

Read the configuration into [the file](config/packages/win32_service.yaml)

## Extends the abstract class

Read the code into [this class](src/WindowsService/FirstService.php)

## Configure the service

Read the configuraion of [the service](config/services.yaml)


# Manage Services

## Register

Register the service before the starting with this command:

```
php bin\console win32service:register
```


## Start

Now start the new service:

```
php bin\console win32service:action start
```


## Stop

After a moment, stop the service:

```
php bin\console win32service:action stop
```



## Unregister

When you want update the service settings or uninstall the project, execute this command :

```
php bin\console win32service:unregister
```

