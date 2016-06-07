<h1>Settings</h1>

<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
  <li><a data-toggle="tab" href="#employeers">Employeers</a></li>
  <li><a data-toggle="tab" href="#departments">Departments</a></li>
  <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
  <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
    <h3>HOME</h3>
    <p>Some content.</p>
  </div>
  <div id="employeers" class="tab-pane fade">
    <h3>List of employeers</h3>
    <p>Some content.</p>
    <?php /*$this->view = new Controller_View();$this->view->getContent('mainpage.tpl');*/?>
  </div>
  <div id="departments" class="tab-pane fade">
    <h3>List of departments</h3>
    <p>Some content.</p>
  </div>
  <div id="menu1" class="tab-pane fade">
    <h3>Menu 1</h3>

        <form>
          <fieldset class="form-group  col-xs-6 col-md-4">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
            <small class="text-muted">We'll never share your email with anyone else.</small>
          </fieldset>
          <fieldset class="form-group  col-xs-6 col-md-4">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
          </fieldset>
          <fieldset class="form-group  col-xs-6 col-md-4">
            <label for="exampleSelect1">Example select</label>
            <select class="form-control" id="exampleSelect1">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </fieldset>
          <fieldset class="form-group col-xs-6 col-md-4">
            <label for="exampleSelect2">Example multiple select</label>
            <select multiple class="form-control" id="exampleSelect2">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
            </select>
          </fieldset>
          <fieldset class="form-group  col-xs-6 col-md-4">
            <label for="exampleTextarea">Example textarea</label>
            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
          </fieldset>
          <fieldset class="form-group col-xs-6 col-md-4">
            <label for="exampleInputFile">File input</label>
            <input type="file" class="form-control-file" id="exampleInputFile">
            <small class="text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
          </fieldset>
          <div class="radio col-xs-6 col-md-4">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
              Option one is this and that&mdash;be sure to include why it's great
            </label>
          </div>
          <div class="radio col-xs-6 col-md-4">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
              Option two can be something else and selecting it will deselect option one
            </label>
          </div>
          <div class="radio  col-xs-6 col-md-4 disabled">
            <label>
              <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
              Option three is disabled
            </label>
          </div>
          <div class="checkbox col-xs-6 col-md-4">
            <label>
              <input type="checkbox"> Check me out
            </label>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

  </div>
  <div id="menu2" class="tab-pane fade">
    <h3>List of categories</h3>

    <p><a class="btn btn-primary" href="">Add category</a></p>

    <table class="table table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Category name</th>
            <th>Description</th>
            <th>Edit / Delete</th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($item as $key => $value) { ?>
            <tr>
              <td><?php echo $value->category_id;?></td>
              <td><?php echo $value->category_name;?></td>
              <td><?php echo $value->category_description;?></td>
              <td>
                <p>
                  <a class="btn btn-warning" href="">Edit</a>
                  <a class="btn btn-danger" href="">Delete</a>
                </p>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
  </div>
</div>