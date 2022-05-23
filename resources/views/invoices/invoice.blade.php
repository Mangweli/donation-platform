<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receipt</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,700&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{ url('css/receipt.css')}}">
</head>

<body>


<div class="container">


<div class="frame-one"></div>
<div class="frame-two"></div>



<div class="header">

<div class="image-container">
    <img alt='' src="{{ url('/assets/img/logos/Image1.png.png')}}"/>

</div>

<div class="headers">

<h2>
    Shree Vidya Pitha
</h2>

<div class="mid-line">
</div>

<h4>Shree Mahalkshmi Temple
</h4>



</div>

<div class="image-container">
    <img alt='' src="{{ url('/assets/img/logos/Image2.png')}}"/>
</div>

</div>



<div class="date-receipt">

<div class="date"> <p> <span> Date: </span> <?php echo date("Y/m/d") ?></p>  </div>
&nbsp;
&nbsp;
&nbsp;
<div class="receipt"> <p> <span> Receipt No: </span> <?php echo rand(1,50) ?></p>  </div>


</div>



<div class="details">

<div class="acknowledge">
    <p> <span>Acknowledged with thanks from : </span> Raui Balakashan
</div>

<div class="tel-address">
<div class="telephone">
    <span style="text-align:center">Address:

    </span> 
    <p style="display:flex" >
    

        {{ $user->address }}
        {{-- 6742 knight street - <br> Vancouver <br> B.C V5P 2W3 --}}
    </p>
    

</div>
<div class="address">
<p>
<span>
    Telephone:
</span>
 {{-- 555-888-888 --}}
 {{ $user->phone }}
</p>

</div>

</div>





<div class="amount"> <p> <span> The Sum Of: </span>  {{ $data['amount'] }} &nbsp; Dollars </p> </div>
<div class="comment"> <p> <span> Donation for: </span> {{ $data['donation_for'] }} </p> </div>


<div class="mode-of-payment">
<p>
    <span>

        Mode of Payment : 
</span>
{{ $data['mode_of_payment'] }}
</p>


</div>

<div class="end-line">
</div>

<div class="signature">

<div>
        <p> <span>Signature </span>: </p>
</div>

<div>

<img alt='' src="{{ url('/assets/img/logos/Signature.png')}}"/>
    
</div>

</div>

<div class="charityNo">
    <p>

     Charity No. <span> 89285 1437RR0001 </span> 
</p>
</div>

<div class="footer-details">

<div>

    467 EAST 11<sup>th</sup> AVENUE,VANCOUVER, B.C., CANADA V5T 2C8 <li  style="display:inline-block"> Telephone: (604) 874-0175 </li>
</div>



</div>

</div>





</div>



</div>
    
</body>
</html>