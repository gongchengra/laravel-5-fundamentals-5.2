<html>

	<head>
		<link rel="stylesheet" href="app/libs/bootstrap/dist/css/bootstrap.min.css">
	</head>

	<body ng-app="chatApp">

		<div class="page-header">
			<h1> Chat application </h1>
		</div>

		<div ng-view class="container"></div>

		<script src="app/libs/angular/angular.min.js"></script>
		<script src="app/libs/angular-route/angular-route.min.js"></script>

		<script src="app/scripts/app.js"></script>
		<script src="app/scripts/controllers/chat-rooms.js"></script>
		<script src="app/scripts/controllers/chat-room.js"></script>

		<script src="app/scripts/services/message.js"></script>
		<script src="app/scripts/services/chat-room.js"></script>
		<script src="app/scripts/services/webservice.js"></script>
	</body>
</html>
