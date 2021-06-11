<?php
    $title = "admin";
    require_once '../includes/header.php';
    require_once '../includes/connection.php';
    require_once '../includes/function.php';
    

?>
   
   <style>
 body{
     background: black;
 }
 .container{
     margin-top:110px !important;
 }
 .card{
     border:none;
     outline:none;
     background-color:white;
     border-radius:20px;
     transition: transform .3s;
 }
 .card:hover{
     transform: translateY(-15px);
     transition: transform .3s;
 }
.admin span a{
    font-size: 27px;
    font-weight:bold;
    padding-top:0 !important;
    text-decoration:none;
    color:black !important;
}
 .span a:hover{
     color:teal;

 }
 </style>   
    
<div class="container mb-5 mt-5">
<div class="row">
<div class="col-md-4">
<div class="card mt-3">
<div class="admin align-items-center p-2 text-center">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASwAAACoCAMAAABt9SM9AAABZVBMVEVao87////k5+o1NTX4yXr33MlLmLpZWFhSoM3i5+hXos7p6uvn6+xPnsz/4Mmtyt34xW/v8fNmqdH4xW5TnsRcqdabxN/H3eyOutf9zXzR0dHU5fFHRkZQT09Omr7+9ejX4Oe90uGMs83nSzr62aTg08r++vMzLir87NMuMDMhKDDX19d9stT98Nz505XWz8r1/P/75MCauMz73rG2wsvEyMv5z4r74r0yKB/K2eS1tbXr18mlvMy6xMuhxNsoKChKdpETIC7GomeioqLh7/pQh6gfHx92sdYTExOYmJg6RU03Oj1yYkiXflWAf39aja1jYmLht3HlNBsgEgD+6dpBXnArHxVFaX+JiYmw1O49T1t6ho9pW0WmkG1XTj/kuXKEcE6yopaoi1t8m7BNZXRnX1SKl5+ar7xZf5YADSnihVnSSz7YY0Xywpn62tfponLoWUrvk47qa1/mQS32xcHsfHLwnJUY2u3aAAAV/ElEQVR4nO2de3vbNpbGCdluQFDQzZFsKXZ8iW+xZMs32bFsK0ntRPGkTZxOO7m00+lmsrud7ezszmR3P/8CIEACECmSIOXu0+X5J0+UiML56RzgvAcgZVm55ZZbbrnllltuueWWW2655ZZbbrnl9ps09GsPYDI2CbcQnMf4N8cLYTwPM/cKoVMA5joYZn1hY8vAR4g7cwCcooxpwVqhUAUA7JVrOPtvwsTg+WqqLw5BXCvvEZeqhUIt0xCAHceFRexqgFKmYxZDg+elUsd8GMSFwZXrD4HldDKkhQaElYBF7F6a6QvVzrMIzdLMTBcbjoBMVPc8ZwisgjPILlvgckGBBdJMX/istG7opTSiAwKrZPZWNlEBBVZhObvQgqf0gg4Ax7v7S+JD6PRlci3iZinNdANpUJMsJLDOk1+GT1TMlvZ3jwGgSVM4zQ4WXqFXLAKwVqlUpte2NvinlQ0+Aq/PzMz0zMcGL9ZXsYVWCayZs8TfFizzoW9srU0TZ9YAKNI4WEkd69JHMPwAHE5Tq8weH+6wXEz+EahGvexCuhyZEKPvLx0RWvQyySMUswzcOTyerTBXDgFgSWPytYcYHHBYJ+5HMGC7+xv3ksOCRzR/SGTBWq9rMhQ2WV1g2DMKLXxvY3931vfihMMaZAcLNTisfe9j6CetXRlE1gyNiAMIOzMlkzmHwaK0LPZn0ivgqzXFhX0Oq5HdaojmOawt+ZOmd/eSzxkX1McZwor+2UoOC7E3ktjELrVhMi/x3q7sQWWLw5rPEFaHw9pRYB2DpLDQkHl4gF2Xu0lgcVGCz2YYrXWLcT9LxhuDYwXWDoeVor4dGeeQwdoDSwqsaZBUsjNPS103KshEncBTuLqKqNBy10GGnE5bpRa2IMQxFwtkAcWByhLYY7ASBujYz6g5blW6ocCaBbVk18FuMLh/EEdrbIixdCzJ31Kp1SE1Fiux3OBiQUZen1nvHVixNEUNzCqwNtya1KllqHcRh6V+1CyIG72IffnYLY5WzzgrVm1BPFyNcQXYZW/prmLI41IxQoz8U+RoUEf3gMPKsjeACxxWRf1eYs2LRN93jrpnNAKotbzAINUStI7IP8SoANxSgbxr5oLUpN1RXPSCnajroHk1NyocViG7mlSCpWV8I8ZUQXjMlAJioUVipHYxw2b86Mt4UxUNovWLVgAsFqvjrwQb+qw7CVjLQhwqsLbeR3oJ0UUAKZqMeHi+Lv4pxliZTPKoBLKir9NcDJ8E4fstbT13peFylrBcJU3EoVql7EfpHYQPgh1bP+r64VaKIxVRLQSQhqtr4UYDP6sHXgTP7auVoisNs9TRBNZKwS201hRYJ2P0DpmOiKQJnFz02CjFWotQbT3sYuqVj/ZA7/e/e1YP4IXvnSiw1twyq7CSJSy37eApaWGHYXqnfvdurYzxeTzvDmIWSfhgvaTndMAnfAvAnYdTmy+fjOLCV5oDvCbNsOkgtR20LyZY79Tvf/eHVwAcnMVhRaaZ2F8rWREOLrpueeW+eb03GrsboP1iitjm1BNLw4X3tNTIvukgtR32o/VO/fWHR5tTL6pgKQap0sxRopY8Kdgg5oqHzE81zIs3NbBuHk4x29x8e1fBpaud/eybDlLbYUtbeXVY9fqz3z2i43x8DcAImjMSB75rZ+utc5PmNOvyzDCJSec63NMDy34xJWzz0XcyLqzVPlvZNx2ktsOOVtOp4pCgevmID/M50EOr1CNxgC5ETTrEpKg3GiRnxdMXqgU9CaxXj6emJFwfXgtcRBqq49/JvungtR2qmpKuAFmA1q0nZJ4Q9vhyJLRYGOIO/5vprgUPLNoudcem5uEGcF5MqfboA18a0VCThktc7WTYdPDaDrqSlvVO3Xq7uSkP8bEeWryagrxgMt21wDyJBWuRldwAePd4SrdHbiUxonaEjs6w6SC1HbQw9vRO/e7bR5vqAJ/31dDySk+38WcaWqL7J+oNZGkzVlUPLDcbX5KlUVc7Qhpm2nSQ2g7qh3G9Q2oFHRWxlwB8K/vhxQJ2RbHZjrLo0AhWcF2BBcD1aGC5uDbf4vf6nDuBpgMZYrCS3pojY64/+xCAioRWTwstkXfuDk+y3p8/kp4cprB2prBaAuB5MCuK69H3+03FAaGjsz3u4irpoq6kT+agqBUCbFELrZkhHxR2mwZG2++uoC6t0mBAIxoBgMuQwGL2+OlPb5o+r2MuDTPV0QJWQVPSRO88eRkUVDy0WtqCWFp1RyUWMCNY7pXoxiNe1TUCCaxxrIg9fPrDlx6uXS4NM4blth00Jd2c/uMYVGRgd/TQEg0n6P7NaCSMD1kccGdU6QDQD89CD9ePX3JaQkdn2nQIVNLN6a+3t8eP60UbbKjelGbOac3Om8R0hk98kkzsG7ZGlScpSF9GsaK4tqf+5CbGJHQ07dFoSrr5p5+ePowc1Y0eWlTzrGLkLmlk4oF4OEw0UoRLRCetnw6C+g0A9CIDi9lTPuUKWNlGltd24Eq6GQMVsReOHlqU0frQVb9E3NEjLUkOAUCr7NjUdFSlUumMBNZiLFZT2y6s/Uk0HaS2A1fSzR/jsJp6/GpUTjNKZOYpnf3TzUKLntOIX2/B+aJjO2dnZzqp7nkH4j3QihdYUw+bbuUziaaDp6T3hJJufhULFu3UbJyNdOxIAs4s3Sws3ll8legwDm44xYY+V5VK6wcIQzL3zXm9mShbcGHt8C3WTHW0B8tT0s2f4g3r8TsA6rhz3tKmmBIAr+4QW2CHpWLCIgrVrl20CPyudKleTbR54LM/xGP18AcXltDRWcPqqEq6+XXM7/A5uOog2rJbbSnxtQR6iwTWYi9BHuJlZ3jePcCdjiX6PKVvW1KXCGlaPhTWVy6sjUk0HWQl7fY4mh8jqgZhRJC5I0HYOpJgkcl4gYZWgjwk0b1idelBNrqaUpu56BRteWuobj2Jg+vhTwzW7GR0NPn2VCUdExbtvIlLQFx7vyRFFni1mCwPSa1HAst1DNbOj85XIcSDYlvZ74iF6+HXTUVHZ31LCna4OORl1pcxYG0++u6+19PFZXbameM6I1dKmofYtnGv53Ub3DYrebGl/je1Bxlo2x+bXEczaehkW5OKDXxvT7r5JhKWgsqCDXFGeGPp2yWHViGJ89A5RV39qB/UQ8uKgWvb1TtiPzrTzXtqupKOgqXtFFjYP6Xvnj0ncfaO5WE1Zh6SaXOl1l0diUF11nKtXh+Li8OakI6WYAkl/TQJKhoBMizAglTKwxiLN1mQy51RWPi02AqYoAmucJG//aYp6+jMYXltB6Gkx0TWKCqqlzVYifOQVFnl4Sgsmoej4WaNxbWt6Oismw5S24Er6eYYVG9HUNELXIXlYcz1MCQNScC1Q84s0525QFy6js48DXUlvRCCSt8EFubP8Dy0vPWwHzcPnVOrO3ouAhXti7DQCMH1tKnq6GxhIdwRc9ZYJU2iSj9e4F3CSpuH0F7GrdEgwsv2mCPi9aC297aiowvLnQxv0UV4ftldY0nujFHSJKrCUFnj8jDmekio4NboJgckM/zY943i8nS0u11RcJbnM8IFfVRjlfR4VAF56CTMQyINcW804/BK4HIom4br4Y+Kjha4Mpjm4aDgoRqjpKNQEUu7HpI1Bl2M1lSwXGxFKgAFl6ajOa5C+q4WXpZQhYrDzc2Ro1ABl0pZl8KyUzsfnZ547YDq9Tprb4S8u/7sw3P+/XId7R1V9qIr7USPC4VgWJI4jIUqOA9bMfKQdvbIRF2HA6dz0PUyjtKps5eLvT+//vnnt58+fX/Z74eujFb96J/dXrimo31LvSoqgUX905V0wAG7MK+N8hB1Wv13dxYW73z6l+q/fn/559fMnv1M7NOnG4L6ukrj87rfKlILDw98tfvmB4rL19Gac0aApJHSPla77V9QV9LbsVGZ5iGp3AmDdq9/eV3sL9D/rhqBdb145+byst9rk/94Gg5r77jZpLh8He37RX1M29eiHdJ2q9WWYMlKenvqY4I7w8zyEFlO0aasLi+LrVFWDNbC4uLl5fX19WW/XQ4tAtixP4Lrq7+oOpqxoj6m7ZjS3rsGy1fSBFVzFiRYQ4zyEOJW/5ra5bu2Taj4tsDsVb/Y6/f7LWK9Xq/fOw+LD+h2eQmuN9OyjvZhpezFsy2wti2noVDSf1n42GyS9TfBnWEmeQjLFEObmV1kRPrUeuQ122Hvs/eULyHM5Zp6ks3T0czsdvotMb65KsMSSvojO19RWUoQu0H6MCoP5cK/aoMAq9rKEydC07mjnWQ7kWGxCT7lZitvNtCaTfRoxOlud0Wp7CQ56YsD8pBNQzf074Fb00o0aliSwWpoJ9n2RYdGVN1p2w+8jUWVeZlvWWxph//i3BkW6Hm8PFRhBYWWDivk24MNfeR8u0K4lrqxxRuk5IJ8A7+qn+7ej74zTB6wFlraehhwKQVWMTAPtTkr5NuD7/f1c90urAEUtFKW8NALUH7fgH66e/ow0ZMwoAbLWw9D81ANRttujbBqFVtKaIXAwnPqfTvefnQDeZNNOlhIBCj2NvC1NWUt0ZMwgvLw2s/DqMgC7eJ1T2PVfrf3SnktZE3D99ZUWBve5j0Wk02q0oFvRNNs9jbw1XP307uJnoSRPA9VWK+Kl30NlnNzc9OWXwhZ04jaUQbu7Ud3kDczpyrhOSGazfy+AUeHdZzsSRhqHhaj10MVVv/mxtFggVZfYRUKa+9Yh+V6NER8Zk5ZwvPcIwZFkGmnu4l2TwQrPA8ZhKjIAkG1g2Yh5/iweoaf6mgRTlAUWqlKeL4EEkP8tENBO909nUjv0ONoimN6Ho5OzhqsGBYmm/SUELAshASsVCW8V8A74rTDyOluoncSfR1J69LksIJXHKSrHaGj6UkH4WWqEt4v4GuItwG1+6TJCpzsLqGkeZgZrKFW83g6GnvLWLoSXiwTdOrzNvC1cmUnWaIjlodLx5XK2gbg+rC9EJ6HyWEFL89ofidYR5O1Syxj6Up4sUwUnFXkbeCfpNA7lpuHS7N8io3Ow+SwqsHdC13tnHib92hVwEpVwnsdeGcVclh72n3SyfQO9/7YG29kHiaHFdLq0dXOvnv6trACoQcrVQkvCviCcwD5/KUr6enDhLBoHlZoD67Z3AV8PRyTh9nB0qYPoaNXMDzw3ExROngzX8E5h7AcqKSn15I+JhFTWM1/++WXv/47YIUhGJeHBrCCP3VOW5iEji5DeO65maKE92c+CmsQrKST6R3X/bXmX38h9vlvAXmYHlagx7ra8XT0QIaV5gnEXgHvHEGv7aDVK8dJYdE8/A/K6pcH/wlG8lCfng1gBdYy+Eotpj0d3UDwyHMzRQnvF/CFC8jJjYjD6cSPSSR5+PcHBNWDB99s6PrwSm/pG8AKbk/vqaP2pOE8ghfeOpaihJc68C1RjRS1+6STikOLPVn1758fUPsGKHn4qYFGK/i5SDi6BdYyujSsiKPKpIJsebBSlPBeAV8otEXbYURJz24k/QCSh3/7hrL6/A/qG69LP7226gE3HxrACgwPuKElhFA7Q4S9nb40JbxXwDNYtWAlXVlK+JhENw+/+fzg82c2oxdJal81YMi+tgGswPCoaevSsd908GGlKeG9Ap7AIto8REnvJF5CKID/+u9//A9/oPXpPAo/HAWTwwrq0aDOToiOJtHsw0pRwktHaNrhSnor8RKCpD7NVcPC4279NYAVVPih+a1wHS2d5UhRwvs7rO2hD0sthWd3EopDy+/TXDVQ1E9iwJXEsILaDrCxo85Zhz6soQ/L/CCNX8ATWFLbQVbSld0Ng8fCs8eyXw2sGD8e4j3BPSWsMtjYlcd9IjUdJFjGJbxfwBNYXtuhKitpeuLX5LHweNiIQ8oyghVUJbN1QspEoqOrfEpHqxIs4xLeL+AJrCAlPbtGx1Y1+TZQ3EcUGMAK6tGgGuver83637ILi+poCZZxCS8V8BQWXFGVdGWa/9zARH+HxwBWoKRA/EcGpvnghY5egQos4xJePkLTltoObsUye8hGNp/1vRz6IAZjwQRa8JCwuwYfzrrVodR0kGAZl/BSAV9oH/ltB6qkK9PsZ1Kq2f4YUoBlB8uCbiou0eDydPQAwiMJlnEJLxXwhfaFaDswcTh7wkY14RRkgzCAFTYf8lQEJ7O+NGwQHS3VWcYlvFTAF9o90XYgtcPssfvrO5NOQWrahn8sC9dfPBWXjmdFAT+PYE+CZVzCQ/8aBdtrO9DzbOwTJ5+CbBAGsMas/zwVgTjJxpoO0jFQ4+eOIUe6SBv6bQdmt5CC1ExgjVv/kafMXVg1BKXAMu7CywU8U9I1GdZtpCA1E1jj9RdPRQ+WpcAyLOHlAp4paTRwHA7rdlKQmgmsiGKJpyJF4wyQoqONS3i5gGdK2oLWirsZc0spSM0EVlSx5KYiLRSIS7KONi/h5QK+YLfZY9Tw8NS5vRRkozCAFf3wMJqKzumQfudER0sTvGkJr56B57e407taby0F2SgMYM1FDxDWxN2rso42L+HlAp7CEg82ucWwsgxhxRmimEmgCsuwhJcLeKakja6S1iYGy/uAAxmWaQkvF/BMSSPfjC5oZJOBJbki6+iCcQmv3sTaPqpJdnu0JgILyb4cKbAMu/BKAV9oyTc3BB+BmohNBBaWz/HaLdlPsxJeLeALLen8dNX+vw0rsnTA8u0+bRWWUdaoBbwMq2qH31ubuaH5ABoRFlkr4VOJlgbLqIRXC3gZlp3hry7HGEY8QHvVe3PUVlbKg+jggMv+rKLBMirhlQKe3hjrsbKzfkbeOENDAePqnovDs5VyuTxoNOY7wxrCzKBrMR4CZPl347WUCd6shMflYFh2MdNffIg0UgQLFrJBz4xKGTT0bsfTYJk88wgOi4UgWLYTdFfgRG0iZR2cd+wgWIXiMPkG+7z2hIi2e1Nf0RncrtyZmOGBU6QeVTVYTuI+AR7od1u7dVaxmPljzH41wytFRkuts2gLKlk8sH5PVTXG6jaLhokbKSDc2BpxNIm4DDvHWbWX084fdzXL5CJmVyFz4XLg7fwgwTPqEQq5QtW2zUQhcef+/S/G2P3796M9jrrIF3Euonpas8NoVeNFBazthbzfNviZKOLhWAc1d0OcTXiR2MjoQ9NDaO3FaXHiTvCbTYqGRD4K0z01ukgYdd38AmLUIn9o2cKhutVOXK4ZODmKywQVwxVvjKT0DqXViPAXhx7wsRM3XE1ZffGFdJG7xheJGVt4JZzW2OhA4bcz2HbiFqKxn0pQGMOKO0y8HPjQFmb3wrf8kHUV9q6ibRsUDUa49PyZ6JxFvUa2W24F2VVozwCuVIvBRi5n2ElO5mqIjwmX1ASkqKEa9S/YqqF9RFgu2iGW7vEQkRVSnBIpslgzKLRcQx0nzO9i6DYiLDshgJ2ohSGujdTeJt5lchHZ6O/5hDgeCgvNl0Pst9JpCDM8CPM8vG+KYIjdarfv17D/v57nlltuueWWW2655ZZbbrnllltuueWWW2655ZZbbrn9du1/AUJfrd9+GCRTAAAAAElFTkSuQmCC" alt=""  width="320" height="300">
</div>
<div class="p-3 admin text-center text-black mt-3 cursor">
<span class="text-uppercase"><a href="../admin/customer_details_table.php">Customers</a></span>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card mt-3">
<div class="admin align-items-center p-2 text-center">
<img src="data:image/jpeg;base64,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" alt=""  width="320" height="300">
</div>
<div class="p-3 admin text-center text-black mt-3 cursor">
<span class="text-uppercase"><a href="../admin/product_table.php">Products</a></span>
</div>
</div>
</div>




<div class="col-md-4">
<div class="card mt-3">
<div class="admin align-items-center p-2 text-center">
<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQUeho8DQPUrAxe83wyGbQLwtsEw3LjdyuEaQ&usqp=CAU" alt=""  width="320" height="300">
</div>
<div class="p-3 admin text-center text-black mt-3 cursor">
<span class="text-uppercase"><a href="../admin/supplier_table.php">Suppliers</a></span>
</div>
</div>
</div>

</div>
</div>



<?php require_once '../includes/footer.php'; ?>