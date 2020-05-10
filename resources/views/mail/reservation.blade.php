
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Yummy P</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      
        
    </head>
    <body>
       
         {{--  new html email template  --}}
         <div style='margin-top:2rem; margin-bottom:2rem; margin-left:2rem; width:730px;'> 
    
            <div style="text-align:center">
               <h2>Yummy P.</h2>
            </div>
        
            <h2 style="color:rgba(0, 0, 0, 0.801)">Hello {{$content['firstname']}} {{$content['lastname']}},</h2>
            <p>Thank you for reserving a table with us, Here is the reservation details: </p>
        
            <table cellspacing="5" cellpadding="5" width="720" style="border: 1px solid black;">
                <tr style="background-color:orangered; color:white">
                    <th style="text-align:left">Name</th>
                    <th>Phone Number</th>
                    <th>Guest Total</th>
                    <th>Time</th>
               </tr>
                <tr>
                    <td width="420">{{$content['firstname']}} {{$content['lastname']}}</td>
                    <td width="100"> {{$content['phonenumber']}}</td>
                    <td width="100">{{$content['gueststotal']}}</td>
                    <td width="100"> {{$content['time']}}pm</td>
                </tr>
              
        
            </table>
             <br>
            <h4>Kind regards, </h4>
            <h4> Yummy P Customer Care </h4>
        </div>

    </body>
</html>