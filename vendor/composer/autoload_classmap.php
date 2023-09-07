<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'App\\Controller\\CoursesController\\CoursesController' => $baseDir . '/App/Controller/CoursesController.php',
    'App\\Controller\\PageController' => $baseDir . '/App/Controller/PageController.php',
    'App\\Controller\\ServiceController' => $baseDir . '/App/Controller/ServiceController.php',
    'App\\Models\\Courses\\Courses' => $baseDir . '/App/Models/Courses.php',
    'Bramus\\Router\\Router' => $vendorDir . '/bramus/router/src/Bramus/Router/Router.php',
    'Clockwork\\Authentication\\AuthenticatorInterface' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Authentication/AuthenticatorInterface.php',
    'Clockwork\\Authentication\\NullAuthenticator' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Authentication/NullAuthenticator.php',
    'Clockwork\\Authentication\\SimpleAuthenticator' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Authentication/SimpleAuthenticator.php',
    'Clockwork\\Clockwork' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Clockwork.php',
    'Clockwork\\DataSource\\Concerns\\EloquentDetectDuplicateQueries' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/Concerns/EloquentDetectDuplicateQueries.php',
    'Clockwork\\DataSource\\DBALDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/DBALDataSource.php',
    'Clockwork\\DataSource\\DataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/DataSource.php',
    'Clockwork\\DataSource\\DataSourceInterface' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/DataSourceInterface.php',
    'Clockwork\\DataSource\\DoctrineDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/DoctrineDataSource.php',
    'Clockwork\\DataSource\\EloquentDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/EloquentDataSource.php',
    'Clockwork\\DataSource\\LaravelCacheDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/LaravelCacheDataSource.php',
    'Clockwork\\DataSource\\LaravelDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/LaravelDataSource.php',
    'Clockwork\\DataSource\\LaravelEventsDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/LaravelEventsDataSource.php',
    'Clockwork\\DataSource\\LaravelNotificationsDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/LaravelNotificationsDataSource.php',
    'Clockwork\\DataSource\\LaravelQueueDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/LaravelQueueDataSource.php',
    'Clockwork\\DataSource\\LaravelRedisDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/LaravelRedisDataSource.php',
    'Clockwork\\DataSource\\LaravelViewsDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/LaravelViewsDataSource.php',
    'Clockwork\\DataSource\\LumenDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/LumenDataSource.php',
    'Clockwork\\DataSource\\MonologDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/MonologDataSource.php',
    'Clockwork\\DataSource\\PhpDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/PhpDataSource.php',
    'Clockwork\\DataSource\\PsrMessageDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/PsrMessageDataSource.php',
    'Clockwork\\DataSource\\SlimDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/SlimDataSource.php',
    'Clockwork\\DataSource\\SwiftDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/SwiftDataSource.php',
    'Clockwork\\DataSource\\TwigDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/TwigDataSource.php',
    'Clockwork\\DataSource\\XdebugDataSource' => $vendorDir . '/itsgoingd/clockwork/Clockwork/DataSource/XdebugDataSource.php',
    'Clockwork\\Helpers\\Concerns\\ResolvesViewName' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Helpers/Concerns/ResolvesViewName.php',
    'Clockwork\\Helpers\\Serializer' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Helpers/Serializer.php',
    'Clockwork\\Helpers\\ServerTiming' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Helpers/ServerTiming.php',
    'Clockwork\\Helpers\\StackFilter' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Helpers/StackFilter.php',
    'Clockwork\\Helpers\\StackFrame' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Helpers/StackFrame.php',
    'Clockwork\\Helpers\\StackTrace' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Helpers/StackTrace.php',
    'Clockwork\\Request\\IncomingRequest' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/IncomingRequest.php',
    'Clockwork\\Request\\Log' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/Log.php',
    'Clockwork\\Request\\LogLevel' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/LogLevel.php',
    'Clockwork\\Request\\Request' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/Request.php',
    'Clockwork\\Request\\RequestType' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/RequestType.php',
    'Clockwork\\Request\\ShouldCollect' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/ShouldCollect.php',
    'Clockwork\\Request\\ShouldRecord' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/ShouldRecord.php',
    'Clockwork\\Request\\Timeline\\Event' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/Timeline/Event.php',
    'Clockwork\\Request\\Timeline\\Timeline' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/Timeline/Timeline.php',
    'Clockwork\\Request\\UserData' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/UserData.php',
    'Clockwork\\Request\\UserDataItem' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Request/UserDataItem.php',
    'Clockwork\\Storage\\FileStorage' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Storage/FileStorage.php',
    'Clockwork\\Storage\\Search' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Storage/Search.php',
    'Clockwork\\Storage\\SqlSearch' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Storage/SqlSearch.php',
    'Clockwork\\Storage\\SqlStorage' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Storage/SqlStorage.php',
    'Clockwork\\Storage\\Storage' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Storage/Storage.php',
    'Clockwork\\Storage\\StorageInterface' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Storage/StorageInterface.php',
    'Clockwork\\Storage\\SymfonyStorage' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Storage/SymfonyStorage.php',
    'Clockwork\\Support\\Laravel\\ClockworkCleanCommand' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/ClockworkCleanCommand.php',
    'Clockwork\\Support\\Laravel\\ClockworkController' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/ClockworkController.php',
    'Clockwork\\Support\\Laravel\\ClockworkMiddleware' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/ClockworkMiddleware.php',
    'Clockwork\\Support\\Laravel\\ClockworkServiceProvider' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/ClockworkServiceProvider.php',
    'Clockwork\\Support\\Laravel\\ClockworkSupport' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/ClockworkSupport.php',
    'Clockwork\\Support\\Laravel\\Console\\CapturingFormatter' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/Console/CapturingFormatter.php',
    'Clockwork\\Support\\Laravel\\Console\\CapturingLegacyFormatter' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/Console/CapturingLegacyFormatter.php',
    'Clockwork\\Support\\Laravel\\Eloquent\\ResolveModelLegacyScope' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/Eloquent/ResolveModelLegacyScope.php',
    'Clockwork\\Support\\Laravel\\Eloquent\\ResolveModelScope' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/Eloquent/ResolveModelScope.php',
    'Clockwork\\Support\\Laravel\\Facade' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/Facade.php',
    'Clockwork\\Support\\Laravel\\Tests\\UsesClockwork' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Laravel/Tests/UsesClockwork.php',
    'Clockwork\\Support\\Lumen\\ClockworkMiddleware' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Lumen/ClockworkMiddleware.php',
    'Clockwork\\Support\\Lumen\\ClockworkServiceProvider' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Lumen/ClockworkServiceProvider.php',
    'Clockwork\\Support\\Lumen\\ClockworkSupport' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Lumen/ClockworkSupport.php',
    'Clockwork\\Support\\Lumen\\Controller' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Lumen/Controller.php',
    'Clockwork\\Support\\Monolog\\Handler\\ClockworkHandler' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Monolog/Handler/ClockworkHandler.php',
    'Clockwork\\Support\\Monolog\\Monolog2\\ClockworkHandler' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Monolog/Monolog2/ClockworkHandler.php',
    'Clockwork\\Support\\Monolog\\Monolog\\ClockworkHandler' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Monolog/Monolog/ClockworkHandler.php',
    'Clockwork\\Support\\Slim\\ClockworkMiddleware' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Slim/ClockworkMiddleware.php',
    'Clockwork\\Support\\Slim\\Legacy\\ClockworkMiddleware' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Slim/Legacy/ClockworkMiddleware.php',
    'Clockwork\\Support\\Slim\\Old\\ClockworkLogWriter' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Slim/Old/ClockworkLogWriter.php',
    'Clockwork\\Support\\Slim\\Old\\ClockworkMiddleware' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Slim/Old/ClockworkMiddleware.php',
    'Clockwork\\Support\\Swift\\SwiftPluginClockworkTimeline' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Swift/SwiftPluginClockworkTimeline.php',
    'Clockwork\\Support\\Symfony\\ClockworkBundle' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Symfony/ClockworkBundle.php',
    'Clockwork\\Support\\Symfony\\ClockworkConfiguration' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Symfony/ClockworkConfiguration.php',
    'Clockwork\\Support\\Symfony\\ClockworkController' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Symfony/ClockworkController.php',
    'Clockwork\\Support\\Symfony\\ClockworkExtension' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Symfony/ClockworkExtension.php',
    'Clockwork\\Support\\Symfony\\ClockworkFactory' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Symfony/ClockworkFactory.php',
    'Clockwork\\Support\\Symfony\\ClockworkListener' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Symfony/ClockworkListener.php',
    'Clockwork\\Support\\Symfony\\ClockworkLoader' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Symfony/ClockworkLoader.php',
    'Clockwork\\Support\\Symfony\\ClockworkSupport' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Symfony/ClockworkSupport.php',
    'Clockwork\\Support\\Symfony\\ProfileTransformer' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Symfony/ProfileTransformer.php',
    'Clockwork\\Support\\Twig\\ProfilerClockworkDumper' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Twig/ProfilerClockworkDumper.php',
    'Clockwork\\Support\\Vanilla\\Clockwork' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Support/Vanilla/Clockwork.php',
    'Clockwork\\Web\\Web' => $vendorDir . '/itsgoingd/clockwork/Clockwork/Web/Web.php',
    'ComposerAutoloaderInit5afe4b1b92e0c0d0e46130efa5ac4abd' => $vendorDir . '/composer/autoload_real.php',
    'Composer\\Autoload\\ClassLoader' => $vendorDir . '/composer/ClassLoader.php',
    'Composer\\Autoload\\ComposerStaticInit5afe4b1b92e0c0d0e46130efa5ac4abd' => $vendorDir . '/composer/autoload_static.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Core\\Helper' => $baseDir . '/Core/Helper.php',
    'Handler' => $vendorDir . '/bramus/router/tests/RouterTest.php',
    'Hello\\HelloRouterTestController' => $vendorDir . '/bramus/router/tests/RouterTest.php',
    'MultilangRouter' => $vendorDir . '/bramus/router/demo-multilang/index.php',
    'RouterTest' => $vendorDir . '/bramus/router/tests/RouterTest.php',
    'RouterTestController' => $vendorDir . '/bramus/router/tests/RouterTest.php',
);
