<div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
  <h3>添加收藏夹</h3>
</div>
<form class="form-modal"  >
<div class="modal-body">
    <div class="control-group ">
      <label class="control-label">分级</label>
      <div class="controls">
        <select>
          <option value="0">父级</option>
          <option value="0">我的收藏夹</option>
          <option value="0">|_ title1</option>
          <option value="0">|_ title2</option>
        </select>
      </div>
    </div>
    
    <div class="control-group ">
      <label class="control-label">选择颜色</label>
      <div class="controls">
        <label class="radio inline">
          <input type="radio">
          <span class="label">默认</span></label>
        <label class="radio inline">
          <input type="radio">
          <span class="label label-success">&nbsp;&nbsp;&nbsp;&nbsp;</span></label>
        <label class="radio inline">
          <input type="radio">
          <span class="label label-warning">&nbsp;&nbsp;&nbsp;&nbsp;</span></label>
        <label class="radio inline">
          <input type="radio">
          <span class="label label-important">&nbsp;&nbsp;&nbsp;&nbsp;</span></label>
        <label class="radio inline">
          <input type="radio">
          <span class="label label-info">&nbsp;&nbsp;&nbsp;&nbsp;</span></label>
        <label class="radio inline">
          <input type="radio">
          <span class="label label-inverse">&nbsp;&nbsp;&nbsp;&nbsp;</span></label>
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label">收藏夹名称</label>
      <div class="controls">
        <input type="text" class="input-xlarge" value="" name="introduce" placeholder="请输入名称">
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="introduce">文件夹介绍</label>
      <div class="controls">
        <textarea rows="6" class="input-xlarge" placeholder="请输入" type="text" value=""></textarea>
      </div>
    </div>
    
    <div class="control-group">
      <label class="control-label" for="introduce">开放权限</label>
      <div class="controls">
        <label class="radio inline"><input name="open" type="radio" checked="CHECKED">公开</label>
        <label class="radio inline"><input type="radio" name="open">仅对好友开放</label>
        <label class="radio inline"><input type="radio" name="open">私密</label>
      </div>
    </div>
</div>
<div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">取消</a> <a href="#" class="btn btn-info">保存</a> </div>
</form>
