<div class="modal-header"> <a type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</a>
  <h3>添加收藏夹</h3>
</div>
<form class="form-modal"  >
  <div class="modal-body">
    <ul id="shareTab" class="nav nav-tabs">
      <li class="active"><a href="#share_in" data-toggle="tab">站内分享</a></li>
      <li><a href="#share_out" data-toggle="tab">站外分享</a></li>
      <li><a href="#share_bind" data-toggle="tab">微博分享</a></li>
    </ul>
    <div class="tab-content">
      <div id="share_in" class="tab-pane fade in active">
        <div class="control-group">
          <label class="control-label">分享给</label>
          <div class="controls">
            <input type="text" id="search_user" class="input-xlarge" value="" name="introduce" placeholder="请输入用户名" data-provide="typeahead" autocomplete="off">
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="introduce">分享</label>
          <div class="controls">
            <div class="help-blank input-xlarge" >有一份文档http://www.yanfabu.com/wenku/view.php?id=111256推荐给你</div>
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label" for="introduce">补充</label>
          <div class="controls">
            <textarea rows="3" class="input-xlarge" type="text" value=""></textarea>
          </div>
        </div>
      </div>
      
      <div id="share_out" class="tab-pane fade">
        <div class="control-group">
          <label class="control-label">邮箱</label>
          <div class="controls">
            <input type="text" class="input-xlarge" value="" name="introduce" placeholder="请输入邮箱" >
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label" for="introduce">分享</label>
          <div class="controls">
            <div class="help-blank input-xlarge" >有一份文档http://www.yanfabu.com/wenku/view.php?id=111256推荐给你</div>
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label" for="introduce">补充</label>
          <div class="controls">
            <textarea rows="3" class="input-xlarge" type="text" value=""></textarea>
          </div>
        </div>
      </div>
      
      <div id="share_bind" class="tab-pane fade">
        <div class="control-group ">
            <label class="control-label">选择</label>
            <div class="controls">
              <label class="checkbox inline"><input type="checkbox" name="bindShare" checked="checked"><span class="icon-sina-weibo r-font"></span>&nbsp;新浪微博</label>
              <label class="checkbox inline"><input type="checkbox" name="bindShare" checked="checked"><span class="icon-qq l-font"></span>&nbsp;腾讯微博</label>

      </div>
    </div>
      
        <div class="control-group">
          <label class="control-label" for="introduce">分享</label>
          <div class="controls">
            <div class="help-blank input-xlarge" >有一份文档http://www.yanfabu.com/wenku/view.php?id=111256推荐给你</div>
          </div>
        </div>
        
        <div class="control-group">
          <label class="control-label" for="introduce">补充</label>
          <div class="controls">
            <textarea rows="3" class="input-xlarge" type="text" value=""></textarea>
          </div>
        </div>
        
      </div>
      
    </div>
  </div>
  <div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal" aria-hidden="true">取消</a> <a href="#" class="btn btn-info">发送</a> </div>
</form>
