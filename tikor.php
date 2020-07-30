<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";
echo color("nevy","  [?] accessToken : ");
$token = trim(fgets(STDIN));
//echo "\n".color("nevy","  [?] Mau Redeem Voucher ?: y/n ");
//        $pilihan = trim(fgets(STDIN));
//        if($pilihan == "y" || $pilihan == "Y"){
	    echo color("yellow","  Time  : ".date('[d-m-Y] [H:i:s]')."   \n");
	    echo "\n".color("nevy","  🔒▶️ Claim FOOD COBA");
        echo "\n".color("green","  ⏳︄▶️ Please Wait...  ");
        for($a=1;$a<=3;$a++){
        echo color("green","tunggu");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"COBAGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, '  Promo kamu sudah bisa dipakai.')){
        echo "\n".color("green","  Message: ".$message);
        sleep(10);
        goto gofood;
        }else{
        echo "\n".color("red","  Message: ".$message);
        gofood:
        echo "\n".color("nevy","  🔒▶️ Claim FOOD PESAN");
        echo "\n".color("green","  ⏳︄▶️ Please Wait...  ");
        for($a=1;$a<=3;$a++){
        echo color("green","tunggu");
        sleep(10);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"PESANGOFOOD2107"}');
        $message = fetch_value($code1,'"message":"','"');
        echo "\n".color("green","  Message: ".$message);
        echo "\n".color("nevy","  🔒▶️ Claim FOOD MAKAN");
        echo "\n".color("green","  ⏳︄▶️ Please Wait...  ");
        for($a=1;$a<=3;$a++){
        echo color("green","tunggu");
        sleep(10);
        }
        sleep(3);
        $boba09 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"MAKANGOFOOD2107"}');
        $messageboba09 = fetch_value($boba09,'"message":"','"');
        echo "\n".color("green","  Message: ".$messageboba09);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=30&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        $voucher7 = getStr1('"title":"','",',$cekvoucher,"7");
        $voucher8 = getStr1('"title":"','",',$cekvoucher,"8");
        $voucher9 = getStr1('"title":"','",',$cekvoucher,"9");
        $voucher10 = getStr1('"title":"','",',$cekvoucher,"10");
        $voucher11 = getStr1('"title":"','",',$cekvoucher,"11");
        $voucher12 = getStr1('"title":"','",',$cekvoucher,"12");
        $voucher13 = getStr1('"title":"','",',$cekvoucher,"13");
        $voucher14 = getStr1('"title":"','",',$cekvoucher,"14");
        $voucher15 = getStr1('"title":"','",',$cekvoucher,"15");
        $voucher16 = getStr1('"title":"','",',$cekvoucher,"16");
        $voucher17 = getStr1('"title":"','",',$cekvoucher,"17");
        $voucher18 = getStr1('"title":"','",',$cekvoucher,"18");
        $voucher19 = getStr1('"title":"','",',$cekvoucher,"19");
        $voucher20 = getStr1('"title":"','",',$cekvoucher,"20");
        $voucher21 = getStr1('"title":"','",',$cekvoucher,"21");
        $voucher22 = getStr1('"title":"','",',$cekvoucher,"22");
        $voucher23 = getStr1('"title":"','",',$cekvoucher,"23");
        $voucher24 = getStr1('"title":"','",',$cekvoucher,"24");
        $voucher25 = getStr1('"title":"','",',$cekvoucher,"25");
        $voucher26 = getStr1('"title":"','",',$cekvoucher,"26");
        $voucher27 = getStr1('"title":"','",',$cekvoucher,"27");
        $voucher28 = getStr1('"title":"','",',$cekvoucher,"28");
        $voucher29 = getStr1('"title":"','",',$cekvoucher,"29");
        $voucher30 = getStr1('"title":"','",',$cekvoucher,"30");
        echo "\n".color("nevy","  Total voucher ".$total." : ");
        echo "\n".color("green","   1. ".$voucher1);
        echo "\n".color("yellow","   2. ".$voucher2);
        echo "\n".color("green","   3. ".$voucher3);
        echo "\n".color("yellow","   4. ".$voucher4);
        echo "\n".color("green","   5. ".$voucher5);
        echo "\n".color("yellow","   6. ".$voucher6);
        echo "\n".color("green","   7. ".$voucher7);
        echo "\n".color("yellow","   8. ".$voucher8);
        echo "\n".color("green","   9. ".$voucher9);
        echo "\n".color("yellow","  10. ".$voucher10);
	    echo "\n".color("green","  11. ".$voucher11);
        echo "\n".color("yellow","  12. ".$voucher12);
        echo "\n".color("green","  13. ".$voucher13);
        echo "\n".color("yellow","  14. ".$voucher14);
        echo "\n".color("green","  15. ".$voucher15);
        echo "\n".color("yellow","  16. ".$voucher16);
        echo "\n".color("green","  17. ".$voucher17);
        echo "\n".color("yellow","  18. ".$voucher18);
        echo "\n".color("green","  19. ".$voucher19);
        echo "\n".color("yellow","  20. ".$voucher20);
        echo "\n".color("green","  21. ".$voucher21);
        echo "\n".color("yellow","  22. ".$voucher22);
        echo "\n".color("green","  23. ".$voucher23);
        echo "\n".color("yellow","  24. ".$voucher24);
        echo "\n".color("green","  25. ".$voucher25);
        echo "\n".color("yellow","  26. ".$voucher26);
        echo "\n".color("green","  27. ".$voucher27);
        echo "\n".color("yellow","  28. ".$voucher28);
        echo "\n".color("green","  29. ".$voucher29);
        echo "\n".color("yellow","  30. ".$voucher30);
        }
