<?php
session_start();
$localhost=mysqli_connect('localhost', 'root', '1234','fingent'); 

error_reporting(0);
?>


<html ng-app="website">
<head>
<meta charset="utf-8">
<title>Fingent</title>
<meta name="description" content="">


 <script src="jquery-1.10.2.min.js"></script>

<style>#ascrail2002{z-index: 9999999999999999999 !important;left:2px !important }
aside { width: 238px !important}
.min-nav aside {width: 60px !important;}
.ui-autocomplete{z-index:999999 !important;}
.tablesorter tbody{min-height:420px;}
.contant_table_cc{
	  height: 65vh;
  min-height:460px;
	}
</style>

<style>
.new_overlay{
	 width:100%;
	 height:100%;
	 background-color:rgba(0,0,0,0.8);
	 position:fixed;
	 z-index:999;
	 height: 100%;
	 }
#left_table_scr_cc {
    width: 100%;
    min-height: 380px;
    height: 72vh;}
	.main_banquet_contant_head{background-color:#fff}
	.responstable th, .responstable td{padding:5px;}
	.main_banquet_form_name{padding-top:0}
	.main_banquet_form_textbox_input{height:33px;border: solid 1px #ccc;}
	.menut_add_bq_btn{font-size:15px;height:34px;line-height:34px;margin-top:21px}
	::-webkit-scrollbar{height:20px;}
		.bnq_dtail_table th, td{
	line-height:25px !important;
	font-size:14px !important;
	color:#333;
	padding:5px;
	border:solid 1px #ccc;
	text-align:center;
	min-width:inherit !important;
	}
.bnq_dtail_table th{
	background-color:#000;
	color:#fff;
	border:0;
	font-family:Arial, Helvetica, sans-serif
	}
.banq_inv_right_table th, td{
	line-height:17px;
	font-size:13px;
	color:#333;
	padding:3px;
	border:solid 1px #ccc;
	text-align:center;
	min-width:inherit;
	}
.banq_inv_right_table th{
	background-color: #b25c03;
	color:#fff;
	border:0;
	}
.banq_gen_invoice_right_table_cc .banq_left_mn_detail_contant_bdy {
    min-height: 403px;
    height: 60vh;
}
.form-control{height: 35px !important;}
.form_name_cc{height: 36px !important;}
.md-content button{    margin: 8px 0;}
.del_contain_pop{
	width:130%;
	height:120%;
	background-color:rgba(0,0,0,0.6);
	position:fixed;
	top:0;
	  z-index:999999999999;
	    display:none;

	}
.delete_con_pop{
	 position:fixed;
	 height:60px;
	 width:40%;
	 background-color:#fff;
	  color:#000;
	  text-transform:none;
	 /* margin-top: -32px;*/
	  top: 50%;
	  text-align: center;
	  padding-top: 10px;
	  right:0;
	  left:0;
	  font-weight: bold;
	  font-size:15px;
	  margin:auto;
	    border-radius: 5px;
	  border: solid 1px #07bf29;
	  }
.delete_con_pop a{
	  color: #FFF;
  background-color: #C73500;
  display: inline-block;
padding: 9px 22px;
  border-radius: 7px;
}
.delete_con_pop a:hover{background-color:#F00;color:#fff}  
</style>
</head>
<body>
    <?php

            
 
                                
    ?>
<div class="banq_view_popup_container">
	
    <div class="banq_view_section_1">
    	
        
        <a onclick="close_invoice()"  class="print_button_main"  style="float: left ;margin: 1%;position: absolute;border: solid 1px;cursor: pointer;padding: 5px" /> EXIT </a>
        <div class="print_main_container" id="popdivprint">
    	<div class="print_main_head" style="height: auto;padding-bottom: 5px;">
               
               <div style="width: 30%;float: none;margin: auto" class="company_logo_container"></div>
            
          
             
               
            <span style="width:100%;text-align:center;float:left;font-size: 14px;line-height: 20px;font-family: arial;">
                
                <img width="80px" src="fingent.jpg" /> <br>
                
                <span id="branchname1">FINGENT</span><br/>
                <span id="address1">COCHIN</span><br/>
                
                   
                     <span id="phn1"> 1234567890</span> 
                  
                   
                  
                     <span id="gst"> GST : 12121212 </span> 
                
                   
                   
                  
                   
              
            </span>
            
               <div class="print_comp_main_head" style="width:100%;text-align:center;height: 45px;padding: 0;line-height:53px;font-size:22px">Fingent
                   
               </div>
            <table style="width:100%;float:left">
                <tr>
                <td style="width:100%;border: 0;height: 60px"></td>
                </tr>
            </table>
               
        </div><!--print_main_head-->

        <div class="print_date_main_container" style="height: auto;">
       	 <?php
                                           
                    $dsc=0;      $grthh=0;    $bill='';  $subt='' ; $final='';       
                       $sql_bill6="select * from tbl_invoice where ti_sync='N' ";
		$sql_flors6  =  mysqli_query($localhost,$sql_bill6); 
		 $num_flor6  = mysqli_num_rows($sql_flors6);
		if($num_flor6){	
		while($result_invoice34  = mysqli_fetch_array($sql_flors6)) 
				{
                 
                    $bill=$result_invoice34['ti_inovice'];
                    
                    $dsc=$result_invoice34['ti_discount'];
                    
                  $subt=$result_invoice34['ti_subtotal'];
                  
                  
                  $final=$result_invoice34['ti_finaltotal'];
                  
                }
                }
        	?>
                   <table style="width:100%;float:left">
                   <tr>
                       <td style="width: 15%;text-align:left;border: 0;font-size:15px !important ;font-weight:bold " > Bill No</td>
                       <td style="width: 35%;text-align:left;border: 0" >:  <strong style="border-bottom: 1px #808080 solid;"><?=$bill?></strong></td>
                       
                       
                   </tr>
                    <tr>
                       <td style="width: 15%;text-align:left;border: 0;font-size:15px !important ;font-weight:bold " > Bill Date</td>
                       <td style="width: 35%;text-align:left;border: 0" >:  <strong style="border-bottom: 1px #808080 solid;"><?=date("d-m-Y")?></strong></td>
                      
                       
                   </tr>
                   
                   
               </table>

  <div style="width:25opx;height:70px"></div>
        <div class="center_print_data_container">
        	 <div class="top_date_con_head"></div>
        	<table class="print_detail_table" width="100%" border="0" cellspacing="0">
              <tr>
                <th style="text-align:center" width="8%" scope="col">SL No</th>
                <th style="text-align:center" width="40%"  scope="col"> Name</th>
               
                <th  style="text-align:center" width="13%" scope="col">Qty</th>
                <th style="text-align:center" width="13%" scope="col">Rate</th>
                
                <th  style="text-align:center" width="15%" scope="col">Total Rate</th>

                                              <?php
                                           
                          $dst=0;   $c=1;   $grthh=0;             
                       $sql_bill="select * from tbl_billing where tmd_sync='N' ";
		$sql_flors  =  mysqli_query($localhost,$sql_bill); 
		 $num_flor  = mysqli_num_rows($sql_flors);
		if($num_flor){	
		while($result_invoice3  = mysqli_fetch_array($sql_flors)) 
				{
			
						
                                   
                                     $menu1=  substr($result_invoice3['tmd_menu'],0,20); 
                                     $qty1=$result_invoice3['tmd_qty'];
                                     $unit1=$result_invoice3['tmd_rate'];
                                     $total12=$result_invoice3['tmd_total'];        
                                     ?>
                                        <tr>
                                            <td style="text-align:center"><?=$c++?></td>
                                        	<td style="text-align:center"><?=$menu1?></td>
                                               
                                               
                                               <td style="text-align:center"><?=$qty1?></td>
                                            <td style="text-align:center"><strong ><?=number_format($unit1,$_SESSION['be_decimal'])?></strong></td>
                                             <td style="text-align:center"><strong ><?=number_format($total12,$_SESSION['be_decimal'])?></strong></td>
                                             </tr>
                                            <?php
					}$c++;
		  }
                  
                  
                  
                  
                          
                                ?>
                
                       <tr class="pri_toal">
                <td colspan="4"><div style="float:right" class="sub_total_div">Total Discount</div></td>
                <td><div class="sub_total_div"><?= number_format($subt,$_SESSION['be_decimal'])    ?></div></td>
                </tr>                                 
                                             
                 
                                <tr class="pri_toal">
                <td colspan="4"><div style="float:right" class="sub_total_div">Total Discount</div></td>
                <td><div class="sub_total_div"><?= number_format($dsc,$_SESSION['be_decimal'])    ?></div></td>
                </tr>          
                                             
                                        
                
                
                
                
                <tr class="pri_toal">
                <td colspan="4"><div style="float:right" class="sub_total_div">Grand Total</div></td>
                <td><div class="sub_total_div"><?= number_format($final,$_SESSION['be_decimal'])  ?></div></td>
                </tr>
                
                
            </table>
                  <div style="width:25opx;height:70px"></div>
        </div>
       
        

          

      
    </div><!--print_main_container-->
                                     
     <script type="text/javascript" src="jquery.min.js"></script>   
    <script type="text/javascript">
   function close_invoice(){

       
       var datastringnewcard="set=close_invoice";
        $.ajax({
        type: "POST",
        url: "load_page.php",
        data: datastringnewcard,
        success: function(data)
        {      
            
            
            window.location.href='item_add.php';
        }
    });
    
    
    }

    </script>
    </body>
</html>