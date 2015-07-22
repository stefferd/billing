<!DOCTYPE html>
<html lang="nl" data-ng-app="app">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ URL::asset('assets/lib/angular-material/angular-material.css') }}" />
	<title>Perscriptio</title>
    <base href="/" />
</head>
<body>
    <div ui-view></div>
    <!-- Resources -->
    <script src="{{ URL::asset('assets/lib/angular/angular.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/angular-animate/angular-animate.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/angular-aria/angular-aria.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/angular-material/angular-material.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/angular-sanitize/angular-sanitize.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/angular-ui-router/release/angular-ui-router.js') }}"></script>
    <script src="{{ URL::asset('assets/lib/moment/moment.js') }}"></script>
    <!-- Bootstrap off the app -->
    <script src="{{ URL::asset('assets/app/app.module.js') }}"></script>
    <!-- app.core -->
    <script src="{{ URL::asset('assets/app/core/core.module.js') }}"></script>
    <script src="{{ URL::asset('assets/app/core/config.js') }}"></script>
    <script src="{{ URL::asset('assets/app/core/constants.js') }}"></script>
    <script src="{{ URL::asset('assets/app/core/core.route.js') }}"></script>
    <script src="{{ URL::asset('assets/app/core/dataservice.js') }}"></script>
    <!-- app.blocks -->
    <script src="{{ URL::asset('assets/app/blocks/exception/exception.module.js') }}"></script>
    <script src="{{ URL::asset('assets/app/blocks/exception/exception-handler.provider.js') }}"></script>
    <script src="{{ URL::asset('assets/app/blocks/exception/exception.js') }}"></script>
    <script src="{{ URL::asset('assets/app/blocks/logger/logger.module.js') }}"></script>
    <script src="{{ URL::asset('assets/app/blocks/logger/logger.js') }}"></script>
    <script src="{{ URL::asset('assets/app/blocks/router/router.module.js') }}"></script>
    <script src="{{ URL::asset('assets/app/blocks/router/router-helper.provider.js') }}"></script>
    <!-- app.data -->
    <script src="{{ URL::asset('assets/app/data/data.module.js') }}"></script>
    <script src="{{ URL::asset('assets/app/data/authentication.js') }}"></script>
    <!-- app.dashboard -->
    <script src="{{ URL::asset('assets/app/dashboard/dashboard.module.js') }}"></script>
    <script src="{{ URL::asset('assets/app/dashboard/dashboard.route.js') }}"></script>
    <script src="{{ URL::asset('assets/app/dashboard/dashboard.controller.js') }}"></script>
    <!-- app.layout -->
    <script src="{{ URL::asset('assets/app/layout/layout.module.js') }}"></script>
    <!-- app.login -->
    <script src="{{ URL::asset('assets/app/login/login.module.js') }}"></script>
    <script src="{{ URL::asset('assets/app/login/login.route.js') }}"></script>
    <script src="{{ URL::asset('assets/app/login/login.js') }}"></script>
    <!-- app.widgets -->
    <script src="{{ URL::asset('assets/app/widgets/widgets.module.js') }}"></script>
</body>
</html>
