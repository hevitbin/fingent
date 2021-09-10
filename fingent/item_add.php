<?php
session_start();

$localhost=mysqli_connect('localhost', 'root', '1234','fingent'); 

?>
<!doctype html>
<html ng-app="website">
<head>
<meta charset="utf-8">
<title>FINGENT</title>
<meta name="description" content="">
<link href="images/favicon.png" rel="shortcut icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

 <script src="js/jquery-1.10.2.min.js"></script>

<style>#ascrail2002{z-index: 9999999999999999999 !important;left:2px !important }
aside { width: 238px !important}
.min-nav aside {width: 60px !important;}
.ui-autocomplete{z-index:999999 !important;}
.table_report thead th{padding-left:10px !important;}
.table_report thead td{padding-left:10px !important;}
.table_report td{text-align:left !important;padding-left:10px !important;}
.table_report td.feedbackdisplay{text-align:center !important;}
.confrmation_overlay_proce{
	width:100%;
	height:100%;
	position:fixed;
	z-index:9999;
	background-color:rgba(0,0,0,0.8);
	top:0;
	text-align:center;
	line-height: 40;
		}
.confrmation_overlay_proce img{width:100px;height:100px;}
.color_date{background-color: lightgray}
.left_frm_section{width:40%;float:left;}
.form_name_cc{text-align:left;width: 100%; height: auto;}
.form_textbox_cc{text-align:left;width: 100%; height: auto;}
.right_mn_section{width: 58%;float:right;height: 320px; overflow: auto;}
.first_form_contain{padding:2px;}
.add_menu_row{width:100%;height:auto;float:left;border:solid 1px #e5e5e5;padding:3px;}
.menu_add_btn{width:100%;height:29px;float:left;background-color:#02af47;text-align:center;line-height:24px;font-size:15px;margin-top:20px;    border-radius: 5px;}
</style>
<script type="text/javascript" src="jquery.min.js"></script> 


</head>
<body>
    <div style="display:none" class="confrmation_overlay_auth"></div>
    
    
    <input type="hidden" id="menu_add_id">
     <div style="display:none" class="confrmation_overlay_proce"></div>  
    
<div class="olddiv "></div> 
<div id="blr" class="container nopaddding">

<div class="mian">
	<div class="view-container">
		<div style=" top: 58px;"  id="container">
			<div class="breadcrumbs">
				
            
                
			</div>
           
                <div class="content-sec">
                
                	<div style="  padding: 2px;" class="col-lg-12 col-md-12 main_cc">

                       <div class="cc_new_main">


                   
                   <div class="col-md-12 add_btn_cc_2">
                      <div class="btn_cc_2">
                         
                      </div>  
                   </div>
                   <div class="col-md-12 contant_table_cc" id="listall_adv">
                        
                   </div>
                     
                    </div>
                </div>
		</div>
	</div>
</div>
</div>
</div>
 <div class="md-modal md-effect-16" id="modal-17" style="width:auto;top: 8%;">
     <div style="width: 900px" class="md-content">
         <h2 style="background-color: #A91400;color: white;margin-top:0 ">BILLING</h2>
				<div>
                    <div class="col-lg-12 col-md-12 no-padding">
                            
                        <div style="height: 20px ">
                             <strong  id="load_error" style="color:#F00;" ></strong> 
                        </div>   
                       
                      
                        <div class="right_mn_section append_div_main" style="position:relative">
               <div class="right_side_view "></div> 
                        <div class="add_menu_row " id="second_div_main">
                                <div style="width:35%;position:relative" class="first_form_contain"  >
                             	<div class="form_name_cc"> NAME : </span></div>
                                <div class="form_textbox_cc" id="feedback_div">
                                <input onclick="return search_name_show(event);" onfocus="return search_name_show(event);"  onkeyup="return search_name_show(event);"  type="text" class="form-control " id="item"  autocomplete="off" ></div>
                                <div id="name_load" class="customer_list_autoload" style="display:none;width: 96%; top: 52px;">
                              <ul>
                               <li onclick="return name_click();" style="cursor: pointer"> </li>
                             </ul>
                             </div>
                                </div>
                        
                               <div style="width:27%" class="first_form_contain">
                             	<div class="form_name_cc">Qty : </span></div>
                               	 <div   class="form_textbox_cc" id="feedback_div">
                                     <input style="width:42%;float: left" type="text" onkeyup="calc_rate();"  onkeypress="return numdot_dot(this,event);" maxlength="7" class="form-control " id="item_qty"  autocomplete="off" >
                                   
                                     <select style="width:50%;float: right" id="item_tax" class="form-control ">
                                         
                                         <option value="0">TAX 0%</option>
                                         <option value="1">1% </option>
                                          <option value="5">5%</option>
                                          <option value="10">10%</option>
                                     </select>
                                     </div>
                               </div>
                              
                               <div style="width:14%" class="first_form_contain">
                             	<div class="form_name_cc">Unit Price  </span></div>
                               	 <div class="form_textbox_cc" id="feedback_div">
                                     <input maxlength="7" type="text" class="form-control " onkeypress="return numdot_dot(this,event);"  onkeyup="calc_rate();" id="item_rate"  autocomplete="off" ></div>
                               </div>
                              
                              
                              
                               <div style="width:9%" class="first_form_contain">
                                   <a class="plusbtn" style="color:#fff" href="#"><div class="menu_add_btn">ADD</div></a>
                                </div>
                            
                               
                         </div><!--add_menu_row-->

                    </div>

                                    
                    </div>
                                    
                         <table class="table_report scroll tablesorter"  width="100%" border="1" id="listall">
                            <thead>
                              <tr>
                                  <th width="3%" > Id</th>
                                <th  width="10">Name</th>
                                
                                 <th width="10%">Qty</th>
                                 <th width="10%">Unit Price </th>
                                  <th width="10%"> Subtotal </th>
                                   <th width="10%"> Tax Amount </th>
                                 <th width="10%"> Total </th>
                                   <th width="10%"> Action </th>
                              </tr>
                             </thead>
                                 <?php
                                 $sl=1;
	
        $orderno=''; $total=0; $tax=0;
                       $sql_bill="select * from tbl_billing where tmd_sync='N' ";
		$sql_flors  =  mysqli_query($localhost,$sql_bill); 
		 $num_flor  = mysqli_num_rows($sql_flors);
		if($num_flor){	
		while($result  = mysqli_fetch_array($sql_flors)) 
				{
					
		$orderno=$result['tm_orderno'];	
                
                $total=$total+($result['tmd_total']+$result['tm_tax_amt']); 
                
                
                $tax=$tax+$result['tm_tax_amt']; 
	 ?>
    		<tr >
                                 <td   width="5%"><?=$sl++?></td>
                                <td  width="10%"> <?=$result['tmd_menu']?>  </td>
                                
                                  <td   width="10%"><?=$result['tmd_qty']?> </td>
                                  <td     width="10%"><?=$result['tmd_rate']?>  </td> 
                                  
                                   <td     width="10%"><?=$result['tmd_rate']*$result['tmd_qty']?>  </td> 
                                   
                                  
                                   <td     width="10%"><?=$result['tm_tax_amt']?>  </td> 
                                  <td     width="10%"><?=$result['tmd_total']+$result['tm_tax_amt']?>  </td>
                                  <td style="color:red;cursor: pointer" onclick="delete_menu('<?=$result['tmd_id']?>');"    width="10%"> DELETE </td>
                              </tr>
                               
                              <?php } } ?>
                        </table>            
                                    
                                    
                                   
                                    
				</div>
         
         <a style="margin-top: 20px;padding: 10px;float: right ;border: 1px solid ;color: darkred;font-weight: bold" href="#" onclick="invoice('<?=$orderno?>','<?=$total?>','<?=$tax?>');" >GENERATE INVOICE</a>
         
                </div>
		</div>
<div class="md-overlay"></div>

<style>
    .alert_error_popup_all_in_one{
	width: 250px;
	height: 80px;
	position: fixed;
	right: 0px;
        left:0px;
	bottom: 0px;
        top:0px;
        margin: auto;
        
	background-color: #ff0000;
	text-align: center;
	padding: 20px 40px;
	padding-top: 20px;
	z-index: 99999;
	color: #fff;
	font-size: 14px;;
	border-radius: 5px;
	font-family: sans-serif;
}
.alert_error_popup_all_in_one:before{
    width: 100%;
    height: 100%;
    position: fixed;
    left: 0px;
    top: 0px;
    background-color: rgb(0,0,0,0.4);
    content: '';
    z-index: -2;
}
</style>
<strong class="alert_error_popup_all_in_one" style="display: none">

    <input id="discount" value="" placeholder="ENTER DISCOUNT"  type="text">
    
    
    <select id="discount_type">
        
        <option value="p">%</option>
         <option value="v">Value</option>
         
    </select>
    
    <a onclick="invoice_generate()">SUBMIT </a>

</strong>


<script type="text/javascript">

   
      function invoice_generate(){
          
          
         var ord=  $('#discount').attr('ord');
      
      var subtot= $('#discount').attr('total');
      
      var tax= $('#discount').attr('tax');
      
      var dis= $('#discount').val();
      
       var type= $('#discount_type').val();
       
       var datastringnewcard="set=bill_calculate&ord="+ord+"&subtot="+subtot+"&type="+type+"&dis="+dis+"&tax="+tax;
      
        $.ajax({
        type: "POST",
        url: "load_page.php",
        data: datastringnewcard,
        success: function(data)
        {      
           
            
            window.location.href='invoice.php';
        }
    });
    }
      
      
          
          
      
    
    
     function numdot_dot(item,evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode==46)
    {
        var regex = new RegExp(/\./g)
        var count = $(item).val().match(regex).length;
        if (count > 1)
        {
            return false;
        }
    }
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
    
  function invoice(ord,taxamount,tax){
      
      
      
      $('.alert_error_popup_all_in_one').show();
      
      $('#discount').attr('ord',ord);
      
       $('#discount').attr('total',taxamount);
       
        $('#discount').attr('tax',tax);
  }  

    

function delete_menu(e){

        var check = confirm("Delete Item ? ");
	if(check==true)
	{
   
       var datastringnewcard="set=delete_menu&id="+e;
        $.ajax({
        type: "POST",
        url: "load_page.php",
        data: datastringnewcard,
        success: function(data)
        {      
            
            
            location.reload();
        }
    });
    }
}

  
</script>
<script src="bootstrap.min.js"></script>


<script type="text/javascript">
    
    
$(document).ready(function() {

   
    $(".plusbtn").click(function()
        {    
          
         
          var item_multi   =  $('#item').val();
          var rate_multi   =  $('#item_rate').val();
        
           var qty_multi    =  $('#item_qty').val(); 
           
            var tot_multi    =  (rate_multi*qty_multi);
        
            var item_tax    =  $('#item_tax').val(); 
          
             var datastring = "rate_multi="+rate_multi+"&item_multi="+item_multi+"&qty_multi="+qty_multi+"&tot_multi="+tot_multi+"&item_tax="+item_tax;
            
            
            if(rate_multi!='' && item_multi!=''   && qty_multi!='' ){
                  
                  
                 $.ajax({
                 type: "POST",
                 url: "load_page.php",
                 data: datastring,
                 success: function (data)
                 { 
               
                   
              location.reload();
                     
                     
                 }
                 
                 });
                   
                   }else{
                   
       $('#load_error').show();
       
         
          if(rate_multi==''){
       $('#load_error').text('ENTER UNIT PRICE');
        //$("#item_rate").focus();
       }
        
        if(qty_multi==''){
       $('#load_error').text('ENTER QTY');
        //$("#item_qty").focus();
        }
        
          if(item_multi<3){
       $('#load_error').text('ENTER ITEM');
      // $("#item").focus();
        }
        
        $('#load_error').delay(1000).fadeOut('slow');
                    
                   }
        });
    
    
   
   $("#listall").tablesorter();
   
   
}); 
</script>

<div style="position:fixed;width:100%;left:30%;top:0%;z-index:99999;" class="mynewpopupload"  ></div>
</body>
</html>