<!DOCTYPE html>
<html>
<head>
  <title>JQuery</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="form_ajax.js"></script>
  <style>
    .info {
      box-sizing: content-box;
      display: flex;
      flex-direction: column;
      width: 450px;
      border: black solid 1px;
      padding: 20px;
      border-radius: 5px;
      margin-bottom: 20px;
      -webkit-box-shadow: 6px 6px 8px 0px rgba(34, 60, 80, 0.2);
      -moz-box-shadow: 6px 6px 8px 0px rgba(34, 60, 80, 0.2);
      box-shadow: 6px 6px 8px 0px rgba(34, 60, 80, 0.2);
    }
    body {
      display: flex;
      justify-content: center;
      align-items: flex-start;
      align-items: center;
      flex-direction: column;
    }
    input {
      margin-bottom: 20px;
    }
    input:last-child {
      margin-bottom: 0;
    }
    span.mf-req {
      color: red;
    }

    div.info {
      display: none;
    }
  </style>


</head>
<body>
	<form class="info" action="" method="POST">

		<strong>Ваше имя<span class="mf-req">*</span></strong>
		<input type="text" name="user_name" id="user_name" value="" required>

		<strong>Ваше отчество<span class="mf-req">*</span></strong>
		<input type="text" name="user_second_name" id="user_second_name" value="" required>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong>
		<input type="text" name="user_last_name" id="user_last_name" value="" required>

		<input type="submit" name="submit" id="submit" value="Отправить">
	</form>
	<div class="info" id="result"></div>
</body>
</html>
