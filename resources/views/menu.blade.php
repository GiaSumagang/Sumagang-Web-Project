<html>
<head>
<link href="/css/style.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<style>
	header{
		text-align: center;
        font-size: 40px;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
		background-color: #000000a3;
		color: white;x;
		padding: 10px;
    }
    div.img{
        margin: auto;
        padding-top: 2px;
        float: left;
        width: 190px;
    }

div.img img {
  border-radius: 50%;
  width: 50%;

}


</style>
<header>Welcome Gamer!</header>
</head>
<body>
<div class="img">
    <img src="{{url('/css/manta.jpg')}}" alt="Image"/>
    </div>
<div class="img">
    <img src="{{url('/css/childe.jpg')}}" alt="Image"/>
    </div>
<div class="img">
    <img src="{{url('/css/wow.jpg')}}" alt="Image"/>
</div>
<div class="img">
    <img src="{{url('/css/viper.jpg')}}" alt="Image"/>
</div>
<div class="img">
    <img src="{{url('/css/dota.jpg')}}" alt="Image"/>
</div>
<div class="img">
    <img src="{{url('/css/sg.jpg')}}" alt="Image"/>
</div>
<div class="img">
    <img src="{{url('/css/mc.jpg')}}" alt="Image"/>
</div>
<div class="img">
    <img src="{{url('/css/jett.jpg')}}" alt="Image"/>
</div>
<div class="menu">
<a href='./login'><input type='button' value='Already Have an Account?' class='block'/></a>
<br></br>
<a href='./register'><input type='button' value='Sign Up?' class='block'/></a>
</div>
</body>
</html>
