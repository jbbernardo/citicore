<!doctype html>
<html>
	<head>
		<style>
			@import url("https://fonts.googleapis.com/css?family=Source+Serif+Pro");
			
			html {
				font-family: 'Source Serif Pro', serif;
			}
			
			body {
				background: #ececec;
			}

			/** 
			 * COLORS
			 */
			.color--black {
				color: #333;
			}

			.color--gray {
				color: #5f5f5f;
			}

			.color--brown {
				color: #30292a;
			}
			 

			/** 
			 * EMAIL : Template
			 */
			.email-template__holder {
				width: 900px;
				padding: 50px 0px;
				margin: auto;
				background: #ececec;
			}

			.email-template__card {
				width: 80%;
				margin: auto;
				background: #ffffff;
			}

			.email-template__card-limit {
				width: 80%;
				margin: auto;
				background: white;
			}

			.email-template__header {
				text-align: center;
				width: 100%;
				padding-top: 60px;
			}

			.email-template__logo {
				max-width: 150px;
			}

			.email-template__description {
				padding-top: 10px;
				padding-bottom: 60px;
			}

			.email-template__description > * {
				font-size: 1em;
			}

		</style>
	</head>
	<body>
		<div class="email-template__holder">
			<div class="email-template__card">
				<div class="email-template__card-limit">
					<div class="email-template__header">
						<h1>F-Tech</h1>
					</div>
					<div class="email-template__description">
						<br>
						<p class="color--gray">MESSAGE DETAILS</p>
						<br>
						<p class="color--gray">First Name : {$clientName}</p>
						<p class="color--gray">Email : {$clientEmail}</p>
						<!-- <p class="color--gray">Contact : {$phone}</p> -->
						<p class="color--gray">Message : {$clientMessage}</p>
						<br>
						<br>
						<p class="color--gray">Thank You,</p>
						<p class="color--gray">Best Regards</p>
						<p class="color--gray" style="font-weight: bold;">F-Tech Team</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
