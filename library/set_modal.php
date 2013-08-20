<div class="modal-header">
   <a class="close" data-dismiss="modal" aria-hidden="true" href="#">&times;</a>
  <h3>设置权限</h3>
</div>
<form class="form-modal"  >
<div class="modal-body">
    <div class="control-group ">
        <label class="control-label">权限</label>
        <div class="controls">
           <span class="radio inline">
             <input name="sex" type="radio" id="sex1" value="1" checked="checked">
             <label>管理员</label>
             <div class="help-block">可以新建讨论话题<br/>添加新成员<br/>踢出除群主以外成员</div>
          </span>
          <span class="radio inline">
              <input type="radio" value="2" name="sex" id="sex2"><label>普通成员</label>
              <div class="help-block">可以参与话题讨论<br/>可邀请新成员<br/>&nbsp;</div>
          </span>
      </div>
    </div>
</div>
<div class="modal-footer">
  <a class="btn" data-dismiss="modal" aria-hidden="true">取消</a>
  <button class="btn  btn-info">提交</button>
</div>
</form>
