<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Start META -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="keywords" content="CATOCA DATABASE" /> 
	<meta name="description" content="CATOCA DATABASE" />
	<!-- TITLE -->
	<title>CATOCA DATABASE</title>
	<link rel="shortcut icon" href="../png/favicon.ico" type="image/png">
	<!-- Подключения таблицы стилей Bootstrap 3 -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<!-- Подключение темы со стилями Bootstrap 3 -->
	<link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.min.css">
	<!-- Подключение таблицы стилей, в которой будем прописывать свои стили -->
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<!-- Подключение библиотеки jQuery для работы скриптов Bootstrap 3 -->
	<script src="../js/jquery-3.3.1.min.js"></script>
	<!-- Подключение скриптов Bootstrap 3 -->
	<script src="../js/bootstrap.min.js"></script>
	<!-- Start Sheets CSS -->
	<link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="container-fluid mainMenu">
	<div class="row no-gutters">
		<div class="col-lg-1 logoMain">
			<img class="rounded mx-auto d-block logoMain" src="../png/logoMain90x45.svg" alt="logo">
		</div>
		<div class="col-lg-10 bookmarks">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
				<a class="nav-item nav-link active" id="nav-input-tab" data-toggle="tab" href="#nav-input" role="tab" aria-controls="nav-input" aria-selected="true">Ввод данных</a>
				<a class="nav-item nav-link" id="nav-report-tab" data-toggle="tab" href="#nav-report" role="tab" aria-controls="nav-report" aria-selected="false">Отчеты</a>
				</div>
			</nav> 
		</div>
		<div class="col-lg-1 logout">
			<a href="/?mode=auth&exit=true">Выход</a>
		</div>
	</div>
</div>
<div class="row">
<div class="col-lg-2 asideMenu"> 
	<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-input" role="tabpanel" aria-labelledby="nav-input-tab"><?php require ('../php/asideInput.php')?></div>
	<div class="tab-pane fade" id="nav-report" role="tabpanel" aria-labelledby="nav-report-tab"><?php require ('../php/asideReport.php')?></div>
</div>
</div>
<div class="col-lg-10 mainArea">

    <div class="col-12">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade" id="v-pills-common" role="tabpanel" aria-labelledby="v-pills-common-tab"><?php require ('../php/commonInput.php')?></div>
      <div class="tab-pane fade" id="v-pills-doc" role="tabpanel" aria-labelledby="v-pills-doc-tab"><?php require ('../php/docInput.php')?></div>
      <div class="tab-pane fade" id="v-pills-simple" role="tabpanel" aria-labelledby="v-pills-simple-tab">333</div>
      <div class="tab-pane fade" id="v-pills-passport" role="tabpanel" aria-labelledby="v-pills-passport-tab">444</div>
      <div class="tab-pane fade" id="v-pills-catalogue" role="tabpanel" aria-labelledby="v-pills-catalogue-tab">555</div>
      <div class="tab-pane fade" id="v-pills-monthReport" role="tabpanel" aria-labelledby="v-pills-monthReport-tab">666</div>
  
    </div>
    </div>

  </div>



	
</div>
</div>
</div>
</body>
</html>