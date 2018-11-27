<!DOCTYPE html>
<html lang="en"  xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta id="token" name="csrf-token" content="{{ csrf_token() }}">
	<link rel="shortcut icon" type="image/png" href="{{asset('img/food.png')}}"/>

	<title>{{isset($article) ? $article->heading : $globalConfigs->site_title}}</title>
	<!-- Font Awesome -->    
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
	<!-- CSS -->
	<link href="{{ mix("build/css/app.css") }}" rel="stylesheet" type="text/css">
	<link href="{{ "/build/css/style.css" }}" rel="stylesheet" type="text/css">
	{{-- <link href="{{ "/build/css/footer.css" }}" rel="stylesheet" type="text/css">  --}}

</head>
<body>
	<div id="l5_blog">