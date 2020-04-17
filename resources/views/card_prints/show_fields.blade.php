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
<div id='tablecard' style="height: 250px; width:900px; background-image: url('{{ asset($img)}}') ; background-repeat: no-repeat;padding-top: 100px;
padding-left: 40px; padding-right: 463px; font-family: Tahoma, Geneva, sans-serif;">
    <div class="row" style="font-size: 12px;">
        <div class="col-md-4" >
            {{$lang == 'vn' ? "Họ tên:" : "Name:"}}
        </div>
        <div class="col-md-8" style="padding-left: 0px; font-weight: 900;">
            {{$cardPrint->name}}
        </div>
    </div>
    <div class="row" style="font-size: 12px;">
        <div class="col-md-4">
            {{$lang == 'vn' ? "Hợp đồng số:" : "Policy No.:"}}
        </div>
        <div class="col-md-8" style="padding-left: 0px;">
            {{$cardPrint->policy_no}}
        </div>
    </div>
    <div class="row" style="font-size: 12px;">
        <div class="col-md-4">
            {{$lang == 'vn' ? "Mã số thành viên:" : "Menber No.:"}}
        </div>
        <div class="col-md-8" style="padding-left: 0px;">
            {{$cardPrint->member_no}}
        </div>
    </div>
    <div class="row" style="font-size: 12px;">
        <div class="col-md-4">
            {{$lang == 'vn' ? "Hiệu lực từ:" : "Valid from:"}}
        </div>
        <div class="col-md-3" style="font-size: 12px; padding-left: 0px; padding-right: 0px;">
            {{$cardPrint->valid_from}}
        </div>
        <div class="col-md-1 p-0">
            {{$lang == 'vn' ? "đến:" : "to"}}
        </div>
        <div class="col-md-4" style="font-size: 12px;">
            {{$cardPrint->valid_to}}
        </div>
    </div>
    <hr style=" margin: 0px ;border: 0; border-top: 1px solid #191818; margin-top: 3px;">

    <div class="row" style="font-size: 11px; margin-top: 3px;">
        <div class="col-md-5">
            {{$lang == 'vn' ? "Chương trình: " : "Plan Type: "}} {{$cardPrint->plan_type}}
        </div>
        <div class="col-md-7">
            {{$lang == 'vn' ? "Ngoại trú: " : "Outpatient: "}} {{$cardPrint->op}}
        </div>
    </div>
    <div class="row" style="font-size: 11px;">
        <div class="col-md-5">
            {{$lang == 'vn' ? "Đồng thanh toán: " : "Co-payment: "}} {{$cardPrint->co_payment}}
        </div>
        <div class="col-md-7">
            {{$lang == 'vn' ? "Nha Khoa: " : "Dental: "}} {{$cardPrint->dt}}
        </div>
    </div>
    <div class="row" style="font-size: 11px;">
        <div class="col-md-5">
            {{$lang == 'vn' ? "Mức miễn thưởng: " : "Deductible: "}} {{$cardPrint->deductible}}
        </div>
        <div class="col-md-7">
            {{$lang == 'vn' ? "Kiểm tra sức khỏe: " : "Medical check-up: "}} {{$cardPrint->medical_check_up}}
        </div>
    </div>
    <hr style=" margin: 0px ;border: 0; border-top: 1px solid #191818; margin-top: 3px;">
    <div class="row" style="font-size: 11px;">
        <div class="col-md-5">
            {{$lang == 'vn' ? "Thời gian chờ: " : "Waiting Period: "}} {{$cardPrint->waiting_period}}
        </div>
        <div class="col-md-5">
            {{$cardPrint->exclusion_1}}   {{$cardPrint->exclusion_2}}
        </div>
        <div class="col-md-2">
            {{$cardPrint->first_year}}
        </div>
    </div>
</div>
