
<script type="text/javascript" src="<?php echo base_url('template/common/jquery/jquery-2.2.3.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('template/common/ckeditor/ckeditor.js');?>"></script>

<script type="text/javascript">

    function addText()
	{
		//CKEDITOR.instances.IDofEditor.insertText('abc');	
		//CKEDITOR.instances['idofeditor'].insertText('ádadadsa');
		//$('#text').ckeditor().editor.insertText('some text here');
		CKEDITOR.instances['text'].insertText('abc');
	}
	function addHtml()
	{
		CKEDITOR.instances['text'].insertHtml("<img src='http://ảnhđẹppro.vn/images/hinh-nen-hot-girl-quynh-chi-noi-tieng1-1024x768-1413841801.jpg'>");
	}
	
	
</script>
<form name="form1" method="post" action="">
  <label for="text">Test</label>
  <textarea name="text" id="text"></textarea>
   <script type='text/javascript'>CKEDITOR.replace('text');</script>
   <input name="button1" type="button" value="NUT" onClick="return addText();">
   
  <input name="button2" type="button" value="NUT" onClick="return addHtml();">
</form>
<span>[<a href="javascript:addText();">Text</a>]</span>&nbsp;<span>[<a href="javascript:addHtml();">Html</a>]</span>



