

<div class="modal-header">
   <a class="close" data-dismiss="modal" aria-hidden="true" href="#">&times;</a>
  <h3>上传头像</h3>
</div>
<div class="modal-body">
  <div class="imgarea" id="imgArea" >
      <img src="../upload/cover.png" id="target" alt="[Jcrop Example]" />
  </div>

  <div class="preview-container">
      <img src="../upload/cover.png" class="nophoto_l" id="preview" alt="Preview" />
   </div>
    
    <h3>从电脑中选择图片</h3>
    <p>尺寸160x160px</p>
    <p >支持 JPG、GIF、PNG 格式,不要超过320K。</p>
    <form method="post" action="?act=upload" enctype="multipart/form-data">
    <p><input type="file" name="file"><input type="hidden" id="w" name="w" /></p>
    <p><input  type="submit" class="btn" value="上传图片"></p>
    </form>
</div>
<div class="modal-footer">
  <button class="btn" data-dismiss="modal">取消</button>
  <button class="btn  btn-info">保存</button>
</div>
<div class="clearer"></div>
