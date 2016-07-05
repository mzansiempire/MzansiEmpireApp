<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<div>
<p> You requested a password recet on your account, see info below.</p>
			To reset your password, complete this form: {{ URL::to('user/reset', array($token)) }}.
<p>
Regards

<h3>Mzansi Empire Team.</h3>
</P>
		</div>
	</body>
</html>