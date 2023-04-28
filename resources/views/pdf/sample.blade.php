<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Voucher</title>
        
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <style>
        body{
            margin:0;
            font-family: system-ui,-apple-system,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans","Liberation Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
        }
        .paper{
            padding:10px;
            height:100vh;
        }
        .bgcolor{
            background:#f8f9fa;
        }
        .f12{
            font-size: 12px;
        }
        .underline1 {
            border: 1px solid black;
            opacity: 1 !important;
            margin:0;
        }
        .boxttd{
            height:110px;
        }
        .col1 {
          flex: 0 0 auto;
          width: 8.33333333%;
        }
        .col2 {
          flex: 0 0 auto;
          width: 16.66666667%;
        }
        .col3 {
          flex: 0 0 auto;
          width: 25%;
        }
        .col4 {
          flex: 0 0 auto;
          width: 33.33333333%;
        }
        .col5 {
          flex: 0 0 auto;
          width: 41.66666667%;
        }
        .col6 {
          flex: 0 0 auto;
          width: 50%;
        }
        .col7 {
          flex: 0 0 auto;
          width: 58.33333333%;
        }
        .col8 {
          flex: 0 0 auto;
          width: 66.66666667%;
        }
        .col9 {
          flex: 0 0 auto;
          width: 75%;
        }
        .col10 {
          flex: 0 0 auto;
          width: 83.33333333%;
        }
        .col11 {
          flex: 0 0 auto;
          width: 91.66666667%;
        }
        .col12 {
          flex: 0 0 auto;
          width: 100%;
        }
        table tr,th,td{
            border-collapse:collapse;
            padding:.5rem .5rem;
        }
    </style>
