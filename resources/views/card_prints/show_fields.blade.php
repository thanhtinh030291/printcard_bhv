<!-- Id Field -->
<table border="0"  background="{{ asset('images/1.png')}}" style="background-repeat: no-repeat; background-size: 100% 100%; min-height : 250px; min-width : 400px">
    <tr style="height: 60% ">
        <td></td>
    </tr>
    <tr>
        <td style=" padding:0 0 0 7%; font-size: 22px;  height: 40px;">{{$cardPrint->name}}</td>
    </tr>
    <tr>
        <td style=" padding: 0 0 16px 7%; font-size: 18px;  height: 40px;">{{$cardPrint->policy_no}}</td>
    </tr>
</table>

<table border="0"  background="{{ asset('images/2.png')}}" style="background-repeat: no-repeat; background-size: 100% 100%; min-height : 250px; min-width : 400px">
    
    <tr>
        <td>
            <p style=" margin-top: 15px; padding: 0 0 0 7%; font-size: 14px; height: 18px;">{{$cardPrint->plan_type}}</p>
            <p style=" padding: 0 0 16px 7%; font-size: 14px;  height: 18px;">{{$cardPrint->text_valid}} {{ Carbon\Carbon::parse($cardPrint->valid_to)->format('d/m/Y')}}</p>
        </td>
        <td>
            <svg id="barcode"></svg>
            <p id ='value_barcode' style="display: none">{{$cardPrint->barcode}}</p
        </td>
    </tr>

    <tr style="height: 60% ">
        <td></td>
    </tr>
</table>
<br>
