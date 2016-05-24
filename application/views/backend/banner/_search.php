<ul class="ajax_list">
  <li class="search_bar">
    <form name="fr_search" method="post" action="<?php echo base_url('admin/banner/search');?>">
      <input type="text" name="keyword" class="txtsearch" onClick="this.value = ''" value="<?php echo $this->session->userdata('keyword_banner');?>" />
      <input type="submit" name="btn_search" class="btn_search_bar" value="" />
      <input type="hidden" name="searchSubmit" value="searchSubmit" />
    </form>
  </li>
</ul>