</head>
<body>
    <div class="paper">
        <div class="content">
            <div class="mb-2">
                <h5 class="fw-bold mb-0">HOTEL VOUCHER</h5>
                <p class="mb-1">PLEASE PRESENT THIS VOUCHER UPON ARRIVAL.</p>
                <hr class="underline1">
            </div>
            <div class="border mb-2 f12 p-2">
                <p class="mb-2">Hotel Information</p>
                <h6 class="fw-bold mb-2">V Hotel Bencoolen</h6>
                <p class="mb-2">Tel. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 65-6-3882233</p>
                <p class="mb-2">Ads. &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 48 Bencoolen Street</p>
            </div>
            <div class="border mb-3 f12 p-2">
                <p class="mb-3">Order Information</p>
                <div class="flex-container headerkop" style="display:table;width:100%">
                    <div class="px-2 flex-item col5" style="display: table-cell">
                        <p class="mb-1 text-secondary">Reference Number</p>
                        <p>1643633061566500864</p>
                    </div>
                    <div class="px-2 flex-item col3"  style=" display:table-cell">
                        <p class="mb-1 text-secondary">Arrival Date</p>
                        <p>2023/06/30</p>
                    </div>  
                    <div class="px-2 flex-item col4" style="display: table-cell">
                        <p class="mb-1 text-secondary">Departure Date</p>
                        <p>2023/07/07</p>
                    </div>
                </div>
                <table class="table table-borderless border-bottom">
                    <thead class="bgcolor">
                        <tr>
                          <th scope="col" class="text-secondary">Unit</th>
                          <th scope="col" class="text-secondary">Room Type / Bed Type</th>
                          <th scope="col" class="text-secondary">Guests(First Name / Last Name)</th>
                          <th scope="col" class="text-secondary">Number</th>
                          <th scope="col" class="text-secondary">Meal Type</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Triple Room<br>
                                1 Double 1 Single
                            </td>
                            <td>Jang / Tjik (Adult)<br>
                                Arief Darmawan / Ang (Adult)<br>
                                Celine / Darmawan (Adult)
                            </td>
                            <td>3 adult(s)</td>
                            <td>Room Only</td>
                        </tr>
                    </tbody>
                </table>
                <p class="mb-2">* Customer Requests</p>
                <div style="word-wrap: break-word;width:100%">
                    <p class="ms-0 mb-1 mx-2 d-inline-block">Non smoking room</p>
                    <p class="mb-1 mx-2 d-inline-block">Internet access</p>
                    <p class="mb-1 mx-2 d-inline-block">Air condition</p>
                    <p class="mb-1 mx-2 d-inline-block">Late check out</p>
                </div>
                <p class="mb-2 text-secondary">The remarks for the establishment are for reference only. We cannot guarantee them.</p>
            </div>
            <div class="mb-3 f12 border-bottom">
                <div class="flex-container headerkop" style="display:table;width:100%">
                    <div class="px-2 flex-item col2" style="display: table-cell">
                        <p class="text-secondary">Reminder:</p>
                    </div>
                    <div class="px-2 flex-item col10"  style=" display:table-cell">
                        <ol class="ps-0">
                            <li class="mb-1"> Upon your arrival please provide valid government-issued ID to the hotel front desk to locate the accurate booking.</li>
                            <li class="mb-1"> Please tell front desk agent your preferred bed type if your booking comes with more than one (e.g. Double or Twin).
                                The final arrangement is fully subject to hotel’s availability.</li>
                            <li class="mb-1">All special requests are not guaranteed. Please confirm your special requests with front desk upon arrival.</li>
                            <li class="mb-1">Please contact your hotel in advance if you need a late check-in after 10 p.m. on your check-in date, or your booking
                                might be canceled by hotel (with no refund).</li>
                            <li class="mb-1">Please be noted that some hotels charge children extra breakfast fee even when your room offers breakfast. The actual
                                situation is subject to the hotel regulations.</li>
                            <li class="mb-1">Regular tax and fees are included in this stay. Addtional charges (City tax (Europe), resort fees, facility fees (North
                                America), municipal fee (Dubai), tourist tax (Malaysia),Sales & Services Tax(SST,Malaysia), etc.) may be charged directly
                                by the hotel; Any other fees occured in the hotel such as addtional service fees, violation fines will also be charged by
                                the hotel directly;</li>
                        </ol>
                    </div>  
                </div> 
            </div>
            <div class="mb-3 f12">
                <div class="flex-container headerkop" style="display:table;width:100%">
                    <div class="px-2 flex-item col2" style="display: table-cell">
                        <div class="boxttd text-center">
                            <img src="{{ $logo }}" height="100%" alt="">
                        </div>
                    </div>
                    <div class="px-2 flex-item col10"  style=" display:table-cell">
                        <p class="mb-1">Should you have any questions about this booking, please don't hesitate to contact us via</p>
                        <div class="flex-container headerkop" style="display:table;width:100%">
                            <div class="flex-item col1" style="display: table-cell;">
                                <p class="mb-1 text-secondary">Tel: </p>
                            </div>
                            <div class="px-2 flex-item col12" style="display: table-cell">
                                <p class="mb-1 ms-1">081333488887</p>
                            </div>
                        </div>
                        <div class="flex-container headerkop" style="display:table;width:100%">
                            <div class="flex-item col1" style="display: table-cell;">
                                <p class="mb-1 text-secondary">Email: </p>
                            </div>
                            <div class="px-2 flex-item col12" style="display: table-cell">
                                <p class="mb-1 ms-1">premium1hotels@gmail.com</p>
                            </div>
                        </div>
                        <div class="flex-container headerkop" style="display:table;width:100%">
                            <div class="flex-item col1" style="display: table-cell;">
                                <p class="mb-1 text-secondary">Addr: </p>
                            </div>
                            <div class="px-2 flex-item col12" style="display: table-cell">
                                <p class="mb-1 ms-1">Villa Sentra Raya A2 / 3 Citraland Surabaya</p>
                            </div>
                        </div>
                    </div>  
                </div> 
            </div>
        </div>
    </div>
</body>
</html>