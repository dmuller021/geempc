<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
</head>
<body>
<h1>Geempc</h1>
<p>'This invoice has been generated by GeemPC</p>
<p>{{  date('m/d/Y') }}</p>
<br>
<br>
<p>RECIPIENT : J. Liu</p>
<p>Markthal Rotterdam nr. 18</p>
<p>VERLENGDE NIEUW 151, 3011 GX Rotterdam</p>
<p>The Netherlands</p>
<br>
<p>INVOICE NR : {{ mt_rand(1000000, 9999999) }}</p>
<p>KVK NR : 5340957486</p>
<p>BRANCH NR : 0000328290</p>
<br>

<p>{{$data[0]['naam']}}</p>
<p>{{$data[0]['email']}}</p>
<p>{{$data[0]['address']}}</p>
<p>The Netherlands</p>
<br>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
</body>
</html>
