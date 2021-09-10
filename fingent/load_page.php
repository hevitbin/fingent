<?php
  $localhost=mysqli_connect('localhost', 'root', '1234','fingent');

 if(isset($_REQUEST['item_multi']) && $_REQUEST['item_multi']!=''){
   
      
        $ord='';
        $sql_bill="select * from tbl_bill_setup  ";
		$sql_flors  =  mysqli_query($localhost,$sql_bill); 
		 $num_flor  = mysqli_num_rows($sql_flors);
		if($num_flor){	
		while($result_invoice3  = mysqli_fetch_array($sql_flors)) 
				{
                    
                    $ord='FIN-'.$result_invoice3['ts_count'];
                }
                }
         
         
         
        
         $tax=($_REQUEST['tot_multi']*$_REQUEST['item_tax'])/100;
         
         
         $bil_insert=mysqli_query($localhost,"INSERT INTO tbl_billing(`tmd_menu`, `tmd_qty`, `tmd_total` ,tmd_rate,tmd_tax,tm_tax_amt,tm_orderno) VALUES"
                 . " ('".$_REQUEST['item_multi']."','".$_REQUEST['qty_multi']."','".$_REQUEST['tot_multi']."','".$_REQUEST['rate_multi']."','".$_REQUEST['item_tax']."','$tax','$ord' )");
       

}

 if(isset($_REQUEST['set']) && $_REQUEST['set']=='delete_menu'){
   
        
         $bil_insert=mysqli_query($localhost,"Delete from tbl_billing where tmd_id ='".$_REQUEST['id']."' ");
                
       

}
if(isset($_REQUEST['set']) && $_REQUEST['set']=='bill_calculate'){
   
        $bill='';
        $sql_bill="select * from tbl_bill_setup  ";
		$sql_flors  =  mysqli_query($localhost,$sql_bill); 
		 $num_flor  = mysqli_num_rows($sql_flors);
		if($num_flor){	
		while($result_invoice3  = mysqli_fetch_array($sql_flors)) 
				{
                    
                    $bill='FINBILL-'.$result_invoice3['ts_count'];
                }
                }
         
         
         						
if($_REQUEST['dis']>0){
    
    
    
    if($_REQUEST['type']=='p'){
        
         $dis=($_REQUEST['dis']*$_REQUEST['subtot'])/100;
       
         
}else{
    
    $dis=$_REQUEST['dis'];
    
   
}

}else{
    
    $dis=0;
}
         

$subt=($_REQUEST['subtot']-$_REQUEST['tax']);

$fin_total=($_REQUEST['subtot']-$dis);



         $bil_insert=mysqli_query($localhost,"INSERT INTO tbl_invoice(ti_inovice, `ti_orderno`, `ti_subtotal` ,ti_tax,ti_discount,ti_finaltotal) VALUES"
                 . " ('$bill','".$_REQUEST['ord']."','$subt','".$_REQUEST['tax']."','$dis','$fin_total') ");


       

}
if(isset($_REQUEST['set']) && $_REQUEST['set']=='close_invoice'){
    
    $bil_insert1=mysqli_query($localhost,"update tbl_billing set tmd_sync='Y' where tmd_sync ='N' ");
         
    $bil_insert=mysqli_query($localhost,"update tbl_invoice set ti_sync='Y' where ti_sync ='N' ");
    
    
    
      $bil_insert3=mysqli_query($localhost,"update tbl_bill_setup set ts_count=(ts_count+1) ");
      
       
    
    
}