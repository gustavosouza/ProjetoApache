<!DOCTYPE html>
<html>
<head>
    <title>Recife Apache Football</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core CSS - Include with every page -->
    <link rel="icon" href="/images/icon-recifeapaches.jpg" type="image/x-icon" />
    <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="/css/msbm.css" rel="stylesheet" type="text/css">
    <link href="/css/footer.css" rel="stylesheet" type="text/css">
    <link href="/css/chosen.css" rel="stylesheet" type="text/css">

</head>

<!-- <body style="background-color: rgba(174, 26, 9, 0.8)"> -->
<body style="background-color: #CCCCCC">

@yield('menu')

<div class="container bg-master" style="padding-top:100px;">

	@yield('conteudo')
	
	<div class="row" style="padding-bottom:50px;">
		<div class="col-md-12">
		</div>
	</div>

</div>

@yield('footer')

  <!-- Core Scripts - Include with every page -->
  <script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
  <script src="/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="/js/jquery.maskedinput.js" type="text/javascript"></script>
  <script src="/js/jquery.maskMoney-3.0.2.js" type="text/javascript"></script>
  <script src="/js/chosen.jquery.js" type="text/javascript"></script>

  <!-- MSBM Code Generator Scripts - Include with every page -->
  <script src="/js/msbmcg.js" type="text/javascript"></script>

</body>

</html>