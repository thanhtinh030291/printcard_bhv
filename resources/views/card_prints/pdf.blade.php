<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <head>
        
        <style>
        @font-face {
            font-family: "DejaVu Sans";
            font-style: normal;
            font-weight: 400;
            src: url("/fonts/dejavu-sans/DejaVuSans.ttf");
            /* IE9 Compat Modes */
            src: 
                local("DejaVu Sans"), 
                local("DejaVu Sans"), 
                url("/fonts/dejavu-sans/DejaVuSans.ttf") format("truetype");
            }
            h1, .h1 {
            font-size: 2.5rem;
            }

            h2, .h2 {
            font-size: 2rem;
            }

            h3, .h3 {
            font-size: 1.75rem;
            }

            h4, .h4 {
            font-size: 1.5rem;
            }

            h5, .h5 {
            font-size: 1.25rem;
            }

            h6, .h6 {
            font-size: 1rem;
            }

            
            body { 
            font-family: "DejaVu Sans";
            font-size:
            }
            .font-weight-bold {
                font-size: 16px;
            }
            table { 
                width: 400px; 
                border-collapse: collapse; 
                margin:7px auto;
                }

            /* Zebra striping */
            tr:nth-of-type(odd) { 
                background: #eee; 
                }

            th { 
                background: #5a5858; 
                color: white; 
                font-weight: bold; 
                }

            td, th { 
                padding: 3px; 
                text-align: left; 
                font-size: 14px;
                }
            p {
                margin-top: 5;
                margin-bottom: 0.5rem;
                font-size: 14px;
                
                }
            .t {
                margin-top: 10px;
            }
        </style>
    </head>
</head>
<body>
    <div  style="height: 250px; width:400px; background-image: transparent url('{{ asset('images/1.png')}}') fixed right top no-repeat; background-size: cover">
        <div style="padding-top:165px ;padding-left:20px ; height: 50px" >
            <p style=" font-size: 24px">{{$cardPrint->name}}</p>
            <p style=" font-size: 18px">{{$cardPrint->policy_no}}</p>
        </div>
    </div>
    <br>
    <br>
    <div  style="height: 250px; width:402px; background-image: transparent url('{{ asset('images/2.png')}}') fixed right top no-repeat; background-size: cover">
        <table>
            <tbody>
                <tr>
                    <td style="padding-top:30px ;padding-left:20px ; height: 70px ; width:290px " >
                        <p style=" font-size: 15px">{{$cardPrint->plan_type}}</p>
                        <br>
                        <p style=" font-size: 15px " class="t">{{$cardPrint->text_valid}} {{ Carbon\Carbon::parse($cardPrint->valid_to)->format('d/m/Y')}}</p>
                    </td>
                    <td style="padding-top:40px ;padding-left:20px ; height: 50px ; text-align: center " >
                        <barcode code="{{str_replace("*","",$cardPrint->barcode)}}" type="C93"  height="1.3" />
                        <div style="text-align: center">{{$cardPrint->policy_no}}</div>
                    </td>
                </tr>
            </tbody>
        </table>
        
    </div>

    
</body>
</html>

