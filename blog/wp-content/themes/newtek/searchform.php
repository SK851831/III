<form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
    <div><label class="screen-reader-text" for="s"></label>
        <input type="text" value="Search..." name="s" id="s" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;" />        
    </div>
</form>