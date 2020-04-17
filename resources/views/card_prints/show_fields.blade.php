<!-- Id Field -->
{{-- -	Thẻ Found (Toàn mỹ - ENG): F
-	Thẻ Found (Toàn mỹ - VN): T
-	Thẻ Master (ENG): ME
-	Thẻ Master (VN): MV
-	Thẻ Brics (toan my): BE
-	Thẻ Brics (master): BV --}}

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
<div  style="height: 250px; width:400px; background-image: transparent url('{{ asset('images/1.png')}}') fixed right top no-repeat; background-size: cover">
<table border="0"  background="{{ asset($img)}}" style="background-repeat: no-repeat; background-size: 100% 100%; min-height : 250px; min-width : 900px">
    <tr style="height: 20% ">
        <td>
        </td>
    </tr>
    <tr >
        <td>
            <span style=" padding:0 0 0 7%; font-size: 12px;">{{$lang == 'vn' ? "Họ tên:" : "Name:"}}</span>
            <span style=" padding:0 0 0 2%; font-size: 14px;">{{$cardPrint->name}}<span>
        </td>
    </tr>
    <tr>
        <td>
            <span style=" padding:0 0 0 7%; font-size: 12px;">{{$lang == 'vn' ? "Hợp đồng số:" : "Policy No.:"}}</span>
            <span style=" padding:0 0 0 2%; font-size: 14px;">{{$cardPrint->policy_no}}<span>
        </td>
    </tr>
    <tr>
        <td>
            <span style=" padding:0 0 0 7%; font-size: 12px;">{{$lang == 'vn' ? "Hợp đồng số:" : "Policy No.:"}}</span>
            <span style=" padding:0 0 0 2%; font-size: 14px;">{{$cardPrint->policy_no}}<span>
        </td>
    </tr>
    <tr>
        <td>
            <span style=" padding:0 0 0 7%; font-size: 10px;">{{$lang == 'vn' ? "Hợp đồng số:" : "Policy No.:"}}</span>
            <span style=" padding:0 0 0 2%; font-size: 10px;">{{$cardPrint->policy_no}}<span>
        </td>
    </tr>
    <tr>
        <td>
            <span style=" padding:0 0 0 7%; font-size: 10px;">{{$lang == 'vn' ? "Hợp đồng số:" : "Policy No.:"}}</span>
            <span style=" padding:0 0 0 2%; font-size: 10px;">{{$cardPrint->policy_no}}<span>
        </td>
    </tr>
    <tr>
        <td>
            <span style=" padding:0 0 0 7%; font-size: 10px;">{{$lang == 'vn' ? "Hợp đồng số:" : "Policy No.:"}}</span>
            <span style=" padding:0 0 0 2%; font-size: 10px;">{{$cardPrint->policy_no}}<span>
        </td>
    </tr>
    <tr>
        <td>
            <span style=" padding:0 0 0 7%; font-size: 10px;">{{$lang == 'vn' ? "Hợp đồng số:" : "Policy No.:"}}</span>
            <span style=" padding:0 0 0 2%; font-size: 10px;">{{$cardPrint->policy_no}}<span>
        </td>
    </tr>
</table>

