<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yummy P.</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      
        
    </head>
    <body>
       
         <div style='margin-top:2rem; margin-bottom:2rem; margin-left:2rem; width:730px;'> 
    

            <div style="display:flex; align-items:center"><h3 style="font-weight:bold">Sender's Name:</h3><h3 style="color:rgba(0, 0, 0, 0.89); padding-left:1rem;">{{$content['firstname']}} {{$content['lastname']}}</h3></div>
            <div style="display:flex; align-items:center"><h3 style="font-weight:bold">Sender's Email:</h3><h3 style="color:rgba(0, 0, 0, 0.89); padding-left:1rem">{{$content['email']}}</h3></div>
            <div style="display:flex; align-items:center; padding-bottom:1rem"><h3 style="font-weight:bold">Sender's Phone Number:</h3><h3 style="color:rgba(0, 0, 0, 0.89) padding-left:1rem">{{$content['phonenumber']}}</h3></div>
            <div><h3 style="font-weight:bold">Message:</h3><p style="font-size:1rem">{{$content['message']}}</p></div>
            

    
            
        </div>

    </body>
</html>