<?php /* Smarty version 2.6.19, created on 2009-06-08 01:36:27
         compiled from admin-changepwd.phtml */ ?>
    
    <div style="width:98%;  border:1px solid #006D84">
        <div style="width:100%; height:25px; border:1px solid #FFFFFF; background-color:#4995A8; text-align:left; padding-top:5px; padding-left:20px; color:#FFFFFF">
            <li style="display:inline; float:left"><strong>�޸Ĺ���Ա����</strong></li>
        </div>
        
        <div style="width:100%; height:120px; text-align:left; padding-top:5px; padding-left:20px; padding-left:70px">

          <form name="form_adminpwd" method="post" action="<?php echo $this->_reg_objects['util'][0]->baseUrl();?>
/admin-changepwd.php" onsubmit="return chkChangePwd(this)">
            <div style="width:100%; text-align:left; padding-top:5px; padding-left:50px">
                  ԭ���룺&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="oldpwd" size="30" class="input"/><br /><br />
                   �����룺&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="pwd1" size="30" class="input"/><br /><br /> 
                   ȷ�������룺<input type="password" name="pwd2" size="30" class="input"/><br /><br />             
                  <input type="submit" value="����" />&nbsp;&nbsp;<input type="reset" value="����" />
            </div> 
            </form>  
    
        </div>    
    </div>