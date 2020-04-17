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
@php
    switch ($cardPrint->type) {
        case 'F':
            $img = 'images/FO-ENG-PCV.jpg';
            $lang = 'en';
            break;
        case 'T':
            $img = 'images/FO-VN-PCV.jpg';
            $lang = 'vn';
            break;
        case 'ME':
            $img = 'images/MA-ENG-PCV.jpg';
            $lang = 'en';
            break;
        case 'MV':
            $img = 'images/MA-VN-PCV.jpg';
            $lang = 'vn';
            break;
        case 'BE':
            $img = 'images/FO-VN-PCV-BR.jpg';
            $lang = 'vn';
            break;
        case 'BV':
            $img = 'images/MA-VN-PCV-BR.jpg';
            $lang = 'vn';
            break;
        default:
            $img = 'images/MA-VN-PCV-BR.jpg';
            $lang = 'vn';
            break;
    }
@endphp
<body>
    
    <div  style="height: 290px; width:900px;
    padding-left: 45px; padding-right: 520px; background-image: transparent url('{{ asset($img)}}') fixed right top no-repeat; background-size: cover">
        <div style="height:112px"></div>
        <div>
            <div style="float: left; width: 30%; font-size: 14px;" >
                {{$lang == 'vn' ? "Họ tên:" : "Name:"}}
            </div>
            <div style="float: left; width: 70% ;font-size: 14px; font-weight: bold ;" >
                {{$cardPrint->name}}
            </div>
        </div>
        <div style=" margin:2px 0px 0px 0px">
            <div style="float: left; width: 30%; font-size: 14px;">
                {{$lang == 'vn' ? "Hợp đồng số:" : "Policy No.:"}}
            </div>
            <div style="float: left; width: 70% ; font-size: 14px;">
                {{$cardPrint->policy_no}}
            </div>
        </div>
        <div style=" margin:2px 0px 0px 0px" >
            <div style="float: left; width: 30% ; font-size: 14px;">
                {{$lang == 'vn' ? "Mã số thành viên:" : "Menber No.:"}}
            </div>
            <div style="float: left; width: 70% ; font-size: 14px;">
                {{$cardPrint->member_no}}
            </div>
        </div>
        <div style=" margin:2px 0px 0px 0px">
            <div style="float: left; width: 30%; font-size: 14px;">
                {{$lang == 'vn' ? "Hiệu lực từ:" : "Valid from:"}}
            </div>
            <div style="float: left; width: 30% ; font-size: 13px;">
                {{$cardPrint->valid_from}}
            </div>
            <div style="float: left; width: 10% ;font-size: 14px;">
                {{$lang == 'vn' ? "đến:" : "to"}}
            </div>
            <div style="float: left; width: 30% ;font-size: 13px;">
                {{$cardPrint->valid_to}}
            </div>
        </div>
        <hr style=" margin: 5px 0px 5px 0px ;border: 0; border-top: 1px black solid; ">
    
        <div class="row" style="font-size: 12px;">
            <div style="float: left; width: 40%">
                {{$lang == 'vn' ? "Chương trình: " : "Plan Type: "}} {{$cardPrint->plan_type}}
            </div>
            <div style="float: left; width: 60% ; ">
                {{$lang == 'vn' ? "Ngoại trú: " : "Outpatient: "}} {{$cardPrint->op}}
            </div>
        </div>
        <div class="row" style="font-size: 12px; margin:2px 0px 0px 0px">
            <div style="float: left; width: 40%">
                {{$lang == 'vn' ? "Đồng thanh toán: " : "Co-payment: "}} {{$cardPrint->co_payment}}
            </div>
            <div style="float: left; width: 60%">
                {{$lang == 'vn' ? "Nha Khoa: " : "Dental: "}} {{$cardPrint->dt}}
            </div>
        </div>
        <div class="row" style="font-size: 12px; margin:2px 0px 0px 0px">
            <div style="float: left; width: 40%">
                {{$lang == 'vn' ? "Mức miễn thưởng: " : "Deductible: "}} {{$cardPrint->deductible}}
            </div>
            <div style="float: left; width: 60%">
                {{$lang == 'vn' ? "Kiểm tra sức khỏe: " : "Medical check-up: "}} {{$cardPrint->medical_check_up}}
            </div>
        </div>
        <hr style=" margin: 5px 0px 5px 0px ;border: 0; border-top: 1px  black solid ;">
        <div class="row" style="font-size: 12px;">
            <div style="float: left; width: 40%">
                {{$lang == 'vn' ? "Thời gian chờ: " : "Waiting Period: "}} {{$cardPrint->waiting_period}}
            </div>
            <div style="float: left; width: 40%">
                {{$cardPrint->exclusion_1}}   {{$cardPrint->exclusion_2}}
            </div>
            <div style="float: right; width: 10%">
                {{$cardPrint->first_year}}
            </div>
        </div>
    </div>
    
    
    

    
</body>
</html>

